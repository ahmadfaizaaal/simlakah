<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
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
