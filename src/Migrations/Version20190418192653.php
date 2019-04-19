<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190418192653 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE monstre (id INT AUTO_INCREMENT NOT NULL, race_id INT NOT NULL, classe_id INT NOT NULL, tarif_id INT DEFAULT NULL, nom VARCHAR(45) NOT NULL, description VARCHAR(80) NOT NULL, photo VARCHAR(255) NOT NULL, INDEX IDX_A20EC7A56E59D40D (race_id), INDEX IDX_A20EC7A58F5EA509 (classe_id), INDEX IDX_A20EC7A5357C0A59 (tarif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monstre_attaque (monstre_id INT NOT NULL, attaque_id INT NOT NULL, INDEX IDX_3AC71F84DAF13697 (monstre_id), INDEX IDX_3AC71F84118FE712 (attaque_id), PRIMARY KEY(monstre_id, attaque_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monstre_element (monstre_id INT NOT NULL, element_id INT NOT NULL, INDEX IDX_EEF25A2FDAF13697 (monstre_id), INDEX IDX_EEF25A2F1F1F2A24 (element_id), PRIMARY KEY(monstre_id, element_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monstre_habitat (monstre_id INT NOT NULL, habitat_id INT NOT NULL, INDEX IDX_9485B6FEDAF13697 (monstre_id), INDEX IDX_9485B6FEAFFE2D26 (habitat_id), PRIMARY KEY(monstre_id, habitat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE monstre ADD CONSTRAINT FK_A20EC7A56E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE monstre ADD CONSTRAINT FK_A20EC7A58F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE monstre ADD CONSTRAINT FK_A20EC7A5357C0A59 FOREIGN KEY (tarif_id) REFERENCES tarif (id)');
        $this->addSql('ALTER TABLE monstre_attaque ADD CONSTRAINT FK_3AC71F84DAF13697 FOREIGN KEY (monstre_id) REFERENCES monstre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monstre_attaque ADD CONSTRAINT FK_3AC71F84118FE712 FOREIGN KEY (attaque_id) REFERENCES attaque (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monstre_element ADD CONSTRAINT FK_EEF25A2FDAF13697 FOREIGN KEY (monstre_id) REFERENCES monstre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monstre_element ADD CONSTRAINT FK_EEF25A2F1F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monstre_habitat ADD CONSTRAINT FK_9485B6FEDAF13697 FOREIGN KEY (monstre_id) REFERENCES monstre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monstre_habitat ADD CONSTRAINT FK_9485B6FEAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE monstre_attaque DROP FOREIGN KEY FK_3AC71F84DAF13697');
        $this->addSql('ALTER TABLE monstre_element DROP FOREIGN KEY FK_EEF25A2FDAF13697');
        $this->addSql('ALTER TABLE monstre_habitat DROP FOREIGN KEY FK_9485B6FEDAF13697');
        $this->addSql('DROP TABLE monstre');
        $this->addSql('DROP TABLE monstre_attaque');
        $this->addSql('DROP TABLE monstre_element');
        $this->addSql('DROP TABLE monstre_habitat');
    }
}
