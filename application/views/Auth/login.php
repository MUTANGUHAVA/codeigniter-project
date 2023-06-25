<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <br><br><br><br><br><br>
  <div>
    <center><h1>Login</h1></center>
    
    <form  action="<?php echo site_url('Login/login2'); ?>"method="get">
    <label for="Username">Username:</label><br>
    <input type="text" id="name" name="name" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="name" name="email" required><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" required><br>
      <input type="submit" value="Login">
      </form>
    
  
  <a href="<?php echo base_url('Auth/index'); ?>">
  <button type="submit">Back Home</button>
</a>
</body>
<style>
    body {
      background-color: white;
      color: black;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="email"], input[type="password"] {
      display: block;
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 2px solid black;
      font-size: 16px;
    }

    input[type="text"], input[type="password"] {
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
    a {
      display: block;
      margin-top: 20px;
      text-align: center;
      color: black;
      text-decoration: none;
    }
  </style>

</html>



