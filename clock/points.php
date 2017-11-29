<!DOCTYPE html>
<html>
<head>
<title>Points Clock</title>
<script src=pointsclock.js></script>
<script src=moment.js></script>
<script src=timespinner.txt></script>
</head>
<body onload="startTime();", onload="initSpinner();">


<h1><div id="points"></div></h1>
<div id="txt"></div>

<form action="points.php">
Time to convert: <br>
<input type="time" name="ctime"><br>
Submit<input type="submit" name="submit">
</form>

<?php

    $_GET["ctime"];
    $ctime = 
    
    
?>



<?php
$date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('Y-m-d');
?>

</body>
</html>