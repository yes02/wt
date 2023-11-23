<!DOCTYPE html>
<html>
<head>
<title>Arithmetic Operation</title>
</head>
<body>
<h1>Arithmetic Operation</h1>
<form action="slip12.php" method="post">
<label for="num1">Enter first number:</label>
<input type="number" id="num1" name="num1" required><br><br>
<label for="num2">Enter second number:</label>
<input type="number" id="num2" name="num2" required><br><br>
<label for="operation">Select operation:</label><br>
<input type="radio" id="add" name="operation" value="add" required>
<label for="add">Addition</label><br><input type="radio" id="subtract" name="operation" value="subtract">
<label for="subtract">Subtraction</label><br>
<input type="radio" id="multiply" name="operation" value="multiply">
<label for="multiply">Multiplication</label><br>
<input type="radio" id="divide" name="operation" value="divide">
<label for="divide">Division</label><br><br>
<input type="submit" value="Calculate">
</form>
</body>
</html>
PHP FILE:
<?php
function performOperation($num1, $num2, $operation) {
switch ($operation) {
case 'add':
return $num1 + $num2;
case 'subtract':
return $num1 - $num2;
case 'multiply':
return $num1 * $num2;
case 'divide':
if ($num2 != 0) {
return $num1 / $num2;
} else {
return "Division by zero is not allowed.";
}
default:
return "Invalid operation.";
}}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];
$result = performOperation($num1, $num2, $operation);
echo "Result: " . $result;
}
?>
Q.2 A) Generate a random array of 50 integers and display them using a line chart,
scatter plot, histogram and box plot. Apply appropriate color, labels and styling options
import numpy as np
import matplotlib.pyplot as plt
# Generate a random array of 50 integers
random_array = np.random.randint(0, 100, 50)
# Line chart
plt.figure()
plt.plot(random_array, color='blue')
plt.title('Line Chart')
plt.xlabel('Index')
plt.ylabel('Value')
plt.show()
# Scatter plot
plt.figure()
plt.scatter(range(len(random_array)), random_array, color='red')
plt.title('Scatter Plot')
plt.xlabel('Index')plt.ylabel('Value')
plt.show()
# Histogram
plt.figure()
plt.hist(random_array, bins=10, color='green', edgecolor='black')
plt.title('Histogram')
plt.xlabel('Value')
plt.ylabel('Frequency')
plt.show()
# Box plot
plt.figure()
plt.boxplot(random_array, vert=False)
plt.title('Box Plot')
plt.xlabel('Value')
plt.show()
Q.2 B) Write a Python program to create data frame containing column name, salary, department
add 10 rows with some missing and duplicate values to the data frame. Also drop all null and
empty values. Print the modified data frame
import pandas as pd
import numpy as np
data = {
'Employee': ['John', 'Alice', 'Bob', 'John', 'Alice', 'Bob', 'Emma', 'John', 'Alice', 'Emma'],
'Salary': [50000, np.nan, 60000, 55000, 52000, np.nan, np.nan, 58000, 54000, 65000],
'Department': ['HR', 'IT', 'Finance', 'Finance', 'HR', 'IT', 'Finance', 'HR', 'IT', 'Finance']
}
df = pd.DataFrame(data)
print("Original DataFrame:")
print(df)additional_data = {
'Employee': ['John', 'Alice', 'Bob', 'John', 'Alice', 'Emma', 'Emma', 'Alice', 'John', 'Bob'],
'Salary': [48000, np.nan, 62000, 54000, 51000, 63000, np.nan, np.nan, 59000, np.nan],
'Department': ['HR', 'IT', 'Finance', 'Finance', 'HR', 'Finance', 'Finance', 'IT', 'HR', 'Finance']
}
additional_df = pd.DataFrame(additional_data)
df = pd.concat([df, additional_df], ignore_index=True)
df.dropna(inplace=True)
print("\nModified DataFrame after dropping null and empty values:")
print(df)
