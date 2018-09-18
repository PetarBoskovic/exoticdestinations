CREATE SCHEMA `exotic` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `exotic`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `exotic`.`destinations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  `price` INT NULL,
  `img_path` VARCHAR(45) NULL,
  `date_from` DATETIME NULL,
  `date_to` DATE NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `exotic`.`reservations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NULL,
  `destination_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_reservations_1_idx` (`user_id` ASC),
  INDEX `fk_reservations_2_idx` (`destination_id` ASC),
  CONSTRAINT `fk_reservations_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `exotic`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservations_2`
    FOREIGN KEY (`destination_id`)
    REFERENCES `exotic`.`destinations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

    CREATE TABLE `exotic`.`wishlist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NULL,
  `destination_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_wishlist_1_idx` (`user_id` ASC),
  INDEX `fk_wishlist_2_idx` (`destination_id` ASC),
  CONSTRAINT `fk_wishlist_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `exotic`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wishlist_2`
    FOREIGN KEY (`destination_id`)
    REFERENCES `exotic`.`destinations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


