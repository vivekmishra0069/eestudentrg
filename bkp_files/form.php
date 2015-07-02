<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhD Admissions IITB 2015</title>

    <!-- Bootstrap Core CSS -->
 	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$(function(){

		$('.datepicker1').datepicker();
	});
	</script>
	<link href="css/datepicker.css" rel="stylesheet">
   <script>
	   $(document).ready(function() {
	  $("#word_count").on('keyup', function() {
		var words = this.value.match(/\S+/g).length;
		
		var str2 = " words left.";
		
		if (words > 500) {
		  // Split the string on first 200 words and rejoin on spaces
		  var trimmed = $(this).val().split(/\s+/, 200).join(" ");
		  // Add a space at the end to make sure more typing creates new words
		  $(this).val(trimmed + " ");
		}
		else {
		var net = 500-words;
		
		  $('#display_count').text(words);
		  $('#word_left').text(net + str2);
		}
	  });
	}); 
   </script>



<style>
.drop-hide{
	display: none;
	}
</style>
</head>

<body>
<?php
error_reporting(0);
session_start();
	include 'const.php';
	$mysqli=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());


	$usertype=$_POST['usertype'];
	$_SESSION['usertype']=$usertype;
	


?>

<FORM method="POST" ACTION="verify.php" enctype="multipart/form-data">

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>The Ph.D. Scheme</h1>
                <p class="lead">Department of Electrical Engineering, IIT Bombay</p>
					<div class="panel panel-default">
						<div class=" panel-body">
						<p class="lead">Personal Details </p>
						<p >Your Registration Type is 
									<?php	
										if ($usertype=='iitbtech') 
											echo "IIT BTech";
										elseif ($usertype=='iitmtech')
											echo 'IIT MTech';
										elseif ($usertype=='nftibtech')
											echo 'CFTI BTech';
										elseif ($usertype=='gate')
											echo 'GATE';
										else
										//	header("Location:registrationtype.php");
											

									?>
						</p>
						
						<div class="row">
						
							<div class="col-lg-5 text-left">
						
								<div class="row"><div class="col-lg-3"><p> First Name*:</p><br></div><div class="col-lg-8"><input class="form-control" placeholder="Name" name="fname"  maxlength="30" required/><br></div></div>
      <div class="row"><div class="col-lg-3"><p> Last Name*:</p><br></div><div class="col-lg-8"><input class="form-control" placeholder="Name" name="lname" id="" maxlength="30" required/><br></div></div>


<!--								<div class="row"><div class="col-lg-3"><p> Current Address*:</p><br></div><div class="col-lg-8"><input class="form-control" placeholder="Current Address" name="caddress" maxlength="300" required/> </div></div>
								<div class="row"> <div class="col-lg-3"> <p> City*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="City" name="ccity" id="" maxlength="50" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> State*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="State" name="cstate" id="" maxlength="50" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Pincode*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Pincode" name="cpin" id="" maxlength="6" required/> </div> </div>
-->								<div class="row"> <div class="col-lg-3"> <p> Email*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="email" id="" maxlength="80" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Date of Birth*:</p><br></div> <div class="col-lg-8"><input type="text" class="datepicker1 form-control " placeholder="Date of Birth"  name="dob" required/> </div> </div>

	<div class="row"> <div class="col-lg-3"> <p> Gender*:</p><br></div> <div class="col-lg-8"><select id="Select" class="form-control" name="gender" required>
											<option value="NULL">Please select one</option>
											<option value="female">Female</option>
											<option value="male">Male</option>
										</select><br> </div> </div>
									
								
							</div>
							
						<div class="col-lg-2 text-left">
						</div>
					
					<div class="col-lg-5 text-left">
						
								<div class="row"> <div class="col-lg-3"> <p> Address:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder=" Address" name="paddress" maxlength="300" id=""/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> City:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="City" name="pcity" maxlength="50" id=""/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> State:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="State" name="pstate" maxlength="50" id=""/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Pincode:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Pincode" name="ppin" maxlength="6" id=""/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Mobile*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Mobile" name="mobile" id="" maxlength="13" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Birth Category*:</p><br></div> <div class="col-lg-8"> <select id="Select" class="form-control" name="category" required>
											<option value="general">General</option>
											<option value="obc">OBC</option>
											<option value="sc">SC</option>
											<option value="st">ST</option>
										</select><br> </div> </div>
								
													</div>
					<div class="col-lg-1 text-left">
						</div>
					</div>	
					<hr>
					<p class="lead">Academic Details</p>
					<div class="row">
					
					
					<div class="col-lg-5 text-left">
						
<?php
	if ($usertype=="gate")
	{
	
?>
								
								<div class="row"> <div class="col-lg-3"> <p> GATE Score*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Gate Score" name="gate_score"  required/> </div> </div>
<?php
	}	
	else
	{
?>
	<div class="row"> <div class="col-lg-3"> <p> GATE Score:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Gate Score" name="gate_score" id="" maxlength="10" /> </div> </div>
<?php
	}
