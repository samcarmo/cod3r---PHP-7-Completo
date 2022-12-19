SELECT *
  FROM cidades c
 INNER JOIN prefeitos p
	ON c.id = p.cidade_id;

SELECT *
  FROM cidades c
  LEFT JOIN prefeitos p
 	ON c.id = p.cidade_id;

SELECT *
  FROM cidades c
  LEFT OUTER JOIN prefeitos p
 	ON c.id = p.cidade_id;
 	
SELECT *
  FROM cidades c
  RIGHT JOIN prefeitos p
 	ON c.id = p.cidade_id;


-- O SELECT ABAIXO É EQUIVALENTE AO FULL JOIN NO MYSQL
SELECT *
  FROM cidades c
  LEFT OUTER JOIN prefeitos p
 	ON c.id = p.cidade_id

UNION
 
SELECT *
  FROM cidades c
  RIGHT JOIN prefeitos p
 	ON c.id = p.cidade_id;