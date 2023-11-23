<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

<form method="post" action="">
    <?php
    $subjects = ['Subject 1', 'Subject 2', 'Subject 3', 'Subject 4', 'Subject 5'];

    foreach ($subjects as $index => $subject) {
        echo "$subject Marks: <input type='text' name='marks[$index]' required><br>";
    }
    ?>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST['marks'];
    $total_marks = array_sum($marks);
    $percentage = $total_marks / (count($marks) * 100) * 100;

    // Calculate grade
    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "<h2>Result:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr>";
    foreach ($marks as $index => $mark) {
        echo "<tr>
                <td>{$subjects[$index]}</td>
                <td>$mark</td>
              </tr>";
    }
    echo "</table>";

    echo "<br>Total Marks: $total_marks<br>";
    echo "Percentage: $percentage%<br>";
    echo "Grade: $grade";
}
?>

</body>
</html>

import matplotlib.pyplot as plt

# Create two lists representing subject names and marks
subjects = ['Math', 'Science', 'English', 'History']
marks = [85, 90, 75, 88]

# Create a pie chart
plt.figure(figsize=(12, 5))

# Pie Chart
plt.subplot(1, 2, 1)
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140, colors=['#ff9999','#66b3ff','#99ff99', '#ffcc99'])
plt.title('Subject-wise Marks Distribution')
plt.axis('equal')  # Equal aspect ratio ensures that pie is drawn as a circle.

# Bar Chart
plt.subplot(1, 2, 2)
plt.bar(subjects, marks, color=['#ff9999','#66b3ff','#99ff99', '#ffcc99'])
plt.title('Subject-wise Marks')
plt.xlabel('Subjects')
plt.ylabel('Marks')

plt.tight_layout()
plt.show()



import pandas as pd

# Create a DataFrame for students' information
data = {
    'Name': ['John', 'Jane', 'Bob', 'Alice', 'Eve'],
    'Graduation Percentage': [85, 90, 75, 88, 92],
    'Age': [22, 23, 21, 24, 22]
}

df = pd.DataFrame(data)

# Calculate average age and average graduation percentage
average_age = df['Age'].mean()
average_percentage = df['Graduation Percentage'].mean()

print(f"Average Age of Students: {average_age}")
print(f"Average Graduation Percentage: {average_percentage}")
