<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813150157 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personnalites (id INT AUTO_INCREMENT NOT NULL, invention_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, date_naissance VARCHAR(30) NOT NULL, date_deces VARCHAR(30) NOT NULL, biographie LONGTEXT NOT NULL, img_url VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_411DF31D8A097851 (invention_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personnalites ADD CONSTRAINT FK_411DF31D8A097851 FOREIGN KEY (invention_id) REFERENCES invention (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE personnalites');
    }
}
