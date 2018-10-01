<!DOCTYPE html>
<?php 
require("connect.php");
?>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("table").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("table").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getdetails.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="" selected disabled hidden>Select a person:</option>
<?php 
 $res=$conn->query("SELECT name FROM details");
 while($r=$res->fetch_assoc())
 {
	 ?>
<option value="<?php echo $r['name'];?>"><?php echo $r['name'];?></option>
<?php
 }
 ?>
</select>
</form>
<br>
<div id="table"><b>Person info will be listed here.</b></div>

</body>
</html>