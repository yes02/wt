<!DOCTYPE html>
<html>
<head>
    <title>File Operations</title>
</head>
<body>
    <form method="post" action="">
        Enter Filename: <input type="text" name="filename" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST["filename"];

        if (file_exists($filename)) {
            echo "<h2>File Operations for $filename:</h2>";

            // a) Display type of file
            $file_type = mime_content_type($filename);
            echo "Type of file: $file_type<br>";

            // b) Display last modification time of file
            $last_modification_time = date("F d Y H:i:s.", filemtime($filename));
            echo "Last Modification Time: $last_modification_time<br>";

            // c) Display the size of file
            $file_size = filesize($filename);
            echo "Size of file: $file_size bytes<br>";

            // d) Delete the file
            echo "<form method='post' action=''>
                    <input type='hidden' name='delete_filename' value='$filename'>
                    <input type='submit' name='delete' value='Delete'>
                  </form>";

            if (isset($_POST['delete'])) {
                $delete_filename = $_POST['delete_filename'];
                if (unlink($delete_filename)) {
                    echo "<p>File '$delete_filename' deleted successfully.</p>";
                } else {
                    echo "<p>Error deleting file '$delete_filename'.</p>";
                }
            }
        } else {
            echo "<p>File '$filename' does not exist.</p>";
        }
    }
    ?>
</body>
</html>
import numpy as np
import matplotlib.pyplot as plt

# Generate a random array of 50 integers
random_data = np.random.randint(1, 100, 50)

# Line Chart
plt.figure(figsize=(10, 4))
plt.subplot(2, 2, 1)
plt.plot(random_data, color='blue')
plt.title('Line Chart')
plt.xlabel('Index')
plt.ylabel('Value')

# Scatter Plot
plt.subplot(2, 2, 2)
plt.scatter(range(50), random_data, color='red')
plt.title('Scatter Plot')
plt.xlabel('Index')
plt.ylabel('Value')

# Histogram
plt.subplot(2, 2, 3)
plt.hist(random_data, bins=10, color='green', alpha=0.7)
plt.title('Histogram')
plt.xlabel('Value')
plt.ylabel('Frequency')

# Box Plot
plt.subplot(2, 2, 4)
plt.boxplot(random_data, vert=False, patch_artist=True)
plt.title('Box Plot')
plt.xlabel('Value')

# Adjust layout
plt.tight_layout()

# Show the plots
plt.show()
===========================================================================
B->
import matplotlib.pyplot as plt

# Define the subject names and marks obtained
subjects = ['Math', 'Science', 'English', 'History']
marks = [85, 90, 75, 80]

# Create a pie chart
plt.figure(figsize=(8, 8))
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140, colors=['#ff9999','#66b3ff','#99ff99','#ffcc99'])
plt.title('Subject-wise Marks Distribution')

# Display the pie chart
plt.show()
