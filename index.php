<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>
    header {
      background: lightgray;
      padding: 2em;
      text-align: center;
    }
  </style>

</head>

<body>

  <header>
    <!-- <h1>
      <?php

      $name =  $_GET['name']; //coming from query string /?name=Miska
      echo "Hello $name";

      ?>
    </h1> -->

    <!-- "oneliner ish" -->
    <h1>
      <?php echo "Hello " . $_GET['name']; ?>
    </h1>
  </header>

</body>

</html>