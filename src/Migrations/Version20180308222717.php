<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180308222717 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__satellites AS SELECT id, name, longitude FROM satellites');
        $this->addSql('DROP TABLE satellites');
        $this->addSql('CREATE TABLE satellites (id INTEGER NOT NULL, longitude SMALLINT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO satellites (id, name, longitude) SELECT id, name, longitude FROM __temp__satellites');
        $this->addSql('DROP TABLE __temp__satellites');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__satellites AS SELECT id, name, longitude FROM satellites');
        $this->addSql('DROP TABLE satellites');
        $this->addSql('CREATE TABLE satellites (id INTEGER NOT NULL, longitude SMALLINT NOT NULL, name CLOB NOT NULL COLLATE BINARY, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO satellites (id, name, longitude) SELECT id, name, longitude FROM __temp__satellites');
        $this->addSql('DROP TABLE __temp__satellites');
    }
}
