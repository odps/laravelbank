<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;

class DefaultController extends Controller
{
    function home()
    {
        return new Response('Hola, que tal ?');
    }
    function welcome()
    {
        $html = '<body>Bienvenido!</body>';
        return new Response($html);
    }
    function ejemplo(){
        $grupos = array();
        $grupo1 = new \stdClass();
        $grupo1->codigo = '7K';
        $grupo1->denominacion = '2DAW mañana';
        $grupo2 = new \stdClass();
        $grupo2->codigo = '7W';
        $grupo2->denominacion = '2DAW tarde';
        $grupo3 = new \stdClass();
        $grupo3->codigo = '7S';
        $grupo3->denominacion = '2DAW semipresencial';
        array_push($grupos, $grupo1);
        array_push($grupos, $grupo2);
        array_push($grupos, $grupo3);
        return view('default.ejemplo', [
            'grupos' => $grupos
        ]);
    }
}
