-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2021 a las 23:08:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phplogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'ruben', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'test', '$2y$10$ZeuZKK9CKXmUDwq0LDEsnep6oLlUXdGa/SFHOJTx2Zz//E1ffQEGS', 'test@test.com'),
(4, 'sandro', '$2y$10$jVaE62xkLCNOJZscRjxUb.HU2KZt9iinmVCinaWA6EgCgs9gSOvxe', 'sandro@sandro.sandro'),
(5, 'victor', '$2y$10$uNjyRJD42zVdphmfeJOXhOE4wv31AU/PsjrKV.Vvi8cnDhs.FxM8q', 'victor@victor.victor'),
(9, 'paco', '$2y$10$5SENFNgFW6lSXDB1nOqGsOmbwt52Lr1o.H/mH34R6wGMh5Hv6mHuO', 'paco@paco.o'),
(10, 'ramon', '$2y$10$a3FDhtx7K71OHvkIhLNob.XdKAI26PkJYjT0xug2KMnOPALCuuNsu', 'ramon@asdf.asd'),
(11, 'asdf', '$2y$10$RH4BLu1/Kifd.BUgEAyd2.kkhUU6MIfop9LXPKy0KUhZ1An76UuD.', 'asdf@asdf.asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Agentes`
--

CREATE TABLE `Agentes` (
  `ID_AG` int(15) NOT NULL,
  `N_AG` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C_AG` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `H1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C_H1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `H2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C_H2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `H3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C_H3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `H4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C_H4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Agentes`
--

INSERT INTO `Agentes` (`ID_AG`, `N_AG`, `C_AG`, `H1`, `C_H1`, `H2`, `C_H2`, `H3`, `C_H3`, `H4`, `C_H4`) VALUES
(1, 'Jett (Corea)', 'Jett es un personaje ágil y con un estilo de combate evasivo para poder tomar riesgos que otros no pueden.<br> \r\nPuede correr en círculos alrededor de escaramuzas y cortar enemigos antes de que sepan quién ha sido.', 'Cloudburst', 'Lanza una niebla que obstruye la visión cuando impacta.', 'Updraft', 'Genera un viento que permite propulsarlo.', 'Tailwind', 'Un dash de corta distancia hacia la dirección donde se está moviendo.', 'Blade Storm', 'Se arma con distintos cuchillos que hacen un daño moderado y matan en la cabeza. Si mata a alguien, se regeneran.'),
(2, 'Raze (Brasil)', '<p>Estamos ante una agente de clase duelista que domina las armas explosivas y es<br>\r\n                perfecta para destrozar grupos de enemigos. Al inicio del juego, la tendremos<br>\r\n                bloqueada, para conseguirla podemos o activar contrato del agente o bien pagando<br>\r\n                1000 puntos de Valorant. Cuenta con las siguientes habilidades:</p>', 'Fardo explosivo', 'Se lanza un fardo que se pega en las superficies, con su explosión, <br>\r\n                hace daño y desplaza a nuestros enemigos.', 'Balas de pintura', 'Se equipa con una granada de racimo, tras explotar, deja<br> \r\n                submuniciones que hacen daño a cualquier enemigo que esté dentro de su rango.', 'Bot Explosivo', 'Nos equipamos con un bot que se desplazará en línea recta<br>\r\n                 rebotando por las paredes, si alcanza al enemigo, explotará haciendo una gran daño..', 'Cierratelones', 'Te equipas con un lanzacohetes que provoca una gran cantidad de<br> \r\n                daño al entrar en contacto con cualquier objeto del mapa.'),
(3, 'Breach (Suecia)', 'Breach, noveno agente confirmado de Valorant. Es un personaje ofensivo con<br>\r\n                herramientas de asalto y cargas explosivas, y su papel en el juego es iniciar ataques,<br>\r\n                coger puntos y despistar a los enemigos. Estas son sus habilidades.', 'Réplica', 'Una carga de fusión que se lanza a través de las paredes y explota<br>\r\n                lentamente con buen daño.', 'Punto de ignició', 'Carga cegadora que genera una explosión rápida a través de la<br> \r\n                pared, cegando a los que están mirando.', 'Línea de fractura', 'Te equipa con un explosivo sísmico: si mantienes el disparo<br>\r\n                pulsado aumenta la distancia. Causa un terremoto que desorienta a los jugadores.', 'Onda Sísmica', 'Dispara para enviar un terremoto que supera obstáculos y se genera<br> \r\n                en una zona amplia.'),
(4, 'Omen (?)', 'Un personaje que caza desde las sombras, con teleports y como si de un fantasma se<br>\r\n                  tratara.', 'Paranoia', 'Una sombra que si impacta en un personaje, le deja miope.', 'Shadow Walk', 'Capacidad para desmaterializarse y teletransportarse en una<br> \r\n                distancia corta tras un pequeño delay.', 'Dark Cover', 'Un orbe que explota en una esfera oscura y sirve como barrera para<br>\r\n                ocultarse.', 'From the Shadow', 'Selecciona a cualquier lugar del mapa y transpórtate ahí,<br> \r\n                dvolviendo a la zona original si te matan.'),
(5, 'Brimstone (USA)', 'Un personaje que tiene un gran arsenal para tomar ventaja en el campo de batalla y<br>\r\n                  que sirve para dirigir al equipo hasta la victoria.', 'Incendiary', 'Lanza una granada incendiaria que genra daño por fuego en una zona<br>\r\n                concreta.', 'Stim Beacon', 'Marca una zona llamada Stim Beacon que da fuego rápido a los<br>\r\n                jugadores cercanos a ella.', 'Sky Smoke', 'Usa tu mapa para pedir pantallas de humo orbitales que obscurecen la<br> \r\n                visión en zonas que escojamos.', 'Orbital Strike', 'Lanza un impacto orbital devastador en una zona que genera mucho<br> \r\n                daño durante varios segundos.'),
(7, 'Sage (China)', 'Un seguro de vida para el equipo allá donde vaya, capaz de revivir amigos caídos y<br>\r\n                ofrecer calma en el campo de batalla.', 'Slow Orb', 'Un orbe que cae en una zona concreta: quienes pasan por ahí van más<br>\r\n                lento, a ras de suelo y hacen mucho ruido al moverse.', 'Barrier Orb', 'Una gran y sólida pared que puede rotar.', 'Healing Orb', 'Recupera vida a un aliado o al propio personaje hasta rellenar al<br>\r\n                máximo la vitalidad en pocos segundos.', 'Resurrection', 'Marca el cuerpo de un compañero, tras un tiempo revive con toda la<br> \r\n                vida.'),
(6, 'Phoenix (UK)', 'Phoenix es un personaje que brilla por su estilo de combate, donde incendia el campo<br>\r\n                  de batalla con luces y fuego. Estas son sus principales habilidades:', 'Hot Hands', 'Lanza bolas de fuego que explotan después de un tiempo o cuando<br>\r\n                impactan con el suelo. La zona daña enemigos y nos cura a nosotros.', 'Blaze', 'Crea una pared de fuego que bloquea la visión y daña a quien pase por esa<br> \r\n                zona.', 'Curveball', 'Lanza una llama curva que explota en una luz brillantes después de un<br>\r\n                tiempo, cegando a todos los que estén mirando en esa dirección.', 'Run it Back', 'Marca su localización, y si muere durante la duración de la habilidad o<br> \r\n                cuando está expira, resucita en la zona marcada con toda la vida.'),
(8, 'Sova (Rusia)', 'Personaje que busca, encuentra y elimina enemigos al estilo ruso, con eficiencia y<br>\r\n                  precisión.', 'Shock bolt ', 'Lanza un tornillo explosivo que emite un pulso de energía dañino.', 'Owl Drone', 'Un dron controlable que puede lanzar un dardo que marca a los<br>\r\n                enemigos que toca.', 'Recon Bolt', 'Lanza un emisor sonoro que marca los enemigos cercanos. Se puede<br>\r\n                destruir', 'Hunter\'s Fury', 'Tres blasts de energía mortales que si tocan al enemigo, hacen daño<br> \r\n                importante y los dejan marcados.'),
(9, 'Viper (USA)', 'Personaje con distintos dispositivos químicos que sirven para controlar el campo de<br>\r\n                  batalla y mermar la visión de los enemigos.', 'Snakebite', 'Proyectil que explota y genera una zona con daño por ácido.', 'Poison Cloud', 'Lanzado como un gas, genera una nube de humo en una zona<br> \r\n                concreta. Se puede volver a coger el emisor y lanzarlo otra vez tras un pequeño<br>\r\n                cooldown.', 'Toxic Screen', 'Emisor que crea una larga línea de gas tóxico.', 'Viper\'s Pit', 'Emite una masiva nube tóxica e una zona grande que se mantiene todo<br> \r\n                lo que Viper se mantenga dentro de ella. Los enemigos de dentro salen resaltados<br>\r\n                para Viper.'),
(10, 'Cypher (Marruecos)', 'Ningún secreto está a salvo de este personaje, que siempre está vigilante y controla<br>\r\n                  cualquier movimiento enemigo.', 'Trapwire', 'Un cable trampa entre dos paredes que marca a los enemigos y los puede<br>\r\n                atrapar.', 'Cyber Cage', 'Una trampa remota que crea una celda que ralentiza a los enemigos<br> \r\n                que pasan por su zona.', 'Spycam', 'Una cámara remota que permite ver quienes han pasado por esa zona.', 'Neural Theft', 'Extrae información de los enemigos, mostrando localización y sus<br> \r\n                aliados vivos.'),
(11, 'Reyna (México)', 'Reyna es la última agente que ha llegado con el parche 1.0 del juego, estamos ante una<br>\r\n                  agente de clase duelista, experta en combates uno contra uno y gran poder ofensivo.<br>\r\n                  Se puede desbloquear a través de contrato o bien con 1000 puntos Valorant. Estas son<br>\r\n                  sus habilidades:', 'Devour', 'Aquellos enemigos asesiandos por Reyna, dejan orbes de alma durante 3<br>\r\n                segundos, al recogerlos, nos curaremos.', 'Despise', 'Utiliza al instante el orbe de un enemigo y se volverá intangible<br>\r\n                durante un breve período de tiempo. Además, si tiene la habilidad Emperatriz<br>\r\n                activada, también se volverá invisible.', 'Lascivious look', 'Equipa un ojo etéreo, al lanzarla, limitará la visión de los enemigos.', 'Empress', 'Entra en modo frenesí dónde la velocidad de disparo, equipamiento y<br> \r\n                recarga aumentan considerablemente.'),
(12, 'Killjoy (Alemana)', 'Esta sagaz inventora berlinesa es capaz de poner contra las cuardas a sus<br>\r\n                  enemigos; te contamos todo lo que se sabe sobre sus habilidades.', 'Alarm bot', 'Killjoy despliega un dispositivo que da caza a los rivales que entren en<br>\r\n                su campo de acción. Cuando este bot asesino alcanza a su objetivo, el<br>\r\n                desdichado enemigo vuela por los aires. Además, no se limita a hacer daño, sino que<br>\r\n                también provoca que las vícticas sean vulnerables y reciban el doble de daño en<br>\r\n                cualquier fuente. Si queremos recuperar el bot, basta con mantener pulsado equipar.', 'Turret', 'Despliega este dispositivo, que alcanza a los enemigos en un cono de 180 grados.<br> \r\n                Al mantener pulsado equipar podemos recoger la torreta desplegada.', 'Nanoswarm', 'Lanza una granada, que cuando cae, es silenciosa como una tumba.<br>\r\n                Ahora bien, cuando activas el dispositivo salen al exterior un enjamble de <br>\r\n                nanobots que dañan mucho al enemigo', 'Lockdown', 'Todos los enemigos que estén en el radio quedarán paralizados<br> \r\n                durante 8 enemigos, aunque los enemigos pueden destruir la barrera.'),
(13, 'Skye (Australiana)', 'Desde ser capaz de curar a sus compañeros de equipo hasta avistar y<br>\r\n                dañar a los enemigos desde lejos, Skye parece tener un conjunto<br>\r\n                multifacético de habilidades que la convierten en una intrigante agente<br>\r\n                para emplear.', 'Precursora', 'Lanza un lobo y lo controla, si alcanza a su objetivo, le daña y lo aturde.', 'Luz conductora', 'Lanza un halcón que ciega a todos los enemigos que lo ven.', 'Reforestación', 'Crea un área curativa para sus aliados, pero no cura a Skye.', 'Buscadores', 'Lanza tres buscadores que localizan a los tres enemigos más cercanos, limitando<br>\r\n              su visión cuando los alcanza.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Armas`
--

CREATE TABLE `Armas` (
  `ID_AR` int(11) NOT NULL,
  `N_AR` text COLLATE utf8_unicode_ci NOT NULL,
  `Precio` text COLLATE utf8_unicode_ci NOT NULL,
  `C_AR` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Armas`
--

INSERT INTO `Armas` (`ID_AR`, `N_AR`, `Precio`, `C_AR`) VALUES
(1, '-Classic-', '0 c.', 'Pistola-escopeta muy versatil, buena a corta y media distancia.'),
(2, '-Stinger-', '1.000 c.', 'Subfusil con mucha cadencia que es muy letal a corta distancia.'),
(3, '-Bulldog-', '2.100 c.', 'Rifle a ráfagas muy bueno a media y larga distancia cuando usas la mira.'),
(4, '-Marshall-', '1.100 c.', 'Rifle de francotirador, letal si aciertas en la cabeza a larga distancia.'),
(5, '-Shorty-', '200 c.', 'Escopeta de mano con dos disparos, buena a corta distancia.'),
(6, '-Spectre-', '1.600 c.', 'Subfusil silenciado, muy buena a corta y media distancia.'),
(7, '-Guardian-', '2.700 c.', 'DMR con mucho daño a larga distancia y letal si aciertas en la cabeza.'),
(8, '-Operator-', '4.500 c.', 'Rifle de francotirador muy letal si aciertas el disparo.'),
(9, '-Frenzy-', '400 c.', 'Pistola automática muy eficaz en duelos a corta distancia.'),
(10, '-Bucky-', '900 c.', 'Escopeta barata con buena a corta y media distancia.'),
(11, '-Phantom-', '2.900 c.', 'Una precisa y potente arma silenciada con alta cadencia de fuego.'),
(12, '-Ares-', '1.600 c.', 'Ametralladora ligera barata con gran potencia de fuego.'),
(13, '-Ghost-', '500 c.', 'Pistola silenciada con gran daño a media y corta distancia.'),
(14, '-Judge-', '1.500 c.', 'Escopeta automatica muy letal a corta distancia entrar al punto corriendo.'),
(15, '-Vandal-', '2.900 c.', 'Esta precisa y potente arma es temible si se dispara en ráfagas cortas.'),
(16, '-Odin-', '3.200 c.', 'Ametralladora muy potente, ideal para hacer fuego de supersión.'),
(17, '-Sheriff-', '800 c.', 'Pistola muy letal a todas las distancias si buscas headshot.'),
(18, '-Tactical Knife-', 'Arma sin precio', 'Cuchillo táctico letal que ejecuta a los enemigos si es clavado por la espalda.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Agentes`
--
ALTER TABLE `Agentes`
  ADD PRIMARY KEY (`ID_AG`);

--
-- Indices de la tabla `Armas`
--
ALTER TABLE `Armas`
  ADD PRIMARY KEY (`ID_AR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Agentes`
--
ALTER TABLE `Agentes`
  MODIFY `ID_AG` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Armas`
--
ALTER TABLE `Armas`
  MODIFY `ID_AR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
