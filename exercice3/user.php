<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice3-user</title>
  </head>
  <body>
    <?php
      if(!empty($_GET['firstname']) && !empty($_GET['name'])){
        echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['name'] ;
      }else{
        echo 'données mal saisis';
      }
    ?>
  </body>
</html>
