<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once('application/models/Test.php');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('form_validation');
        // $this->load->model('M_Member', 'member');
        date_default_timezone_set('Asia/Bangkok');
    }

    public function login()
    {
        if ($this->session->userdata('username')) {
            redirect('project');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SPRIKE | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $member = $this->member->getDataMember($username);

        //CHECK IF MEMBER IS EXIST
        if ($member) {
            //CHECK IF PASSWORD IS MATCH
            if (password_verify($password, $member->password)) {
                //IS MATCH
                $role_id = $this->member->getRoleId_by_idMember($member->id_member);
                $data = [
                    'id_member' => $member->id_member,
                    'username' => $member->username,
                    'role_id' => $role_id,
                    'last_time_login' => time()
                ];
                $this->session->set_userdata($data);
                redirect('project');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Wrong password!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username is not registered!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }
    }
    public function register()
    {
        $data['title'] = 'Sistem Manajemen Layanan Pernikahan';
        $this->load->view('auth/register', $data);
        // if ($this->session->userdata('username')) {
        //     redirect('project');
        // }

        // //BEGINNING RULES
        // $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        // $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[member.username]', [
        //     'is_unique' => "Username has already taken!"
        // ]);
        // $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|min_length[10]|max_length[12]|numeric', [
        //     'min_length' => 'Phone number must be at least 10 char!',
        //     'max_length' => 'Phone number must be max 12 char!',
        //     'numeric' => 'Phone number must be numeric!'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
        //     'matches' => "Password doesn't match!",
        //     'min_length' => "Password too short!"
        // ]);
        // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        // //SELECTION
        // if ($this->form_validation->run() == false) {
        //     $data['title'] = 'SPRIKE | Register';
        //     // $this->load->view('templates/auth_header', $data);
        //     $this->load->view('auth/register', $data);
        //     // $this->load->view('templates/auth_footer');
        // } else {
        //     // $datetime = new DateTime(null, new DateTimezone('Asia/Bangkok'));
        //     $data = [
        //         'full_name' => htmlspecialchars($this->input->post('fullname', true)),
        //         'username' => htmlspecialchars($this->input->post('username', true)),
        //         'job_id' => "JOB0003",
        //         'phone_number' => htmlspecialchars($this->input->post('phone', true)),
        //         'email' => htmlspecialchars($this->input->post('email', true)),
        //         'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        //         'image' => "user.png",
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ];

        //     //TEST
        //     // $memberInstan = new Test(
        //     //     htmlspecialchars($this->input->post('fullname', true)),
        //     //     htmlspecialchars($this->input->post('username', true)),
        //     //     "Programmer",
        //     //     htmlspecialchars($this->input->post('phone', true)),
        //     //     htmlspecialchars($this->input->post('email', true)),
        //     //     password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        //     //     "user.png",
        //     //     $datetime->format('Y-m-d H:i:s'),
        //     //     $datetime->format('Y-m-d H:i:s')
        //     // );
        //     // $memberInstan->addNewMember();


        //     $this->member->addNewMember($data);
        //     $this->session->set_flashdata(
        //         'message',
        //         '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //             Congratulation! Your account has been created. Please login to use the system!
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //             </button>
        //         </div>'
        //     );
        //     redirect('auth');
        // }
    }

    public function denied()
    {
        $data['title'] = 'Access Denied!';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/denied');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('id_member');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('job_id');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            You have been logged out!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('auth');
        $this->session->sess_destroy();
    }
}
