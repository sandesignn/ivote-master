<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/index.php');
    }
    public function login()
    {
        $this->load->view('auth/login.php');
        $this->loginwork();
    }
    public function user()
    {

        if (!$this->session->userdata('user')) { //jika user tidak login arahkan ke halaman login
            redirect('auth/login');
        } else {
            $nim = $this->session->userdata('user');
            $data['userlogin'] = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
            $this->load->view('auth/user.php', $data);
        }
    }

    private function loginwork()
    {

        $pencet = $this->input->post('btn-go');
        $nim = $this->input->post('nim');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
        $passFromDb = $user['password'];
        $hash = password_hash($passFromDb, PASSWORD_DEFAULT);
        if ($user) {  //jika user ada
            if (password_verify($pass, $hash)) {
                $data = [
                    'user' => $user['nim']
                ];
                $this->session->set_userdata($data);
                redirect('auth/user');
            } else {
                $this->session->set_flashdata('m', '<small class="warning-text text-danger form_name">Password salah!</small><br>');
            }
        } else {
            $this->session->set_flashdata('m', '<small class="warning-text text-danger form_name">NIM tidak ditemukan!</small><br>');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('auth/login');
    }
}
