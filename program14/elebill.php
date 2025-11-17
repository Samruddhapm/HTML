<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill Calculator</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Units Consumed: 
    <input type="number" name="units" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate Bill">
</form>

<?php
if (isset($_POST['submit'])) {

    $units = $_POST['units'];
    $bill = 0;


    if ($units <= 100) 
    {
        $bill = $units * 5;
        echo "<h5><marquee>you are using low elecricity keep going.</h5></marquee>";
    } 
    else if ($units <= 200)
     {
        $bill = (100* 5) + (($units - 10) * 7);
                echo "<h5>Try to maintain this electricity.</h5>";
    } 
    else {
        $bill = (100 * 5) + (100 * 7) + (($units - 200) * 100);
                echo "<h5><marquee>you are using high elecricity you should balance the electricity.</h5></marquee>";
    }

    echo "<h3>Total Electricity Bill: ₹ $bill</h3>";
}
?>

</body>
</html>

