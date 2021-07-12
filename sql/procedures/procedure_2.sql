CREATE PROCEDURE secondProcedure() LANGUAGE plpgsql AS $$

DECLARE

    _constant_result CONSTANT INT := 50;
    _result INT := 100;

BEGIN

    RAISE NOTICE 'Procedure result value %', _result;
    RAISE NOTICE 'Procedure constant result value %', _constant_result;

        DECLARE

            _result INT := 50;

            BEGIN

                RAISE NOTICE 'Sub-procedure result value %', _result;

            END;

    RAISE NOTICE 'Final result value %', _result;

END;
$$
