<?php

namespace Bmehler\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BundleController extends AbstractController {

    public function index(): Response
    {
        $number = random_int(0, 100);

        $loader = new FilesystemLoader(__DIR__.'/../Resources/views');
        $twig = new Environment($loader);

        return new Response(
            $twig->render('index.html.twig', ['number' => $number])
        );
    }
}
