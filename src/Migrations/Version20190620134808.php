<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190620134808 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_info ADD account_free VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD fast_delivery TINYINT(1) NOT NULL, CHANGE weight weight DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE product CHANGE weight weight DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE panier DROP fast_delivery, CHANGE weight weight INT NOT NULL');
        $this->addSql('ALTER TABLE product CHANGE weight weight INT NOT NULL');
        $this->addSql('ALTER TABLE user_info DROP account_free');
    }
}