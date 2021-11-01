<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
//	    log_message('error','This is the home page.');
//	    //$this->cachePage(300);
//		return view('welcome_message');
        echo view('frontend/shared/header');
        echo view('frontend/shared/navigation');
        echo view('frontend/home');
        echo view('frontend/shared/footer');
	}
	public function about_us(){
	    log_message('critical','This is critical log from about us page');
        echo view('frontend/shared/header');
        echo view('frontend/shared/navigation');
        echo view('frontend/our_company');
        echo view('frontend/shared/footer');
    }
    public function contact(){
        echo view('frontend/shared/header');
        echo view('frontend/shared/navigation');
        echo view('frontend/contact');
        echo view('frontend/shared/footer');
    }
    public function pricing(){
        echo view('frontend/shared/header');
        echo view('frontend/shared/navigation');
        echo view('frontend/pricing');
        echo view('frontend/shared/footer');
    }
    public function services(){
        echo view('frontend/shared/header');
        echo view('frontend/shared/navigation');
        echo view('frontend/services');
        echo view('frontend/shared/footer');
    }
}
