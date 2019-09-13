<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <form  action="" method="POST">
  <input type="date" name="date">
  <input id="btn" type="submit" value="Вывести дату">
  </form>
  <br>
  <?php
$date = date_create($_POST['date']);
date_modify($date, '2 days');
date_modify($date, '3 days 1 month');
date_modify($date, '1 year');
date_modify($date, '-3 days');
echo date_format($date, 'd.m.Y');
?>
</body>
</html>

