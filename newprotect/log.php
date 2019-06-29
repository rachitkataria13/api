<?php
ob_start();
include'config.php';

$sql="SELECT number,ip,logging FROM $tbl_nameip WHERE tvab='true' ORDER BY id DESC";
#$result=mysqli_query($conn,);
$result=mysqli_query($conn,$sql);
// mysqli_num_row is counting table row
$rowcount=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($rowcount) {
	while($row = mysqli_fetch_assoc($result)) { 
			$data='<p><a href="https://www.whois.com/whois/' . $row["ip"] . '">' . $row["ip"] . '</a>' . " Number: " . '<a href="tel:+91' . $row["number"] . '">' . $row["number"] . '</a>' . " Date / Time : " . $row["logging"] . "</p>\n";

			echo $data;
		}
}
ob_end_flush();
?>    