<?php
# This process inserts a record. There is no display.

# 1. connect to database
$pdo = new PDO( 
    "mysql:host=".'10.8.30.49'.";"."dbname=".'gpcorser355wi20', 
    'gpcorser355wi20', 
    'yippydot'
);

# 2. assign html form info to variables
$l = $_POST['lname']; $f = $_POST['fname']; $p = $_POST['phone'];


# 3. build sql statement
$sql = "INSERT INTO Customers (fname, lname, email) VALUES ('$f', '$l', '$p')";

# 4. insert the info into the database
$pdo->query($sql); # execute the query
echo "<p>Your info has been added</p><br>";
