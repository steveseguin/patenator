<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
if (!empty($_POST['openidea'])){
	$openidea = check_input($_POST['openidea']);
}
else {$openidea=null;}

if (!empty($_GET['q'])){
	$id = check_input($_GET['q']);
	$id = intval($id);
}
else { $id = null; }

if ((!$id) && (!empty($_GET)))
 {
 $id = intval(base_convert(check_input(key($_GET)), 36, 10));
 }

$con = mysql_connect("localhost","root","bitnami");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("patenator", $con);

if ( (strlen($_POST['openidea']) > 10) && (strlen($_POST['openidea']) < 121))
  {
   $Tod = strval(date('D M j Y, G:i:s'));
   $result = mysql_query("SELECT id FROM idea WHERE openidea = '$openidea'");
   $row = mysql_fetch_array($result);
   if ($row['id']){
	$tid = base_convert($row['id'], 10, 36);
        mysql_close($con);
	header("Location: ../?".$tid);
        die();
	}
   else {
        mysql_query("INSERT INTO idea (openidea, dateasked) VALUES ('$openidea', '$Tod')");
        $result = mysql_query("SELECT id FROM idea WHERE openidea = '$openidea'");
        $row = mysql_fetch_array($result);
	$tid = base_convert($row['id'], 10, 36);
	mysql_close($con);
        header("Location: ../?".$tid);
	die();
	}
}

if (!empty($_POST['replybox'])){
	$reply = check_input($_POST['replybox']);
}
else {$reply = null;}

if ( (strlen($reply) > 1) && (strlen($_POST['replybox']) < 121)  && ($id))
 {
   $Tod = strval(date('D M j Y, G:i:s'));
   mysql_query("INSERT INTO replies (openideaid, reply, date) VALUES ('$id','$reply','$Tod')");

   $resultx = mysql_query("SELECT answer FROM idea WHERE id = '$id' ");
   $rowx = mysql_fetch_array($resultx);

  // if (!$rowx['answer']){mysql_query("UPDATE idea SET dateanswered = '$Tod' WHERE id ='$id'");}
     mysql_query("UPDATE idea SET dateanswered = '$Tod' WHERE id ='$id'");
     mysql_query("UPDATE idea SET total = total + 1 WHERE id ='$id'");


   $tid = base_convert($id, 10, 36);
   mysql_close($con);
   header("Location: ../?".$tid);
   die();
}
else { echo " Invalid Submission Attempt ".strlen($reply)." ".$id; }

mysql_close($con);
die();

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //$data = htmlentities($data);strlen($reply)
    $data = mysql_real_escape_string($data);
 return $data;
}

?>
