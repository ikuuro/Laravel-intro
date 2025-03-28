<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('estilo/styles.css') }}">
</head>

<body>

    

    <nav>
        <ul>
        <li><a href="{{ route('login') }}"><i class="fa-solid fa-user nav-icon"></i> Login  </a></li>
        </ul>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1>Rise of Hunters Apresenta: Solo Leveling RPG</h1>
            <p>Explore o mundo de Solo Leveling e torne-se o caçador mais poderoso!</p>
            <a href="#" class="cta-button" style="position: relative; top: 50px;">Jogue agora</a>
        </div>
    </div>

    <div class="main-content">
        <div class="section">
        <h2>Destaques</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="estilo\solo-leveling3.jpg" alt="Solo Leveling Game 1">
                    <div class="info">
                        <h3>Solo Leveling: Rise of Hunters</h3>
                        <p>Experimente batalhas épicas e ascenda ao topo!</p>
                        <div class="price">R$199,90</div>
                    </div>
                </div>
            </div>
        </div>
<br>
        
               
                
        </div>

        <div class="customer-testimonials">
            <h2>O que os jogadores dizem?</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <p>"A melhor adaptação de Solo Leveling para um jogo. Incrível!"</p>
                    <div class="author">Markon Zuckenmusk</div>
                </div>
                <div class="testimonial-card">
                    <p>"Jogabilidade viciante e gráficos impressionantes!"</p>
                    <div class="author">Ronaldo Fenômeno</div>
                </div>
                
                </div>
            </div>
        </div>

       

     
     
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-top">
               
                <p>&copy; la ele mil vez</p>
            </div>
        </div>
    </footer>



   
    <script>
        document.getElementById('searchButton').addEventListener('click', function () {
            const searchInput = document.getElementById('searchInput');
            searchInput.classList.toggle('open');
            searchInput.focus();
        });


    </script>
</body>

</html>