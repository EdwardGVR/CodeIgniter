<?php
class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news ($slug = FALSE) {
        if ($slug == FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news () {
        $this->load->helper('url');

        // function provided by the url helper, replaces all spaces by dashes and makes sure everything is in lowercase
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        // Each element corresponds with a column in the database table
        $data = array (
            // post methods is part of the input library, wich is loaded by default, it sanitizes the data from the form
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

}