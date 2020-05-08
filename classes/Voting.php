<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
?>
<?php
class Employee{
	private $db;
  private $fm;
  
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getCandidates(){
		$query = "SELECT * FROM candidates";
		$result = $this->db->select($query);
		return $result;
  }

	public function getVoteCount(){
    $query = "SELECT candidates.can_id,name,IFNULL(present.count_v,0) AS votes
		FROM (SELECT can_id,name FROM candidates) AS candidates
		LEFT JOIN (SELECT can_id, COUNT(uname) AS count_v FROM votes GROUP BY can_id) AS present
		ON candidates.can_id=present.can_id";
		$result = $this->db->select($query);
		return $result;
  }

}