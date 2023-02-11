<?php
 
class DB_Connect {
  public  $con1;
    // constructor
    function __construct() {
	 $this->connect();
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    // Connecting to database
    public function connect() {

        // connecting to mysql
        $con = mysqli_connect("111.118.212.86:3306", "smnindv9_sagy","Sagy@12345") or die("Connection Failed!");
        // selecting database
        mysqli_select_db($con,"smnindv9_sagy");
		$this->con1=$con;
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    public function insert($query) {
//        $query1=str_replace('','',mysql_real_escape_string($query));

		$res=mysqli_query($this->con1,$query);
		return $res;
    }
	 public function insert_id($query) {
//        $query1=str_replace('','',mysql_real_escape_string($query));

//		$res=mysqli_query($query,$this->con1);
		$id=mysqli_insert_id();
		return $id;
    }
	 public function update_id($query) {
//        $query1=str_replace('','',mysql_real_escape_string($query));

//		$res=mysqli_query($query,$this->con1);
		$id=mysqli_insert_id();
		return $id;
    }
	 public function update($query) {
//        $query1=str_replace('','',mysql_real_escape_string($query));

		$res=mysqli_query($this->con1,$query);
		return $res;
    }
	
	 public function delete($query) {
//        $query1=str_replace('','',mysql_real_escape_string($query));

		$res=mysqli_query($this->con1,$query);
		return $res;
    }
	
	 public function select($query) {
//        $query1=str_replace('','',mysqli_fetch_array($query,$this->con1));

		$res=mysqli_query($this->con1,$query);
		return $res;
    }
	

} 
?>