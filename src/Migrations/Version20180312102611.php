<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180312102611 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__channel AS SELECT id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd FROM channel');
        $this->addSql('DROP TABLE channel');
        $this->addSql('CREATE TABLE channel (id INTEGER NOT NULL, approved SMALLINT NOT NULL, name VARCHAR(100) NOT NULL COLLATE BINARY, sid SMALLINT NOT NULL, vpid SMALLINT NOT NULL, pmtpid SMALLINT NOT NULL, pcrpid SMALLINT NOT NULL, apid SMALLINT NOT NULL, provider VARCHAR(100) NOT NULL COLLATE BINARY, video_type SMALLINT NOT NULL, hdsd SMALLINT NOT NULL, satellite_id SMALLINT NOT NULL, transponder_id SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO channel (id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd) SELECT id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd FROM __temp__channel');
        $this->addSql('DROP TABLE __temp__channel');
        $this->addSql('CREATE TEMPORARY TABLE __temp__transponder AS SELECT id, tp_system, modulation, frequency, symbrate, polarization, fec, satellite FROM transponder');
        $this->addSql('DROP TABLE transponder');
        $this->addSql('CREATE TABLE transponder (id INTEGER NOT NULL, tp_system SMALLINT NOT NULL, modulation SMALLINT NOT NULL, frequency SMALLINT NOT NULL, symbrate SMALLINT NOT NULL, polarization SMALLINT NOT NULL, fec SMALLINT NOT NULL, satellite_id SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO transponder (id, tp_system, modulation, frequency, symbrate, polarization, fec, satellite_id) SELECT id, tp_system, modulation, frequency, symbrate, polarization, fec, satellite FROM __temp__transponder');
        $this->addSql('DROP TABLE __temp__transponder');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__channel AS SELECT id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd FROM channel');
        $this->addSql('DROP TABLE channel');
        $this->addSql('CREATE TABLE channel (id INTEGER NOT NULL, approved SMALLINT NOT NULL, name VARCHAR(100) NOT NULL, sid SMALLINT NOT NULL, vpid SMALLINT NOT NULL, pmtpid SMALLINT NOT NULL, pcrpid SMALLINT NOT NULL, apid SMALLINT NOT NULL, provider VARCHAR(100) NOT NULL, video_type SMALLINT NOT NULL, hdsd SMALLINT NOT NULL, longitude SMALLINT NOT NULL, id_transponder SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO channel (id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd) SELECT id, approved, name, sid, vpid, pmtpid, pcrpid, apid, provider, video_type, hdsd FROM __temp__channel');
        $this->addSql('DROP TABLE __temp__channel');
        $this->addSql('CREATE TEMPORARY TABLE __temp__transponder AS SELECT id, satellite_id, tp_system, modulation, frequency, symbrate, polarization, fec FROM transponder');
        $this->addSql('DROP TABLE transponder');
        $this->addSql('CREATE TABLE transponder (id INTEGER NOT NULL, tp_system SMALLINT NOT NULL, modulation SMALLINT NOT NULL, frequency SMALLINT NOT NULL, symbrate SMALLINT NOT NULL, polarization SMALLINT NOT NULL, fec SMALLINT NOT NULL, satellite SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO transponder (id, satellite, tp_system, modulation, frequency, symbrate, polarization, fec) SELECT id, satellite_id, tp_system, modulation, frequency, symbrate, polarization, fec FROM __temp__transponder');
        $this->addSql('DROP TABLE __temp__transponder');
    }
}
