<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('pengunjung');
		// echo $pengundang;
	}

	public function krisnadanhilmah($diundang='')
	{
		$pengundang='krisnadanhilmah';
		if($diundang==''){
			redirect('pengunjung');
		}
		$queryurl="SELECT * from pengundang left join diundang on pengundang.id_pengundang=diundang.matchid_pengundang where url_pengundang='$pengundang' and url_diundang='$diundang'";
		$data['detailundangan']=$this->db->query($queryurl)->row_array();
		$datasession=$this->db->query($queryurl)->row_array();

		// var_dump($datasession['id_pengundang']);die;

		$countgaleri="SELECT count(*) as countgaleri from galeris where url_galeri='$pengundang'";
		$data['countgaleri']=$this->db->query($countgaleri)->row_array();

		$data['fotogaleris']=$this->db->get_where('galeris',['url_galeri'=>$pengundang])->result_array();
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
		}else{
			redirect('pengunjung');
		}
	}

	public function ari_dan_ploy($diundang='')
	{
		$pengundang='ari_dan_ploy';
		if($diundang==''){
			redirect('pengunjung');
		}
		$queryurl="SELECT * from pengundang left join diundang on pengundang.id_pengundang=diundang.matchid_pengundang where url_pengundang='$pengundang' and url_diundang='$diundang'";
		$data['detailundangan']=$this->db->query($queryurl)->row_array();
		$datasession=$this->db->query($queryurl)->row_array();

		// var_dump($datasession['id_pengundang']);die;

		$countgaleri="SELECT count(*) as countgaleri from galeris where url_galeri='$pengundang'";
		$data['countgaleri']=$this->db->query($countgaleri)->row_array();

		$data['fotogaleris']=$this->db->get_where('galeris',['url_galeri'=>$pengundang])->result_array();
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
		}else{
			redirect('pengunjung');
		}
	}

	public function ucapan()
	{
		$id_pengundang=$_SESSION['id_pengundang'];
		$id_diundang=$_SESSION['id_diundang'];

		// var_dump($_SESSION['id_pengundang']);die;
		$idupengundang=$this->input->post('idupengundang',true);
		$namaanda=$this->input->post('namaanda',true);
		$isiucapan=$this->input->post('isiucapan',true);
		$absenkehadiran=$this->input->post('absenkehadiran',true);
		$jumlahkehadiran=$this->input->post('jumlahkehadiran',true);

		// var_dump($idupengundang);die;

		$datacek=$this->db->get_where('pengundang',['id_pengundang'=>$id_pengundang])->row_array();
		$datacekdiundang=$this->db->get_where('diundang',['id_diundang'=>$id_diundang])->row_array();
		$tema=$datacek['tema_template'];
		$namapengundang=$datacek['url_pengundang'];
		$namadiundang=$datacekdiundang['url_diundang'];
		if($datacek['paket_acara']=='pakethard'||$datacek['paket_acara']=='paketspesial'){
			
			$this->db->set('absen_diundang', $absenkehadiran);
			$this->db->set('jumlah_kehadiran', $jumlahkehadiran);
			$this->db->where('id_diundang', $id_diundang);
			$this->db->where('matchid_pengundang', $id_pengundang);
			$this->db->update('diundang');

			$data = array(
			        'id_ucapan' => null,
			        'urlpengundang_ucapan' => $id_pengundang,
			        'urldiundang_ucapan' => $id_diundang,
			        'isi_ucapan' => $isiucapan
					);
			$this->db->insert('ucapan', $data);

			$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">Ucapan
		              <strong>Berhasil</strong> ditambahkan!
		              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>');
			redirect('pernikahan/'.$namapengundang.'/'.$namadiundang);
			return false;
		}else{
			redirect('pengunjung');
			return false;
		}
	}



}

?> -->