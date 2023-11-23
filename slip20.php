<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <form method="post" action="">
        Select Operation:
        <select name="operation">
            <option value="split">Split Array</option>
            <option value="sort">Sort by Values</option>
            <option value="filter">Filter Even Elements</option>
        </select><br>
        Enter Associative Array (comma separated key-value pairs): <input type="text" name="array_input"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST["operation"];
        $array_input = $_POST["array_input"];
        $assoc_array = [];

        // Convert input string to associative array
        $array_pairs = explode(",", $array_input);
        foreach ($array_pairs as $pair) {
            list($key, $value) = explode(":", $pair);
            $assoc_array[trim($key)] = trim($value);
        }

        switch ($operation) {
            case 'split':
                $chunks = array_chunk($assoc_array, 2, true);
                echo "<h2>Split Array:</h2>";
                echo "<pre>";
                print_r($chunks);
                echo "</pre>";
                break;
            case 'sort':
                asort($assoc_array);
                echo "<h2>Sorted Array (by Values):</h2>";
                echo "<pre>";
                print_r($assoc_array);
                echo "</pre>";
                break;
            case 'filter':
                $filtered_array = array_filter($assoc_array, function($value) {
                    return $value % 2 == 0;
                });
                echo "<h2>Filtered Even Elements:</h2>";
                echo "<pre>";
                print_r($filtered_array);
                echo "</pre>";
                break;
            default:
                echo "Invalid operation selected.";
        }
    }
    ?>
</body>
</html>
import numpy as np
import matplotlib.pyplot as plt

# Generate a random array of 50 integers
random_data = np.random.randint(0, 100, 50)

# Line Chart
plt.figure(figsize=(10, 4))
plt.plot(random_data, color='blue', marker='o', linestyle='-', linewidth=2, markersize=8)
plt.title('Line Chart', fontsize=14)
plt.xlabel('Index', fontsize=12)
plt.ylabel('Value', fontsize=12)
plt.grid(True, linestyle='--', alpha=0.5)
plt.show()

# Scatter Plot
plt.figure(figsize=(10, 4))
plt.scatter(range(50), random_data, color='green', label='Data Points', s=50)
plt.title('Scatter Plot', fontsize=14)
plt.xlabel('Index', fontsize=12)
plt.ylabel('Value', fontsize=12)
plt.legend()
plt.grid(True, linestyle='--', alpha=0.5)
plt.show()

# Histogram
plt.figure(figsize=(10, 4))
plt.hist(random_data, bins=10, color='purple', edgecolor='black', alpha=0.7)
plt.title('Histogram', fontsize=14)
plt.xlabel('Value', fontsize=12)
plt.ylabel('Frequency', fontsize=12)
plt.grid(axis='y', alpha=0.5)
plt.show()

# Box Plot
plt.figure(figsize=(10, 4))
plt.boxplot(random_data, vert=False, patch_artist=True, boxprops=dict(facecolor='orange'))
plt.title('Box Plot', fontsize=14)
plt.xlabel('Value', fontsize=12)
plt.grid(axis='x', linestyle='--', alpha=0.5)
plt.show()


import numpy as np
import matplotlib.pyplot as plt

# Generate a random array of 50 integers
random_data = np.random.randint(0, 100, 50)

# Add two outliers
random_data = np.append(random_data, [150, 160])

# Box Plot with outliers
plt.figure(figsize=(10, 4))
plt.boxplot(random_data, vert=False, patch_artist=True, boxprops=dict(facecolor='orange'))
plt.title('Box Plot with Outliers', fontsize=14)
plt.xlabel('Value', fontsize=12)
plt.grid(axis='x', linestyle='--', alpha=0.5)
plt.show()

