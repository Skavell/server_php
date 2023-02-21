<!DOCTYPE html>
<html>
<head>
    <title>Get Headers Result</title>
</head>
<body>
<h1>Get Headers Result</h1>
<textarea rows="10" cols="50">
      <?php
      $headers = get_headers('http://www.example.com');
      foreach ($headers as $header) {
          echo $header . "\n";
      }
      ?>
    </textarea>
</body>
</html>