<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home  extends CI_Model
{
	 public function __construct()
    {
        parent::__construct();
    }

	public function get_highlight()
	    {   
	        $query = $this->db->select('*')
	            ->from('edit_highlight')
	            ->get();
	            return $query->result_array();
	    }
	public function get_sejarah_museum()
	    {   
	        $query = $this->db->select('*')
	            ->from('edit_sejarah_museum')
	            ->get();
	            return $query->result_array();
	    }    

	public function get_subsejarah_museum()
	    {   
	        $query = $this->db->select('*')
	            ->from('edit_subsejarah_museum')
	            ->get();
	            return $query->result_array();
	    }
	public function get_sejarahptt()
	    {   
	        $query = $this->db->select('*')
	            ->from('edit_sejarahptt')
	            ->get();
	            return $query->result_array();
	    }    
    
	public function get_kritik()
	    {   
	        $query = $this->db->select('*')
	            ->from('form_kritik')
	            ->get();
	            return $query->result_array();
	    }

	public function get_narasi()
	    {   
	        $query = $this->db->select('*')
	            ->from('form_narasi')
	            ->get();
	            return $query->result_array();
	    }
	public function get_pengelola_museum()
	    {   
	        $query = $this->db->select('*')
	            ->from('pengelola_museum')
	            ->get();
	            return $query->result_array();
	    }    
    public function get_informasi_museum()
	    {   
	        $query = $this->db->select('*')
	            ->from('informasi_museum')
	            ->get();
	            return $query->result_array();
	    }
    public function get_koleksi_peralatan()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->get();
	            return $query->result_array();
	    }	    
    public function get_koleksi_prangko()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->get();
	            return $query->result_array();
	    }
    public function get_koleksi_sejarah()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_sejarah')
	            ->get();
	            return $query->result_array();
	    }
	public function get_sejarah1()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_sejarah')
	            ->where('jenis', 'Surat Emas')
	            ->get();
	            return $query->result_array();
	    }    
	public function get_sejarah2()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_sejarah')
	            ->where('jenis', 'Cap Kerajaan')
	            ->get();
	            return $query->result_array();
	    } 

    public function get_prangko1()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Gedung PTT')
	            ->get();
	            return $query->result_array();
	    }   
	public function get_prangko2()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Mas Soeharto')
	            ->get();
	            return $query->result_array();
	    }     
	 public function get_prangko3()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Seri Presiden')
	            ->get();
	            return $query->result_array();
	    }     

	 public function get_prangko4()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Flora dan Fauna')
	            ->get();
	            return $query->result_array();
	    }

	 public function get_prangko5()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'PON')
	            ->get();
	            return $query->result_array();
	    }
	    	    
	 public function get_prangko6()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Shio')
	            ->get();
	            return $query->result_array();
	    }  	 
	    
	 public function get_prangko7()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Batik')
	            ->get();
	            return $query->result_array();
	    }     

	 public function get_prangko8()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Pramuka')
	            ->get();
	            return $query->result_array();
	    }    

	 public function get_prangko9()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('jenis', 'Prangko')
	            ->get();
	            return $query->result_array();
	    } 

	  public function get_peralatan1()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->where('jenis', 'Brievenbus')
	            ->get();
	            return $query->result_array();
	    }       

	  public function get_peralatan2()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->where('jenis', 'Bis Surat')
	            ->get();
	            return $query->result_array();
	    }   

	  public function get_peralatan3()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->where('jenis', 'Pakaian Dinas')
	            ->get();
	            return $query->result_array();
	    }      

	  public function get_peralatan4()
	    {   
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->where('jenis', 'Peralatan')
	            ->get();
	            return $query->result_array();
	    }   
	 public function insert_feedback() {
	
     	$data = array (
						'id' => $this->input->post(''),
				        'nama' => $this->input->post('nama'),
						'email'=> $this->input->post('email'),
						'subject'=> $this->input->post('subject'),
						'pesan' =>$this->input->post('message'));
   		 $this->db->insert('form_kritik',$data);
   		 
     } 

     public function get_detail_koleksisejarah()
	    {   
	    	$id = $this->input->post('id');
	        $query = $this->db->select('*')
	            ->from('koleksi_sejarah')
	            ->where('id', $id)
	            ->get();
	            return $query->result_array();
	    }       
	  public function get_detail_koleksiprangko()
	    {   
	    	$id = $this->input->post('id');
	        $query = $this->db->select('*')
	            ->from('koleksi_prangko')
	            ->where('id', $id)
	            ->get();
	            return $query->result_array();
	    }       

   	 public function get_detail_koleksiperalatan()
	    {   
	    	$id = $this->input->post('id');
	        $query = $this->db->select('*')
	            ->from('koleksi_peralatan')
	            ->where('id', $id)
	            ->get();
	            return $query->result_array();
	    }       

      public function insert_reservation() {
	
     	$data = array (
						'id' => $this->input->post(''),
				        'nama' => $this->input->post('nama'),
						'jumlah_pengunjung'=> $this->input->post('jumlah'),
						'tanggal_kunjungan'=> $this->input->post('tanggal'),
						'pembelian_prangko' =>$this->input->post('prangko'),
						'kontak' =>$this->input->post('kontak'));
   		 $this->db->insert('reservasi_kunjungan',$data);
   		 
     }        
}