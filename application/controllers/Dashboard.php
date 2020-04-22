<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/loginadmin.php');
        $this->loginadmin();
    }
    public function dash()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            date_default_timezone_set("Asia/Bangkok");
            $now = date("Y-m-d");
            $nowin = $now."%";
            $sql =  "SELECT * FROM `voting` WHERE date LIKE '$nowin'";
            $ex = $this->db->query($sql);
            $total = $ex->num_rows();
            $data['today']=$total;

            $all=$this->db->get('voting')->num_rows();
            $data['all']=$all;

            $kandidat=$this->db->get('kandidat')->num_rows();
            $data['kandidat']=$kandidat;
            $adm=$this->db->get('admin')->num_rows();
            $data['adm']=$adm;


            $sql2= "SELECT DISTINCT voting.id_kandidat, kandidat.nama_kandidat FROM voting LEFT JOIN kandidat ON kandidat.id_kandidat = voting.id_kandidat";
            $exe = $this->db->query($sql2);
            $data['id'] = $exe->result_array();
            
            $this->load->view('template/header.php');
            $this->load->view('admin/admin-index.php',$data);
            $this->load->view('template/footer.php');
        }
    }

    private function loginadmin()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        $passFromDb = $user['password'];
        $hash = password_hash($passFromDb, PASSWORD_DEFAULT);
        if ($user) {  //jika user ada
            if (password_verify($pass, $hash)) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard/dash');
            } else {
                $this->session->set_flashdata('m', '<small class="warning-text text-danger form_name">Password salah!</small><br>');
            }
        } else {
            $this->session->set_flashdata('m', '<small class="warning-text text-danger form_name">NIM tidak ditemukan!</small><br>');
        }
    }
    public function kandidat()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $this->load->view('template/header.php');
            $this->load->view('admin/data-kandidat.php', $data);
            $this->load->view('template/footer.php');
        }
    }
    public function cektotal()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {

            $idkk = $this->uri->segment(3);

            $sql3 ="SELECT DISTINCT voting.id_kandidat, kandidat.nama_kandidat FROM voting LEFT JOIN kandidat ON kandidat.id_kandidat = voting.id_kandidat WHERE voting.id_kandidat ='$idkk'";
            $data['kandidatdata'] = $this->db->query($sql3)->result_array();

            $data['hasil'] = $this->db->get_where('voting',['id_kandidat' => $idkk])->num_rows();
            $this->load->view('template/header.php');
            $this->load->view('admin/hasil.php', $data);
            $this->load->view('template/footer.php');
        }
    }
    public function tambah()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('template/header.php');
            $this->load->view('admin/tambah.php');
            $this->load->view('template/footer.php');
        }
    }
    public function waktu()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $data['waktu'] = $this->db->get('waktu')->row_array();
            
            $this->load->view('template/header.php');
            $this->load->view('admin/waktu.php', $data);
            $this->load->view('template/footer.php');
        }
    }
    public function tambahadmin()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('template/header.php');
            $this->load->view('admin/tambah-admin.php');
            $this->load->view('template/footer.php');
        }
    }
    public function dataadmin()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('template/header.php');
            $this->load->view('admin/data-admin.php');
            $this->load->view('template/footer.php');
        }
    }
    public function ubahpassword()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('template/header.php');
            $this->load->view('admin/gantipassword.php');
            $this->load->view('template/footer.php');
        }
    }
    public function deletekandidat()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $id = $this->uri->segment(3);
            $this->db->delete('kandidat',['id_kandidat' => $id]);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Berhasil Menghapus data');
                redirect('dashboard/kandidat');
            } else {
                $this->session->set_flashdata('success', 'Gagal Menghapus data');
                redirect('dashboard/kandidat');
            }
        }
    }
    public function add()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $img = $_FILES['foto']['name'];
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');

            if ($img) {
                # code...
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = 'asset/img/kandidat';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                } else {
                    array('upload_data' => $this->upload->data());
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('nama_kandidat', $nama);
                    $this->db->set('jurusan', $jurusan);
                    $this->db->set('foto_kandidat', $new_img);
                    $this->db->set('visi', $visi);
                    $this->db->set('misi', $misi);
                    $this->db->insert('kandidat');
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('messageIn', '<div class="alert alert-success" role="alert">
                        Data berhasil ditambahkan.
                    </div>');
                        redirect('dashboard/kandidat');
                    }
                }
            } else {
                $this->session->set_flashdata('messageIn', '<div class="alert alert-danger" role="alert">
            Pilih foto terlebih dahulu
          </div>');
                redirect('dashboard/tambahadmin');
            }
        }
    }

    public function updatekandidat()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $id = $this->uri->segment(3);
            $data['kandidat'] = $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
            $this->load->view('template/header.php');
            $this->load->view('admin/ubahkandidat.php', $data);
            $this->load->view('template/footer.php');
        }
    }
    public function updatewaktu()
    {
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $this->db->set('start', $start);
            $this->db->set('end', $end);
            $this->db->update('waktu');
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('messageIn', '<div class="alert alert-success" role="alert">
                Data berhasil diubah.
            </div>');
                redirect('dashboard/waktu');
            }else{
                $this->session->set_flashdata('messageIn', '<div class="alert alert-success" role="alert">
                Data gagal diubah.
            </div>');
                redirect('dashboard/waktu');
            }
        }
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $img = $_FILES['foto']['name'];
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        if ($img) {
            # code...
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = 'asset/img/kandidat';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                array('upload_data' => $this->upload->data());
                $new_img = $this->upload->data('file_name');
                $this->db->set('nama_kandidat', $nama);
                $this->db->set('jurusan', $jurusan);
                $this->db->set('foto_kandidat', $new_img);
                $this->db->set('visi', $visi);
                $this->db->set('misi', $misi);
                $this->db->where('id_kandidat', $id);
                $this->db->update('kandidat');
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('messageIn', '<div class="alert alert-success" role="alert">
                        Data berhasil diubah.
                    </div>');
                    redirect('dashboard/kandidat');
                }
            }
        } else {
            $this->session->set_flashdata('messageIn', '<div class="alert alert-danger" role="alert">
            Pilih foto terlebih dahulu
          </div>');
            redirect('dashboard/tambahadmin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('dashboard');
    }
}
