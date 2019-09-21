<?php 

class Person_m extends CI_Model{

	
	public function insert($name,$address,$phone)
	{
		$sql = "INSERT INTO tb_person (name, address, phone)
				VALUES 	('$name','$address','$phone')
		";
		if($this->db->query($sql))
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function get(){
		$sql = "
				SELECT * 
				FROM tb_person
				WHERE 1
		";
		return $this->db->query($sql)->result();
	}


	public function update($id = '', $name, $address, $phone)
	{
		
			$sql = "
				UPDATE tb_person SET name = '$name', address = '$address', phone = '$phone'
				WHERE tb_person.id = '$id' 
			";
			if($this->db->query($sql)){
				return TRUE;
			}else{
				return FALSE;
			}
	}

	public function delete($id = '')
	{
		$sql = "
			DELETE FROM tb_person
			WHERE id = '$id'
		";
		if($this->db->query($sql)){
			return 1;
		}else{
			return 0;
		}
	}


}

 ?>