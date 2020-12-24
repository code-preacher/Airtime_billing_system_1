<?php
  session_start();
if (isset($_POST['sb'])) {
    include 'connect.php';
	 $t= $_POST['tl'];
    $nm = $_POST['nm'];
    $ps = $_POST['ps'];
	 $em = $_POST['em'];
	  $no = $_POST['no'];
$q=mysqli_query($db,"select mobile from user_no where mobile='$no'");
if(mysqli_num_rows($q)==0){
	echo"<script>
	  alert('Invalid Number, Please Obtain a Valid Number from the nearest Store')
	  window.location='index.html';
	  </script>";
           exit;	
}
else if(mysqli_num_rows($q)>0){	  
    mysqli_query($db,"insert into balance(mobile,bal) values ('$no',0)");
    $q = $db->prepare('insert into user_data (title,name, passkey,mobile,email) values (?, ?, ?, ?, ?)');
    $q->bind_param('sssss',$t,$nm,$ps,$no,$em);
	    if ($q->execute()) {
      $q->close();
      $db->close();
	 	  echo"<script>
	  alert('Your registration was successful')
	  window.location='index.html';
	  </script>";
           exit;
}}
  else {
    header("Location:./");
    exit;
}}
?>