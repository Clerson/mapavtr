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

-- Copiando dados para a tabela u327012897_almox.vtr_manut_det: 30 rows
DELETE FROM `vtr_manut_det`;
/*!40000 ALTER TABLE `vtr_manut_det` DISABLE KEYS */;
INSERT INTO `vtr_manut_det` (`vtrmandet_id`, `vtrman_manutid`, `vtrmandet_item`, `vtrmandet_item_qnt`, `vtrmandet_item_unid`, `vtrmandet_item_valor`, `vtrmandet_item_valor_total`) VALUES
	(2, 2, 711, '15', 'litros', 0.00, 0.00),
	(4, 3, 714, '20', 'litros', 0.00, 0.00),
	(5, 3, 715, '20', 'litros', 0.00, 0.00),
	(6, 6, 711, '20', 'litros', 0.00, 0.00),
	(7, 24, 714, '20', 'litros', 0.00, 0.00),
	(8, 24, 714, '20', 'litros', 0.00, 0.00),
	(9, 24, 711, '5', 'un', 10.00, 0.00),
	(10, 5, 714, '5', 'un', 10.00, 0.00),
	(11, 72, 1068, '2', 'fco', 70.00, 0.00),
	(12, 72, 1069, '1', 'un', 70.00, 0.00),
	(13, 71, 1068, '2', 'un', 50.00, 0.00),
	(14, 71, 1069, '2', 'un', 30.00, 0.00),
	(15, 71, 1071, '1', 'un', 70.00, 0.00),
	(16, 30, 1068, '2', 'un', 30.00, 0.00),
	(17, 30, 1069, '2', 'un', 20.00, 0.00),
	(18, 30, 1071, '2', 'un', 15.00, 0.00),
	(19, 75, 1068, '2', 'un', 13.00, 0.00),
	(20, 75, 1069, '2', 'un', 14.00, 0.00),
	(21, 1, 1069, '3', 'peça', 25.00, 75.00),
	(22, 1, 1071, '2', 'un', 13.00, 0.00),
	(23, 1, 1068, '2', 'un', 13.00, 0.00),
	(24, 1, 1068, '2', 'un', 15.00, 0.00),
	(25, 1, 1068, '2', 'un', 70.00, 0.00),
	(26, 1, 1068, '2', 'un', 13.00, 0.00),
	(27, 1, 1068, '2', 'un', 13.00, 0.00),
	(28, 1, 1068, '2', 'un', 13.00, 0.00),
	(29, 1, 1068, '2', 'un', 70.00, 0.00),
	(30, 1, 1068, '2', 'un', 15.00, 0.00),
	(31, 1, 1068, '2', 'un', 30.00, 60.00),
	(33, 5, 1068, '2', 'un', 13.00, 26.00);
/*!40000 ALTER TABLE `vtr_manut_det` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
