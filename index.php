<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333333;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #555555;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 4px;
    }

    textarea {
      height: 100px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    <div class="container">
      <h2>Form Example</h2>
      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
		<h1>form Example</h1>
		<form action="insert.php" method="post">

<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>


<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>


<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>


<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>


<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

<p>
      			<label for="image">image:</label>
      			<input type="file" name="pic" id="pic">
      			</p>


			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
