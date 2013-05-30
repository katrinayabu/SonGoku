<?php

class Main_model extends CI_Model{
  
	function __construct(){
		parent::__construct();
	}
	
	function get_main_data(){
		$result = array(
			array(
				'Name'=>'Kim',
				'Age'=>'20'
			),
			array(
				'Name'=>'Kat',
				'Age'=>'25'
			),
			array(
				'Name'=>'Honestly',
				'Age'=>'30'
			),
		);
		return $result;
	}
}
