<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function index()
    { 
        $this->load->view('templates/header');
        $this->load->view('auth/login.php');
        $this->load->view('templates/footer');
        
    }

    public function registration()
    {
        $this->load->view('templates/header');
        $this->load->view('auth/register.php');
        $this->load->view('templates/footer');
    }

}
