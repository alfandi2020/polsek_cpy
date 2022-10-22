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
        $cek = $this->db->get_where('dt_kriminal',['kelurahan' => isset($_GET['kelurahan'])])->num_rows();
        $this->db->select('*,b.kelurahan as nama_kelurahan,b.kelurahan as id_kelurahan');
        if ($cek == true) {
         $this->db->where('a.kelurahan',$this->input->get('kelurahan'));
        }
        $this->db->where('kategori',$this->session->userdata('kategori'));
        $this->db->join('dt_kelurahan as b','a.kelurahan=b.id');
       $ppp = $this->db->get('dt_kriminal as a')->result();
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung',
            'data' => $ppp
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
    function informasi()
    {
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang",
            'titlePage' => 'Polsek Cipayung',
        ];
        $this->load->view('body/header', $data);
        $this->load->view('body/dashboard/informasi');
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
   function ada_polisi()
   {
    $data = [
        'nama' => $this->session->userdata('nama'),
        'title' => "Selamat Datang",
        'titlePage' => 'Polsek Cipayung',
        'data' => $this->db->get('tb_ada_polisi')->result()
    ];
    $this->load->view('body/header', $data);
    $this->load->view('body/dashboard/ada_polisi');
    $this->load->view('body/footer');
   }
   function save_ada_polisi()
   {
       $today = date('Y-m-d');
    $umur = date_diff(date_create($this->input->post('tgl_lahir')), date_create($today));
    // if ($diff->format('%y') < 18) {
       $insert = [
        "nama" => $this->input->post('nama_petugas'),
        "id_kelurahan" => $this->input->post('kelurahan'),
        "nama_lengkap_target" => $this->input->post('nama_pelaku'),
        "tempat_lahir" => $this->input->post('tempat_lahir'),
        "tgl_lahir" => $this->input->post('tgl_lahir'),
        "umur" => $umur->format('%y'),
        "nomor_hp" => $this->input->post('no_hp'),
        "alamat" => $this->input->post('alamat'),
        "pekerjaan" => $this->input->post('pekerjaan'),
        "nama_ibu" => $this->input->post('nama_ibu'),
        "pekerjaan_bapak" => $this->input->post('pekerjaan_bapak'),
        "kasus" => $this->input->post('kasus_history'),
        "motif" => $this->input->post('motif'),
       ];
       $this->db->insert('tb_ada_polisi',$insert);
       redirect('dashboard/personil');
   }
   function personil()
   {
    $data = [
        'nama' => $this->session->userdata('nama'),
        'title' => "Selamat Datang",
        'titlePage' => 'Polsek Cipayung',
        'data' => $this->db->get('dt_personil')->result()
    ];
    $this->load->view('body/header', $data);
    $this->load->view('body/dashboard/personil/personil');
    $this->load->view('body/footer');
   }
   function detail_personil()
   {
    $this->db->where('id_personil',$this->uri->segment(3));
    $detail = $this->db->get('dt_personil')->row_array();
    $data = [
        'nama' => $this->session->userdata('nama'),
        'title' => "Selamat Datang",
        'titlePage' => 'Polsek Cipayung',
        'data' => $detail
    ];
    $this->load->view('body/header', $data);
    $this->load->view('body/dashboard/personil/detail_personil');
    $this->load->view('body/footer');
   }
   function save_personil()
   {
        $target_dir = "upload/foto/";
        $file = $_FILES['foto']['name'];
        $path = pathinfo($file);
        $filename = time().'_'.$path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['foto']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        move_uploaded_file($temp_name,$path_filename_ext);
        
       $insert = [
           "nama" => $this->input->post('nama'),
           "pangkat" => $this->input->post('pangkat'),
           "nrp" => $this->input->post('nrp'),
           "jabatan" => $this->input->post('jabatan'),
           "tmt" => $this->input->post('tmt'),
           "mulai_menjabat" => $this->input->post('mulai_menjabat'),
           "tempat_lahir" => $this->input->post('tempat_lahir'),
           "tgl_lahir" => $this->input->post('tgl_lahir'),
           "agama" => $this->input->post('agama'),
           "suku" => $this->input->post('suku'),
           "status_personil" => $this->input->post('status_personil'),
           "foto" => $filename . $ext
       ];
       $this->db->insert('dt_personil',$insert);
       redirect('dashboard/personil');
   }
   function save_detail_personil()
   {
       $id_personil = $this->input->post('id_personil');
       $status= $this->input->post('status');
       if ($status == 'pendidikan_personil') {
           $insert = [
                "id_personil" => $id_personil,
                "tingkat" => $this->input->post('tingkat'),  
                "tahun" => $this->input->post('tahun'),  
           ];
           $this->db->insert('dt_personil_pendidikan',$insert);
           $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Pendidikan Kepolisian Berhasil ditambah</div>');
           redirect('dashboard/detail_personil/'.$id_personil);
       }else if ($status == 'pendidikan_umum') {
            $insert = [
                "id_personil" => $id_personil,
                "tingkat" => $this->input->post('tingkat'),  
                "nama_institusi" => $this->input->post('nama_institusi'),  
                "tahun" => $this->input->post('tahun'),  
            ];
            $this->db->insert('dt_personil_pendidikan_umum',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Pendidikan Umum Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }else if ($status == 'riwayat_pangkat') {
            $insert = [
                "id_personil" => $id_personil,
                "pangkat" => $this->input->post('pangkat'),  
                "tmt" => $this->input->post('tmt'),  
            ];
            $this->db->insert('dt_personil_riwayat_pangkat',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Riwayat Pangkat Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }else if ($status == 'riwayat_jabatan') {
            $insert = [
                "id_personil" => $id_personil,
                "jabatan" => $this->input->post('jabatan'),  
                "tmt" => $this->input->post('tmt'),  
            ];
            $this->db->insert('dt_personil_riwayat_jabatan',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Riwayat Jabatan Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }else if ($status == 'pendidkan_pengemban') {
            $insert = [
                "id_personil" => $id_personil,
                "dikbang" => $this->input->post('dikbang'),  
                "tmt" => $this->input->post('tmt'),  
            ];
            $this->db->insert('dt_personil_riwayat_pangkat',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Pendidikan Pengembangan & Pelatihan Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }
       else if ($status == 'tanda_kehormatan') {
            $insert = [
                "id_personil" => $id_personil,
                "tanda_kehormatan" => $this->input->post('tanda_kehormatan'),  
                "tmt" => $this->input->post('tmt'),  
            ];
            $this->db->insert('dt_personil_riwayat_pangkat',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Pendidikan Pengembangan & Pelatihan Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }
       else if ($status == 'kemampuan_bahasa') {
            $insert = [
                "id_personil" => $id_personil,
                "bahasa" => $this->input->post('bahasa'),  
                "status" => $this->input->post('status'),  
            ];
            $this->db->insert('dt_personil_riwayat_pangkat',$insert);
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Data Kemampuan Bahasa Berhasil ditambah</div>');
            redirect('dashboard/detail_personil/'.$id_personil);
       }
   }
   function banner()
   {
    $data = [
        'nama' => $this->session->userdata('nama'),
        'title' => "Selamat Datang",
        'titlePage' => 'Polsek Cipayung',
        'data' => $this->db->get('dt_personil')->result()
    ];
    $this->load->view('body/header', $data);
    $this->load->view('body/dashboard/banner');
    $this->load->view('body/footer');
   }
   function save_banner()
   {
    // var_dump($_FILES['file_banner']) > 0);

    // for ($i=1; $i <=10 ; $i++) { 
        if ($_FILES['file_banner1']['name'] == true) {
            $nama_file = 'file_banner1';
        }
        if ($_FILES['file_banner2']['name'] == true) {
            $nama_file = 'file_banner2';
        }
        if ($_FILES['file_banner3']['name'] == true) {
            $nama_file = 'file_banner3';
        }
        elseif ($_FILES['file_banner4']['name'] == true) {
            $nama_file = 'file_banner4';
        }
        elseif ($_FILES['file_banner5']['name'] == true) {
            $nama_file = 'file_banner5';
        }
        elseif ($_FILES['file_banner6']['name'] == true) {
            $nama_file = 'file_banner6';
        }
        elseif ($_FILES['file_banner7']['name'] == true) {
            $nama_file = 'file_banner7';
        }
        elseif ($_FILES['file_banner8']['name'] == true) {
            $nama_file = 'file_banner8';
        }
        elseif ($_FILES['file_banner9']['name'] == true) {
            $nama_file = 'file_banner9';
        }
        elseif ($_FILES['file_banner10']['name'] == true) {
            $nama_file = 'file_banner10';
        }
      
    

    // $name = $_FILES[$nama_file]["name"];
    // $ext = end((explode(".", $name)));
    $path_parts = pathinfo($_FILES[$nama_file]["name"]);
    $extension = $path_parts['extension'];    
    $config['upload_path']          = './upload/banner';
    $config['allowed_types']        = 'jpg|png|jpeg';
    $config['max_size']             = 3000;
    $config['encrypt_name']             = true;
    
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($nama_file))
    {
           redirect('dashboard');
    }
    else
    {
            $data = array('upload_data' => $this->upload->data());
            $this->db->where('id',preg_replace("/[^0-9]/", "",$nama_file));
            $this->db->set('nama',$data['upload_data']['file_name']);
            $this->db->update('tb_banner');
            $this->session->set_flashdata('msg','<div class="alert alert-primary">Banner ke '.preg_replace("/[^0-9]/", "",$nama_file).' berhasil di update </div>');
            redirect('dashboard/banner');

    }
   }

    
}