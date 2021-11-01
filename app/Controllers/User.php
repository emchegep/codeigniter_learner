<?php


namespace App\Controllers;


class User extends BaseController
{
    public function login(){
        echo view('frontend/shared/header');
        echo view('frontend/shared/auth_navigation');
        echo view('frontend/login');
        echo view('frontend/shared/footer');
    }
    public function register(){
        echo view('frontend/shared/header');
        echo view('frontend/shared/auth_navigation');
        echo view('frontend/register');
        echo view('frontend/shared/footer');
    }
}