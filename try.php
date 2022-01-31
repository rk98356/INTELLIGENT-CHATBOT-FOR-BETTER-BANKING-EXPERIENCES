<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Account Details</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				<div class="form-left-last">
                <a href="updateaccount.php">
					<input type="button" name="updateaccount" class="updateaccount" value="Update Details">
                </a>
				</div>
			</div>
			<form class="form-detail" action="try.php" method="post" id="myform">
            <?php
                            $conn = mysqli_connect("localhost", "root", "", "rhs"); 
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                              
                              $sql = "SELECT * FROM userdetails where name ='Rohit Kumar'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                            ?>
				<h2>User Details</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">Name</label>
						<input type="text" placeholder="Agasthya Prasad"value="<?php echo $row['name'];?>" name="first_name" id="first_name" class="input-text" disabled>
					</div>
					<div class="form-row form-row-1">
						<label for="acno">Account No</label>
						<input type="number"placeholder="9546125789"value="<?php echo $row['acno'];?>" name="acno" id="acno" class="input-text" disabled>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Email</label>
					<input type="text" name="your_email"placeholder="agasthyap@hotmail.com"value="<?php echo $row['email'];?>" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" disabled>
				</div>
                <div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="dob">DOB</label>
						<input type="date" name="dob"value="<?php echo $row['dob'];?>"placeholder="18/07/2000" id="dob" class="input-text" required disabled>
					</div>
                    <div class="form-row form-row-1">
						<label for="mobno">Mobile No</label>
						<input type="number"placeholder="9546125789" name="mobno"value="<?php echo $row['mobileno'];?>"  id="mobno" class="input-text" disabled>
					</div>
				</div>
                <div class ="form-row">
                    <div class="form-row form-row-1">
						<label for="address">Address</label>
						<input type="text" name="address"value="<?php echo $row['address'];?>"placeholder="24*7 Church Road, Mombaya, India" id="address" class="input-text" required disabled>
					</div>
                </div>
				<!-- <div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div> -->
			</form>
		</div>
	</div>
    <?php
            }
                } else {
                    echo "No results";
                }
                $conn->close();
            ?>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>