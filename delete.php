<?php  include('crud_op.php'); 
$id = $_GET['id'];
$deletequery = "delete from crud_operations where id='$id'";
$data = mysqli_query($con,$deletequery);

echo "Data Deleted succesfully Click the HomePage button to get back to Home";

?>
<br><br>
<button> <a href = "view.php"> Back</a></button>