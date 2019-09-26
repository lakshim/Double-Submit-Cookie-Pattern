<!-- IT18185744 
     Jayathissa L.M.
-->
<?php
if(isset($_POST['username'],$_POST['password'])){
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  if($uname == 'admin' && $pwd == '1234'){
    echo '<h1>Successfully logged in</h1>';
    session_start();
    $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    $session_id = session_id();
    setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
    setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
    
  }else{
    echo '<h1>Invalid Credentials</h1>';
    exit();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Request Forgery Protection</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
  <script>
  
  $(document).ready(function(){
  
  var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
  var csrf = decodedCookie.split(';')[2]
  // alert(decodedCookie)
  if(csrf.split('=')[0] = "csrfTokenCookie" ){
    // alert(csrf.split('csrfTokenCookie=')[1])
    cookie_value = csrf.split('csrfTokenCookie=')[1];
    document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;
  }
  });
  
</script>
	
</head>
<body>

	  <div class="overlay">
<form action="home.php" method="post">
   <div class="con">
   <header class="head-form">
      <h2>****</h2>
      <p>Cross Site Request Forgery -  Double Submit Cokkie Pattern</p>
   </header>
   <br>
   <div class="field-set">
<p>Write something</p>
         <input class="form-input" id="txt-input" type="text" name="updatepost">
      <br>
      <div>
      <input type="hidden" name="token" value="" id="tokenIn_hidden_field">
    </div>
      <br>
      <button class="log-in" type="submit" value="updatepost">Update </button>
   </div>
  </div>
</form>
</div>

</body>
</html>