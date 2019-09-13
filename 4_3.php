<?php
$date = date_create($_POST['date']);
date_modify($date, '2 days');
date_modify($date, '3 days 1 month');
date_modify($date, '1 year');
date_modify($date, '-3 days');
$new_date = date_format($date, 'd.m.Y');
echo json_encode($new_date);
?>