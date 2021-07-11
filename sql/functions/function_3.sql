CREATE FUNCTION thirdFunction(integer, integer) RETURNS integer LANGUAGE sql AS $$

    SELECT $1 * $2;

$$