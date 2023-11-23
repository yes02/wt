<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="calculate.php" method="post">
<label for="number1">Enter first number:</label>
<input type="number" id="number1" name="number1" required><br><br>
<label for="number2">Enter second number:</label>
<input type="number" id="number2" name="number2" required><br><br><input type="submit" value="Calculate">
</form>
</body>
</html>
2)Php File
<?php
function calculateMod($num1, $num2) {
return $num1 % $num2;
}
function calculatePower($num1, $num2) {
return pow($num1, $num2);
}
function calculateSum($num1) {
return ($num1 * ($num1 + 1)) / 2;
}
function calculateFactorial($num2) {
if ($num2 == 0) {
return 1;
} else {
return $num2 * calculateFactorial($num2 - 1);
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
// Calculate mod
$modResult = calculateMod($number1, $number2);
echo "Mod of $number1 and $number2 is: $modResult<br>";// Calculate power
$powerResult = calculatePower($number1, $number2);
echo "Power of $number1 raised to $number2 is: $powerResult<br>";
// Calculate sum
$sumResult = calculateSum($number1);
echo "Sum of first $number1 numbers is: $sumResult<br>";
// Calculate factorial
$factorialResult = calculateFactorial($number2);
echo "Factorial of $number2 is: $factorialResult";
}
?>

Q.2 A) Write a python program to Display column-wise mean, and median for SOCRHeightWeight
dataset.
import pandas as pd
import numpy as np
df = pd.read_csv('C:\\Users\\shind\\OneDrive\\Desktop\\python+php\\slip no
10\\height_weight_dataset.csv', names=['Height', 'Weight'])
column_mean = df.mean(axis=0)
print("Column-wise mean:")
print(column_mean)
column_median = df.median(axis=0)
print("\nColumn-wise median:")
print(column_median)
Q.2 B) Q.2 B) Write a python program to compute sum of Manhattan distance between all pairs of
points.
def manhattan_distance(point1, point2):
return abs(point1[0] - point2[0]) + abs(point1[1] - point2[1])def sum_of_manhattan_distances(points):
total_distance = 0
for i in range(len(points)):
for j in range(i + 1, len(points)):
total_distance += manhattan_distance(points[i], points[j])
return total_distance
points = [(1, 2), (4, 6), (7, 9), (3, 1)]
total_manhattan_distance = sum_of_manhattan_distances(points)
print("Sum of Manhattan distances between all pairs of points:", total_manhattan_distance)
