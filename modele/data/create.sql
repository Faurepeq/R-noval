CREATE TABLE projet{
  id Int(6) UNSIGNED AUTO_INCREMENT primary key,
  nomProjet VARCHAR(30),
  avant VARCHAR(50) NOT NULL,
  apres VARCHAR(50) NOT NULL
  }

CREATE TABLE avis{
  numero int(6) UNSIGNED AUTO_INCREMENT primary key,
  nomUtilisateur VARCHAR (30) NOT NULL,
  texte text NOT NULL,
  etoiles int(1) UNSIGNED NOT NULL
  }
