<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message');?>
<div class="row">
    <div class="col m12">
        <h1 class="left">Post</h1>
        <a href="<?php echo URLROOT ?>/posts/add" class="waves-effect waves-light btn add-post">Add posts</a>
    </div>

</div>

<?php foreach($data['posts'] as $post) : ?>
<div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $post->title;?></span>
              <p><?php echo $post->body?></p>
            </div>
            <div class="card-action">
              <span>Written By <?php echo $post->name ?> on <?php echo $post->writtenDate?></span>
              <a href="<?php echo URLROOT;?>/posts/show/<?php echo $post->postId;?>">More</a>
            </div>
          </div>
        </div>
      </div>
<?php endforeach;?>

<?php require APPROOT . '/views/inc/footer.php'; ?>