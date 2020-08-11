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
        $this->load->model('M_Schedule', 'schedule');
        date_default_timezone_set('Asia/Bangkok');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        //awal jadwal
        $dataSchedule = $this->schedule->get_list('registration_schedule');
        $schedule = array();
        foreach ($dataSchedule as $val) {
            $schedule[] = array(
                'id'     => intval($val->SCHEDULE_ID),
                'title' => '(' . $val->EVENT_TIME . ')   ' . $val->TITLE,
                'start' => date_format(date_create($val->EVENT_SCHEDULE), "Y-m-d H:i:s"),
                'color' => $val->COLOR,
                'textColor' => '#ffffff'
            );
        }

        $data['get_data'] = json_encode($schedule);
        $data['regCode'] = '';
        $data['namaCalon'] = '';
        $data['regType'] = '';
        $data['scheduleType'] = 'general';
        //akhir jadwal

        $data['title'] = 'Dashboard';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['job'] = 'Staff KUA';
        $jumlahPendaftarNikah = $this->registration->getCountNikah();
        $jumlahPendaftarRujuk = $this->registration->getCountRujuk();
        $jumlahPendaftarIsbat = $this->registration->getCountIsbat();
        $totalNikah = array();
        $totalRujuk = array();
        $totalIsbat = array();
        $bulan = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
        for ($i = 0; $i < count($bulan); $i++) {
            $jumlah = 0;
            foreach ($jumlahPendaftarNikah as $val) {
                if ($val->BULAN == $bulan[$i]) {
                    $jumlah = intval($val->JUMLAH);
                }
            }
            array_push($totalNikah, $jumlah);
        }
        for ($j = 0; $j < count($bulan); $j++) {
            $jumlah = 0;
            foreach ($jumlahPendaftarRujuk as $val) {
                if ($val->BULAN == $bulan[$j]) {
                    $jumlah = intval($val->JUMLAH);
                }
            }
            array_push($totalRujuk, $jumlah);
        }
        for ($k = 0; $k < count($bulan); $k++) {
            $jumlah = 0;
            foreach ($jumlahPendaftarIsbat as $val) {
                if ($val->BULAN == $bulan[$k]) {
                    $jumlah = intval($val->JUMLAH);
                }
            }
            array_push($totalIsbat, $jumlah);
        }
        $data['totalNikah'] = $totalNikah;
        $data['totalRujuk'] = $totalRujuk;
        $data['totalIsbat'] = $totalIsbat;

        $this->load->view('component/headerscheduler', $data);
        $this->load->view('staff/index');
        $this->load->view('component/footerscheduler');
    }

    //----------------------LIHAT JADWAL--------------------
    public function jadwal()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $dataSchedule = $this->schedule->get_list('registration_schedule');
        $schedule = array();
        foreach ($dataSchedule as $val) {
            $schedule[] = array(
                'id'     => intval($val->SCHEDULE_ID),
                'title' => '(' . $val->EVENT_TIME . ')   ' . $val->TITLE,
                'start' => date_format(date_create($val->EVENT_SCHEDULE), "Y-m-d H:i:s"),
                'color' => $val->COLOR,
                'textColor' => '#ffffff'
            );
        }



        $data = array();
        $data['job'] = 'Staff KUA';
        $data['title'] = 'Lihat Jadwal';
        $data['get_data'] = json_encode($schedule);
        $data['regCode'] = '';
        $data['namaCalon'] = '';
        $data['regType'] = '';
        $data['scheduleType'] = 'general';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $this->load->view('component/headerscheduler', $data);
        $this->load->view('staff/maincalender', $data);
        $this->load->view('component/footerscheduler');
    }

    //----------------------PERNIKAHAN----------------------
    public function nikah()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Pernikahan';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('nikah');
        $result = $this->registration->getListAkad();
        $listAkad = array();
        foreach ($result as $val) {
            array_push($listAkad, date_format(date_create($val->TGL_AKAD), "Y-m-d"));
        }
        $data['listDateAkad'] = $listAkad;
        $data['job'] = 'Staff KUA';

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/pernikahan');
        $this->load->view('component/footerstaff');
    }

    public function showDataPernikahan()
    {
        //S = Terjadwal ; RJ = Ditolak ; V = Valid ; SSD = Sudah Sidang ; D = Selesai
        $statusCode = array('S', 'RJ', 'V', 'SSD', 'D');
        $formName = array('Nikah', 'NikahByOfficer');
        $result = $this->registration->getDataRegistration($statusCode, $formName);
        echo json_encode($result);
    }

    public function getDetailPernikahan()
    {
        $result = $this->registration->getDetailRegistration($this->input->post('regId'));
        echo json_encode($result);
    }

    public function deletePernikahan()
    {
        $result = $this->registration->deleteRegistration($this->input->post('regId'));
        setResponse($result, 'delete');
    }

    public function submitRegistration($type)
    {
        //INITIALIZE PARAM FROM VIEW
        $param = explode('%5E', $type);
        $formName = $param[0];
        $action = $param[1];
        $regIdSubmitted = $param[2];

        $regCode = '';
        $statusID = '';
        $formID = '';
        $inserted = false;
        $regID = '';

        if ('0' == $regIdSubmitted && 'add' == $action) {
            $regCode = $this->session->userdata('officer_id') . '/OFFICER' . '/' . date('YmdHis');

            //INITIALIZE REGISTRATION STATUS
            $statusID = $this->registration->getStatusId('Valid');

            //INITIALIZE FORM
            $formID = $this->registration->getFormId($formName);

            //DO INSERT
            $inserted = $this->registration->insertRegistration($regCode, $formID, $statusID, null);

            //GET REG ID
            $regID = $this->registration->getRegistrationId($regCode);
        } else {
            $regID = $regIdSubmitted;
        }

        $params = array();

        if ('NikahByOfficer' == $formName) {
            //header
            $tmpNikah = $this->input->post('nkh_tempat');
            $tglAkad = $this->input->post('nkh_tanggal_akad') . ' ' . $this->input->post('nkh_jam_akad');
            $alamatAkad = $this->input->post('nkh_alamat_akad');

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

            array_push($params, $tmpNikah, $tglAkad, $alamatAkad);
            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $status_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $status_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i);

            $dataDetailNikah = array(
                'REG_ID' => $regID,
                'TMP_NIKAH' => $tmpNikah,
                'TGL_AKAD' => $tglAkad,
                'ALMT_AKAD' => $alamatAkad,
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
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_CAL_I' => $nik_i,
                'NAMA_CAL_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'STATUS_CAL_I' => $status_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i
            );

            if ('add' == $action) {
                $this->registration->insertDetail($dataDetailNikah);
            } else {
                $this->registration->updateDetail($regID, $dataDetailNikah);
            }
        } else if ('IsbatByOfficer' == $formName) {
            //header
            $tglAkad = $this->input->post('isb_tanggal_akad') . ' ' . $this->input->post('isb_jam_akad');
            $alamatAkad = $this->input->post('isb_alamat_akad');

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

            array_push($params, $tglAkad, $alamatAkad);
            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i);

            $startIndex = 2;

            $dataDetailIsbat = array(
                'REG_ID' => $regID,
                'TGL_AKAD' => $tglAkad,
                'ALMT_AKAD' => $alamatAkad,
                'KEWARGANEGARAAN_S' => $kwn_s,
                'NIK_S' => $nik_s,
                'NAMA_S' => $nama_s,
                'TTL_S' => $ttl_s,
                'UMUR_S' => $umur_s,
                'AGAMA_S' => $agama_s,
                'ALMT_S' =>  $alamat_s,
                'PEKERJAAN_S' => $pekerjaan_s,
                'NO_HP_S' => $nohp_s,
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_I' => $nik_i,
                'NAMA_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i
            );

            if ('add' == $action) {
                $this->registration->insertDetail($dataDetailIsbat);
            } else {
                $this->registration->updateDetail($regID, $dataDetailIsbat);
            }
        } else if ('RujukByOfficer' == $formName) {
            //header
            $tglDaftarRujuk = $this->input->post('rjk_tanggal_daftar_rujuk');
            $tglCerai = $this->input->post('rjk_tanggal_cerai');
            $masaIdah = $this->input->post('rjk_masa_idah');
            $statusCerai = $this->input->post('rjk_status_cerai');

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

            array_push($params, $tglDaftarRujuk, $tglCerai, $masaIdah, $statusCerai);
            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i);

            $dataDetailRujuk = array(
                'REG_ID' => $regID,
                'TGL_RUJUK' => $tglDaftarRujuk,
                'TGL_CERAI' => $tglCerai,
                'MASA_IDAH' => $masaIdah,
                'STATUS_CERAI' => $statusCerai,
                'KEWARGANEGARAAN_S' => $kwn_s,
                'NIK_S' => $nik_s,
                'NAMA_S' => $nama_s,
                'TTL_S' => $ttl_s,
                'UMUR_S' => $umur_s,
                'AGAMA_S' => $agama_s,
                'ALMT_S' =>  $alamat_s,
                'PEKERJAAN_S' => $pekerjaan_s,
                'NO_HP_S' => $nohp_s,
                'KEWARGANEGARAAN_I' => $kwn_i,
                'NIK_I' => $nik_i,
                'NAMA_I' => $nama_i,
                'TTL_I' => $ttl_i,
                'UMUR_I' => $umur_i,
                'AGAMA_I' => $agama_i,
                'ALMT_I' =>  $alamat_i,
                'PEKERJAAN_I' => $pekerjaan_i,
                'NO_HP_I' => $nohp_i
            );

            if ('add' == $action) {
                $this->registration->insertDetail($dataDetailRujuk);
            } else {
                $this->registration->updateDetail($regID, $dataDetailRujuk);
            }
        }

        $question = $this->registration->getListQuestion($formName);

        for ($i = 0; $i < count($params); $i++) {
            $success = $this->registration->insertRegistrationDetail($regID, $question[$i]->QUESTION_ID, $question[$i]->QUESTION_LABEL, $params[$i]);
        }

        setResponse(true, $action);
    }

    //----------------------ISBAT---------------------------
    public function isbat()
    {
        $data['title'] = 'Isbat';
        $data['job'] = 'Staff KUA';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('isbat');
        $result = $this->registration->getListAkad();

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/isbat');
        $this->load->view('component/footerstaff');
    }

    public function showDataIsbat()
    {
        // V = Valid ; S = Terjadwal
        $statusCode = array('V', 'S');
        $formName = array('Isbat', 'IsbatByOfficer');
        $result = $this->registration->getDataRegistration($statusCode, $formName);
        echo json_encode($result);
    }

    public function getDetailIsbat()
    {
        $result = $this->registration->getDetailRegistration($this->input->post('regId'));
        echo json_encode($result);
    }

    public function deleteIsbat()
    {
        $result = $this->registration->deleteRegistration($this->input->post('regId'));
        setResponse($result, 'delete');
    }

    //----------------------RUJUK---------------------------
    public function rujuk()
    {
        $data['title'] = 'Rujuk';
        $data['job'] = 'Staff KUA';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('rujuk');
        $result = $this->registration->getListAkad();

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/rujuk');
        $this->load->view('component/footerstaff');
    }

    public function showDataRujuk()
    {
        // V = Valid ; S = Terjadwal
        $statusCode = array('V', 'S');
        $formName = array('Rujuk', 'RujukByOfficer');
        $result = $this->registration->getDataRegistration($statusCode, $formName);
        echo json_encode($result);
    }

    public function getDetailRujuk()
    {
        $result = $this->registration->getDetailRegistration($this->input->post('regId'));
        echo json_encode($result);
    }

    public function deleteRujuk()
    {
        $result = $this->registration->deleteRegistration($this->input->post('regId'));
        setResponse($result, 'delete');
    }

    //----------------------PENGHULU-------------------------
    public function penghulu()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Penghulu';
        $data['job'] = 'Staff KUA';
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
        $data['job'] = 'Staff KUA';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));

        $this->load->view('component/headerstaff', $data);
        $this->load->view('staff/validasi');
        $this->load->view('component/footerstaff');
    }

    public function showDataRegistration()
    {
        //P = belum diproses ; PC = Menunggu Pembayaran
        $statusCode = array('P', 'PC');
        $result = $this->registration->getDataRegistration($statusCode, null);
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
                'FILE_ADDITIONAL_DOC_I',
                'FILE_ADDITIONAL_DOC_KEDUTAAN_S',
                'FILE_ADDITIONAL_DOC_KEDUTAAN_I',
                'FILE_ADDITIONAL_DOC_PASSPORT_S',
                'FILE_ADDITIONAL_DOC_PASSPORT_I',
                'FILE_ADDITIONAL_DOC_IMIGRASI_S',
                'FILE_ADDITIONAL_DOC_IMIGRASI_I'
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
