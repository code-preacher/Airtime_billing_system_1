<?php 
 include './include/mysqldb.php';
if (isset($_POST['lb'])){
$pn=$_POST['pn'];	
$qn=$_POST['qty'];
$pr=$_POST['pr'];

	
mysqli_query($db,"insert into product(name,qty,price) values('$pn','$qn','$pr')");		
}
echo"<script>
alert('Data sucessfully added')
window.location='addpdt.php';
</script>";
?>