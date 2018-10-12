<?php
include_once("connection.php");
$sdname=$_GET["sdname"];
$sddob=$_GET["sddob"];
$sdmail=$_GET["sdmail"];
$sdmobilew=$_GET["sdmobilew"];
$sdmobilec=$_GET["sdmobilec"];
$sderno=$_GET["sderno"];
$hood=$_GET["hood"];
$size=$_GET["size"];
$rtp=$_GET["rtp"];
$fee=$_GET["fee"];
        $query="insert into student_data values('$sdname','$sddob','$sdmail','$sdmobilew','$sdmobilec','$sderno','$hood','$size','$rtp','$fee')";
            mysqli_query($dbcon,$query);
            if(mysqli_error($dbcon)=="")
                echo "Data Submitted Successfully!";
            else
            echo "Data Not Submiited.Please Fill All the fields Correctly or contact us!";

?>
