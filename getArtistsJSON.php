<?php
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"music");
$result = mysqli_query($connection,"select * from artist");
$rs = array();
$i=0;
while($rs[] = mysqli_fetch_assoc($result)) {
// do nothing ;-)
}
mysqli_close($connection);
unset($rs[count($rs)-1]);  //removes a null value
print("{ \"artists\":" . json_encode($rs) . "}");
?>