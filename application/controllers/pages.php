<?php
class Pages extends core_controller{
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/homepage/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('static/head', $data);
        $this->load->view('static/header', $data);
        $this->load->view('homepage/'.$page, $data);
        $this->load->view('static/footer', $data);
    }
}