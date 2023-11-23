<!DOCTYPE html>
<html>
<head>
    <title>Append Files</title>
</head>
<body>
    <form method="post" action="">
        Source File: <input type="text" name="source_file" required><br>
        Destination File: <input type="text" name="destination_file" required><br>
        <input type="submit" value="Append">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $source_file = $_POST["source_file"];
        $destination_file = $_POST["destination_file"];

        if (file_exists($source_file)) {
            $source_content = file_get_contents($source_file);

            if (file_put_contents($destination_file, $source_content, FILE_APPEND)) {
                echo "<p>Content appended successfully!</p>";
            } else {
                echo "<p>Error appending content.</p>";
            }
        } else {
            echo "<p>Source file does not exist.</p>";
        }
    }
    ?>
</body>
</html>
import pandas as pd
import matplotlib.pyplot as plt

# Load the dataset
data = pd.read_csv('iris.csv')

# Get the frequency of each species
species_frequency = data['species'].value_counts()

# Create a bar plot
plt.figure(figsize=(8, 6))
species_frequency.plot(kind='bar', color=['blue', 'green', 'red'])
plt.title('Frequency of Iris Species')
plt.xlabel('Species')
plt.ylabel('Frequency')
plt.xticks(rotation=0)  # Rotate x-axis labels if needed
plt.show()
============================================================
B->
import seaborn as sns
import matplotlib.pyplot as plt

# Load Iris dataset from seaborn
iris = sns.load_dataset('iris')

# Create a histogram for each species
sns.histplot(data=iris, x='sepal_length', hue='species', element='step', stat='density', common_norm=False, kde=True)
sns.histplot(data=iris, x='sepal_width', hue='species', element='step', stat='density', common_norm=False, kde=True)
sns.histplot(data=iris, x='petal_length', hue='species', element='step', stat='density', common_norm=False, kde=True)
sns.histplot(data=iris, x='petal_width', hue='species', element='step', stat='density', common_norm=False, kde=True)

# Set the title and show the plot
plt.suptitle("Histogram of Iris Data by Species")
plt.show()
