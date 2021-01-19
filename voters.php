<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from voters");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into voters values('$id','$name','$vid','$ward','$booth','$phone','$address')");
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
  <table width="37%" height="372" border="0" align="center">
	<tr>
	<td colspan="2 " align="center"><strong>Voters Entry</strong></td>
	</tr>
	<tr>
    <tr>
     	<td width="51%">&nbsp;</td>
      <td width="49%">&nbsp;</td>
    </tr>
	 <tr>
    
      <td>   Voter Name</span></td>
      <td><label>
      		<input name="name" type="text">
		
      </label></td>
     
    </tr>
	
	
	 <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
     
      <td>   Voter Id</span></td>
      <td><label>
      		<input name="vid" type="text">
		
      </label></td>
     
    </tr>
	  <tr>
     	<td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
     
      <td>   Voter Ward</span></td>
      <td><label>
      		<input name="ward" type="text">
		
      </label></td>
     
    </tr>
	
	 <tr>
       <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
    
      <td>   Select Booth</span></td>
      <td><label>
      		<select name="booth" >
			<option value="">select</option>
			<?php
			$qr=mysql_query("select* from booth");
			while($rw=mysql_fetch_array($qr))
			{
			?>
		<option value="<?php echo $rw['name'];?>"> <?php echo $rw['name'];?></option>
		<?php
		
		}
		?></select>
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
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
  <br>
<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>