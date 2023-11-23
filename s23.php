<html>
<head>
<title>Stack sample form</title>
</head>
<body>
<form action="stack.php" method="POST">
<center>
<h3><input type="text" name="t1" maxlength="20"></h3>
<input type="radio" name="ch" value="1">Insert an element into the stack<br>
<input type="radio" name="ch" value="2">Delete an element from the stack<br>
<input type="radio" name="ch" value="3">Diplay the element of stack<br>
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
			array_push($array,"$str");
			var_dump($array);
			break;
		case 2:$last=array_pop($array);
			var_dump($array); 
			var_dump("Deleted element from stack:".$last);
			break;
		case 3:var_dump($array);
			break;
	}
?>
import pandas as pd
from sklearn.preprocessing import MinMaxScaler, StandardScaler, Binarizer

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

# c. Binarizing Data
binarizer = Binarizer(threshold=3.5)  # Threshold is set to 3.5, you can change it if needed
X_binarized = binarizer.transform(X)

# Print the results
print("Rescaled Data:")
print(X_rescaled[:5])  # Printing first 5 rows for demonstration

print("\nStandardized Data:")
print(X_standardized[:5])  # Printing first 5 rows for demonstration

print("\nBinarized Data:")
print(X_binarized[:5])  # Printing first 5 rows for demonstration
