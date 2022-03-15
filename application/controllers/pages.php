<?php
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
}