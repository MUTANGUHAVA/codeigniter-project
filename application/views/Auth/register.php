
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
</head>
<body> <br> <br> <br> <br> <br>

  <center><h1>Sign Up</h1></center>

  <form action="<?php echo site_url('Register/register_user'); ?>"method="post">

    <label for="name">Full Name:</label><br>
    <input type="text" name="name" required><br>
	

    <label for="email">Email address:</label><br>
    <input type="email" name="email" required><br>
	

    <label for="password">Password:</label><br>
    <input type="password"  name="password" required >
	

 
	

    <input type="submit" value="Sign Up"> <br> <br> 
	<div >
	Have an account ? <a class="text-center" href="<?php echo site_url('Login/loginpage'); ?>" class="text-dark"> Login</a>
	</div>
    <div class="error-message"></div>
</form>
  <style>
    body {
      background-color: white;
      color: black;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="email"], input[type="password"] {
      display: block;
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 2px solid black;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: black;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
	.text-center{
		background-color: black;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
	}
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</html>


