<!DOCTYPE html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    .errorMsg{
  color: rgb(223, 180, 180);
  margin-bottom: 10px;
  display:none;
 }
</style>
<body class="body">
    <div class="background">
        <div class="a"></div>
        <div class="b"></div>
    </div>
    <form method="GET" action="/">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="username" id="username"name="person">
        <span class="errorMsg" id="errorusername">*Invalid username(no space,special char)</span>

        <label for="password">Password</label>
        <input type="text" placeholder="Password" id="password"name="passw">
        <span class="errorMsg" id="errorpassword">*Invalid(letter,number,special char allowed)</span>

        <input type="submit" name="submit" value="Sign in" class="btn" id="submit">
        <label id="remember">Remember me</label>
        <input type="checkbox" name="remember" id="check">
        <label id="signup">If you are a new user, please sign up here!</label>
       <input type="submit" name="submit" value="Sign up" class="btn1">
    </form>
    <script src="JQuery.js"></script>
    <script src="login_validation_jQuery.js"></script>
</body>
</html>
