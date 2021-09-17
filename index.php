<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Gabriel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    
</head>

<body>

    <section id="home">
    
        <header>
            <a href="#"><img src="img/logo.png" alt="">
            </a>
            <ul id="menu">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#perfil">Perfil</a></li>
                <li><a href="#educacion">Educación</a></li>
                <li><a href="#laboral">Experiencia laboral</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contacto">Contactar</a></li>
            </ul>
            

        </header>
            <h1>Soy Gabriel <br> <p>Soy Ingeniero de Software</p> </h1>
            <img src="img/sgrc.png" alt="" class="sr">
        
        
    </section>

    <section id="perfil">
        <img src="img/foto.jpg" alt="" class="foto-gabriel">
        <div id="apartado-perfil">
            <h2>Nombre</h2>
            <p>Gabriel Reyes Cruz</p><br>
            <h3>Edad</h3>
            <p>21 años</p><br>
            <h3>Perfil profesional</h3>
            <p>Ingeniero de software con amplia experiencia en proyectos de desarrollo, diseño, <br>
                testing, desarrollando nuevo software, y habilidad para terminar proyectos en tiempo y forma.</p><br>
            <h3>Objetivo profesional</h3>
            <p>Formar parte de una empresa en la que pueda poner en práctica todos mis conocimientos, que me brinde la
                <br>
                oportunidad de alcanzar todas mis metas trazadas.</p>
        </div>
        <h1>Perfil</h1>
    </section>


    <section id="educacion">
        <img src="img/logo-uv.png" alt="" class="logo-escuela">
        <div id="apartado-educacion">
            <h2>Último grado de estudios</h2>
            <p>Estudiante de la Licenciatura en Ingeniería de Software en la Universidad Veracruzana.</p><br>
        </div>
        <h1>Educación</h1>
    </section>

    <section id="laboral">
        <div class="linea"></div>
        <div id="apartado-fecha1">
            <h2>2021</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, saepe.</p><br>
        </div>
        <div id="apartado-fecha2">
            <h2>2020</h2>
            <p>Lorem ipsum, dolor sit amet consectetur <br> adipisicing elit. Deleniti, neque.</p><br>
        </div>
        <div id="apartado-fecha3">
            <h2>2019</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptatem itaque laborum repudiandae
                repellendus nesciunt!</p><br>
        </div>
        <div id="apartado-fecha4">
            <h2>2018</h2>
            <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Aliquam, ut.</p><br>
        </div>
        <h1>Experiencia laboral</h1>
    </section>

    <section id="skills">
        <div class="skills">
                <h2>HTML</h2><span class="bar"><span class="html"></span></span><br>
                <h2>CSS</h2><span class="bar"><span class="css"></span></span><br>
                <h2>Java</h2><span class="bar"><span class="java"></span></span><br>
                <h2>PHP</h2><span class="bar"><span class="php"></span></span><br>
        </div>

        <h1>Skills</h1>
    </section>

    <section id="contacto">
        <div class="caja">
            <form method="post">
                <input type="text" placeholder="name" name="name" required="">
                <input type="text" placeholder="email" name="email" required="">
                <input type="text" placeholder="asunto" name="asunto"  required="">
                <textarea placeholder="mensaje" name="msg"> </textarea>
                <input type="submit" name="enviar">
                
            </form>

        </div>
        <h1>Contactar</h1>
    </section>

    <footer>
        <strong>© 2021 Gabriel Reyes Cruz CV.  All Rights Reserved.</strong> 
    </footer>

    <?php
                include("correo.php");
            ?>
</body>
</html>