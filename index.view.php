<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- 
  <style>
    header {
      background: lightgray;
      padding: 2em;
      text-align: center;
    }
  </style> -->

</head>

<body>

  <!-- <h1>
      <?php

      $name =  $_GET['name']; //coming from query string /?name=Miska
      echo "Hello $name";

      ?>
    </h1> -->


  <h1>
    <!-- "oneliner ish" -->
    <!-- <?php echo "Hello " . $_GET['name']; ?> -->
  </h1>

  <!-- returning/printing unordered list of names from array     -->
  <!-- <ul> -->
  <!-- <?php
        foreach ($names as $name) {
          echo "<li>$name</li>";
        }
        ?> -->

  <!-- one liner ish -->

  <!-- <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
    <?php endforeach; ?> -->

  <!-- assosiative key-value array -->

  <!-- <?php foreach ($person as $key => $feature) : ?>
        <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
    <?php endforeach; ?> -->
  <!-- </ul> -->
  <!-- homework -->
  <h1>Tasks to do:</h1>

  <!-- <ul>
    <?php foreach ($task as $heading => $value) : ?>
      <li>
        <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
      </li>
    <?php endforeach; ?>

  </ul> -->

<ul>
    <li>
      <strong>Name: </strong> <?= $task['title']; ?>
    </li>

    <li>
      <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>

    <li>
      <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>

    <li>
      <!-- true ? 'do something' : 'do someting else' -->
      <!-- this is turnery opereator, conditional get boolean as the answer -->
      <!-- <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> -->
      <!-- or can use a longer if/else statement for using icon for 'completed' -->
      <strong>Status: </strong>
      <?php 

        if($task['completed']) {
          echo '<span>&#9989;</span>';
        } else {
          echo 'Incomplete';
        }

      ?>
    </li>

</ul>
</body>

</html>