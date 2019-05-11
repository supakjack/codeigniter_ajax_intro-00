<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{

    public function index()
    {
        $this->load->view('test-ajax');
    }
    public function getajax()
    {
        echo $this->input->post("nickname");
    }
    public function get()
    {
        echo $this->input->get('name');
    }
    public function post()
    {
        echo $this->input->post('name');
    }
    public function getjson()
    {
        $ar=array(
            "prefix"=>"Mr.",
            "fname"=>"Supak",
            "lname"=>"Pukdam",
            "nname"=>"Jack",
            "id"=>"60160027",
        );
        echo json_encode($ar);
    }
}
