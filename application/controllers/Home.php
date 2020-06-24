<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('form_validation');
        $this->load->model('M_Registration', 'registration');
        date_default_timezone_set('Asia/Bangkok');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            if ('1' == $this->session->userdata('role_id')) {
                redirect('staff');
            } else if ('2' == $this->session->userdata('role_id')) {
                redirect('penghulu');
            }
        }
        $data['title'] = "Sistem Manajemen Layanan Pernikahan";
        $this->load->view('home/index', $data);
    }

    public function registration($type)
    {
        if (!$this->session->userdata('nik')) {
            redirect('auth/login/' . $type);
        }

        $data['title'] = "Sistem Manajemen Layanan Pernikahan";
        $data['type'] = $type;
        $data['question'] = $this->registration->getListQuestion($type);
        $result = $this->registration->getListAkad();
        $listAkad = array();
        foreach ($result as $val) {
            array_push($listAkad, date_format(date_create($val->TGL_AKAD), "Y-m-d H"));
        }
        $data['listDateAkad'] = $listAkad;
        $this->load->view('registration/' . $type, $data);
    }

    public function listJob()
    {
        $job = $this->registration->getListJob();
        echo json_encode($job);
    }

    // public function test()
    // {
    //     $data['title'] = "Sistem Manajemen Layanan Pernikahan";
    //     $this->load->view('registration/test', $data);
    // }

    // public function picker()
    // {
    //     $this->load->view('registration/datetime');
    // }
}
