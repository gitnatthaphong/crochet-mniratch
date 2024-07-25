<?php

class MY_Controller extends CI_Controller
{

    public $cur_class = null;
    public $cur_method = null;

    public function __construct()
    {
        parent::__construct();
        $this->cur_class = $this->router->class;
        $this->cur_method = $this->router->method;
    }

    protected function getPagination(&$data, $countData, $page = 1, $per_page = 10)
	{
        $data['startNo'] = ($page - 1) * $per_page + 1;
		$data['allPage'] = ceil($countData / $per_page);
		$data['currentPage'] = $page;
    }

    protected function view($views = null, $param = null)
    {
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
