<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220803095343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, fk_type_id INT NOT NULL, fk_status_id INT NOT NULL, fk_author_id INT NOT NULL, title VARCHAR(255) NOT NULL, picture VARCHAR(50) DEFAULT NULL, isbn VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_6A2CA10C3563B1BF (fk_type_id), INDEX IDX_6A2CA10CAAED72D (fk_status_id), INDEX IDX_6A2CA10C972C248B (fk_author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C3563B1BF FOREIGN KEY (fk_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CAAED72D FOREIGN KEY (fk_status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C972C248B FOREIGN KEY (fk_author_id) REFERENCES author (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE media');
    }
}
