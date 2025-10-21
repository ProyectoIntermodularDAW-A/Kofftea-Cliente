<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
    <title>KoffTea</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.html">
                <img src="images/logo.png" alt="Logo de KoffTea">
            </a>
        </div>
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar...">
        </div>
        <nav class="nav-icons">
            <ul>
                <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <p class="quote">
                    "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                </p>
                <button>Descubrir</button>
            </div>
            <div class="hero-img">
                <img src="./images/products/arab_coffee.png" alt="Paquete de café">
            </div>
        </section>

        <section class="features">
            <h2>Curabitur a condimentum sapien</h2>
            <div class="feature-items">
                <article>
                    <img src="./images/category/arab-beans.png" alt="Granos de café árabe">
                    <h3>Donec blandit</h3>
                </article>
                <article>
                    <img src="./images/category/african-beans.jpg" alt="Granos de café africano">
                    <h3>Diam ipsum</h3>
                </article>
                <article>
                    <img src="./images/category/matcha.jpeg" alt="Té verde">
                    <h3>Donec blandit</h3>
                </article>
                <article>
                    <img src="./images/category/chai-te.jpg" alt="Chai">
                    <h3>Diam ipsum</h3>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 KoffTea. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
