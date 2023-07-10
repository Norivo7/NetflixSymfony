<?php

declare(strict_types=1);

namespace DoctrineMigrations\old;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221204259ProfileMigration extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE subuser (id INT AUTO_INCREMENT NOT NULL, subaccount_of_id INT NOT NULL, name LONGTEXT NOT NULL, INDEX IDX_5426A4C2218B5F92 (subaccount_of_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE subuser ADD CONSTRAINT FK_5426A4C2218B5F92 FOREIGN KEY (subaccount_of_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subuser ADD avatar VARCHAR(255) NOT NULL');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE subuser');
    }
}
