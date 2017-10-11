<?php

class Parcel {
	
	function info($parcel_id){
		
		//$db = Database::create();
		//$res = $db->read("select * from Parcels where id = $parcel_id");
		
		$status = ['unknown', 'inshelf'];
		
		$info = [
			'id' => $parcel_id,
			'name' => 'demo parcel 100',
			'customer_id' => 1,
			'status' => $status[rand(0,1)],
		];
		
		json($info);
	}
	
	function shelf($parcel_id){
		$sh = ['A1', 'A2', 'A3', 'B1', 'B2'];
		$info = [
			'code' => $sh[rand(0,4)]
		];
		
		json($info);
	}
	
}