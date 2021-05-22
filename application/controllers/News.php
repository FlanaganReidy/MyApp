<!--
 * Name: Shannon Reidy
 * Coding 08
 * Purpose:news controller
--> 

<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('parser');
        }

        public function index()
        {
                $news['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';
                $data['news'] = $this->parser->parse('templates/news_template', $news, TRUE);


                $this->load->view('templates/header', $data);
                $this->load->view('news/index');
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $news_item = $this->news_model->get_news($slug);
                if (empty($news_item))
                {
                        echo 'no news';
                        show_404();
                        
                }
                $data['title'] = $news_item['title'];
                $data['news_item'] = $this->parser->parse('templates/news_item_template', $news_item, true);
        
                $this->load->view('templates/header', $data);
                $this->load->view('news/view');
                $this->load->view('templates/footer');
        }
}