<head>

</head>
<body>
  <form id = "table" action="" method="POST">
  <input id="rows" name="rows">
  <input id="cols" name="cols">
  <input id="btn" type="submit" value="Сгенерировать таблицу" onclick="prevent()">
</form>
<script>
let btn = document.querySelector("#btn");
btn.addEventListener('click', prevent);
function prevente(e) {
  e.preventDefault();
}
</script>

<?php
$rows = $_POST['rows']; 
$cols = $_POST['cols']; 

echo '<table border="1">';
for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){                 
        echo '<td>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>