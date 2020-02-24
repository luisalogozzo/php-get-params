<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <div class="grey">

      <?php
      for ($i=0; $i < count($db["teachers"]); $i++) {
      // echo '<p>' . $db["teachers"][$i]['name'] . ' ' . $db["teachers"][$i]['lastname'] . '</p>' ;
         echo '<p>';
          foreach ($db['teachers'][$i] as $key) {
            echo ' ' . $key;
          }
          echo '</p>';
      } ?>
    </div>
    <div class="green">
      <?php for ($i=0; $i < count($db["pm"]); $i++) {
      echo '<p>' . $db["pm"][$i]['name'] . ' ' . $db["pm"][$i]['lastname'] . '</p>' ;

      } ?>
    </div>
  </body>
</html>
