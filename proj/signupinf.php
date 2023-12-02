<?php
 include 'db.php';
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
 } else {
    header("Location ./register.php");
 };



 $query = "INSERT INTO accs (username, fname, lname, password1, password2) 
 VALUES ('$uname', '$fname', '$lname', '$pwd1', '$pwd2');"; 

// $stmt = $conn->prepare("SELECT username FROM accs WHERE username = ?");
// $stmt->bind_param("s", $uname);
// $stmt->execute();
// $stmt->store_result();

// if ($stmt->num_rows > 0) {
//     $message = "Username already exists. Please choose a different username.";
// } else {
//     $message = "Username is available!";
// }

 mysqli_query($conn, $query);

 header("Location: signup-success.html");