<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signup.css">
</head>
<body>
    <h2>Update</h2>

    <?php
    include 'connection.php';
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM Users WHERE Id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <form action="update.php?updateid=<?php echo $id ?>" method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            
           <label> First name:</label>
            <input type="text" name="firstname" value="<?php echo $row['Fname'] ?>" placeholder="Enter your firstname"><br>
    
           <label>Last name:</label> 
            <input type="text" name="lastname" value="<?php echo $row['Lname'] ?>" placeholder="Enter your lastname"><br>
    
           <label>Email:</label> 
            <input type="text" name="email" value="<?php echo $row['Email'] ?>" placeholder="Your Email"><br>
    
           <label>Password:</label> 
            <input type="password" name="password" value="<?php echo $row['Password'] ?>" placeholder="Password"><br>
    
           <label> Gender:</label>
            <input type="radio" name="gender" value="Male" <?php if($row['Gender'] == 'Male') echo 'checked' ?>>Male
            <input type="radio" name="gender" value="Female" <?php if($row['Gender'] == 'Female') echo 'checked' ?>>female<br>
    
            <input type="submit" name="submit" value="Update">
        </fieldset>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "UPDATE Users SET Fname='$first_name', Lname='$last_name', Email='$email', Password='$password', Gender='$gender' WHERE Id=$id";
        $result = $conn->query($sql);

        if($result){
            header('location: read.php');
        } else {
            echo "Data not updated!";
        }

        $conn->close();
    }
    ?>
</body>
