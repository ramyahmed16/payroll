 <!DOCTYPE html>
<html dir="rtl">
<head>
	 <?php
  include ('connect.php');
  error_reporting(0);
  session_start();
  $emp_no=($_SESSION['emp_no']);
  $nat=($_SESSION['nat']);
  ?>
	<center>

	<title>salary</title>
<style   >
		body {	background: 			#F5F5DC	;
		}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-color :  #000080;
font-family: monospace;*/
font-size: 45px;
font: italic bold 12px/30px Georgia, arial;
text-align: center;
}
th {
background-color: #588c7e;
color:  #000080;
font-size: 22px;
}
 th, td {
    border: 1px solid #1565c0;
    padding: 2px;
    font-size: 20px;
  }
tr:nth-child(even) 
{background-color: #f2f2f2 column-width: 700px;

}
div {
  column-width:500px;

}
.t1 {
  column-width: 60px;
}

</style>

</head>
 <?php
  include ('connect.php');
  error_reporting(0);
  session_start();
  $emp_no=($_SESSION['emp_no']);
  $nat=($_SESSION['nat']);
  ?>
<body>
<label> الادارة العامة للشئون المالية ترحب بكم<label><br>
<label> البيانات المالية <label><br>
		<button >
	<a  href="logontxt.php" target="_blank">العودة</a>
</button>
	<?php
	 $id=$_POST['id'];
     
 

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
?>
  
 ---------------------------------------------------
 
 	<?php
	 $id=$_POST['id'];
     
     $mnth=$_POST['mnth'];
     $year=$_POST['year'];
    $code=$_POST['code'];
    
  include ('connect.php');
  error_reporting(0);
  session_start();
  $emp_no=($_SESSION['emp_no']);
  $nat=($_SESSION['nat']);
$sql="SELECT  emp_no,all_code,all_val,rased,year ,mnth ,all_desc FROM all_code  where mnth='$mnth' and year='$year' and code='$code' and emp_no =$emp_no order by n,all_code ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo //"<table><tr><th>emp_no</th><th>Name</th><th>task</th></tr>";
    "<table >
<tr>
 <th>رقم الكود</th>
 <th>البيان</th>
<th>القيمة</th>
<th>وعاء/رصيد</th>";



    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<tr><td>" . $row["emp_no"]. "</td><td>" . $row["name"]. "</td><td>" . $row["task"]. "</td></tr>";
echo "<tr>
    <td>".$employee['all_code']."</td>
    <td>".$employee['all_desc']."</td>
    <td>".$employee['all_val']."</td>
    <td>".$employee['rased']."</td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>








</body>
</html>