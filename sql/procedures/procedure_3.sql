CREATE PROCEDURE thirdProcedure() LANGUAGE plpgsql AS $$

BEGIN

    RAISE INFO 'Some info ...';
    RAISE NOTICE 'Some notice ...';
    RAISE WARNING 'Some warning ...';

END
$$