<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model(array('M_Permohonan'));
    }

    public function index()
	{
        $db = $this->db->get('users')->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Users",
            'titlePage' => 'Kecamatan',
            'data'=> $db
        ];
        $this->load->view('body/header', $data);
		$this->load->view('body/user',$data);
		$this->load->view('body/footer');
    }
    function add()
    {
        $db = $this->db->get('users')->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Users",
            'titlePage' => 'Kecamatan Cipayung',
            'data'=> $db
        ];
        $this->load->view('body/header', $data);
		$this->load->view('body/add',$data);
		$this->load->view('body/footer');
    }
}