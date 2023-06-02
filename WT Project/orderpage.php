<!DOCTYPE html>
<html>
<head>
  <title>Watch Shop - Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('bg9.jpg');
      background-size: cover;
    }

    .login-bg {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      max-width: 400px;
      padding: 40px;
      text-align: center;
      border-radius: 10px;
    }

    .login-container h2 {
      margin-top: 0;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-container button {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #45a049;
    }

    .login-container p {
      margin-top: 0;
    }

    .login-container a {
      color: #4CAF50;
    }
    input{
        margin-top:10px;
        margin-bottom:10px;
        padding-left:20px;
        padding-right:20px;
        height: 40px;
    }
  </style>
</head>
<body>
  <div class="login-bg">
    <div class="login-container">
      <h2>Order</h2>
      <form action="orders.php" method="POST">
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="mobile" placeholder="mobile" required>
        <input type="text" name="doorNo" placeholder="doorNo" required>
        <input type="text" name="area" placeholder="area" required>
        <input type="text" name="city" placeholder="city" required>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>
