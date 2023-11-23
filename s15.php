<!DOCTYPE html>
<html>
<head>
<title>String Operations</title>
</head>
<body>
<h1>String Operations</h1>
<form action="" method="post">
<label for="inputString">Enter a string:</label>
<input type="text" id="inputString" name="inputString" required><br><br>
<input type="submit" value="Perform Operations">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$inputString = $_POST["inputString"];
$first5Words = implode(' ', array_slice(str_word_count($inputString, 1), 0, 5));
$titleCaseString = ucwords(strtolower($inputString));
$paddedString = "" . $inputString . "";
$trimmedString = ltrim($inputString);
$reversedString = strrev($inputString);
echo "<h2>Results:</h2>";
echo "a. First 5 words: $first5Words<br>";
echo "b. String in title case: $titleCaseString<br>";
echo "c. Padded string: $paddedString<br>";
echo "d. String after removing leading whitespaces: $trimmedString<br>";
echo "e. Reversed string: $reversedString<br>";
}
?>
</body>
</html>
2 A) Generate a random array of 50 integers and display them using a line
chart, scatter
plot, histogram and box plot. Apply appropriate color, labels and styling options
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
ax2.scatter(x, random_integers, c='r', marker='s', label='Random Integers')
ax2.set_title('Scatter Plot')
ax2.set_xlabel('Index')
ax2.set_ylabel('Value')
ax2.legend()
plt.suptitle('Random Integer Data Visualization', fontsize=16)
plt.tight_layout()
plt.show()
Q.2 B) Create two lists, one representing subject names and the other
representing marks
obtained in those subjects. Display the data in a pie chart.
import matplotlib.pyplot as plt
subjects = ['Math', 'Science', 'English', 'History', 'Geography']
marks = [90, 85, 88, 92, 80]
plt.figure(figsize=(8, 8))
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140,
colors=plt.cm.tab20.colors)plt.title('Marks Obtained in Subjects')
plt.axis('equal')
plt.show()
