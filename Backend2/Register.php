<?php
// Include config file
require_once "Config.php";
 
// Define variables and initialize with empty values
$username = $password = $email = $address = $phone = $confirm_password = "";
$username_err = $password_err = $email_err = $address_err = $phone_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate company name
    if(empty(trim($_POST["company_name"]))){
        $username_err = "Please enter a company name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE company_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["company_name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This compay is already registered.";
                } else{
                    $username = trim($_POST["company_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter an address.";
    } else {
        $address = trim($_POST["address"]);
    }

    // Validate phone
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone number.";
    } else {
        $phone = trim($_POST["phone"]);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($email_err) && empty($address_err) && empty($phone_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (company_name, password, email, phone, address) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password, $param_email, $param_phone, $param_address);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            $param_phone = $phone;
            $param_address = $address;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: #login");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Company Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Primary Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Primary Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>



            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="#login">Login here</a>.</p>
        </form>

    <!-- HTML ORIGINAL FORM

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	    	<div class="fields">
				<div class="field half">
					<label for="company">Company Name</label>
					<input type="text" name="company" id="company" />
				</div>
	    		<div class="field half">
            		<label for="email">Company Email</label>
                    <input type="email" name="email" id="email" />
    			</div>
				<div class="field half">
					<label for="address">Primary Address</label>
					<input type="text" name="address" id="address" />
				</div>
				<div class="field half">
		    		<label for="phone">Primary Phone</label>
					<input type="tel" name="phone" id="phone" />
				</div>
				<div class="field half">
					<label for="pwd">Password</label>
					<input type="password" name="pwd" id="pwd" />
				</div>
				<div class="field half">
					<label for="pwd2">Confirm Password</label>
					<input type="password" name="pwd2" id="pwd2" />
				</div>
			</div>
			<hr />
			<h3>Payment Information</h3>
			<p>Note: For website testing purposes, account creation will be free.</p>
			<p>Do not enter any card information in the fields below.</p>
			<br>
			<div class="fields">
				<div class="field half">
					<label for="cc">Credit Card Number</label>
					<input type="text" name="cc" id="cc" />
				</div>
		    	<div class="field half">
					<label for="CVV">CVV Code</label>
					<input type="text" name="CVV" id="CVV" />
				</div>
				<div class="field half">
					<label for="date">Expiration Date</label>
					<input type="date" name="date" id="date" />
				</div>
			</div>
			<ul class="actions">
				<li><input type="submit" value="Register and Pay" class="primary" /></li>
				<li><input type="reset" value="Reset" /></li>
			</ul>
		</form> -->
    </div>    
</body>
</html> 