<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    // public function __construct(){
    //     parent::__construct();
    //     $this->load->model('users_mod');
    //     $this->load->helper('url_helper');
    // }
    // public function index(){
    //     $data['users'] = $this->users->get_info;
    // }
    // // affiche les informations sur tous les users enregistré dans la BD
    // public function view($slug = NULL){
    //     $data['users_item'] = $this->news_model->get_news($slug);
    // }

    public function register(){
        $this->form_validation->set_rules('email', 'Email',
         'required');

        $this->form_validation->set_rules('username', 'Username', 
        'required');

        $this->form_validation->set_rules('password', 'Password',
         'required',array('required' => 'You must kill a %s.'));

        $this->form_validation->set_rules('cpassword', 'Password Confirmation',
         'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = "Register"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/register', $data);
            $this->load->view('app/static/footer', $data);
        }
        else{
            $this->load->view('formsuccess');
        }
    }
} 