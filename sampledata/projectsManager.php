<?php
//sha1() encrypted auto
$password = '0d612c12d2ac33625bf3e0351b6f5e4f73829fa8';
session_start();
?>

<html>
<head>
<style type="text/css">
*{margin:0;padding:0;}
body{
  background:#FFF;
  font-family:'Open Sans',sans-serif;
}

#formWrap{
  width:400px;
  margin:0 auto;
  margin-top:120px;
  margin-bottom:2%;
  transition:opacity 1s;
  -webkit-transition:opacity 1s;
}

#formWrap h1{
  background:#3399cc;
  padding:20px 0;
  font-size:140%;
  font-weight:300;
  text-align:center;
  color:#fff;
}

form{
  background:#f0f0f0;
  padding:6% 4%;
}

input[type="text"],input[type="password"]{
  width:100%;
  background:#fff;
  margin-bottom:4%;
  border:1px solid #ccc;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:95%;
  color:#555;
}

input[type="submit"]{
  width:100%;
  background:#3399cc;
  border:0;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

input[type="submit"]:hover{
  background:#2288bb;
}
</style>

<?php
//sha1() encrypted auto
//$password = '0d612c12d2ac33625bf3e0351b6f5e4f73829fa8';

//session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
}

if (!$_SESSION['loggedIn']): ?>

<title>Login</title>
</head>
  <body>
  <div id="formWrap">
		<h1>Login</h1>
		<form method="post">
		  <input type="password" name="password" placeholder="Password" /> <br />
		  <input type="submit" name="submit" value="Login" />
		</form>
	</div>
  </body>
</html>

<?php
exit();
endif;
?>
<title>Add new recording project</title>
</head>
  <body>
  <div id="formWrap">
    <h1>Add new recording project</h1>
    <form method="post" action="updateProjectsList.php">
		<input type="text" name="subdomain" placeholder="Subdomain (Example: cs-test-01)">
		<input type="text" name="guid" placeholder="Tag id">
		<input type="text" name="partition" placeholder="Env (Example: cs-stage)">
      <input type="submit" name="submit" value="submit">
    </form>
	</div>
  </body>
</html>
