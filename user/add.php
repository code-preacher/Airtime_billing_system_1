<?php
  session_start();
if (isset($_POST['lb'])) {
    include './include/mysqldb.php';
	$ct = $_POST['ct'];
	$ctn = $_POST['ctn'];
	$du=$_POST['du'];
	$dt=date("d-m-y @ g:i A");

	 $a=$_SESSION['user'];
  $q=mysqli_query($db,"select title,name,passkey,mobile,email  from user_data where email='$a'");
 $qw=mysqli_fetch_assoc($q);
 $qt=$qw['mobile'];
 
  $qx=mysqli_query($db,"select * from balance where mobile='$qt'");
 $qp=mysqli_fetch_assoc($qx);
 $xp=$qp['bal'];

  $rx=mysqli_query($db,"select * from user_no where mobile='$qt'");
 $rp=mysqli_fetch_assoc($rx);
 $rl=$rp['plan'];
  
 $cs=$du * 0.5;
 $cq=$du * 0.7;
  $cl=$du * 0.8;
 
$fbal=$xp-$cs;
$fbal2=$xp-$cq;
$fbal3=$xp-$cl;


 if($rl=='Easy Starter'){
mysqli_query($db,"update balance set bal='$fbal' where mobile='$qt'");	 
 mysqli_query($db,"insert into history (mobile,contact,contactno,duration,charge,ibalance,cbalance,date) values ('$qt','$ct','$ctn','$du','$cs','$xp','$fbal','$dt')");

	 	  echo"<script>
	  alert('$ct is recieving call from you')
	  window.location='r.php';
	  </script>";
           exit;
  
 }
 else if($rl=='Easy Cliq'){
	 mysqli_query($db,"update balance set bal='$fbal2' where mobile='$qt'");	 
mysqli_query($db,"insert into history (mobile,contact,contactno,duration,charge,ibalance,cbalance,date) values ('$qt','$ct','$ctn','$du','$cq','$xp','$fbal2','$dt')");
	 	
		echo"<script>
	  alert('$ct is recieving call from you')
	  window.location='r.php';
	  </script>";
           exit;
 
 }
 else if($rl=='Easy Life'){
	 mysqli_query($db,"update balance set bal='$fbal3' where mobile='$qt'");	 
	mysqli_query($db,"insert into history (mobile,contact,contactno,duration,charge,ibalance,cbalance,date) values ('$qt','$ct','$ctn','$du','$cl','$xp','$fbal3','$dt')");
	 	
		 echo"<script>
	  alert('$ct is recieving call from you')
	  window.location='r.php';
	  </script>";
           exit;
 
 }
  else {
    header("Location:./");
    exit;
}}
?>