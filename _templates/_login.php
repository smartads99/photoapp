<?php
$username =$_POST['user_name'];
$passworld =$_POST['u_password'];
$result=pass($username, $passworld);
if ($result) {
    ?>
  <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>login succes</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
  </div>
  </main>
<?php }
else {
    ?>
<main class="form-signin">
  <form method="post" action="login.php">
     
    <img class="mb-4" src="/app/assets/brand/bootstrap-logo.svg" alt=""  height="80">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="user_name" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name ="u_password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>
<?php
}
?>