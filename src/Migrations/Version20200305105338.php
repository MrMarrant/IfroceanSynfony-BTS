<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200305105338 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE espece');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE plage_has_espece');
        $this->addSql('DROP TABLE plage_has_etude');
        $this->addSql('DROP TABLE plage_has_personne');
        $this->addSql('DROP INDEX Plage_Lieu_id ON etude');
        $this->addSql('DROP INDEX Plage_Lieu_id_2 ON etude');
        $this->addSql('DROP INDEX fk_Etude_Plage1_idx ON etude');
        $this->addSql('ALTER TABLE etude ADD id INT AUTO_INCREMENT NOT NULL, ADD titre_etude VARCHAR(255) NOT NULL, ADD totalpersonne_etude INT NOT NULL, ADD date_etude DATE NOT NULL, ADD angle1 INT DEFAULT NULL, ADD angle2 INT DEFAULT NULL, ADD angle3 INT DEFAULT NULL, ADD angle4 INT DEFAULT NULL, DROP idEtude, DROP titreEtude, DROP dateEtude, DROP totalpersonneEtude, DROP angle1Etude, DROP angle2Etude, DROP angle3Etude, DROP angle4Etude, DROP idPlage, DROP Plage_Lieu_id, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX fk_Plage_Lieu1_idx ON plage');
        $this->addSql('ALTER TABLE plage ADD id INT AUTO_INCREMENT NOT NULL, ADD superficietotale_plage INT NOT NULL, ADD nombredespece_plage INT DEFAULT NULL, ADD populationtotaledespece_plage INT DEFAULT NULL, ADD densiteespece_plage INT DEFAULT NULL, ADD id_lieu INT NOT NULL, DROP idPlage, DROP superficietotalePlage, DROP nombredespecePlage, DROP populationtotaledespecePlage, DROP densiteespecePlage, DROP idLieu, CHANGE nomplage nom_plage VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commune (idCommune INT AUTO_INCREMENT NOT NULL, nomCommune VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(idCommune)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE espece (espece_id INT NOT NULL, nomEspece VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(espece_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE lieu (idLieu INT NOT NULL, nomDepartement VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, idCommune INT NOT NULL, INDEX idCommune (idCommune), PRIMARY KEY(idLieu)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE metier (idMetier INT NOT NULL, libMetier VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(idMetier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personne (idPersonne INT NOT NULL, nomPersonne VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, prenomPersonne VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idMetier INT NOT NULL, motdePasse VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX fk_Personne_Metier1_idx (idMetier), PRIMARY KEY(idPersonne, idMetier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plage_has_espece (idPlage INT NOT NULL, idEspece INT NOT NULL, INDEX idPlage (idPlage, idEspece), PRIMARY KEY(idPlage, idEspece)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plage_has_etude (idPlage INT NOT NULL, idEtude INT NOT NULL, INDEX idPlage (idPlage), INDEX idEtude (idEtude), PRIMARY KEY(idPlage, idEtude)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plage_has_personne (Plage_idPlage INT NOT NULL, Plage_Lieu_departement_id INT NOT NULL, Plage_Espece_espece_id INT NOT NULL, Personne_idPersonne INT NOT NULL, INDEX fk_Plage_has_Personne_Personne1_idx (Personne_idPersonne), INDEX fk_Plage_has_Personne_Plage1_idx (Plage_idPlage, Plage_Lieu_departement_id, Plage_Espece_espece_id), PRIMARY KEY(Plage_idPlage, Plage_Lieu_departement_id, Plage_Espece_espece_id, Personne_idPersonne)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE etude MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE etude DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE etude ADD titreEtude VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD dateEtude DATE DEFAULT NULL, ADD totalpersonneEtude VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD angle1Etude VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD angle2Etude VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD angle3Etude VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD angle4Etude VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD idPlage INT NOT NULL, ADD Plage_Lieu_id INT NOT NULL, DROP id, DROP titre_etude, DROP date_etude, DROP angle1, DROP angle2, DROP angle3, DROP angle4, CHANGE totalpersonne_etude idEtude INT NOT NULL');
        $this->addSql('CREATE INDEX Plage_Lieu_id ON etude (Plage_Lieu_id)');
        $this->addSql('CREATE INDEX Plage_Lieu_id_2 ON etude (Plage_Lieu_id)');
        $this->addSql('CREATE INDEX fk_Etude_Plage1_idx ON etude (idPlage)');
        $this->addSql('ALTER TABLE etude ADD PRIMARY KEY (idEtude, idPlage, Plage_Lieu_id)');
        $this->addSql('ALTER TABLE plage MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE plage DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE plage ADD idPlage INT NOT NULL, ADD superficietotalePlage VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD nombredespecePlage INT DEFAULT NULL, ADD populationtotaledespecePlage INT DEFAULT NULL, ADD densiteespecePlage INT DEFAULT NULL, ADD idLieu INT NOT NULL, DROP id, DROP superficietotale_plage, DROP nombredespece_plage, DROP populationtotaledespece_plage, DROP densiteespece_plage, DROP id_lieu, CHANGE nom_plage nomPlage VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('CREATE INDEX fk_Plage_Lieu1_idx ON plage (idLieu)');
        $this->addSql('ALTER TABLE plage ADD PRIMARY KEY (idPlage, idLieu)');
    }
}
