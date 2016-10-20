<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Helper\Pagination;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;

class GiveAwayController extends Controller
{
    /**
     * @Route("/", name="search")
     */
    public function searchAction(Request $request)
    {	
       	

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $name = $request->query->get('_name');
        $sort = $request->query->get('_sort');
        $pagination =null;
        $results =null;
        if($name){
            $repo = $this->getDoctrine()
                ->getRepository('AppBundle:Giveaway');

            $paginationDefaults = array(
                'col' => $sort!=""?'price':'name',
                'order' => $sort!=""? $sort :'ASC',
            );
            $pagination = new Pagination($this->generateUrl('search'), $paginationDefaults);

            $results = $repo->findByPagination($pagination);
            $results = $this->getFilteredByACL($results);
            $pagination->setTotalResults(count($results));

        }

        return $this->render('AppBundle:GiveAway:search.html.twig', array(
							'_name' => $name,
							'_sort' => $sort,
							'giveaways' => $results,
                            'pagination' => $pagination,
					));
    }

    /**
     * Function to filter out the search results based on active user's ACL definitions
     *
     * @param array $results
     * @return array
     * @author Praveesh A <praveesh4u@gmail.com>
     */
    protected function getFilteredByACL(Array $results)
    {
        $securityContext = $this->get('security.context');
        $user = $this->getUser();

        if(!$user->hasRole('ROLE_ADMIN')){
            foreach ($results as $key => $value) {

                if (!$securityContext->isGranted('VIEW', $value)) {
                    unset($results[$key]);
                }
            }
        }
        return $results;
    }



}
