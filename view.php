<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $vid=$_SESSION['vid'];
?>
<html>
<title>Election</title>
<style>

p
{
	color:#99ccff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:50px;
	
  list-style-type: none;
  overflow: hidden;
  background:#33334d;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:10px;
}

li {
  float: left;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #ccffff;
}

.active {
  background-color: #4CAF50;
}

#footer {
  border: 2px solid #33334d;
  padding: 45px;
  background: #33334d;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/1.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:35px;
   color:#003300;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="view.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
    <li><a href="fdbk.php"><strong>Feed Back</a></li>
	<li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">ELECTION COMMISSION BOOTH SLIP MANAGEMENT SYSTEM</div>

<?php


$qry=mysql_query("select * from voters where vid='$vid'");
$row=mysql_fetch_assoc($qry);
$bn=$row['booth'];
$qry1=mysql_query("select * from booth where name='$bn'");
$row1=mysql_fetch_assoc($qry1);


?>
<p>Voter Name: <p1> <?php echo $row['name'];?></p>
<p>Voter Phone  <?php echo $row['phone'];?></p>
<p>Booth Name  <?php echo $row['booth'];?></p>
<p>Ward No  <?php echo $row['ward'];?></p>
<p>Booth address  <?php echo $row1['address'];?></p>

<div> &nbsp;</div>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>