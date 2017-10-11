<?php

class User {
	
	function login(){
		$id = $_POST['id'];
		$pin = $_POST['pin'];
		
		$res = [
			'login' => true,
			'info' => $this->getInfo(123)
		];
		json($res);
	}
	
	function logout(){
		
	}
	
	function info(){
		json($this->getInfo(123));
	}
	
	private function getInfo($id){
		$info = [
			'id' => $id,
			'name' => 'John Doe',
			'tel' => '089-123-4567',
			'thumb' => 'http://www.myisproject.com/assets/images/t123'
		];
		return $info;
	}
	
	function changePin(){
		
	}
	
}