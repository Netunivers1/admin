<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/", name="accueil")
     */
    public function indexAction() {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * @Route("/pages", name="pages")
     */
    public function pagesAction() {
        return $this->render('AdminBundle:Default:pages.html.twig');
    }

    /**
     * @Route("/menus", name="menus")
     */
    public function menusAction() {
        return $this->render('AdminBundle:Default:menus.html.twig');
    }    
}
