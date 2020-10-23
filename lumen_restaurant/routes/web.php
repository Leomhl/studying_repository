<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function(){
    return view('home');
});

$router->get('restaurante', function(){
    return view('restaurante');
});

$router->get('cardapio', function(){
	return view('cardapio');
});

$router->get('ondemand', function(){
	return view('ondemand');
});

$router->get('contato[/{enviado}]', function($enviado = 0){
	return view('contato')->with('enviado', $enviado);
});

$router->post('contato', 'ContatoController@contato');