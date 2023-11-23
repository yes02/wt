<!DOCTYPE html>
<html>
<head>
    <title>Spring Weather</title>
</head>
<body>

<?php
// Generate an array of 15 high temperatures
$high_temperatures = [68, 72, 74, 76, 80, 82, 84, 86, 88, 90, 88, 86, 82, 78, 75];

// Calculate average high temperature
$average_temperature = array_sum($high_temperatures) / count($high_temperatures);

// Find the five warmest temperatures
rsort($high_temperatures);
$warmest_temperatures = array_slice($high_temperatures, 0, 5);

// Display the results
echo "<h2>Spring Weather Statistics</h2>";
echo "Average High Temperature: " . round($average_temperature, 2) . " °F<br>";
echo "Five Warmest High Temperatures: " . implode(", ", $warmest_temperatures) . " °F";
?>

</body>
</html>
import pandas as pd
import matplotlib.pyplot as plt

# Import the dataset
iris_data = pd.read_csv('iris.csv')

# Get the frequency of the three species
species_frequency = iris_data['species'].value_counts()

# Create a bar plot
plt.figure(figsize=(8, 6))
species_frequency.plot(kind='bar', color=['blue', 'green', 'red'])
plt.title('Frequency of Iris Species')
plt.xlabel('Species')
plt.ylabel('Frequency')
plt.xticks(rotation=0)
plt.show()
==============================================================================
B->
import pandas as pd
import matplotlib.pyplot as plt

# Import the dataset
iris_data = pd.read_csv('iris.csv')

# Get the frequency of the three species
species_frequency = iris_data['species'].value_counts()

# Create a bar plot
plt.figure(figsize=(8, 6))
species_frequency.plot(kind='bar', color=['blue', 'green', 'red'])
plt.title('Frequency of Iris Species')
plt.xlabel('Species')
plt.ylabel('Frequency')
plt.xticks(rotation=0)
plt.show()
