<?php
$firstName = 'Jayr';
$lastName = 'Gatbonton';
$age = 25;
$isStudent = true;

// if ($isStudent) {
//     $isStudent = "Yes";
// } else {
//     $isStudent = "No";
// }


$studentStatus = $isStudent ? "Yes" : "No";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Hello, my name is $firstName $lastName. I am $age years old. Student Status : $studentStatus";
    ?>
</body>

</html>