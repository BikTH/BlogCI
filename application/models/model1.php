<?php
class Model1 extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    // C"R"UD : Read 
    // récupère les éléments d'une table et retourne le contenu dans un array
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    // 


}
