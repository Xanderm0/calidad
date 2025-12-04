
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velox - Bicicletas</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <!-- Barra de navegación -->
    <nav>
        <a href="ingreso.php">Ingreso</a>
        <a href="#quienes-somos">Quiénes Somos</a>
        <a href="#contacto">Contacto</a>
    </nav>

    <!-- Slider -->
    <div class="slider">
        <div class="slides">
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1598454447886-05fef5808eae?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fGJpY2ljbGV8ZW58MHx8fHwxNjE1NzgzMTQ1&ixlib=rb-1.2.1&q=80&w=1080');">
                <div>
                    <h1>Velox Bicicletas</h1>
                    <p>La pasión por la bicicleta empieza aquí</p>
                </div>
            </div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1571019613918-79761b6efec3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDJ8fGJpY2ljbGV8ZW58MHx8fHwxNjE1NzgzMTQ1&ixlib=rb-1.2.1&q=80&w=1080');">
                <div>
                    <h1>Calidad y Aventura</h1>
                    <p>Explora nuevos caminos con Velox</p>
                </div>
            </div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1518611012118-fb7ff3b8f4e3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fGJpY2ljbGV8ZW58MHx8fHwxNjE1NzgzMTQ1&ixlib=rb-1.2.1&q=80&w=1080');">
                <div>
                    <h1>Tu Mejor Compañera</h1>
                    <p>Bicicletas para cada estilo y nivel</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Quiénes somos -->
    <section id="quienes-somos">
        <h2>Quiénes Somos</h2>
        <p>
            Velox es una empresa dedicada a ofrecer las mejores bicicletas y accesorios para ciclistas de todos los niveles.
            Nos apasiona la movilidad sostenible, la aventura y la salud. Nuestro compromiso es brindar productos de calidad
            y un servicio excelente para nuestros clientes.
        </p>
    </section>

    <!-- Footer con contacto falso -->
    <footer id="contacto">
        <h2>Contacto</h2>
        <p>Teléfono: 123-456-7890</p>
        <p>Email: contacto@velox.com</p>
        <p>Dirección: Calle Falsa 123, Ciudad, País</p>
    </footer>

    <script>
        // Slider automático
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;
        let index = 0;

        setInterval(() => {
            index++;
            if(index >= totalSlides) index = 0;
            slides.style.transform = `translateX(-${index * 100}%)`;
        }, 4000); // cambia cada 4 segundos
    </script>

</body>
</html>
