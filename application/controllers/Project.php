<?php


class Project extends CI_Controller
{
    public function index(Type $var = null)
    {
        $this->load->view("header");
        $this->load->view("project");
        $this->load->view("footer");
    }
}
