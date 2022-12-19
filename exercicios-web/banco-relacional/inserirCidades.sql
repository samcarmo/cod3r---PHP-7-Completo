SELECT *
  FROM estados
 WHERE id = 28;

INSERT INTO cidades (nome, area, estado_id)
VALUES ('Campinhas', 795, 28);

INSERT INTO cidades (nome, area, estado_id)
VALUES ('Niteroi', 133.9, 22);

INSERT INTO cidades (nome, area, estado_id)
VALUES (
    'Caruaru',
    920.6,
    (SELECT id FROM estados WHERE sigla = 'PE')
    );

INSERT INTO cidades
     (nome, area, estado_id)
VALUES (
    'Juazeiro do Norte',
    248.2,
    (SELECT id FROM estados WHERE sigla = 'CE')
    );

SELECT * FROM cidades;