-- Base de datos: `Biblioteca`
--
-- --------------------------------------------------------

CREATE TABLE `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(14) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `portada` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--
INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) VALUES
(1, '9788498381498', 'El Principito', 'Antoine de Saint-Exupéry', 'Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo, El Principito concentra, con maravillosa simplicidad, la constante reflexión de Saint-Exupery sobre la amistad, el amor, la responsabilidad y el sentido de la vida.', 'https://elfarodelostresmundos.com/7541-large_default/el-principito-pop-up-salamandra-libros-el-faro-de-los-tres-mundos.jpg'),
(2, '9781617292231', 'Grokking Algoritms', 'Aditya Y. Bhargava', 'Tanto si es un novato como un veterano, este libro está diseñado para ser fácil de seguir. No hay grandes saltos de pensamiento, y cada vez que se introduce un nuevo concepto, se explica de inmediato. Este libro está escrito en un tono amigable que explica exactamente lo que necesitas saber sin complicar demasiado las cosas. Este libro supone un gran avance respecto a otros libros de aprendizaje automático del mercado. Está escrito para principiantes, pero incluye información más técnica para las personas interesadas en profundizar en este campo. Si estás empezando con el aprendizaje automático, este libro te ayudará a ponerte al día rápidamente dándote algunos conocimientos de fondo, proporcionándote ejemplos concretos y guiándote hacia la resolución de tus propios problemas. ', 'https://m.media-amazon.com/images/I/81g6X3dWlhL._AC_UF1000,1000_QL80_.jpg'),
(3, '9788432205316', '100 Años De Soledad', 'Gabriel Garcia Marquez', 'La aventura de la familia Buendía-Iguarán, representa al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero. Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Con estas palabras empieza una novela ya legendaria en los anales de la literatura universal, una de las aventuras literarias más fascinantes del siglo XX. Millones de ejemplares de este título leídos en todas las lenguas y el premio Nobel de literatura coronando una obra que se había abierto paso «boca a boca» -como gusta decir el escritor- son la más palpable demostración de que la aventura fabulosa de la familia Buendía-Iguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representaba al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.', 'https://www.penguinlibros.com/es/2513513-large_default/cien-anos-de-soledad-edicion-ilustrada.jpg'),
(4, '9788425362378', 'Tu Éxito Es Inevitable', 'Maite Issa', 'Entre estas páginas aprenderás cómo alcanzar el éxito a través de la manifestación, el proceso mediante el cual, usando las leyes del subconsciente y del Universo, lograrás hacer real y tangible algo que existía solo en tu imaginación. Nutrirás tu mente con contenidos que derrumbarán creencias internas nocivas, romperán el techo de cristal, te reprogramarán y obtendrás así lo que deseas y mereces.', 'https://m.media-amazon.com/images/I/417KynEvVdL.jpg'),
(5, '9788493664923', 'Cómo Hacer Amigos E Influir Sobre Las Personas', 'Dale Carnegie', 'El libro Cómo ganar amigos e influir sobre las personas escrito por Dale Carnegie, es publicado en 1936, dirigido a quienes quieren aprender a ser más sociales y líderes u hombres de negocios que quieren aprender a negociar y dirigir mejor a sus equipos.', 'https://images.cdn1.buscalibre.com/fit-in/360x360/34/5c/345ce5a12e1425a12835c6e215435e38.jpg'),
(6, '9788408163152', 'El Código Da Vinci', 'Dan Brown', 'El Código Da Vinci es una novela de ficción, en la que su autor, Dan Brown, desarrolla una trama de suspenso donde los personajes principales deben descifrar una serie de mensajes y claves para evitar que un importante secreto relacionado con la Iglesia Católica se pierda para siempre.', 'https://images.cdn2.buscalibre.com/fit-in/360x360/49/54/4954e233ad1e1a43e3f8187cd91c6997.jpg'),
(7, '9788478885190', 'Harry Potter  y el Prisionero De Azkaban', 'J.K. Rowling', 'Cuando el autobús noctámbulo irrumpe en una calle oscura y frena con fuertes chirridos delante de Harry, comienza para él un nuevo curso en Hogwarts, lleno de acontecimientos extraordinarios. Sirius Black, asesino y seguidor de lord Voldemort, se ha fugado, y dicen que va en busca de Harry. En su primera clase de Adivinación, la profesora Trelawney ve un augurio de muerte en las hojas de té de la taza de Harry... Pero quizá lo más aterrador sean los dementores que patrullan por los jardines del colegio, capaces de sorberte el alma con su beso...', 'https://m.media-amazon.com/images/I/41G6AGP-QHL._SY264_BO1,204,203,200_QL40_ML2_.jpg'),
(8, '9788439736349', 'La Campana De Cristal', 'Silvia Plath', 'Esta es la historia de una chica que tiene todo lo que una joven puede desear en el Nueva York de los años cincuenta: una carrera prometedora, un pretendiente que estudia medicina y toda una vida por delante. Esther Greenwood ha ganado una beca para trabajar en una revista de moda en la gran ciudad y siente que por fin podrá realizar su sueño de ser escritora. Pero entre cócteles, noches de fiesta y pilas de manuscritos descubre una sociedad que repudia las aspiraciones de las mujeres y su vida empieza a desmoronarse. Esther -alter ego de la autora- se encierra en sí misma, como si estuviera atrapada en una campana de cristal: respirando continuamente el mismo aire viciado y sin posibilidad de escapar.', 'https://imagessl9.casadellibro.com/a/l/t5/69/9788435019569.jpg'),
(9, '9788497594257', 'Un Mundo Feliz', ' Huxley Aldous', 'Los peores vaticinios del capitalismo se han cumplido: triunfan los dioses del consumo y la comodidad, y el orbe se divide en diez zonas en apariencia seguras y estables. Los humanos ya no procrean, el sexo se ha convertido solo en una diversión y las letras del alfabeto griego se han pervertido para clasificar a los seres humanos por castas. Todos aceptan su lugar en la nueva jerarquía social, perfectamente ordenada. Los valores humanos esenciales no tienen cabida en este mundo y los habitantes se crean in vitro con una técnica concebida a imagen y semejanza de una cadena de montaje. El soma, la droga por excelencia en este mundo distópico que propone Huxley, ayuda a los habitantes a escapar de la rutina. A cambio de este orden pulcro, la libertad de expresión y el pensamiento crítico han sido erradicados. Bernard Marx, el protagonista de la novela, inconformista e inteligente, deberá probar los límites de la sociedad que lo ha engendrado, iniciando un viaje más allá de las fronteras distópicas de su universo.', 'https://m.media-amazon.com/images/I/51q+8GL0z+L.jpg'),
(10, '9788441437401', 'El Kybalion', 'Hermes Trismegisto', 'El Kybalión, obra cumbre del ocultismo universal dice: "Los labios de la sabiduría permanecen cerrados, excepto para el oído capaz de comprender." Esta obra reúne las enseñanzas fundamentales y secretas que tanto han influido en los sistemas filosóficos de todas las razas y de todos los pueblos y lo hicieron desde el antiguo Egipto, cuna de la sabiduría secreta y las doctrinas místicas. Doctrinas formuladas por los hierofantes y maestros de la tierra de Isis, a aquellos preparados para participar de lo oculto. En este caso máximas originales, axiomas y preceptos formuladas por Hermes Trismegisto, el Maestro de los Maestros, padre de la sabiduría, fundador de la astrología, el descubridor de la alquimia, deificado por los egipcios bajo en nombre de Tot. Este libro es la versión clásica llevada a cabo por los autodenominados Tres Iniciados, y constituye una recopilación rigurosa de las enseñanzas hermeticas del sabio Hermes Trismegisto, "el tres veces grande", el supremo y más antiguo maestro del pensamiento hermetico; enseñanzas imprescindibles para aquellos que en nuestro atribulado mundo aspiran a acceder a la antigua y eterna sabiduría del conocimiento ocultista.', 'https://m.media-amazon.com/images/I/61aNbjyNbkL._AC_UF1000,1000_QL80_.jpg'),
(11, '9788278885790', 'Harry Potter  Y La Piedra Filosofal', 'J.K. Rowling', 'Instalado en casa de la horrible familia Dursley, en el número 4 de  Privet Drive, donde duerme en una alacena bajo la escalera y a los once años nunca ha celebrado su cumpleaños, la magia es algo totalmente desconocido para Harry Potter. Pero el día que un búho misterioso deja una carta con una invitación al  Colegio Hogwarts de Magia y Hechicería, su vida da un vuelco para siempre. Allí, en ese lugar insólito y asombroso, Harry no sólo hará amigos entrañables y conocerá un deporte que los alumnos   practican volando montados en escobas, sino que tambien descubrirá que  la magia está en todas partes y, tal vez lo más importante,  que el destino ha dispuesto para el un futuro maravilloso... siempre que sobreviva al terrible obstáculo que se interpone en su camino.', 'https://imagessl0.casadellibro.com/a/l/t7/70/9788418174070.jpg'),
(12, '9786477884193', 'Harry Potter  Y La Orden Del Fenix', 'J.K. Rowling', 'Son malos tiempos para Hogwarts. Tras el ataque de los dementores a su primo Dudley, Harry Potter comprende que Voldemort no se detendrá ante nada para encontrarlo. Muchos niegan que el Señor Tenebroso haya regresado, pero Harry no está solo: una orden secreta se reúne en Grimmauld Place para luchar contra las fuerzas oscuras. Harry debe permitir que el profesor Snape le enseñe a protegerse de las brutales incursiones de Voldemort en su mente. Pero éstas son cada vez más potentes, y a Harry se le está agotando el tiempo.', 'https://imagessl1.casadellibro.com/a/l/t7/41/9788418173141.jpg'),
(13, '9782473885160', 'Harry Potter  Y El Legado Maldito', 'J.K. Rowling', 'Ser Harry Potter nunca ha sido tarea f#cil, menos a#n desde que se ha  convertido en un ocupadísimo empleado del Ministerio de Magia, un hombre casado y padre de tres hijos.', 'https://imagessl3.casadellibro.com/a/l/t7/73/9788498388473.jpg'),
(14, '9788499890944', '1984', 'George Orwell', '«No creo que la sociedad que he descrito en1984 necesariamente llegue a ser una realidad, pero sí creo que puede llegar a existir algo parecido», escribía Orwell después de publicar su novela. Corría el año 1948, y la realidad se ha encargado de convertir esa pieza -entonces de ciencia ficción- en un manifiesto de la realidad. Harry Potter y el legado maldito es una obra de teatro de Jack Thorne basada en una historia original de  J.K. Rowling, John  Tiffany y Jack Thorne. Es la octava historia de la saga de Harry Potter y la primera que se representa oficialmente en  los escenarios.', 'https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg');





-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);
