-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 19:01:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `songs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `name_song` varchar(100) NOT NULL,
  `id_song` varchar(5) NOT NULL,
  `img_song` varchar(100) NOT NULL,
  `src_song` varchar(100) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `id_artist` varchar(5) NOT NULL,
  `img_artist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`name_song`, `id_song`, `img_song`, `src_song`, `name_artist`, `id_artist`, `img_artist`) VALUES
('Counting Stars', 'c_1', 'Counting_Stars.png', 'Counting_Stars.mp3', 'One Republic', 'a_1', 'OneRepublic.jpg'),
('Apologize', 'c_2', 'apologize.png', 'Apologize.mp3', 'One Republic', 'a_1', 'OneRepublic.jpg'),
('Let her go', 'c_3', 'Let_her_go.png', 'Let_Her_Go.mp3', 'Passenger', 'a_2', ''),
('The devil doesn\'t bargain', 'c_4', 'devil.png', 'devil.mp3', 'Alec Benjamin', 'a_3', 'alec.png'),
('Ojos colorau', 'c_5', 'Micro.jpg', 'OjosColorau.mp3', 'Mora', 'a_4', 'Mora.jpg'),
('She don\'t give a fo', 'c_6', 'DUKIxKHEA.png', 'aFo.mp3', 'Duki', 'a_5', 'Duki.png'),
('Sultans of swing', 'c_7', 'vKfvU.jpg', 'Sultans.mp3', 'Dire Straits', 'a_6', 'Dire.jpg'),
('Piano man', 'c_8', 'Billy_Joel_Piano_Man_single.jpg', 'PianoMan.mp3', 'Billy Joel', 'a_7', 'Billy.jfif'),
('Bohemian Rhapsody', 'c_9', 'hqdefault.jpg', 'BhRh.mp3', 'Queen', 'a_8', 'Queen.jpg'),
('Africa', 'c_10', '25749.jpg', 'Africa.mp3', 'Toto', 'a_9', '25749.jpg'),
('Twist and shout', 'c_11', 'Twist_and_shout_ep.jpg', 'TAS.mp3', 'Los Beatles', 'a_10', 'Beatles.jpg'),
('Plegarias', 'c_12', 'plegarias.png', 'Plegarias.mp3', 'Nicki Nicole', 'a_11', 'Nicki.jfif'),
('Nobody like yo', 'c_13', 'Nicky.png', 'NobodyLikeYo.mp3', 'Nicki Nicole', 'a_11', 'Nicky.png'),
('Frio', 'c_14', 'Frio.png', 'Frio.mp3', 'Nicki Nicole', 'a_11', 'Nicky.png'),
('Sesión de Bizarrap y Quevedo', 'c_15', 'QxBZRP.jpg', 'QUEVEDOBZRP.mp3', 'Quevedo', 'a_12', 'Quevedo.jpg'),
('La Bachata', 'c_16', 'Bachata.jpg', 'LaBachata.mp3', 'Manuel Turizo', 'a_13', ''),
('Titi me preguntó', 'c_17', 'Titi.jpg', 'TitiMePregunto.mp3', 'Bad Bunny', 'a_14', ''),
('I Wish', 'c_18', 'wish.png', 'wish.mp3', 'Imagine Dragons', 'a_15', 'ImagineDragons.jpg'),
('Believer', 'c_19', 'evolve_id.png', 'Believer.mp3', 'Imagine Dragons', 'a_15', 'ImagineDragons.jpg'),
('Demons', 'c_20', 'night_visions.png', 'Demons.mp3', 'Imagine Dragons', 'a_15', 'ImagineDragons.jpg'),
('Radioactive', 'c_21', 'night_visions.png', 'Radioactive.mp3', 'Imagine Dragons', 'a_15', 'ImagineDragons.jpg'),
('On top of the world', 'c_22', 'night_visions.png', 'On_Top_Of_The_World.mp3', 'Imagine Dragons', 'a_15', 'ImagineDragons.jpg'),
('American Pie', 'c_23', 'american_pie.png', 'american_pie.mp3', 'Don McLean', 'a_16', ''),
('California dreaming', 'c_24', 'california_dreaming.png', 'california_dreaming.mp3', 'The Mamas & The Papas', 'a_17', ''),
('Jailhouse rock', 'c_25', 'jh_rock.png', 'jailhouse_rock.mp3', 'Elvis Presley', 'a_18', ''),
('Let it be', 'c_26', 'let_it_be.png', 'let_it_be.mp3', 'Los Beatles', 'a_10', 'Beatles.jpg'),
('Take on me', 'c_27', 'take_on_me.png', 'take_on_me.mp3', 'a-ha', 'a_19', ''),
('Walking on sunshine', 'c_28', 'walking_on_sunshine.png', 'walking_on_sunshine.mp3', 'Katrina & The Waves', 'a_20', ''),
('', 'c_29', '', '', '', '', ''),
('', 'c_30', '', '', '', '', ''),
('', 'c_31', '', '', '', '', ''),
('', 'c_32', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
