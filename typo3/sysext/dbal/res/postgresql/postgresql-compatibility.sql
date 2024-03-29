-- Add Compatibility operators
--
-- SQL below solves a particular case where in the search option in the list module (and possible other modules)
-- integers types are compared against text types. While this is perfectly 'valid' in MySQL, this is not valid in PostgreSQL.
--
-- An example of such SQL generated by TYPO3 is (see "uid" LIKE '%Old%'):
-- SELECT count(*) 			
-- FROM "tx_rvtcouponfeeds_programnames" 			
-- WHERE "pid" = 100 AND ("uid" LIKE '%Old%' OR "programname" LIKE '%Old%' OR "programurl" LIKE '%Old%')
-- 
-- The functions add compatibility operators for PostgreSQL to make sure comparison is possible and the SQL doesn't return an error.
--
-- Note: You may consider having a look at project mysqlcompat on http://pgfoundry.org/projects/mysqlcompat
--       and report in DBAL bugtracker if you need another compatibility operator added.
--
-- $Id$
-- R. van Twisk <typo3@rvt.dds.nl>


CREATE OR REPLACE FUNCTION t3compat_operator_like(t text, i integer) RETURNS boolean AS
$BODY$
BEGIN
	RETURN t LIKE i;
END
$BODY$
LANGUAGE 'plpgsql' VOLATILE
COST 1;

CREATE OR REPLACE FUNCTION t3compat_operator_like(i integer, t text) RETURNS boolean AS
$BODY$
BEGIN
	RETURN i::text LIKE t;
END
$BODY$
LANGUAGE 'plpgsql' VOLATILE
COST 1;

CREATE OR REPLACE FUNCTION t3compat_operator_eq(t text, i integer) RETURNS boolean AS
$BODY$
BEGIN
	RETURN i::text=t;
END
$BODY$
LANGUAGE 'plpgsql' VOLATILE
COST 1;

CREATE OR REPLACE FUNCTION t3compat_operator_eq(i integer, t text) RETURNS boolean AS
$BODY$
BEGIN
	RETURN i::text=t;
END
$BODY$
LANGUAGE 'plpgsql' VOLATILE
COST 1;

-- Operator for LIKE
CREATE OPERATOR ~~ (PROCEDURE = t3compat_operator_like, LEFTARG = integer, RIGHTARG = text);
CREATE OPERATOR ~~ (PROCEDURE = t3compat_operator_like, LEFTARG = text, RIGHTARG = integer);
-- Operator for Equality
CREATE OPERATOR = (PROCEDURE = t3compat_operator_eq, LEFTARG = integer, RIGHTARG = text);
CREATE OPERATOR = (PROCEDURE = t3compat_operator_eq, LEFTARG = text, RIGHTARG = integer);

-- LOCATE()
CREATE OR REPLACE FUNCTION locate(text, text, integer)
RETURNS integer AS $$
SELECT POSITION($1 IN SUBSTRING ($2 FROM $3)) + $3 - 1
$$ IMMUTABLE STRICT LANGUAGE SQL;

CREATE OR REPLACE FUNCTION locate(text, text)
RETURNS integer AS $$
SELECT locate($1, $2, 1)
$$ IMMUTABLE STRICT LANGUAGE SQL;

-- IFNULL
CREATE OR REPLACE FUNCTION ifnull(anyelement, anyelement)
RETURNS anyelement AS $$
SELECT COALESCE($1, $2)
$$ IMMUTABLE STRICT LANGUAGE SQL;

-- FIND_IN_SET
-- FIND_IN_SET()
CREATE OR REPLACE FUNCTION find_in_set(text, text)
RETURNS integer AS $$
DECLARE
	list text[];
	len integer;
BEGIN
	IF $2 = '' THEN
		RETURN 0;
	END IF;
	list := pg_catalog.string_to_array($2, ',');
	len := pg_catalog.array_upper(list, 1);
	FOR i IN 1..len LOOP
		IF list[i] = $1 THEN
			RETURN i;
		END IF;
	END LOOP;
	RETURN 0;
END;
$$ STRICT IMMUTABLE LANGUAGE PLPGSQL;

-- Remove Compatibility operators
--
--DROP OPERATOR ~~ (integer,text);
--DROP OPERATOR ~~ (text,integer);
--DROP OPERATOR = (integer,text);
--DROP OPERATOR = (text,integer);
--DROP FUNCTION t3compat_operator_like(integer, text);
--DROP FUNCTION t3compat_operator_like(text, integer);
--DROP FUNCTION t3compat_operator_eq(integer, text);
--DROP FUNCTION t3compat_operator_eq(text, integer);
--DROP FUNCTION locate(text, text);
--DROP FUNCTION locate(text, text, integer);
--DROP FUNCTION ifnull(anyelement, anyelement);

