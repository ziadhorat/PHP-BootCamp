USE db_zmahomed;
SELECT count(*) AS 'nb_short-films' FROM film
WHERE duration < 43;
