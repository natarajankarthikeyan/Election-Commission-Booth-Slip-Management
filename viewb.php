<?php
include("dbconnect.php");
extract($_POST);
session_start();
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






<table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><strong>Booth Details</strong></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Booth Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Ward No's</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Location</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from booth");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['ward'];?></div></td>
			   <td><div align="center"><?php echo $row['loc'];?></div></td>
				 <td><div align="center"><?php echo $row['address'];?></div></td>
				  <td><div align="center"><?php echo $row['phone'];?></div></td>

		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>
		<div id="footer"> <p>copyrights & designedby@Election Comission</p></div>