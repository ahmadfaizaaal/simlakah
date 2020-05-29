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
        $this->load->view('registration/' . $type, $data);

        // if ("nikah" == $type) {
        // } else if ("isbat" == $type) {

        // } else if ("rujuk" == $type) {

        // }
    }

    public function listJob()
    {
        $job = $this->registration->getListJob();
        echo json_encode($job);
    }

    public function test()
    {
        $data['title'] = "Sistem Manajemen Layanan Pernikahan";
        $this->load->view('registration/test', $data);
    }

    public function picker()
    {
        $this->load->view('registration/datetime');
    }
}
