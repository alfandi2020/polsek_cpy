<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard
 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/content');
		$this->load->view('body/footer');
	}
    function hotline()
    {
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/dashboard/hotline');
		$this->load->view('body/footer');
    }
    function thm()
    {
        $this->db->where('kategori',$this->session->userdata('kategori'));
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung',
            'data' => $this->db->get('dt_kriminal')->result()
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/dashboard/thm');
		$this->load->view('body/footer');
    }
    public function filter(){
        if($this->uri->segment(3)){
            $filter = $this->uri->segment(3);
            $this->session->set_userdata('kategori', $filter);
            redirect('dashboard/thm');
        }
    }
    
   

    
}