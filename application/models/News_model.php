<!--
 * Name: Shannon Reidy
 * Coding 08
 * Purpose: model for interracting with News db
--> 
<?php
class News_model extends CI_Model{

    public function _construct(){
        $this->load->database();
    }
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }


}