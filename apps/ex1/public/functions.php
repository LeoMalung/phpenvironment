<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
    <?php include_once "../includes/styles.php" ?>
</head>

<body>
    <h1>functions</h1>
    <a href="/">Home</a>
    <?php
    //Add
    /**
     * Summary of add
     * @param int|float $x value 1
     * @param int|float $y value 2
     * @return float|int The sum of the 2 values
     */
    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }
    //Subtract
    function Subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }

    //Multiply
    function Multiply(int|float $x, int|float $y): int|float
    {
        return $x * $y;
    }
    //Divide
    function Divide(int|float $x, int|float $y): int|float
    {
        return $x / $y;
    }
    //Modulus
    function Modulus(int|float $x, int|float $y): int|float
    {
        return $x % $y;
    }
    ?>
    <div> 3 + 4 = <?= add(3, 4) ?></div>
    <div> 6 - 4 = <?= Subtract(6, 4) ?></div>
    <div> 6 * 4 = <?= Multiply(6, 4) ?></div>
    <div> 6 / 4 = <?= Divide(6, 4) ?></div>
    <div> 6 / 0 = 
        <?php 
            //Division by zero throws an error
            //echo Divide(6, 0); 
        ?>
    </div>
    <div> 6 mod 4 = <?= Modulus(6, 4) ?></div>


</body>

</html>