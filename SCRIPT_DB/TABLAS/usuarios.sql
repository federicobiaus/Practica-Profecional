CREATE TABLE `usuarios` (
  `UserId` int(11) NOT NULL DEFAULT '0',
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `FechaAlta` datetime NOT NULL,
  `TipoUsuario` char(1) NOT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `UsuarioBaja` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserId` (`UserId`),
  ADD KEY `FechaAlta` (`FechaAlta`),
  ADD KEY `TipoUsuario` (`TipoUsuario`);