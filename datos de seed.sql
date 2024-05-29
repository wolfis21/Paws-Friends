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

//tabla categoria
INSERT INTO `product_category_animals` (`id`, `name`) VALUES
	(1, 'Perros'),
	(2, 'Gatos'),
	(3, 'Roedores'),
	(4, 'Aves'),
	(5, 'Peces'),
	(6, 'Reptiles');
    
//tabla tiendas 
INSERT INTO `shops` (`id`, `name`, `address`, `phone`, `link_ref`, `img_ref`, `puntuation`, `created_at`, `updated_at`) VALUES
	(3, 'Agrotécnica & Pet Shop', 'Edificio El Mirador, Via Italia, Ciudad Guayana', '02869614035', 'https://www.instagram.com/agrotecnicapzo/', '20240523034552_jpeg', '4', '2024-05-23 03:45:52', '2024-05-28 19:50:52'),
	(4, 'Canaima Pets I, C.A', 'Centro Comercial Santo Tomé III, PB, Carrera España', '02869622022', 'https://www.instagram.com/canaimapetsl/', '20240523034618_jpeg', '0', '2024-05-23 03:46:18', '2024-05-28 06:04:25'),
	(5, 'Crazy Pets', 'Av Guayana, Orinokia Mall', '04127090204', 'https://www.instagram.com/crazypetsorinokia/', '20240523034735_jpeg', '0', '2024-05-23 03:47:35', '2024-05-28 16:21:16'),
	(6, 'Kninos&felinos', 'Carerra España, Al frente de la Plaza Chipia', '04141854191', 'https://www.instagram.com/kninosyfelinos', '20240523034826_jpeg', '0', '2024-05-23 03:48:26', '2024-05-28 16:30:50'),
	(7, 'Paticas Pet Shop', 'Carrera Ventuari, Detrás del Apartahotel Lumirosa', '04249713238', 'https://www.instagram.com/petshousepzo/', '20240523034854_jpeg', '0', '2024-05-23 03:48:54', '2024-05-28 06:46:57'),
	(8, 'Agrícola Villa Alianza - Agro & Pets.', 'Via Colombia, Calle Los Angeles', '02869235919', 'https://www.instagram.com/agrotecnicapzo/', '20240523035040_jpeg', '0', '2024-05-23 03:50:40', '2024-05-23 03:50:40'),
	(9, 'Bogux Pet Shop', 'Carrera Nekuima entre Calle Caura y Calle Cuchivero', '04148970226', 'https://www.instagram.com/sionpetshop/?hl=es', '20240529043147_jpeg', NULL, '2024-05-29 04:31:47', '2024-05-29 04:31:47'),
	(10, 'Agropecuaria El Pony', 'Local 10 C. La Urbana, Ciudad Guayana', '02869232075', 'https://www.instagram.com/agropecuaria_cocrane', '20240529043452_jpeg', NULL, '2024-05-29 04:34:52', '2024-05-29 04:34:52');

