<?php 

require APPPATH . 'libraries/REST_Controller.php';


class Person extends REST_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('person_m');
	}

	public function success_response($ket = '')
	{
		$response['status'] = 200;
		$response['error'] = false;
		$response['note'] = $ket;
		$this->response($response);
	}


	public function fail_response()
	{
		$response['status'] = 200;
		$response['error'] = true;
		$this->response($response);
	}


	public function add_post()
	{
		$name = $this->post('name');
		$address = $this->post('address');
		$phone	 = $this->post('phone');

		if($this->person_m->insert($name,$address,$phone)){
			$this->success_response('Add data sukses');
		}else{
			$this->fail_response();
		}
	}

	public function get_get()
	{

		$data = $this->person_m->get();
		if(count($data) > 0){
			$this->success_response($data);
		}else{
			$this->success_response('data_kosong');
		}

	}

	public function update_put()
	{	
		$id = $this->put('id');
		$name = $this->put('name');
		$address= $this->put('address');
		$phone = $this->put('phone');

		if($this->person_m->update($id,$name,$address,$phone)){
			$this->success_response('Update Sukses');
		}else{
			$this->fail_response();
		}

	}

	public function delete_delete()
	{
		$id = $this->delete('id');
		if($this->person_m->delete($id)){
			$this->success_response($this->person_m->delete($id));
		}else{
			$this->fail_response();
		}
	}

}

	

 ?>