<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata("id");

        if ($id != null || $id != "") {
            $this->session->set_flashdata("info", "session berakhir");
            redirect('Project');
        }
    }
    public function index()
    {
        $this->load->view("login");
    }

    public function cek()
    {
        $user = $this->input->post("user");
        $pwd  = md5($this->input->post("password"));

        $cek = $this->db->get_where("akun", ['user' => $user, 'password' => $pwd]);

        $d  = $cek->row();
        if ($cek->num_rows() > 0) {
            $d = $cek->row();
            $this->session->set_userdata("id", $d->id);
            $this->session->set_flashdata("info", 'Selamat Datang ' . $d->user);
            redirect('Project');
        } else {
            $this->session->set_flashdata("info", "akun tidak ditemukan");
            redirect('Login');
        }
    }
}
