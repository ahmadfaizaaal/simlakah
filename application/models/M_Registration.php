<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Registration extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
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

    public function getRegistrationId($regCode)
    {
        $sql = $this->db->get_where('registration', ['REG_CODE' => $regCode]);
        $result = $sql->row();
        return $result->REG_ID;
    }

    public function getQuestionId($questionLabel)
    {
        $sql = $this->db->get_where('question', ['QUESTION_LABEL' => $questionLabel]);
        $result = $sql->row();
        return $result->QUESTION_ID;
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
}
