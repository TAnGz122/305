<!DOCTYPE html>
<html>
<body>

<?php
$images = ["img1", "img10", "img11", "img1-1", "img1-2", "IMG123"];

echo "ก่อนการเรียงลำดับ:<br>";
echo implode(", ", $images);
echo "<br><br>";

sort($images);
echo "หลังใช้ sort():<br>";
echo implode(", ", $images);
echo "<br><br>";

natcasesort($images);
echo "หลังใช้ natsort():<br>";
echo implode(", ", $images);
echo "<br><br>";

?>


</body>
</html>