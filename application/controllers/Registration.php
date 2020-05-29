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
        date_default_timezone_set('Asia/Bangkok');
    }

    public function submitHeader()
    {
        //INITIALIZE PARAM HEADER
        $regCode = $this->input->post('uniqueID');
        $type = $this->input->post('type');

        //INITIALIZE REGISTRATION STATUS
        $statusID = $this->registration->getStatusId('pending');

        //INITIALIZE FORM
        $formID = $this->registration->getFormId($type);

        //INITIALIZE PARTICIPANT ID
        $participantID = $this->session->userdata('participant_id');

        //DO INSERT
        $inserted = $this->registration->insertRegistration($regCode, $formID, $statusID, $participantID);

        if ($inserted) {
            //INITIALIZE PARAM DETAIL
            $params = array();
            if ('nikah' == $type) {
                $objTempatAkad = explode("^", $this->input->post('tempatAkad'));
                $objTanggalAkad = explode("^", $this->input->post('tanggalAkad'));
                $objAlamatAkad = explode("^", $this->input->post('alamatAkad'));

                array_push($params, $objTempatAkad, $objTanggalAkad, $objAlamatAkad);
            } else if ('nikah' == $type) {
                $objTanggalAkad = explode("^", $this->input->post('tanggalAkad'));
                $objAlamatAkad = explode("^", $this->input->post('alamatAkad'));

                array_push($params, $objTanggalAkad, $objAlamatAkad);
            } else {
                $objTanggalDaftarRujuk = explode("^", $this->input->post('tanggalDaftarRujuk'));
                $objTanggalCerai = explode("^", $this->input->post('tanggalCerai'));
                $objMasaidah = explode("^", $this->input->post('masaIdah'));
                $objStatusCerai = explode("^", $this->input->post('statusCerai'));

                array_push($params, $objTanggalDaftarRujuk, $objTanggalCerai, $objMasaidah, $objStatusCerai);
            }

            //GET REG ID
            $regID = $this->registration->getRegistrationId($regCode);

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
            $kwn_s = $this->input->post('nkh_kewarganegaraan_s');
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

            //istri
            $kwn_i = $this->input->post('nkh_kewarganegaraan_i');
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

            //dokumen
            $n1 = $this->uploadFile('nkh_docn1', 'N1', $nama_s, $type, $regID);
            $n3 = $this->uploadFile('nkh_docn3', 'N3', $nama_s, $type, $regID);
            $ktp_s = $this->uploadFile('nkh_docktp_s', 'ktp', $nama_s, $type, $regID);
            $ktp_i = $this->uploadFile('nkh_docktp_i', 'ktp', $nama_i, $type, $regID);
            $kk_s = $this->uploadFile('nkh_dockk_s', 'kk', $nama_s, $type, $regID);
            $kk_i = $this->uploadFile('nkh_dockk_i', 'kk', $nama_i, $type, $regID);
            $akta_s = $this->uploadFile('nkh_docakta_s', 'aktalahir', $nama_s, $type, $regID);
            $akta_i = $this->uploadFile('nkh_docakta_i', 'aktalahir', $nama_i, $type, $regID);

            array_push($params, $kwn_s, $nik_s, $nama_s, $ttl_s, $umur_s, $status_s, $agama_s, $alamat_s, $pekerjaan_s, $nohp_s, $foto_s);
            array_push($params, $kwn_i, $nik_i, $nama_i, $ttl_i, $umur_i, $status_i, $agama_i, $alamat_i, $pekerjaan_i, $nohp_i, $foto_i);
            array_push($params, $n1, $n3, $ktp_s, $ktp_i, $kk_s, $kk_i, $akta_s, $akta_i);
            $startIndex = 3;
        } else if ('isbat' == $type) {
            //suami
            $kwn_s = $this->input->post('isb_kewarganegaraan_s');
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
            $kwn_i = $this->input->post('isb_kewarganegaraan_i');
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
            $sppa = $this->uploadFile('isb_docsppa', 'SPPA', $nama_s, $type, $regID);
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
        } else {
            //suami
            $kwn_s = $this->input->post('rjk_kewarganegaraan_s');
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
            $kwn_i = $this->input->post('rjk_kewarganegaraan_i');
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
            $aktacerai = $this->uploadFile('rjk_docaktacerai', 'aktacerai', $nama_s, $type, $regID);
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
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> Pendaftaran pernikahan anda sedang kami proses.<br>Silahkan tunggu info selanjutnya untuk pemberitahuan sidang pranikah.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('home');
        }
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

    public function listJob()
    {
        $job = $this->registration->getListJob();
        echo json_encode($job);
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
        $new_fileName = $regID . '_' . str_replace(" ", "_", $nama) . '_' . date('YmdHis') . '_' . $fileType;

        if ($file) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|JPEG|pdf|PDF';
            $config['max_size'] = 2048;
            $config['upload_path'] = './assets/registration/' . $fileType . '/';
            $config['file_name'] = $new_fileName;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload($fileName)) {
                return $new_fileName;
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
