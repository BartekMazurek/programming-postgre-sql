CREATE PROCEDURE firstProcedure(_a INT) LANGUAGE plpgsql AS $$

DECLARE

    _result INT := 0;

BEGIN

    _result := _result + _a;

    RAISE NOTICE 'Result value %', _result;

END;
$$