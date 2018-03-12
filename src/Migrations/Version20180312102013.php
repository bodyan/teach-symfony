<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180312102013 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__transponder AS SELECT id, longitude, tp_system, modulation, frequency, symbrate, polarization, fec FROM transponder');
        $this->addSql('DROP TABLE transponder');
        $this->addSql('CREATE TABLE transponder (id INTEGER NOT NULL, tp_system SMALLINT NOT NULL, modulation SMALLINT NOT NULL, frequency SMALLINT NOT NULL, symbrate SMALLINT NOT NULL, polarization SMALLINT NOT NULL, fec SMALLINT NOT NULL, satellite SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO transponder (id, satellite, tp_system, modulation, frequency, symbrate, polarization, fec) SELECT id, longitude, tp_system, modulation, frequency, symbrate, polarization, fec FROM __temp__transponder');
        $this->addSql('DROP TABLE __temp__transponder');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__transponder AS SELECT id, satellite, tp_system, modulation, frequency, symbrate, polarization, fec FROM transponder');
        $this->addSql('DROP TABLE transponder');
        $this->addSql('CREATE TABLE transponder (id INTEGER NOT NULL, tp_system SMALLINT NOT NULL, modulation SMALLINT NOT NULL, frequency SMALLINT NOT NULL, symbrate SMALLINT NOT NULL, polarization SMALLINT NOT NULL, fec SMALLINT NOT NULL, longitude SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO transponder (id, longitude, tp_system, modulation, frequency, symbrate, polarization, fec) SELECT id, satellite, tp_system, modulation, frequency, symbrate, polarization, fec FROM __temp__transponder');
        $this->addSql('DROP TABLE __temp__transponder');
    }
}
