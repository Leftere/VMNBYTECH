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
        // $this->setLayout('services');
        return $this->render('services');
    }

    public function about()
    {
        // $this->setLayout('about');
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

    public function thankYou()
    {
        $this->setLayout('thank-you');
        return $this->render('thank-you');
    }

    public function error()
    {
        $this->setLayout('404');
        return $this->render('404');
    }

    public function topNotch()
    {
        $this->setLayout('top-notch-detailing');
        return $this->render('top-notch-detailing');

    }

    public function uvc()
    {
      
        $this->setLayout('uvc');
        return $this->render('uvc');
    }

    public function handleContact() 
    {
        // $body = $request->getBody();
        // echo '<pre>';
        // var_dump($body);
        // echo '</pre>';
        // exit;
        return 'Handling submitted datadfffff';
    }
}