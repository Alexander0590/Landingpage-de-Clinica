<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="header">
    <div class="menu ">
       <a href="#" class="logo"> Salud Integral</a>
       <input type="checkbox" id="menu">
       <label for="menu">
         <img src="image/menu (1).png" class="menu-icon" alt="">
       </label>
       <nav class="navbad">
         <ul>
            <li> <a href="#"> Inicio</a></li>
            <li> <a href="#"> Nosotros</a></li>
            <li> <a href="#"> Servicios</a></li>
            <li> <a href="#"> Contacto</a></li>
            
         </ul>
       </nav>

    </div>
    <div class="header-content">
      <div class="header-text">
        <h1>Centro Medico</h1>
        <p>
            En nuestra clínica nos especializamos en brindar atención médica personalizada y de calidad, 
            con un enfoque centrado en el bienestar integral de nuestros pacientes. Contamos con un equipo 
            de profesionales altamente calificados y tecnología avanzada para ofrecer diagnósticos precisos 
            y tratamientos efectivos. Nuestro objetivo es proporcionar un ambiente cómodo y seguro donde puedas
            confiar plenamente en tu salud. Estamos comprometidos con tu bienestar y te acompañamos 
            en cada paso hacia una vida más saludable.
        </p>
        <a href="#" class="btn-1">Informacion</a>
      </div>
      <div class="header-img">
        <img src="image/left.png" alt="">

      </div>
    </div>
</header>
<section class="about conteiner">
    <div class="about-img">
        <img src="image/about.png" alt="">

    </div>
    <div class="about-text">
        <h2>Nosotros</h2>
        <p>En <b>SALUD INTEGRAL</b>, nos dedicamos a ofrecer atención médica integral de la más alta calidad. Nuestro equipo multidisciplinario está formado por profesionales apasionados por la salud y comprometidos con brindar un servicio cálido, cercano y personalizado. 

        </p>
    <br>
        <p>Creemos en la importancia de la prevención, el diagnóstico temprano y los tratamientos efectivos para mejorar la calidad de vida de nuestros pacientes. Con un enfoque centrado en la persona, nos esforzamos por crear un ambiente de confianza, donde cada paciente recibe la atención que merece en cada etapa de su vida.</p>

    </div>

</section>
 <main class="services">
    <h2>Servicios</h2>
    <div  class="servicios-conteiner">

      <div class="servicio1">
       <i class="fa-shorp fa-solid fa-hospital-user"></i>
       <h1>Pedriatria</h1>
      </div>

      <div class="servicio1">
        <i class=" fa-solid fa-bed-pulse"></i>
        <h1>Psicologia</h1>
       </div>

       <div class="servicio1">
        <i class="fa-shorp fa-solid fa-stethoscope"></i>
        <h1>Dermatologia</h1>
       </div>

      <div class="servicio1">
        <i class=" fa-solid fa-hospital"></i>
        <h1>Cardiologia</h1>
       </div>

    </div>
 </main>


<section class="formulario">
    <form method="post"  autocomplete="off">
        <h2>Agenda Consulta</h2>
        <div class="input-grupo">

            <div class="input-conteiner">
                <input type="text" name="name"  required pattern="[A-Za-z\s]+" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-conteiner">
                <input type="text" name="telf" maxlength="9" required pattern="[0-9]{9}" placeholder="Telefono Celular">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-conteiner">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-conteiner">
               <textarea name="mensaje"  placeholder="Detalles De La Consulta"></textarea>
            </div>
            <input type="submit" name="enviar" class="btn" onclick="enviar()">
        
        </div>
    </form>
</section>

<footer class="footer">
    <div class="footer-conteiner">
         <div class="logo">
            <a href="#" id="logo">Salud Integral</a>

         </div>

         <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>

         </div>

         

    </div>
    <div class="copy">
        <h5>Copyright&copy; 2024 - Página creada por Alexander YS- <br>Todos los derechos reservados</h5> 
      </div>

</footer>
<?php
 include("send.php");

?>
<script>
    function enviar(){
        window.location.href="http//localhost/pagina-clinica"

    }

</script>
</body>
</html>