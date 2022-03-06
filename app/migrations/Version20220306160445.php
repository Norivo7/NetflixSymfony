<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306160445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie ADD liked_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26FB4622EC2 FOREIGN KEY (liked_by_id) REFERENCES subuser (id)');
        $this->addSql('CREATE INDEX IDX_1D5EF26FB4622EC2 ON movie (liked_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26FB4622EC2');
        $this->addSql('DROP INDEX IDX_1D5EF26FB4622EC2 ON movie');
        $this->addSql('ALTER TABLE movie DROP liked_by_id');
    }
}
