-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para u327012897_almox
CREATE DATABASE IF NOT EXISTS `u327012897_almox` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `u327012897_almox`;

-- Copiando estrutura para tabela u327012897_almox.vtr_mantipo
CREATE TABLE IF NOT EXISTS `vtr_mantipo` (
  `vtrmantipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `vtrmantipo` varchar(50) NOT NULL,
  PRIMARY KEY (`vtrmantipo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela u327012897_almox.vtr_mantipo: 5 rows
DELETE FROM `vtr_mantipo`;
/*!40000 ALTER TABLE `vtr_mantipo` DISABLE KEYS */;
INSERT INTO `vtr_mantipo` (`vtrmantipo_id`, `vtrmantipo`) VALUES
	(1, 'Abastecimento'),
	(2, 'Troca de óleo'),
	(3, 'Troca de correia dentada'),
	(5, 'teste teste teste'),
	(6, 'Teste');
/*!40000 ALTER TABLE `vtr_mantipo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
