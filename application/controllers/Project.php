<?php


class Project extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $id = $this->session->userdata("id");

    //     if ($id == null || $id == "") {
    //         $this->session->set_flashdata("info", "session berakhir");
    //         redirect('Logout');
    //     }
    // }

    public function index()
    {
        $data['data']   = $this->db->get("pro")->result();
        $this->load->view("header");
        $this->load->view("project", $data);
        $this->load->view("footer");
    }

    public function input()
    {
        $this->load->view("header");
        $this->load->view("input");
        $this->load->view("footer");
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("pro");
        redirect('Project');
    }

    public function store()
    {
        $judul        = $this->input->post("judul");
        $teknologi    = $this->input->post("teknologi");
        $tgl          = $this->input->post("tanggal");
        $link         = $this->input->post("link");
        $img          = $_FILES['file']['name'];

        $config['upload_path']   = './assets/img/';
        $config['allowed_types']   = 'jpg|jpeg|png';
        $config['file_name']       = date('his') . $img;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload("file")) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("fail", $error);
            redirect('Project/input');
        } else {
            $data = [
                'judul'      => $judul,
                'teknologi'  => $teknologi,
                'tanggal'    => $tgl,
                'link'       => $link,
                'img'        => $this->upload->data('file_name')
            ];

            $this->db->insert("pro", $data);
            $this->session->set_flashdata('ok', 'berhasil');
            redirect('Project/input');
        }
    }

    public function edit($id)
    {
        $data['data']  = $this->db->get_where("pro", ['id' => $id])->row();
        $this->load->view("header");
        $this->load->view("form_edit", $data);
        $this->load->view("footer");
    }

    public function update()
    {
        $file = $_FILES['file']['name'];
        $judul        = $this->input->post("judul");
        $teknologi    = $this->input->post("teknologi");
        $tgl          = $this->input->post("tanggal");
        $link         = $this->input->post("link");
        $id           = $this->input->post("id");
        $img          = $_FILES['file']['name'];
        if ($file == null || empty($file)) {
            $data = [
                'judul'      => $judul,
                'teknologi'  => $teknologi,
                'tanggal'    => $tgl,
                'link'       => $link,
            ];

            $this->db->where('id', $id);
            $this->db->update("pro", $data);
            $this->session->set_flashdata("ok", "update");
            redirect('Project');
        } else {
            $config['upload_path']   = './assets/img/';
            $config['allowed_types']   = 'jpg|jpeg|png';
            $config['file_name']       = date('his') . $img;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("file")) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata("fail", $error);
                redirect('Project');
            } else {
                $data = [
                    'judul'      => $judul,
                    'teknologi'  => $teknologi,
                    'tanggal'    => $tgl,
                    'link'       => $link,
                    'img'        => $this->upload->data('file_name')
                ];

                $this->db->where('id', $id);
                $this->db->update("pro", $data);
                $this->session->set_flashdata('ok', 'berhasil');
                redirect('Project/input');
            }
        }
    }
}
