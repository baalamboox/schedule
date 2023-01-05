CREATE DATABASE IF NOT EXISTS schedule;
use schedule;
CREATE TABLE IF NOT EXISTS categories_table(
    category_id INT NOT NULL AUTO_INCREMENT,
    category_name VARCHAR(255) NULL,
    category_description TEXT(255) NULL,
    category_insert DATETIME NULL DEFAULT now(),
    PRIMARY KEY (category_id)
);
CREATE TABLE IF NOT EXISTS contacts_table(
    contact_id INT NOT NULL AUTO_INCREMENT,
    category_id INT NOT NULL,
    contact_names VARCHAR(245) NULL,
    contact_first_surname VARCHAR(245) NULL,
    contact_second_surname VARCHAR(245) NULL,
    contact_phone_number VARCHAR(145) NULL,
    contact_email VARCHAR(245) NULL,
    contact_insert DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (contacts_id)
);
ALTER TABLE schedule.contacts_table ADD CONSTRAINT contacts_table_FK FOREIGN KEY (category_id) REFERENCES schedule.categories_table(category_id) ON DELETE CASCADE ON UPDATE CASCADE;