<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semuahero extends CI_Controller {

	public function index()
	{
		$this->load->model('uts_model');
		$data["hero_list"] = $this->uts_model->getDataHero();
		$this->load->view('semuahero',$data);	
	}

	public function datatable(){
	$this->load->model('uts_model');
	$data["hero_list"] = $this->uts_model->getDataHero();
	$this->load->view('semuahero', $data);
	}

	public function create()
	{		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('hero_model');	

		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_hero_view');

		}else{
			    $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->load->view('tambah_hero_view',$error);
                }
                else
                {
						$this->pegawai_model->insertPegawai();
						$this->load->view('tambah_hero_sukses');
                }
		}
	}
	//method update butuh parameter id berapa yang akan di update
	public function update($id)
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required|max_length[15]|numeric');
		$this->load->model('pegawai_model');
		$data['pegawai']=$this->pegawai_model->getPegawai($id);
		$data2=$this->pegawai_model->getPegawai($id);
		$nama = $data2[0]->foto;
		if($this->form_validation->run()==FALSE){
			$this->load->view('edit_pegawai_view',$data);

		}
		else{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_pegawai_view',$error);
			}
			else
			{
			$image_data = $this->upload->data();
			$this->pegawai_model->UpdateById($id);
			unlink('assets/uploads/'.$nama);
			$this->load->view('pegawai');
			}
		}
	}

	public function delete($id)
	{

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('hero_model');
		$this->hero_model->deleteById($id);
		if($this->form_validation->run()==FALSE){
			redirect('hero');
		}
	
	}
}


/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>