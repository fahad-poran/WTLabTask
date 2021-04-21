<?php 

public function fetch_std(){

$data = [];

$sql = "SELECT DISTINCT `specialization` FROM `doctors`";

$result = $this->connection->query($sql);

if($result){
	while($row = $result->fetch_assoc()){
		$data[] = $row;
	}
}
return $data;
	
}


 ?>