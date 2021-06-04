
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

drop Database if exists `control`;

CREATE DATABASE IF NOT EXISTS `control` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `control`;

drop table if exists `control`.`usuario`;

create table if not exists `control`.`usuario`(
    `idusuario` int not null AUTO_INCREMENT,
    `Apaterno` VARCHAR(255) not null,
    `Amaterno` varchar(255) not null,
    `nombre` varchar(255) not null,
    `correo` varchar(255) not null,
    `pass` varchar(255) not null,
    PRIMARY KEY(`idusuario`))
    ENGINE = InnoDB;

DROP Table if exists `control`.`archivo`;

create table if not exists `control`.`archvio`(
    `idarchivo` int not null AUTO_INCREMENT,
    `nombre` varchar(555) not null,
    `fecha`  DATE NOT NULL,
    `url` varchar(850) not null,
    `idusuario` int not null,
    PRIMARY KEY(`idarchivo`),
    INDEX `fk_archivo_usuario1_idx` (`idusuario` ASC),
    CONSTRAINT `fk_archivo_usuario1`
     FOREIGN KEY(`idusuario`)
     REFERENCES `control`.`usuario` (`idusuario`)
     ON DELETE NO ACTION
     ON UPDATE NO ACTION)
ENGINE = InnoDB;

drop table if exists `control`.`reportes`;

create table if not exists `control`.`reportes`(
    `idreporte` int not null AUTO_INCREMENT,
    `fecha`  DATE NOT NULL,
    PRIMARY KEY(`idreporte`))
ENGINE= InnoDB;


drop table if exists  `control`.`edificio`;

create table if not exists `control`.`edificio`(
    `idedificio` int not null AUTO_INCREMENT,
    `nombre` varchar(255) not null,
    `descripcion` varchar(255) not null,
    PRIMARY KEY(`idedificio`))
    ENGINE = InnoDB;

drop table if exists `control`.`planta`;

create table if not exists `control`.`planta`(  
    `idplanta` int not null AUTO_INCREMENT,
    `Nplanta` int(11) not null,
    `idedificio` int not null,
    PRIMARY KEY(`idplanta`),
    INDEX `fk_planta_edificio1_idx`(`idedificio` ASC),
    CONSTRAINT `fk_planta_edificio1`
    FOREIGN KEY (`idedificio`)
    REFERENCES `control`.`edificio`(`idedificio`)
    on DELETE no ACTION
    ON UPDATE no action
) ENGINE = InnoDB;

drop table if exists `control`.`site`;

create table if not exists `control`.`site`(
    `idsite` int not null AUTO_INCREMENT,
    `nombre` varchar(255) not null,
    `idedificio` int not null,
    `idplanta` int not null,
    PRIMARY KEY(`idsite`),
    INDEX `fk_site_edificio1_idx`(`idedificio` ASC),
    INDEX `fk_site_planta1_idx`(`idplanta` ASC),
    CONSTRAINT `fk_site_edificio1`
    FOREIGN KEY(`idedificio`)
    REFERENCES `control`.`edificio`(`idedificio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_site_planta1`
    FOREIGN KEY(`idplanta`)
    REFERENCES `control`.`planta`(`idplanta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE=InnoDB;

drop table if exists `control`.`marca`;

create table if not exists `control`.`marca`(
    `idmarca` int not null AUTO_INCREMENT,
    `nombre` varchar(255) not null,
    PRIMARY KEY(`idmarca`))
ENGINE=InnoDB;

drop table if exists `control`.`tipo`;

create table if not exists `control`.`tipo`(
    `idtipo` int not null AUTO_INCREMENT,
    `tipo` varchar(255) not null,
    `descripcion` varchar(650) not null,
    PRIMARY KEY(`idtipo`))
ENGINE=InnoDB;

drop table if exists `control`.`zise`;

create table if not exists `control`.`size`(
    `idsize` int not null AUTO_INCREMENT,
    `size` varchar(255) not null,
    PRIMARY KEY(`idsize`))
ENGINE=InnoDB;

drop table if exists `control`.`imagen`;

create table if not exists `control`.`imagen`(
    `idimagen` int not null AUTO_INCREMENT,
    `URL` VARCHAR(650) not null,
    PRIMARY KEY(`idimagen`))
ENGINE = InnoDB;

drop table if exists `control`.`material`;

create table if not exists `control`.`material`(
    `idmaterial` int not null AUTO_INCREMENT,
    `nombre` varchar(255),
    `idtipo` int not null,
    `idsize` int not null,
    `idmarca` int not null,
    `idimagen` int not null, 
    `idsite` int not null,
    `cantidad` int not null,
    PRIMARY KEY (`idmaterial`),
    INDEX `fk_material_tipo1_idx`(`idtipo` ASC),
    INDEX `fk_material_size1_idx`(`idsize` ASC), 
    INDEX `fk_material_marca1_idx` (`idmarca` ASC),
    INDEX `fk_material_imagen1_idx`(`idimagen` ASC),
    INDEX `fk_material_site1_idx` (`idsite` ASC),
    CONSTRAINT `fk_material_tipo1`
     FOREIGN KEY(`idtipo`)
     REFERENCES `control`.`tipo` (`idtipo`)
     ON DELETE NO ACTION
     ON UPDATE NO ACTION,
    CONSTRAINT `fk_material_size1`
     FOREIGN KEY(`idsize`)
     REFERENCES `control`.`size` (`idsize`)
     ON DELETE NO ACTION 
     ON UPDATE NO ACTION,
    CONSTRAINT `fk_material_marca1`
     FOREIGN KEY(`idmarca`)
     REFERENCES `control`.`marca` (`idmarca`)
     ON DELETE NO ACTION 
     ON UPDATE NO ACTION,
    CONSTRAINT `fk_material_imagen1`
     FOREIGN KEY(`idimagen`)
     REFERENCES `control`.`imagen`(`idimagen`)
     ON DELETE NO ACTION
     ON UPDATE NO ACTION,
    CONSTRAINT `fk_material_site1`
     FOREIGN KEY(`idsite`)
     REFERENCES `control`.`site` (`idsite`)
     ON DELETE NO ACTION 
     ON UPDATE NO ACTION )
ENGINE = InnoDB;
