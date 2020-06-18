<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Penghulu extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function getDataPenghulu()
    {
        $this->db->select('*');
        $this->db->from('officer');
        $this->db->where('ROLE_ID', '2');
        $this->db->order_by('NAME', 'asc');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getDataPenghuluById($offId)
    {
        $result = $this->db->get_where('officer', ['OFFICER_ID' => $offId]);
        return $result->row();
    }

    //INSERT
    public function insertPenghulu($data)
    {
        $this->db->insert('officer', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //INSERT
    public function updatePenghulu($offId, $data)
    {
        $this->db->where('OFFICER_ID', $offId);
        $this->db->update('officer', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //DELETE
    public function deletePenghulu($offId)
    {
        $this->db->where('OFFICER_ID', $offId);
        $this->db->delete('officer');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
