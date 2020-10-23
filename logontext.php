<?php 
//include ('../connect.php');
// $num=$_GET['id'];
//$n1=$_GET['n1'];
//$n2=$_GET['n2'];
// $w_tel_num=$_GET['w_tel_num'];
// $w_unt_num=$_GET['w_unt_num'];
 
  include ('../connect.php');
  $n1=$_GET['n1'];
$n2=$_GET['n2'];
  error_reporting(0);
  session_start();
  $emp_no=($_SESSION['emp_no']);
 $nat=($_SESSION['nat']);
  $sql="SELECT * FROM  employees WHERE emp_no='$n1' AND nat='$n2' ";
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()){
  $count = $result->num_rows;
}
 if ($count>0) {
 	 session_start();
 	 $_SESSION['emp_no'] = $n1 ;
 	 $_SESSION['nat'] = $n2 ;
 	header('location:http://localhost/102020/index1.php') ;
 
			 
  }

	else {
		
		header('location:http://localhost/102020/adduser.php?q1=0');
 }
// 
 ?>