?>
								<div class="row"> <div class="col-lg-3"> <p> B Tech (CPI/%)*:</p><br></div> <div class="col-lg-8"><div class="col-lg-4"><input class="form-control" name="Bcpi" id="" maxlength="10" required/> </div><div class="col-lg-3"><p>out of</p> </div><div class="col-lg-4"><input class="form-control" name="Bmax" id="" maxlength="10" required/> </div></div> </div>
<?php
	if ($usertype=="iitbtech" or $usertype=="nftibtech")
	{
	
?>
								<div class="row"> <div class="col-lg-3"> <p> Department/Institute*:</p><br></div> <div class="col-lg-8"><select id="Select" class="form-control" name="Binsti" maxlength="100" required>
								<option value=NULL> Please select One </option>
<?php

	}
	
	if ($usertype=="iitbtech" )
	{
	$query1 = mysqli_query($mysqli,"SELECT * FROM colleges_iit") or die('User not found  '.mysql_error());
		if (mysqli_num_rows($query1) > 0) 
		{
		    // output data of each row
			while($row = mysqli_fetch_assoc($query1)) 
			{
				echo "<option value=".$row['iit'].">".$row['iit']."</option> ";
			}
		}
	}
	elseif($usertype=="nftibtech")
	{
	$query1 = mysqli_query($mysqli,"SELECT * FROM colleges_nfti") or die('User not found  '.mysql_error());
		if (mysqli_num_rows($query1) > 0) 
		{
		    // output data of each row
			while($row = mysqli_fetch_assoc($query1)) 
			{
				echo "<option title =".$row['nfti']." value=".$row['nfti'].">".$row['nfti']."</option> ";
			}
		}
	}
	elseif($usertype=="gate")
	{
?>
  
	<div class="row"> <div class="col-lg-3"> <p> Department/Institute*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Institute" name="Binsti" maxlength="100" required/> </div> </div>

<?php
	}
	elseif($usertype=="iitmtech")
	{
?>
  
	<div class="row"> <div class="col-lg-3"> <p> Institute:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Institute" name="Binsti" maxlength="100" /> </div> </div> 

<?php
	}
?>
											
<?php
	if ($usertype=="iitbtech" or $usertype=="nftibtech")
	{
	
?>
										  </select><br> </div> </div>
<?php	
	}
	if ($usertype=="nftibtech")
	{
?>
								<div class="row"> <div class="col-lg-3"> <p> Rank*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Rank" name="Brank" maxlength="10" required/> </div> </div>

<?php
	}
	else
	{
?>
								<div class="row"> <div class="col-lg-3"> <p> Rank:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Rank" name="Brank" maxlength="10" /> </div> </div>
<?php
	}

?>
								<div class="row"> <div class="col-lg-3"> <p> Research Papers (if any):</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Research paper 1" name="paper1" id="" maxlength="200" /><br><input class="form-control" placeholder="Research paper 2" name="paper2" id="" maxlength="200" /> </div> </div>
								
								
							</div>
							
						<div class="col-lg-2 text-left">
						</div>
					
<?php 
	if($usertype=="iitmtech")
	{
	

?>
					<div class="col-lg-5 text-left">
						
								
								<div class="row"> <div class="col-lg-3"> <p> M Tech (CPI/%)*:</p><br></div> <div class="col-lg-8"> <div class="col-lg-4"><input class="form-control" name="Mcpi" id="" maxlength="10" required/> </div><div class="col-lg-3"><p>out of*</p> </div><div class="col-lg-4"><input class="form-control"  name="Mmax" id="" maxlength="10" required/></div> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Institute*:</p><br></div> <div class="col-lg-8"><select id="Select" class="form-control" name="Minsti" required>
											<option value=NULL>Please Select One</option>
<?php
		$query1 = mysqli_query($mysqli,"SELECT * FROM colleges_iit") or die('User not found  '.mysql_error());
		if (mysqli_num_rows($query1) > 0) 
		{
		    // output data of each row
			while($row = mysqli_fetch_assoc($query1)) 
			{
				echo "<option value=".$row['iit'].">".$row['iit']."</option> ";
			}
		}

?>
										  </select><br> </div> </div>
<!--								<div class="row"> <div class="col-lg-3"> <p> Rank:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Rank" name="Mrank" id="" maxlength="10" /> </div> </div>
-->								<div class="row"> <div class="col-lg-3"> <p> 10+2 (%)*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="10+2 Score(%)" name="hsc" id="" maxlength="10" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Upload Transcript*:</p><br></div> <div class="col-lg-8"><input  type="file" name="transcript" required/> </div> </div>
								
								
					</div>
<?php
	}
	else
	{	
?>
					<div class="col-lg-5 text-left">
						
								
								<div class="row"> <div class="col-lg-3"> <p> M Tech (CPI/%):</p><br></div> <div class="col-lg-8"> <div class="col-lg-4"><input class="form-control" name="Mcpi" maxlength="10" id=""/> </div><div class="col-lg-3"><p>out of</p> </div><div class="col-lg-4"><input class="form-control"  name="Mmax" id="" maxlength="10" /></div> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Institute:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Institute" name="Institute" id="" maxlength="100" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Rank:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Rank" name="Mrank" id="" maxlength="10" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> 10+2 (%)*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="10+2 Score(%)" name="hsc" id="" maxlength="10" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Upload Transcript*:<br>(Format:pdf Size<10MB)</p><br></div> <div class="col-lg-8"><input  type="file" name="transcript" required/> </div> </div>
								
								
					</div>

<?php
	}
