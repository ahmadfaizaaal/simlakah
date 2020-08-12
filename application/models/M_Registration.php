<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Registration extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function getJobAuth($jobLabel)
    {
        $result = $this->db->get_where('pekerjaan', ['LABEL_PEKERJAAN' => $jobLabel]);
        $job = $result->result();
        return $job[0]->IS_NEED_AUTH;
    }

    public function getListJob()
    {
        $query = $this->db->get('pekerjaan');
        return $query->result();
    }

    public function getListQuestion($param)
    {
        $query = "SELECT q.QUESTION_ID, q.IS_ACTIVE, q.QUESTION_LABEL, 
                    (CASE WHEN q.IS_READONLY = '1' THEN 'readonly' ELSE '' END) AS IS_READONLY
                    FROM QUESTION q
                    JOIN QUESTION_OF_GROUP qog ON q.QUESTION_ID = qog.QUESTION_ID
                    JOIN QUESTION_GROUP qg ON qog.QUESTIONGROUP_ID = qg.QUESTIONGROUP_ID
                    WHERE qog.QUESTIONGROUP_ID IN (
                            SELECT qof.QUESTIONGROUP_ID 
                            FROM QUESTIONGROUP_OF_FORM qof
                            JOIN FORM f ON qof.FORM_ID = f.FORM_ID
                            WHERE f.FORM_NAME = '$param'
                    ) AND q.IS_ACTIVE = '1'
                    ORDER BY qg.SEQ ASC, qog.SEQ ASC";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function getCountNikah()
    {
        $query = "SELECT MONTH(DTM_CRT) AS BULAN, sum(1) AS JUMLAH
                FROM REGISTRATION
                WHERE FORM_ID IN (1, 4)
                GROUP BY MONTH(DTM_CRT)";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function getCountRujuk()
    {
        $query = "SELECT MONTH(DTM_CRT) AS BULAN, sum(1) AS JUMLAH
                FROM REGISTRATION
                WHERE FORM_ID IN (2, 5)
                GROUP BY MONTH(DTM_CRT)";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function getCountIsbat()
    {
        $query = "SELECT MONTH(DTM_CRT) AS BULAN, sum(1) AS JUMLAH
                FROM REGISTRATION
                WHERE FORM_ID IN (3, 6)
                GROUP BY MONTH(DTM_CRT)";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function getListAkad()
    {
        $this->db->select('TGL_AKAD');
        $this->db->from('regdetail_tr');
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;
    }

    public function getDisabledHoursByDate($date)
    {
        $this->db->select('TGL_AKAD');
        $this->db->from('regdetail_tr');
        $this->db->like('TGL_AKAD', $date);
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;
    }

    public function getDisabledHours()
    {
        $this->db->select('TGL_AKAD');
        $this->db->from('regdetail_tr');
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;
    }

    public function getStatusId($statusDesc)
    {
        $sql = $this->db->get_where('registration_status', ['STATUS_DESC' => $statusDesc]);
        $result = $sql->row();
        return $result->STATUS_ID;
    }

    public function getFormId($formName)
    {
        $sql = $this->db->get_where('form', ['FORM_NAME' => $formName]);
        $result = $sql->row();
        return $result->FORM_ID;
    }

    public function getEventId($eventName)
    {
        $sql = $this->db->get_where('event', ['EVENT_NAME' => $eventName]);
        $result = $sql->row();
        return $result->EVENT_ID;
    }

    public function getFormName($regId)
    {
        $this->db->select('f.FORM_NAME');
        $this->db->from('registration r');
        $this->db->join('form f', 'r.FORM_ID = f.FORM_ID');
        $this->db->where('r.REG_ID', $regId);
        $sql = $this->db->get();
        $result = $sql->result();
        return $result[0]->FORM_NAME;
    }

    public function getPhoneNumber($regId)
    {
        $this->db->select('rd.NO_HP_S');
        $this->db->from('registration r');
        $this->db->join('regdetail_tr rd', 'r.REG_ID = rd.REG_ID');
        $this->db->where('r.REG_ID', $regId);
        $sql = $this->db->get();
        $result = $sql->result();
        return $result[0]->NO_HP_S;
    }

    public function getEventName($regCode)
    {
        $this->db->select('e.EVENT_NAME');
        $this->db->from('registration r');
        $this->db->join('form f', 'r.FORM_ID = f.FORM_ID');
        $this->db->join('event e', 'f.EVENT_ID = e.EVENT_ID');
        $this->db->where('r.REG_CODE', $regCode);
        $sql = $this->db->get();
        $result = $sql->result();
        return $result[0]->EVENT_NAME;
    }

    public function getRegistrationId($regCode)
    {
        $sql = $this->db->get_where('registration', ['REG_CODE' => $regCode]);
        $result = $sql->row();
        return $result->REG_ID;
    }

    public function getIdQuestion($refId)
    {
        $sql = $this->db->get_where('question', ['REF_ID' => $refId]);
        $result = $sql->row();
        return $result->QUESTION_ID;
    }

    public function getQuestionId($questionLabel)
    {
        $sql = $this->db->get_where('question', ['QUESTION_LABEL' => $questionLabel]);
        $result = $sql->row();
        return $result->QUESTION_ID;
    }

    public function getDataRegistration($statusCode, $formName)
    {
        $this->db->select('rd.*, f.FORM_NAME, st.*, r.REG_CODE, DATE_FORMAT(r.SCHEDULE, "%d-%m-%Y %H:%i:%s") as SCHEDULE, DATE_FORMAT(r.DTM_CRT, "%d-%m-%Y %H:%i:%s") as TGL_DAFTAR, DATE_FORMAT(r.VERIFIED_DATE, "%d-%m-%Y %H:%i:%s") as VERIFIED_DATE');
        // $this->db->select('rd.*, f.FORM_NAME, st.*, r.SCHEDULE_ID as SCHEDULE, r.REG_CODE, DATE_FORMAT(r.DTM_CRT, "%d-%m-%Y %H:%i:%s") as TGL_DAFTAR');
        $this->db->from('registration r');
        $this->db->join('regdetail_tr rd', 'r.REG_ID = rd.REG_ID');
        $this->db->join('form f', 'r.FORM_ID = f.FORM_ID');
        $this->db->join('registration_status st', 'r.STATUS_ID = st.STATUS_ID');
        if ($formName != null) {
            $this->db->where_in('f.FORM_NAME', $formName);
        }
        $this->db->where_in('st.STATUS_CODE', $statusCode);
        $this->db->order_by('r.DTM_CRT', 'desc');
        $this->db->order_by('r.STATUS_ID', 'desc');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getDetailRegistration($regId)
    {
        $this->db->select('rd.*, f.FORM_NAME, st.*, DATE_FORMAT(r.SCHEDULE, "%d-%m-%Y %H:%i:%s") as SCHEDULE, DATE_FORMAT(r.DTM_CRT, "%d-%m-%Y %H:%i:%s") as TGL_DAFTAR, r.REG_CODE');
        $this->db->from('registration r');
        $this->db->join('regdetail_tr rd', 'r.REG_ID = rd.REG_ID');
        $this->db->join('form f', 'r.FORM_ID = f.FORM_ID');
        $this->db->join('registration_status st', 'r.STATUS_ID = st.STATUS_ID');
        $this->db->where('r.REG_ID', $regId);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getFiles($column, $regId)
    {
        $this->db->select('r.REG_CODE, rd.QUESTION_LABEL, rd.ANSWER, f.FORM_NAME');
        $this->db->from('registration r');
        $this->db->join('registration_detail rd', 'r.REG_ID = rd.REG_ID');
        $this->db->join('form f', 'r.FORM_ID = f.FORM_ID');
        $this->db->join('question q', 'rd.QUESTION_ID = q.QUESTION_ID');
        $this->db->where('r.REG_ID', $regId);
        $this->db->where_in('q.REF_ID', $column);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function insertRegistration($regCode, $formID, $statusID, $participantID)
    {
        $data = array(
            'REG_CODE' => $regCode,
            'DTM_CRT' => date('Y-m-d H:i:s'),
            'FORM_ID' => $formID,
            'STATUS_ID' => $statusID,
            'PARTICIPANT_ID' => $participantID
        );
        $this->db->insert('registration', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertRegistrationDetail($regID, $questionID, $questionLabel, $answer)
    {
        $data = array(
            'DTM_CRT' => date('Y-m-d H:i:s'),
            'REG_ID' => $regID,
            'QUESTION_ID' => $questionID,
            'QUESTION_LABEL' => $questionLabel,
            'ANSWER' => $answer
        );
        $this->db->insert('registration_detail', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateRegistrationDetail($regID, $questionID, $questionLabel, $answer)
    {
        $data = array(
            'DTM_UPD' => date('Y-m-d H:i:s'),
            'USR_UPD' => $this->session->userdata('officer_id'),
            'REG_ID' => $regID,
            'QUESTION_ID' => $questionID,
            'QUESTION_LABEL' => $questionLabel,
            'ANSWER' => $answer
        );
        $this->db->update('registration_detail', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertHeader($data)
    {
        $this->db->insert('regdetail_tr', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertDetail($data)
    {
        $this->db->insert('regdetail_tr', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateDetail($regId, $data)
    {
        $this->db->set('DTM_UPD', date('Y-m-d H:i:s'));
        $this->db->set('USR_UPD', $this->session->userdata('officer_id'));
        $this->db->where('REG_ID', $regId);
        $this->db->update('regdetail_tr', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertVerificationDetail($regID, $verifType, $questionLabel, $answer)
    {
        $data = array(
            'DTM_CRT' => date('Y-m-d H:i:s'),
            'REG_ID' => $regID,
            'VERIF_TYPE' => $verifType,
            'QUESTION_LABEL' => $questionLabel,
            'ANSWER' => $answer
        );
        $this->db->insert('verification', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRegistration($regID)
    {
        $this->db->where('REG_ID', $regID);
        $this->db->delete('registration');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateScheduleRegistration($regCode, $schedule, $statusId)
    {
        $this->db->set('STATUS_ID', $statusId);
        $this->db->set('SCHEDULE', $schedule);
        $this->db->set('DTM_UPD', date('Y-m-d H:i:s'));
        $this->db->set('USR_UPD', $this->session->userdata('officer_id'));
        $this->db->where('REG_CODE', $regCode);
        $this->db->update('registration');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateVerifiedRegistration($regID, $statusId)
    {
        $this->db->set('STATUS_ID', $statusId);
        $this->db->set('VERIFIED_DATE', date('Y-m-d H:i:s'));
        $this->db->set('DTM_UPD', date('Y-m-d H:i:s'));
        $this->db->set('USR_UPD', $this->session->userdata('officer_id'));
        $this->db->where('REG_ID', $regID);
        $this->db->update('registration');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateStatusRegistration($regId, $statusId)
    {
        $this->db->set('STATUS_ID', $statusId);
        $this->db->set('DTM_UPD', date('Y-m-d H:i:s'));
        $this->db->set('VALIDATION_DATE', date('Y-m-d H:i:s'));
        $this->db->set('USR_UPD', $this->session->userdata('officer_id'));
        $this->db->where('REG_ID', $regId);
        $this->db->update('registration');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkAuthorityRegistration($nik)
    {
        $this->db->select('dk.STATUS_KAWIN');
        $this->db->from('dukcapil dk');
        $this->db->where('dk.NIK', $nik);
        $sql = $this->db->get();
        $result = $sql->result();
        return $result[0]->STATUS_KAWIN;
    }

    public function checkOnGoingRegistration($nik, $where)
    {
        $select = substr($where, 3);
        $this->db->select($where);
        $this->db->from('registration r');
        $this->db->join('regdetail_tr rd', 'r.REG_ID = rd.REG_ID');
        $this->db->where($where, $nik);
        $sql = $this->db->get();
        $result = $sql->result();
        if (null == $result) {
            return null;
        } else {
            return $result[0]->$select;
        }
    }
}
