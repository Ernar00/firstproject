<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Template</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="2.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="logo.jpg" alt="Yokaso">
        </div>
        <nav class="nav-links">
            <ul class="menu">
                <li><button class="menu-toggle"><i class="fas fa-bars"></i></button></li>
                <li><a href="#"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" style="color: #1DA1F2;"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" style="color: #C13584;"></i></a></li>
            </ul>
        </nav>
    </header>

    <nav class="dropdown-menu">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    
    <section class="container">
        <div class="left-content">
            <h1>Мы живем для того, чтобы воплощать в жизнь великие идеи</h1>
            <p>Мы сочетаем местные знания с мировым опытом, стратегию с дизайном, эмпатию с креативностью, смысл с магией.</p>
            <a href="#" class="learn-more-btn" onclick="openModal()">учить больше</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="right-content">
            <p>Из-за этого я испытываю острую боль в порицании, и в сладострастии чувствую, что страдаю от этого, но избегаю этого.</p>
        </div>
    </section>

    
    
            
            <a class="x" href="" onclick="modalClose()">X</a> 
        </div>
    </div>

    <main class="content-container">
        <div class="image-section">
            <img src="5.jpg" alt="Character Design">
        </div>
        <section>
        <div class="info-grid">
            <div class="info-block">
                <i class="fas fa-code"></i>
                <h2>РАЗРАБОТКА</h2>
            </div>
            <div class="info-block">
                <i class="fas fa-briefcase"></i>
                <h2>ЛУЧШИЕ НАВЫКИ</h2>
            </div>
            <div class="info-block">
                <i class="fas fa-paint-brush"></i>
                <h2>ДИЗАЙН</h2>
            </div>
            <div class="info-block">
                <i class="fas fa-desktop"></i>
                <h2>ОТЗЫВЧИВЫЙ</h2>
            </div>
        </div>
    </main>
    <form action="register.php" method="POST" class="registration-form">
    <label for="username">Пайдаланушының аты:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="email">Электрондық пошта:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Құпиясөз:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="confirm_password">Құпиясөзді растау:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br>

    <button type="submit">Тіркелу</button>
</form>

<div class="modal-content">
        <h2>Login</h2>
        <form action="login.php" method="POST" class="registration-form">
            <label for="username">Пайдаланушының аты:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Құпиясөз:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Кіру</button>
        </form>
    </div>


    <script src="3.js"></script>

    <script>
        
        function openModal() {
            document.getElementById("myModal").style.display = "flex";
        }

       
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        
        window.onclick = function(event) {
            const modal = document.getElementById("myModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>
    
</body>
</html>
