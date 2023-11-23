<?php

// Define a function to calculate percentage
function calculate_percentage($os, $wt, $ds, $python, $java, $cn) {
    $total_marks = $os + $wt + $ds + $python + $java + $cn;
    $percentage = ($total_marks / 600) * 100;
    return round($percentage, 2);
}

// Read the data from the file
$file_path = 'student.dat';
$file_content = file($file_path, FILE_IGNORE_NEW_LINES);

// Display the data in tabular format
echo "<table border='1'>";
echo "<tr><th>Roll No</th><th>Name</th><th>OS</th><th>WT</th><th>DS</th><th>Python</th><th>Java</th><th>CN</th><th>Percentage</th></tr>";

foreach ($file_content as $line) {
    $data = explode(',', $line);
    list($roll_no, $name, $os, $wt, $ds, $python, $java, $cn) = array_map('intval', $data);

    $percentage = calculate_percentage($os, $wt, $ds, $python, $java, $cn);

    echo "<tr><td>$roll_no</td><td>$name</td><td>$os</td><td>$wt</td><td>$ds</td><td>$python</td><td>$java</td><td>$cn</td><td>$percentage%</td></tr>";
}

echo "</table>";

?>
import pandas as pd
import numpy as np

# 1. To create a DataFrame with columns name, age, and percentage, and add 10 rows.
data = {
    'name': ['Alice', 'Bob', 'Charlie', 'David', 'Emma', 'Frank', 'Grace', 'Henry', 'Ivy', 'Jack'],
    'age': [25, 30, 22, 35, 28, 24, 29, 31, 26, 23],
    'percentage': [85.5, 92.0, 78.3, 89.2, 76.8, 94.5, 81.0, 88.7, 90.5, 87.2]
}

df = pd.DataFrame(data)

# Display the DataFrame
print("1. DataFrame with 10 rows:")
print(df)
print("\n")

# 2. Print shape, number of rows-columns, data types, feature names, and description of the data.
print("2. DataFrame information:")
print(f"Shape: {df.shape}")
print(f"Number of rows and columns: {df.shape[0]} rows, {df.shape[1]} columns")
print("\nData types:")
print(df.dtypes)
print("\nFeature names:")
print(df.columns)
print("\nDescription:")
print(df.describe())
print("\n")

# 3. View basic statistical details of the data.
print("3. Basic statistical details:")
print(df.describe())
print("\n")

# 4. Add 5 rows with duplicate and missing values, add a column 'remarks' with empty values.
additional_data = {
    'name': ['Bob', 'David', 'Emma', 'Frank', 'Ivy', 'John', 'Kate', 'Bob', np.nan, 'Charlie'],
    'age': [30, np.nan, 28, 24, 26, 32, 27, 30, np.nan, 22],
    'percentage': [92.0, 89.2, np.nan, 94.5, 90.5, 85.0, 88.3, 92.0, 78.3, 75.6],
    'remarks': ['', '', '', '', '', '', '', '', '', '']
}

df_additional = pd.DataFrame(additional_data)
df = df.append(df_additional, ignore_index=True)

# Display the updated DataFrame
print("4. DataFrame with 15 rows (including duplicates and missing values):")
print(df)

