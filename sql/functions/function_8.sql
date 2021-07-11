CREATE FUNCTION eightFunction() RETURNS TABLE(id INT, name VARCHAR) LANGUAGE sql AS $$

    SELECT id, name from public.first_table;

$$