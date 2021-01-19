<?php
session_start();
include("dbconnect.php");
extract($_POST);
$vid=$_REQUEST['vid'];
$qy=mysql_query("select * from newvoter where vid='$vid'");
$rw=mysql_fetch_array($qy);
if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from newvoter");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("update newvoter set name='$name',dob='$dob',email='$email',phone='$phone',quali='$quali',address='$address',ward='$ward',fname='$fname' where vid='$vid'");
if($qry)
{
echo"<script> alert('Entered suceessfully')</script>";

$qt=mysql_query("update fdbk set status='1' where vid='$vid'");

$msg="Modified Sucessfully";
?>

<iframe src="http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=fantasy5535&password=1163974702&sendername=Sample&mobileno=<?php echo $phone;?>&message=<?php echo $msg;?>"style="display:send sucess">
</iframe>



<?php


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
  <li><a class="active" href="adminhome.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="viewf.php"><strong>View Feedback</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="viewe.php"><strong>View Employee</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewb.php"><strong>View Booths</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="nview.php"><strong>View New Voters</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">ELECTION COMMISSION BOOTH SLIP MANAGEMENT SYSTEM</div>




<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="58%" height="563" border="0" align="center">
	<tr>
	<td height="39" colspan="5 " align="center"><strong> New Voters Registration</strong></td>
	</tr>
	<tr>
   
    <tr>
     
      <td width="38%" height="52">Voter Name</td>
      <td width="62%"><label>
      		<input name="name" type="text" value="<?php echo $rw['name'];?>" required>
		
      </label></td>
     
    </tr>
	
	
	
	
	
	 <tr>
     
      <td height="43">Date of Birth</td>
      <td><label>
      		<input name="dob" type="date" value="<?php echo $rw['dob'];?>" required>
		
      </label></td>
    </tr>
	
	 <tr>
     
      <td height="44">Email</td>
      <td><label>
      		<input name="email" type="text" value="<?php echo $rw['email'];?>" required>
		
      </label></td>
     
    </tr>
	
	
	
	 <tr>
    
      <td height="35">Phone</td>
      <td><label>
      		<input name="phone" type="text" value="<?php echo $rw['phone'];?>"required>
		
      </label></td>
     
    </tr>
	
	
	
    <tr>
     
      <td height="59">Qualification</td>
      <td><label>
      		<input name="quali" type="text" value="<?php echo $rw['quali'];?>" required>
		
      </label></td>
     
    </tr>
	
	
	
	
	 <tr>
    
      <td height="53">Address</td>
      <td><label>
      		<input type="text" name="address" value="<?php echo $rw['address'];?>" required>
		
      </label></td>
     
    </tr>
	
	
	
	 <tr>
     
      <td height="56">Ward No</td>
      <td><label>
      		<input type="text" name="ward" value="<?php echo $rw['ward'];?>"required>
		
      </label></td>
     
    </tr>
	
	
	
	 
	
	
	
	
	 <tr>
    
      <td height="51">Father Name</div></td>
      <td><label>
      		<input name="fname" type="text" value="<?php echo $rw['fname'];?>" required></div>
		
      </label></td>
     
    </tr>
	 <tr>
     
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>



<br>
<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>