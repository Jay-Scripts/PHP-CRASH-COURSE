<!-- 
 ?php
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

    //echo "Hello, my name is $firstName $lastName. I am $age years old. Student Status : $studentStatus";
    ?>
</body>

</html> -->
<!-- 
/* ==========================================
========== PHP Activity 2: Operators ==========
========================================== */

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <?php
    // $productName = "Milk Tea";
    // $price = 120;
    // $quantity = 3;
    // $isDiscounted = true;

    // $subTotal = $price * $quantity;
    // $discountedAmount = $isDiscounted ? $subTotal * .90 : $subTotal;
    // $isDiscountApplied = $isDiscounted ? "Yes" : "No";
    // echo "          Product             : $productName <br>
    //                 Quantity            : $quantity <br>
    //                 Price per item      : $price <br>
    //                 Subtotal            : $subTotal <br>
    //                 Discount Applied    : $isDiscountApplied <br>
    //                 Final Total         : $discountedAmount";
    ?>
</body>

</html> -->

/* ==========================================
========== PHP Activity 3: Conditionals (if / else / elseif) ==========
========================================== */

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <?php
    $grade = "";
    $score = -1;

    if ($score <= 100 and $score >= 90) {
        $grade = "A";
    } elseif ($score <= 89 and $score >= 80) {
        $grade = "B";
    } elseif ($score <= 79 and $score >= 70) {
        $grade = "C";
    } elseif ($score <= 69 and $score >= 60) {
        $grade = "D";
    } elseif ($score <= 59 and $score >= 0) {
        $grade = "F";
    } else {
        $grade = "Invalid Grade!!";
    }

    echo 'Score : ' . $score . "<br>" . 'Grade : ' . $grade;

    ?>
</body>

</html>