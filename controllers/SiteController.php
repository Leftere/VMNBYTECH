<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "TheCodeHolic"
        ];
        return $this->render('home', $params);
    }

    public function services()
    {
        $this->setLayout('services');
        return $this->render('services');
    }

    public function about()
    {
        $this->setLayout('about');
        return $this->render('about');

    }

    public function portfolio()
    {
        $this->setLayout('portfolio');
        return $this->render('portfolio');
    }


    public function contact()
    {
        $this->setLayout('contact');
        return $this->render('contact');

    }
    public function handleContact(Request $request) 
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return 'Handling submitted datadfffff';
    }
}