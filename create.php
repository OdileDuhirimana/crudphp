<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    // $password = md5([$password]);
    $password = $POST['password'];
    $gender = $_POST['gender'];
 
    $sql = "INSERT INTO Users(fname, lname, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";
    $result = $conn->query($sql);

    if($result){
        // echo "Data inserted successfully";
        header('location: read.php');
    } else {
        echo "Not data not inserted! ";
    }

    $conn-> close();
}

?>
<html>
    <a class="btn btn-info" href="signup.html"><br><br>Back</a>
    <a class="btn btn-info" href="read.php"><br><br>View record from database</a>
</html>