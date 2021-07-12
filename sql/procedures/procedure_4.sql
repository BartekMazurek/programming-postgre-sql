CREATE PROCEDURE fourthProcedure(_a INT) LANGUAGE plpgsql AS $$

BEGIN

    IF _a >= 5 THEN

        RAISE NOTICE 'Value is greater or equal 5', _a;

    ELSE

        RAISE NOTICE 'Value is lower than 5', _a;

    END IF;

END;
$$