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
            //Validataion of form failed
            $data['title'] = "Register"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/register', $data);
            $this->load->view('app/static/footer', $data);
        }
        else{
            //validation of form win
            $usermod = new Users_mod;
            $userdatas = array(
                'pseudo' => $this->input->post('pseudo'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'day' => (int)$this->input->post('day'),
                'month' => (int)$this->input->post('month'),
                'year' => (int)$this->input->post('year'),
            );
            
            $checking = $usermod->registeruser($userdatas);
            if ($checking){
                //registration win
                $userdata = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $this->loginwin($userdata);
                //$this->session->set_flashdata('status','Welcome back ' );
            }else{
                //registration failed 
                $this->session->set_flashdata('status','An error occured :/' );
                $data['title'] = "Register"; // Capitalize the first letter
                $this->load->view('app/static/head', $data);
                $this->load->view('app/static/header', $data);
                $this->load->view('app/user/register', $data);
                $this->load->view('app/static/footer', $data);
            }
        }
    }

    public function loginwin($userdatas){
        $usermod = new Users_mod;
        $checking = $usermod->loginuser($userdatas);

        if ($checking != FALSE){
            //login win
            $authuserdetail = [
                'email' => $checking->email,
                'password' => $checking->password,
                'pseudo' => $checking->pseudo,
                'name' => $checking->name ,
                'userid' => $checking->id ,
                'phone' => $checking->phone ,
                'gender' => $checking->gender ,
                'country' => $checking->country ,
                'town' => $checking->town ,
                'day' => $checking->day ,
                'month' => $checking->month ,
                'year' => $checking->year ,
                'status' => $checking->status ,
                'is_admin' => $checking->is_admin ,
                'user_avatar' => $checking->user_avatar ,
                'bio' => $checking->bio ,
                'uid' => $checking->uid ,
                'dateof' => $checking->dateof ,
            ];

            $this->session->set_userdata('online', '1');
            $this->session->set_userdata('onlineuser', $authuserdetail);

            $this->session->set_flashdata('status', 'Welcome back '.$checking->pseudo );
            $data['title'] = $checking->pseudo." homepage"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/nav_user', $data);
            $this->load->view('app/homepage/home', $data);
            $this->load->view('app/static/footer', $data);
            
            // $data['title'] = ""; // Capitalize the first letter
            // $this->load->view('app/static/head', $data);
            // $this->load->view('app/static/header', $data);
            // $this->load->view('app/user/login', $data);
            // $this->load->view('app/static/footer', $data);



        }else{
            //login failed
            $this->session->set_flashdata('status', 'Invalid Email address or Password');
            $data['title'] = "Login"; // Capitalize the first letter
            $this->load->view('app/static/head', $data);
            $this->load->view('app/static/header', $data);
            $this->load->view('app/user/login', $data);
            $this->load->view('app/static/footer', $data);
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
                'password' => md5($this->input->post('password')),
            );
            $this->loginwin($userdatas);
        }
    }

    public function logout(){
        $name = $this->session->userdata('onlineuser')['pseudo'];
        $this->session->unset_userdata('online');
        $this->session->unset_userdata('onlineuser');

        $this->session->set_flashdata('status','See you soon '.$name.'       :)' );
        $data['title'] = "Login"; // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/user/login', $data);
        $this->load->view('app/static/footer', $data);
    }
} 