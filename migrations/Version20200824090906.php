<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200824090906 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE anecdotes ADD relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE anecdotes ADD CONSTRAINT FK_B21764463256915B FOREIGN KEY (relation_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_B21764463256915B ON anecdotes (relation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE anecdotes DROP FOREIGN KEY FK_B21764463256915B');
        $this->addSql('DROP INDEX IDX_B21764463256915B ON anecdotes');
        $this->addSql('ALTER TABLE anecdotes DROP relation_id');
    }
}
