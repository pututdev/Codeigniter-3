<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul_web'] = 'Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function register()
    {
        $data['judul_web'] = 'Register Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }

}
