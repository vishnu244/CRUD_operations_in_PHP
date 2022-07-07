<?php  include('crud_op.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>  CRUD Operations</title>
</head>
<body>
    
    <form action = "" method = "POST">
        <input type = "text" Name="username" placeholder = "UserName"> <br><br>

        <input type = "number" Name="mobilenumber" placeholder = "Mobile Number"> <br><br>

        <input type = "text" Name="email" placeholder = "Email"> <br><br>

        <input type = "submit" Name = "Save" value = "Save">
        <button> <a href = "view.php"> View</a></button>

    </form>
    <?php
    if (isset($_POST['Save'])){
        $Username = $_POST['username'];
        $Mobilenumber = $_POST['mobilenumber'];
        $email = $_POST['email'];

        $query = "insert into crud_operations(username,mobilenumber,email) values('$Username','$Mobilenumber','$email')";

        $data = mysqli_query($con,$query);
    }
    
    ?>
</body>
</html>