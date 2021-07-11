CREATE FUNCTION sixthFunction(a INT, b INT DEFAULT 0, c INT DEFAULT 0) RETURNS integer LANGUAGE sql AS $$

    SELECT $1 + $2 + $3;

$$