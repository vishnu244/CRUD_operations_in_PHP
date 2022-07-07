<?php  include('crud_op.php'); ?>
<a href = "index.php"> Home Page </a><br><br>
<table border= "1px" cellpadding = "10px" cellspacing = "0px">
    <tr>
        <th> User Name </th>
        <th> Mobile Number </th>
        <th> Email ID </th>
        <th colspan = "2"> Actions </th>
    </tr>
    <?php
    $query = "select * from crud_operations";
    $data = mysqli_query($con,$query);
    $result = mysqli_num_rows($data);

    if ($result){
        while($row = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td>
                    <?php echo $row['username'] ?>
                </td>
                <td>
                    <?php echo $row['mobilenumber'] ?>
                </td>
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <a href = "update.php?id=<?php echo $row['id']; ?>"> EDIT</a>        
                      
                </td>
                <td>
                <a onclick ="return confirm('Are you sure, you want to delete this data')" href = "delete.php?id=<?php echo $row['id']; ?>"> DELETE</a>
                </td>


            </tr>
            <?php
        }
    }
    ?>
</table>