<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{
    public function index(){
        $data['title'] = "Home"; // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/homepage/home', $data);
        $this->load->view('app/static/footer', $data);
    }

    //----------------------------------*Offline*----------------------------------- 

    //homepage
    public function homepage($page){
        if ( ! file_exists(APPPATH.'views/app//homepage/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            var_dump('hello homepage');
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/homepage/'.$page, $data);
        $this->load->view('app/static/footer', $data);
    }

    //user
    public function user($page){
        if ( ! file_exists(APPPATH.'views/app/user/'.$page.'.php') && $page != "nav_user"){
            // Whoops, we don't have a page for that!
            var_dump('hello user');
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/user/'.$page, $data);
        $this->load->view('app/static/footer', $data);
        
    }

    //----------------------------------*Online*-----------------------------------------
    

    public function homepage2($page){
        if ( ! file_exists(APPPATH.'views/app//homepage/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            var_dump('hello homepage');
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/user/nav_user',$data);
        $this->load->view('app/homepage/'.$page, $data);
        $this->load->view('app/static/footer', $data);
    }

    //user
    public function user2($page){
        if ( ! file_exists(APPPATH.'views/app/user/'.$page.'.php') && $page != "login" && $page != "register"){
            // Whoops, we don't have a page for that!
            var_dump('hello user');
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/user/nav_user',$data);
        $this->load->view('app/user/'.$page, $data);
        $this->load->view('app/static/footer', $data);
        
    }
}