-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-10-2018 a las 20:51:46
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlescolar-modfinaciero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_levels`
--

CREATE TABLE `act_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `grado_id` int(10) UNSIGNED DEFAULT NULL,
  `grupo_id` int(10) UNSIGNED DEFAULT NULL,
  `turno_id` int(10) UNSIGNED DEFAULT NULL,
  `eliminarlogica` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `act_levels`
--

INSERT INTO `act_levels` (`id`, `level_id`, `grado_id`, `grupo_id`, `turno_id`, `eliminarlogica`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 2, 'alta', NULL, NULL),
(2, 2, 3, 5, 2, 'alta', NULL, NULL),
(3, 3, 3, 3, 2, 'alta', NULL, NULL),
(4, 1, 1, 3, 2, 'alta', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cycles`
--

CREATE TABLE `cycles` (
  `id` int(10) UNSIGNED NOT NULL,
  `ciclo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cycles`
--

INSERT INTO `cycles` (`id`, `ciclo`, `status`, `created_at`, `updated_at`) VALUES
(1, '2018-2019', 'activo', NULL, NULL),
(2, '2017-2018', 'inactivo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grades`
--

INSERT INTO `grades` (`id`, `grado`, `created_at`, `updated_at`) VALUES
(1, '1ER', NULL, NULL),
(2, '2DO', NULL, NULL),
(3, '3ER', NULL, NULL),
(4, '4TO', NULL, NULL),
(5, '5TO', NULL, NULL),
(6, '6T0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `grupo`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL),
(4, 'D', NULL, NULL),
(5, 'E', NULL, NULL),
(6, 'F', NULL, NULL),
(7, 'G', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `nivel_educativo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `nivel_educativo`, `created_at`, `updated_at`) VALUES
(1, 'Primaria', NULL, NULL),
(2, 'secundaria', NULL, NULL),
(3, 'prescolar', NULL, NULL);

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
(16, '2018_09_21_204215_create_turns_table', 1),
(45, '2018_10_03_183435_create_student_act_levels_table', 2),
(56, '2014_10_12_000000_create_users_table', 3),
(57, '2014_10_12_100000_create_password_resets_table', 3),
(58, '2018_09_09_174812_create_groups_table', 3),
(59, '2018_09_09_180527_grades', 3),
(60, '2018_09_10_190105_create_levels_table', 3),
(61, '2018_09_11_181433_create_students_table', 3),
(62, '2018_09_11_181806_create_cycles_table', 3),
(63, '2018_09_20_204215_create_turns_table', 3),
(64, '2018_09_21_200605_create_act_levels_table', 3),
(65, '2018_09_25_172257_create_payment_concepts_table', 3),
(66, '2018_10_03_194638_create_student_act_levels_table', 3);

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
-- Estructura de tabla para la tabla `payment_concepts`
--

CREATE TABLE `payment_concepts` (
  `id` int(10) UNSIGNED NOT NULL,
  `precio` double(8,3) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concepto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payment_concepts`
--

INSERT INTO `payment_concepts` (`id`, `precio`, `nombre`, `concepto`, `status`, `created_at`, `updated_at`) VALUES
(1, 1200.530, 'pagos inscripcion', 'pago de inscripcion del ciclo escolar 2018-2019', 'Activo', '2018-10-09 23:37:35', '2018-10-09 23:37:35'),
(2, 250.250, 'Desayuno semanal', 'pago por semana de desayuno', 'Activo', '2018-10-09 23:40:05', '2018-10-09 23:40:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_P` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_M` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimineto` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_p` int(11) NOT NULL,
  `numre_casa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos_P` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `nombre`, `apellido_P`, `apellido_M`, `genero`, `fecha_nacimineto`, `estado`, `Nacionalidad`, `telefono`, `direccion`, `colonia`, `c_p`, `numre_casa`, `nombre_p`, `apellidos_P`, `direccion_p`, `Telefono_p`, `nombre_m`, `direccion_m`, `apellidos_m`, `Telefono_m`, `imagen`, `baja`, `created_at`, `updated_at`) VALUES
(1, 'valentin', 'elizalde', 'perez', 'Masculino', '1995-02-02', 'baj', 'Mexicana', '6122322796', 'enrique segoviano', 'zacatal', 23000, '123', 'ramon', 'valdez', 'donra mon', '61212121212', 'florinda', 'enriqeu segoviano', 'meza', '6123568945', NULL, 'Alta', '2018-10-04 02:13:03', '2018-10-04 02:13:03'),
(2, 'chavo', 'del', 'ocho', 'Masculino', '1945-10-15', 'sdfs', 'Mexicana', '6121668649', 'la vecindad', 'del senor barriga', 212, '123123', 'ramon', 'valdes', 'como don ramon', '61212121212', 'florinda', 'dona florinda', 'meza', '6123568945', '5bbd02a72ad7e59ab0d0348d56.jpeg', 'Alta', '2018-10-06 02:32:18', '2018-10-10 01:33:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_act_levels`
--

CREATE TABLE `student_act_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `actlevel_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `student_act_levels`
--

INSERT INTO `student_act_levels` (`id`, `student_id`, `actlevel_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2018-10-04 02:13:03', '2018-10-10 01:33:59'),
(3, 2, 3, '2018-10-06 02:32:19', '2018-10-06 02:32:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turns`
--

CREATE TABLE `turns` (
  `id` int(10) UNSIGNED NOT NULL,
  `Turno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `turns`
--

INSERT INTO `turns` (`id`, `Turno`, `created_at`, `updated_at`) VALUES
(1, 'T.V', NULL, NULL),
(2, 'T.M', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ivan antonio', 'ivandx_94@hotmail.com', '$2y$10$CP9BwavRUqPsmljKbWTQgOHieldH2HHWjMnipD/IaPPPM/dDiiOYW', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `act_levels`
--
ALTER TABLE `act_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `act_levels_level_id_foreign` (`level_id`),
  ADD KEY `act_levels_grado_id_foreign` (`grado_id`),
  ADD KEY `act_levels_grupo_id_foreign` (`grupo_id`),
  ADD KEY `act_levels_turno_id_foreign` (`turno_id`);

--
-- Indices de la tabla `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payment_concepts`
--
ALTER TABLE `payment_concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_act_levels`
--
ALTER TABLE `student_act_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_act_levels_student_id_foreign` (`student_id`),
  ADD KEY `student_act_levels_actlevel_id_foreign` (`actlevel_id`);

--
-- Indices de la tabla `turns`
--
ALTER TABLE `turns`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `act_levels`
--
ALTER TABLE `act_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cycles`
--
ALTER TABLE `cycles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `payment_concepts`
--
ALTER TABLE `payment_concepts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `student_act_levels`
--
ALTER TABLE `student_act_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turns`
--
ALTER TABLE `turns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `act_levels`
--
ALTER TABLE `act_levels`
  ADD CONSTRAINT `act_levels_grado_id_foreign` FOREIGN KEY (`grado_id`) REFERENCES `grades` (`id`),
  ADD CONSTRAINT `act_levels_grupo_id_foreign` FOREIGN KEY (`grupo_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `act_levels_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `act_levels_turno_id_foreign` FOREIGN KEY (`turno_id`) REFERENCES `turns` (`id`);

--
-- Filtros para la tabla `student_act_levels`
--
ALTER TABLE `student_act_levels`
  ADD CONSTRAINT `student_act_levels_actlevel_id_foreign` FOREIGN KEY (`actlevel_id`) REFERENCES `act_levels` (`id`),
  ADD CONSTRAINT `student_act_levels_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
