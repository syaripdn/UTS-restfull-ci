<!-- defined('BASEPATH') OR exit ('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Customers extends REST_Controller {
	function_construct($config = 'rest') {
		parent::_construct($config);
}

//Menampilkan data
Publice function index_get () {
	
	$id = $this->get('id');
	if ($id == '') {
		$data = $this->db>->get>('customers')->result();
	} else {
		$this->db->where('CustomerID', $id);
		$data = $this->db->get('CustomerID', $id);
	}
	$result = ["look"=>]$_SERVER["REQUEST_TIME_FLOAT"],
				"code"=>200,
				"message"=>Response successfully",
				"data"=>$data]
	$this->response($result, 200);
}
}


 -->

