<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200503221809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, adress_id INT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, telephone INT NOT NULL, email VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, user_name VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, role TINYINT(1) DEFAULT NULL, INDEX IDX_34DCD1768486F9AC (adress_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_type (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realestate_type (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_557E272FC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE real_estate (id INT AUTO_INCREMENT NOT NULL, nature TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, project_type_id INT NOT NULL, project_state TINYINT(1) NOT NULL, INDEX IDX_2FB3D0EE535280F6 (project_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_user (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_project_id INT NOT NULL, in_out_status VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B4021E5179F37AE5 (id_user_id), UNIQUE INDEX UNIQ_B4021E51B3E79F4B (id_project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, titlr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1768486F9AC FOREIGN KEY (adress_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE realestate_type ADD CONSTRAINT FK_557E272FC54C8C93 FOREIGN KEY (type_id) REFERENCES realestate_type (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE535280F6 FOREIGN KEY (project_type_id) REFERENCES project_type (id)');
        $this->addSql('ALTER TABLE project_user ADD CONSTRAINT FK_B4021E5179F37AE5 FOREIGN KEY (id_user_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE project_user ADD CONSTRAINT FK_B4021E51B3E79F4B FOREIGN KEY (id_project_id) REFERENCES project (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE project_user DROP FOREIGN KEY FK_B4021E5179F37AE5');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE535280F6');
        $this->addSql('ALTER TABLE realestate_type DROP FOREIGN KEY FK_557E272FC54C8C93');
        $this->addSql('ALTER TABLE project_user DROP FOREIGN KEY FK_B4021E51B3E79F4B');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1768486F9AC');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE project_type');
        $this->addSql('DROP TABLE realestate_type');
        $this->addSql('DROP TABLE real_estate');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_user');
        $this->addSql('DROP TABLE city');
    }
}
