
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "raya");

<!DOCTYPE html>
<html>
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

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Form Example</h2>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>
      <label for="name">Name:</label>
      <input type="text" name="name" required><br><br>

      <label for="age">Age:</label>
      <input type="number" name="age" required><br><br>

      <label for="gender">Gender:</label>
      <select name="gender" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select><br><br>

      <label for="id">National ID:</label>
      <input type="text" name="id" required><br><br>

      <label for="phone">Phone Number:</label>
      <input type="text" name="phone" required><br><br>

      <label for="email">Email:</label>
      <input type="email" name="email" required><br><br>

      <label for="image">Upload Image:</label>
      <input type="file" name="image" accept=".jpg, .jpeg, .png, .gif" required><br><br>

      <label for="message">Message:</label>
      <textarea name="message" required></textarea><br><br>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
