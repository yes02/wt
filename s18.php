<?php
$myArray = array(
'apple' => 3,
'banana' => 5,
'cherry' => 2,
'date' => 7
);
$reversedArray = array_flip($myArray);
$randomKeys = array_keys($myArray);
shuffle($randomKeys);
foreach ($myArray as $key => $value) {
${$key} = $value;
}
foreach ($myArray as $key => $value) {
echo "$key: $value\n";
}
echo "Individual Variables:\n";
echo "apple: $apple\n";
echo "banana: $banana\n";
echo "cherry: $cherry\n";
echo "date: $date\n";
?>
import pandas as pd
import matplotlib.pyplot as plt

# Read the Iris dataset
iris_data = pd.read_csv('iris.csv')

# Define the features and species
features = ['sepal_length', 'sepal_width', 'petal_length', 'petal_width']
species = ['setosa', 'versicolor', 'virginica']

# Create box plots for each feature across the three species
plt.figure(figsize=(12, 8))

for i, feature in enumerate(features, 1):
    plt.subplot(2, 2, i)
    plt.boxplot([iris_data[iris_data['species'] == sp][feature] for sp in species], labels=species)
    plt.title(f'Box Plot of {feature}')
    plt.xlabel('Species')
    plt.ylabel(feature)

plt.tight_layout()
plt.show()
===============================================================
B->
import pandas as pd

# Load the dataset into a DataFrame
df = pd.read_csv('heights_weights.csv')

# Print the first row
print("First Row:")
print(df.head(1))

# Print the last 5 rows
print("\nLast 5 Rows:")
print(df.tail(5))

# Print random 10 rows
print("\nRandom 10 Rows:")
print(df.sample(10))
