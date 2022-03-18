<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_mod extends CI_Model {
    // public function __construct(){
    //     $this->load->database();
    // }
    // // C"R"UD : Read
    // // récupère les éléments d'une table et retourne le contenu dans un array
    // public function get_info($slug = FALSE)
    // {
    //     if ($slug === FALSE){
    //         $query = $this->db->get('users');
    //         return $query->result_array();
    //     }
    //     $query = $this->db->get_where('users', array('slug' => $slug));
    //     return $query->row_array();
    // }
    // //

    public function registeruser($data){
        return $this->db->insert('user',$data);
    }

    public function loginuser($data){
        $this->db->select('*');
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $this->db->from('user');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->row();
        }else{
            return false;
        }
    }


}
