  <nav>
    <div class="nav-wrapper">
      <a href="<?php echo URLROOT; ?>" class="brand-logo"><?php echo SITENAME; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if(isset($_SESSION['used_id'])):?>
        <li><a href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
<?php else :?>
        <li><a href="<?php echo URLROOT; ?>">Home</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
        <li><a href="<?php echo URLROOT; ?>/users/register">Register</a></li>
        <li><a href="<?php echo URLROOT; ?>/users/login">Login</a></li>
<?php endif;?>
      </ul>
    </div>
  </nav>