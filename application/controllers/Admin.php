<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('level_user')){
			redirect('auth');
		}
		if($this->session->userdata('level_user')!='admin'){
			redirect('users');
		}
	}

	public function index()
	{
		$querypengundang="SELECT count(id_user) as ids, id_user, status_user, pengundang.* from pengundang left join users on pengundang.id_pengundang=users.id_p group by id_pengundang order by id_pengundang desc";
		$data["allorder"]=$this->db->query($querypengundang)->result_array();

		// var_dump($data["allorder"]);die;
		$this->load->view('admin/admins',$data);
	}

	public function aturundangan($idpengundang)
	{
		$queryundangan="SELECT * from pengundang where id_pengundang='$idpengundang'";
		$data['detailundangan']=$this->db->query($queryundangan)->row_array();
		$this->load->view('admin/aturundangan',$data);
	}

	public function tambahundangan()
	{
		$tambahnamaurl=$this->input->post('tambahnamaurl',true);
		$tambahnamalakiperempuan=$this->input->post('tambahnamalakiperempuan');
		$tambahfullnamalaki=$this->input->post('tambahfullnamalaki',true);
		$tambahnamaortulaki=$this->input->post('tambahnamaortulaki');
		$tambahfullnamaperempuan=$this->input->post('tambahfullnamaperempuan',true);
		$tambahnamaortuperempuan=$this->input->post('tambahnamaortuperempuan');
		$tambahnomertlp=$this->input->post('tambahnomertlp',true);
		$tambahnomertlpw=$this->input->post('tambahnomertlpw',true);
		$tambahucapanawal=$this->input->post('tambahucapanawal');
		$tambahucapanahir=$this->input->post('tambahucapanahir');
		$tambahtanggalakad=$this->input->post('tambahtanggalakad',true);
		$tambahjamakad=$this->input->post('tambahjamakad',true);
		$tambahalamatakad=$this->input->post('tambahalamatakad',true);
		$tambahtanggalacara=$this->input->post('tambahtanggalacara',true);
		$tambahjamacara=$this->input->post('tambahjamacara',true);
		$tambahalamatacara=$this->input->post('tambahalamatacara',true);
		$tambahmapacara=$this->input->post('tambahmapacara');

		// $tambahmusikacara=$this->input->post('tambahmusikacara');
		$tambahvideoacara=$this->input->post('tambahvideoacara');

		$tambahjenisacara=$this->input->post('tambahjenisacara',true);
		$tambahtemaundangan=$this->input->post('tambahtemaundangan',true);
		$tambahpaketacara=$this->input->post('tambahpaketacara',true);
		$getnamapengundang=$this->db->get_where('pengundang',['url_pengundang'=>$tambahnamaurl])->row_array();

		if($getnamapengundang){
			$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
			              <strong>Gagal</strong>, Nama diUrl sudah ada!
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
			redirect('admin');
			return false;
		}

		if($_FILES['tambahfotolaki']['name'] && $_FILES['tambahfotoperempuan']['name']){

			$configl['upload_path']          = './assets/img/fotopelanggan/';
            $configl['allowed_types']        = 'jpg|png|gif';
            $configl['max_size']             = 2048;

            $this->load->library('upload', $configl);

            if($this->upload->do_upload('tambahfotolaki')){
            	$fotol=$this->upload->data('file_name');
            }else{
            	$errorl = $this->upload->display_errors('','');
            	if($errorl=='The filetype you are attempting to upload is not allowed.'){
            		$errorsl=['error'=>'Format file harus JPG,PNG'];
            		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Format file harus
			              <strong>JPG|PNG|GIF</strong>(laki-laki)
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
					redirect('admin');
					return false;
            	}else{
            		$errorsl=['error'=>'Max gambar 2MB'];
            		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Ukuran gambar terlalu besar 
			              <strong>max 2MB</strong>(laki-laki)
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
					redirect('admin');
					return false;
            	}
            }

            $configp['upload_path']          = './assets/img/fotopelanggan/';
            $configp['allowed_types']        = 'jpg|png|gif';
            $configp['max_size']             = 2048;

            $this->load->library('upload', $configp);

            if($this->upload->do_upload('tambahfotoperempuan')){
            	$fotop=$this->upload->data('file_name');
            }else{
            	$errorp = $this->upload->display_errors('','');
            	if($errorp=='The filetype you are attempting to upload is not allowed.'){
            		$errorsp=['error'=>'Format file harus JPG,PNG'];
            		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Format file harus
			              <strong>JPG|PNG|GIF</strong>(perempuan)
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
					redirect('admin');
					return false;
            	}else{
            		$errorsp=['error'=>'Max gambar 2MB'];
            		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Ukuran gambar terlalu besar 
			              <strong>max 2MB</strong>(perempuan)
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
					redirect('admin');
					return false;
            	}
            }
            // if($tambahtemaundangan=='tematic'){
            // 	$colortema='#2484a6';
            // }else{
            // 	$colortema='#000';
            // }
            $colortemplate1=$this->input->post('tambahwarnadasar',true);
            $colortemplate2=$this->input->post('tambahwarnadasar2',true);
            // insert to produks
            // $bgdefault=$tambahtemaundangan.'.jpg';
            $bgdefault='bgdefault.jpg';
			// $data = array(
			//         'id_pengundang' => null,
			//         'url_pengundang' => $tambahnamaurl,
			//         'namapanggilan_priawanita' => $tambahnamalakiperempuan,
			//         'namalengkap_pria' => $tambahfullnamalaki,
			//         'orangtua_pria' => $tambahnamaortulaki,
			//         'namalengkap_wanita' => $tambahfullnamaperempuan,
			//         'orangtua_wanita' => $tambahnamaortuperempuan,
			//         'ucapan_awal' => $tambahucapanawal,
			//         'ucapan_ahir' => $tambahucapanahir,
			//         'tanggal_akad' => $tambahtanggalakad,
			//         'jam_akad' => $tambahjamakad,
			//         'alamat_akad' => $tambahalamatakad,
			//         'map_akad' => '',
			//         'tanggal_acara' => $tambahtanggalacara,
			//         'jam_acara' => $tambahjamacara,
			//         'alamat_acara' => $tambahalamatacara,
			//         'map_acara' => $tambahmapacara,
			//         'musik_acara' => '',
			//         'video_acara' => $tambahvideoacara,
			//         'stori_pengundang' => '',
			//         'rekening_pengundang' => '',
			//         'foto_pria' => $fotol,
			//         'foto_wanita' => $fotop,
			//         'jenis_acara' => $tambahjenisacara,
			//         'tema_template' => $tambahtemaundangan,
			//         'paket_acara' => $tambahpaketacara,
			//         'background_welcome' => $bgdefault,
			//         'nomer_pengundang' => $tambahnomertlp,
			//         'nomer_pengundangw' => $tambahnomertlpw,
			//         'color_template' => $colortema,
			//         'color_template2' => '',
			//         'img_sharing' => 'defaultsharing.png',
			//         'informasi_modal' => ''
			// 		);
			$data = array(
			        'id_pengundang' => null,
			        'url_pengundang' => $tambahnamaurl,
			        'namapanggilan_priawanita' => $tambahnamalakiperempuan,
			        'namalengkap_pria' => $tambahfullnamalaki,
			        'orangtua_pria' => '',
			        'namalengkap_wanita' => $tambahfullnamaperempuan,
			        'orangtua_wanita' => '',
			        'ucapan_awal' => '',
			        'ucapan_ahir' => '',
			        'tanggal_akad' => $tambahtanggalakad,
			        'jam_akad' => $tambahjamakad,
			        'alamat_akad' => $tambahalamatakad,
			        'map_akad' => '',
			        'tanggal_acara' => $tambahtanggalacara,
			        'jam_acara' => $tambahjamacara,
			        'alamat_acara' => $tambahalamatacara,
			        'map_acara' => '',
			        'musik_acara' => '',
			        'video_acara' => '',
			        'stori_pengundang' => '',
			        'rekening_pengundang' => '',
			        'foto_pria' => $fotol,
			        'foto_wanita' => $fotop,
			        'jenis_acara' => $tambahjenisacara,
			        'tema_template' => $tambahtemaundangan,
			        'paket_acara' => $tambahpaketacara,
			        'background_welcome' => $bgdefault,
			        'nomer_pengundang' => '',
			        'nomer_pengundangw' => '',
			        'color_template' => $colortemplate1,
			        'color_template2' => $colortemplate2,
			        'img_sharing' => 'defaultsharing.png',
			        'informasi_modal' => '',
			        'status_bayar' => 'belum',
			        'tipe_undangan' => 'sulit'
					);
			$this->db->insert('pengundang', $data);
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Undangan
	              <strong>Berhasil</strong> ditambahkan.
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
			redirect('admin');
			return false;

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Foto 
	              <strong> laki-laki & perempuan </strong> tidak boleh kosong!
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
			redirect('admin');
			return false;
		}
	}

	public function ajaxambildatapengundang()
	{
		// sleep(2);
		$idpengundang=htmlspecialchars($this->input->post('idpengundang',true));

		$queryundangan="SELECT * from pengundang where id_pengundang='$idpengundang'";
		$datajson=$this->db->query($queryundangan)->row_array();
		echo json_encode($datajson);
		return false;
	}

	public function ajaxambildetailuser()
	{
		// sleep(2);
		$iduser=htmlspecialchars($this->input->post('iduser',true));

		// $detail=$this->db->get_where('users',['id_user'=>$iduser])->row_array();
		$querypengundang="SELECT namapanggilan_priawanita, users.* from pengundang left join users on pengundang.id_pengundang=users.id_p where id_user = '$iduser' group by id_pengundang";
		$detail=$this->db->query($querypengundang)->row_array();
		echo json_encode($detail);
		return false;
	}

	public function ajaxambilidgaleri()
	{
		// sleep(2);
		$idgaleri=htmlspecialchars($this->input->post('idgaleri',true));

		// $detail=$this->db->get_where('users',['id_user'=>$iduser])->row_array();
		$querygaleri="SELECT * from galeris where id_galeri = $idgaleri";
		$detailgaleri=$this->db->query($querygaleri)->row_array();
		echo json_encode($detailgaleri);
		return false;
	}

	public function buatakseslogin()
	{
		$idpen=htmlspecialchars($this->input->post('idpen',true));
		$fullnamepengundang=htmlspecialchars($this->input->post('fullnamepengundang',true));
		$usernamepengundang=htmlspecialchars($this->input->post('usernamepengundang',true));
		$passwordpengundang=htmlspecialchars($this->input->post('passwordpengundang',true));

		// var_dump($_POST);die;

		$data = array(
			        'id_user' => null,
			        'id_p' => $idpen,
			        'nama_user' => $fullnamepengundang,
			        'username_user' => $usernamepengundang,
			        'password_user' => $passwordpengundang,
			        'level_user' => "user"
					);
			$this->db->insert('users', $data);
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
	              <strong>Berhasil,</strong> akses user telah dibuat!
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
			redirect('admin');
			return false;
	}

	public function tutupakseslogin($iduser)
	{
		$this->db->set('status_user', 'tidak');
		$this->db->where('id_user', $iduser);
		$this->db->update('users');

		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Fitur CRUD,</strong> telah dinonaktifkan!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
		redirect('admin');
		return false;
	}

	public function bukaakseslogin($iduser)
	{
		$this->db->set('status_user', 'aktif');
		$this->db->where('id_user', $iduser);
		$this->db->update('users');

		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Fitur CRUD,</strong> telah diaktifkan!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
		redirect('admin');
		return false;
	}

	public function tambahdaftarundangan()
	{
		$idtpengundang=htmlspecialchars($this->input->post('idtpengundang',true));
		$tnamaurl=strtolower($this->input->post('tnamaurl',true));
		$tnamadiundang=$this->input->post('tnamadiundang',true);
		$tnomerdiundang=htmlspecialchars($this->input->post('tnomerdiundang',true));
		$talamatdiundang=htmlspecialchars($this->input->post('talamatdiundang',true));

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
			redirect('admin/aturundangan/'.$idtpengundang);
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
			redirect('admin/aturundangan/'.$idtpengundang);
			return false;
	    }else{
	      $tnamadiundangbaru = preg_replace('/[^a-zA-Z0-9\&\_\.\,\-]/', ' ', $tnamadiundangnull);
	    }

		$cekdiundang=$this->db->get_where('diundang',['matchid_pengundang'=>$idtpengundang,'url_diundang'=>$tnamaurl])->row_array();
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
			redirect('admin/aturundangan/'.$idtpengundang);
			return false;
		}

		$data = array(
			        'id_diundang' => null,
			        'matchid_pengundang' => $idtpengundang,
			        'url_diundang' => $tnamaurlbaru,
			        'nama_diundang' => $tnamadiundangbaru,
			        'nomer_diundang' => $tnomerdiundang,
			        'alamat_diundang' => $talamatdiundang,
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
			redirect('admin/aturundangan/'.$idtpengundang);
			return false;	
	}

	public function ajaxeditundangan()
	{
		// sleep(2);
		$ideditundangan=htmlspecialchars($this->input->post('ideditundangan',true));

		$queryundangan="SELECT * from pengundang where id_pengundang='$ideditundangan'";
		$datajson=$this->db->query($queryundangan)->row_array();
		echo json_encode($datajson);
		return false;
	}

	public function editundangan()
	{
		$ideundangan=$this->input->post('ideundangan',true);
		$tambahnamaurl=$this->input->post('tambahnamaurl',true);
		$tambahnamalakiperempuan=$this->input->post('tambahnamalakiperempuan');
		$tambahfullnamalaki=$this->input->post('tambahfullnamalaki',true);
		$tambahnamaortulaki=$this->input->post('tambahnamaortulaki');
		$tambahfullnamaperempuan=$this->input->post('tambahfullnamaperempuan',true);
		$tambahnamaortuperempuan=$this->input->post('tambahnamaortuperempuan');
		$tambahnomertlp=$this->input->post('tambahnomertlp',true);
		$tambahnomertlpw=$this->input->post('tambahnomertlpw',true);
		$tambahucapanawal=$this->input->post('tambahucapanawal');
		$tambahucapanahir=$this->input->post('tambahucapanahir');
		$tambahtanggalakad=$this->input->post('tambahtanggalakad',true);
		$tambahjamakad=$this->input->post('tambahjamakad',true);
		$tambahalamatakad=$this->input->post('tambahalamatakad');
		$tambahmapakad=$this->input->post('tambahmapakad');

		$tambahtanggalacara=$this->input->post('tambahtanggalacara',true);
		$tambahjamacara=$this->input->post('tambahjamacara',true);
		$tambahalamatacara=$this->input->post('tambahalamatacara');
		$tambahmapacara=$this->input->post('tambahmapacara');

		// $tambahmusikacara=$this->input->post('tambahmusikacara');
		$tambahvideoacara=$this->input->post('tambahvideoacara');
		$tambahstoriacara=$this->input->post('tambahstoriacara');
		$tambahrekeningacara=$this->input->post('tambahrekeningacara');
		$tambahinformasi=$this->input->post('tambahinformasi');

		$tambahjenisacara=$this->input->post('tambahjenisacara',true);
		$tambahtemaundangan=$this->input->post('tambahtemaundangan',true);
		$tambahwarnadasar=$this->input->post('tambahwarnadasar',true);
		$tambahwarnadasar2=$this->input->post('tambahwarnadasar2',true);
		$tambahpaketacara=$this->input->post('tambahpaketacara',true);
		$tambahstatusbayar=$this->input->post('tambahstatusbayar',true);
		$tambahtipeundangan=$this->input->post('tambahtipeundangan',true);

		$getnamapengundang=$this->db->get_where('pengundang',['url_pengundang'=>$tambahnamaurl])->row_array();
		$fotopertama=$this->db->get_where('pengundang',['id_pengundang'=>$ideundangan])->row_array();

		// if($getnamapengundang){
		// 	$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
		// 	              <strong>Gagal</strong>, Nama diUrl pengundang sudah ada!
		// 	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 	                <span aria-hidden="true">&times;</span>
		// 	              </button>
		// 	            </div>');
		// 	redirect('admin/aturundangan/'.$ideundangan);
		// 	return false;
		// }

		if($_FILES['tambahfotolaki']['name'] || $_FILES['tambahfotoperempuan']['name']){
			if($_FILES['tambahfotolaki']['name']==''){
				$fotol=$fotopertama['foto_pria'];
			}else{
				$configl['upload_path']          = './assets/img/fotopelanggan/';
	            $configl['allowed_types']        = 'jpg|png|gif';
	            $configl['max_size']             = 2048;

	            $this->load->library('upload', $configl);

	            if($this->upload->do_upload('tambahfotolaki')){
		            unlink(FCPATH . '/assets/img/fotopelanggan/' .$fotopertama['foto_pria']);
	            	$fotol=$this->upload->data('file_name');
	            }else{
	            	$errorl = $this->upload->display_errors('','');
	            	if($errorl=='The filetype you are attempting to upload is not allowed.'){
	            		$errorsl=['error'=>'Format file harus JPG,PNG'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong> (mempelai pertama)!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$ideundangan);
						return false;
	            	}else{
	            		$errorsl=['error'=>'Max gambar 2MB'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu bessar <strong>MAX 2MB</strong> (mempelai pertama)!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$ideundangan);
						return false;
	            	}
	            }
			}

			if($_FILES['tambahfotoperempuan']['name']==''){
				$fotop=$fotopertama['foto_wanita'];
			}else{
				$configp['upload_path']          = './assets/img/fotopelanggan/';
	            $configp['allowed_types']        = 'jpg|png|gif';
	            $configp['max_size']             = 2048;

	            $this->load->library('upload', $configp);

	            if($this->upload->do_upload('tambahfotoperempuan')){
	            	unlink(FCPATH . '/assets/img/fotopelanggan/' .$fotopertama['foto_wanita']);
	            	$fotop=$this->upload->data('file_name');
	            }else{
	            	$errorp = $this->upload->display_errors('','');
	            	if($errorp=='The filetype you are attempting to upload is not allowed.'){
	            		$errorsp=['error'=>'Format file harus JPG,PNG'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong> (mempelai kedua)!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$ideundangan);
						return false;
	            	}else{
	            		$errorsp=['error'=>'Max gambar 2MB'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu besar <strong>MAX 2MB</strong> (mempelai kedua)!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$ideundangan);
						return false;
	            	}
	            }
			}
			if($fotopertama['background_welcome']=='bgdefault.jpg'){
				$bgdefault='bgdefault.jpg';
			}else{
				$bgdefault=$fotopertama['background_welcome'];
			}
			// update to mobils
			$this->db->set('url_pengundang', $tambahnamaurl);
			$this->db->set('namapanggilan_priawanita', $tambahnamalakiperempuan);
			$this->db->set('namalengkap_pria', $tambahfullnamalaki);
			$this->db->set('orangtua_pria', $tambahnamaortulaki);
			$this->db->set('namalengkap_wanita', $tambahfullnamaperempuan);
			$this->db->set('orangtua_wanita', $tambahnamaortuperempuan);
			$this->db->set('nomer_pengundang', $tambahnomertlp);
			$this->db->set('nomer_pengundangw', $tambahnomertlpw);
			$this->db->set('ucapan_awal', $tambahucapanawal);
			$this->db->set('ucapan_ahir', $tambahucapanahir);

			$this->db->set('tanggal_akad', $tambahtanggalakad);
			$this->db->set('jam_akad', $tambahjamakad);
			$this->db->set('alamat_akad', $tambahalamatakad);
			$this->db->set('map_akad', $tambahmapakad);

			$this->db->set('tanggal_acara', $tambahtanggalacara);
			$this->db->set('jam_acara', $tambahjamacara);
			$this->db->set('alamat_acara', $tambahalamatacara);
			$this->db->set('map_acara', $tambahmapacara);

			// $this->db->set('musik_acara', $tambahmusikacara);
			$this->db->set('video_acara', $tambahvideoacara);
			$this->db->set('stori_pengundang', $tambahstoriacara);
			$this->db->set('rekening_pengundang', $tambahrekeningacara);
			$this->db->set('informasi_modal', $tambahinformasi);

			$this->db->set('foto_pria', $fotol);
			$this->db->set('foto_wanita', $fotop);
			$this->db->set('jenis_acara', $tambahjenisacara);
			$this->db->set('tema_template', $tambahtemaundangan);
			$this->db->set('color_template', $tambahwarnadasar);
			$this->db->set('color_template2', $tambahwarnadasar2);
			$this->db->set('paket_acara', $tambahpaketacara);
			$this->db->set('status_bayar', $tambahstatusbayar);
			$this->db->set('tipe_undangan', $tambahtipeundangan);
			$this->db->set('background_welcome', $bgdefault);
			$this->db->where('id_pengundang', $ideundangan);
			$this->db->update('pengundang');
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Undangan <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$ideundangan);
			return false;

		}else{
			if($fotopertama['background_welcome']=='bgdefault.jpg'){
				$bgdefault='bgdefault.jpg';
			}else{
				$bgdefault=$fotopertama['background_welcome'];
			}
			$fotol=$fotopertama['foto_pria'];
			$fotop=$fotopertama['foto_wanita'];
			// update to mobils
			$this->db->set('url_pengundang', $tambahnamaurl);
			$this->db->set('namapanggilan_priawanita', $tambahnamalakiperempuan);
			$this->db->set('namalengkap_pria', $tambahfullnamalaki);
			$this->db->set('orangtua_pria', $tambahnamaortulaki);
			$this->db->set('namalengkap_wanita', $tambahfullnamaperempuan);
			$this->db->set('orangtua_wanita', $tambahnamaortuperempuan);
			$this->db->set('nomer_pengundang', $tambahnomertlp);
			$this->db->set('nomer_pengundangw', $tambahnomertlpw);
			$this->db->set('ucapan_awal', $tambahucapanawal);
			$this->db->set('ucapan_ahir', $tambahucapanahir);

			$this->db->set('tanggal_akad', $tambahtanggalakad);
			$this->db->set('jam_akad', $tambahjamakad);
			$this->db->set('alamat_akad', $tambahalamatakad);
			$this->db->set('map_akad', $tambahmapakad);

			$this->db->set('tanggal_acara', $tambahtanggalacara);
			$this->db->set('jam_acara', $tambahjamacara);
			$this->db->set('alamat_acara', $tambahalamatacara);
			$this->db->set('map_acara', $tambahmapacara);

			// $this->db->set('musik_acara', $tambahmusikacara);
			$this->db->set('video_acara', $tambahvideoacara);
			$this->db->set('stori_pengundang', $tambahstoriacara);
			$this->db->set('rekening_pengundang', $tambahrekeningacara);
			$this->db->set('informasi_modal', $tambahinformasi);
			
			$this->db->set('foto_pria', $fotol);
			$this->db->set('foto_wanita', $fotop);
			$this->db->set('jenis_acara', $tambahjenisacara);
			$this->db->set('tema_template', $tambahtemaundangan);
			$this->db->set('color_template', $tambahwarnadasar);
			$this->db->set('color_template2', $tambahwarnadasar2);
			$this->db->set('paket_acara', $tambahpaketacara);
			$this->db->set('status_bayar', $tambahstatusbayar);
			$this->db->set('tipe_undangan', $tambahtipeundangan);
			$this->db->set('background_welcome', $bgdefault);
			$this->db->where('id_pengundang', $ideundangan);
			$this->db->update('pengundang');

			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Undangan <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$ideundangan);
			return false;
		}
	}

	public function tambahgaleri()
	{
		$idtambahgaleri=htmlspecialchars($this->input->post('idtambahgaleri',true));
		$urltambahgaleri=htmlspecialchars($this->input->post('urltambahgaleri',true));
		$tambahcaption=htmlspecialchars($this->input->post('tambahcaption',true));

		if($_FILES['tambahfgaleri']['name']){
			$config['upload_path']          = './assets/img/fotogaleripelanggan/';
            $config['allowed_types']        = 'jpg|png|gif';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('tambahfgaleri')){
            	$foto=$this->upload->data('file_name');
            }else{
            	$error = $this->upload->display_errors('','');
            	if($error=='The filetype you are attempting to upload is not allowed.'){
            		$errors=['error'=>'Format file harus JPG,PNG'];
            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
						  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
						    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
						      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
						      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong>!</span>
						    </span>
						    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
						  </div>
						</div>');
					redirect('admin/aturundangan/'.$idtambahgaleri);
					return false;
            	}else{
            		$errors=['error'=>'Max gambar 2MB'];
            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
						  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
						    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
						      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
						      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu besar <strong>MAX 2MB</strong>!</span>
						    </span>
						    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
						  </div>
						</div>');
					redirect('admin/aturundangan/'.$idtambahgaleri);
					return false;
            	}
            }
            // insert to produks
			$data = array(
			        'id_galeri' => null,
			        'idpengundang_galeri' => $idtambahgaleri,
			        'url_galeri' => $urltambahgaleri,
			        'foto_galeri' => $foto,
			        'caption_galeri' => $tambahcaption
					);
			$this->db->insert('galeris', $data);
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto galeri <strong>Berhasil</strong> ditambahkan!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idtambahgaleri);
			return false;
		}else{
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto <strong>tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idtambahgaleri);
			return false;
		}
	}

	public function gantigaleri()
	{
		$idpgl=htmlspecialchars($this->input->post('idpgl',true));
		$idgantigl=htmlspecialchars($this->input->post('idgantigl',true));

		if($_FILES['fotogantigl']['name']){
			$config['upload_path']          = './assets/img/fotogaleripelanggan/';
            $config['allowed_types']        = 'jpg|png|gif';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('fotogantigl')){
            	$foto=$this->upload->data('file_name');
            }else{
            	$error = $this->upload->display_errors('','');
            	if($error=='The filetype you are attempting to upload is not allowed.'){
            		$errors=['error'=>'Format file harus JPG,PNG'];
            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
						  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
						    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
						      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
						      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong>!</span>
						    </span>
						    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
						  </div>
						</div>');
					redirect('admin/aturundangan/'.$idpgl);
					return false;
            	}else{
            		$errors=['error'=>'Max gambar 2MB'];
            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
						  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
						    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
						      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
						      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu besar <strong>MAX 2MB</strong>!</span>
						    </span>
						    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
						  </div>
						</div>');
					redirect('admin/aturundangan/'.$idpgl);
					return false;
            	}
            }
            // insert to galeri
            $fotolama=$this->db->get_where('galeris',['id_galeri'=>$idgantigl])->row_array();
			unlink(FCPATH . '/assets/img/fotogaleripelanggan/' .$fotolama['foto_galeri']);
			$this->db->set('foto_galeri', $foto);
			$this->db->where('id_galeri', $idgantigl);
			$this->db->update('galeris');
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(69, 159, 191,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(69, 159, 191,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto galeri <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idpgl);
			return false;
		}else{
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto <strong>tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idpgl);
			return false;
		}
	}

	public function hapusgaleri($idgaleri,$idpengundang)
	{
		$foto=$this->db->get_where('galeris',['id_galeri'=>$idgaleri])->row_array();
		unlink(FCPATH . '/assets/img/fotogaleripelanggan/' .$foto['foto_galeri']);
		$this->db->where('id_galeri', $idgaleri);
		$this->db->delete('galeris');

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto galeri <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		redirect('admin/aturundangan/'.$idpengundang);
		return false;
	}

	public function gantibackground()
	{
		$idgantibg=htmlspecialchars($this->input->post('idgantibg',true));
		$cekfoto=$this->db->get_where('pengundang',['id_pengundang'=>$idgantibg])->row_array();

		if($_FILES['fotogantibg']['name']){
			if($_FILES['fotogantibg']['name']==''){
				$fotobg=$cekfoto['background_welcome'];
			}else{
				$configl['upload_path']          = './assets/img/backgroundawal/';
	            $configl['allowed_types']        = 'jpg|png|gif';
	            $configl['max_size']             = 2048;

	            $this->load->library('upload', $configl);

	            if($this->upload->do_upload('fotogantibg')){
	            	if($cekfoto['background_welcome']=='classic.jpg'||$cekfoto['background_welcome']=='rustic.jpg'||$cekfoto['background_welcome']=='tematic.jpg'){}else{
		            	unlink(FCPATH . '/assets/img/backgroundawal/' .$cekfoto['background_welcome']);
		        	}
	            	$fotol=$this->upload->data('file_name');
	            }else{
	            	$errorl = $this->upload->display_errors('','');
	            	if($errorl=='The filetype you are attempting to upload is not allowed.'){
	            		$errorsl=['error'=>'Format file harus JPG,PNG'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong>!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$idgantibg);
						return false;
	            	}else{
	            		$errorsl=['error'=>'Max gambar 2MB'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu besar <strong>MAX 2MB</strong>!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$idgantibg);
						return false;
	            	}
	            }
			}
			
			// update to mobils
			$this->db->set('background_welcome', $fotol);
			$this->db->where('id_pengundang', $idgantibg);
			$this->db->update('pengundang');
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Background <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idgantibg);
			return false;

		}else{
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Foto background <strong>tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idgantibg);
			return false;
		}
	}

	public function defaultbackground($idpengundang)
	{
		$foto=$this->db->get_where('pengundang',['id_pengundang'=>$idpengundang])->row_array();
		if($foto['background_welcome']=='bgdefault.jpg'){}else{
			unlink(FCPATH . '/assets/img/backgroundawal/' .$foto['background_welcome']);
		}
		$bgdefault='bgdefault.jpg';
		$this->db->set('background_welcome', $bgdefault);
		$this->db->where('id_pengundang', $idpengundang);
		$this->db->update('pengundang');

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Background <strong>Berhasil</strong> diganti default!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		redirect('admin/aturundangan/'.$idpengundang);
		return false;
	}

	public function deletepengundang($idpengundang)
	{
		$fotogaleri=$this->db->get_where('galeris',['idpengundang_galeri'=>$idpengundang])->result_array();
		$foto=$this->db->get_where('pengundang',['id_pengundang'=>$idpengundang])->row_array();
		
		if($foto['background_welcome']=='bgdefault.jpg'){}else{
			unlink(FCPATH . '/assets/img/backgroundawal/' .$foto['background_welcome']);
		}
			unlink(FCPATH . '/assets/img/fotopelanggan/' .$foto['foto_pria']);
			unlink(FCPATH . '/assets/img/fotopelanggan/' .$foto['foto_wanita']);
		foreach($fotogaleri as $fg){
			unlink(FCPATH . '/assets/img/fotogaleripelanggan/' .$fg['foto_galeri']);
		}
			unlink(FCPATH . '/assets/img/musikwedding/' .$foto['musik_acara']);

		$this->db->where('idpengundang_galeri', $idpengundang);
		$this->db->delete('galeris');

		$this->db->where('id_pengundang', $idpengundang);
		$this->db->delete('pengundang');

		$this->db->where('matchid_pengundang', $idpengundang);
		$this->db->delete('diundang');

		$this->db->where('urlpengundang_ucapan', $idpengundang);
		$this->db->delete('ucapan');

		$this->db->where('id_p', $idpengundang);
		$this->db->delete('users');

		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Undangan
	              <strong> berhasil </strong> dihapus!
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
		redirect('admin');
		return false;
	}

	public function ajaxeditdiundang()
	{
		// sleep(2);
		$ideditdiundang=htmlspecialchars($this->input->post('ideditdiundang',true));

		$queryundangan="SELECT * from diundang where id_diundang='$ideditdiundang'";
		$datajson=$this->db->query($queryundangan)->row_array();
		echo json_encode($datajson);
		return false;
	}

	public function editdaftardiundang()
	{
		$idepengundang=htmlspecialchars($this->input->post('idepengundang',true));
		$idediundang=htmlspecialchars($this->input->post('idediundang',true));
		$enamaurl=strtolower($this->input->post('enamaurl',true));
		$enamadiundang=$this->input->post('enamadiundang',true);
		$enomerdiundang=htmlspecialchars($this->input->post('enomerdiundang',true));
		$ealamatdiundang=htmlspecialchars($this->input->post('ealamatdiundang',true));

		// $getnamadiundang=$this->db->get_where('diundang',['url_diundang'=>$enamaurl,'matchid_pengundang'=>$idepengundang])->row_array();

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
			redirect('admin/aturundangan/'.$idepengundang);
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
			redirect('admin/aturundangan/'.$idepengundang);
			return false;
	    }else{
	      $enamadiundangbaru = preg_replace('/[^a-zA-Z0-9\&\_\.\,\-]/', ' ', $enamadiundangnull);
	    }

		$this->db->set('url_diundang', $enamaurlbaru);
		$this->db->set('nama_diundang', $enamadiundangbaru);
		$this->db->set('nomer_diundang', $enomerdiundang);
		$this->db->set('alamat_diundang', $ealamatdiundang);
		$this->db->where('id_diundang', $idediundang);
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
		redirect('admin/aturundangan/'.$idepengundang);
		return false;
	}

	public function hapusdaftarundangan($iddiundang,$idundangan)
	{
		$this->db->where('id_diundang', $iddiundang);
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
		redirect('admin/aturundangan/'.$idundangan);
		return false;
	}

	public function hapusucapan($iducapan,$urlpengundang,$urldiundang)
	{
		$this->db->where('id_ucapan', $iducapan);
		$this->db->delete('ucapan');

		$datacek=$this->db->get_where('pengundang',['url_pengundang'=>$urlpengundang])->row_array();
		$tema=$datacek['tema_template'];

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ucapan <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		if($datacek['jenis_acara']=='pernikahan'){
			redirect('wedding/'.$urlpengundang.'/'.$urldiundang);
		}else if($datacek['jenis_acara']=='tunangan'){
			redirect('engagement/'.$urlpengundang.'/'.$urldiundang);
		}
		return false;
	}

	public function hapusucapantampanama($iducapan,$urlpengundang,$urldiundang)
	{
		$this->db->where('id_komen', $iducapan);
		$this->db->delete('komen');

		$this->db->where('id_komenreply', $iducapan);
		$this->db->delete('reply');

		$datacek=$this->db->get_where('pengundang',['url_pengundang'=>$urlpengundang])->row_array();
		$tema=$datacek['tema_template'];

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ucapan <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		if($datacek['jenis_acara']=='pernikahan'){
			redirect('wedding/'.$urlpengundang.'/'.$urldiundang);
		}else if($datacek['jenis_acara']=='tunangan'){
			redirect('engagement/'.$urlpengundang.'/'.$urldiundang);
		}
		return false;
	}

	public function hapusreply($iducapan,$urlpengundang,$urldiundang,$idreply)
	{
		// $this->db->where('id_komen', $iducapan);
		// $this->db->delete('komen');

		$this->db->where('id_reply', $idreply);
		$this->db->delete('reply');

		$datacek=$this->db->get_where('pengundang',['url_pengundang'=>$urlpengundang])->row_array();
		$tema=$datacek['tema_template'];

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:13px;right:13px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Balasan <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		if($datacek['jenis_acara']=='pernikahan'){
			redirect('wedding/'.$urlpengundang.'/'.$urldiundang);
		}else if($datacek['jenis_acara']=='tunangan'){
			redirect('engagement/'.$urlpengundang.'/'.$urldiundang);
		}
		return false;
		return false;
	}

	public function uploadmusik()
	{
		$idpengundang=htmlspecialchars($this->input->post('idpengundang',true));
		$musikwedding=$this->db->get_where('pengundang',['id_pengundang'=>$idpengundang])->row_array();
		if($_FILES){
			if($_FILES['datafilemusiku']['size']==''||$_FILES['datafilemusiku']['size']>7340032){
				echo "File terlalu besar";
				return false;
			}else{
				$configl['upload_path']          = './assets/img/musikwedding/';
	            $configl['allowed_types']        = 'mp3';
	            $configl['max_size']             = 7340;

	            $this->load->library('upload', $configl);

	            if($this->upload->do_upload('datafilemusiku')){
	            	if($musikwedding['musik_acara']==''){}else{
		            	unlink(FCPATH . '/assets/img/musikwedding/' .$musikwedding['musik_acara']);
		        	}
	            	$musik=$this->upload->data('file_name');
	            }else{
	            	$errorl = $this->upload->display_errors('','');
	            	if($errorl=='The filetype you are attempting to upload is not allowed.'){
	            		$errorsl=['error'=>'Format file harus JPG,PNG'];
						echo "Format tidak benar";
						return false;
	            	}else{
	            		$errorsl=['error'=>'Max gambar 7MB'];
						echo "File terlalu besar";
						return false;
	            	}
	            }
			}
			
			// update to mobils
			$this->db->set('musik_acara', $musik);
			$this->db->where('id_pengundang', $idpengundang);
			$this->db->update('pengundang');
			echo "success";
			return false;

		}else{
			echo "musik kosong";
			return false;
		}
	}

	public function hapusmusik($idpengundang)
	{
		$musikwedding=$this->db->get_where('pengundang',['id_pengundang'=>$idpengundang])->row_array();
		unlink(FCPATH . '/assets/img/musikwedding/' .$musikwedding['musik_acara']);

		$this->db->set('musik_acara', '');
		$this->db->where('id_pengundang', $idpengundang);
		$this->db->update('pengundang');
		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(235, 90, 70,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(235, 90, 70,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Musik <strong>Berhasil</strong> dihapus!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		redirect('admin/aturundangan/'.$idpengundang);
		return false;

	}

	public function updateimgsharing()
	{
		$idsharepengundang=htmlspecialchars($this->input->post('idsharepengundang',true));
		$cekfoto=$this->db->get_where('pengundang',['id_pengundang'=>$idsharepengundang])->row_array();

		if($_FILES['fotosharing']['name']){
			if($_FILES['fotosharing']['name']==''){
				$fotobg=$cekfoto['img_sharing'];
			}else{
				$configl['upload_path']          = './assets/img/imgsharing/';
	            $configl['allowed_types']        = 'jpg|png|gif';
	            $configl['max_size']             = 2048;

	            $this->load->library('upload', $configl);

	            if($this->upload->do_upload('fotosharing')){
	            	if($cekfoto['img_sharing']=='defaultsharing.png'){}else{
		            	unlink(FCPATH . '/assets/img/imgsharing/' .$cekfoto['img_sharing']);
		        	}
	            	$fotol=$this->upload->data('file_name');
	            }else{
	            	$errorl = $this->upload->display_errors('','');
	            	if($errorl=='The filetype you are attempting to upload is not allowed.'){
	            		$errorsl=['error'=>'Format file harus JPG,PNG'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Format file harus <strong>JPG|PNG|GIF</strong>!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$idsharepengundang);
						return false;
	            	}else{
	            		$errorsl=['error'=>'Max gambar 2MB'];
	            		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
							  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
							    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
							      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
							      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Ukuran file terlalu besar <strong>MAX 2MB</strong>!</span>
							    </span>
							    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
							  </div>
							</div>');
						redirect('admin/aturundangan/'.$idsharepengundang);
						return false;
	            	}
	            }
			}
			
			// update to mobils
			$this->db->set('img_sharing', $fotol);
			$this->db->where('id_pengundang', $idsharepengundang);
			$this->db->update('pengundang');
			// $idproduk = $this->db->insert_id();
			// notifikasi berhasil
			// $this->session->set_flashdata('newnotiftambah',$idproduk);
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Image sharing <strong>Berhasil</strong> diupdate!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idsharepengundang);
			return false;

		}else{
			$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(245, 178, 34,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
				  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
				    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
				      <div style="font-size:25px;background-color:rgba(255, 191, 41,.7);color:#303030;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
				      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Image sharing <strong>tidak boleh</strong> kosong!</span>
				    </span>
				    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
				  </div>
				</div>');
			redirect('admin/aturundangan/'.$idsharepengundang);
			return false;
		}
	}

	public function defaultimgsharing($idpengundang)
	{
		$foto=$this->db->get_where('pengundang',['id_pengundang'=>$idpengundang])->row_array();
		if($foto['img_sharing']=='defaultsharing.png'){}else{
			unlink(FCPATH . '/assets/img/imgsharing/' .$foto['img_sharing']);
		}
		// $bgdefault=$foto['tema_template'].'.jpg';
		$this->db->set('img_sharing', 'defaultsharing.png');
		$this->db->where('id_pengundang', $idpengundang);
		$this->db->update('pengundang');

		$this->session->set_flashdata('message','<div class="popupnotif" style="position:absolute;top:100px;right:10px;background-color:rgba(83, 219, 79,.9);border-radius:5px;z-index:10;box-shadow:0px 0px 5px rgba(0,0,0,.5);">
			  <div style="display:flex;justify-content:space-between;color:white;padding:3px 7px 3px 7px;align-items:center;">
			    <span style="padding-right:20px;display:flex;justify-content:flex-start;align-items:center;">
			      <div style="font-size:25px;background-color:rgba(83, 219, 79,.7);color:#1c1c1c;border-radius:50%;box-shadow:0px 0px 4px rgba(0,0,0,.8);height:27px;width:27px;display:flex;justify-content:center;align-items:center;padding:0 0px 4px 0;font-weight:bold;">&#8520;</div>
			      <span style="padding-left:5px;color:#1c1c1c;line-height:16px;font-size:15px;">Image sharing <strong>Berhasil</strong> diganti default!</span>
			    </span>
			    <span class="closeout" style="color:#ddd;padding:0 0px 0 6px;border-left:1px solid #ddd;font-size:25px;text-shadow:0px 0px 5px rgba(0,0,0,.6);cursor:pointer;">&#9746;</span>
			  </div>
			</div>');
		redirect('admin/aturundangan/'.$idpengundang);
		return false;
	}

	public function ubahpassword()
	{
		$data['profileuser']=$this->db->get_where('users',['id_user'=>$this->session->userdata('id_user')])->row_array();
		$userid=$this->session->userdata('id_user');
		$passwordlama=htmlspecialchars($this->input->post('passwordlama'));
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
			$this->load->view('admin/password');
		}else{
			if(!password_verify($passwordlama, $matchpassword['password_user'])){
				$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Password lama 
		              <strong>Salah</strong>.
		              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>');
				redirect('admin/ubahpassword');
				return false;
			}else{
				$passwordNew = htmlspecialchars($this->input->post('passwordbaru',true));
				if($passwordNew == $passwordlama){
					$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Password lama 
		              <strong>tidak boleh sama</strong>.
		              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>');
					redirect('admin/ubahpassword');
					return false;
				}else{
					$passwordHash = password_hash($passwordNew, PASSWORD_DEFAULT);
					$this->db->set('password_user', $passwordHash);
					$this->db->where('id_user', $userid);
					$this->db->update('users');
					$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Success password
			              <strong>berhasil</strong> diubah.
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>');
					redirect('admin/ubahpassword');
					// $this->load->view("templates/header",$data);
					// $this->load->view("home/setpassword",$data);
					return false;
				}
			}
		}
	}



}
