<?php 
 include './include/mysqldb.php';
if (isset($_POST['lb'])){
$pn=$_POST['pn'];	
$qn=$_POST['qty'];
$pr=$_POST['pr'];

	
mysqli_query($db,"insert into product(name,qty,price) values('$pn','$qn','$pr')");		

echo"<script>
alert('Data sucessfully added')
window.location='addpdt.php';
</script>";}
if (isset($_POST['ub'])){
	 include './include/mysqldb.php';
$pn=$_POST['pn'];	
$qn=$_POST['qty'];
$pr=$_POST['pr'];

$k=mysqli_query($db,"select * from product where name='$pn'");	
$tp=mysqli_fetch_array($k);
$tl=$tp['qty'];
$pd=$tp['price'];
$t=$qn+$tl;
$pt=$pr+$pd;
	
mysqli_query($db,"update product set qty='$t',price='$pt' where name='$pn'");		

echo"<script>
alert('Data sucessfully Updated')
window.location='addpdt.php';
</script>";}
?>