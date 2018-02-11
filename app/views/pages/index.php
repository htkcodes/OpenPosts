<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
        <div class="col s12 m6 offset-m3 ">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $data['title']; ?></span>
              <p><?php echo $data['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
