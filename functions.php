<?php

// FIRST
$sql = 'SELECT public.firstFunction()';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
//print_r($result);

// SECOND - 2 ARGUMENTS
$sql = 'SELECT public.secondFunction(3, 4)';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
//print_r($result);

// THIRD - 2 ARGUMENTS
$sql = 'SELECT public.thirdFunction(3, 4)';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
//print_r($result);

// FOURTH - COMPOSITE FUNCTION
$sql = 'SELECT id, fourthFunction(first_table.*) FROM first_table';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

// FIFTH - FUNCTION WITH MULTIPLE OUTPUT PARAMETERS
$sql = 'SELECT public.fifthFunction(2, 3)';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);


// SIXTH - FUNCTION WITH DEFAULT VALUES
$sql = 'SELECT public.sixthFunction(100, 150)';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

// SEVENTH - RETURNS SET OF RESULTS FROM TABLE
$sql = 'SELECT * FROM seventhFunction(1)';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

// EIGHT - RETURNS TABLE
$sql = 'SELECT * FROM eightFunction()';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);
//print_r($result);