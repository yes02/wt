<!DOCTYPE html>
<html>
<head>
<title>String Operations</title>
</head>
<body>
<h2>String Operations</h2>
<form method="post">
<label for="inputString">Enter a string:</label>
<input type="text" name="inputString" id="inputString" required><br><br>
<label for="separator">Select a separator:</label>
<select name="separator" id="separator" required>
<option value="#">#</option>
<option value="|">|</option>
<option value="%">%</option>
</select><br><br>
<input type="submit" name="submit" value="Submit">
</form><?php
if (isset($_POST['submit'])) {
$inputString = $_POST['inputString'];
$selectedSeparator = $_POST['separator'];
$words = explode($selectedSeparator, $inputString);
$newSeparator = '***'; // Replace with your desired separator
$replacedString = str_replace($selectedSeparator, $newSeparator, $inputString);
$lastWord = end($words);
echo "<h3>Results:</h3>";
echo "Original String: $inputString<br>";
echo "Words separated by '$selectedSeparator': " . implode(", ", $words) . "<br>";
echo "String with separator replaced by '$newSeparator': $replacedString<br>";
echo "Last Word: $lastWord";
}
?>
</body>
</html>

Q.2 A)Generate a random array of 50 integers and display them using a line chart, scatter plot.
Apply appropriate color, labels and styling options.
import numpy as np
import matplotlib.pyplot as plt
random_integers = np.random.randint(0, 100, 50)
fig, (ax1, ax2) = plt.subplots(1, 2, figsize=(12, 5))
ax1.plot(random_integers, marker='o', linestyle='-', color='b', label='Random Integers')
ax1.set_title('Line Chart')
ax1.set_xlabel('Index')
ax1.set_ylabel('Value')
ax1.legend()
x = np.arange(1, 51)
ax2.scatter(x, random_integers, c='r', marker='s', label='Random Integers')ax2.set_title('Scatter Plot')
ax2.set_xlabel('Index')
ax2.set_ylabel('Value')
ax2.legend()
plt.suptitle('Random Integer Data Visualization', fontsize=16)
plt.tight_layout()
plt.show()
Q.2 B) Create two lists, one representing subject names and the other representing marks
obtained in those subjects. Display the data in a pie chart.
import matplotlib.pyplot as plt
subjects = ["Math", "Science", "History", "English", "Art"]
marks = [90, 85, 70, 78, 92]
# Create a pie chart
plt.figure(figsize=(8, 8))
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140, colors=['blue', 'green',
'orange', 'red', 'purple'])
plt.title("Subject-wise Marks Distribution")
plt.axis('equal') # Equal aspect ratio ensures that pie is drawn as a circle.
# Display the pie chart
plt.show()
Q2 c)
Write a program in python to perform following task (Use winequality-red.csv ) [5] Import
Dataset and do the followings: a) Describing the dataset b) Shape of the dataset c) Display
first 3 rows from dataset
import pandas as pd
# a) Import the dataset and describe it
data = pd.read_csv('winequality-red.csv')
description = data.describe()
# b) Display the shape of the datasetshape = data.shape
# c) Display the first 3 rows from the dataset
first_3_rows = data.head(3)
# Display the results
print("a) Description of the dataset:")
print(description)
print("\nb) Shape of the dataset:", shape)
print("\nc) First 3 rows from the dataset:")
print(first_3_rows)
