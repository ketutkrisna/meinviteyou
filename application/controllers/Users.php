<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('level_user')){
			redirect('auth');
		}
		if($this->session->userdata('level_user')!='user'){
			redirect('admin');
		}
	}

	public function index()
	{
		$this->load->view('user/aturundanganuser');
	}

	public function tambahdaftarundanganuser()
	{
		
		$idu=$this->session->userdata('id_user');
		$idp=$this->session->userdata('id_p');
		$tnamaurl=strtolower($this->input->post('tnamaurl',true));
		$tnamadiundang=$this->input->post('tnamadiundang',true);

		$users=$this->db->get_where('users',['id_user'=>$idu])->row_array();

		if($users['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Fitur sudah <strong>Di non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
		}
		// $tnomerdiundang=htmlspecialchars($this->input->post('tnomerdiundang',true));
		// $talamatdiundang=htmlspecialchars($this->input->post('talamatdiundang',true));

		$getnamadiundang=$this->db->get_where('diundang',['url_diundang'=>$tnamaurl,'matchid_pengundang'=>$idp])->row_array();

		if($getnamadiundang){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di URL <strong>Sudah ada</strong>!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
		}

		$tnamaurlnull=trim($tnamaurl);
	    if(empty($tnamaurlnull)){
	      	$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di URL <strong>Tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
	    }else{
	      $tnamaurlbaru1 = preg_replace('/[^a-zA-Z0-9\_\.\-]/', ' ', $tnamaurlnull);
	      $tnamaurlbaru= str_replace(' ', '', $tnamaurlbaru1);
	    }


	    $tnamadiundangnull=trim($tnamadiundang);
	    if(empty($tnamadiundangnull)){
	      	$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama yang di undang <strong>Tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
	    }else{
	      $tnamadiundangbaru = preg_replace('/[^a-zA-Z0-9\&\_\.\,\-]/', ' ', $tnamadiundangnull);
	    }


		$cekdiundang=$this->db->get_where('diundang',['matchid_pengundang'=>$idp,'url_diundang'=>$tnamaurl])->row_array();
		if($cekdiundang){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di URL <strong>Sudah ada</strong>!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
		}

		$data = array(
			        'id_diundang' => null,
			        'matchid_pengundang' => $idp,
			        'url_diundang' => $tnamaurlbaru,
			        'nama_diundang' => $tnamadiundangbaru,
			        'nomer_diundang' => '',
			        'alamat_diundang' => '',
			        'absen_diundang' => 'null',
			        'jumlah_kehadiran' => 0
					);
			$this->db->insert('diundang', $data);
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Daftar undangan <strong>Berhasil</strong> ditambahkan!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;	
	}

	public function ajaxeditdiundanguser()
	{
		// sleep(2);
		$idp=$this->session->userdata('id_p');
		$ideditdiundang=htmlspecialchars($this->input->post('ideditdiundang',true));

		$queryundangan="SELECT * from diundang where id_diundang='$ideditdiundang' and matchid_pengundang='$idp'";
		$datajson=$this->db->query($queryundangan)->row_array();
		echo json_encode($datajson);
		return false;
	}

	public function editdaftardiundanguser()
	{
		$idu=$this->session->userdata('id_user');
		$idp=$this->session->userdata('id_p');
		$idediundang=htmlspecialchars($this->input->post('idediundang',true));
		$enamaurl=strtolower($this->input->post('enamaurl',true));
		$enamadiundang=$this->input->post('enamadiundang',true);
		// $enomerdiundang=htmlspecialchars($this->input->post('enomerdiundang',true));
		// $ealamatdiundang=htmlspecialchars($this->input->post('ealamatdiundang',true));

		$users=$this->db->get_where('users',['id_user'=>$idu])->row_array();

		if($users['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Fitur sudah Di <strong>non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
		}

		// $getnamadiundang=$this->db->get_where('diundang',['url_diundang'=>$enamaurl,'matchid_pengundang'=>$idp])->row_array();

		// $getnamadiundang=$this->db->get_where('diundang',['url_diundang'=>$enamaurl,'matchid_pengundang'=>$idp])->row_array();

		// if($getnamadiundang){
		// 	$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
		// 		  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
		// 		    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
		// 		      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
		// 		      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di URL <strong>Sudah ada</strong>!</span>
		// 		    </span>
		// 		    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
		// 		  </div>
		// 		</div>');
		// 	redirect('users');
		// 	return false;
		// }

		$enamaurlnull=trim($enamaurl);
	    if(empty($enamaurlnull)){
	      	$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di URL <strong>Tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
	    }else{
	      $enamaurlbaru1 = preg_replace('/[^a-zA-Z0-9\_\.\-]/', ' ', $enamaurlnull);
	      $enamaurlbaru= str_replace(' ', '', $enamaurlbaru1);
	    }

	    $enamadiundangnull=trim($enamadiundang);
	    if(empty($enamadiundangnull)){
	      	$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Nama di undang <strong>Tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
	    }else{
	      $enamadiundangbaru = preg_replace('/[^a-zA-Z0-9\&\_\.\,\-]/', ' ', $enamadiundangnull);
	    }


		$this->db->set('url_diundang', $enamaurlbaru);
		$this->db->set('nama_diundang', $enamadiundangbaru);
		// $this->db->set('nomer_diundang', $enomerdiundang);
		// $this->db->set('alamat_diundang', $ealamatdiundang);
		$this->db->where('id_diundang', $idediundang);
		$this->db->where('matchid_pengundang', $idp);
		$this->db->update('diundang');

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Daftar undangan <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
		redirect('users');
		return false;
	}

	public function hapusdaftarundanganuser($iddiundang)
	{
		$idu=$this->session->userdata('id_user');
		$idp=$this->session->userdata('id_p');

		$users=$this->db->get_where('users',['id_user'=>$idu])->row_array();

		if($users['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Fitur sudah Di <strong>non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('users');
			return false;
		}
		
		$this->db->where('id_diundang', $iddiundang);
		$this->db->where('matchid_pengundang', $idp);
		$this->db->delete('diundang');

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Daftar undangan <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		redirect('users');
		return false;
	}

	public function ubahpassworduser()
	{
		$data['profileuser']=$this->db->get_where('users',['id_user'=>$this->session->userdata('id_user')])->row_array();
		$userid=$this->session->userdata('id_user');
		$passwordlama=htmlspecialchars($this->input->post('passwordlama',true));
		$matchpassword=$this->db->get_where('users',['id_user'=>$userid])->row_array();
		// var_dump($matchpassword);die;

		$this->form_validation->set_rules('passwordlama','passwordlama','trim|required',
			[
				'required'=>'Password harus diisi'
			]);
		$this->form_validation->set_rules('passwordbaru','Password','trim|required|min_length[5]|matches[passwordconfirm]',[
				'required'=>'Password harus diisi',
				'min_length'=>'Panjang password min 5 karakter',
				'matches'=>'Confirm password tidak sama'
			]);
		$this->form_validation->set_rules('passwordconfirm','confirmpassword','trim|required|matches[passwordbaru]',
			[
				'required'=>'Password harus diisi',
				'matches'=>'Confirm password tidak sama'
			]);

		if ($this->form_validation->run() == FALSE){
			// $this->load->view('users/setpassword',$data);
			$this->load->view('user/ubahpassworduser');
		}else{
			if($matchpassword['password_user']!=$passwordlama){
				$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Password lama 
		              <strong>Salah</strong>.
		              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>');
				redirect('users/ubahpassworduser');
				// $this->load->view("templates/header",$data);
				// $this->load->view("home/setpassword",$data);
				return false;
			}else{
				$this->db->set('password_user', htmlspecialchars($this->input->post('passwordbaru',true)));
				$this->db->where('id_user', $userid);
				$this->db->update('users');
				$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Success password
		              <strong>berhasil</strong> diubah.
		              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>');
				redirect('users/ubahpassworduser');
				// $this->load->view("templates/header",$data);
				// $this->load->view("home/setpassword",$data);
				return false;
			}
		}
	}


}