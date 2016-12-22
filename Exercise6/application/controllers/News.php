<?php
class News extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['userinfo'] = $this->news_model->get_news();
        $data['title'] = 'Website Visitors';
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($User_ID = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($User_ID);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a news item';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nName', 'nName', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('hAd', 'hAd', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('cNum', 'cNum');
		$this->form_validation->set_rules('message', 'comment', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
       else
        {
            $this->news_model->set_news($User_ID);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function edit()
    {
        $User_ID = $this->uri->segment(3);
        
        if (empty($User_ID))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a news item';        
        $data['news_item'] = $this->news_model->get_news_by_id($User_ID);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nName', 'nName', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('hAd', 'hAd', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('cNum', 'cNum');
		$this->form_validation->set_rules('message', 'message', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($User_ID);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $User_ID = $this->uri->segment(3);
        
        if (empty($User_ID))
        {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($User_ID);
        
        $this->news_model->delete_news($User_ID);        
        redirect( base_url() . 'index.php/news');        
    }
}
