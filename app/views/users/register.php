<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
 <form class="col s12" action="<?php echo URLROOT; ?>/users/register" method="post" >
 <div class="row">
     <div class="input-field col s12">
    
       <input id="name" type="text"  name="name"class="validate" value="<?php echo $data['name']; ?>">
       <label for="name">Name</label>
       <span><?php echo $data['name_err']; ?></span>
     </div>
   </div>
     
      <div class="row">
     <div class="input-field col s12">
       <input id="email" type="email" class="validate" name="email" value="<?php echo $data['email']; ?>">
       <label for="email">Email</label>
       <span><?php echo $data['email_err']; ?></span>
     </div>
   </div>

    <div class="row">
     <div class="input-field col s12">
       <input id="password" type="password" class="validate" name="password" value="<?php echo $data['password']; ?>">
       <label for="password">Password</label>
       <span><?php echo $data['password_err']; ?></span>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s12">
       <input id="confirm_password" type="password" class="validate" name="confirm_password" value="<?php echo $data['confirm_password']; ?>">
       <label for="confirm_password">Confirm Password</label>
       <span><?php echo $data['confirm_password_err']; ?></span>
     </div>
    
   </div>
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
 <i class="material-icons right">send</i>
</button>

 </form>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>