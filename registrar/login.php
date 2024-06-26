<?php require_once('../config.php') ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition lockscreen">
  <script>
    start_loader()
  </script>
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo base_url ?>"><strong><?php echo $_settings->info('name') ?></strong></a>
  </div>
  
  <div class="lockscreen-name"></div>

  
  <div class="lockscreen-item">
    
    <div class="lockscreen-image">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="System Image">
    </div>
    
    
    <form class="lockscreen-credentials" id="e-login">
      <div class="input-group">
        <input type="password" class="form-control" name="code" placeholder="Establishement Code">

        <div class="input-group-append">
          <button type="submit" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    

  </div>
  
  <div id="msg"></div>
  <div class="help-block text-center">
    Enter Establishement Code <br>
      <a href="<?php echo base_url ?>">Go to Portal</a>

  </div>
</div>



<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/script.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>