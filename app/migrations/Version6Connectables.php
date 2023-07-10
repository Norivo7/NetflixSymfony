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
        $this->addSql('ALTER TABLE user ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_5426A4C2218B5F92 FOREIGN KEY (subaccount_of_id) REFERENCES user (id)');

        $this->addSql('ALTER TABLE movie_category ADD CONSTRAINT FK_DABA824C8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_category ADD CONSTRAINT FK_DABA824C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26F12469DE2');
        $this->addSql('DROP INDEX IDX_1D5EF26F12469DE2 ON movie');
        $this->addSql('ALTER TABLE movie ADD liked_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE movie ADD active TINYINT(1) NOT NULL');

        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_1D5EF26F12469DE2 ON movie (category_id)');

        $this->addSql('CREATE TABLE movie_profile (movie_id INT NOT NULL, profile_id INT NOT NULL, INDEX IDX_74B0E6EC8F93B6FC (movie_id), INDEX IDX_74B0E6ECEC0C7B5A (profile_id), PRIMARY KEY(movie_id, profile_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_profile ADD CONSTRAINT FK_74B0E6EC8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_profile ADD CONSTRAINT FK_74B0E6ECEC0C7B5A FOREIGN KEY (profile_id) REFERENCES profile (id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE video ADD season INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video ADD movie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C8F93B6FC ON video (movie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE movie_category');
        $this->addSql('DROP TABLE movie_profile');
    }
}
