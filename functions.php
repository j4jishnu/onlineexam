<!-- class Database
{
  public $conn;
  function __construct(){
    global $conn;
    $this->conn = mysqli_connect("localhost","root","jishnu","exam");
    if(!$this->conn){
      die("Connection failed".$this->conn->connect_error);
    }
    else{
      echo "success";
    }
  }
  function data_insert($table, $insertArray){
    var_dump($insertArray);
  }
}

class MainFunctions extends Database{
  public $result;
  public $data;

  public function __construct(){
    $this->data = $_POST;
  }
  public function __destruct(){
    echo json_encode($this->result);
  }
  public function insertQuestion(){
    print_r($this->data);
    if(!empty($this->data)){
      $sql = "insert into questions (ques_desc, ques_sec_id)
      values ('".$this->data['ques_desc']."', '".$this->data['section']."')";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }else{
      echo "Sorry the data is empty/No input";
    }


  }
}
 -->
<?php
include("connection.php");
function insert($data){
  print_r($data);
  $query = "insert into questions (ques_desc, ques_sec_id)
  values ('".$data['ques_desc']."', '".$data['section']."')";
  $data = mysqli_query($conn, $query);
  if($data){
    echo "Data inserted";
  }else{
    echo "Failed";
  }
}

?>
