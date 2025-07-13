<!DOCTYPE html>
<html>
<body>

<?php
function Thai($num) {
    $digits = ['ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า'];
    $result = "";

    
    for ($i = 0; $i < strlen($num); $i++) {
        $char = $num[$i];
        if (ctype_digit($char)) {
            $result .= $digits[(int)$char];
        }
    }

    return $result;
}


$input = "0814563972";
echo "$input";
echo "=> " . Thai($input);
?>




</body>
</html>
