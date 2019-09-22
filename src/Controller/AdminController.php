<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminController extends AbstractController
{

    /**
     * @Route("/admin",name="home_admin")
     */
    public function index()
    {
        return $this->render('admin/admin.html.twig');

    }

}