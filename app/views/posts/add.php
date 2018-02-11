<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
 <form class="col s12" action="<?php echo URLROOT; ?>/posts/add" method="post" >
 <div class="row">
     <div class="input-field col s12">
    
       <input id="title" type="text"  name="title" class="validate" value="<?php echo $data['title']; ?>">
       <label for="title">Title</label>
       <span><?php echo $data['title_err']; ?></span>
     </div>
   </div>
     
   <div class="row">
     <div class="input-field col s12">
     <textarea id="textarea1" name="body" class="materialize-textarea"></textarea>
          <label for="textarea1"><?php echo $data['body']?></label>
          <span><?php echo $data['body_err']; ?></span>
     </div>
   </div>

  
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
 <i class="material-icons right">send</i>
</button>

 </form>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>