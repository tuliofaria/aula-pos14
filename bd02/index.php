<?php

	session_start();

	// FrontController :)

	$controller = $_GET["controller"];
	$action = $_GET["action"];

	// 1 forma -> fazer aqui mesmo:
	// -  checar se o usuario pode acessar

	$controllerClass = $controller."Controller";

	include($controllerClass.".php");


	$cd = new $controllerClass();
	
	$cd->setController($controller);
	$cd->setAction($action);

	$cd->beforeAction();
	$cd->$action();
	$cd->render();
	$cd->afterAction();
