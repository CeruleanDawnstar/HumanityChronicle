-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.30-33 - Percona Server (GPL), Release '33', Revision '6517692'
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour chronique
CREATE DATABASE IF NOT EXISTS `chronique` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `chronique`;

-- Listage de la structure de la table chronique. anecdotes
CREATE TABLE IF NOT EXISTS `anecdotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anecdote` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B21764463256915B` (`relation_id`),
  CONSTRAINT `FK_B21764463256915B` FOREIGN KEY (`relation_id`) REFERENCES `evenement` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table chronique.anecdotes : ~0 rows (environ)
/*!40000 ALTER TABLE `anecdotes` DISABLE KEYS */;
INSERT INTO `anecdotes` (`id`, `titre`, `anecdote`, `img_url`, `relation_id`) VALUES
	(1, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi erat augue, mollis id luctus vel, hendrerit quis nisl. Ut consequat, augue in dictum blandit, augue lectus ullamcorper leo, non varius orci dui sit amet nisl. Sed laoreet rhoncus elementum. Praesent ut ante eget magna vulputate dignissim. Phasellus sodales aliquet augue, et ultricies lorem cursus in. Praesent dui tortor, accumsan a fermentum id, ultricies nec mi. Suspendisse eleifend venenatis odio, non ultricies risus pretium id. Proin venenatis sem suscipit, dignissim magna id, sagittis sem. In eleifend lobortis imperdiet. Mauris consequat odio et nunc pulvinar dictum. Ut sollicitudin ex ex, vel interdum tellus condimentum sed. Aliquam ut sapien ante. Donec sed hendrerit urna. Phasellus id fermentum ligula, a rhoncus mauris.', 'bonfire.jpg', 1),
	(2, 'Le départ de Jeanne', 'C\'est à l\'âge de 17 ans que Jeanne part de Domrémy, son village natale pour servir la cause Divine et sauver la France.', 'depart.jpg', 9),
	(3, 'La Pucelle d\'Orléans', 'Le surnom de "La Pucelle d\'Orléans" est à titre posthume. Sa première mention est dans l\'ouvrage "Le Fort inexpugnable de l\'honneur du sexe féminin" de François de Billon paru en 1555.', 'lapucelle.jpg', 9),
	(4, 'Les cheveux d\'Alexandre le Grand', 'Alexandre le Grand lavait ses cheveux dans le safran pour les garder brillant et orange.', 'safran.jpeg', 5),
	(5, 'La plus vieille histoire', 'C\'est pendant l\'ère sumerienne que l\'épopée de Gilgamesh fut pour la première fois écrite. Cela fait d\'elle la plus vieille histoire écrite de l\'humanité.', 'gilgamesh.jpg', 3),
	(6, 'L\'education de Vercingétorix', 'Comme beaucoup d\'enfants gaulois, Vercingétorix à reçu une éducation "à la romaine". En 58 avant J-C., Vercingétorix est un jeune homme de l\'aristocratie en âge de se battre lorsque Jules César envahit la Gaule à la tête de ses légions et d\'alliés gaulois, pour rattacher à Rome', 'vercingetorix.jpg', 6),
	(7, 'Une croisade pacifique', 'Contrairement aux autres croisades, la sixième (1228-1229) fut pacifique. Organisée par l’Empereur Frederick II, celui-ci se lia d\'amitié avec Al Kami (Sultan d’Égypte) et put négocier l\'annexion de la ville de Jérusalem. Ce fut le dernier succès des croisés en terre sainte.', 'croisadesix.jpg', 8),
	(8, 'Un animal de compagnie', 'L\'ours possède une place très importante dans la culture nordique, à la fois admiré pour sa force et son courage. Ainsi, l\'animal a été considéré comme un cadeau diplomatique, ce que fît Ingimund l\'Ancien en offrant un ours polaire au roi du Danemark.', 'ours.jpg', 7),
	(9, 'Athènes serait la plus ancienne cité européenne', 'Elle est habitée depuis plus de 7000 années. Pour rappel, cette cité est le berceau de la philosophie, de la littérature occidentale, de la démocratie, des principes mathématiques, de la science politique, de la comédie et de la tragédie. N’oublions pas les Jeux Olympiques.', 'athenes.jpg', 4),
	(10, 'Œuf de Colomb', 'L\'expression « œuf de Colomb » est utilisée pour qualifier une idée simple mais ingénieuse.\r\n\r\nElle provient d\'une anecdote. Lors d\'un repas en présence du navigateur Christophe Colomb, un invité aurait voulu minimiser l\'importance de la découverte du Nouveau Monde en disant : « Il suffisait d\'y penser ». Pour répondre à cette provocation, l\'explorateur aurait proposé un défi à ses convives. Il leur aurait demandé de faire tenir debout un œuf dur dans sa coquille. Personne n\'y aurait réussi, sauf Christophe Colomb, qui aurait écrasé simplement l\'extrémité de l\'œuf et se serait écrié : « Il suffisait d\'y penser ! »', 'oeufcolomb.jpg', 10);
/*!40000 ALTER TABLE `anecdotes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
