<? 
$username = $_POST['email_address'];
$password = $_POST['password'];
$result = validate_credentials($username,$password);
if($result){
   ?><div class="container">
   <div class="jumbotron mt-3">
     <h1>Login Success</h1>
     <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    
   </div>
 </div><?

}else{
    ?>



?>
<main class="form-signin w-100 m-auto">
  <form method="post" action="login.php">
    <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/header_logo/1/logo-text.png" alt=""  height="50">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name= "email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 hvr-buzz" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>
<?php } ?>
