<?php
if ( strstr(key($_GET),"http:/") )
{echo "<img src='http://api.qrserver.com/v1/create-qr-code/?data=".key($_GET)."&size=250x250'/>";die();}
?>

<html>
<head>
<title>Patenator - Share an idea, Terminate a patent</title>
<meta name="description" content="Submit an idea now to undermine a future patent" />
<meta name="keywords" content="question, patent, prior art, ideas, answer, reply, yes, no, twitter, annoymous, short, discussion, replies, quick, solution, problem" />
<link rel="icon" type="image/ico" href="../patenator/favicon.ico">
<style>

	.outer {  display:inline-block;
	padding: 20px;   -moz-border-radius: 10px;
         border-radius: 10px; }

	.rounded {
 	 display:inline-block;
	 background-color: #F6E5D0;
	 -moz-border-radius: 10px;
	 border-radius: 10px;
	 padding: 10px;
	 margin: 5px 0 0 0;
	}
	#tl { background-image: url(../patenator/tl.png); background-repeat:no-repeat; }
	#tr { background-image: url(../patenator/tr.png); background-position: top right; background-repeat: no-repeat; }
	#bl { background-image: url(../patenator/bl.png); background-position: bottom left; background-repeat: no-repeat;}
 	#br { background-image: url(../patenator/br.png); background-position: bottom right; background-repeat: no-repeat;}
	table tr td {font-size:14px;padding:10px;}
 	a:link {text-decoration:none;font-weight:bold}
	a:hover {
		text-decoration:underline;
		font-weight:bold;
		}
	a:active { outline: 0px solid blue!important; }
	a:focus { outline: 0px solid blue!important; }
  a.btn {

	position:relative; padding: 0 6px 0 6px; margin: auto;

	background: #68D9FF; /* old browsers */
	background: -moz-linear-gradient(top, #D5E5EF 0%, #89B3CD 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#F6E5D0), color-stop(100%, #89B3CD)); /* webkit */

	box-shadow: inset 0px 0px 6px #fff;
	-webkit-box-shadow: inset 0px 0px 6px #fff;
	border: 1px solid #88AFC8;
	border-radius: 10px;

	font: bold 16px/10px Helvetica, Sans-Serif; text-align: center;
	text-transform: uppercase; text-decoration: none;
	color: #171E23;
	text-shadow: 0px 1px 2px #A9C3D3;

	-moz-transition: color 0.25s ease-in-out;
	-webkit-transition: color 0.25s ease-in-out;
	transition: color 0.25s ease-in-out;
  }

	a.btn:hover {
		color: #0091EC;

		-moz-transition: color 0.1s ease-in-out;
                -webkit-transition: color 0.1s ease-in-out;
                transition: color 0.1s ease-in-out;
	}

	#bforce {background: #99BFE3 !important;}
</style>

<script type="text/javascript">
	function resizepage()
	{
	 var inputboxsize = parseInt(parseInt(document.body.clientWidth)-315);
 	 var tableboxsize = parseInt(parseInt(document.body.clientWidth)-15);
	if (inputboxsize > 845){inputboxsize=845;}
	if (tableboxsize > 1900){tableboxsize=1900;}

	if (inputboxsize < 100){inputboxsize=100;}
        if (tableboxsize < 400){tableboxsize=400;}

        document.getElementById('search').style.width = inputboxsize + "px";
        var checkvar = document.getElementById('replybox');

	if ( checkvar != null ){document.getElementById('replybox').style.width = inputboxsize + 'px';} 
	 //document.getElementById('tableid').width = tableboxsize + "px";
	}

	function changecolor(caller)
	{
	 document.getElementById(caller).style.background="#F5F5F5";
	}

	function changecolorback(caller)
        {
         document.getElementById(caller).style.background="#F6E5D0";
        }

	function inputupdate(theid)
	{
		 if (theid>0){
                        document.getElementById('replybutton').href = 'http://twitter.com/share?url=http%3A%2F%2Fpatenator.com%3F' + theid  + '&text=' + document.getElementById('replybox').value;
                }
	}

        function show_confirm()
        {
	var r = true;
        var myTextField = document.getElementById('search');
        var myTextField = myTextField.value;
	if (myTextField == " Search for ideas"){alert("Please enter an idea before submitting. Thank you."); return false;}
        var length1 = myTextField.length;
        if (length1 < 11) {alert("Query Length is too Short. (min.10 char)  Please try again."); return false;}
        if (length1 > 120) {alert("Query Length is too long. (max.120 char) Please try again."); return false;}
        if (r==true)
          {
          return true;
          }
        else
          {
          return false;
          }
        }
        function show_confirm2()
        {
        var myTextField4 = document.getElementById('replybox');
        var myTextField4 = myTextField4.value;
        var length4 = myTextField4.length;
        if (length4 < 2) {alert("Reply Length is too Short. (min.2 char)  Please try again."); return false;}
        if (length4 > 120) {alert("Reply Length is too long. (max.120 char) Please try again."); return false;}
        var r=confirm("Click OK to submit your reply");
        if (r==true)
          {
          return true;
          }
        else
          {
          return false;
	  }
	}
	function inputsize()
	{
	 var myTextField2 = document.getElementById('search');
	 var myTextField2 = myTextField2.value;
         var length2 = 120 - myTextField2.length;
	 var charll=" chars left: ";
	 if (length2 < 20)
		{myform.charremaining.style.color = "red"}
	 else
		{myform.charremaining.style.color = "white"}

	 myform.charremaining.value = charll.concat(length2);
	}
</script>
</head>

<body id='bodyid' name='bodyid' style="font-family:arial;background-color: #E7B881; background-image:url(../patenator/headerback.png);background-repeat:repeat-x; border:0 ;padding:7px;margin:0;" onresize="resizepage()" onLoad="resizepage()">

<center>
<form action="../patenator/index.php" method="post" id="myform" name="myform">
<a href="../"><img src="../patenator/patenatorlogo.png" style="margin:0;padding:0 15px;border:0;vertical-align: top;" /></a> 
<input type="text" name="search" id="search" maxlength="120" value=" Search for an open idea" style="color:#888888;" onKeyUp="inputsize()" onKeyDown="inputsize()" onKeyPress="inputsize()" onFocus="if(this.value == ' Search for an open idea') {this.value = '';this.style.color='black'}" onBlur="if (this.value == '') {this.value = ' Search for an open idea';this.style.color='#888888';}"/>
<input type="submit" value="Search" onclick="return show_confirm();" /><input type="text" style="font:10px; border-width: 0px; background-color: transparent; color:white;" name="charremaining" size="10" value=" chars left: 120"/>
</form>
<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
if (!empty($_POST)){
	$search = check_input($_POST['search']);
}
else {$search=null;}

if (!empty($_GET)){
	$id = check_input($_GET['q']);
	$id = intval($id);
	$page = check_input($_GET['p']);
}
else {$id= null; $page = null;}

if ($page){
	$page0 = intval(intval($page)-1)*20;
}
$page2 = $page0 + 20;
$page3 = $page + 1;

if (!$id && !$page && !empty($_GET))
 {
 $id = intval(base_convert(check_input(key($_GET)), 36, 10));
 }


$con = mysql_connect("localhost","root","bitnami");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("patenator", $con);

if ( strlen($_POST['search']) > 10 && strlen($_POST['search']) < 121)
  {
   $Tod = strval(date('D M j Y, G:i:s'));
   $result = mysql_query("SELECT id FROM idea WHERE openidea LIKE '$search'");
   $row = mysql_fetch_array($result);
   if ($row['id']){
	echo "HELLO; found something";
	$tid = base_convert($row['id'], 10, 36);
        header("Location: ../?".$tid);
	mysql_close($con);
	die();
        }
   else {
	echo "FAIL: ".$search;
        header("Location: ../");
        mysql_close($con);
	die();
	}
}
if (!empty($_POST)){
	$reply = check_input($_POST['replybox']);
}
else {$reply = null;}

if ( strlen($reply) > 1 && strlen($_POST['replybox']) < 121  && $id)
 {
   $Tod = strval(date('D M j Y, G:i:s'));
   mysql_query("INSERT INTO replies (openideaid, reply, date) VALUES ('$id','$reply','$Tod')");

   $resultx = mysql_query("SELECT answer FROM idea WHERE id = '$id' ");
   $rowx = mysql_fetch_array($resultx);

   //if (!$rowx['answer']){
     mysql_query("UPDATE idea SET dateanswered = '$Tod' WHERE id ='$id'");
     mysql_query("UPDATE idea SET total = total + 1 WHERE id ='$id'");

   $tid = base_convert($id, 10, 36);
   header("Location: ../?".$tid);
   mysql_close($con);
   die();
}

if ($id){
	echo "<table name='tableid' id='tableid' style='max-width:1900px;background-color: #F6E5D0; border-collapse: collapse; border-color:white;'  cellpadding='5' color='black' border='0'>";
        $result = mysql_query("SELECT * FROM idea WHERE id = $id");
	$result2 = mysql_query("SELECT reply FROM replies WHERE openideaid = $id");
	echo "<tr id='tr'><th id='tl'>Idea #$id:</th></tr>";
     }
else if ($page){
	echo "<table id='tableid' name='tableid' style='max-width:1900px; background-color: #F6E5D0; border-collapse: collapse;border-color:white;'  cellpadding='5' color='black' border='1' RULES=ALL FRAME=VOID>";
	$result = mysql_query("SELECT * FROM idea ORDER BY id DESC LIMIT $page0, $page2");
	echo "<tr><th id='tl'>Simple Description of Idea:</th><th id='tr'>Details:</th></tr>";
     }
else {
	echo "
	<div style='padding:10px;margin:10px;max-width:800px;'>
            <font size='2em'><b>Prior Art</b>:<i>
            In patent law, all technology and publications available before the date of invention or anything available about the invention more than one year prior to filing the application. A patent will not issue if prior art is uncovered by a patent examiner that demonstrates somebody already came up with the same idea -- that is, all of the significant elements in the applicant's innovation were embodied in an existing innovation.</i></font>
	<br /><br />
	Protect your ideas NOW by publishing them to Patenator, for free, and gain many of the benefits that would be seen by the lengthy, costly, and often uncertain task of filling for a patent.  Anyone can now protect an idea by registering it publically or privately on Patenator.com. Submitted ideas will be safely stored on our servers, date-stamped, and certified by Patenator.com as your submission.
        </div>

	";
	echo "<table id='tableid' name='tableid' style='max-width:1900px; background-color: #F6E5D0; border-collapse: collapse;border-color:white;'  cellpadding='5' color='black' border='1' RULES=ALL FRAME=VOID>";
	$result = mysql_query("SELECT * FROM idea ORDER BY id ASC LIMIT 0, 20");
	echo "<tr><th id='tl'>Simple Description of Idea:</th><th id='tr'>Details:</th></tr>";
     }
$iiii=0;
while($row = mysql_fetch_array($result))
  {
  if ($id){
   echo "<tr>";
   echo "<td><b>". $row['openidea'] . "</b></td>";
   $questemp = $row['openidea'];
   $viewtemp = $row['views'] + 1;
   echo "</tr><tr>";
   if ($row['answer']){echo "<th><hr/>Our Reply:</th>"; echo "</tr><tr>";}
   else {echo "</tr><tr id='bl'>";}
      }
  else {
   echo "<tr id='id".$row['id']."' onmouseover='changecolor(this.id)'  onmouseout='changecolorback(this.id)'>";
   $tid = base_convert($row['id'], 10, 36);
   echo "<td><a class='btn' href='..?" .$tid."'>".$row['id']."</a>&nbsp ". $row['openidea'] . "</td>";
      }
  $tt=0;
  if ((!$row['answer']) && (!$id)  && (!$row['dateanswered'])){
	$tid = base_convert($row['id'], 10, 36);
	$row['answer'] = "Not Yet <a href='..?".$tid."'>Answer</a>ed";}
  else if ((!$row['answer']) && (!$id) && ($row['total']<2) ){$row['answer'] = "Anonymous Reply";}
  else if ((!$row['answer']) && (!$id) ){$row['answer'] = "Anonymous Replies";}
  else if (!$row['answer']){$tt=1;}
  else if (strlen($row['answer'])<21){}
  else if (!$id){ $tid = base_convert($row['id'], 10, 36); $row['answer'] = substr( $row['answer'], 0, 15)."<a href='..?".$tid."'>...More</a>";}
  if (!$tt){echo "<td><i>" . $row['answer'] . "</i></td>";}
  echo "</tr>";
  $iiii=1;
 }
if (!$id){
  echo "<tr><td id='bl'></td><td id='br'></td></tr>";
	}
else	{
echo "<tr id='br'><td id='bl'></td></tr>";
}

echo "</table>";
$iii=0;
$yes=0;
$no=0;
while(($id) && ($row2 = mysql_fetch_array($result2)))
  {
	if ($iii<7){
   		if (!$iii){ echo "<br /><div class='rounded'><b>Anonymous Replies</b><br/><i><ul align='left'><li>". $row2['reply']."</li>";  }
   		else {echo "<br/><li>".$row2['reply']."</li>";   }
	}

	if ((stripos($row2['reply'], 'yes ')!==false) && (stripos($row2['reply'], 'yes ')==0))
		{$yes++;}
	else if ((stripos($row2['reply'], 'yes.')!==false) && (stripos($row2['reply'], 'yes.')==0))
                {$yes++;}
        else if ((stripos($row2['reply'], 'yes,')!==false) && (stripos($row2['reply'], 'yes,')==0))
                {$yes++;}
        else if ((stripos($row2['reply'], 'yes!')!==false) && (stripos($row2['reply'], 'yes!')==0))
                {$yes++;}
        else if ((stripos($row2['reply'], 'yes')!==false) && strlen($row2['reply'])==3)
                {$yes++;}

        if ((stripos($row2['reply'], 'no ')!==false) && (stripos($row2['reply'], 'no ')==0))
                {$no++;}
        else if ((stripos($row2['reply'], 'no.')!==false) && (stripos($row2['reply'], 'no.')==0))
                {$no++;}
        else if ((stripos($row2['reply'], 'no,')!==false) && (stripos($row2['reply'], 'no,')==0))
                {$no++;}
        else if ((stripos($row2['reply'], 'no!')!==false) && (stripos($row2['reply'], 'no!')==0))
                {$no++;}
        else if ((stripos($row2['reply'], 'no')!==false) && strlen($row2['reply'])==2)
                {$no++;}

$iii=$iii+1;
 }

$percentyes=intval(intval($yes)*100/intval($iii));
$percentno=intval(intval($no)*100/intval($iii));
$percentyesno=$percentyes+$percentno;
if ($iii && $percentyesno){echo "</ul></i><hr/>Total replies: ".$iii."<br/>".$percentyes."% said Yes ...<br/>".$percentno."% said No ...<br/>

<div align='left'  style='background-color:#777777;width:100px;'>
<div align='left' style='width:".$percentyesno."px;background-color:green;height:10px;'>
<div align='left'  style='background-color:red;height:10px;width:".$percentno."px'></div></div></div></div>";}
if ($id){

        $tid = base_convert($id, 10, 36);
 	$searchUrl      = "http://search.twitter.com/search.atom?q=patenator.com/".$tid."&rpp=20"; 
        $load           = simplexml_load_file($searchUrl);
	$entry  = $load->entry[0];
	$i=0;
	$ii=0;
	while( $load->entry[$i] && $i<6){
			$entry  = $load->entry[$i];
				$published      = $entry->published;
				$tweet          = $entry->title;
                                $content        = $entry->content;
                                $author         = $entry->author->name;
                                $url            = $entry->author->uri;
				$img		= $entry->link[1]['href'];
			$tweet = check_input($tweet);
			$tweet = str_replace('fuck', '****', $tweet);
			$tweet2 = array();
			$tweet2 = explode("http://t.co/", $tweet);
			$tweet = $tweet2[0];
			$tweet = str_replace($questemp, '', $tweet);
			$tweet = check_input($tweet);
	$i=$i+1;
	if ($tweet){
		if (!$ii){ echo "<br /><div class='outer'><div class='rounded'><b>Replies from Twitter:</b></div><br />";}
		$ii=$ii+1;
 		echo "<div class='rounded'><img align='middle' src='$img' /> <a href='$url'>$author</a> writes</b>: ".$tweet."</div></br>";
 		}

	}
	if ((!$ii) && (!$iiii) && (!$iii)){echo  "<div class='rounded'><i style='font-size:14px'>No Replies yet. :(</i></div></br>";}
 $tid = base_convert($id, 10, 36);
 echo "</div><br /><br /><div class='rounded'><b>Add a Reply:</b></div><br/><div class='rounded'>
     <form method='post' action='../patenator/process.php?q=$id'><input type='text' maxlength='120' id='replybox' name='replybox' onKeyDown='inputupdate($tid)' onblur='inputupdate($tid)' /><br/>
     <input type='submit' value='Submit Anonymously' onclick='return show_confirm2()' /><button><a style='color:black;text-decoration:none;font-weight:normal;' value='Submit via Twitter' id='replybutton' name='replybutton' href='http://twitter.com/share?url=http%3A%2F%2Fpatenator.com?$tid'>Submit via Twitter</a>
     </button></form> </div>";

 echo "<br/><br /><form><input type='button' value='Back' onClick='history.go(-1);return true;'/></form>";
 mysql_query("UPDATE idea SET views=".$viewtemp." WHERE id=".$id."");
 echo "<br /><br /><a href='http://twitter.com/share' class='twitter-share-button' data-text='$questemp' data-url='http://patenator.com?$tid' data-count='horizontal'>Tweet This Page</a><script type='text/javascript' src='http://platform.twitter.com/widgets.js'></script>";
}
else {
 echo "<br />";

 if ($page==1){ echo "<a href='../?p=1' id='bforce' class='btn'>Newest</a>"; }
 else {echo "<a href='../?p=1' class='btn'>Newest</a>";}

 if ($page==2){ echo "<a href='../?p=2' id='bforce' class='btn'>2</a>"; }
 else {echo "<a href='../?p=2' class='btn'>2</a>";}

 if ($page==3){ echo "<a href='../?p=3' id='bforce' class='btn'>3</a>"; }
 else {echo "<a href='../?p=3' class='btn'>3</a>";}

 if ($page==4){ echo "<a href='../?p=4' id='bforce' class='btn'>4</a>"; }
 else if ($page>5){$page4=$page-1; echo "<a href='../?p=$page4' class='btn'><</a>";}
 else {echo "<a href='../?p=4' class='btn'>4</a>";}

 if ($page==5){ echo "<a href='../?p=5' id='bforce' class='btn'>5</a>"; }
 else if ($page>5){ echo "<a href='../?p=$page' id='bforce' class='btn'>$page</a>";}
 else {echo "<a href='../?p=5' class='btn'>5</a>";}

 echo "<a href='../?p=$page3' class='btn'>></a>";

 if (!$page){ echo "<a href='../' id='bforce' class='btn'>Home</a>"; }
 else {echo "<a href='../' class='btn'>Home</a>";}

}

mysql_close($con);


function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //$data = htmlentities($data);
    $data = mysql_real_escape_string($data);

    return $data;
}
?>
</center>
</body>
</html>


