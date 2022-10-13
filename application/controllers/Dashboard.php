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
    function detail_pelaku()
    {
        $id = $this->uri->segment(3);
        $this->db->select('*,a.id_kriminal as uniq_kirminal');
        $this->db->where('a.id_kriminal',$id);
        $this->db->join('dt_kriminal as a','a.id_kriminal=b.id_kriminal');
        $pelaku = $this->db->get('dt_pelaku as b')->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung',
            'data' => $pelaku
        ];
        $this->load->view('body/header', $data);
		$this->load->view('body/dashboard/detail_pelaku');
		$this->load->view('body/footer');

    }
    
   function add_kriminal()
   {
  
    $data = [
        'nama' => $this->session->userdata('nama'),
        'title' => "Selamat Datang",
        'titlePage' => 'Polsek Cipayung',
    ];
    $this->load->view('body/header', $data);
    $this->load->view('body/dashboard/add_kriminal');
    $this->load->view('body/footer');

   }
   function save_kriminal()
   {
    if ($this->input->post('kategori') && $this->input->post('kelurahan') && $this->input->post('alamat')) {
        $insert = [
            "kategori" => $this->input->post('kategori'),
            "kelurahan" => $this->input->post('kelurahan'),
            "alamat" => $this->input->post('alamat'),
            "alamat_maps" => $this->input->post('alamat_maps'),
            "keterangan" => $this->input->post('keterangan'),
        ];
        $this->db->insert('dt_kriminal',$insert);
        $this->session->set_flashdata('msg','<div class="alert alert-primary">Data pelanggaran '.$this->input->post('keterangan').' berhasil di input</div>');
        redirect('dashboard/add_kriminal');
       }else{
        $this->session->set_flashdata('msg','<div class="alert alert-danger">Data pelanggaran harus lengkap</div>');
        redirect('dashboard/add_kriminal');
       }
   }
   

    
}