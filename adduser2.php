<!DOCTYPE html>
<html>
<head>
	<title>تسجيل البيانات</title>
	<style type="text/css">
		div{
			top: 20px;
			position: relative;
			background: #FAEBD7;
			width: 33%;
			left: 33%;
		}
		input{
			font-size: 28px;
			position: relative;
			width: 66%;
		}
		label{
			font-size: 28px;
			position: relative;
			width: 34%;
		}
	</style>
</head>
<body>
	

<div>
	<center>
	<h1 >ِشركة السهام البترولية ترحب بكم</h1>
	<br>
	<label>اضافة مستخدم جديد</label><br>
	<?php
 
 include ('/connect.php');
error_reporting(0);


	IF($_SERVER['REQUEST_METHOD']=="POST"){
  $myfile = $_FILES['file'];
  ///$name = $_FILES['name'];
	//echo $myfile['name'];
COPY($myfile['tmp_name'],$myfile['file']);
	}

?>

</center> 	

 <form enctype="multipart/form-data" action="fun/adduser.php" method="post" name="changer" >
	<input type="" name="wname" required="required">
	<label>الاسم</label><br>
    
    <input type="" name="emp_no" required="required">
	<label>رقم الاداء<label><br>
	
	<input type="password" name="wpassword" required="required">
	<label>كلمة السر</label><br>
		
	<input type="tel" name="wtele" required="required">
	<label>الهاتف</label><br>
	    
	<select style="width: 75%;font-size: 28px;" name="wcountry">
		<option></option>
		<option value="المركز الرئيسي">المركز الرئيسي</option>
		<option value="الاردن">الاردن</option>
		<option value="السعودية">مالسعودية</option>
	</select>
	<label style="width: 25%;">المنطقة</label><br>
	
	<br><br>
<input name="MAX_FILE_SIZE"  type="hidden">
<input name="image" accept="image/jpeg"   type="file" required="required">
	<br><br>
		<br><br>

	<input style="width: 100%;"  type="submit" name="">
</form>
<br>

	<?php
	session_start();
  $emp_no=($_SESSION['emp_no']);
  $nat=($_SESSION['nat']);

$q1=$_GET['q1'];
if ($q1 == 1) {
	

		
	 $id=$_POST['nat'];
     
 	echo "اسم المستخدم مسجل مسبقا";


$sql="SELECT emp_no,name,task  FROM employees WHERE emp_no=$emp_no ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>emp_no</th><th>Name</th><th>task</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["emp_no"]. "</td><td>" . $row["name"]. "</td><td>" . $row["task"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

  
}

	?>


	</center>
</div>
</body>
</html>