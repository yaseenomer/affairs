<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


  <?php echo form_open_multipart(base_url('upgrades/Apply/t'))?>

  <input type="file" name="attachs[]" >
  <input type="submit" value="ok" >


 <?php echo form_close()?>

</body>
</html>