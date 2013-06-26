<?php

namespace JuliaDima\PhotoGalleryWidgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JuliaDimaPhotoGalleryWidgetBundle:Default:index.html.twig', array('name' => $name));
    }
}
