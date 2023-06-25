<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <title>My Resto - Order</title>
    
  </head>
<html>
<head>
	<title>Order Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<center><h1>Make your Order</h1></center>
	</div>
	<div class="container">
	
    <form action="<?php echo site_url('Order/placeOrder'); ?>"method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" >
     <small><?php echo form_error('name'); ?></small>


    <label for="email">Email:</label>
    <input type="email" name="email" id="email" >
	<small><?php echo form_error('email'); ?></small>

    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" >
	<small><?php echo form_error('phone'); ?></small>

    <label for="order_details">Order Details:</label>
    <textarea name="order_details"  ></textarea>
	<small><?php echo form_error('order_details'); ?></small>

    <input type="submit" value="Save">
</form>


	</div>
</body>

<a href="<?php echo base_url('Auth/index'); ?>">
  <button type="submit">Back Home</button>
</a>


<style>
.container {
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
}

form {
	margin-bottom: 30px;
}

label {
	display: block;
	font-weight: bold;
	margin-bottom: 5px;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	resize: none;
}

input[type="submit"] {
	background-color: black;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.view-order {
	border: 2px solid #ccc;
	padding: 20px;
}

.view-order h2 {
	margin-top: 0;
}

.view-order p {
	margin-bottom: 0;
}
a{
	background-color: black;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

</style>
</body>
</html>