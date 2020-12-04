<?php
  require_once 'vendor/autoload.php';
  require_once 'mix.php';
  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?=$config["projectName"]?></title>
    <link rel="stylesheet" href="<?=$config["appUrl"]?><?php echo mix('css/app.css'); ?>" />
  </head>

  <body>
    <div id="app">

    </div>
    <script src="<?=$config["appUrl"]?><?php echo mix('js/app.js'); ?>"></script>
  </body>
</html>
