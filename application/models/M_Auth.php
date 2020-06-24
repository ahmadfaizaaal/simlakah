<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function listMenu($roleId)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('ROLE_ID', $roleId);
        $this->db->where('PARENTMENU_ID', null);
        $this->db->where('IS_ACTIVE', '1');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getDataByNIK($nik)
    {
        $result = $this->db->get_where('dukcapil', ['nik' => $nik]);
        return $result->row();
    }

    public function getDataParticipant($nik)
    {
        $result = $this->db->get_where('participant', ['nik' => $nik]);
        return $result->row();
    }

    public function getDataOfficer($username)
    {
        $result = $this->db->get_where('officer', ['username' => $username]);
        return $result->row();
    }

    public function registerAccount($data)
    {
        $this->db->insert('participant', $data);
    }
}
