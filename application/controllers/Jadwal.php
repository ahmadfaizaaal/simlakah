<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('form_validation');
        $this->table         = 'registration_schedule';
        $this->load->model('M_Schedule', 'schedule');
        $this->load->model('M_Auth', 'auth');
    }

    public function index()
    {
        // if (!$this->session->userdata('username')) {
        //     redirect('auth/login/general');
        // }

        $dataSchedule = $this->schedule->get_list($this->table);
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
        $data['title'] = 'Penjadwalan';
        $data['get_data'] = json_encode($schedule);
        $data['regCode'] = '';
        $data['namaCalon'] = '';
        $data['regType'] = '';
        $data['scheduleType'] = 'general';
        // $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        $data['listmenu'] = $this->auth->listMenu('1');
        $this->load->view('component/headerscheduler', $data);
        $this->load->view('staff/calender', $data);
        $this->load->view('component/footerscheduler');
    }

    public function aturJadwal($param)
    {
        $dataSchedule = $this->schedule->get_list($this->table);
        $schedule = array();
        foreach ($dataSchedule as $val) {
            $schedule[] = array(
                'id'     => intval($val->SCHEDULE_ID),
                'title' => '(' . $val->EVENT_TIME . ')   ' . $val->TITLE,
                'start' => date_format(date_create($val->EVENT_SCHEDULE), "Y-m-d H:i:s"),
                'end' => date_format(date_create($val->EVENT_SCHEDULE), "Y-m-d H:i:s"),
                'color' => $val->COLOR,
                'textColor' => '#ffffff'
            );
        }

        $obj = explode('%5E', $param);
        $data = array();
        $data['title'] = 'Penjadwalan';
        $data['get_data'] = json_encode($schedule);
        $data['regCode'] = str_replace("~", "/", $obj[0]);
        $data['namaCalon'] = trim(urldecode($obj[1]));
        $data['scheduleType'] = 'spesific';

        $type = '';
        if ('Nikah' == $obj[2] || 'NikahByOfficer' == $obj[2]) {
            $type = '#40E0D0';
        } else if ('Rujuk' == $obj[2] || 'RujukByOfficer' == $obj[2]) {
            $type = '#FF0000';
        } else if ('Isbat' == $obj[2] || 'IsbatByOfficer' == $obj[2]) {
            $type = '#FFD700';
        }
        $data['regType'] = $type;
        $data['listmenu'] = $this->auth->listMenu($this->session->userdata('role_id'));
        // $data['listmenu'] = $this->auth->listMenu('1');
        $this->load->view('component/headerscheduler', $data);
        $this->load->view('staff/calender', $data);
        $this->load->view('component/footerscheduler');
    }

    public function save()
    {
        $response = array();
        $this->form_validation->set_rules('TITLE', 'Nama Penjadwalan', 'required|trim', [
            'required' => "Nama Penjadwalan harus diisi!"
        ]);
        if ($this->form_validation->run() == TRUE) {
            $param = $this->input->post();
            $schedule_id = $param['SCHEDULE_ID'];
            unset($param['SCHEDULE_ID']);

            if ($schedule_id == 0) {
                $param['DTM_CRT'] = date('Y-m-d H:i:s');
                $insert = $this->schedule->insert($this->table, $param);

                if ($insert > 0) {
                    $inserted = $this->schedule->getUpdatedSchedule($insert);
                    $response['status'] = TRUE;
                    $response['notif']    = 'Proses penjadwalan berhasil!';
                    $response['SCHEDULE_ID']        = $insert;
                    $response['REG_CODE']           = $inserted->REG_CODE;
                    $response['EVENT_SCHEDULE']     = $inserted->EVENT_SCHEDULE;
                    $response['EVENT_TIME']         = $inserted->EVENT_TIME;
                } else {
                    $response['status'] = FALSE;
                    $response['notif']    = 'Gagal menyimpan data penjadwalan!';
                }
            } else {
                $where = ['SCHEDULE_ID'  => $schedule_id];
                $param['DTM_UPD'] = date('Y-m-d H:i:s');
                $update = $this->schedule->update($this->table, $param, $where);

                if ($update > 0) {
                    $updated = $this->schedule->getUpdatedSchedule($schedule_id);
                    $response['status'] = TRUE;
                    $response['notif']    = 'Penjadwalan berhasil diubah!';
                    $response['SCHEDULE_ID']        = $schedule_id;
                    $response['REG_CODE']           = $updated->REG_CODE;
                    $response['EVENT_SCHEDULE']     = $updated->EVENT_SCHEDULE;
                    $response['EVENT_TIME']         = $updated->EVENT_TIME;
                } else {
                    $response['status'] = FALSE;
                    $response['notif']    = 'Gagal mengubah data penjadwalan!';
                }
            }
        } else {
            $response['status'] = FALSE;
            $response['notif']    = validation_errors();
        }

        echo json_encode($response);
    }

    public function delete()
    {
        $response         = array();
        $schedule_id     = $this->input->post('SCHEDULE_ID');
        if (!empty($schedule_id)) {
            $where = ['SCHEDULE_ID' => $schedule_id];
            $delete = $this->schedule->delete($this->table, $where);

            if ($delete > 0) {
                $response['status'] = TRUE;
                $response['notif']    = 'Hapus data penjadwalan berhasil!';
            } else {
                $response['status'] = FALSE;
                $response['notif']    = 'Terjadi kesalahan server, harap simpan ulang!';
            }
        } else {
            $response['status'] = FALSE;
            $response['notif']    = 'Data tidak ditemukan';
        }

        echo json_encode($response);
    }
}
