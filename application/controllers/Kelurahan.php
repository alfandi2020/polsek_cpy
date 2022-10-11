<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Permohonan'));
    }

    public function index()
	{
        // $this->db->select('*,a.kelurahan as kelurahan,b.kelurahan as id_kelurahan');
        // $this->db->from('dt_kelurahan as a');
        // $this->db->join('dt_kriminal as b','a.id=b.kelurahan');
        $db = $this->db->get('dt_kelurahan')->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Tambah Permohonan",
            'titlePage' => 'Data Kecamatan',
            'data'=> $db
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/kelurahan',$data);
		$this->load->view('body/footer');
	}
    function remove_special($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     
        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
     }

    public function filter(){
        if($this->uri->segment(3)){
            $filter = $this->uri->segment(3);
            $this->session->set_userdata('filterPermohonan', $filter);
            redirect('permohonan/list');
        }
    }
    function kriminal()
    {
        $id_kelurahan = $this->uri->segment(3);
        $this->db->select('*,a.kelurahan as kelurahan,b.kelurahan as id_kelurahan');
        $this->db->where('b.kelurahan',$id_kelurahan);
        $this->db->from('dt_kelurahan as a');
        $this->db->join('dt_kriminal as b','a.id=b.kelurahan');
        $db = $this->db->get()->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Kriminal",
            'titlePage' => 'View Kriminal',
            'data'=> $db
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/kriminal',$data);
		$this->load->view('body/footer');
    }
  
    public function submit()
    {
        $set_unik = $this->session->userdata('setUnik');
        $id_user = $this->session->userdata('id_user');
        $nama = $this->input->post('nama');
        $data = [
            'unik' => $set_unik,
            'id_user' => $id_user,
            'nama_pemohon' => $nama,
            'tgl_permohonan' => date('Y-m-d H:i:s'),
            'tahun' => date('Y'),
            'status_permohonan' => 'Waiting'
        ];
        $this->db->insert('tb_permohonan',$data);

        $row = $this->input->post('row');
        for ($i=0; $i < count($row)+1; $i++) { 
           if ($this->input->post('isi'.$i) != "") {
                $detail = [
                    "unik" => $set_unik,
                    "isi_permohonan" => $this->input->post('isi'.$i),
                    "nominal" => substr($this->remove_special($this->input->post('nominal'.$i)),2)
                ];
                $this->db->insert('tb_permohonan_detail',$detail);
           }
        }
        $this->session->unset_userdata('setUnik');
        redirect('permohonan');
    }
    public function logout() {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        redirect('auth');
    }
}