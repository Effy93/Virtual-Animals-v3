<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190418192946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE attaque_classe (attaque_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_DC5EB371118FE712 (attaque_id), INDEX IDX_DC5EB3718F5EA509 (classe_id), PRIMARY KEY(attaque_id, classe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attaque_classe ADD CONSTRAINT FK_DC5EB371118FE712 FOREIGN KEY (attaque_id) REFERENCES attaque (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attaque_classe ADD CONSTRAINT FK_DC5EB3718F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attaque ADD element_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attaque ADD CONSTRAINT FK_95751B921F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('CREATE INDEX IDX_95751B921F1F2A24 ON attaque (element_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE attaque_classe');
        $this->addSql('ALTER TABLE attaque DROP FOREIGN KEY FK_95751B921F1F2A24');
        $this->addSql('DROP INDEX IDX_95751B921F1F2A24 ON attaque');
        $this->addSql('ALTER TABLE attaque DROP element_id');
    }
}
