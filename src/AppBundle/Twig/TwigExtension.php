<?php

namespace AppBundle\Twig;

use AppBundle\Helper\Pagination;


class TwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'paginationTableHeader' => new \Twig_Filter_Method($this, 'paginationTableHeader'),
            'paginationPageControl' => new \Twig_Filter_Method($this, 'paginationPageControl'),
            'paginationStats' => new \Twig_Filter_Method($this, 'paginationStats'),
            'paginationInfo' => new \Twig_Filter_Method($this, 'paginationInfo'),

        );
    }


    public function paginationStats(Pagination $pagination)
    {
        $html = '';
        $html .= '<div class="row" style="margin-top: 20px;">';

        if ($pagination->getTotalPages() != 0) {
            $html .= '<div class="col-md-4" style="text-align: left; margin-bottom: 0px;">Page <span>'
                . $pagination->getPageNo() . '</span> of <span>' . $pagination->getTotalPages() . '</span></div>';
        } else {
            $html .= '<div class="col-md-4" style="text-align: left; margin-bottom: 0px;">Page <span>0</span> of <span>0</span></div>';
        }

        $html .= '<div class="col-md-4" style="text-align: center; margin-bottom: 0px;">Ordered By: <span>'
            . $pagination->getSortedColumnDisplayName() . '</span></div>';

        if ($pagination->getMaxResultsPerPage() < $pagination->getTotalResults()) {
            $html .= '<div class="col-md-4" style="text-align: right; margin-bottom: 0px;">Showing <span>'
                . $pagination->getMaxResultsPerPage() . '</span> of <span>'
                . $pagination->getTotalResults() . '</span></div>';
        } else {
            $html .= '<div class="col-md-4" style="text-align: right; margin-bottom: 0px;">Showing <span>'
                . $pagination->getTotalResults() . '</span> of <span>'
                . $pagination->getTotalResults() . '</span></div>';
        }


        $html .= '</div>';


        return $html;
    }

    public function paginationTableHeader(Pagination $pagination)
    {
        $baseLink = $pagination->getUrl();
        $confData = $pagination->getConf();

        if ($pagination->isSetSearch()) {
            $baseLink = $pagination->getUrl() . '?_name=' . $pagination->getSearchTerm() . '&';
        } else {
            $baseLink = $pagination->getUrl() . '?';
        }
        $html = '';

        foreach ($confData as $key => $value) {
            $html .= '<th>';
            if (array_key_exists('disable', $value) && $value['disable']) {
                $html .= $value['displayName'];
                continue;
            }

            // Getting Current Sorting Column
            if ($key == $pagination->getSortBy()) {
                //If OrderBy - Set ASC
                if ($pagination->getOrderBy() == 'ASC') {
                    $html .= '<a href="' . $baseLink . '_sort=DESC&col=' . $key . '" title="Sort Descending"><i class="icon-arrow-up"></i>&nbsp;' . $value['displayName'];
                    //$html .= '&#8593;</a>';
                    $html .= '&#8593;</a>';
                } else { //If OrderBy - Set DESC
                    $html .= '<a href="' . $baseLink . '_sort=ASC&col=' . $key . '" title="Sort Ascending"><i class="icon-arrow-down"></i>&nbsp;' . $value['displayName'];
                    //$html .= '&#8595;</a>';
                    $html .= '&#8595;</a>';
                }
            } else { // Getting Other Sorting Column
                $html .= '<a href="' . $baseLink . '_sort=ASC&col=' . $key . '" title="Sort Ascending">' . $value['displayName'];
                $html .= '&#8597;</a>';
            }

            $html .= ' </th>';
        }

        return $html;
    }

    public function paginationPageControl(Pagination $pagination)
    {

        if ($pagination->isSetSearch()) {
            $baseLink = $pagination->getUrl() . '?_name=' . $pagination->getSearchTerm() . '&_sort=' . $pagination->getOrderBy() . '&col=' . $pagination->getSortBy() . '&p=';
        } else {
            $baseLink = $pagination->getUrl() . '?_sort' . $pagination->getOrderBy() . '&col=' . $pagination->getSortBy() . '&p=';
        }

        $html = '';
        $html .= '<div class="btn-toolbar">';
        $html .= '<div class="btn-group">';

        if ($pagination->getPageNo() <= 1) {
            $html .= '<button class="btn btn-default disabled"><a href="javascript:void(null);">&larr; Previous</a></button>';
        } else {
            $html .= '<button class="btn btn-default"><a href="' . $baseLink . ($pagination->getPageNo() - 1) . '">&larr; Previous</a></button>';
        }

//Set the Starting of Pages
        $min = $pagination->getPageNo() - 4;
        if ($min < 1) {
            $min = 1;
        }

// Set the ending of Pages
        $max = $pagination->getPageNo() + 5;
        if ($max > $pagination->getTotalPages()) {
            $max = $pagination->getTotalPages();
        }
        if ($max < 1) {
            $max = 1;
        }
        for ($i = $min; $i <= $max; $i++) {
            if ($i == $pagination->getPageNo()) {
                $html .= ' <button type="button" class="btn btn-default"><a href="javascript:void(null);">' . $i . '</a></button>';
            } else {
                $html .= ' <button type="button" class="btn btn-default"><a href="' . $baseLink . $i . '">' . $i . '</a></button>';
            }
        }

        if ($pagination->getPageNo() >= $pagination->getTotalPages()) {
            $html .= '<button type="button" class="btn btn-default disabled"><a href="javascript:void(null);">Next &rarr;</a></button>';
        } else {
            $html .= '<button type="button" class="btn btn-default"><a href="' . $baseLink . ($pagination->getPageNo() + 1) . '">Next &rarr;</a></button>';
        }

        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }



}