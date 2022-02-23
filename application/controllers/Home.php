<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// panggil model
		$this->load->model('model_home');
		// panggil helper url
		$this->load->helper(array('url'));
		// panggil helper format tanggal indonesia
		$this->load->helper('tgl_indo');
		// jika tidka login
	}

	public function home()
	{

		$data['query'] = $this->model_home->get_highlight();
		$data['query2'] = $this->model_home->get_sejarah_museum();
		$data['query3'] = $this->model_home->get_subsejarah_museum();
		$data['query4'] = $this->model_home->get_sejarahptt();
		$data['query5'] = $this->model_home->get_koleksi_sejarah();
		$data['query6'] = $this->model_home->get_koleksi_prangko();
		$data['query7'] = $this->model_home->get_koleksi_peralatan();
		$data['query8'] = $this->model_home->get_pengelola_museum();
		$data['query9'] = $this->model_home->get_informasi_museum();
		$data['query10'] = $this->model_home->get_sejarah1();
		$data['query11'] = $this->model_home->get_sejarah2();
		$data['query12'] = $this->model_home->get_prangko1();
		$data['query13'] = $this->model_home->get_prangko2();
		$data['query14'] = $this->model_home->get_prangko3();
		$data['query15'] = $this->model_home->get_prangko4();
		$data['query16'] = $this->model_home->get_prangko5();
		$data['query17'] = $this->model_home->get_prangko6();
		$data['query18'] = $this->model_home->get_prangko7();
		$data['query19'] = $this->model_home->get_prangko8();
		$data['query24'] = $this->model_home->get_prangko9();
		$data['query20'] = $this->model_home->get_peralatan1();
		$data['query21'] = $this->model_home->get_peralatan2();
		$data['query22'] = $this->model_home->get_peralatan3();
		$data['query23'] = $this->model_home->get_peralatan4();
		// memanggil halaman view 	
		$this->load->view('modul-user/header', $data);
		$this->load->view('modul-user/index', $data);
		$this->load->view('modul-user/footer');
	}
	public function feedback()
	{
		$data['query'] = $this->model_home->insert_feedback();
		if(isset($data)){
			 echo "<script>alert('Kritik dan Saran berhasil diinput.');window.location.href='home'</script>";
		}else{
			 echo "<script>alert('Kritik dan Saran gagal diinput!');window.location.href='home'</script>";
		}
	}
	public function koleksisejarah()
	{
		$data['query'] = $this->model_home->get_detail_koleksisejarah();
	 $this->load->view('modul-user/koleksisejarah', $data);	
	}
	public function koleksiprangko()
	{
		$data['query'] = $this->model_home->get_detail_koleksiprangko();
	 $this->load->view('modul-user/koleksiprangko', $data);	
	}
	public function koleksiperalatan()
	{
		$data['query'] = $this->model_home->get_detail_koleksiperalatan();
	 $this->load->view('modul-user/koleksiperalatan', $data);	
	}
	public function reservasi()
	{
		$this->load->view('modul-user/reservasi-tiket');

	}
	public function reservation()
	{
	$data['query'] = $this->model_home->insert_reservation();
		if(isset($data)){
			 echo "<script>alert('Reservasi berhasil diinput.');window.location.href='home'</script>";
		}else{
			 echo "<script>alert('Reservasi gagal diinput!');window.location.href='home'</script>";
		}
	}
}
