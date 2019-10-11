USE db_zmahomed;
SELECT REVERSE(RIGHT(phone_number, LENGTH(phone_number) - 1)) AS 'enohpelet'
FROM distrib
WHERE phone_number LIKE '05%';
