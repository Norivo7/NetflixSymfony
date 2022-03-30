<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330162507 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD movie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C8F93B6FC ON video (movie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C8F93B6FC');
        $this->addSql('DROP INDEX IDX_7CC7DA2C8F93B6FC ON video');
        $this->addSql('ALTER TABLE video DROP movie_id');
    }
}
