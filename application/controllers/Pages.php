<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/app//homepage/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();

        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('app/static/head', $data);
        $this->load->view('app/static/header', $data);
        $this->load->view('app/homepage/'.$page, $data);
        $this->load->view('app/static/footer', $data);
    }

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

    public function user($page){
        if ( ! file_exists(APPPATH.'views/app/user/'.$page.'.php')){
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

	public function imgview($nom)
	{
		return base_url() . 'application/assets/img/' . $nom;
	}

}