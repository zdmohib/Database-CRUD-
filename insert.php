<?php
class User {
  // Properties
  public $name;
  public $email;
  public $gender;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

 function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }

 function set_gender($gender) {
    $this->gender = $gender;
  }
  function get_gender() {
   return $this->gender;
  }



}

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

$u = new User();

$u->set_name($_POST["name"]);
$u->set_email($_POST["email"]);
$u->set_gender($_POST["gender"]);


$name= $u->get_name();

$email= $u->get_email();

$gender= $u->get_gender();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (name, email, gender)
VALUES ($name,$email,$gender)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>