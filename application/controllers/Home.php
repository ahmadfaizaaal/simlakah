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
        $this->load->model('M_Auth', 'auth');
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
        $data['job'] = 'User';
        $data['question'] = $this->registration->getListQuestion($type);
        $dataNIK = $this->auth->getDataByNIK($this->session->userdata('nik'));
        $data['participant'] = json_encode($dataNIK);
        $result = $this->registration->getListAkad();
        $listAkad = array();
        foreach ($result as $val) {
            array_push($listAkad, date_format(date_create($val->TGL_AKAD), "Y-m-d H"));
        }
        $data['listDateAkad'] = $listAkad;
        $result = $this->registration->getDisabledHours();
        $listTimeAkad = array();
        foreach ($result as $val) {
            array_push($listTimeAkad, intval(substr($val->TGL_AKAD, 11, 2)));
        }
        $data['listTimeAkad'] = $listTimeAkad;

        $where = '';
        $gender = '';
        if ('Laki-laki' == $dataNIK->JENIS_KELAMIN) {
            $gender = 'S';
        } else {
            $gender = 'I';
        }
        if ('nikah' == $type) {
            $where = 'rd.NIK_CAL_' . $gender;
        } else {
            $where = 'rd.NIK_' . $gender;
        }

        $statusKawin = $this->registration->checkAuthorityRegistration($this->session->userdata('nik'));
        if (null != $statusKawin) {
            $onGoing = $this->registration->checkOnGoingRegistration($this->session->userdata('nik'), $where);
            if (null != $onGoing) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Perhatian!</strong> Anda sudah melakukan pendaftaran, harap tunggu info selanjutnya!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('home');
            } else {
                if (('Menikah' == $statusKawin || 'Kawin' == $statusKawin) && $dataNIK->JENIS_KELAMIN == 'Perempuan') {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> Status perkawinan anda di dukcapil adalah bersuami!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
                    );
                    redirect('home');
                } else {
                    $this->load->view('registration/' . $type, $data);
                }
            }
        } else {
            $this->load->view('registration/' . $type, $data);
        }
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
