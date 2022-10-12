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
    function save()
    {
        $cek = $this->db->get_where('users',['username' => $this->input->post('username')])->num_rows();
        if ($cek == 0) {
            if ($this->input->post('password') == $this->input->post('password_konfirmasi')) {
                $data = [
                    "name" => $this->input->post('nama'),
                    "username" => $this->input->post('username'),
                    "password" => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                    "phoneNumber" => $this->input->post('telp'),
                ];
                $this->db->insert('users',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success">User '.$this->input->post('username').' berhasil ditambah</div>');
            redirect('user');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger">Password harus sama..!</div>');
                redirect('user/add');
            }
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger">User '.$this->input->post('username').' sudah ada</div>');
            redirect('user/add');
        }
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
		$this->load->view('body/add_user',$data);
		$this->load->view('body/footer');
    }
}