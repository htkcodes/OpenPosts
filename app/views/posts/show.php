<?php require APPROOT . '/views/inc/header.php'; ?>
<br><br>
<h1><?php echo $data['post']->title;?></h1>
<p>
    <span>Written By <?php echo $data['user']->name ?> on <?php echo $data['post']->created_at?></span>

</p>
<p>
    <?php echo $data['post']->body;?>
</p>

<?php
if($data['post']->user_id == $_SESSION['user_id']) : ?>

<hr>
<a href="<?php echo URLROOT?>/posts/edit/<?php echo $data['post']->id;?>">edit</a>

<form action="<?php echo URLROOT?>/posts/delete/<?php echo $data['post']->id;?>" method="POST">
<input type="submit" value="delete">
</form>
<?php endif;?>
<?php require APPROOT . '/views/inc/footer.php'; ?>