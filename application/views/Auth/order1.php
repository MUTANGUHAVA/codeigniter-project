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
<div class="success-message">
   <p>Your order has been sent successfully!</p>
</div>

<style>
   .success-message {
      background-color: #4CAF50; 
      color: white;
      padding: 10px;
      text-align: center;
   }
</style>



		<div class="view-order">
		<a href="<?php echo base_url('Retrieve/view'); ?>">
		<input type="submit" value="View order">
		</a>
		</div>
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