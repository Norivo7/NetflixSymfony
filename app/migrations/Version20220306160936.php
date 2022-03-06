<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306160936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subuser DROP FOREIGN KEY FK_5426A4C28F93B6FC');
        $this->addSql('DROP INDEX IDX_5426A4C28F93B6FC ON subuser');
        $this->addSql('ALTER TABLE subuser DROP movie_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subuser ADD movie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE subuser ADD CONSTRAINT FK_5426A4C28F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5426A4C28F93B6FC ON subuser (movie_id)');
    }
}
