-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2019 a las 22:43:49
-- Versión del servidor: 5.7.24-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.11-4+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlescolar`
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
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `act_levels`
--

INSERT INTO `act_levels` (`id`, `level_id`, `grado_id`, `grupo_id`, `turno_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 2, 'activo', NULL, NULL),
(2, 1, 1, 1, 1, 'activo', '2019-02-26 07:07:08', '2019-02-26 07:07:08'),
(3, 1, 2, 1, 1, 'activo', '2019-02-26 07:07:08', '2019-02-26 07:07:08'),
(4, 1, 3, 1, 1, 'activo', '2019-03-30 06:28:31', '2019-03-30 06:28:31'),
(5, 1, 4, 1, 1, 'activo', '2019-03-30 06:56:48', '2019-03-30 06:56:48'),
(6, 1, 5, 1, 1, 'activo', '2019-03-30 06:56:48', '2019-03-30 06:56:48');

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
-- Estructura de tabla para la tabla `cycles_actlevs`
--

CREATE TABLE `cycles_actlevs` (
  `id` int(10) UNSIGNED NOT NULL,
  `cycle_id` int(10) UNSIGNED DEFAULT NULL,
  `actlevel_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cycles_actlevs`
--

INSERT INTO `cycles_actlevs` (`id`, `cycle_id`, `actlevel_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2019-02-26 07:07:08', '2019-02-26 07:07:08'),
(2, 1, 3, '2019-02-26 07:07:08', '2019-02-26 07:07:08'),
(3, 1, 4, '2019-03-30 06:28:31', '2019-03-30 06:28:31'),
(4, 1, 5, '2019-03-30 06:56:48', '2019-03-30 06:56:48'),
(5, 1, 6, '2019-03-30 06:56:48', '2019-03-30 06:56:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `grado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grades`
--

INSERT INTO `grades` (`id`, `grado`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL);

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
(201, '2018_10_10_200605_create_act_levels_table', 4),
(256, '2014_10_12_000000_create_users_table', 5),
(257, '2014_10_12_100000_create_password_resets_table', 5),
(258, '2018_09_09_174812_create_groups_table', 5),
(259, '2018_09_09_180527_grades', 5),
(260, '2018_09_09_204215_create_turns_table', 5),
(261, '2018_09_10_190105_create_levels_table', 5),
(262, '2018_09_10_200605_create_act_levels_table', 5),
(263, '2018_09_11_181433_create_students_table', 5),
(264, '2018_09_11_181806_create_cycles_table', 5),
(265, '2018_09_25_172257_create_payment_concepts_table', 5),
(266, '2018_10_03_194638_create_student_act_levels_table', 5),
(267, '2018_10_17_195521_create_cycles_actlevs_table', 5),
(268, '2018_10_19_183832_create_payments_table', 5);

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
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `paymentconceps_id` int(10) UNSIGNED DEFAULT NULL,
  `monto` double UNSIGNED DEFAULT NULL,
  `Fecha_creacion1` date DEFAULT NULL,
  `Fecha_venciminto1` date DEFAULT NULL,
  `estatus1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion2` date DEFAULT NULL,
  `Fecha_venciminto2` date DEFAULT NULL,
  `estatus2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion3` date DEFAULT NULL,
  `Fecha_venciminto3` date DEFAULT NULL,
  `estatus3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion4` date DEFAULT NULL,
  `Fecha_venciminto4` date DEFAULT NULL,
  `estatus4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion5` date DEFAULT NULL,
  `Fecha_venciminto5` date DEFAULT NULL,
  `estatus5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion6` date DEFAULT NULL,
  `Fecha_venciminto6` date DEFAULT NULL,
  `estatus6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion7` date DEFAULT NULL,
  `Fecha_venciminto7` date DEFAULT NULL,
  `estatus7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion8` date DEFAULT NULL,
  `Fecha_venciminto8` date DEFAULT NULL,
  `estatus8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion9` date DEFAULT NULL,
  `Fecha_venciminto9` date DEFAULT NULL,
  `estatus9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion10` date DEFAULT NULL,
  `Fecha_venciminto10` date DEFAULT NULL,
  `estatus10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion11` date DEFAULT NULL,
  `Fecha_venciminto11` date DEFAULT NULL,
  `estatus11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_creacion12` date DEFAULT NULL,
  `Fecha_venciminto12` date DEFAULT NULL,
  `estatus12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `nivel_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payment_concepts`
--

INSERT INTO `payment_concepts` (`id`, `precio`, `nombre`, `concepto`, `status`, `nivel_id`, `created_at`, `updated_at`) VALUES
(1, 523.300, 'Pagos de ciclo 2019-2020', 'Pago de inscripcion al ciclo 2019-2020', 'Activo', 2, '2019-02-23 06:49:02', '2019-02-23 06:49:02'),
(2, 79.000, 'pizzita', 'pizzita para la palomilla', 'Activo', 1, '2019-02-23 06:50:05', '2019-02-23 06:50:05');

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
(2, 'chavo', 'LOPEZ', 'OJEDA', 'Masculino', '2010-02-16', 'Baja California Sur', 'Mexicana', '6121515537', 'IVAN ANTONIO OJEDA LOPEZ, PUESTA DEL SOL', 'PUESTA DEL SOL', 23090, '6121515537', 'juan', 'LOPEZ', 'IVAN ANTONIO OJEDA LOPEZ, PUESTA DEL SOL', '6121515537', 'maria', 'IVAN ANTONIO OJEDA LOPEZ, PUESTA DEL SOL', 'LOPEZ', '6121515537', '5c9eb0805f58fdt.common.streams.StreamServer.jpg', 'Alta', '2019-03-30 06:55:44', '2019-03-30 06:55:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_act_levels`
--

CREATE TABLE `student_act_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `actlevel_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `student_act_levels`
--

INSERT INTO `student_act_levels` (`id`, `student_id`, `actlevel_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 2, 4, 'cursando', '2019-03-30 06:55:44', '2019-04-03 07:35:26');

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
(1, 'ivan antonio', 'ivandx_94@hotmail.com', '$2y$10$jjTI/xa4VrC9mS2g.ttxiOKqrJJxn.uJjGCpLI41Cp5YmJ7JI6nDG', NULL, NULL, NULL),
(2, 'Acadep', 'Pruebas@acadep.com', '$2y$10$QWAaq3CcULAg4Kr1gsYVZ.1oAJoBCVwkFU.k.iYDATzxhrQZTi.Fu', NULL, NULL, NULL);

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
-- Indices de la tabla `cycles_actlevs`
--
ALTER TABLE `cycles_actlevs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cycles_actlevs_cycle_id_foreign` (`cycle_id`),
  ADD KEY `cycles_actlevs_actlevel_id_foreign` (`actlevel_id`);

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
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_student_id_foreign` (`student_id`),
  ADD KEY `payments_paymentconceps_id_foreign` (`paymentconceps_id`);

--
-- Indices de la tabla `payment_concepts`
--
ALTER TABLE `payment_concepts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_concepts_nivel_id_foreign` (`nivel_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cycles`
--
ALTER TABLE `cycles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cycles_actlevs`
--
ALTER TABLE `cycles_actlevs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `turns`
--
ALTER TABLE `turns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Filtros para la tabla `cycles_actlevs`
--
ALTER TABLE `cycles_actlevs`
  ADD CONSTRAINT `cycles_actlevs_actlevel_id_foreign` FOREIGN KEY (`actlevel_id`) REFERENCES `act_levels` (`id`),
  ADD CONSTRAINT `cycles_actlevs_cycle_id_foreign` FOREIGN KEY (`cycle_id`) REFERENCES `cycles` (`id`);

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_paymentconceps_id_foreign` FOREIGN KEY (`paymentconceps_id`) REFERENCES `payment_concepts` (`id`),
  ADD CONSTRAINT `payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_act_levels` (`id`);

--
-- Filtros para la tabla `payment_concepts`
--
ALTER TABLE `payment_concepts`
  ADD CONSTRAINT `payment_concepts_nivel_id_foreign` FOREIGN KEY (`nivel_id`) REFERENCES `levels` (`id`);

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
