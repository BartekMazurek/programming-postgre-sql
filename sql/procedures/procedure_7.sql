CREATE PROCEDURE seventhProcedure(_data JSON) LANGUAGE plpgsql AS $$

DECLARE

    _result JSON;
    _id     INT;
    _name   VARCHAR;

BEGIN

    FOR _result IN SELECT * FROM json_array_elements(_data)

        LOOP

            _id := (_result->>'id')::INTEGER;
            _name := (_result->>'name')::VARCHAR;

            INSERT INTO public.first_table (id, name, created)
            VALUES (_id, _name, now());

        END LOOP;
END;
$$