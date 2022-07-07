<?php  include('crud_op.php'); 
$id = $_GET['id'];
$query = "select * from crud_operations where id='$id'";
$data = mysqli_query($con,$query);
$row = mysqli_fetch_array($data);

?>

<form action = "" method = "POST">
        <input type = "text" Name="username" placeholder = "UserName" value ="<?php echo $row ['username']?>" > <br><br>

        <input type = "number" Name="mobilenumber" placeholder = "Mobile Number" value ="<?php echo $row ['mobilenumber']?>"> <br><br>

        <input type = "text" Name="email" placeholder = "Email" value ="<?php echo $row ['email']?>"> <br><br>

        <input type = "submit" Name = "Update" value = "Update">
        <button> <a href = "view.php"> Back</a></button>

    </form>

<?php
if (isset($_POST['Update'])){
    $Username = $_POST['username'];
    $Mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $Updatequery = "update crud_operations set username = '$Username',mobilenumber='$Mobilenumber',email='$email' where id='$id'";

    $data = mysqli_query($con,$Updatequery);
}


?>