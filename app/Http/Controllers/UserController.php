<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	if(request()->has('empty')) {
    		$users = [];
    	} else {
    		$users = [
	    		'Alejandra',
	    		'Italia',
	    		'Daniela',
	    		'Miriam',
	    		'Hermes',
	    	];
    	}
    	

    	$title = 'Listado de usuarios';

    	return view('users')
    		->with('users', $users)
    		->with('title', $title);
    		
    	
    }

    public function show ($id)
    {
    	return "Mostrando detalles de usuario: {$id}";
    }
    public function create()
    {
    	return 'Crear usuario nuevo';
    }
}
