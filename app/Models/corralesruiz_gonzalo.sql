
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `corralesruiz_gonzalo` DEFAULT CHARACTER SET utf8mb4 ;
USE `corralesruiz_gonzalo` ;


CREATE TABLE IF NOT EXISTS `corralesruiz_gonzalo`.`perfiles` (
  `id_perfiles` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_perfiles`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE IF NOT EXISTS `corralesruiz_gonzalo`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `usuario` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(100) NOT NULL,
  `perfil_id` INT(11) NOT NULL DEFAULT 2,
  `baja` VARCHAR(2) NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`id_usuario`),
  INDEX `perfil_id` (`perfil_id` ASC) ,
  CONSTRAINT `usuario_ibfk_1`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `corralesruiz_gonzalo`.`perfiles` (`id_perfiles`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `perfiles`(`id_perfiles`, `descripcion`) VALUES (NULL,'admin'), (NULL,'cliente');

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES ('1', 'Gonzalo', 'Admin', 'UserAdmin', 'gonzalo@admin.com', '123456', '1', 'NO'), ('2', 'Gonzalo', 'Cliente', 'UserCliente', 'gonzalo@cliente.com', '123456', '2', 'NO'), ('3', 'Gonzalo', 'Prueba1', 'UserPrueba1', 'gonzalo@prueba1.com', '123456', '2', 'NO'), ('4', 'Gonzalo', 'Prueba2', 'UserPrueba2', 'gonzalo@prueba2.com', '123456', '2', 'NO');