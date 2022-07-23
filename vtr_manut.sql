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

-- Copiando estrutura para tabela u327012897_almox.vtr_manut
CREATE TABLE IF NOT EXISTS `vtr_manut` (
  `vtrman_id` int(11) NOT NULL AUTO_INCREMENT,
  `vtrman_data` date DEFAULT NULL,
  `vtrman_vtrid` varchar(5) NOT NULL,
  `vtrman_tipomanutid` varchar(5) NOT NULL,
  `vtrman_odom` varchar(15) DEFAULT NULL,
  `vtrman_vencim` date DEFAULT NULL COMMENT 'tempo para próxiima manutenção',
  `vtrman_proxodom` varchar(10) DEFAULT NULL,
  `vtrman_responsid` varchar(5) NOT NULL,
  `vtrman_observ` text,
  `vtrman_status` varchar(50) NOT NULL,
  PRIMARY KEY (`vtrman_id`),
  KEY `vtrman_proxodom` (`vtrman_proxodom`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
