<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LibroController extends AbstractController
{
    private $libros = array(
        array("isbn" => "A111B3", "titulo" => "El juego de Ambar", "autor" => "Orson Scott Card", "paginas" => 350),
        array("isbn" => "A111B4", "titulo" => "El juego de Ender", "autor" => "jhonson kart", "paginas" => 350),
        array("isbn" => "A111B5", "titulo" => "Rebelion en la Granja", "autor" => "George Owell", "paginas" => 250),
        array("isbn" => "A111B6", "titulo" => "La metamorfosis", "autor" => "Franz Kafa", "paginas" => 289)
    ); 
    #[Route('/libro/{isbn}', name: 'ficha_libro')]
    public function ficha($isbn): Response
    {
        $resultado = array_filter($this->libros, 
            function($libro) use ($isbn)
            {
                return $libro["isbn"] = $isbn;
            }
        );

        if(count($resultado) > 0){
            return $this->render('libro/ficha_libro.html.twig', array("libro" => array_shift($resultado)));
        }else{
            return $this->render('libro/ficha_libro.html.twig', array("libro" => NULL));
        }
        /*return $this->render('libro/ficha_libro.html.twig', [
            'controller_name' => 'LibroController',
        ]);*/
    }
}
