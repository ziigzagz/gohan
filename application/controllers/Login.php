<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('News_Model');
        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $this->load->view('css');
        $this->load->view('js');
        $this->load->view('Login/Login_page.php');
    }
    public function checklogin()
    {
        header("Refresh:0; url=../setup");
    }
}
