<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller {
 
	public function index()
	{
		$data['title'] = 'Pendaftaran';
		$data['description'] = 'Silahkan Mengisi Form Dibawah ini';
		$data['keywords'] = 'Pendaftaran';

		$this->template->load(template().'/template',template().'/form_upload', $data);
	}

	public function proses1(){
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/berkas';
	        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
	        $config['max_size'] = '10000'; // kb
	        $this->load->library('upload', $config);
	        // $this->upload->do_upload('k');
	        if (!$this->upload->do_upload('k')) {
			    $error = array('error' => $this->upload->display_errors());
			  } else {
			    $fileData = $this->upload->data();
			    $data['k'] = $fileData['file_name'];
			  }

			  if (!$this->upload->do_upload('kk')) {
			    $error = array('error' => $this->upload->display_errors()); 
			  } else {
			    $fileData = $this->upload->data();
			    $data['kk'] = $fileData['file_name'];
			  }

			  if (!$this->upload->do_upload('k2')) {
			    $error = array('error' => $this->upload->display_errors()); 
			  } else {
			    $fileData = $this->upload->data();
			    $data['kkk'] = $fileData['file_name'];
			  }

			  if (!$this->upload->do_upload('k3')) {
			    $error = array('error' => $this->upload->display_errors()); 
			  } else {
			    $fileData = $this->upload->data();
			    $data['kkkk'] = $fileData['file_name'];
			  }
	        // $hasil=$this->upload->data();
            
            $config['source_image'] = 'asset/berkas'.$fileData['file_name'];
            $config['wm_text'] = '';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size'] = '18';
            $config['wm_font_color'] = 'ffffff';
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'center';
            $config['wm_padding'] = '20';
            $this->load->library('image_lib',$config);
            $this->image_lib->watermark();


            if ($fileData['file_name']==''){
                    $data = array(
                                    'bpbd'=>$this->db->escape_str($this->input->post('b')),
                                    'provinsi'=>$this->db->escape_str($this->input->post('c')),
                                    'alamat'=>$this->db->escape_str($this->input->post('d')),
                                    'contact'=>seo_title($this->input->post('b')),
                                    'jabatan'=>$this->db->escape_str($this->input->post('e')),
                                    'nip'=>$this->db->escape_str($this->input->post('f')),
                                    'no_hp'=>$this->db->escape_str($this->input->post('g')),

                                    );
            }else{
                    $data = array(
                                    'bpbd'=>$this->db->escape_str($this->input->post('b')),
                                    'provinsi'=>$this->db->escape_str($this->input->post('c')),
                                    'alamat'=>$this->db->escape_str($this->input->post('d')),
                                    'contact'=>seo_title($this->input->post('b')),
                                    'jabatan'=>$this->db->escape_str($this->input->post('e')),
                                    'nip'=>$this->db->escape_str($this->input->post('f')),
                                    'no_hp'=>$this->db->escape_str($this->input->post('g')),
                                    'krb'=>$fileData['file_name'],
                                    'rpb'=>$fileData['file_name'],
                                    'renkon'=>$fileData['file_name'],
                                    'skpdb'=>$fileData['file_name'],
                                    );
            }
            $this->model_app->insert('tb_berkas',$data);
			redirect('/');
		}
	}

	public function listForm()
	{
		$data['record'] = $this->model_app->view_ordering('tb_berkas','kd_berkas','DESC');
		$this->template->load('administrator/template','administrator/form', $data);
	}

	public function proses(){
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'asset/berkas';
	        $config['allowed_types'] = 'docx|doc|pdf';
	        $config['max_size'] = '10000'; // kb
	        $this->load->library('upload', $config);
	        // $this->upload->do_upload('k');
	        $data = $this->upload->do_upload('first_file');
	        $hasil=$this->upload->data();

	        $data2 = $this->upload->do_upload('second_file');
	        $hasil2=$this->upload->data();

	        $data3 = $this->upload->do_upload('third_file');
	        $hasil3=$this->upload->data();

	        $data4 = $this->upload->do_upload('fourth_file');
	        $hasil4=$this->upload->data();
            
            $config['source_image'] = 'asset/berkas'.$hasil['file_name'];
            $config['source_image'] = 'asset/berkas'.$hasil2['file_name'];
            $config['source_image'] = 'asset/berkas'.$hasil3['file_name'];
            $config['source_image'] = 'asset/berkas'.$hasil4['file_name'];
            $config['wm_text'] = '';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size'] = '18';
            $config['wm_font_color'] = 'ffffff';
            $config['wm_vrt_alignment'] = 'middle';
            $config['wm_hor_alignment'] = 'center';
            $config['wm_padding'] = '20';
            $this->load->library('image_lib',$config);
            $this->image_lib->watermark();


            if ($hasil['file_name'] ==''){
                    $data = array(
                                    'bpbd'=>$this->db->escape_str($this->input->post('b')),
                                    'provinsi'=>$this->db->escape_str($this->input->post('c')),
                                    'alamat'=>$this->db->escape_str($this->input->post('d')),
                                    'contact'=>seo_title($this->input->post('b')),
                                    'jabatan'=>$this->db->escape_str($this->input->post('e')),
                                    'nip'=>$this->db->escape_str($this->input->post('f')),
                                    'no_hp'=>$this->db->escape_str($this->input->post('g')),

                                    );
            }else{
                    $data = array(
                                    'bpbd'=>$this->db->escape_str($this->input->post('b')),
                                    'provinsi'=>$this->db->escape_str($this->input->post('c')),
                                    'alamat'=>$this->db->escape_str($this->input->post('d')),
                                    'contact'=>seo_title($this->input->post('b')),
                                    'jabatan'=>$this->db->escape_str($this->input->post('e')),
                                    'nip'=>$this->db->escape_str($this->input->post('f')),
                                    'no_hp'=>$this->db->escape_str($this->input->post('g')),
                                    'krb'=>$hasil['file_name'],
                                    'rpb'=>$hasil2['file_name'],
                                    'renkon'=>$hasil3['file_name'],
                                    'skpdb'=>$hasil4['file_name'],
                                    );
            }
            $this->model_app->insert('tb_berkas',$data);
			redirect('/');
		}
	}

}