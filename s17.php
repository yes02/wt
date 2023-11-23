<?php
$associative_array = array("Sagar" => "31", "Vicky" => "41", "Leena" => "39", "Ramesh" => "40");

// a) Ascending order sort by Value
asort($associative_array);
echo "a) Ascending order sort by Value:\n";
print_r($associative_array);

// b) Ascending order sort by Key
ksort($associative_array);
echo "\nb) Ascending order sort by Key:\n";
print_r($associative_array);

// c) Descending order sort by Value
arsort($associative_array);
echo "\nc) Descending order sort by Value:\n";
print_r($associative_array);

// d) Descending order sort by Key
krsort($associative_array);
echo "\nd) Descending order sort by Key:\n";
print_r($associative_array);
?>
import matplotlib.pyplot as plt
from sklearn.datasets import load_iris

# Load the Iris dataset
iris = load_iris()
data = iris.data
target = iris.target

# Define feature names
feature_names = iris.feature_names

# Select two features for comparison (e.g., sepal length and sepal width)
feature1 = 0  # Sepal length
feature2 = 1  # Sepal width

# Create scatter plot
plt.figure(figsize=(8, 6))
plt.scatter(data[target == 0, feature1], data[target == 0, feature2], c='r', label='Setosa', alpha=0.7)
plt.scatter(data[target == 1, feature1], data[target == 1, feature2], c='g', label='Versicolor', alpha=0.7)
plt.scatter(data[target == 2, feature1], data[target == 2, feature2], c='b', label='Virginica', alpha=0.7)

# Set labels and title
plt.xlabel(feature_names[feature1])
plt.ylabel(feature_names[feature2])
plt.title(f'Scatter Plot: {feature_names[feature1]} vs {feature_names[feature2]}')

# Add legend
plt.legend()

# Show the plot
plt.show()


import pandas as pd

# Create a DataFrame
data = {
    'Name': ['John', 'Jane', 'Bob', 'Alice', 'Eve', 'Mark', 'Emily', 'David', 'Sarah', 'Michael'],
    'Age': [25, 30, 28, 27, 32, 29, 26, 31, 33, 30],
    'Salary': [60000, 70000, 65000, 75000, 80000, 70000, 72000, 65000, 68000, 75000],
    'Department': ['HR', 'IT', 'Sales', 'IT', 'Finance', 'IT', 'HR', 'Finance', 'Sales', 'IT']
}

df = pd.DataFrame(data)

# Print the DataFrame
print(df)
