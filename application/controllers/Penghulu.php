<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penghulu extends CI_Controller
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
        $data['job'] = 'Penghulu';
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
        $this->load->view('penghulu/index');
        $this->load->view('component/footerscheduler');
    }

    //----------------------PEMERIKSAAN---------------------
    public function periksaNikah($regID)
    {
        $data['title'] = 'Pemeriksaan';
        $data['job'] = 'Penghulu';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['result'] = $this->registration->getDetailRegistration($regID);

        $this->load->view('component/headerpemeriksaan', $data);
        $this->load->view('penghulu/periksanikah');
        $this->load->view('component/footerpemeriksaan');
    }

    public function submitPemeriksaanNikah()
    {
        $questionLabel = array();
        $questionAnswer = array();

        $regID = $this->input->post('regID');

        //CALON SUAMI
        array_push($questionLabel, 'Nama Lengkap', 'Agama', 'Tempat Tanggal Lahir', 'Pekerjaan', 'Nomor Induk Kependudukan (NIK)', 'Pendidikan Terakhir', 'Kewarganegaraan', 'Alamat');
        array_push($questionLabel, 'Nama Lengkap Ayah', 'Tempat Tanggal Lahir Ayah', 'Nomor Induk Kependudukan (NIK) Ayah', 'Kewarganegaraan Ayah', 'Agama Ayah', 'Pekerjaan Ayah', 'Alamat Ayah');
        array_push($questionLabel, 'Nama Lengkap Ibu', 'Tempat Tanggal Lahir Ibu', 'Nomor Induk Kependudukan (NIK) Ibu', 'Kewarganegaraan Ibu', 'Agama Ibu', 'Pekerjaan Ibu', 'Alamat Ibu');
        array_push($questionLabel, 'Status Perkawinan', 'Nama Bekas Istri', 'Alamat', 'Nama Akta', 'Instansi', 'Nomor', 'Tanggal', 'Jumlah Istri', 'Nama Istri', 'Pengadilan Pemberi Izin', 'Nomor Keputusan', 'Tanggal Keputusan');
        array_push($questionLabel, 'Pernikahan ke-', 'Dia Sendiri', 'Bekas Istri', 'Istri / Istri-istri');
        array_push($questionLabel, 'Pejabat Pemberi Izin', 'Nomor', 'Tanggal Surat', 'Instansi Pemberi Izin', 'Nomor', 'Tanggal Surat', 'Izin Pengadilan', 'Nomor', 'Tanggal Surat', 'Nama Pemberi Izin', 'Hubungan Keluarga', 'Tanggal Surat');

        $namacal_s = $this->input->post('namacal_s');
        $agamacal_s = $this->input->post('agamacal_s');
        $ttlcal_s = $this->input->post('ttlcal_s');
        $pekerjaancal_s = $this->input->post('pekerjaancal_s');
        $nikcal_s = $this->input->post('nikcal_s');
        $pendidikancal_s = $this->input->post('pendidikancal_s');
        $kwncal_s = $this->input->post('kwncal_s');
        $alamatcal_s = $this->input->post('alamatcal_s');

        array_push($questionAnswer, $namacal_s, $agamacal_s, $ttlcal_s, $pekerjaancal_s, $nikcal_s, $pendidikancal_s, $kwncal_s, $alamatcal_s);

        $namaayahcal_s = $this->input->post('namaayahcal_s');
        $namaibucal_s = $this->input->post('namaibucal_s');
        $ttlayahcal_s = $this->input->post('ttlayahcal_s');
        $ttlibucal_s = $this->input->post('ttlibucal_s');
        $nikayahcal_s = $this->input->post('nikayahcal_s');
        $nikibucal_s = $this->input->post('nikibucal_s');
        $kwnayahcal_s = $this->input->post('kwnayahcal_s');
        $kwnibucal_s = $this->input->post('kwnibucal_s');
        $agamaayahcal_s = $this->input->post('agamaayahcal_s');
        $agamaibucal_s = $this->input->post('agamaibucal_s');
        $pekerjaanayahcal_s = $this->input->post('pekerjaanayahcal_s');
        $pekerjaanibucal_s = $this->input->post('pekerjaanibucal_s');
        $alamatayah_s = $this->input->post('alamatayah_s');
        $alamatibucal_s = $this->input->post('alamatibucal_s');

        array_push($questionAnswer, $namaayahcal_s, $ttlayahcal_s, $nikayahcal_s, $kwnayahcal_s, $agamaayahcal_s, $pekerjaanayahcal_s, $alamatayah_s);
        array_push($questionAnswer, $namaibucal_s, $ttlibucal_s, $nikibucal_s, $kwnibucal_s, $agamaibucal_s, $pekerjaanibucal_s, $alamatibucal_s);

        $statusperkawinan_s = $this->input->post('statusperkawinan_s');
        $namabekasistri = $this->input->post('namabekasistri');
        $alamatistri = $this->input->post('alamatistri');
        $namaakta = $this->input->post('namaakta');
        $instansi_s = $this->input->post('instansi_s');
        $nomor_s = $this->input->post('nomor_s');
        $tanggal_s = $this->input->post('tanggal_s');
        $jumlahistri = $this->input->post('jumlahistri');
        $namaistri = $this->input->post('namaistri');
        $pengadilanPI = $this->input->post('pengadilanPI');
        $nomorkeputusan_s = $this->input->post('nomorkeputusan_s');
        $tanggalkeputusan_s = $this->input->post('tanggalkeputusan_s');

        array_push($questionAnswer, $statusperkawinan_s, $namabekasistri, $alamatistri, $namaakta, $instansi_s, $nomor_s);
        array_push($questionAnswer, $tanggal_s, $jumlahistri, $namaistri, $pengadilanPI, $nomorkeputusan_s, $tanggalkeputusan_s);

        $pernikahanke_s = $this->input->post('pernikahanke_s');
        $diasendiri_s = $this->input->post('diasendiri_s');
        $bekasistri_s = $this->input->post('bekasistri_s');
        $istriistri_s = $this->input->post('istriistri_s');

        array_push($questionAnswer, $pernikahanke_s, $diasendiri_s, $bekasistri_s, $istriistri_s);

        $pejabatPI_s = $this->input->post('pejabatPI_s');
        $nomorpejabat_s = $this->input->post('nomorpejabat_s');
        $tanggalsuratpejabat_s = $this->input->post('tanggalsuratpejabat_s');
        $instansiPI_s = $this->input->post('instansiPI_s');
        $nomorinstansi_s = $this->input->post('nomorinstansi_s');
        $tanggalsuratinstansi_s = $this->input->post('tanggalsuratinstansi_s');
        $izinpengadilan_s = $this->input->post('izinpengadilan_s');
        $nomorizinpengadilan_s = $this->input->post('nomorizinpengadilan_s');
        $tanggalsuratpengadilan_s = $this->input->post('tanggalsuratpengadilan_s');
        $namapemberiizin_s = $this->input->post('namapemberiizin_s');
        $hubungankeluarga_s = $this->input->post('hubungankeluarga_s');
        $tanggalsuratpemberiizin_s = $this->input->post('tanggalsuratpemberiizin_s');

        array_push($questionAnswer, $pejabatPI_s, $nomorpejabat_s, $tanggalsuratpejabat_s, $instansiPI_s, $nomorinstansi_s);
        array_push($questionAnswer, $tanggalsuratinstansi_s, $izinpengadilan_s, $nomorizinpengadilan_s, $tanggalsuratpengadilan_s);
        array_push($questionAnswer, $namapemberiizin_s, $hubungankeluarga_s, $tanggalsuratpemberiizin_s);

        //CALON ISTRI
        array_push($questionLabel, 'Nama Lengkap', 'Agama', 'Tempat Tanggal Lahir', 'Pekerjaan', 'Nomor Induk Kependudukan (NIK)', 'Pendidikan Terakhir', 'Kewarganegaraan', 'Alamat');
        array_push($questionLabel, 'Nama Lengkap Ayah', 'Tempat Tanggal Lahir Ayah', 'Nomor Induk Kependudukan (NIK) Ayah', 'Kewarganegaraan Ayah', 'Agama Ayah', 'Pekerjaan Ayah', 'Alamat Ayah');
        array_push($questionLabel, 'Nama Lengkap Ibu', 'Tempat Tanggal Lahir Ibu', 'Nomor Induk Kependudukan (NIK) Ibu', 'Kewarganegaraan Ibu', 'Agama Ibu', 'Pekerjaan Ibu', 'Alamat Ibu');
        array_push($questionLabel, 'Status Perkawinan', 'Nama Bekas Suami', 'Alamat', 'Nama Akta', 'Instansi', 'Nomor', 'Tanggal');
        array_push($questionLabel, 'Pernikahan ke-', 'Suami', 'Bekas Istri Suami', 'Istri / Istri-istri Suami');
        array_push($questionLabel, 'Pejabat Pemberi Izin', 'Nomor', 'Tanggal Surat', 'Instansi Pemberi Izin', 'Nomor', 'Tanggal Surat', 'Izin Pengadilan', 'Nomor', 'Tanggal Surat', 'Nama Pemberi Izin', 'Hubungan Keluarga', 'Tanggal Surat');

        $namacal_i = $this->input->post('namacal_i');
        $agamacal_i = $this->input->post('agamacal_i');
        $ttlcal_i = $this->input->post('ttlcal_i');
        $pekerjaancal_i = $this->input->post('pekerjaancal_i');
        $nikcal_i = $this->input->post('nikcal_i');
        $pendidikancal_i = $this->input->post('pendidikancal_i');
        $kwncal_i = $this->input->post('kwncal_i');
        $alamatcal_i = $this->input->post('alamatcal_i');

        array_push($questionAnswer, $namacal_i, $agamacal_i, $ttlcal_i, $pekerjaancal_i, $nikcal_i, $pendidikancal_i, $kwncal_i, $alamatcal_i);

        $namaayahcal_i = $this->input->post('namaayahcal_i');
        $namaibucal_i = $this->input->post('namaibucal_i');
        $ttlayahcal_i = $this->input->post('ttlayahcal_i');
        $ttlibucal_i = $this->input->post('ttlibucal_i');
        $nikayahcal_i = $this->input->post('nikayahcal_i');
        $nikibucal_i = $this->input->post('nikibucal_i');
        $kwnayahcal_i = $this->input->post('kwnayahcal_i');
        $kwnibucal_i = $this->input->post('kwnibucal_i');
        $agamaayahcal_i = $this->input->post('agamaayahcal_i');
        $agamaibucal_i = $this->input->post('agamaibucal_i');
        $pekerjaanayahcal_i = $this->input->post('pekerjaanayahcal_i');
        $pekerjaanibucal_i = $this->input->post('pekerjaanibucal_i');
        $alamatayah_i = $this->input->post('alamatayah_i');
        $alamatibucal_i = $this->input->post('alamatibucal_i');

        array_push($questionAnswer, $namaayahcal_i, $ttlayahcal_i, $nikayahcal_i, $kwnayahcal_i, $agamaayahcal_i, $pekerjaanayahcal_i, $alamatayah_i);
        array_push($questionAnswer, $namaibucal_i, $ttlibucal_i, $nikibucal_i, $kwnibucal_i, $agamaibucal_i, $pekerjaanibucal_i, $alamatibucal_i);

        $statusperkawinan_i = $this->input->post('statusperkawinan_i');
        $namabekassuami = $this->input->post('namabekassuami');
        $alamatbekassuami = $this->input->post('alamatbekassuami');
        $namaakta_i = $this->input->post('namaakta_i');
        $instansi_i = $this->input->post('instansi_i');
        $nomor_i = $this->input->post('nomor_i');
        $tanggal_i = $this->input->post('tanggal_i');

        array_push($questionAnswer, $statusperkawinan_i, $namabekassuami, $alamatbekassuami, $namaakta_i, $instansi_i, $nomor_i, $tanggal_i);

        $pernikahanke_i = $this->input->post('pernikahanke_i');
        $suami_i = $this->input->post('suami_i');
        $bekasistrisuami_i = $this->input->post('bekasistrisuami_i');
        $istriistrisuami_i = $this->input->post('istriistrisuami_i');

        array_push($questionAnswer, $pernikahanke_i, $suami_i, $bekasistrisuami_i, $istriistrisuami_i);

        $pejabatPI_i = $this->input->post('pejabatPI_i');
        $nomorpejabat_i = $this->input->post('nomorpejabat_i');
        $tanggalsuratpejabat_i = $this->input->post('tanggalsuratpejabat_i');
        $instansiPI_i = $this->input->post('instansiPI_i');
        $nomorinstansi_i = $this->input->post('nomorinstansi_i');
        $tanggalsuratinstansi_i = $this->input->post('tanggalsuratinstansi_i');
        $izinpengadilan_i = $this->input->post('izinpengadilan_i');
        $nomorizinpengadilan_i = $this->input->post('nomorizinpengadilan_i');
        $tanggalsuratpengadilan_i = $this->input->post('tanggalsuratpengadilan_i');
        $namapemberiizin_i = $this->input->post('namapemberiizin_i');
        $hubungankeluarga_i = $this->input->post('hubungankeluarga_i');
        $tanggalsuratpemberiizin_i = $this->input->post('tanggalsuratpemberiizin_i');

        array_push($questionAnswer, $pejabatPI_i, $nomorpejabat_i, $tanggalsuratpejabat_i, $instansiPI_i, $nomorinstansi_i);
        array_push($questionAnswer, $tanggalsuratinstansi_i, $izinpengadilan_i, $nomorizinpengadilan_i, $tanggalsuratpengadilan_i);
        array_push($questionAnswer, $namapemberiizin_i, $hubungankeluarga_i, $tanggalsuratpemberiizin_i);

        //WALI AKAD
        array_push($questionLabel, 'Status Wali', 'Hubungan Wali', 'Sebab Menjadi Wali', 'Nama Lengkap', 'Bin', 'Nomor Induk Kependudukan (NIK)', 'Tempat Tanggal Lahir', 'Kewarganegaraan', 'Agama', 'Pekerjaan', 'Alamat');

        $statuswali = $this->input->post('statuswali');
        $hubunganwali = $this->input->post('hubunganwali');
        $sebabwali = $this->input->post('sebabwali');
        $namalengkapwali = $this->input->post('namalengkapwali');
        $bin = $this->input->post('bin');
        $nikwali = $this->input->post('nikwali');
        $ttlwali = $this->input->post('ttlwali');
        $kwnwali = $this->input->post('kwnwali');
        $agamawali = $this->input->post('agamawali');
        $pekerjaanwali = $this->input->post('pekerjaanwali');
        $alamatwali = $this->input->post('alamatwali');

        array_push($questionAnswer, $statuswali, $hubunganwali, $sebabwali, $namalengkapwali, $bin, $nikwali, $ttlwali, $kwnwali, $agamawali, $pekerjaanwali, $alamatwali);

        //WAKIL WALI AKAD
        array_push($questionLabel, 'Nama Lengkap', 'Nomor Induk Kependudukan (NIK)', 'Tempat Tanggal Lahir', 'Kewarganegaraan', 'Agama', 'Pekerjaan', 'Alamat', 'Tanggal Surat Kuasa', 'Pejabat KUA yang Mengesahkan');

        $namalengkapwakilwali = $this->input->post('namalengkapwakilwali');
        $nikwakilwali = $this->input->post('nikwakilwali');
        $ttlwakilwali = $this->input->post('ttlwakilwali');
        $kwnwakilwali = $this->input->post('kwnwakilwali');
        $agamawakilwali = $this->input->post('agamawakilwali');
        $pekerjaanwakilwali = $this->input->post('pekerjaanwakilwali');
        $alamatwakilwali = $this->input->post('alamatwakilwali');
        $tanggalsuratkuasawakilwali = $this->input->post('tanggalsuratkuasawakilwali');
        $pejabatkuapengesah = $this->input->post('pejabatkuapengesah');

        array_push($questionAnswer, $namalengkapwakilwali, $nikwakilwali, $ttlwakilwali, $kwnwakilwali, $agamawakilwali, $pekerjaanwakilwali, $alamatwakilwali, $tanggalsuratkuasawakilwali, $pejabatkuapengesah);

        //MAS KAWIN
        array_push($questionLabel, 'Jenis dan Jumlah', 'Pembayaran');

        $jenisdanjumlah = $this->input->post('jenisdanjumlah');
        $pembayaran = $this->input->post('pembayaran');

        array_push($questionAnswer, $jenisdanjumlah, $pembayaran);

        //PERJANJIAN PERKAWINAN
        array_push($questionLabel, 'Nomor dan Tanggal Surat', 'Isi Perjanjian', 'Nama Notaris');

        $nomortanggalsurat = $this->input->post('nomortanggalsurat');
        $isiperjanjian = $this->input->post('isiperjanjian');
        $namanotaris = $this->input->post('namanotaris');

        array_push($questionAnswer, $nomortanggalsurat, $isiperjanjian, $namanotaris);

        //PETUGAS YANG MEMERIKSA
        array_push($questionLabel, 'Nama', 'Jabatan', 'KUA Kecamatan/KBRI/KJRI');

        $namapetugas = $this->input->post('namapetugas');
        $jabatanpetugas = $this->input->post('jabatanpetugas');
        $kuakecamatan = $this->input->post('kuakecamatan');

        array_push($questionAnswer, $namapetugas, $jabatanpetugas, $kuakecamatan);

        $verifType = $this->registration->getEventId('nikah');

        $insertedVerif = 0;
        for ($i = 0; $i < count($questionLabel); $i++) {
            $success = $this->registration->insertVerificationDetail($regID, $verifType, $questionLabel[$i], $questionAnswer[$i]);
            if ($success) {
                $insertedVerif++;
            }
        }

        if (count($questionLabel) == $insertedVerif) {
            $statusId = $this->registration->getStatusId('Sudah Sidang');
            $this->registration->updateVerifiedRegistration($regID, $statusId);
            redirect('penghulu/nikah');
        }
    }

    public function periksaRujuk($regID)
    {
        $data['title'] = 'Pemeriksaan Rujuk';
        $data['job'] = 'Penghulu';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('rujuk');
        $data['result'] = $this->registration->getDetailRegistration($regID);

        $this->load->view('component/headerpemeriksaan', $data);
        $this->load->view('penghulu/periksarujuk');
        $this->load->view('component/footerpemeriksaan');
    }

    public function submitPemeriksaanRujuk()
    {
        $questionLabel = array();
        $questionAnswer = array();

        $regID = $this->input->post('regID');

        //GENERAL INFO
        array_push($questionLabel, 'Provinsi', 'Kabupaten/Kota', 'Kecamatan', 'Nomor Akta Nikah', 'Nomor Rujuk', 'Tanggal Rujuk', 'Tanggal Ikrar Rujuk', 'Rujuk ke-');
        //DATA SUAMI
        array_push($questionLabel, 'NIK Suami', 'Nama Lengkap Suami', 'Nama Alias', 'Bin', 'Tempat Tanggal Lahir', 'Umur(tahun)', 'Agama', 'Kewarganegaraan');
        array_push($questionLabel, 'Pendidikan Terakhir', 'Pekerjaan', 'Tempat Tinggal', 'Nomor HP', 'Email', 'Status');
        //DATA ISTRI
        array_push($questionLabel, 'NIK Istri', 'Nama Lengkap Istri', 'Nama Alias', 'Bin', 'Tempat Tanggal Lahir', 'Umur(tahun)', 'Agama', 'Kewarganegaraan');
        array_push($questionLabel, 'Pendidikan Terakhir', 'Pekerjaan', 'Tempat Tinggal', 'Nomor HP', 'Email', 'Status');
        //PENGHULU/PEJABAT PEMBANTU PPN
        array_push($questionLabel, 'Nama', 'Jabatan/Pangkat');
        //SAKSI-SAKSI
        array_push($questionLabel, 'NIK Saksi 1', 'Nama Lengkap Saksi 1', 'Tempat Tanggal Lahir', 'Agama', 'Kewarganegaraan', 'Pekerjaan', 'Tempat Tinggal');
        array_push($questionLabel, 'NIK Saksi 2', 'Nama Lengkap Saksi 2', 'Tempat Tanggal Lahir', 'Agama', 'Kewarganegaraan', 'Pekerjaan', 'Tempat Tinggal');
        //PENCATATAN TALAQ
        array_push($questionLabel, 'Pengadilan Agama', 'Nomor', 'Tanggal Putusan');

        //GENERAL INFO ANSWER
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kecamatan = $this->input->post('kecamatan');
        $nomoraktanikah = $this->input->post('nomoraktanikah');
        $nomorrujuk = $this->input->post('nomorrujuk');
        $tanggalrujuk = $this->input->post('tanggalrujuk');
        $tanggalikrarrujuk = $this->input->post('tanggalikrarrujuk');
        $rujukke = $this->input->post('rujukke');
        array_push($questionAnswer, $provinsi, $kabupaten, $kecamatan, $nomoraktanikah, $nomorrujuk, $tanggalrujuk, $tanggalikrarrujuk, $rujukke);
        //DATA SUAMI ANSWER
        $nik_s = $this->input->post('nik_s');
        $nama_s = $this->input->post('nama_s');
        $alias_s = $this->input->post('alias_s');
        $bin_s = $this->input->post('bin_s');
        $ttl_s = $this->input->post('ttl_s') . ', ' . $this->input->post('ttl2_s');
        $umur_s = $this->input->post('umur_s');
        $agama_s = $this->input->post('agama_s');
        $kwn_s = $this->input->post('kwn_s');
        $pendidikan_s = $this->input->post('pendidikan_s');
        $pekerjaan_s = $this->input->post('pekerjaan_s');
        $tempattinggal_s = $this->input->post('tempattinggal_s');
        $nohp_s = $this->input->post('nohp_s');
        $email_s = $this->input->post('email_s');
        $status_s = $this->input->post('status_s');
        array_push($questionAnswer, $nik_s, $nama_s, $alias_s, $bin_s, $ttl_s, $umur_s, $agama_s, $kwn_s, $pendidikan_s, $pekerjaan_s, $tempattinggal_s, $nohp_s, $email_s, $status_s);
        //DATA ISTRI ANSWER
        $nik_i = $this->input->post('nik_i');
        $nama_i = $this->input->post('nama_i');
        $alias_i = $this->input->post('alias_i');
        $bin_i = $this->input->post('bin_i');
        $ttl_i = $this->input->post('ttl_i') . ', ' . $this->input->post('ttl2_i');
        $umur_i = $this->input->post('umur_i');
        $agama_i = $this->input->post('agama_i');
        $kwn_i = $this->input->post('kwn_i');
        $pendidikan_i = $this->input->post('pendidikan_i');
        $pekerjaan_i = $this->input->post('pekerjaan_i');
        $tempattinggal_i = $this->input->post('tempattinggal_i');
        $nohp_i = $this->input->post('nohp_i');
        $email_i = $this->input->post('email_i');
        $status_i = $this->input->post('status_i');
        array_push($questionAnswer, $nik_i, $nama_i, $alias_i, $bin_i, $ttl_i, $umur_i, $agama_i, $kwn_i, $pendidikan_i, $pekerjaan_i, $tempattinggal_i, $nohp_i, $email_i, $status_i);
        //PENGHULU/PEJABAT PEMBANTU PPN
        $namapetugas = $this->input->post('namapetugas');
        $jabatanpetugas = $this->input->post('jabatanpetugas');
        array_push($questionAnswer, $namapetugas, $jabatanpetugas);
        //SAKSI-SAKSI
        $nik_saksi_1 = $this->input->post('nik_saksi_1');
        $nama_saksi_1 = $this->input->post('nama_saksi_1');
        $ttl_saksi_1 = $this->input->post('ttl_saksi_1') . ', ' . $this->input->post('ttl2_saksi_1');
        $agama_saksi_1 = $this->input->post('agama_saksi_1');
        $kwn_saksi_1 = $this->input->post('kwn_saksi_1');
        $pekerjaan_saksi_1 = $this->input->post('pekerjaan_saksi_1');
        $tempattinggal_saksi_1 = $this->input->post('tempattinggal_saksi_1');
        array_push($questionAnswer, $nik_saksi_1, $nama_saksi_1, $ttl_saksi_1, $agama_saksi_1, $kwn_saksi_1, $pekerjaan_saksi_1, $tempattinggal_saksi_1);
        $nik_saksi_2 = $this->input->post('nik_saksi_2');
        $nama_saksi_2 = $this->input->post('nama_saksi_2');
        $ttl_saksi_2 = $this->input->post('ttl_saksi_2') . ', ' . $this->input->post('ttl2_saksi_2');
        $agama_saksi_2 = $this->input->post('agama_saksi_2');
        $kwn_saksi_2 = $this->input->post('kwn_saksi_2');
        $pekerjaan_saksi_2 = $this->input->post('pekerjaan_saksi_2');
        $tempattinggal_saksi_2 = $this->input->post('tempattinggal_saksi_2');
        array_push($questionAnswer, $nik_saksi_2, $nama_saksi_2, $ttl_saksi_2, $agama_saksi_2, $kwn_saksi_2, $pekerjaan_saksi_2, $tempattinggal_saksi_2);
        //PENCATATAN TALAQ
        $pengadilanagama = $this->input->post('pengadilanagama');
        $nomorpengadilan = $this->input->post('nomorpengadilan');
        $tanggalputusan = $this->input->post('tanggalputusan');
        array_push($questionAnswer, $pengadilanagama, $nomorpengadilan, $tanggalputusan);

        $verifType = $this->registration->getEventId('rujuk');

        $insertedVerif = 0;
        for ($i = 0; $i < count($questionLabel); $i++) {
            $success = $this->registration->insertVerificationDetail($regID, $verifType, $questionLabel[$i], $questionAnswer[$i]);
            if ($success) {
                $insertedVerif++;
            }
        }

        if (count($questionLabel) == $insertedVerif) {
            $statusId = $this->registration->getStatusId('Sudah Sidang');
            $this->registration->updateVerifiedRegistration($regID, $statusId);
            redirect('penghulu/rujuk');
        }
    }

    //----------------------PERNIKAHAN----------------------
    public function nikah()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth/login/general');
        }

        $data['title'] = 'Pernikahan';
        $data['job'] = 'Penghulu';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('nikah');
        $result = $this->registration->getListAkad();
        $listAkad = array();
        foreach ($result as $val) {
            array_push($listAkad, date_format(date_create($val->TGL_AKAD), "Y-m-d"));
        }
        $data['listDateAkad'] = $listAkad;

        $this->load->view('component/headerstaff', $data);
        $this->load->view('penghulu/pernikahan');
        $this->load->view('component/footerstaff');
    }

    public function showDataPernikahan()
    {
        // S = Terjadwal ; SSD = Sudah Sidang ; D = Selesai
        $statusCode = array('S', 'SSD', 'D');
        $formName = array('Nikah', 'NikahByOfficer');
        $result = $this->registration->getDataRegistration($statusCode, $formName);
        echo json_encode($result);
    }

    public function getDetailPernikahan()
    {
        $result = $this->registration->getDetailRegistration($this->input->post('regId'));
        echo json_encode($result);
    }

    //----------------------RUJUK---------------------------
    public function rujuk()
    {
        $data['title'] = 'Rujuk';
        $data['job'] = 'Penghulu';
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['question'] = $this->registration->getListQuestion('rujuk');
        $result = $this->registration->getListAkad();

        $this->load->view('component/headerstaff', $data);
        $this->load->view('penghulu/rujuk');
        $this->load->view('component/footerstaff');
    }

    public function showDataRujuk()
    {
        // S = Terjadwal ; SSD = Sudah Sidang ; D = Selesai
        $statusCode = array('S', 'SSD', 'D');
        $formName = array('Rujuk', 'RujukByOfficer');
        $result = $this->registration->getDataRegistration($statusCode, $formName);
        echo json_encode($result);
    }

    public function getDetailRujuk()
    {
        $result = $this->registration->getDetailRegistration($this->input->post('regId'));
        echo json_encode($result);
    }
}
