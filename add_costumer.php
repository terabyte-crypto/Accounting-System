<?php

include("includes/db24.php");

?>
<html>
<head>
<title>HeyMan</title>

<style>
.header{
	padding-top:10px;
	padding-left:10px;	
	height:70px;
	width:auto;
	background:#222;
	
}
.navbar{
	padding-top:5px;
	padding-left:50px;
	height:25px;
	width:auto;
	background:#4caf50;
}

.left_content{
	float:left;
	padding:10px;
	margin-top:5px;
	height:auto;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,td {
	padding:10px;
	border:1px solid black;
	border-collapse: collapse;

}

.right_content{
	float:right;
	margin-top:5px;
	height:500px;
	width:15%;
	background:#fff;
	border:1px solid black;
}
nav  {

    width: 10%;
    background-color: #f1f1f1;
	text-decoration: none;
	text-align:center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #555;
    color: white;
}
.footer{
	margin-top:5px;
	padding-top:3px;
	float:left;	
	height:30px;
	width:100%;
	background:#222;
}
.footer_text{
	color:#fff;
}
</style>
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  
  <div class="left_content">
  
 <div align="center"style="margin-top:0px;">
   <form method="post" action="add_costumer.php" >
   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
 Register costumers 
   </div>
  <table>
  <tr>
  <td><b>Name</b></td>
  <td>
  <input type="text" name="costumer_name" />
  </td>
  </tr>
  <tr>
  <td><b>Contact No.</b></td>
  <td>
  <input type="text" name="mob" />
  </td>
  </tr>

  <tr>
  <td><b>Customer Address</b></td>
  <td>
  <input type="text" name="cos_add" />
  </td>
  </tr>
  <tr>
	  <td><b>Select Village</b></td>
	  <td><select name="village">
	   <option><b>Select village</b></option>
	   <option>Sherpur</option>
	   <option>Khilchipur</option>
	   <option>Kutalpura maliyan</option>
	   <option>Jamoolkhera</option>
	   <option>Chharoda</option>
	   <option>Ranwal</option>
	   <option>Khawa</option>
	   <option>Ramsinghpura</option>

	  </select>
	  </td> 
  </tr>

  <td colspan="2" align="center"><input type="submit" name="insert_costumer" value="Submit"style="background:#4caf50;
	border:none;color:#fff;font-size:20px;border-radius:4px;"/></td>
  
  </tr>
  
  </table>
  </form>

	 </div>
  
  
  </div>
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="#news">News</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by HeyMan</div></div>

 </body>
</html>
<?php
  
  if(isset($_POST['insert_costumer'])){
	  
	  //text data variables
	  $costumer_name=$_POST['costumer_name'];
	  $mob=$_POST['mob'];
	  $cos_add=$_POST['cos_add'];
	  $village=$_POST['village'];
	  $status='due';
	  
	   if($costumer_name=='')
			  {
		      echo"<script>alert('please fill all the fields !')</script>";
		      exit();
		      }
	  
	        else{
  
	  $insert_cos="insert into costumers (cos_name,mobile,village,p_status,cos_address)values('$costumer_name','$mob','$village','$status','$cos_add')";
	  
	  $run_cos = mysqli_query($con, $insert_cos);
	  if($run_cos){
		  
		  echo"
		  <script>alert('costumer inserted successfully')</script>";
		  
	     }
    	
			}		
	 
	  } 
			    

  
  
  
?>
