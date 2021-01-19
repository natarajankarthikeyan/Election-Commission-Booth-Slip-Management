<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from emp");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into emp values('$id','$name','$gender','$age','$email','$phone','$quali','$address','$psw')");
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
  <table width="100%" border="0" align="center">
	<tr>
	<td colspan="5 " align="center"><strong> Employee Entry</strong></td>
	</tr>
	<tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Employee Name</span></td>
      <td><label>
      		<input name="name" type="text" required pattern="[A-Za-z ]{3,32}">
		
      </label></td>
      <td>&nbsp;</td>
      <td width="10%">&nbsp;</td>
    </tr>
	
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Gender</span></td>
      <td><label>
      		<input name="gender" type="radio" value="male"> Male
			<input name="gender" type="radio" value="female"> Female
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Age</span></td>
      <td><label>
      		<input name="age" type="text" required>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Email</span></td>
      <td><label>
      		<input name="email" type="text"required>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Phone</span></td>
      <td><label>
      		<input name="phone" type="text" required>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Qualification</span></td>
      <td><label>
      		<input name="quali" type="text"required>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Address</span></td>
      <td><label>
      		<input name="address" type="text" required>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">&nbsp;</span></td>
      <td><label>&nbsp;</label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	  <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td>Password</div></td>
      <td><label>
      		<input name="psw" type="password" required></div>
		
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
  </form>
  <br>
<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>