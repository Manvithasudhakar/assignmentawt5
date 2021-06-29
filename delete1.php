<?php
include "dbcon.php";
$pno=$_GET['pno'];
$query="DELETE FROM passport WHERE pno='$pno'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "<br> Deleted the record successfully";
    }
    else
    {
        echo " could not able to Deleted the record";
    }
    echo "<a href='click.php'>Home</a>";
?>