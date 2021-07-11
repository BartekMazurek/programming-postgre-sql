CREATE FUNCTION fourthFunction(first_table) RETURNS integer LANGUAGE sql AS $$

    SELECT $1.id * 100 AS result;

$$
