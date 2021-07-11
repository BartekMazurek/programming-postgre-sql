CREATE FUNCTION secondFunction(a integer, b integer) RETURNS integer LANGUAGE sql AS $$

    SELECT a * b;

$$