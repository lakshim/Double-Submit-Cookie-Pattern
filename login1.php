<!-- IT18185744 
	Jayathissa L.M.
-->
<!DOCTYPE html>
<html>
<head>

  <title>Cross Site Request Forgery Protection</title>
    <link href="style.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
  <div class="overlay">
<form action="nextpage.php" method="post">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>login here using your username and password</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <label for="username"></label>
         <input class="form-input" id="username" type="text" name="username" placeholder="@UserName" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <label for="password"></label>
      <input class="form-input" id="password" type="password" id="pwd"  name="password" placeholder="Password" required>
      <br>
      <button class="log-in" type="submit" value="LogIn" name="Login"> Log In </button>
   </div>
  </div>
</form>

</div>
</body>
</html>