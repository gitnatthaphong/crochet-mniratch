<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageMessage_model extends CI_Model
{

    private $message_user_tbl = 'message_user';

    public function getData()
    {
        $data = $this->db->get($this->message_user_tbl)->result_array();
        
        $getData = [];
        if (!empty($data)) {
           $getData = $data;
        }

        return $getData;
    }

    public function getDetail($message_id)
    {
        $this->fnc_readMessage($message_id);
        
        $this->db->where('message_id', $message_id);
        $data = $this->db->get($this->message_user_tbl)->row_array();

        if(!empty($data)) {
            return $data;
        }
        
        show_404();
    }

    private function fnc_readMessage($message_id)
    {
        $this->db->where('message_id', $message_id);
        $this->db->update($this->message_user_tbl, ['is_viewed' => 1]);
    }

}
