<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('form_validation');
        $this->load->model('M_Registration', 'registration');
        $this->load->model('M_Penghulu', 'penghulu');
        date_default_timezone_set('Asia/Bangkok');
    }

    public function submitHeader()
    {
        //INITIALIZE PARAM HEADER
        $regCode = $this->input->post('uniqueID');
        $type = $this->input->post('type');

        //INITIALIZE REGISTRATION STATUS
        $statusID = $this->registration->getStatusId('Belum Diproses');

        //INITIALIZE FORM
        $formID = $this->registration->getFormId($type);

        //INITIALIZE PARTICIPANT ID
        $participantID = $this->session->userdata('participant_id');

        //DO INSERT
        $inserted = $this->registration->insertRegistration($regCode, $formID, $statusID, $participantID);

        //GET REG ID
        $regID = $this->registration->getRegistrationId($regCode);

        if ($inserted) {
            //INITIALIZE PARAM DETAIL
            $params = array();
            if ('nikah' == $type) {
                $objTempatAkad = explode("^", $this->input->post('tempatAkad'));
                $objTanggalAkad = explode("^", $this->input->post('tanggalAkad'));
                $objAlamatAkad = explode("^", $this->input->post('alamatAkad'));

                array_push($params, $objTempatAkad, $objTanggalAkad, $objAlamatAkad);

                $dataHeaderNikah = array(
                    'REG_ID' => $regID,
                    'TMP_NIKAH' => $params[0][1],
                    'TGL_AKAD' => $params[1][1],
                    'ALMT_AKAD' => $params[2][1]
                );
                $this->registration->insertHeader($dataHeaderNikah);
            } else if ('isbat' == $type) {
                $objTanggalAkad = explode("^", $this->input->post('tanggalAkad'));
                $objAlamatAkad = explode("^", $this->input->post('alamatAkad'));

                array_push($params, $objTanggalAkad, $objAlamatAkad);

                $dataHeaderIsbat = array(
                    'REG_ID' => $regID,
                    'TGL_AKAD' => $params[0][1],
                    'ALMT_AKAD' => $params[1][1]
                );
                $this->registration->insertHeader($dataHeaderIsbat);
            } elseif ('rujuk' == $type) {
                $objTanggalDaftarRujuk = explode("^", $this->input->post('tanggalDaftarRujuk'));
                $objTanggalCerai = explode("^", $this->input->post('tanggalCerai'));
                $objMasaidah = explode("^", $this->input->post('masaIdah'));
                $objStatusCerai = explode("^", $this->input->post('statusCerai'));

                array_push($params, $objTanggalDaftarRujuk, $objTanggalCerai, $objMasaidah, $objStatusCerai);

                $dataHeaderRujuk = array(
                    'REG_ID' => $regID,
                    'TGL_RUJUK' => $params[0][1],
                    'TGL_CERAI' => $params[1][1],
                    'MASA_IDAH' => $params[2][1],
                    'STATUS_CERAI' => $params[3][1]
                );
                $this->registration->insertHeader($dataHeaderRujuk);
            }

            $insertedDetail = 0;
            for ($i = 0; $i < count($params); $i++) {
                // INDEX 0: LABEL, 1: ANSWER
                $questionID = $this->registration->getQuestionId($params[$i][0]);
                $success = $this->registration->insertRegistrationDetail($regID, $questionID, $params[$i][0], $params[$i][1]);
                if ($success) {
                    $insertedDetail++;
                }
            }

            if (count($params) == $insertedDetail) {
                reset($params);
                echo json_encode($regID);
            } else {
                echo json_encode('');
            }
        }
    }

    public function submitDetail()
    {
        $type = $this->input->post('type');
        $regID = $this->input->post('regID');
        $params = array();
        $startIndex = 0;

        if ('nikah' == $type) {
            //suami
            $kwn_s = strtoupper($this->input->post('nkh_kewarganegaraan_s'));
            $nik_s = $this->input->post('nkh_nik_s');
            $nama_s = $this->input->post('nkh_nama_s');
            $ttl_s = $this->input->post('nkh_ttl_s') . ', ' . $this->input->post('nkh_ttl2_s');
            $umur_s = $this->input->post('nkh_umur_s');
            $status_s = $this->input->post('nkh_status_s');
            $agama_s = $this->input->post('nkh_agama_s');
            $alamat_s = $this->input->post('nkh_alamat_s');
            $pekerjaan_s = $this->input->post('nkh_pekerjaan_s');
            $nohp_s = $this->input->post('nkh_nohp_s');
            $foto_s = $this->uploadFile('nkh_foto_s', 'foto', $nama_s, $type, $regID);
            $pendukung_s = '';
            if ($_FILES['nkh_docpendukung_s']['name']) {
                $pendukung_s = $this->uploadFile('nkh_docpendukung_s', 'pendukung', $nama_s, $type, $regID);
            }
            $kedutaan_s = '';
            if ($_FILES['nkh_dockedutaan_s']['name']) {
                $kedutaan_s = $this->uploadFile('nkh_dockedutaan_s', 'kedutaan', $nama_s, $type, $regID);
            }
            $passport_s = '';
            if ($_FILES['nkh_docpassport_s']['name']) {
                $passport_s = $this->uploadFile('nkh_docpassport_s', 'passport', $nama_s, $type, $regID);
            }
            $imigrasi_s = '';
            if ($_FILES['nkh_docimigrasi_s']['name']) {
                $imigrasi_s = $this->uploadFile('nkh_docimigrasi_s', 'imigrasi', $nama_s, $type, $regID);
            }

            //istri
            $kwn_i = strtoupper($this->input->post('nkh_kewarganegaraan_i'));
            $nik_i = $this->input->post('nkh_nik_i');
            $nama_i = $this->input->post('nkh_nama_i');
            $ttl_i = $this->input->post('nkh_ttl_i') . ', ' . $this->input->post('nkh_ttl2_i');
            $umur_i = $this->input->post('nkh_umur_i');
            $status_i = $this->input->post('nkh_status_i');
            $agama_i = $this->input->post('nkh_agama_i');
            $alamat_i = $this->input->post('nkh_alamat_i');
            $pekerjaan_i = $this->input->post('nkh_pekerjaan_i');
            $nohp_i = $this->input->post('nkh_nohp_i');
            $foto_i = $this->uploadFile('nkh_foto_i', 'foto', $nama_i, $type, $regID);
            $pendukung_i = '';
            if ($_FILES['nkh_docpendukung_i']['name']) {
                $pendukung_i = $this->uploadFile('nkh_docpendukung_i', 'pendukung', $nama_i, $type, $regID);
            }
            $kedutaan_i = '';
            if ($_FILES['nkh_dockedutaan_i']['name']) {
                $kedutaan_i = $this->uploadFile('nkh_dockedutaan_i', 'kedutaan', $nama_i, $type, $regID);
            }
            $passport_i = '';
            if ($_FILES['nkh_docpassport_i']['name']) {
                $passport_i = $this->uploadFile('nkh_docpassport_i', 'passport', $nama_i, $type, $regID);
            }
            $imigrasi_i = '';
            if ($_FILES['nkh_docimigrasi_i']['name']) {
                $imigrasi_i = $this->uploadFile('nkh_docimigrasi_i', 'imigrasi', $nama_i, $type, $regID);
            }

            //dokumen
            $n1 = $this->uploadFile('nkh_docn1', 'N1', '', $type, $regID);
            $n3 = $this->uploadFile('nkh_docn3', 'N3', '', $type, $regID);
            $ktp_s = $this->uploadFile('nkh_docktp_s', 'ktp', $nama_s, $type, $regID);
            $ktp_i = $this->uploadFile('nkh_docktp_i', 'ktp', $nama_i, $type, $regID);
            $kk_s = $this->uploadFile('nkh_dockk_s', 'kk', $nama_s, $type, $regID);
            $kk_i = $this->uploadFile('nkh_dockk_i', 'kk', $nama_i, $type, $regID);
            $akta_s = $this->uploadFile('nkh_docakta_s', 'aktalahir', $nama_s, $type, $regID);
            $akta_i = $this->uploadFile('nkh_docakta_i', 'aktalahir', $nama_i, $type, $regID);
            $numpangNikah = '';
            if ($_FILES['nkh_docnumpang_nikah']['name']) {
                $numpangNikah = $this->uploadFile('nkh_docnumpang_nikah', 'numpangnikah', '', $type, $regID);
            }

            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $status_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s, $foto_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $status_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i, $foto_i);
            array_push($params, $n1, $n3, $ktp_s, $ktp_i, $kk_s, $kk_i, $akta_s, $akta_i, $pendukung_s, $pendukung_i, $kedutaan_s, $kedutaan_i, $passport_s, $passport_i, $imigrasi_s, $imigrasi_i, $numpangNikah);

            $startIndex = 3;

            $dataDetailNikah = array(
                'KEWARGANEGARAAN_S' => $kwn_s,
                'NIK_CAL_S' => $nik_s,
                'NAMA_CAL_S' => $nama_s,
                'TTL_S' => $ttl_s,
                'UMUR_S' => $umur_s,
                'STATUS_CAL_S' => $status_s,
                'AGAMA_S' => $agama_s,
                'ALMT_S' =>  $alamat_s,
                'PEKERJAAN_S' => $pekerjaan_s,
                'NO_HP_S' => $nohp_s,
                'FOTO_S' => $foto_s,
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_CAL_I' => $nik_i,
                'NAMA_CAL_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'STATUS_CAL_I' => $status_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i,
                'FOTO_I' => $foto_i,
                'FILE_SKUN_N1' => $n1,
                'FILE_SPM_N3' => $n3,
                'FILE_KTP_S' => $ktp_s,
                'FILE_KTP_I' => $ktp_i,
                'FILE_KK_S' => $kk_s,
                'FILE_KK_I' => $kk_i,
                'FILE_AKTA_LAHIR_S' => $akta_s,
                'FILE_AKTA_LAHIR_I' => $akta_i,
                'FILE_ADDITIONAL_DOC_S' => $pendukung_s,
                'FILE_ADDITIONAL_DOC_I' => $pendukung_i,
                'FILE_ADDITIONAL_DOC_KEDUTAAN_S' => $kedutaan_s,
                'FILE_ADDITIONAL_DOC_KEDUTAAN_I' => $kedutaan_i,
                'FILE_ADDITIONAL_DOC_PASSPORT_S' => $passport_s,
                'FILE_ADDITIONAL_DOC_PASSPORT_I' => $passport_i,
                'FILE_ADDITIONAL_DOC_IMIGRASI_S' => $imigrasi_s,
                'FILE_ADDITIONAL_DOC_IMIGRASI_I' => $imigrasi_i,
                'FILE_ADDITIONAL_DOC_NUMPANG' => $numpangNikah
            );

            $this->registration->updateDetail($regID, $dataDetailNikah);
        } else if ('isbat' == $type) {
            //suami
            $kwn_s = strtoupper($this->input->post('isb_kewarganegaraan_s'));
            $nik_s = $this->input->post('isb_nik_s');
            $nama_s = $this->input->post('isb_nama_s');
            $ttl_s = $this->input->post('isb_ttl_s') . ', ' . $this->input->post('isb_ttl2_s');
            $umur_s = $this->input->post('isb_umur_s');
            $agama_s = $this->input->post('isb_agama_s');
            $alamat_s = $this->input->post('isb_alamat_s');
            $pekerjaan_s = $this->input->post('isb_pekerjaan_s');
            $nohp_s = $this->input->post('isb_nohp_s');
            $foto_s = $this->uploadFile('isb_foto_s', 'foto', $nama_s, $type, $regID);

            //istri
            $kwn_i = strtoupper($this->input->post('isb_kewarganegaraan_i'));
            $nik_i = $this->input->post('isb_nik_i');
            $nama_i = $this->input->post('isb_nama_i');
            $ttl_i = $this->input->post('isb_ttl_i') . ', ' . $this->input->post('isb_ttl2_i');
            $umur_i = $this->input->post('isb_umur_i');
            $agama_i = $this->input->post('isb_agama_i');
            $alamat_i = $this->input->post('isb_alamat_i');
            $pekerjaan_i = $this->input->post('isb_pekerjaan_i');
            $nohp_i = $this->input->post('isb_nohp_i');
            $foto_i = $this->uploadFile('isb_foto_i', 'foto', $nama_i, $type, $regID);

            //dokumen
            $sppa = $this->uploadFile('isb_docsppa', 'SPPA', '', $type, $regID);
            $ktp_s = $this->uploadFile('isb_docktp_s', 'ktp', $nama_s, $type, $regID);
            $ktp_i = $this->uploadFile('isb_docktp_i', 'ktp', $nama_i, $type, $regID);
            $kk_s = $this->uploadFile('isb_dockk_s', 'kk', $nama_s, $type, $regID);
            $kk_i = $this->uploadFile('isb_dockk_i', 'kk', $nama_i, $type, $regID);
            $akta_s = $this->uploadFile('isb_docakta_s', 'aktalahir', $nama_s, $type, $regID);
            $akta_i = $this->uploadFile('isb_docakta_i', 'aktalahir', $nama_i, $type, $regID);

            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s, $foto_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i, $foto_i);
            array_push($params, $sppa, $ktp_s, $ktp_i, $kk_s, $kk_i, $akta_s, $akta_i);

            $startIndex = 2;

            $dataDetailIsbat = array(
                'KEWARGANEGARAAN_S' => $kwn_s,
                'NIK_S' => $nik_s,
                'NAMA_S' => $nama_s,
                'TTL_S' => $ttl_s,
                'UMUR_S' => $umur_s,
                'AGAMA_S' => $agama_s,
                'ALMT_S' =>  $alamat_s,
                'PEKERJAAN_S' => $pekerjaan_s,
                'NO_HP_S' => $nohp_s,
                'FOTO_S' => $foto_s,
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_I' => $nik_i,
                'NAMA_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i,
                'FOTO_I' => $foto_i,
                'FILE_SPPA' => $sppa,
                'FILE_KTP_S' => $ktp_s,
                'FILE_KTP_I' => $ktp_i,
                'FILE_KK_S' => $kk_s,
                'FILE_KK_I' => $kk_i,
                'FILE_AKTA_LAHIR_S' => $akta_s,
                'FILE_AKTA_LAHIR_I' => $akta_i
            );

            $this->registration->updateDetail($regID, $dataDetailIsbat);
        } else if ('rujuk' == $type) {
            //suami
            $kwn_s = strtoupper($this->input->post('rjk_kewarganegaraan_s'));
            $nik_s = $this->input->post('rjk_nik_s');
            $nama_s = $this->input->post('rjk_nama_s');
            $ttl_s = $this->input->post('rjk_ttl_s') . ', ' . $this->input->post('rjk_ttl2_s');
            $umur_s = $this->input->post('rjk_umur_s');
            $agama_s = $this->input->post('rjk_agama_s');
            $alamat_s = $this->input->post('rjk_alamat_s');
            $pekerjaan_s = $this->input->post('rjk_pekerjaan_s');
            $nohp_s = $this->input->post('rjk_nohp_s');
            $foto_s = $this->uploadFile('rjk_foto_s', 'foto', $nama_s, $type, $regID);

            //istri
            $kwn_i = strtoupper($this->input->post('rjk_kewarganegaraan_i'));
            $nik_i = $this->input->post('rjk_nik_i');
            $nama_i = $this->input->post('rjk_nama_i');
            $ttl_i = $this->input->post('rjk_ttl_i') . ', ' . $this->input->post('rjk_ttl2_i');
            $umur_i = $this->input->post('rjk_umur_i');
            $agama_i = $this->input->post('rjk_agama_i');
            $alamat_i = $this->input->post('rjk_alamat_i');
            $pekerjaan_i = $this->input->post('rjk_pekerjaan_i');
            $nohp_i = $this->input->post('rjk_nohp_i');
            $foto_i = $this->uploadFile('rjk_foto_i', 'foto', $nama_i, $type, $regID);

            //dokumen
            $aktacerai = $this->uploadFile('rjk_docaktacerai', 'aktacerai', '', $type, $regID);
            $ktp_s = $this->uploadFile('rjk_docktp_s', 'ktp', $nama_s, $type, $regID);
            $ktp_i = $this->uploadFile('rjk_docktp_i', 'ktp', $nama_i, $type, $regID);
            $kk_s = $this->uploadFile('rjk_dockk_s', 'kk', $nama_s, $type, $regID);
            $kk_i = $this->uploadFile('rjk_dockk_i', 'kk', $nama_i, $type, $regID);
            $akta_s = $this->uploadFile('rjk_docakta_s', 'aktalahir', $nama_s, $type, $regID);
            $akta_i = $this->uploadFile('rjk_docakta_i', 'aktalahir', $nama_i, $type, $regID);

            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s, $foto_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i, $foto_i);
            array_push($params, $aktacerai, $ktp_s, $ktp_i, $kk_s, $kk_i, $akta_s, $akta_i);

            $startIndex = 4;

            $dataDetailRujuk = array(
                'KEWARGANEGARAAN_S' => $kwn_s,
                'NIK_S' => $nik_s,
                'NAMA_S' => $nama_s,
                'TTL_S' => $ttl_s,
                'UMUR_S' => $umur_s,
                'AGAMA_S' => $agama_s,
                'ALMT_S' =>  $alamat_s,
                'PEKERJAAN_S' => $pekerjaan_s,
                'NO_HP_S' => $nohp_s,
                'FOTO_S' => $foto_s,
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_I' => $nik_i,
                'NAMA_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i,
                'FOTO_I' => $foto_i,
                'FILE_AKTA_CERAI' => $aktacerai,
                'FILE_KTP_S' => $ktp_s,
                'FILE_KTP_I' => $ktp_i,
                'FILE_KK_S' => $kk_s,
                'FILE_KK_I' => $kk_i,
                'FILE_AKTA_LAHIR_S' => $akta_s,
                'FILE_AKTA_LAHIR_I' => $akta_i
            );

            $this->registration->updateDetail($regID, $dataDetailRujuk);
        }

        $insertedDetail = 0;
        $question = $this->registration->getListQuestion($type);

        for ($i = 0; $i < count($params); $i++) {
            $success = $this->registration->insertRegistrationDetail($regID, $question[$startIndex]->QUESTION_ID, $question[$startIndex]->QUESTION_LABEL, $params[$i]);
            if ($success) {
                $insertedDetail++;
                $startIndex++;
            }
        }

        if (count($params) == $insertedDetail) {
            reset($params);
            $startIndex = 0;
            $registrationType = '';
            $actionMsg = '';
            if ('nikah' == $type) {
                $registrationType = 'Pernikahan';
                $actionMsg = 'pemberitahuan sidang pranikah.';
            } else if ('isbat' == $type) {
                $registrationType = 'Isbat';
                $actionMsg = 'pengambilan buku nikah.';
            } else if ('rujuk' == $type) {
                $registrationType = 'Rujuk';
                $actionMsg = 'pemberitahuan sidang prarujuk.';
            }
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> Pendaftaran ' . $registrationType . ' anda sedang kami proses.<br>Silahkan tunggu info selanjutnya untuk ' . $actionMsg .
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('home');
        }
    }

    public function getDisabledHours()
    {
        $paramTglAkad = $this->input->post('nkh_tanggal_akad');
        $result = $this->registration->getDisabledHoursByDate($paramTglAkad);
        $listTimeAkad = array();
        foreach ($result as $val) {
            array_push($listTimeAkad, intval(substr($val->TGL_AKAD, 11, 2)));
        }
        echo json_encode($listTimeAkad);
    }

    public function validateRegistration()
    {
        $regId = $this->input->post('regId');
        $lokasiAkad = $this->input->post('lokasiAkad');
        $formName = $this->input->post('formName');
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
        setResponse($result, 'valid');
    }

    public function rejectRegistration()
    {
        $regId = $this->input->post('regId');
        $statusId = $this->registration->getStatusId('Ditolak');
        $result = $this->registration->updateStatusRegistration($regId, $statusId);

        // $apiURL = 'https://eu122.chat-api.com/instance150115/';
        // $token = 'n5wfif69crdyupo0';

        $message = 'Pendaftaran anda ditolak oleh pihak staff KUA karena beberapa hal. Harap melakukan pendaftaran ulang!';
        $phone = $this->registration->getPhoneNumber($regId);

        $this->sendMessage($phone, $message);

        // $data = json_encode(
        //     array(
        //         'phone' => '62' . substr($phone, 1),
        //         'body' => $message
        //     )
        // );
        // $url = $apiURL . 'message?token=' . $token;
        // $options = stream_context_create(
        //     array('http' =>
        //     array(
        //         'method'  => 'POST',
        //         'header'  => 'Content-type: application/json',
        //         'content' => $data
        //     ))
        // );
        // $response = file_get_contents($url, false, $options);

        setResponse($result, 'rejected');
    }

    public function sendPaymentCode($regId)
    {
        $dataReg = $this->registration->getDetailRegistration($regId);

        $message = '*[PEMBERITAHUAN]* Pendaftaran anda telah divalidasi oleh pihak KUA. Harap melakukan pembayaran untuk proses penjadwalan sidang! [KODE PEMBAYARAN: *' . $dataReg[0]->REG_CODE . '*]';
        $phone = $this->registration->getPhoneNumber($regId);

        $this->sendMessage($phone, $message);

        // $apiURL = 'https://eu122.chat-api.com/instance150115/';
        // $token = 'n5wfif69crdyupo0';

        // $message = 'Pendaftaran anda telah divalidasi oleh pihak KUA. Harap melakukan pembayaran untuk proses pendjadwalan sidang! [KODE PEMBAYARAN: ' . $dataReg[0]->REG_CODE . ']';
        // $phone = $this->registration->getPhoneNumber($regId);

        // $data = json_encode(
        //     array(
        //         'phone' => '62' . substr($phone, 1),
        //         'body' => $message
        //     )
        // );
        // $url = $apiURL . 'message?token=' . $token;
        // $options = stream_context_create(
        //     array('http' =>
        //     array(
        //         'method'  => 'POST',
        //         'header'  => 'Content-type: application/json',
        //         'content' => $data
        //     ))
        // );
        // $response = file_get_contents($url, false, $options);

        $statusId = $this->registration->getStatusId('Valid');
        $result = $this->registration->updateStatusRegistration($regId, $statusId);

        redirect('staff/nikah');
    }

    public function updateSchedule()
    {
        $regCode = $this->input->post('regCode');
        $schedule = $this->input->post('schedule');
        $time = $this->input->post('time');
        $regId = $this->registration->getRegistrationId($regCode);
        $dataPenghulu = $this->penghulu->getDataPenghulu();

        $eventType = $this->registration->getEventName($regCode);
        $statusId = $this->registration->getStatusId('Terjadwal');
        $result = $this->registration->updateScheduleRegistration($regCode, $schedule . ' ' . $time . ':00', $statusId);
        if ($result) {

            $messageToUser = '*[PEMBERITAHUAN]* Anda dijadwalkan untuk melakukan sidang ' . $eventType . ' pada ' . $schedule . ' ' . $time . ':00. Harap datang tepat waktu. Terima kasih.';
            $phoneUser = $this->registration->getPhoneNumber($regId);
            $this->sendMessage($phoneUser, $messageToUser);

            foreach ($dataPenghulu as $penghulu) {
                $messageToPenghulu = '*[PEMBERITAHUAN]* Akan dilaksanakan prosesi sidang ' . $eventType . ' pada *' .
                    $schedule . ' ' . $time .
                    ':00*. Terima kasih.';
                $this->sendMessage($penghulu->PHONE, $messageToPenghulu);
            }

            $data['redirect_url'] = BASE_URL . 'staff/' . $eventType;
            $data['success'] = $result;
            echo json_encode($data);
        } else {
            $data['success'] = $result;
            echo json_encode($data);
        }
    }

    public function sendMessage($phone, $message)
    {
        $apiURL = 'https://eu7.chat-api.com/instance153126/';
        $token = 'uto30ffehi8gru42';

        $dataAPI = json_encode(
            array(
                'phone' => '62' . substr($phone, 1),
                'body' => $message
            )
        );
        $url = $apiURL . 'message?token=' . $token;
        $options = stream_context_create(
            array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $dataAPI
            ))
        );
        $response = file_get_contents($url, false, $options);
    }

    public function rollbackRegistration($regID)
    {
        $result = $this->registration->deleteRegistration($regID);
        if ($result) {
            $data['redirect_url'] = base_url();
            $data['success'] = $result;
            echo json_encode($data);
        } else {
            $data['success'] = $result;
            echo json_encode($data);
        }
    }

    public function isNeedAdditionalDoc()
    {
        $jobLabel = $this->input->post('jobLabel');
        $jobAuth = $this->registration->getJobAuth($jobLabel);
        echo json_encode($jobAuth);
    }

    public function getMasaIdah()
    {
        $tanggalDaftarRujuk = date_create($this->input->post('tanggalDaftarRujuk'));
        $tanggalCerai = date_create($this->input->post('tanggalCerai'));
        $diff = date_diff($tanggalDaftarRujuk, $tanggalCerai);
        echo json_encode($diff->format("%a"));
    }

    public function uploadFile($fileName, $fileType, $nama, $regType, $regID)
    {
        $file = $_FILES[$fileName]['name'];
        $new_fileName = '';

        if ($nama == '') {
            $new_fileName = $fileType . '_' . $regID . '_' . date('YmdHis');
        } else {
            $new_fileName = $fileType . '_' . $regID . '_' . str_replace(" ", "", $nama) . '_' . date('YmdHis');
        }

        if ($file) {
            $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';
            $config['max_size'] = 2048;
            $config['upload_path'] = './assets/registration/' . $fileType . '/';
            $config['file_name'] = $new_fileName;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload($fileName)) {
                return $new_fileName . $this->upload->data('file_ext');
            } else {
                $this->registration->deleteRegistration($regID);
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                        . $this->upload->display_errors() .
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>'
                );
                redirect('home/registration/' . $regType);
            }
        }
    }


    //TESTING
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
