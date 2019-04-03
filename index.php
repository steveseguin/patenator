<?php $page = "p1"; ?>
<?php include("header.php"); ?>

<?php

$con = mysql_connect("localhost","root","bitnami");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("patenator", $con);

$result = mysql_query("SELECT id FROM idea ORDER BY DESC LIMIT 30");
   while ($row = mysql_fetch_row($result)){
	print_r($row);
   }
?>

<div class="list">
	<div class="tile"><div style="font-size:23px;">51</div>votes</div>
	<div class="tile"><div style="font-size:23px;">101</div>views</div>
	<div class="maininfo">
		<div class="maintitle"><a href="#">Some title goes here</a></div>
		<div class="tag">sometag</div>
		<div class="whenwho">12m ago by steve</div>
	</div>
</div>
<div class="list">
        <div class="tile"><div style="font-size:23px;">51</div>votes</div>
        <div class="tile"><div style="font-size:23px;">101</div>views</div>
        <div class="maininfo">
                <div class="maintitle">Some title goes here</div>
                <div class="tag">sometag</div>
                <div class="whenwho">12m ago by steve</div>
        </div>
</div>
<div class="list">
        <div class="tile"><div style="font-size:23px;">51</div>votes</div>
        <div class="tile"><div style="font-size:23px;">101</div>views</div>
        <div class="maininfo">
                <div class="maintitle">Some title goes here</div>
                <div class="tag">sometag</div>
                <div class="whenwho">12m ago by steve</div>
        </div>
</div>

<?php include("footer.php"); ?>

