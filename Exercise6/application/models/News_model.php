<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($User_ID = FALSE)
    {
        if ($User_ID === FALSE)
        {
            $query = $this->db->get('userinfo');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('userinfo', array('User_ID' => $User_ID));
        return $query->row_array();
    }
    
    public function get_news_by_id($User_ID = 0)
    {
        if ($User_ID === 0)
        {
            $query = $this->db->get('userinfo');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('userinfo', array('User_ID' => $User_ID));
        return $query->row_array();
    }
    
    public function set_news($User_ID = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'User_ID' => $User_ID,
			'name' => $this->input->post('name'),
            'nName' => $this->input->post('nName'),
			'email' => $this->input->post('email'),
			'hAd' => $this->input->post('hAd'),
			'gender' => $this->input->post('gender'),
			'cNum' => $this->input->post('cNum'),
			'message' => $this->input->post('message')
        );
        
        if ($User_ID == 0) {
            return $this->db->insert('userinfo', $data);
        } else {
            $this->db->where('User_ID', $User_ID);
            return $this->db->update('userinfo', $data);
        }
    }
    
    public function delete_news($User_ID)
    {
        $this->db->where('User_ID', $User_ID);
        return $this->db->delete('userinfo');
    }
}
