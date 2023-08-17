<?php 
/*
 ATTENDANCE DEPENDENCIES
*/
// require_once('../../rep/sql.php');
// require_once('../../rep/lib/attendance/attendance.php');

/*
	COUNT ATTENDANCE
*/
// // 0. GET TOOL META-INFORMATION
// $tmp = explode('/',$_SERVER['REQUEST_URI']);
// $cmd = "SELECT * FROM tools WHERE name_dir LIKE '".$tmp[count($tmp)-2]."'";
// $res = $sqlWebtoolsMeta -> query($cmd);
// $my_name = 'Unknown tool';
// if($res != false && $res->num_rows > 0){
// 	$row = $res->fetch_assoc();
// 	$my_name = $row['name'];
// }
// // NEW ATTENDANCE COUNT INSTANCE
// $n = new attencance($my_name);
// $n->count();


  include('tpl/head.php');
  include('tpl/main.php');
  include('tpl/foot.php');

?>