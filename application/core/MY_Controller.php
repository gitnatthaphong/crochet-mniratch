<?php

class MY_Controller extends CI_Controller
{

    public $cur_class = null;
    public $cur_method = null;
    public $defaultRespond = [
        "msg" => "success",
        "status" => 200
    ];

    private $sys_config_tbl = 'sys_config';

    public function __construct()
    {
        parent::__construct();
        $this->cur_class = $this->router->class;
        $this->cur_method = $this->router->method;
    }

    private function getDataSys()
    {
        $data = $this->db->get($this->sys_config_tbl)->result_array();

        $getData = [];
        if(!empty($data)) {
            foreach($data as $key => $value) {
                $getData[$value['field_name']] = $value['field_value'];
            }
        }

        return $getData;
    }

    protected function view($views = null, $param = null)
    {
        $param['dataSys'] = $this->getDataSys();
        $param['cur_class'] = $this->cur_class;
        $param['cur_method'] = $this->cur_method;
        $param['action_link'] = base_url() . $this->cur_class . '/';

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
