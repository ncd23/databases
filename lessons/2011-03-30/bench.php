<?
// This benchmarking class was cribbed from here: http://bit.ly/gF7L6F

// define 'MySQL' class
class MySQL{
	private $conId;
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'br00klyn';
	private $database = 'loffelmr';
	private $result;
	const OPTIONS=4;

	public function __construct($options=array()){
		if(count($options)!=self::OPTIONS){
			throw new Exception('Invalid number of connection parameters');
		}
		foreach($options as $parameter=>$value){
			if(!$value){
				throw new Exception('Invalid parameter '.$parameter);
			}
			// below is usage of variable variable as well as complex curly brace syntax
			// see http://bit.ly/hNf5CU and http://bit.ly/fcJa5Z for info
			$this->{$parameter}=$value;
		}
		$this->connectDB();
	}

	// connect to MySQL
	private function connectDB(){
		if(!$this->conId=mysql_connect($this->host,$this->user,$this->password)){
			throw new Exception('Error connecting to the server');
		}
		if(!mysql_select_db($this->database,$this->conId)){
			throw new Exception('Error selecting database');
		}
	}

	// run query
	public function query($query){
		if(!$this->result=mysql_query($query,$this->conId)){
			throw new Exception('Error performing query '.$query);
		}
		return new Result($this,$this->result);
	}
}

// define 'Result' class
class Result {
	private $mysql;
	private $result;

	public function __construct($mysql,$result){
		$this->mysql=$mysql;
		$this->result=$result;
	}

	// fetch row
	public function fetchRow(){
		return mysql_fetch_assoc($this->result);
	}

	// count rows
	public function countRows(){
		if(!$rows=mysql_num_rows($this->result)){
			throw new Exception('Error counting rows');
		}
		return $rows;
	}

	// count affected rows
	public function countAffectedRows(){
		if(!$rows=mysql_affected_rows($this->mysql->conId)){
			throw new Exception('Error counting affected rows');
		}
		return $rows;
	}

	// get ID from last-inserted row
	public function getInsertID(){
		if(!$id=mysql_insert_id($this->mysql->conId)){
			throw new Exception('Error getting ID');
		}
		return $id;
	}

	// seek row
	public function seekRow($row=0){
		if(!is_int($row)||$row<0){
			throw new Exception('Invalid result set offset');
		}
		if(!mysql_data_seek($this->result,$row)){
			throw new Exception('Error seeking data');
		}
	}
}

// define 'Timer' class
class Timer{
	private $elapsedTime;
	// start timer
	public function start(){
		if(!$this->elapsedTime=$this->getMicrotime()){
			throw new Exception('Error obtaining start time!');
		}
	}

	// stop timer
	public function stop(){
		if(!$this->elapsedTime=round($this->getMicrotime()-$this->elapsedTime,5)){
			throw new Exception('Error obtaining stop time!');
		}
		return $this->elapsedTime;
	}

	//define private 'getMicrotime()' method
	private function getMicrotime(){
		list($useg,$seg)=explode(' ',microtime());
		return ((float)$useg+(float)$seg);
	}
}
