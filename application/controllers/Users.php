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
        'required|trim|valid_email|is_unique[user.email]');

        $this->form_validation->set_rules('pseudo', 'Pseudo', 
        'required|trim|is_unique[user.pseudo]');

        $this->form_validation->set_rules('password', 'Password',
        'required|trim',array('required' => 'You must write a %s.'));

        $this->form_validation->set_rules('cpassword', 'Password Confirmation',
        'required|trim|matches[password]', array(''=>''));

        $this->form_validation->set_rules('day', 'Day', 
        'required', array('required' => 'required'));

        $this->form_validation->set_rules('month', 'Month', 
        'required', array('required' => 'required'));

        $this->form_validation->set_rules('year', 'Year', 
        'required', array('required' => 'required'));

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = "Register"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/register', $data);
            $this->load->view('app/static/footer', $data);
        }
        else{
            $usermod = new Users_mod;
            $userdatas = array(
                'pseudo' => $this->input->post('pseudo'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $checking = $usermod->registeruser($userdatas);
            if ($checking){
                $this->session->set_flashdata('status', );
            }else{

            }
        }
    }

    public function login(){
        $this->form_validation->set_rules('email', 'Email Address', 
        'required|trim|valid_email');

        $this->form_validation->set_rules('password', 'Password', 
        'required');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = "Login"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/login', $data);
            $this->load->view('app/static/footer', $data);
        }else{
            // echo "gagné";
            $usermod = new Users_mod;
            $userdatas = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $checking = $usermod->loginuser($userdatas);
            if ($checking != FALSE){
                //utilisateur réguliérement inscrit
                $authuserdetail = [
                    'email' => $checking->pseudo,
                    'password' => $this->input->post('password'),
                ];

                $this->session->set_userdata('online', '1');
                $this->session->set_userdata('onlineuser', $authuserdetail);

                echo "vous êtes online";
                
                // $data['title'] = ""; // Capitalize the first letter
                // $this->load->view('app/static/head', $data);
                // $this->load->view('app/static/header', $data);
                // $this->load->view('app/user/login', $data);
                // $this->load->view('app/static/footer', $data);



            }else{
                //information absente en BD
                $this->session->set_flashdata('status', 'Invalid Email address or Password');
                $data['title'] = "Login"; // Capitalize the first letter
                $this->load->view('app/static/head', $data);
                $this->load->view('app/static/header', $data);
                $this->load->view('app/user/login', $data);
                $this->load->view('app/static/footer', $data);
            }
        }


    }
} 