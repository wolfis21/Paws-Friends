//modulo 1

//Tabla de veterinarios
INSERT INTO `veterinarians` (`id`, `name`, `address`, `phone`, `email`, `link_ref`, `img_ref`, `specialist_animals`, `puntuation`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Perez', 'Puerto Ordaz', '04249847827', 'pedro@gmail.com', 'Dr.Pedroo', '20240521023148_jpg', 'Urgencias', NULL, '2024-05-21 06:31:48', '2024-05-21 06:31:48'),
(2, 'Sahara Scott', 'Puerto Ordaz', '04121892828', 'Sahs@gmail.com', 'SaharaS', '20240521024017_jpg', 'Oftalmologia', NULL, '2024-05-21 06:40:17', '2024-05-21 06:40:17'),
(3, 'Abigail Mendez', 'Puerto Ordaz', '04249076456', 'bigal@gmail.com', 'gailmendez', '20240521024144_jpg', 'Fisioterapia', '5', '2024-05-21 06:41:45', '2024-05-21 07:48:58'),
(4, 'Carlos Smith', 'Puerto Ordaz', '04121892823', 'caslisto@gmail.com', 'Dr.SmithC', '20240521025327_jpg', 'Oftalmologia', '3', '2024-05-21 06:53:27', '2024-05-21 07:49:13'),
(5, 'Jose Garcia', 'Puerto Ordaz', '04267845372', 'jose_garcia@hotmail.com', 'Dr.Garcias', '20240521025518_jpg', 'Radiología', NULL, '2024-05-21 06:55:18', '2024-05-21 06:55:18'),
(6, 'Abril Gonzalez', 'Puerto Ordaz', '02869382994', 'abril@gmail.com', 'Dra.AbrilG', '20240521032551_jpeg', 'Dermatologia', NULL, '2024-05-21 07:25:51', '2024-05-21 07:25:51');


//tabla de alojamientos
INSERT INTO `housings` (`id`, `name`, `address`, `phone`, `description_location`, `type_animals`, `food_offer`, `img_ref`, `puntuation`, `created_at`, `updated_at`) VALUES
(1, 'Amanecer', 'Puerto Ordaz', '04121897828', 'Los mangos', 'Perro', 'Tiras de carne', '20240521032749_jpg', NULL, '2024-05-21 07:27:49', '2024-05-21 07:27:49'),
(2, 'Blue Sky', 'Puerto Ordaz', '04121892228', 'Yara yara', 'Gato', 'Gatarina', '20240521032842_jpg', '5', '2024-05-21 07:28:42', '2024-05-21 07:51:59'),
(3, 'Amigo fiel', 'Puerto Ordaz', '04269076456', 'Sierra parima', 'Otros', 'Sopita', '20240521033009_jpg', NULL, '2024-05-21 07:30:09', '2024-05-21 07:30:09'),
(4, 'Sweet dreams', 'Puerto Ordaz', '04147845372', 'Alta Vista', 'Perro', 'Perrarina', '20240521033113_jpg', '4', '2024-05-21 07:31:13', '2024-05-21 07:52:07'),
(5, 'The Mountain', 'Puerto Ordaz', '02886756325', 'El Caimito', 'Gato', 'Galletas de pescado', '20240521033302_jpg', NULL, '2024-05-21 07:33:02', '2024-05-21 07:33:02'),
(6, 'The Island', 'Puerto Ordaz', '02886756765', 'Villa Colombia', 'Otros', 'Sopita', '20240521033507_jpg', NULL, '2024-05-21 07:35:07', '2024-05-21 07:35:07');

//tabla de peluquerias
INSERT INTO `dog_groomer` (`id`, `name`, `address`, `phone`, `link_ref`, `img_ref`, `puntuation`, `created_at`, `updated_at`) VALUES
(1, 'Pato Donald', 'Puerto Ordaz', '028693829278', 'DonaldCuts', '20240521033625_jpg', '5', '2024-05-21 07:36:25', '2024-05-21 07:55:13'),
(2, 'Kaikai', 'Puerto Ordaz', '04168374948', 'Kaikai', '20240521033725_jpg', NULL, '2024-05-21 07:37:25', '2024-05-21 07:37:25'),
(3, 'Max', 'Puerto Ordaz', '02869382956', 'Maax', '20240521033909_jpg', NULL, '2024-05-21 07:39:09', '2024-05-21 07:39:09'),
(4, 'Grooming pets', 'Puerto Ordaz', '02886756325', 'grooming', '20240521033948_jpg', NULL, '2024-05-21 07:39:48', '2024-05-21 07:39:48'),
(5, 'Animals Styles', 'Puerto Ordaz', '02886756765', 'StylesA', '20240521034040_jpg', NULL, '2024-05-21 07:40:40', '2024-05-21 07:40:40'),
(6, 'Nenei', 'Puerto Ordaz', '02886753747', 'nani', '20240521034126_jpg', '3', '2024-05-21 07:41:26', '2024-05-21 07:55:19');

//modulo 2

//modulo 3

//modulo 4