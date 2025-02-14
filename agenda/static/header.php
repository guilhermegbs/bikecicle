<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/header.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BikeCicle</title>
</head>
<body>
    <header>
        <div id="LogoBike">
            <img src="./assets/Lyn2.png" alt="Logo da Bike" class="logo-img">
        </div>
        <nav>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Agende Agora</a></li>
                <li><a href="services-container">Serviços</a></li>
                <li><a href="sobreNos.php">Sobre Nós</a></li>
            </ul>
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i> <!-- Ícone do menu hamburguer -->
            </div>
        </nav>
    </header>

    <script>
        // Seleciona o botão do menu hamburguer e a lista de links do menu
        const menuToggle = document.getElementById("mobile-menu");
        const menu = document.getElementById("menu");

        // Adiciona um evento de clique no botão
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active"); 
        });
    </script>
</body>
</html>
