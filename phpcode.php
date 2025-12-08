<!DOCTYPE html>
<html>
    <head>
        <title>Student result</title>
</head>
<body>
    <h1>Student result using PHP</h1>

<?php
$name="Israt Jahan Chowdhury";

$marks=array(
    "JS"=>80,
    "PHP"=>90,
    "C#"=>85
);


echo "Student name: $name";

foreach ($marks => $score) {
    echo "$subject : $score <br>";
    $total += $score;
}

echo "<h3>Total Marks: $total</h3>";

if ($total >= 250) {
    echo "<h3 >Result: Excellent</h3>";
} else {
    echo "<h3 >Result: Good</h3>";
}
?>
</body>
</html>