<?php
require_once 'config/connect.php';

//connecting
$conn = "";
  
try {

    $servername = $host;
    $dbname = $databasename;
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=$dbname",
        $username,
        $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
//validating
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                $_SESSION['logged_user'] = $user;
                header("location: admin.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            header("location: login.php");
            die();
        }
    }
}
 
?>