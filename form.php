<!DOCTYPE html>
<html>
<head>
  <title>Form Submit</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <form enctype="multipart/form-data" name="user_details" class="user_details" action="form-submit.php" method="post">
    <input type="text" name="name" class="name">
    <input type="file" name="file" class="file">
    <input type="submit" value="Submit" class="submit">
  </form>
  <script src="form.js"></script>
</body>
</html>