<?php

// FETCH JSON INTO TABLE
$jsonString = '[{"id":4, "name": "Fourth test name"}, {"id": 5, "name": "Fifth test name"}, {"id": 6, "name": "Sixth test name"}]';
$sql = 'CALL public.seventhProcedure(:jsonData)';
$statement = $conn->prepare($sql);
$statement->bindValue('jsonData', $jsonString);
$statement->execute();
