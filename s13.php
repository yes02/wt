<!DOCTYPE html>
<html>
<head>
<style>
.chessboard {
width: 400px;
height: 400px;
border-collapse: collapse;
}
.chessboard td {
width: 50px;
height: 50px;
text-align: center;
vertical-align: middle;
font-size: 24px;
}
.chessboard .even {
background-color: #f0d9b5;
}.chessboard .odd {
background-color: #b58863; /* Dark color */
}
</style>
</head>
<body>
<table class="chessboard">
<?php
for ($row = 1; $row <= 8; $row++) {
echo "<tr>";
for ($col = 1; $col <= 8; $col++) {
$cell_class = ($row + $col) % 2 == 0 ? "even" : "odd";
echo "<td class='$cell_class'></td>";
}
echo "</tr>";
}
?>
</table>
</body>
</html>
Q.2 A) Write a Python program to create a graph to find relationship between the petal length and
petal width.(Use iris.csv dataset)
import pandas as pd
import matplotlib.pyplot as plt
data = pd.read_csv("iris.csv")
# Extract petal length and petal width columns
petal_length = data["petal.length"]
petal_width = data["petal.width"]
plt.figure(figsize=(8, 6))
plt.scatter(petal_length, petal_width, c="blue", alpha=0.5)
plt.title("Relationship Between Petal Length and Petal Width")
plt.xlabel("Petal Length (cm)")
plt.ylabel("Petal Width (cm)")
plt.grid(True)
# Show the plot
plt.show()
Q.2 B) Write a Python program to find the maximum and minimum value of a given flattened
array
# Define a flattened array as a listflattened_array = [4, 1, 9, 6, 2, 8, 3, 5, 7]
# Find the maximum and minimum values using the max() and min() functions
maximum_value = max(flattened_array)
minimum_value = min(flattened_array)
# Print the results
print("Maximum value:", maximum_value)
print("Minimum value:", minimum_value)
