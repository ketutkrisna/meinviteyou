<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('pengunjung');
	}

	public function daftarundangan($pengundang='',$diundang='')
	{
		// $pengundang='krisnadanhilmah';
		if($diundang==''){
			redirect('pengunjung');
		}
		date_default_timezone_set('Asia/Jakarta');
		$queryurl="SELECT * from pengundang left join diundang on pengundang.id_pengundang=diundang.matchid_pengundang where url_pengundang='$pengundang' and url_diundang='$diundang'";
		$data['detailundangan']=$this->db->query($queryurl)->row_array();
		$datasession=$this->db->query($queryurl)->row_array();

		// if($data['detailundangan']['tipe_undangan']!='sulit'){
		// 	redirect('pengunjung');
		// }

		$jenisacara = $data['detailundangan']['jenis_acara'];
		if($jenisacara!='pernikahan'){
			redirect('pengunjung');
		}

		$statuspayment = $data['detailundangan']['status_bayar'];
		if($statuspayment=='belum'){
			$this->load->view('undangan/payment',$data);
			return false;
		}

		$tanggalacara = $data['detailundangan']['tanggal_acara'];
		$waktuawal  = strtotime($tanggalacara);
		if($data['detailundangan']['paket_acara']=='hemat'){
			$waktutarget = $waktuawal + 7884000;
			$data['paket']='Anda menggunakan undangan paket <b>HEMAT</b> dengan masa aktif <b>3 bulan</b>.<br> Dihitung dari Tanggal pernikahan anda <b>'.date('d M Y',$waktuawal).'</b> Sampai tanggal <b>'.date('d M Y',$waktutarget).'</b>';
		}else if($data['detailundangan']['paket_acara']=='reguler'){
			$waktutarget = $waktuawal + 15770000;
			$data['paket']='Anda menggunakan undangan paket <b>REGULER</b> dengan masa aktif <b>6 bulan</b>.<br> Dihitung dari Tanggal pernikahan anda <b>'.date('d M Y',$waktuawal).'</b> Sampai tanggal <b>'.date('d M Y',$waktutarget).'</b>';
		}else{
			$waktutarget = $waktuawal + 31546000;
			$data['paket']='Anda menggunakan undangan paket <b>PREMIUM</b> dengan masa aktif <b>1 tahun</b>.<br> Dihitung dari Tanggal pernikahan anda <b>'.date('d M Y',$waktuawal).'</b> Sampai tanggal <b>'.date('d M Y',$waktutarget).'</b>';
		}
		$waktusekarang = time();
		if($waktusekarang > $waktutarget){
			$this->load->view('undangan/limit',$data);
			return false;
		}

		$dataidp=$this->db->get_where('pengundang',['url_pengundang'=>$pengundang])->row_array();
		$dataidpe=$dataidp['id_pengundang'];

		$countgaleri="SELECT count(*) as countgaleri from galeris where idpengundang_galeri='$dataidpe'";
		$data['countgaleri']=$this->db->query($countgaleri)->row_array();
		// var_dump($dataidpe);die;
		$data['fotogaleris']=$this->db->get_where('galeris',['idpengundang_galeri'=>$dataidpe])->result_array();
		// var_dump($data['fotogaleris']);die;
		$data['title']=$data['detailundangan']['namapanggilan_priawanita'];
		// var_dump($data['detailundangan']['paket_wedding']);die;
		if($data['detailundangan']['tema_template']=='classic'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/classic',$data);
		}else if($data['detailundangan']['tema_template']=='rustic'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/rustic',$data);
		}else if($data['detailundangan']['tema_template']=='tematic'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/tematic',$data);
		}else if($data['detailundangan']['tema_template']=='vantage'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/vantage',$data);
		}else if($data['detailundangan']['tema_template']=='minimalis'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/minimalis',$data);
		}else if($data['detailundangan']['tema_template']=='elegant'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/elegant',$data);
		}else if($data['detailundangan']['tema_template']=='ethnic'){
			$this->session->id_pengundang = $datasession['id_pengundang'];
			$this->session->id_diundang = $datasession['id_diundang'];
			$this->load->view('pernikahan/ethnic',$data);
		}else{
			redirect('pengunjung');
		}
	}

	public function ucapan()
	{

		date_default_timezone_set('Asia/Jakarta');
		$id_pengundang=$_SESSION['id_pengundang'];
		$id_diundang=$_SESSION['id_diundang'];

		$cekaktif = $this->db->get_where('users',['id_p'=>$id_pengundang])->row_array();

		// var_dump($_SESSION['id_pengundang']);die;
		$idupengundang=$this->input->post('idupengundang',true);
		$namaanda=$this->input->post('namaanda',true);
		$isiucapan=$this->input->post('isiucapan',true);
		$absenkehadiran=$this->input->post('absenkehadiran',true);
		$jumlahkehadiran=$this->input->post('jumlahkehadiran',true);
		$waktuucapan=time();

		// var_dump($idupengundang);die;

		$datacek=$this->db->get_where('pengundang',['id_pengundang'=>$id_pengundang])->row_array();
		$datacekdiundang=$this->db->get_where('diundang',['id_diundang'=>$id_diundang])->row_array();
		$tema=$datacek['tema_template'];
		$namapengundang=$datacek['url_pengundang'];
		$namadiundang=$datacekdiundang['url_diundang'];

		if($cekaktif['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(245, 178, 34,.7);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 167, 38,.5);color:#303030;border-radius:50%;box-shadow:0px 0px 2px rgba(0,0,0,.5);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;">&#8520;</div>
				      <span style="padding-left:5px;color:#ddd;line-height:16px">Fitur RSVP telah di <strong>Non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		}

		// if($datacek['paket_acara']=='pakethard'||$datacek['paket_acara']=='paketspesial'){
			
			$this->db->set('absen_diundang', $absenkehadiran);
			$this->db->set('jumlah_kehadiran', $jumlahkehadiran);
			$this->db->where('id_diundang', $id_diundang);
			$this->db->where('matchid_pengundang', $id_pengundang);
			$this->db->update('diundang');

			$data = array(
			        'id_ucapan' => null,
			        'urlpengundang_ucapan' => $id_pengundang,
			        'urldiundang_ucapan' => $id_diundang,
			        'isi_ucapan' => $isiucapan,
			        'waktu_ucapan' => $waktuucapan
					);
			$this->db->insert('ucapan', $data);

			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ucapan <strong>Berhasil</strong> ditambahkan!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		// }else{
		// 	redirect('pengunjung');
		// 	return false;
		// }
	}

	public function ucapantampanama()
	{

		date_default_timezone_set('Asia/Jakarta');
		$id_pengundang=$_SESSION['id_pengundang'];
		$id_diundang=$_SESSION['id_diundang'];

		$cekaktif = $this->db->get_where('users',['id_p'=>$id_pengundang])->row_array();


		// var_dump($_SESSION['id_pengundang']);die;
		$idupengundang=$this->input->post('idupengundang',true);
		$namaanda=$this->input->post('namaanda',true);
		$isikomen=$this->input->post('isiucapan',true);
		$absenkehadiran=$this->input->post('absenkehadiran',true);
		$jumlahkehadiran=$this->input->post('jumlahkehadiran',true);
		$waktuucapan=time();

		// var_dump($idupengundang);die;

		$datacek=$this->db->get_where('pengundang',['id_pengundang'=>$id_pengundang])->row_array();
		$datacekdiundang=$this->db->get_where('diundang',['id_diundang'=>$id_diundang])->row_array();
		$tema=$datacek['tema_template'];
		$namapengundang=$datacek['url_pengundang'];
		$namadiundang=$datacekdiundang['url_diundang'];

		if($cekaktif['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(245, 178, 34,.7);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 167, 38,.5);color:#303030;border-radius:50%;box-shadow:0px 0px 2px rgba(0,0,0,.5);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;">&#8520;</div>
				      <span style="padding-left:5px;color:#ddd;line-height:16px">Fitur RSVP telah di <strong>Non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		}

		// if($datacek['paket_acara']=='pakethard'||$datacek['paket_acara']=='paketspesial'){
			
			// $this->db->set('absen_diundang', $absenkehadiran);
			// $this->db->set('jumlah_kehadiran', $jumlahkehadiran);
			// $this->db->where('id_diundang', $id_diundang);
			// $this->db->where('matchid_pengundang', $id_pengundang);
			// $this->db->update('diundang');

			$data = array(
			        'id_komen' => null,
			        'urlpengundang_komen' => $id_pengundang,
			        'urldiundang_komen' => $namaanda,
			        'isi_komen' => $isikomen,
			        'absen_komen' => $absenkehadiran,
			        'jumlah_kehadiran' => $jumlahkehadiran,
			        'waktu_ucapan' => $waktuucapan
					);
			$this->db->insert('komen', $data);

			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ucapan <strong>Berhasil</strong> ditambahkan!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		// }else{
		// 	redirect('pengunjung');
		// 	return false;
		// }
	}

	public function replytampanama()
	{
		date_default_timezone_set('Asia/Jakarta');
		$id_pengundang=$_SESSION['id_pengundang'];
		$id_diundang=$_SESSION['id_diundang'];

		$cekaktif = $this->db->get_where('users',['id_p'=>$id_pengundang])->row_array();


		// var_dump($_SESSION['id_pengundang']);die;
		$idupengundang=$this->input->post('idupengundang',true);
		$idkomen=$this->input->post('idkomen',true);
		$namareply=$this->input->post('namareply',true);
		$isireply=$this->input->post('isireply',true);
		$waktureply=time();

		// var_dump($idupengundang);die;

		$datacek=$this->db->get_where('pengundang',['id_pengundang'=>$id_pengundang])->row_array();
		$datacekdiundang=$this->db->get_where('diundang',['id_diundang'=>$id_diundang])->row_array();
		$tema=$datacek['tema_template'];
		$namapengundang=$datacek['url_pengundang'];
		$namadiundang=$datacekdiundang['url_diundang'];

		if($cekaktif['status_user']=='tidak'){
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(245, 178, 34,.7);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 167, 38,.5);color:#303030;border-radius:50%;box-shadow:0px 0px 2px rgba(0,0,0,.5);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;">&#8520;</div>
				      <span style="padding-left:5px;color:#ddd;line-height:16px">Fitur RSVP telah di <strong>Non aktifkan</strong> oleh admin!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		}

		// if($datacek['paket_acara']=='pakethard'||$datacek['paket_acara']=='paketspesial'){
			
			// $this->db->set('absen_diundang', $absenkehadiran);
			// $this->db->set('jumlah_kehadiran', $jumlahkehadiran);
			// $this->db->where('id_diundang', $id_diundang);
			// $this->db->where('matchid_pengundang', $id_pengundang);
			// $this->db->update('diundang');

			$data = array(
			        'id_reply' => null,
			        'id_pengundangreply' => $id_pengundang,
			        'id_komenreply' => $idkomen,
			        'nama_reply' => $namareply,
			        'isi_reply' => $isireply,
			        'waktu_reply' => $waktureply
					);
			$this->db->insert('reply', $data);

			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Balasan <strong>Berhasil</strong> ditambahkan!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('wedding/'.$namapengundang.'/'.$namadiundang);
			return false;
		// }else{
		// 	redirect('pengunjung');
		// 	return false;
		// }
	}



}