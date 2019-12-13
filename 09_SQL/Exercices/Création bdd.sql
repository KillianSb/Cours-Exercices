CREATE TABLE IF NOT EXISTS Accessoire (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    type_accessoires VARCHAR(40) NOT NULL,
    nombre INT NOT NULL,
    date_d_achat DATETIME NOT NULL,
    commentaire TEXT,
    PRIMARY KEY (id)
)
ENGINE=INNODB;

ALTER TABLE Identité

-- Insert animal

INSERT INTO identité (espece, sexe, date_de_naissance, commentaire, Nom)
VALUES ('hirondelle', 'F', '2009-05-12 22.10.22', 'Picore', 'Lily');