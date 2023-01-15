<?php
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="signup.css">
    <title>User SignUp</title>
</head>
<style>
    .errorMsg{
  color: rgb(214, 121, 121);
  margin-bottom: 10px;
  display:none;
 }
</style>
<body class="body">
    <div class="background">
        <div class="a"></div>
        <div class="b"></div>
    </div>
    <form method="POST" action="/action_signup.php">
        <h3>Register Here</h3>

        <label for="username">UserName</label>
        <input type="text" placeholder="ID" id="username" placeholder="alishahzad" name="id">
        <span class="errorMsg" id="errorusername">*Invalid Username</span>

        <label for="designation">Designation</label>
        <input type="text" id="designation" name="designation">
        <!-- <span class="errorMsg" id="errorusername">*Invalid Username</span> -->

        <label for="password">Password</label>
        <input type="text" placeholder="Password" id="password"name="password">
        <span class="errorMsg" id="errorpassword">*Invalid password pattern</span>

        <label for="cpassword">Confirm Password</label>
        <input type="text" placeholder="Password" id="cpassword"name="cpassw">
        <span class="errorMsg" id="errorcpassword">*Not matching with the password you entered above</span>


        <input type="submit" name="submit" value="Sign up" class="btn" id="submit">
    </form>
    <script src="JQuery.js"></script>
    <script src="signup_validation_jQuery.js"></script>
</body>
</html>
