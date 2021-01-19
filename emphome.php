<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from booth");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into booth values('$id','$name','$ward','$loc','$address','$phone')");
if($qry)
{
echo"<script> alert('Entered suceessfully')</script>";
}
else
{
echo"<script> alert('Check Fields')</script>";
}
}
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
  <li><a class="active" href="emphome.php"><strong>Booth Entry</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="voters.php"><strong>Voters Entry</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="viewvoters.php"><strong>View Voters</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewn.php"><strong>New Voters</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="bview.php"><strong>View Booths</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">ELECTION COMMISSION BOOTH SLIP MANAGEMENT SYSTEM</div>



















<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="34%" height="323" border="0" align="center">
	<tr>
	<td colspan="2 " align="center"><strong>Voting Booth Entry</strong></td>
	</tr>
	<tr>
    <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
     
      <td>   Booth Name</span></td>
      <td><label>
      		<input name="name" type="text">
		
      </label></td>
    
    </tr>
	
	
	  <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
	  </tr>
	
	 <tr>
     
      <td>   Ward No</span></td>
      <td><label>
      		<input name="ward" type="text">
		
      </label></td>
     
    </tr>
	 <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
     
     
      <td>   Booth Location</span></td>
      <td><label>
      		<input name="loc" type="text">
		
      </label></td>
     
    </tr>
	
	 <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
    
      <td>   Address</span></td>
      <td><label>
      		<input name="address" type="text">
		
      </label></td>
     
    </tr>
	
	 <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
     
      <td>   Contact No</span></td>
      <td><label>
      		<input name="phone" type="text">
		
      </label></td>
     
    </tr>
	
	 <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	 <tr>
    
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
  <br>
<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>