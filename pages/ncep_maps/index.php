<?php include 'header.php' ?>

<link rel="stylesheet" href="./login.css">
<h1 id="model-protoype-headline">Coupled Model Prototypes</h1>

<form action="./login.php" id="loginForm" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
  </div>
  <br>
  <button type="submit"  id="submitBtn" name="submitBtn" class="btn btn-primary">Login</button>
</form>

