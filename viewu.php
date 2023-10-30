<?php
include("dbconnect.php");
session_start();
extract($_POST);
?>
<html>
<title>Bus Guidence</title>
<style>

p
{
	color:#99ccff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;
  background:#003300;
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
  border: 2px solid #003300;
  padding: 30px;
  background: #003300;
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
    text-align:right;
   font-size:35px;
   color:#ffffff;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="bus.php"><strong>Add Bus</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Bus Guidence System</div>



 <h1 align="center">User  Details </h1> 
 
          <table width="100%" border="0" align="center">
           
		   
		      <tr>
              <td width="13%">&nbsp;</td>
              <td width="7%"><div align="center"><strong>Sl.No</strong></div></td>
              <td width="20%" height="46"><div align="center"><strong>Name</strong></div></td>
              <td width="18%"><div align="center"><strong>Address</strong></div></td>
              <td width="17%"><div align="center"><strong>Phone Number</strong></div></td>
              <td width="19%"><div align="center"><strong>Email Id </strong></div></td>
              <td width="6%">&nbsp;</td>
            </tr>
			<?php
			$qry=mysql_query("select * from register");
			$i=1;
			while($row=mysql_fetch_array($qry))
			{
			?>
            <tr>
              <td>&nbsp;</td>
              <td><div align="center"><?php echo $i;?></div></td>
              <td height="46"><div align="center"><?php echo $row['name'];?></div></td>
              <td><div align="center"><?php echo $row['address'];?></div></td>
              <td><div align="center"><?php echo $row['pnumber'];?></div></td>
              <td><div align="center"><?php echo $row['email'];?></div></td>
              <td>&nbsp;</td>
            </tr>
			<?php
			$i++;
			}
			?>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
          </table>
  
  
  
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"> <p>copyrights & designedby@Bus Guidence</p></div>