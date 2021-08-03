<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210728160957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX numero ON pokemon');
        $this->addSql('ALTER TABLE pokemon ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon_type CHANGE pokemon_numero pokemon_numero INT UNSIGNED DEFAULT NULL, CHANGE type_id type_id INT UNSIGNED DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP image');
        $this->addSql('CREATE INDEX numero ON pokemon (numero)');
        $this->addSql('ALTER TABLE pokemon_type CHANGE type_id type_id INT UNSIGNED NOT NULL, CHANGE pokemon_numero pokemon_numero INT UNSIGNED NOT NULL');
    }
}
