<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141128183429 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('ALTER TABLE phrase ADD medium_header VARCHAR(50) NOT NULL, ADD medium_paragraph VARCHAR(50) NOT NULL, ADD bottom_paragraph VARCHAR(50) NOT NULL, DROP text_right_top_h3, DROP text_right_top_p, DROP text_right_bottom_p, CHANGE text_left_top_h1 main_header VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('ALTER TABLE Phrase ADD text_right_top_h3 VARCHAR(50) NOT NULL, ADD text_right_top_p VARCHAR(50) NOT NULL, ADD text_right_bottom_p VARCHAR(50) NOT NULL, DROP medium_header, DROP medium_paragraph, DROP bottom_paragraph, CHANGE main_header text_left_top_h1 VARCHAR(10) NOT NULL');
    }
}
