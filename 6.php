<?php
$arr = [1, 2, 3];
if (isset($_GET['get']) && isset($arr[$_GET['get']])){
  echo $arr[$_GET['get']];
}
?>
<br>
<a href="?get=0">link 0</a>
<br>
<a href="?get=1">link 1</a>
<br>
<a href="?get=2">link 2</a>