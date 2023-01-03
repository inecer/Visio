<?php

namespace Controller;


class HomeController extends \W\Controller\Controller
{

	/**
	 * Page d'accueil
	 */
	public function home()
	{
        $this->render('/home',
            ['name' => $_SESSION['name']]);
    }
}
