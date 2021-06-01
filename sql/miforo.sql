-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 12:03:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miforo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `titulo`, `mensaje`, `id_usuario`, `id_tema`) VALUES
(1, 'Los compas perdidos en el espa', '¿Sabéis cuándo sale a la venta el libro? No tiene ', 1, 4),
(2, 'Mejores libros 2020', 'Para mí, los mejores libros del año pasado fueron:', 2, 4),
(3, 'Juegos 2021', 'Hola a todos. ¿Que juegos están siendo vuestros fa', 5, 2),
(4, 'Conciertos Zaragoza', 'Muy buenas!! Me gustaría saber si este año hay alg', 4, 1),
(5, 'Películas de estreno', '¿Sabéis qué películas se estrenan ahora en mayo?', 1, 3),
(6, '¿Recomendaciones?', 'Hola gente. He terminado de leer lo que tenía pend', 2, 4),
(7, 'Juegos favoritos 2020', 'Mis juegos favoritos del año pasado han sido: Spla', 3, 2),
(8, 'Novedades', '¿Alguien sabe las novedades en juegos de este mes?', 1, 2),
(9, 'Conciertos', '¿Habrá conciertos este año?', 3, 1),
(10, 'Discos nuevos', '¿Qué novedades hay en discos?', 4, 1),
(11, 'Películas recomendadas', '¿Qué películas me recomendaís de Netflix?', 2, 3),
(12, 'Libros TOP', '¿Qué libros han sido los TOP del 2020?', 5, 4),
(13, 'Consejo de libros', 'Me gustaría que me recomendaseis algún libro que o', 3, 4),
(19, 'Películas para niños', '¿Qué películas me recomendaís para ver en familia?', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(2) NOT NULL,
  `tema` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `tema`) VALUES
(1, 'Música'),
(2, 'Juegos'),
(3, 'Películas'),
(4, 'Libros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`, `email`) VALUES
(1, 'Isabel', '1234', 'isa@gmail.com'),
(2, 'David', 'mipassword', 'david@gmail.com'),
(3, 'Luis', '123', 'luis@gmail.com'),
(4, 'Martin', '0000', 'martin@gmail.com'),
(5, 'Daniela', 'hola', 'daniela@gmail.com'),
(6, 'Marta', 'holamarta', 'marta@gmail.com'),
(7, 'Susana', 'susana20', 'susi@gmail.com'),
(8, 'Alberto', 'jklñ', 'alberto@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `fk_usuario_mensaje` (`id_usuario`),
  ADD KEY `fk_tema_mensaje` (`id_tema`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `fk_tema_mensaje` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`),
  ADD CONSTRAINT `fk_usuario_mensaje` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
