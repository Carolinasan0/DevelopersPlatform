-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 07:37:15
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataforma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Desarrollo Full-Stack', 'desarrollo-full-stack', '2021-05-27 08:19:31', '2021-05-27 08:19:31'),
(2, 'Desarrollo Front-End', 'desarrollo-front-end', '2021-05-27 08:19:44', '2021-05-27 08:19:44'),
(3, 'Desarrollo Back-End', 'desarrollo-back-end', '2021-05-27 08:19:56', '2021-05-27 08:19:56'),
(4, 'UX/UI', 'ux-ui', '2021-05-27 08:20:12', '2021-05-27 08:20:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFGANISTÁN', '2021-05-27 08:17:34', '2021-05-27 08:17:34'),
(2, 'AX', 'ISLAS GLAND', '2021-05-27 08:17:34', '2021-05-27 08:17:34'),
(3, 'AL', 'ALBANIA', '2021-05-27 08:17:34', '2021-05-27 08:17:34'),
(4, 'DE', 'ALEMANIA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(5, 'AD', 'ANDORRA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(6, 'AO', 'ANGOLA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(7, 'AI', 'ANGUILLA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(8, 'AQ', 'ANTÁRTIDA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(9, 'AG', 'ANTIGUA Y BARBUDA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(10, 'AN', 'ANTILLAS HOLANDESAS', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(11, 'SA', 'ARABIA SAUDÍ', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(12, 'DZ', 'ARGELIA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(13, 'AR', 'ARGENTINA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(14, 'AM', 'ARMENIA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(15, 'AW', 'ARUBA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(16, 'AU', 'AUSTRALIA', '2021-05-27 08:17:35', '2021-05-27 08:17:35'),
(17, 'AT', 'AUSTRIA', '2021-05-27 08:17:36', '2021-05-27 08:17:36'),
(18, 'AZ', 'AZERBAIYÁN', '2021-05-27 08:17:36', '2021-05-27 08:17:36'),
(19, 'BS', 'BAHAMAS', '2021-05-27 08:17:36', '2021-05-27 08:17:36'),
(20, 'BH', 'BAHRÉIN', '2021-05-27 08:17:36', '2021-05-27 08:17:36'),
(21, 'BD', 'BANGLADESH', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(22, 'BB', 'BARBADOS', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(23, 'BY', 'BIELORRUSIA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(24, 'BE', 'BÉLGICA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(25, 'BZ', 'BELICE', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(26, 'BJ', 'BENIN', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(27, 'BM', 'BERMUDAS', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(28, 'BT', 'BHUTÁN', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(29, 'BO', 'BOLIVIA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(30, 'BA', 'BOSNIA Y HERZEGOVINA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(31, 'BW', 'BOTSUANA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(32, 'BV', 'ISLA BOUVET', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(33, 'BR', 'BRASIL', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(34, 'BN', 'BRUNÉI', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(35, 'BG', 'BULGARIA', '2021-05-27 08:17:37', '2021-05-27 08:17:37'),
(36, 'BF', 'BURKINA FASO', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(37, 'BI', 'BURUNDI', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(38, 'CV', 'CABO VERDE', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(39, 'KY', 'ISLAS CAIMÁN', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(40, 'KH', 'CAMBOYA', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(41, 'CM', 'CAMERÚN', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(42, 'CA', 'CANADÁ', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(43, 'CF', 'REPÚBLICA CENTROAFRICANA', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(44, 'TD', 'CHAD', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(45, 'CZ', 'REPÚBLICA CHECA', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(46, 'CL', 'CHILE', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(47, 'CN', 'CHINA', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(48, 'CY', 'CHIPRE', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(49, 'CX', 'ISLA DE NAVIDAD', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(50, 'VA', 'CIUDAD DEL VATICANO', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(51, 'CC', 'ISLAS COCOS', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(52, 'CO', 'COLOMBIA', '2021-05-27 08:17:38', '2021-05-27 08:17:38'),
(53, 'KM', 'COMORAS', '2021-05-27 08:17:39', '2021-05-27 08:17:39'),
(54, 'CD', 'REPÚBLICA DEMOCRÁTICA DEL CONGO', '2021-05-27 08:17:39', '2021-05-27 08:17:39'),
(55, 'CG', 'CONGO', '2021-05-27 08:17:39', '2021-05-27 08:17:39'),
(56, 'CK', 'ISLAS COOK', '2021-05-27 08:17:40', '2021-05-27 08:17:40'),
(57, 'KP', 'COREA DEL NORTE', '2021-05-27 08:17:40', '2021-05-27 08:17:40'),
(58, 'KR', 'COREA DEL SUR', '2021-05-27 08:17:40', '2021-05-27 08:17:40'),
(59, 'CI', 'COSTA DE MARFIL', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(60, 'CR', 'COSTA RICA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(61, 'HR', 'CROACIA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(62, 'CU', 'CUBA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(63, 'DK', 'DINAMARCA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(64, 'DM', 'DOMINICA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(65, 'DO', 'REPÚBLICA DOMINICANA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(66, 'EC', 'ECUADOR', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(67, 'EG', 'EGIPTO', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(68, 'SV', 'EL SALVADOR', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(69, 'AE', 'EMIRATOS ÁRABES UNIDOS', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(70, 'ER', 'ERITREA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(71, 'SK', 'ESLOVAQUIA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(72, 'SI', 'ESLOVENIA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(73, 'ES', 'ESPAÑA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(74, 'UM', 'ISLAS ULTRAMARINAS DE ESTADOS UNIDOS', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(75, 'US', 'ESTADOS UNIDOS', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(76, 'EE', 'ESTONIA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(77, 'ET', 'ETIOPÍA', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(78, 'FO', 'ISLAS FEROE', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(79, 'PH', 'FILIPINAS', '2021-05-27 08:17:41', '2021-05-27 08:17:41'),
(80, 'FI', 'FINLANDIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(81, 'FJ', 'FIYI', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(82, 'FR', 'FRANCIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(83, 'GA', 'GABÓN', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(84, 'GM', 'GAMBIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(85, 'GE', 'GEORGIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(86, 'GS', 'ISLAS GEORGIAS DEL SUR Y SANDWICH DEL SUR', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(87, 'GH', 'GHANA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(88, 'GI', 'GIBRALTAR', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(89, 'GD', 'GRANADA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(90, 'GR', 'GRECIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(91, 'GL', 'GROENLANDIA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(92, 'GP', 'GUADALUPE', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(93, 'GU', 'GUAM', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(94, 'GT', 'GUATEMALA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(95, 'GF', 'GUAYANA FRANCESA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(96, 'GN', 'GUINEA', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(97, 'GQ', 'GUINEA ECUATORIAL', '2021-05-27 08:17:42', '2021-05-27 08:17:42'),
(98, 'GW', 'GUINEA-BISSAU', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(99, 'GY', 'GUYANA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(100, 'HT', 'HAITÍ', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(101, 'HM', 'ISLAS HEARD Y MCDONALD', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(102, 'HN', 'HONDURAS', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(103, 'HK', 'HONG KONG', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(104, 'HU', 'HUNGRÍA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(105, 'IN', 'INDIA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(106, 'ID', 'INDONESIA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(107, 'IR', 'IRÁN', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(108, 'IQ', 'IRAQ', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(109, 'IE', 'IRLANDA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(110, 'IS', 'ISLANDIA', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(111, 'IL', 'ISRAEL', '2021-05-27 08:17:43', '2021-05-27 08:17:43'),
(112, 'IT', 'ITALIA', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(113, 'JM', 'JAMAICA', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(114, 'JP', 'JAPÓN', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(115, 'JO', 'JORDANIA', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(116, 'KZ', 'KAZAJSTÁN', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(117, 'KE', 'KENIA', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(118, 'KG', 'KIRGUISTÁN', '2021-05-27 08:17:44', '2021-05-27 08:17:44'),
(119, 'KI', 'KIRIBATI', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(120, 'KW', 'KUWAIT', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(121, 'LA', 'LAOS', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(122, 'LS', 'LESOTHO', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(123, 'LV', 'LETONIA', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(124, 'LB', 'LÍBANO', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(125, 'LR', 'LIBERIA', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(126, 'LY', 'LIBIA', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(127, 'LI', 'LIECHTENSTEIN', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(128, 'LT', 'LITUANIA', '2021-05-27 08:17:45', '2021-05-27 08:17:45'),
(129, 'LU', 'LUXEMBURGO', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(130, 'MO', 'MACAO', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(131, 'MK', 'ARY MACEDONIA', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(132, 'MG', 'MADAGASCAR', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(133, 'MY', 'MALASIA', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(134, 'MW', 'MALAWI', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(135, 'MV', 'MALDIVAS', '2021-05-27 08:17:46', '2021-05-27 08:17:46'),
(136, 'ML', 'MALÍ', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(137, 'MT', 'MALTA', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(138, 'FK', 'ISLAS MALVINAS', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(139, 'MP', 'ISLAS MARIANAS DEL NORTE', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(140, 'MA', 'MARRUECOS', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(141, 'MH', 'ISLAS MARSHALL', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(142, 'MQ', 'MARTINICA', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(143, 'MU', 'MAURICIO', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(144, 'MR', 'MAURITANIA', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(145, 'YT', 'MAYOTTE', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(146, 'MX', 'MÉXICO', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(147, 'FM', 'MICRONESIA', '2021-05-27 08:17:47', '2021-05-27 08:17:47'),
(148, 'MD', 'MOLDAVIA', '2021-05-27 08:17:48', '2021-05-27 08:17:48'),
(149, 'MC', 'MÓNACO', '2021-05-27 08:17:48', '2021-05-27 08:17:48'),
(150, 'MN', 'MONGOLIA', '2021-05-27 08:17:48', '2021-05-27 08:17:48'),
(151, 'MS', 'MONTSERRAT', '2021-05-27 08:17:48', '2021-05-27 08:17:48'),
(152, 'MZ', 'MOZAMBIQUE', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(153, 'MM', 'MYANMAR', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(154, 'NA', 'NAMIBIA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(155, 'NR', 'NAURU', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(156, 'NP', 'NEPAL', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(157, 'NI', 'NICARAGUA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(158, 'NE', 'NÍGER', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(159, 'NG', 'NIGERIA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(160, 'NU', 'NIUE', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(161, 'NF', 'ISLA NORFOLK', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(162, 'NO', 'NORUEGA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(163, 'NC', 'NUEVA CALEDONIA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(164, 'NZ', 'NUEVA ZELANDA', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(165, 'OM', 'OMÁN', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(166, 'NL', 'PAÍSES BAJOS', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(167, 'PK', 'PAKISTÁN', '2021-05-27 08:17:49', '2021-05-27 08:17:49'),
(168, 'PW', 'PALAU', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(169, 'PS', 'PALESTINA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(170, 'PA', 'PANAMÁ', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(171, 'PG', 'PAPÚA NUEVA GUINEA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(172, 'PY', 'PARAGUAY', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(173, 'PE', 'PERÚ', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(174, 'PN', 'ISLAS PITCAIRN', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(175, 'PF', 'POLINESIA FRANCESA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(176, 'PL', 'POLONIA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(177, 'PT', 'PORTUGAL', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(178, 'PR', 'PUERTO RICO', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(179, 'QA', 'QATAR', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(180, 'GB', 'REINO UNIDO', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(181, 'RE', 'REUNIÓN', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(182, 'RW', 'RUANDA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(183, 'RO', 'RUMANIA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(184, 'RU', 'RUSIA', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(185, 'EH', 'SAHARA OCCIDENTAL', '2021-05-27 08:17:50', '2021-05-27 08:17:50'),
(186, 'SB', 'ISLAS SALOMÓN', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(187, 'WS', 'SAMOA', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(188, 'AS', 'SAMOA AMERICANA', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(189, 'KN', 'SAN CRISTÓBAL Y NEVIS', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(190, 'SM', 'SAN MARINO', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(191, 'PM', 'SAN PEDRO Y MIQUELÓN', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(192, 'VC', 'SAN VICENTE Y LAS GRANADINAS', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(193, 'SH', 'SANTA HELENA', '2021-05-27 08:17:51', '2021-05-27 08:17:51'),
(194, 'LC', 'SANTA LUCÍA', '2021-05-27 08:17:52', '2021-05-27 08:17:52'),
(195, 'ST', 'SANTO TOMÉ Y PRÍNCIPE', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(196, 'SN', 'SENEGAL', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(197, 'CS', 'SERBIA Y MONTENEGRO', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(198, 'SC', 'SEYCHELLES', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(199, 'SL', 'SIERRA LEONA', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(200, 'SG', 'SINGAPUR', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(201, 'SY', 'SIRIA', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(202, 'SO', 'SOMALIA', '2021-05-27 08:17:53', '2021-05-27 08:17:53'),
(203, 'LK', 'SRI LANKA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(204, 'SZ', 'SUAZILANDIA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(205, 'ZA', 'SUDÁFRICA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(206, 'SD', 'SUDÁN', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(207, 'SE', 'SUECIA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(208, 'CH', 'SUIZA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(209, 'SR', 'SURINAM', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(210, 'SJ', 'SVALBARD Y JAN MAYEN', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(211, 'TH', 'TAILANDIA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(212, 'TW', 'TAIWÁN', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(213, 'TZ', 'TANZANIA', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(214, 'TJ', 'TAYIKISTÁN', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(215, 'IO', 'TERRITORIO BRITÁNICO DEL OCÉANO ÍNDICO', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(216, 'TF', 'TERRITORIOS AUSTRALES FRANCESES', '2021-05-27 08:17:54', '2021-05-27 08:17:54'),
(217, 'TL', 'TIMOR ORIENTAL', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(218, 'TG', 'TOGO', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(219, 'TK', 'TOKELAU', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(220, 'TO', 'TONGA', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(221, 'TT', 'TRINIDAD Y TOBAGO', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(222, 'TN', 'TÚNEZ', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(223, 'TC', 'ISLAS TURCAS Y CAICOS', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(224, 'TM', 'TURKMENISTÁN', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(225, 'TR', 'TURQUÍA', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(226, 'TV', 'TUVALU', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(227, 'UA', 'UCRANIA', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(228, 'UG', 'UGANDA', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(229, 'UY', 'URUGUAY', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(230, 'UZ', 'UZBEKISTÁN', '2021-05-27 08:17:55', '2021-05-27 08:17:55'),
(231, 'VU', 'VANUATU', '2021-05-27 08:17:56', '2021-05-27 08:17:56'),
(232, 'VE', 'VENEZUELA', '2021-05-27 08:17:56', '2021-05-27 08:17:56'),
(233, 'VN', 'VIETNAM', '2021-05-27 08:17:56', '2021-05-27 08:17:56'),
(234, 'VG', 'ISLAS VÍRGENES BRITÁNICAS', '2021-05-27 08:17:56', '2021-05-27 08:17:56'),
(235, 'VI', 'ISLAS VÍRGENES DE LOS ESTADOS UNIDOS', '2021-05-27 08:17:57', '2021-05-27 08:17:57'),
(236, 'WF', 'WALLIS Y FUTUNA', '2021-05-27 08:17:58', '2021-05-27 08:17:58'),
(237, 'YE', 'YEMEN', '2021-05-27 08:17:59', '2021-05-27 08:17:59'),
(238, 'DJ', 'YIBUTI', '2021-05-27 08:17:59', '2021-05-27 08:17:59'),
(239, 'ZM', 'ZAMBIA', '2021-05-27 08:17:59', '2021-05-27 08:17:59'),
(240, 'ZW', 'ZIMBABUE', '2021-05-27 08:17:59', '2021-05-27 08:17:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'USD - Dólar estadounidense', NULL, NULL),
(2, 'EUR - Euro', NULL, NULL),
(3, 'COP - Peso colombiano', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education_has_user`
--

CREATE TABLE `education_has_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `education_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `experiences`
--

INSERT INTO `experiences` (`id`, `experience`, `created_at`, `updated_at`) VALUES
(1, 'Sin experiencia', NULL, NULL),
(2, 'Menos de 1 año', NULL, NULL),
(3, 'Entre 1 año y 2 años', NULL, NULL),
(4, 'Entre 2 años y 3 años', NULL, NULL),
(5, 'Entre 3 años y 4 años', NULL, NULL),
(6, '4 años o más', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languajes`
--

CREATE TABLE `languajes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `languajes`
--

INSERT INTO `languajes` (`id`, `languaje`, `created_at`, `updated_at`) VALUES
(1, 'Alemán', NULL, NULL),
(2, 'Árabe', NULL, NULL),
(3, 'Coreano', NULL, NULL),
(4, 'Español', NULL, NULL),
(5, 'Francés', NULL, NULL),
(6, 'Inglés', NULL, NULL),
(7, 'Mandarín', NULL, NULL),
(8, 'Portugués', NULL, NULL),
(9, 'Ruso', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languaje_has_user`
--

CREATE TABLE `languaje_has_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languaje_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languaje__levels`
--

CREATE TABLE `languaje__levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languaje_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_13_000000_create_countries_table', 1),
(7, '2021_05_13_000000_create_currencies_table', 1),
(8, '2021_05_13_000000_create_experiences_table', 1),
(9, '2021_05_13_000000_create_salaries_table', 1),
(10, '2021_05_13_213257_create_sessions_table', 1),
(11, '2021_05_13_231646_create_categories_table', 1),
(12, '2021_05_14_165446_create_vacancies_table', 1),
(13, '2021_05_14_165614_create_tecnologies_table', 1),
(14, '2021_05_14_165754_create_skills_table', 1),
(15, '2021_05_14_165840_create_projects_table', 1),
(16, '2021_05_14_165908_create_education_table', 1),
(17, '2021_05_14_165956_create_languajes_table', 1),
(18, '2021_05_14_170105_create_languaje__levels_table', 1),
(19, '2021_05_14_170132_create_certifications_table', 1),
(20, '2021_05_14_223553_create_tecnology_vacancy_table', 1),
(21, '2021_05_14_224117_create_user_has_tecnology_table', 1),
(22, '2021_05_14_225140_create_skill_has_user_table', 1),
(23, '2021_05_14_225429_create_education_has_user_table', 1),
(24, '2021_05_14_225753_create_languaje_has_user_table', 1),
(25, '2021_05_15_024436_add_company_to_users_table', 1),
(26, '2021_05_15_030011_add_location_to_users_table', 1),
(27, '2021_05_16_204133_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salaries`
--

INSERT INTO `salaries` (`id`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Menos de $1.000.000', NULL, NULL),
(2, 'Entre $1.000.000 - $2.000.000', NULL, NULL),
(3, 'Entre $2.000.000 - $3.000.000', NULL, NULL),
(4, 'Entre $3.000.000 - $4.000.000', NULL, NULL),
(5, 'Más de $4.000.000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7ur1CJSk9e9kOyRsvJaWKi7xQ8g0HaAMZNPjJOoO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXhTclpxSnJobE5iVkJHaU5lQmZhbXVkYnJJckpydzNVZ1BDb0JuNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1622093586);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adaptación al cambio', NULL, NULL),
(2, 'Atención al detalle', NULL, NULL),
(3, 'Autodidacta', NULL, NULL),
(4, 'Autogestión', NULL, NULL),
(5, 'Comunicación', NULL, NULL),
(6, 'Curiosidad', NULL, NULL),
(7, 'Resolución de problemas', NULL, NULL),
(8, 'Trabajo en equipo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill_has_user`
--

CREATE TABLE `skill_has_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologies`
--

CREATE TABLE `tecnologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnologies`
--

INSERT INTO `tecnologies` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Angular', 'angular', NULL, NULL),
(2, 'C++', 'c--', NULL, NULL),
(3, 'CSS', 'css', NULL, NULL),
(4, 'Docker', 'docker', NULL, NULL),
(5, 'Go', 'go', NULL, NULL),
(6, 'HTML', 'html', NULL, NULL),
(7, 'Java', 'java', NULL, NULL),
(8, 'JavaScript', 'javascript', NULL, NULL),
(9, 'Kotlin', 'kotlin', NULL, NULL),
(10, 'Laravel', 'laravel', NULL, NULL),
(11, 'MongoDB', 'mongodb', NULL, NULL),
(12, 'NodeJS', 'nodejs', NULL, NULL),
(13, 'PHP', 'php', NULL, NULL),
(14, 'Python', 'python', NULL, NULL),
(15, 'React', 'react', NULL, NULL),
(16, 'Ruby', 'ruby', NULL, NULL),
(17, 'Rust', 'rust', NULL, NULL),
(18, 'Shell', 'shell', NULL, NULL),
(19, 'SQL', 'sql', NULL, NULL),
(20, 'Switf', 'switf', NULL, NULL),
(21, 'TypeScript', 'typescript', NULL, NULL),
(22, 'Vue', 'vue', NULL, NULL),
(23, '.NET', 'net', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnology_vacancy`
--

CREATE TABLE `tecnology_vacancy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vacancy_id` bigint(20) UNSIGNED NOT NULL,
  `tecnology_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnology_vacancy`
--

INSERT INTO `tecnology_vacancy` (`id`, `vacancy_id`, `tecnology_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 6, NULL, NULL),
(4, 1, 8, NULL, NULL),
(5, 1, 15, NULL, NULL),
(6, 2, 8, NULL, NULL),
(7, 2, 10, NULL, NULL),
(8, 2, 13, NULL, NULL),
(9, 2, 15, NULL, NULL),
(10, 2, 19, NULL, NULL),
(11, 3, 2, NULL, NULL),
(12, 3, 10, NULL, NULL),
(13, 3, 11, NULL, NULL),
(14, 3, 12, NULL, NULL),
(15, 3, 13, NULL, NULL),
(16, 3, 19, NULL, NULL),
(17, 3, 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `company`, `location`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Carolina Sánchez', 'carolina@gmail.com', 'reclutador', NULL, NULL, NULL, '$2y$10$S3NcZyrz3lCBys6C2WXh6uXQpT/kmJjewk93Q81uWwYOK9zEDOPiy', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:19:07', '2021-05-27 08:19:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_tecnology`
--

CREATE TABLE `user_has_tecnology` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tecnology_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacancies`
--

CREATE TABLE `vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `experience_id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `salary_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Borrador','Publicar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Borrador',
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacancies`
--

INSERT INTO `vacancies` (`id`, `user_id`, `category_id`, `country_id`, `experience_id`, `currency_id`, `salary_id`, `name`, `slug`, `description`, `status`, `end`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 52, 2, 3, 3, 'Desarrollador Front-End', 'desarrollador-front-end', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.', 'Publicar', '08/15/2021', '2021-05-27 08:28:47', '2021-05-27 08:28:47'),
(2, 1, 1, 52, 3, 3, 4, 'Desarrollador Full-Stack', 'desarrollador-full-stack', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.', 'Publicar', '07/30/2021', '2021-05-27 09:59:27', '2021-05-27 09:59:27'),
(3, 1, 3, 52, 3, 3, 3, 'Desarrollador Back-End', 'desarrollador-back-end', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.', 'Publicar', '08/25/2021', '2021-05-27 10:03:24', '2021-05-27 10:03:43'),
(4, 1, 4, 52, 5, 3, 4, 'Diseñador UX', 'disenador-ux', NULL, 'Borrador', NULL, '2021-05-27 10:32:33', '2021-05-27 10:32:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certifications_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `education_has_user`
--
ALTER TABLE `education_has_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_has_user_education_id_foreign` (`education_id`),
  ADD KEY `education_has_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `languajes`
--
ALTER TABLE `languajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languaje_has_user`
--
ALTER TABLE `languaje_has_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languaje_has_user_user_id_foreign` (`user_id`),
  ADD KEY `languaje_has_user_languaje_id_foreign` (`languaje_id`);

--
-- Indices de la tabla `languaje__levels`
--
ALTER TABLE `languaje__levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languaje__levels_languaje_id_foreign` (`languaje_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `skill_has_user`
--
ALTER TABLE `skill_has_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_has_user_user_id_foreign` (`user_id`),
  ADD KEY `skill_has_user_skill_id_foreign` (`skill_id`);

--
-- Indices de la tabla `tecnologies`
--
ALTER TABLE `tecnologies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tecnologies_name_unique` (`name`);

--
-- Indices de la tabla `tecnology_vacancy`
--
ALTER TABLE `tecnology_vacancy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tecnology_vacancy_vacancy_id_foreign` (`vacancy_id`),
  ADD KEY `tecnology_vacancy_tecnology_id_foreign` (`tecnology_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_has_tecnology`
--
ALTER TABLE `user_has_tecnology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_has_tecnology_user_id_foreign` (`user_id`),
  ADD KEY `user_has_tecnology_tecnology_id_foreign` (`tecnology_id`);

--
-- Indices de la tabla `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancies_user_id_foreign` (`user_id`),
  ADD KEY `vacancies_category_id_foreign` (`category_id`),
  ADD KEY `vacancies_country_id_foreign` (`country_id`),
  ADD KEY `vacancies_experience_id_foreign` (`experience_id`),
  ADD KEY `vacancies_currency_id_foreign` (`currency_id`),
  ADD KEY `vacancies_salary_id_foreign` (`salary_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `education_has_user`
--
ALTER TABLE `education_has_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `languajes`
--
ALTER TABLE `languajes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `languaje_has_user`
--
ALTER TABLE `languaje_has_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `languaje__levels`
--
ALTER TABLE `languaje__levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `skill_has_user`
--
ALTER TABLE `skill_has_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnologies`
--
ALTER TABLE `tecnologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tecnology_vacancy`
--
ALTER TABLE `tecnology_vacancy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user_has_tecnology`
--
ALTER TABLE `user_has_tecnology`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certifications`
--
ALTER TABLE `certifications`
  ADD CONSTRAINT `certifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `education_has_user`
--
ALTER TABLE `education_has_user`
  ADD CONSTRAINT `education_has_user_education_id_foreign` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `education_has_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `languaje_has_user`
--
ALTER TABLE `languaje_has_user`
  ADD CONSTRAINT `languaje_has_user_languaje_id_foreign` FOREIGN KEY (`languaje_id`) REFERENCES `languajes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `languaje_has_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `languaje__levels`
--
ALTER TABLE `languaje__levels`
  ADD CONSTRAINT `languaje__levels_languaje_id_foreign` FOREIGN KEY (`languaje_id`) REFERENCES `languajes` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `skill_has_user`
--
ALTER TABLE `skill_has_user`
  ADD CONSTRAINT `skill_has_user_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_has_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tecnology_vacancy`
--
ALTER TABLE `tecnology_vacancy`
  ADD CONSTRAINT `tecnology_vacancy_tecnology_id_foreign` FOREIGN KEY (`tecnology_id`) REFERENCES `tecnologies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tecnology_vacancy_vacancy_id_foreign` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancies` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_has_tecnology`
--
ALTER TABLE `user_has_tecnology`
  ADD CONSTRAINT `user_has_tecnology_tecnology_id_foreign` FOREIGN KEY (`tecnology_id`) REFERENCES `tecnologies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_tecnology_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `vacancies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacancies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
