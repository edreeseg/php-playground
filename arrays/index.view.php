<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <header>
          <ul>
            <!-- Two ways to handle iterating through arrays to add HTML elements: -->
            <?php
              foreach($names as $name){
                echo "<li>$name</li>";
              }
            ?>
          </ul>
          <ul>
            <!-- This will be identical to the above -->
              <?php foreach($names as $name) : ?>
              <li><?= $name ?></li>
              <?php endforeach ?>
          </ul>
        </header>
  </body>
</html>