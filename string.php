<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
hi
</head>
<body>
</body>

<?php

$sentence="the main body of book";
$sentence=strtolower($sentence);
$sentence=strtoupper($sentence);
$sentence = str_ireplace(['book'],['college'],$sentence);
//$sentence=strlen($sentence);
$sentence [1]="m";
echo "$sentence";

?>
</body>
</html>
