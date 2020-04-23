<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $data['waktu'] = $this->db->get('waktu')->row_array();

        $this->load->view('auth/index.php', $data);
    }
    public function login()
    {
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $data['waktu'] = $this->db->get('waktu')->row_array();

        $this->load->view('auth/login.php', $data);
        $this->loginwork();
    }
    public function user()
    {

        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $data['waktu'] = $this->db->get('waktu')->row_array();

        if (!$this->session->userdata('user')) { //jika user tidak login arahkan ke halaman login
            redirect('auth/login');
        } else {
            $nim = $this->session->userdata('user');
            $data['userlogin'] = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
            $cek = $this->db->get_where('voting', ['nim' => $nim])->num_rows();
            if ($cek > 0) {
                $this->submited();
            } else {
                $this->load->view('auth/user.php', $data);
            }
        }
    }

    private function loginwork()
    {

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
                if ($user['fakultas'] == "Ilmu Komputer") {
                    $this->session->set_userdata($data);
                    redirect('auth/user');
                } else {
                    $this->session->set_flashdata('m', '<small class="warning-text text-danger form_name">Akun bukan mahasiswa Fasilkom</small><br>');
                }
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

    public function submit()
    {
        $choice = $this->input->post('radio-input');
        $nim = $this->input->post('nim');
        date_default_timezone_set("Asia/Bangkok");
        $dateSubmit = date("Y/m/d H:i:sa");
        $this->db->set('id_kandidat', $choice);
        $this->db->set('nim', $nim);
        $this->db->set('date', $dateSubmit);
        $this->db->insert('voting');

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Voting berhasil dikirim');
            redirect('auth/submited');
        } else {
            echo "Gagal insert";
        }
    }


    public function submited()
    {

        if (!$this->session->userdata('user')) { //jika user tidak login arahkan ke halaman login
            redirect('auth/login');
        } else {
            $nim = $this->session->userdata('user');
            $data['userlogin'] = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
            $data['uservote'] = $this->db->get_where('voting', ['nim' => $nim])->row_array();
            $this->load->view('auth/submited.php', $data);
        }
    }
}
