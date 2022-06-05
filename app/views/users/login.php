
<?php
    require APPROOT . '/views/includes/header.php';
?>

<main class="form-signin mt-5">
  <form class="text-center" action="<?php echo URLROOT; ?>/users/login" method="POST">
    <img class="mb-4" src="<?php echo URLROOT .'/img/logo.png' ?> " alt="" width="90" height="90">
    <h1 class="h3 mb-3 fw-normal">Please Log in</h1>

    <div class="form-floating ">
      <input type="text" class="form-control" value="<?php echo $data['username'] ?>" name="username" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
      <div class="text-danger"><?php echo $data['usernameError'] ?></div>
    </div>

    <div class="form-floating mt-2">
      <input type="password" class="form-control"  name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <div class="text-danger"><?php echo $data['passwordError'] ?></div>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; PSU-ACC</p>
  </form>
</main>




<?php
    require APPROOT . '/views/includes/footer.php';
?>