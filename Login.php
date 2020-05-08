<link
  href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/433cd78190.js"></script>
<script
  src="https://kit.fontawesome.com/27255d9b5e.js"
  crossorigin="anonymous"
></script>

<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first" style="margin-top: 10px; margin-bottom: 10px;">
      <i class="fas fa-user fa-5x"></i>
    </div>

    <!-- Login Form -->
    <form>
      <input
        type="text"
        id="login"
        class="fadeIn second"
        name="login"
        placeholder="login"
      />
      <input
        type="text"
        id="password"
        class="fadeIn third"
        name="login"
        placeholder="password"
      />
      <input type="submit" class="fadeIn fourth" value="Log In" />
    </form>

    <!-- Remind Passowrd
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->
  </div>
</div>
<?php 
	error_reporting(0);
	date_default_timezone_set('Asia/Kolkata');
	$cur_date = date('Y-m-d');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $emp->insertAttendance($attend); } ?>
