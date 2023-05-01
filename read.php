<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
    <div class="container">
        <button><a href="./signup.html">Add Users</a></button>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                   $sql = "SELECT * FROM `Users`";
                   $result = mysqli_query($conn, $sql);

                   if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $Id = $row['Id'];
                        $First_name = $row['Fname'];
                        $Last_name = $row['Lname'];
                        $Email= $row['Email'];
                        $Password = $row['Password'];
                        $Gender = $row['Gender'];
                        echo '
                      <tr>
                        <td>'.$Id.'</td>
                        <td>'.$First_name.'</td>
                        <td>'.$Last_name.'</td>
                        <td>'.$Email.'</td>
                        <td>'.$Password.'</td>
                        <td>'.$Gender.'</td>
                        <td>
                           <button><a href="update.php?updateid='.$Id.'">Update</a></button>
                           <button><a href="delete.php?deleteid='.$Id.'">Delete</a></button>
                        </td>
                      </tr>';
                          
                    } 
                   }
                ?>
                
            </tbody>
           
        </table>
    </div>
</body>
</html>