
DROP TABLE IF EXISTS `tb_acme`;

CREATE TABLE `tb_acme` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `tb_usuario` WRITE;

INSERT INTO `tb_usuario` VALUES (1,'mauroczf','mauroczf@gmail.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef');

UNLOCK TABLES;
