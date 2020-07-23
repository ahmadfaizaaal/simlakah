<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IntegrationTesting extends CI_Controller
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

    public function validateRegistration()
    {
        $regId = '175';
        $lokasiAkad = 'KUA';
        $formName = 'Nikah';
        $statusId = '';

        if ('Nikah' == $formName) {
            if ('KUA' == $lokasiAkad) {
                $statusId = $this->registration->getStatusId('Valid');
            } else {
                $statusId = $this->registration->getStatusId('Menunggu Pembayaran');
            }
        } else {
            $statusId = $this->registration->getStatusId('Valid');
        }
        $result = $this->registration->updateStatusRegistration($regId, $statusId);

        if ($result) {
            $afterUpdate = $this->registration->getDetailRegistration($regId);
            print_r($afterUpdate);
        };
    }
}
