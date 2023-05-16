<?php 

$signup= false;
print_r($_POST);
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email'])and isset($_POST['phone'])) {
    $username=$_POST['username'];
    $passworld=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $error=User::signup($username, $passworld, $email, $phone);
    $signup=true;
}
?>
 <?php
if($signup) {
    if(!$error) {
        ?>
    <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>signup success</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
  </div>
  </main>
    <?php
    } else {
        ?>
        <main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>sigup fail</h1>
    <p class="lead">something went wrong <?=$error?></p>
  </div>
  </main>
  <?php
  }

 }else{
  ?>

<main class="form-signup">
 <form method="post" action="signup.php">     
   <img class="mb-4" src="/app/assets/brand/bootstrap-logo.svg" alt=""  height="80">
    <h1 class="h3 mb-3 fw-normal">Signup here</h1>
    
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com">
      <label for="floatingInputusername">Username</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com">
      <label for="floatingInputusername">Phone</label>
    </div>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name ="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>
</main>
<?}
?>