USE db_zmahomed;
SELECT title, summary FROM film
WHERE LOWER(summary) LIKE '%vincent%'
ORDER BY id_film;
