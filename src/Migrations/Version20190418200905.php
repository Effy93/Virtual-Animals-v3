<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190418200905 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_monstre (user_id INT NOT NULL, monstre_id INT NOT NULL, INDEX IDX_FA03D9AFA76ED395 (user_id), INDEX IDX_FA03D9AFDAF13697 (monstre_id), PRIMARY KEY(user_id, monstre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_monstre ADD CONSTRAINT FK_FA03D9AFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_monstre ADD CONSTRAINT FK_FA03D9AFDAF13697 FOREIGN KEY (monstre_id) REFERENCES monstre (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE accessoire');
        $this->addSql('ALTER TABLE user ADD argent INT NOT NULL');
        $this->addSql('ALTER TABLE jeux ADD tarif_id INT DEFAULT NULL, CHANGE description description VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50D357C0A59 FOREIGN KEY (tarif_id) REFERENCES tarif (id)');
        $this->addSql('CREATE INDEX IDX_3755B50D357C0A59 ON jeux (tarif_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE accessoire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(45) NOT NULL COLLATE utf8mb4_unicode_ci, bonus VARCHAR(80) NOT NULL COLLATE utf8mb4_unicode_ci, photo VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user_monstre');
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50D357C0A59');
        $this->addSql('DROP INDEX IDX_3755B50D357C0A59 ON jeux');
        $this->addSql('ALTER TABLE jeux DROP tarif_id, CHANGE description description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user DROP argent');
    }
}
