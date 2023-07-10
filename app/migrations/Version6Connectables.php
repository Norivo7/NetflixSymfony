<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version6Connectables extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE user ADD subscription VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE movie_category ADD CONSTRAINT FK_DABA824C8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_category ADD CONSTRAINT FK_DABA824C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26F12469DE2');
        $this->addSql('DROP INDEX IDX_1D5EF26F12469DE2 ON movie');
        $this->addSql('ALTER TABLE movie ADD liked_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE movie ADD active TINYINT(1) NOT NULL');

        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_1D5EF26F12469DE2 ON movie (category_id)');

        $this->addSql('CREATE TABLE movie_subuser (movie_id INT NOT NULL, subuser_id INT NOT NULL, INDEX IDX_74B0E6EC8F93B6FC (movie_id), INDEX IDX_74B0E6ECEC0C7B5A (subuser_id), PRIMARY KEY(movie_id, subuser_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_subuser ADD CONSTRAINT FK_74B0E6EC8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_subuser ADD CONSTRAINT FK_74B0E6ECEC0C7B5A FOREIGN KEY (subuser_id) REFERENCES subuser (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE movie_category');
        $this->addSql('DROP TABLE movie_subuser');
    }
}
