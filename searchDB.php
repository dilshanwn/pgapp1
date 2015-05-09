<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Police Certificate System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">

	<div id="header">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="http://www.police.lk/">Home</a></li>
				<li><a href="http://www.police.lk/index.php/vision-a-mission">Vision & Mission</a></li>
				<li><a href="http://www.police.lk/index.php/police-history">History</a></li>
				<li><a href="index.html">Police Certificate</a></li>
				<li><a href="http://www.police.lk/index.php/contact-police">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<div id="logo">
		<h1><a href="#">Sri Lanka Police </a></h1>
		<p><em> Politeness,Obedience, Loyalty,Intelligence,Courtesy,Efficiency </em></p>
	</div>
	<hr />
	<!-- end #logo -->
<!-- end #header-wrapper -->

<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="title">Results</h2>
			
			<div class="entry">
				<p></p>
				<p class="links">
			</div>
		</div>
		<div class="post">
			
			
			<div class="entry">
			<!-- page Start    -->	
      <center><strong>
      <?php
$con=mysqli_connect("mysql.loomhost.com","u477155632_offi","1994@1994","u477155632_polic");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result1 = mysqli_query($con,"SELECT case_no,adate FROM arrest WHERE
 cnic='$_POST[Nic]'");
 $x=0;
 $c=0;
 $no=$_POST['Nic'];
 if($row = mysqli_fetch_array($result1)){
	 $x=1;
	 
	 echo "<h2><font color='red'> Match Found</font></h2><br> <br>";
	 echo "<table border='1'>
<tr>
<th>Case Type</th>
<th>Arrest Date</th>

</tr>";
 }
 
 if($x==0){
	echo "<h1><font color='white' >No Result</font></h1>";
	
	}
 

//$result1 ="No"
 

while($row = mysqli_fetch_array($result1))
  {		
	  $cs=$row['case_no'];
	  $ad=$row['adate'];
	  $result2 = mysqli_query($con,"SELECT case_type FROM cases WHERE case_no='$cs'"); 
	  	
	  if($row2 = mysqli_fetch_array($result2)){
		  $cstype=$row2['case_type'];
		  $c=$c+1;
	  }
 if ($x){	  
  echo "<tr>";
  echo "<td>" . $cstype . "</td>";
  echo "<td>" . $ad . "</td>";
  
  echo "</tr>";
 }
	  
  }
echo "</table>";
echo "<br>".$c." No of records found for :".$no;
mysqli_close($con);



?>
</center>   </strong>   
      
               
                
			</div>
		</div>
		<div class="post">
			
			
			<div class="entry">
				<p></p>
				<p class="links"></p>
			</div>
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<ul>
			<li>
				<h2>About Certificate System </h2>
				<p>This page is to make getting a Police Certificate easy. If Someone ask you to give a Police Certificate you can simply give them your National Identity Card Number(NIC). They can search if you were ever been arrested for any crime (the Type of crime & the arrested date if there is any record of it). </p>
			</li>
			<li>
				<h2>Main Divisions</h2>
				<ul>
					<li><a href="http://www.police.lk/index.php/1-1-9-emergency">1-1-9 Emergency</a></li>
					<li><a href="http://www.police.lk/index.php/crime-division">Crime Division</a></li>
					<li><a href="http://www.police.lk/index.php/narcotic-bureau">Narcotic Bureau</a></li>
					<li><a href="http://www.police.lk/index.php/child-a-women-bureau">Child & Women Bureau</a></li>
					<li><a href="http://www.police.lk/index.php/human-rights">Human Rights</a></li>
					</ul>
				</li>
			
		</ul>
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->

<div id="footer">
	<p>Copyright (c) SE Group 4. All rights reserved. Design by NIBM HDCBIS 14.2 SE Group-4.</p>
</div>
<!-- end #footer -->
</div>
</body>
</html>
