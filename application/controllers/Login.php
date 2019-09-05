<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('auth', 'form_validation');
    }

    /**
     * handle the login.
     */

    public function index()
    {
        $data = array();

        if($_POST) {
            $data = $this->auth->login($_POST);

        }

        return $this->auth->showLoginForm($data);
    }


    /**
     * Logout.
     */
    public function logout()
    {
        if($this->auth->logout())
            return redirect(base_url("login"));

        return false;
    }



}