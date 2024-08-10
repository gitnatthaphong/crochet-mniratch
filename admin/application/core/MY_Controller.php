<?php

class MY_Controller extends CI_Controller
{

    public $cur_class = null;
    public $cur_method = null;

    private $message_user_tbl = 'message_user';

    public function __construct()
    {
        parent::__construct();
        $this->cur_class = $this->router->class;
        $this->cur_method = $this->router->method;
        
        $this->verifyCredential();
    }

    public function verifyCredential()
    {
        if($this->cur_class != 'Login') {
            
            $token = get_cookie('token_web_mniratch');
            if(empty($token)) {
                redirect(base_url() . 'admin/Login');
            }
            
            if(!empty($token) && !empty($this->session->userdata['token_web_mniratch']) && $token != $this->session->userdata['token_web_mniratch']) {
                redirect(base_url() . 'admin/Login');
            }
            
        }


    }

    private function fnc_getNotification() 
    {
        $this->db->where('is_viewed', 0);
        $this->db->limit(10);
        $this->db->order_by('create_date', 'desc');
        $data = $this->db->get($this->message_user_tbl)->result_array();
        
        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
        
    }

    protected function view($views = null, $param = null)
    {
        $param['notification'] = $this->fnc_getNotification();
        $param['cur_class'] = $this->cur_class;
        $param['cur_method'] = $this->cur_method;
        $param['action_link'] = base_url() . 'admin/' . $this->cur_class . '/';

        $this->load->view('header', $param);

        if ($views != null) {
            if (file_exists(APPPATH . 'views/' . $views . '.php')) {
                $this->load->view($views, $param);
            } else {
                show_404();
            }
        }

        $this->load->view('footer', $param);
    }
}
