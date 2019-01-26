<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>TD</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="td.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/css/ui.css">
</head>
<body>
  <?php include('inc/headerUI.php')?>

  <main id="main">
    <div id="test"></div>
    <div class="page-wrapper flex-container">
      <canvas id="game-canvas" width="1000" height="600">
        Your browser does not support the HTML5 canvas tag.
      </canvas>
      <?php include('inc/gamePanel.php');?>
    </div>
  </main>
  <?php include('inc/footerUI.php')?>  
  <script src="td.js" ></script>
</body>
</html>