<?php
/**
 * Created by PhpStorm.
 * User: praveesh
 * Date: 19/10/16
 * Time: 9:35 PM
 */

namespace AppBundle\Helper;


class Pagination
{

    /*
     * Class Constants
     */
    const SORT_ASC = 'ASC';
    const SORT_DESC = 'DESC';


    private $variablesInitialized = false;
    private $conf = array();
    private $paginationDefaults = array();
    private $maxResultsPerPage = 100;
    private $pageNo = 1;
    private $sortBy = '';
    private $sortCol = '';
    private $orderBy = '';
    private $offset = false;
    private $default = '';
    private $totalResults = 0;
    private $totalPages = 0;
    private $url = '';
    private $isSearch = false;
    private $isFilterable = false;
    private $searchTerm = '';
    private $searchableColumn = '';
    private $filterConf = '';
    private $filterTerm = '';

    public function __construct($path, $paginationDefaults = array())
    {
        // Set Current Url
        $this->url = $path;
        $this->paginationDefaults = $paginationDefaults;
    }

    /* Intializing The Variables */

    private function _initializeVariables()
    {
        $this->pageNo = filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT); //Page Number
        $this->sortBy = filter_input(INPUT_GET, 'col', FILTER_SANITIZE_STRING); // Sorted Column Name
        $this->orderBy = filter_input(INPUT_GET, '_sort', FILTER_SANITIZE_STRING); // Order By of Column -  ASC/DESC
        $this->searchTerm = filter_input(INPUT_GET, '_name', FILTER_SANITIZE_STRING); // Search Term


        // check pagination defaults
        $this->setDefaults();

        /* Check Search Term Exist or Not */
        if ($this->searchTerm) {
            $this->isSearch = true;
        }

        /* Check Filter Term Exist or Not */
        if ($this->filterTerm) {
            $this->isFilterable = true;
        }


        $this->pageNo = (!$this->pageNo || $this->pageNo < 1) ? 1 : $this->pageNo;
        $this->orderBy = $this->orderBy !== 'DESC' ? 'ASC' : 'DESC';

        if ($this->sortBy && array_key_exists($this->sortBy, $this->conf)) {
            // Do nothing
        } else {
            $this->sortBy = $this->default;
        }

        $this->sortCol = $this->conf[$this->sortBy]['colName'];

        $this->offset = ($this->pageNo - 1) * $this->maxResultsPerPage;

        $this->variablesInitialized = true;
    }

    /**
     * Method to set pagination defaults
     */
    private function setDefaults()
    {
        if(!$this->pageNo) {
            $this->pageNo = isset($this->paginationDefaults['p']) ? $this->paginationDefaults['p'] : '';
        }
        if(!$this->sortBy) {
            $this->sortBy = isset($this->paginationDefaults['col']) ? $this->paginationDefaults['col'] : '';
        }
        if(!$this->orderBy) {
            $this->orderBy = isset($this->paginationDefaults['order']) ? $this->paginationDefaults['order'] : '';
        }
        if(!$this->searchTerm) {
            $this->searchTerm = isset($this->paginationDefaults['s']) ? $this->paginationDefaults['s'] : '';
        }
        if(!$this->filterTerm) {
            $this->filterTerm = isset($this->paginationDefaults['f']) ? $this->paginationDefaults['f'] : '';
        }
    }

    public function init()
    {
        $this->_initializeVariables();
    }

// -------------------------- Getters and Setters --------------------------
    public function setConf($key, $options)
    {
        if (!array_key_exists('default', $options)) {
            throw new \Exception('setConf Options "default" not set');
        }
        if (!array_key_exists('colName', $options)) {
            throw new \Exception('setConf Options "colName" not set');
        }
        if (!array_key_exists('displayName', $options)) {
            throw new \Exception('setConf Options "displayName" not set');
        }

        if ($options['searchable']) {
            $this->searchableColumn[] = $options['colName'];
        }

//        if ($options['filterable']) {
//            $this->filterConf[] = $options['filterConf'];
//        }

        $this->conf[$key] = $options;


        if ($options['default']) {
            $this->default = $key;
        }
        return $this;
    }

    /* Set Max Result Per Page */

    public function setMaxResultsPerPage($num)
    {
        $this->maxResultsPerPage = $num;
    }

    /* Get Max Result Per Page */

    public function getMaxResultsPerPage()
    {
        return $this->maxResultsPerPage;
    }

    /* Get Offset For Query */

    public function getOffset()
    {
        return $this->offset;
    }

    /* Set Total Number Of Pages */

    public function setTotalResults($total)
    {
        $this->totalResults = $total;
        $this->totalPages = ceil($this->totalResults / $this->maxResultsPerPage);
    }

    /* Get Current Sorted Column Name */

    public function getSortCol()
    {

        if (!$this->variablesInitialized) {
            throw new \Exception('Pagination not initialized');
        }

        return $this->sortCol;
    }

    /* Get Current Order By */

    public function getOrderBy()
    {
        if (!$this->variablesInitialized) {
            throw new \Exception('Pagination not initialized');
        }

        return $this->orderBy;
    }

    /* Get Current Url */

    public function getUrl()
    {
        return $this->url;
    }

    /* Get Current Page Number */

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /* Get Total Number Of Pages */

    public function getTotalPages()
    {
        return $this->totalPages;
    }

    public function getSortBy()
    {

        return $this->sortBy;
    }

    /* Get Total Results */

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function getConf()
    {

        return $this->conf;
    }

    public function getSortedColumnDisplayName()
    {
        return $this->conf[$this->sortBy]['displayName']
        . ' [' . ($this->orderBy === 'ASC' ? 'ascending' : 'descending') . ']';
    }

    public function isSetSearch()
    {
        return $this->isSearch;
    }

    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    public function getSearchableQuery(&$qbTotal)
    {
        if ($this->isSearch) {
            $total = count($this->searchableColumn);
            $searchString = "";
            $i = 1;
            foreach ($this->searchableColumn as $col) {
                if ($total == $i)
                    $searchString .= $col . ' LIKE :search ';
                else
                    $searchString .= $col . ' LIKE :search OR ';

                $i++;
            }
            $qbTotal->andWhere($searchString)
                ->setParameter('search', '%' . $this->searchTerm . '%');
        }
    }

    public function isSetFilter()
    {
        return $this->isFilterable;
    }

    public function getFilterTerm()
    {
        return $this->filterTerm;
    }

    public function getFilterConf()
    {
        return $this->filterConf;
    }

    public function setSortOrder($order)
    {
        $this->orderBy = $order;
    }
}