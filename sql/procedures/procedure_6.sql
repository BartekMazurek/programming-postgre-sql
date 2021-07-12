CREATE PROCEDURE sixthProcedure() LANGUAGE plpgsql AS $$

DECLARE

    _record RECORD;

BEGIN

    FOR _record IN SELECT id, name FROM public.first_table

    LOOP

        RAISE NOTICE 'Record id %, record % name', _record.id, _record.name;

    END LOOP;

END
$$