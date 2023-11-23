
<html>
<head>
<title>Queue sample form</title>
</head>
<body>
<form action="queue.php" method="POST">
<center>
<h3><input type="text" name="t1" maxlength="20"></h3>
<input type="radio" name="ch" value="1">Insert an element into the queue<br>
<input type="radio" name="ch" value="2">Delete an element from the queue<br>
<input type="radio" name="ch" value="3">Diplay the element of queue<br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</center>
</form>
</html>
<?php
	$str=$_POST['t1'];
	$op=$_POST['ch'];
	$array=array("orange","banana","apple","mango");
	switch($op)
	{
		case 1:echo "String is:$str<br>";
			array_unshift($array,"$str");
			var_dump($array);
			break;
		case 2:$first=array_shift($array);
			var_dump($array); 
			var_dump("Deleted element from queue:".$first);
			break;
		case 3:var_dump($array);
			break;
	}
?>
import pandas as pd
from sklearn.preprocessing import MinMaxScaler, StandardScaler, Normalizer

# Load the dataset
data = pd.read_csv('winequality-red.csv')

# Separate the features (X) from the target variable (y) if needed
# Assuming the target variable is in a column named 'quality'
X = data.drop('quality', axis=1)
y = data['quality']

# a. Rescaling using MinMaxScaler
scaler = MinMaxScaler()
X_rescaled = scaler.fit_transform(X)

# b. Standardizing Data
std_scaler = StandardScaler()
X_standardized = std_scaler.fit_transform(X)

# c. Normalizing Data
normalizer = Normalizer()
X_normalized = normalizer.fit_transform(X)

# Print the results
print("Rescaled Data:")
print(X_rescaled[:5])  # Printing first 5 rows for demonstration

print("\nStandardized Data:")
print(X_standardized[:5])  # Printing first 5 rows for demonstration

print("\nNormalized Data:")
print(X_normalized[:5])  # Printing first 5 rows for demonstration
