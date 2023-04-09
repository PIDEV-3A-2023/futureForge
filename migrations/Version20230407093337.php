<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230407093337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX nom_categ ON category');
        $this->addSql('ALTER TABLE category CHANGE nom_categ nom_categ VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY fk_event_category');
        $this->addSql('DROP INDEX fk_event_category ON event');
        $this->addSql('ALTER TABLE event ADD categorie_id INT NOT NULL, DROP categorie');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7BCF5E72D FOREIGN KEY (categorie_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7BCF5E72D ON event (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category CHANGE nom_categ nom_categ VARCHAR(191) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX nom_categ ON category (nom_categ)');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7BCF5E72D');
        $this->addSql('DROP INDEX IDX_3BAE0AA7BCF5E72D ON event');
        $this->addSql('ALTER TABLE event ADD categorie VARCHAR(255) NOT NULL, DROP categorie_id');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT fk_event_category FOREIGN KEY (categorie) REFERENCES category (nom_categ)');
        $this->addSql('CREATE INDEX fk_event_category ON event (categorie)');
    }
}
