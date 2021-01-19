<?php
include("dbconnect.php");
extract($_POST);
session_start();

	if(isset($_POST['btn']))
	{
	
	$qt=mysql_query("select * from newvoter  where vid='$vid'");
	$nm=mysql_num_rows($qt);
	
		
	if($nm==1)
	{
	
	echo "<script>alert('Voter Id Aldready Exists')</script>";
		
	}	
		
		else
		{
		
		
		$id=$_REQUEST['id'];
		$phone=$_REQUEST['phone'];
		$msg="Your Voter Id  Is Given".$vid;
		$qy=mysql_query("update newvoter set status='Accept' ,vid='$vid' where id='$id'");
		?>
		
		
		<iframe src="http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=fantasy5535&password=1163974702&sendername=Sample&mobileno=<?php echo $phone;?>&message=<?php echo $msg;?>"style="display:send sucess">
</iframe>
		
	
	
	<?php
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



	
	<br>
	

<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="100%" border="0" align="center">
	<tr>
	<td colspan="5 " align="center"><strong> Give Voter Id </strong></td>
	</tr>
	<tr>
    <tr>
      <td width="11%" height="32">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Enter Voter Id</span></td>
      <td><label>
      		<input name="vid" type="text" required>
		
      </label></td>
      <td>&nbsp;</td>
      <td width="10%">&nbsp;</td>
    </tr>
	
	
	
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
	
	
	
		<br />
		<br />
		<br />
		<br />
	<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>
	
	
	