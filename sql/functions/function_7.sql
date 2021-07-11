CREATE FUNCTION seventhFunction(a INT) RETURNS SETOF first_table LANGUAGE sql AS $$

    SELECT * from public.first_table WHERE first_table.id > a;

$$