?>
					</div>

					<div class="row"><hr> <div class="col-lg-3"> <p> SOP (Max. 500 words)*:</p></div> <div class="col-lg-8"><textarea id="word_count" class="form-control" placeholder="SOP 500 words max." name="sop" id="" required/> </textarea> <p id ="word_left"></p></div> </div>
					<hr>
					<p class="lead">Referee Details</p>
					
					<div class="row">
				<label>Number of referee</label>	<select class="div-toggler" data-target=".my-info-1">
    <option value="">Select </option>
    <option value="3" data-show=".ref-1-drop ,.ref-2-drop,.ref-3-drop" data-hide=".ref-4-drop, .ref-5-drop">3</option>
    <option value="4" data-show=".ref-1-drop ,.ref-2-drop,.ref-3-drop,.ref-4-drop" data-hide=" .ref-5-drop">4</option>
    <option value="5" data-show=".ref-1-drop ,.ref-2-drop,.ref-3-drop,.ref-4-drop, .ref-5-drop">5</option>
</select>
					</div>
					<div class="drop-data">
					<div class="row">
					
					<div class="col-lg-5 text-left">
						
								<div class="ref-1-drop drop-hide">
								<div class="row"> <div class="col-lg-3"> <p> Reference 1:</p><br></div> <div class="col-lg-8"> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Name*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Name" name="r1name" id="" maxlength="100" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Email*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="r1email" id="" maxlength="50" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Phone:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Phone" name="r1phone" id="" maxlength="15" /> </div> </div>
								</div>
								
								<div class="ref-3-drop drop-hide">
								<div class="row"> <div class="col-lg-3"> <p> Reference 3:</p><br></div> <div class="col-lg-8"></div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Name*:</p><br></div> <div class="col-lg-8"> <input class="form-control" placeholder="Name" name="r3name" id="" maxlength="100" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Email*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="r3email" id="" maxlength="50" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Phone:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Phone" name="r3phone" id="" maxlength="15" /> </div> </div>
								</div>
								
								<div class="ref-5-drop drop-hide">
								<div class="row"> <div class="col-lg-3"> <p> Reference 5:</p><br></div> <div class="col-lg-8"> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Name:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Name" name="r5name" id="" maxlength="100" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Email:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="r5email" id="" maxlength="50" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Phone:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Phone" name="r5phone" id="" maxlength="15" /> </div> </div>
								</div>	
								
							</div>
							
						<div class="col-lg-2 text-left">
						</div>
					
					<div class="col-lg-5 text-left">
						
								<div class="ref-2-drop drop-hide">
								<div class="row"> <div class="col-lg-3"> <p> Reference 2*:</p><br></div> <div class="col-lg-8"> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Name*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Name" name="r2name" id=""  maxlength="100" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Email*:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="r2email" id="" maxlength="50" required/> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Phone:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Phone" name="r2phone" id="" maxlength="15" /> </div> </div>
								</div>
								
								<div class="ref-4-drop drop-hide">
								<div class="row"> <div class="col-lg-3"> <p> Reference 4:</p><br></div> <div class="col-lg-8"> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Name:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Name" name="r4name" id="" maxlength="100" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Email:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Email" name="r4email" id="" maxlength="50" /> </div> </div>
								<div class="row"> <div class="col-lg-3"> <p> Phone:</p><br></div> <div class="col-lg-8"><input class="form-control" placeholder="Phone" name="r4phone" id="" maxlength="15" /> </div> </div>
								</div>	
					
					</div>

					</div>
					</div>

					<br>
					<div align="center">
						<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
						<input type="text" name="captcha_code" size="10" maxlength="6" />
						<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
					</div>
					<br>
					
					<div class="col-lg-4" >
					</div>

					<div class="col-lg-3" >
							<input class="btn btn-success btn-block" type="submit" value="Submit" />
					</div>
					</div>

				</div>
			  </div>

			</div>
        </div>
        <!-- /.row -->
	

    </div>
    <!-- /.container -->
</FORM>
<script>
$('select.div-toggler').change(function(){
    var target = $(this).data('target');
    $(target).children().addClass('drop-hide');
    var show = $("option:selected", this).data('show');
    $(show).removeClass('drop-hide');
    var hide = $("option:selected", this).data('hide');
    $(hide).addClass('drop-hide');
});
</script>
  
</body>

</html>
