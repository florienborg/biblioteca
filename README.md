# Biblioteca Reading Innovators 🗃 
<h1 align="center">
  <img src="https://github.com/florienborg/biblioteca/assets/131755081/9ac886b3-ef05-4166-b7b5-436be4c0f533" alt= "Logo" width=300px> 
  <!-- <spam align="center">Reading Innovators</spam> -->
</h1>

## 📓 Tabla de contenidos 
   1. [Información General](#información-general)
   2. [Mockups](#mockups)
   3. [Tecnologías](#tecnologías)
   4. [Herramientas](#herramientas)
   5. [Developers](#developers)

## 🗃  Información General

La biblioteca de nuestro barrio se quiere modernizar y necesita tener todos sus libros organizados en un programa web, tener un inventario actualizado le facilitará la gestión, para poder prestar mejor sus servicios, la administradora de la biblioteca necesita añadir libros, actualizarlos y poder borrarlos. También quiere que se visualicen en la primera página.

En este proyecto crearemos una página web con funcionalidades especificas, de manera que todo fluya eficazmente.

## Mockups

#### Versión Mobile
<img src="https://github.com/florienborg/biblioteca/assets/131755081/0fa94f79-827c-41f4-b185-d5ba59c6d428" width="300px">
<img src="https://github.com/florienborg/biblioteca/assets/131755081/88343faa-d56b-4059-882f-d7fd7de62aec" width="300px">


#### Versión Desktop

<img src="https://github.com/florienborg/biblioteca/assets/131755081/08d297e3-d8f3-4d89-bdcc-7e4248dd9d03" width="500px">
<img src="https://github.com/florienborg/biblioteca/assets/131755081/f00e7205-b553-46f4-890c-8a2abf23b56c" width="500px">

## 💻 Tecnologías
<div>
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/>
<img src="https://profilinator.rishav.dev/skills-assets/css3-original-wordmark.svg" alt="CSS3" height="50" />  
<img src="https://profilinator.rishav.dev/skills-assets/bootstrap-plain.svg" alt="react" width="40" height="40"/>
<img src="https://raw.githubusercontent.com/jmnote/z-icons/master/svg/php.svg" alt="php" width="40" height="40"/>
<img src="https://profilinator.rishav.dev/skills-assets/mysql-original-wordmark.svg" alt="react" width="40" height="40"/></div>

## 🛠 Herramientas
<div>
<img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" width="40" height="40"/>
<img src="https://w7.pngwing.com/pngs/512/824/png-transparent-visual-studio-code-hd-logo-thumbnail.png" alt="vscode" width="40" heigth="40"/>
<img src="https://w7.pngwing.com/pngs/115/721/png-transparent-trello-social-icons-icon.png" alt="trello" width="40" heigth="40"/>
<img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/>
<img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="github" width="40" heigth="40"/>
<img src="https://profilinator.rishav.dev/skills-assets/xampp.png" alt="react" width="40" height="40"/> </div>

## Instalación

Breve descripción de como poder ver nuestro proyecto, para ejecutarlo necesitas tener conocimientos previos sobre como funciona Mamp/Xamp
1. Clona este repositorio en tu máquina local:
`https://github.com/florienborg/biblioteca.git`
2. Coloca la carpeta del proyecto en la carpeta de proyectos de tu MAMP o XAMPP.
3. Crea la base de datos y la tabla:
- Abre tu gestor de bases de datos (por ejemplo, phpMyAdmin).
- Crea una nueva base de datos con el nombre que desees ( "libreria" y crea la tabla necesaria, aquí el modelo de la estructura de la base de datos).

`CREATE TABLE `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(14) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `portada` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;`

- si lo deseas puedes volcar algunos datos, pero también los puedes ir ingresando y generando desde el navegador (aquí una propuesta de libros para la biblioteca)

`INSERT INTO `libros` (`id`, `ISBN`, `titulo`, `autor`, `descripcion`, `portada`) VALUES
(1, '978-8498381498', 'El Principito', 'Antoine de Saint-Exupéry', 'Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo, El Principito concentra, con maravillosa simplicidad, la constante reflexión de Saint-Exupery sobre la amistad, el amor, la responsabilidad y el sentido de la vida.', 'https://elfarodelostresmundos.com/7541-large_default/el-principito-pop-up-salamandra-libros-el-faro-de-los-tres-mundos.jpg'),
(2, '978-1617292231', 'Grokking algoritms', 'Aditya Y. Bhargava', 'Tanto si es un novato como un veterano, este libro está diseñado para ser fácil de seguir. No hay grandes saltos de pensamiento, y cada vez que se introduce un nuevo concepto, se explica de inmediato. Este libro está escrito en un tono amigable que explica exactamente lo que necesitas saber sin complicar demasiado las cosas. Este libro supone un gran avance respecto a otros libros de aprendizaje automático del mercado. Está escrito para principiantes, pero incluye información más técnica para las personas interesadas en profundizar en este campo. Si estás empezando con el aprendizaje automático, este libro te ayudará a ponerte al día rápidamente dándote algunos conocimientos de fondo, proporcionándote ejemplos concretos y guiándote hacia la resolución de tus propios problemas. ', 'https://m.media-amazon.com/images/I/81g6X3dWlhL._AC_UF1000,1000_QL80_.jpg'),
(3, '978-8432205316', '100 años de soledad', '100 años de soledad', 'La aventura de la familia Buendía-Iguarán, representa al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero. Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Con estas palabras empieza una novela ya legendaria en los anales de la literatura universal, una de las aventuras literarias más fascinantes del siglo XX. Millones de ejemplares de este título leídos en todas las lenguas y el premio Nobel de literatura coronando una obra que se había abierto paso «boca a boca» -como gusta decir el escritor- son la más palpable demostración de que la aventura fabulosa de la familia Buendía-Iguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representaba al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.', 'https://www.penguinlibros.com/es/2513513-large_default/cien-anos-de-soledad-edicion-ilustrada.jpg'),
(4, '978-8425362378', 'Tu éxito es inevitable', 'Maite Issa', 'Entre estas páginas aprenderás cómo alcanzar el éxito a través de la manifestación, el proceso mediante el cual, usando las leyes del subconsciente y del Universo, lograrás hacer real y tangible algo que existía solo en tu imaginación. Nutrirás tu mente con contenidos que derrumbarán creencias internas nocivas, romperán el techo de cristal, te reprogramarán y obtendrás así lo que deseas y mereces.', 'https://m.media-amazon.com/images/I/417KynEvVdL.jpg'),
(5, '978-8493664923', 'Cómo hacer amigos e influir sobre las personas', 'Dale Carnegie', 'El libro Cómo ganar amigos e influir sobre las personas escrito por Dale Carnegie, es publicado en 1936, dirigido a quienes quieren aprender a ser más sociales y líderes u hombres de negocios que quieren aprender a negociar y dirigir mejor a sus equipos.', 'https://images.cdn1.buscalibre.com/fit-in/360x360/34/5c/345ce5a12e1425a12835c6e215435e38.jpg'),
(6, '978-8408163152', 'El Código Da Vinci', 'Dan Brown', 'El Código Da Vinci es una novela de ficción, en la que su autor, Dan Brown, desarrolla una trama de suspenso donde los personajes principales deben descifrar una serie de mensajes y claves para evitar que un importante secreto relacionado con la Iglesia Católica se pierda para siempre.', 'https://images.cdn2.buscalibre.com/fit-in/360x360/49/54/4954e233ad1e1a43e3f8187cd91c6997.jpg'),
(7, '978-8478885190', 'Harry Potter  y el prisionero de azkaban', 'J.K. Rowling', 'Cuando el autobús noctámbulo irrumpe en una calle oscura y frena con fuertes chirridos delante de Harry, comienza para él un nuevo curso en Hogwarts, lleno de acontecimientos extraordinarios. Sirius Black, asesino y seguidor de lord Voldemort, se ha fugado, y dicen que va en busca de Harry. En su primera clase de Adivinación, la profesora Trelawney ve un augurio de muerte en las hojas de té de la taza de Harry... Pero quizá lo más aterrador sean los dementores que patrullan por los jardines del colegio, capaces de sorberte el alma con su beso...', 'https://m.media-amazon.com/images/I/41G6AGP-QHL._SY264_BO1,204,203,200_QL40_ML2_.jpg'),
(8, '978-8439736349', 'La campana de cristal', 'Silvia Plath', 'Esta es la historia de una chica que tiene todo lo que una joven puede desear en el Nueva York de los años cincuenta: una carrera prometedora, un pretendiente que estudia medicina y toda una vida por delante. Esther Greenwood ha ganado una beca para trabajar en una revista de moda en la gran ciudad y siente que por fin podrá realizar su sueño de ser escritora. Pero entre cócteles, noches de fiesta y pilas de manuscritos descubre una sociedad que repudia las aspiraciones de las mujeres y su vida empieza a desmoronarse. Esther -alter ego de la autora- se encierra en sí misma, como si estuviera atrapada en una campana de cristal: respirando continuamente el mismo aire viciado y sin posibilidad de escapar.', 'https://imagessl9.casadellibro.com/a/l/t5/69/9788435019569.jpg'),
(9, '978-8497594257', 'Un mundo Feliz', ' Huxley Aldous', 'Los peores vaticinios del capitalismo se han cumplido: triunfan los dioses del consumo y la comodidad, y el orbe se divide en diez zonas en apariencia seguras y estables. Los humanos ya no procrean, el sexo se ha convertido solo en una diversión y las letras del alfabeto griego se han pervertido para clasificar a los seres humanos por castas. Todos aceptan su lugar en la nueva jerarquía social, perfectamente ordenada. Los valores humanos esenciales no tienen cabida en este mundo y los habitantes se crean in vitro con una técnica concebida a imagen y semejanza de una cadena de montaje. El soma, la droga por excelencia en este mundo distópico que propone Huxley, ayuda a los habitantes a escapar de la rutina. A cambio de este orden pulcro, la libertad de expresión y el pensamiento crítico han sido erradicados. Bernard Marx, el protagonista de la novela, inconformista e inteligente, deberá probar los límites de la sociedad que lo ha engendrado, iniciando un viaje más allá de las fronteras distópicas de su universo.', 'https://m.media-amazon.com/images/I/51q+8GL0z+L.jpg'),
(10, '978-8441437401', 'El kybalion', 'Hermes Trismegisto', 'El Kybalión, obra cumbre del ocultismo universal dice: "Los labios de la sabiduría permanecen cerrados, excepto para el oído capaz de comprender." Esta obra reúne las enseñanzas fundamentales y secretas que tanto han influido en los sistemas filosóficos de todas las razas y de todos los pueblos y lo hicieron desde el antiguo Egipto, cuna de la sabiduría secreta y las doctrinas místicas. Doctrinas formuladas por los hierofantes y maestros de la tierra de Isis, a aquellos preparados para participar de lo oculto. En este caso máximas originales, axiomas y preceptos formuladas por Hermes Trismegisto, el Maestro de los Maestros, padre de la sabiduría, fundador de la astrología, el descubridor de la alquimia, deificado por los egipcios bajo en nombre de Tot. Este libro es la versión clásica llevada a cabo por los autodenominados Tres Iniciados, y constituye una recopilación rigurosa de las enseñanzas hermeticas del sabio Hermes Trismegisto, "el tres veces grande", el supremo y más antiguo maestro del pensamiento hermetico; enseñanzas imprescindibles para aquellos que en nuestro atribulado mundo aspiran a acceder a la antigua y eterna sabiduría del conocimiento ocultista.', 'https://m.media-amazon.com/images/I/61aNbjyNbkL._AC_UF1000,1000_QL80_.jpg'),
(11, '978-8499890944', '1984', 'George Orwell', '«No creo que la sociedad que he descrito en1984 necesariamente llegue a ser una realidad, pero sí creo que puede llegar a existir algo parecido», escribía Orwell después de publicar su novela. Corría el año 1948, y la realidad se ha encargado de convertir esa pieza -entonces de ciencia ficción- en un manifiesto de la realidad.', 'https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg');`
4. En config modifica el archivo db.php para configurar y poder acceder al proyecto en tu navegador 

- MAMP
`function conectar(){
    $server = "localhost:8889";
    $user = "root";
    $pass = "root";
    $db = "libreria";
    $conn = mysqli_connect($server, $user, $pass);
    mysqli_select_db($conn, $db); 
    return $conn;
}`

- XAMP
`function conectar(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "libreria";
    $conn = mysqli_connect($server, $user, $pass);
    mysqli_select_db($conn, $db); 
    return $conn;
}`
y estás listo para empezar.
5. Visita la URL correspondiente en tu navegador para acceder al proyecto y disfruta.


## Developers

[Mónica Blanco](https://github.com/mgblanco10)

[Cindy Leiva](https://github.com/CindyLeiva)

[Florencia Bordón](https://github.com/florienborg)

[Génesis Núñez](https://github.com/genesis-nf)
