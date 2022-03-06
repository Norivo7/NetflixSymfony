<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306161113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE movie_subuser (movie_id INT NOT NULL, subuser_id INT NOT NULL, INDEX IDX_74B0E6EC8F93B6FC (movie_id), INDEX IDX_74B0E6ECEC0C7B5A (subuser_id), PRIMARY KEY(movie_id, subuser_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_subuser ADD CONSTRAINT FK_74B0E6EC8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_subuser ADD CONSTRAINT FK_74B0E6ECEC0C7B5A FOREIGN KEY (subuser_id) REFERENCES subuser (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE movie_subuser');
    }
}
