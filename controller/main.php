<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function coba_cari_hotel(){
		$data['kota']=$this->db->get('module_kota')->result();
		$this->load->view('main',$data);
	}
	function cari_hotel_form_req(){
		$arr_bintang=$this->input->post('arr_bintang');
		$id_kota=$this->input->post('id_kota');
		print_r($arr_bintang);echo " <br>kota= ";
		print_r($id_kota);
		echo "jmlbintang= ".count($arr_bintang);
		// exit();
				$this->db->where('lokasi',$id_kota);
					// perulangan where untuk bintang
					if (!empty($arr_bintang)) {
						$this->db->where_in('star',$arr_bintang);
					}
				$sql_hotel=$this->db->get('module_hotel');
		// $data=$this->db->get('module_hotell')->result_array();

				if($sql_hotel->num_rows()>0){
					foreach ($sql_hotel->result_array() as $row) {
						// echo "<br><br><br><br>".$row['nama_hotel'];exit();
						$result[$row['id']]=ucwords(strtolower($row['nama_hotel']));
					}
				}else{
					$result['-'] = 'Belum ada hotel terkait';
				}

				$data['hotel']=$result;
				$this->load->view('dropdown_kota_request',$data);
	}
	
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */