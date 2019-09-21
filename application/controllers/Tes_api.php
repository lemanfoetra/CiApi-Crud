<?php 

// import library dari REST_Controller
require APPPATH . 'libraries/REST_Controller.php';


class Tes_api extends REST_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function get_get(){

		$data = $this->get('data');
		$response['status'] = $data;

		$this->response($response);
	}

	public function put_put(){

		$data = $this->put('data');
		$response['status'] = $data;

		$this->response($response);
	}

	public function post_post(){

		$data = $this->post('data');
		$response['status'] = $data;

		$this->response($response);
	}

	public function delete_delete(){

		$data = $this->delete('data');
		$response['status'] = $data;

		$this->response($response);
	}
}

?>