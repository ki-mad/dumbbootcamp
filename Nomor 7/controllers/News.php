<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->model('user_m');
    }

	public function index()
	{
        // $data['row'] = $this->user_m->get();
		$this->template->load('template', 'news/data_news');
    }
    
    public function delete($id) {
        $this->user_m->delete($id);
        if($this->db->affected_rows() > 0 ) {
			echo "<script>alert('Data berhasil di hapus')</script>";
		}
		echo "<script>window.location='".site_url('user')."'</script>";
    }

    public function tambah () {
        
        $user = new stdClass();
        $user->id = null;
        $user->name = null;
        $user->email = null;
        $user->jabatan = null;

        $data = array(
            'page' => 'tambah',
            'row' => $user,
        );
        $this->template->load('template', 'user/form_user', $data);
    }

    public function ubah($id) {
        $query = $this->user_m->get($id);
        if($query->num_rows() > 0) {
            $barang = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $barang
            );
            $this->template->load('template', 'user/form_user', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan')";
            echo "window.location='".site_url('user')."'</script>";
        }
    }

    public function proses() {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambah'])) {
            $this->user_m->add($post);
        } else if(isset($_POST['ubah'])) {
            $this->user_m->ubah($post);
        }
        if($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data berhasil di simpan')</script>";
        }
        echo "<script>window.location='".site_url('user')."'</script>";
    }
}