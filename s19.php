<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="post" action="">
        Enter a sentence: <input type="text" name="sentence" required><br>
        Enter a word: <input type="text" name="word" required><br>
        Operation:
        <select name="operation" required>
            <option value="delete">Delete</option>
            <option value="insert">Insert</option>
            <option value="replace">Replace</option>
        </select><br>
        Position: <input type="number" name="position" required><br>
        Characters/Word to Remove (for delete operation): <input type="number" name="remove_chars"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];
        $word = $_POST["word"];
        $operation = $_POST["operation"];
        $position = $_POST["position"];

        switch ($operation) {
            case 'delete':
                $remove_chars = $_POST["remove_chars"];
                $deleted_part = substr($sentence, $position, $remove_chars);
                $new_sentence = substr_replace($sentence, '', $position, $remove_chars);
                echo "Original Sentence: $sentence<br>";
                echo "Deleted Part: $deleted_part<br>";
                echo "Modified Sentence: $new_sentence";
                break;
            case 'insert':
                $new_sentence = substr_replace($sentence, $word, $position, 0);
                echo "Original Sentence: $sentence<br>";
                echo "Inserted Word: $word<br>";
                echo "Modified Sentence: $new_sentence";
                break;
            case 'replace':
                $new_sentence = substr_replace($sentence, $word, $position, strlen($word));
                echo "Original Sentence: $sentence<br>";
                echo "Replaced at Position $position with: $word<br>";
                echo "Modified Sentence: $new_sentence";
                break;
            default:
                echo "Invalid operation selected.";
        }
    }
    ?>
</body>
</html>
import pandas as pd
import numpy as np

# Task 1: Create a dataframe with name, age, and percentage
data = {
    'name': ['John', 'Jane', 'Bob', 'Alice', 'Eve', 'Mark', 'Emily', 'David', 'Sarah', 'Michael'],
    'age': [25, 30, 28, 27, 32, 29, 26, 31, 33, 30],
    'percentage': [78.5, 89.2, 67.8, 92.0, 81.3, 76.7, 88.9, 72.4, 94.1, 85.6]
}

df = pd.DataFrame(data)

# Task 2: Print shape, number of rows-columns, data types, feature names, and description
print(f"Shape of the DataFrame: {df.shape}")
print(f"Number of Rows: {len(df)}")
print(f"Number of Columns: {len(df.columns)}")
print("\nData Types:")
print(df.dtypes)
print("\nFeature Names:")
print(df.columns.tolist())
print("\nDescription:")
print(df.describe())

# Task 3: Add 5 rows with duplicate and missing values, and add a 'remarks' column
missing_data = pd.DataFrame({'name': [None, 'Lisa', 'John', 'Bob', 'Eve'],
                             'age': [35, None, None, 28, 33],
                             'percentage': [None, 77.2, 89.5, 66.9, None],
                             'remarks': ['Missing', 'Duplicate', 'Duplicate', 'Duplicate', 'Missing']})

df = df.append(missing_data, ignore_index=True)

# Print the updated DataFrame
print("\nUpdated DataFrame:")
print(df)
