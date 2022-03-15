<?php
class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('users_mod');
        $this->load->helper('url_helper');
    }
    public function index(){
        $data['users'] = $this->users->get_info;
    }
    // affiche les informations sur tous les users enregistré dans la BD
    public function view($slug = NULL){
        $data['users_item'] = $this->news_model->get_news($slug);
    }
}