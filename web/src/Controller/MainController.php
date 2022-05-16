<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController {

    #[Route('/', name:'home')]
    public function home(): Response
    {
        
        return $this->render('html/home.html.twig');
    }

    #[Route('/setting', name:'setting')]
    public function question(): Response
    {
        
        return $this->render('html/setting.html.twig');
    }


    #[Route('/classroom', name:'classroom')]
    public function classRoom(): Response
    {
        
        return $this->render('html/classroom.html.twig');
    }

}


