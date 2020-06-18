<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('form_validation');
        $this->load->model('M_Auth', 'auth');
        $this->load->model('M_Registration', 'registration');
        $this->load->model('M_Penghulu', 'penghulu');
        date_default_timezone_set('Asia/Bangkok');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Dashboard';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/index');
        $this->load->view('component/footerstaff');
    }

    //----------------------PENGHULU-------------------------
    public function penghulu()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Penghulu';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/penghulu');
        $this->load->view('component/footerstaff');
    }

    public function showDataPenghulu()
    {
        $result = $this->penghulu->getDataPenghulu();
        echo json_encode($result);
    }

    public function getDetailPenghulu()
    {
        $result = $this->penghulu->getDataPenghuluById($this->input->post('offId'));
        echo json_encode($result);
    }

    public function addPenghulu()
    {
        $data = array(
            'ROLE_ID' => 2,
            'NIP' => htmlspecialchars($this->input->post('nip')),
            'NAME' => htmlspecialchars($this->input->post('nama')),
            'ADDRESS' => htmlspecialchars($this->input->post('alamat')),
            'PHONE' => htmlspecialchars($this->input->post('noTelp')),
            'EMAIL' => htmlspecialchars($this->input->post('email')),
            'USERNAME' => htmlspecialchars($this->input->post('username')),
            'PASSWORD' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'PASSWORD_LABEL' => htmlspecialchars($this->input->post('password')),
            'DTM_CRT' => date('Y-m-d H:i:s')
        );
        $result = $this->penghulu->insertPenghulu($data);
        setResponse($result, 'add');
    }

    public function updatePenghulu()
    {
        $offId = $this->input->post('offId');
        $data = array(
            'ROLE_ID' => 2,
            'NIP' => htmlspecialchars($this->input->post('nip')),
            'NAME' => htmlspecialchars($this->input->post('nama')),
            'ADDRESS' => htmlspecialchars($this->input->post('alamat')),
            'PHONE' => htmlspecialchars($this->input->post('noTelp')),
            'EMAIL' => htmlspecialchars($this->input->post('email')),
            'DTM_UPD' => date('Y-m-d H:i:s')
        );
        $result = $this->penghulu->updatePenghulu($offId, $data);
        setResponse($result, 'update');
    }

    public function deletePenghulu()
    {
        $result = $this->penghulu->deletePenghulu($this->input->post('offId'));
        setResponse($result, 'delete');
    }


    //--------------VALIDASI BERKAS PENDAFTARAN--------------
    public function validasi()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Validasi Berkas';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/validasi');
        $this->load->view('component/footerstaff');
    }

    public function showDataRegistration()
    {
        $result = $this->registration->getDataRegistration();
        echo json_encode($result);
    }

    public function getRegistrationFiles()
    {
        $param = explode('^', $this->input->post('param'));
        $regId = $param[0];
        $formName = $param[1];
        $selectedColumn = array();
        if ('Nikah' == $formName) {
            $selectedColumn = array(
                'FILE_SKUN_N1',
                'FILE_SPM_N3',
                'FILE_KTP_S',
                'FILE_KTP_I',
                'FILE_KK_S',
                'FILE_KK_I',
                'FILE_AKTA_LAHIR_S',
                'FILE_AKTA_LAHIR_I',
                'FILE_ADDITIONAL_DOC_S',
                'FILE_ADDITIONAL_DOC_I'
            );
        } else if ('Isbat' == $formName) {
            $selectedColumn = array(
                'FILE_SPPA',
                'FILE_KTP_S',
                'FILE_KTP_I',
                'FILE_KK_S',
                'FILE_KK_I',
                'FILE_AKTA_LAHIR_S',
                'FILE_AKTA_LAHIR_I'
            );
        } else if ('Rujuk' == $formName) {
            $selectedColumn = array(
                'FILE_AKTA_CERAI',
                'FILE_KTP_S',
                'FILE_KTP_I',
                'FILE_KK_S',
                'FILE_KK_I',
                'FILE_AKTA_LAHIR_S',
                'FILE_AKTA_LAHIR_I'
            );
        }

        $result = $this->registration->getFiles($selectedColumn, $regId);
        echo json_encode($result);
    }
}
