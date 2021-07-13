<?php

// GET DATA FROM VIEW
$sql = 'SELECT * FROM public.v_first_table';
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

// UPDATE TABLE DATA THROUGH VIEW
// VIEW UPDATE NOT POSSIBLE IF DEFINITION CONTAINS:
// JOIN, GROUP BY, HAVING, LIMIT, DISTINCT, UNION, INTERSECT, EXCEPT, OFFSET, SUM, COUNT, MIN, MAX, AVG
$sql = 'UPDATE public.v_first_table SET name = :name WHERE id = :id';
$statement = $conn->prepare($sql);
$statement->bindValue('name', 'New Test name 1');
$statement->bindValue('id', 1);
$statement->execute();


// REFRESH MATERIALIZED VIEW
$sql = 'REFRESH MATERIALIZED VIEW mv_first_table';
$statement = $conn->prepare($sql);
$statement->execute();
