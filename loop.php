<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['number'];
        $sum = 0;


        if (is_numeric($input)) {
            $num = (int) $input;
        

        for ($i = 1; $i <= $num; $i++) {  // Loop from 1 to $num
            $sum += $i;
        }
        echo "The sum of numbers from 1 to $num is: $sum";

        
     } else{
        echo "Please enter a valid number.";
    }

    }
    ?>
</body>

</html>