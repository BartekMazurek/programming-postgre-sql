CREATE PROCEDURE fifthProcedure(_a INT) LANGUAGE plpgsql AS $$

BEGIN

    CASE
        WHEN _a > 0 THEN
            RAISE NOTICE 'Value is greater than 0';
        WHEN _a < 0 THEN
            RAISE NOTICE 'Value is lower than 0';
        ELSE
            RAISE NOTICE 'Value is equal 0';
    END CASE;

END
$$