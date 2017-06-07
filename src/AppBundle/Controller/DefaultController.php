<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/{category}", name="homepage")
     * @Method("GET")
     */

    public function publishedAction($category='all')
    {
        $em = $this->getDoctrine()->getManager();
        if( $category == 'all') {
            $articles = $em->getRepository('AppBundle:Article')->findBy(array(), array('id'=>'DESC'));
        } else {
            $articles = $em->getRepository('AppBundle:Article')
                ->createQueryBuilder('a')
                ->where('a.category = :category')
                ->orderBy('a.id','DESC')
                ->setParameter('category', $category)
                ->getQuery()
                ->getResult();
        }
        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
        ));

    }
}
