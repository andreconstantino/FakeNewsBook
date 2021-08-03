<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    header("location:javascript://history.go(-1)");
    
  } else {




    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fakeanalyzermock";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT into comentarios2 (username, comentario) values ('gui','$name')";
    
    if ($conn->query($sql) === TRUE) {
      echo "comentario adicionado";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();



    header("location:javascript://history.go(-1)");
    
  }
}

?>