<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180310115223 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE channel (id INTEGER NOT NULL, approved SMALLINT NOT NULL, longitude SMALLINT NOT NULL, id_transponder SMALLINT NOT NULL, name VARCHAR(100) NOT NULL, sid SMALLINT NOT NULL, vpid SMALLINT NOT NULL, pmtpid SMALLINT NOT NULL, pcrpid SMALLINT NOT NULL, apid SMALLINT NOT NULL, provider VARCHAR(100) NOT NULL, video_type SMALLINT NOT NULL, hdsd SMALLINT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE channel');
    }
}