//tabla productos
INSERT INTO `products` (`id`, `name`, `description`, `img_ref`, `product_category_animals_id`, `shop_id`, `price`, `puntuation`, `created_at`, `updated_at`) VALUES
	(1, 'Pienso Light de Pavo para Perros por Grature', 'Pienso natural light de pavo para perros adultos de todas las razas y tamaños   Grature Pavo es una receta elaborada con ingredientes naturales para perros adultos de cualquier raza y tamaño a partir de 1 año.', '20240523035426_png', 1, 4, 10.77, NULL, '2024-05-23 03:54:26', '2024-05-23 03:54:26'),
	(2, 'Champú de Arbol de Té para Mascotas', 'Esential Nourish es un champú vegano para perros que repara y reestructura el cabello dañado. Contiene ingredientes naturales como el extracto de avena y el aceite de jojoba, que protegen el cabello del envejecimiento', '20240523040117_png', 1, 5, 9.77, NULL, '2024-05-23 04:01:17', '2024-05-23 04:01:17'),
	(4, 'Nayeco Impermeable Hiking Naranja', 'Impermeable modelo Hiking de color naranja para perro. Una prenda totalmente adaptable y muy fácil de poner y quitar.', '20240523040418_png', 1, 5, 12.88, NULL, '2024-05-23 04:04:18', '2024-05-23 04:04:18'),
	(5, 'Musqui Comedero Grande Plegable de Silicona Rojo', 'Comedero de silicona para viaje portátil para perros, color rojo.', '20240523040534_png', 1, 6, 12.15, NULL, '2024-05-23 04:05:34', '2024-05-23 04:05:34'),
	(6, 'Pienso Light de Pavo para Gatos Adultos por Grature', 'Pienso natural light de pavo para perros adultos de todas las razas y tamaños   Grature Pavo es una receta elaborada con ingredientes naturales para perros adultos de cualquier raza y tamaño a partir de 1 año.', '20240523040613_png', 2, 3, 10.77, NULL, '2024-05-23 04:06:14', '2024-05-23 04:06:14'),
	(7, 'SUMSU Toallitas Húmedas de Talco para Perros y Gatos', 'Las toallitas húmedas con Talco de SUMSU son ideales para mantener una buena higiene de tu perro o gato de manera rápida y fácil.', '20240523040644_png', 2, 6, 3.88, NULL, '2024-05-23 04:06:44', '2024-05-23 04:06:44'),
	(8, 'Sanicat Lecho Multipet de Celulosa Reciclada', 'Lecho absorbente Multipet de gránulos de celulosa 100 % reciclada, elaborada a partir de materiales residuales de las industrias del envasado y la higiene. Beneficios clave 100 % compostable según el Certificado del Instituto IFU', '20240523040732_png', 2, 7, 18.33, NULL, '2024-05-23 04:07:32', '2024-05-23 04:07:32'),
	(9, 'Savic Bolsas Higiénicas para Areneros', 'Bolsas Higiénicas Savic, para modelos de gateras: R220, R210, R217,R207, R212, Flappy, Cat-o-net, Aristos grande y Sphinx.- Ideales para la comodidad de los dueños al limpiar los WC de sus gatos', '20240523040811_png', 2, 6, 10.95, NULL, '2024-05-23 04:08:11', '2024-05-23 04:08:11'),
	(10, 'Versele Laga Pienso para Conejos Cuni Sensitive', 'ersele-Laga Complete Cuni Sensitive es la nutrición sin preocupaciones. Los pellets todo-en-uno excepcionalmente sabrosos evitan el comportamiento de alimentación selectivo.', '20240523040925_png', 3, 4, 18.62, NULL, '2024-05-23 04:09:25', '2024-05-23 04:09:25'),
	(11, 'Cunipic Sol de Heno con Diente de León ', 'El Sol de heno con diente de león de Cunipic  es un alimento esencial por su alto contenido en fibra. Se puede administrar para  cualquier tipo de roedor', '20240523041015_png', 3, 4, 7.16, NULL, '2024-05-23 04:10:15', '2024-05-23 04:10:15'),
	(12, 'Versele Laga SnackCrock de Manzana', 'Crock La manzana completa es un bocado sabroso y sano para los conejos y los varios roedores. La cáscara crujiente satisface su instinto roedor y el suculento relleno de manzana blanda se ha enriquecido con vitaminas y omega 3.', '20240523041238_png', 3, 7, 3.89, NULL, '2024-05-23 04:12:38', '2024-05-23 04:12:38'),
	(14, 'Ferplast Bola de Ejercicio para Hámster', 'Para que tus hámsteres se mantengan en perfectas condiciones Ferplast te ofrece estas esferas de plástico transparente de colores que están disponibles en tres tamaños.', '20240523041432_png', 3, 7, 34.05, NULL, '2024-05-23 04:14:32', '2024-05-23 04:14:32'),
	(15, 'Vitakraft Menú Life Para Periquitos', 'Contiene Alimentos naturales que los Periquitos encuentran en su hábitat natural (Australia).Enriquecido con vitaminas, sustancias minerales, y Píldoras de Jod Rapid, para una glándula tiroides sana, y para estimular el instinto', '20240523041538_png', 4, 4, 5.62, NULL, '2024-05-23 04:15:38', '2024-05-23 04:15:38'),
	(16, 'Versele Laga Alimento Completo para Pájaros', 'Mezcla de semillas de alta calidad para pinzones tropicales. Esta mezcla proporciona las mejores condiciones de alimentación y cuidado para tu ave.', '20240523041706_png', 4, 5, 4.50, NULL, '2024-05-23 04:17:06', '2024-05-23 04:17:06'),
	(17, 'Nekton Suplemento nutricional con Vitamina E', 'NEKTON-S es un suplemento alimenticio para animales formulado para proporcionar la cantidad diaria adecuada de vitaminas, minerales y aminoácidos evitando sus posibles deficiencias.', '20240523041820_png', 4, 7, 11.05, NULL, '2024-05-23 04:18:20', '2024-05-23 04:18:20'),
	(18, 'Voltrega Jaula para Pájaros con Pie 612', 'Utilizamos materias primas no tóxicas para el bienestar de tu mascota. El acabado es en pintura epoxi sin plomo y en la fabricación de la jaula utilizamos plástico polipropileno reciclado, para que nuestra mascota no se intoxique.', '20240523041957_png', 4, 4, 60.40, NULL, '2024-05-23 04:19:57', '2024-05-23 04:19:57'),
	(19, 'JBL Holiday Red Automatic', 'Para alimentar sin problemas durante sus vacaciones a las carpas doradas entre 4 y 6 días. Alimento para vacaciones para carpas doradasNutritivo y fácil de digerir', '20240523042428_png', 5, 5, 3.63, NULL, '2024-05-23 04:24:28', '2024-05-23 04:24:28'),
	(20, 'Freedog Fish Tank 26x14x18cm', 'Peceras de plástico transparente, muy espaciosas y con una base sólida. En la parte superior, presentan un pequeño marco alrededor del borde para asegurar un fácil manejo.', '20240523042458_png', 5, 5, 4.01, NULL, '2024-05-23 04:24:58', '2024-05-23 04:24:58'),
	(21, 'Fluval Filtro Interno U2', 'Los filtros internos de la serie U de Fluval, que ofrecen un sorprendente sistema de filtración en tres etapas, mayor movimiento del agua y aireación vital.', '20240523042640_png', 5, 4, 48.12, NULL, '2024-05-23 04:26:40', '2024-05-23 04:26:40'),
	(22, 'Sandimas Casa Piña para Peceras', 'Decoración para acuarios de PENN-PLAX. Fabricados con resinas de máxima calidad y colores adaptados para uso en acuariofilia. Divertidos personajes infantiles', '20240523042808_png', 5, 5, 24.91, NULL, '2024-05-23 04:28:08', '2024-05-23 04:28:08'),
	(23, 'Tetra Gammarus Mix para Reptiles', 'Alimento natural para tortugas acuáticas Mix de gammarus y anchoas.Contiene un alto porcentaje de minerales y fibras naturales para una digestión óptima.', '20240523043054_png', 6, 8, 6.40, NULL, '2024-05-23 04:30:54', '2024-05-23 04:30:54'),
	(24, 'Francodex Suplemento con Cal para Tortugas', 'Suplemento Vitaminas Reptil Ium Tortue Cal es un producto diseñado para mejorar la salud y el bienestar de las tortugas. Contiene vitaminas, calcio y oligoelementos que ayudan a prevenir las carencias nutricionales y a fortalecer el esqueleto', '20240523043306_png', 6, 8, 9.33, NULL, '2024-05-23 04:33:06', '2024-05-23 04:33:06'),
	(25, 'ReptoFresh Elimina malos Olores para Acuarios', 'Los olores desagradables en el acuaterrario son problemas comunes para los propietarios de reptiles acuáticos. Tetra ReptoFresh reduce de inmediato los residuos orgánicos del agua, acabando así con los olores.', '20240523043437_png', 6, 7, 8.69, NULL, '2024-05-23 04:34:37', '2024-05-23 04:34:37'),
	(26, 'Trixie 3 Casas Escondrijo Coco', 'Casas escondrijo coco ø 8cm, ø 10cm, ø 12cm . Lugar ideal para que los animales de terrario se retiren . Ayuda a evitar que el animal se estrese .', '20240523043520_png', 6, 5, 5.59, NULL, '2024-05-23 04:35:20', '2024-05-23 04:35:20');

