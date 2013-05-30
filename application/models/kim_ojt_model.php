<?php

class Ojt_model extends CI_Model{
  
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function insert_ojt($ojt){
		$sql = "
			INSERT INTO
				tblojts(
					Firstname,
					Middlename,
					Lastname,
					Nickname,
					Gender,
					Birthdate,
					Civilstatus,
					Citizenship,
					Homeaddress,
					Password,
					Confirmpassword
				)
				VALUES(
					'".$ojt['Firstname']."',
					'".$ojt['Middlename']."',
					'".$ojt['Lastname']."',
					'".$ojt['Nickname']."',
					'".$ojt['Gender']."',
					'".$ojt['Birthdate']."',
					'".$ojt['Civilstatus']."',
					'".$ojt['Citizenship']."',
					'".$ojt['Homeaddress']."',
					'".$ojt['Password']."',
					'".$ojt['Confirmpassword']."'
				)";
		$result = $this->db->query($sql);
		return $result;
		// print_r($ojt);
	}
	
	function update_ojt_details($ojt){
		$sql = "
			UPDATE
				tblojts
				SET
					Firstname = '".$ojt['Firstname']."',
					Middlename = '".$ojt['Middlename']."',
					Lastname = '".$ojt['Lastname']."',
					Nickname = '".$ojt['Nickname']."',
					Gender = '".$ojt['Gender']."',
					Birthdate = '".$ojt['Birthdate']."',
					Civilstatus = '".$ojt['Civilstatus']."',
					Citizenship = '".$ojt['Citizenship']."',
					Homeaddress = '".$ojt['Homeaddress']."',
					Password = '".$ojt['Password']."',
					Confirmpassword = '".$ojt['Confirmpassword']."'
				WHERE
					OJTID = ".$ojt['OJTID'];
		$result = $this->db->query($sql);
		return $result;
		// print_r($ojt);
	}
	
	function get_ojts(){
		$sql = "
			SELECT
				OJTID,
				Firstname,
				Middlename,
				Lastname,
				Nickname,
				Gender,
				Birthdate,
				Civilstatus,
				Citizenship,
				Homeaddress,
				Password,
				Confirmpassword
			FROM
				tblojts
		";
		$result = $this->db->query($sql);
		// echo "Numrows:".$result->num_rows()."<br/>";
		// echo "Result:"; print_r($result);
		if($result->num_rows()){ #0 false null
			return $result->result_array();
		}
		return false;
	}
		
	function get_ojt_by_id($ojt_id){
		$sql = "
			SELECT
				OJTID,
				Firstname,
				Middlename,
				Lastname,
				Nickname,
				Gender,
				Birthdate,
				Civilstatus,
				Citizenship,
				Homeaddress,
				Password,
				Confirmpassword
			FROM
				tblojts
			WHERE
				OJTID = ".$ojt_id;
		$result = $this->db->query($sql);
		if($result->num_rows()){ #0 false null
			$results = $result->result_array();
			return $results[0];
		}
		return false;
	}
	
	function delete_ojt($ojt_id){
		$sql = "
			DELETE FROM
				tblojts
			WHERE
				OJTID = ".$ojt_id;
		$result = $this->db->query($sql);
		return $result;
		// print_r($ojt);
	}
	
}

?>
