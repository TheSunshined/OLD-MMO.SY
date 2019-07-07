<html>
<script>
function menubutton (){
    MenuContainer.classList.toggle("MenuContainerToggle"); 
    MenuButton.classList.toggle("ButtonToggle"); 
}    
</script>
<head>
    <link rel="stylesheet" href="CSS/AllFather.css" type="text/css">
    <title>MMO.sy - Najlepszy portal o MMO</title>
    <meta name="description" content="Strona poświęcona tematowi gier z gatunku MMO - Massively multiplayer online. Na stronie głównie ukazują się najnowsze wiadomości oraz porównania, lecz również nie brakuje ciekawostek.">

</head>

    <style> #MenuContainer>li:nth-child(1), nav #MenuLogo a {color: #4666FF}</style>
    
<body>
    <nav>
        <div class="Container">
        <div class="BoxMenu">
            <div id="MenuLogo"><a href="index.php">MMO.SY</a></div>
            <div onclick="menubutton()" id="MenuButton" class="MenuButtonStyle">
                <img src="CSS/SVG/menu-button.svg">
            </div>
        </div>
        <ul id="MenuContainer">
            <li>Newsy</li>
            <li>Topka</li>
            <ul class="MenuInMenu">
                <li>TOP ALL</li>
                <li>TOP NOWE</li>
            </ul>
            <li>Nowe</li>
            <li>Spis</li>
        </ul>
        </div>
    </nav>
    <section id="News">
        <header class="News-Text"></header>
        <article>
            <a href="/news">
                <div class="Box-Shadow">
                    <img class="Arrow" src="CSS/SVG/arrow-point-to-down.svg">
                    <div class="Shadow">
                    </div>
                    <img class="News-Image" src="News-Photo/CyberPunk2077E3.png">
                </div>
                <div class="News-Box">
                    <div class="NewsPCContainer">
                    <h3 class="News-Category">Ciekawostki  
                        <span>
                            <span>1032</span> <img src="CSS/SVG/chat-speech-bubbles.svg">
                            <span>600</span> <img src="CSS/SVG/likes.svg">
                            <span>5000</span> <img src="CSS/SVG/view.svg">
                        </span>
                    </h3>
                    <header>
                        <h1>Specyfikacja PC, na którym odpalano demo Cyberpunka 2077 na E3. Masakra a zarazem dramat.</h1>
                    </header>
                    <h3>17 Czerwiec 2019 / Admin</h3>
                    </div>
                </div>
            </a>
        </article>
        <article>
            <div class="Box-Shadow">
                <img class="Arrow" src="CSS/SVG/arrow-point-to-down.svg">
                <div class="Shadow">
                </div>
                <img class="News-Image" src="News-Photo/Cyberpunk2077Meme2.png">
            </div>
            <div class="News-Box">
                <div class="NewsPCContainer">
                <h3 class="News-Category">Ciekawostki  
                    <span>
                        <span>25</span> <img src="CSS/SVG/chat-speech-bubbles.svg">
                        <span>212</span> <img src="CSS/SVG/likes.svg">
                        <span>1412</span> <img src="CSS/SVG/view.svg">
                    </span>
                </h3>
                <header>
                    <h1>Cyberpunk 2077 jako jeden wielki mem.</h1>
                </header>
                <h3>17 Czerwiec 2019 / Admin</h3>
                </div>
            </div>
        </article>
        <article>
            <div class="Box-Shadow">
                <img class="Arrow" src="CSS/SVG/arrow-point-to-down.svg">
                <div class="Shadow">
                </div>
                <img class="News-Image" src="News-Photo/Ryzen%203000.png">
            </div>
            <div class="News-Box">
                <div class="NewsPCContainer">
                <h3 class="News-Category">Wycieki  
                    <span>
                        <span>25</span> <img src="CSS/SVG/chat-speech-bubbles.svg">
                        <span>212</span> <img src="CSS/SVG/likes.svg">
                        <span>1412</span> <img src="CSS/SVG/view.svg">
                    </span>
                </h3>
                <header>
                    <h1>Wyciekły ceny płyt X570 dla Ryzenów 3000. Będzie bardzo drogo</h1>
                </header>
                <h3>17 Czerwiec 2019 / Admin</h3>
                </div>
            </div>
        </article>
        <article>
            <div class="Box-Shadow">
                <img class="Arrow" src="CSS/SVG/arrow-point-to-down.svg">
                <div class="Shadow">
                </div>
                <img class="News-Image" src="/News-Photo/intelgraf.png">
            </div>
            <div class="News-Box">
                <div class="NewsPCContainer">
                <h3 class="News-Category">Ciekawostki  
                    <span>
                        <span>25</span> <img src="CSS/SVG/chat-speech-bubbles.svg">
                        <span>212</span> <img src="CSS/SVG/likes.svg">
                        <span>1412</span> <img src="CSS/SVG/view.svg">
                    </span>
                </h3>
                <header>
                    <h1>Procesory Intel Ice Lake i AMD Ryzen 3000 w benchmarku CPU-Z</h1>
                </header>
                <h3>17 Czerwiec 2019 / Admin</h3>
                </div>
            </div>
        </article>
        <article>
            <div class="Box-Shadow">
                <img class="Arrow" src="CSS/SVG/arrow-point-to-down.svg">
                <div class="Shadow">
                </div>
                <img class="News-Image" src="News-Photo/padps4.png">
            </div>
            <div class="News-Box">
                <div class="NewsPCContainer">
                <h3 class="News-Category">Ciekawostki  
                    <span>
                        <span>25</span> <img src="CSS/SVG/chat-speech-bubbles.svg">
                        <span>212</span> <img src="CSS/SVG/likes.svg">
                        <span>1412</span> <img src="CSS/SVG/view.svg">
                    </span>
                </h3>
                <header>
                    <h1>Najciekawsze promocje sprzętowe na weekend 14-16 czerwca 2019 roku</h1>
                </header>
                <h3>17 Czerwiec 2019 / Admin</h3>
                </div>
            </div>
        </article>
    </section>
    <section id="Top">
        <header id="Top-Text">TOPKA</header>
        <div class="Top-Bar-Box">
            <div class="Container">
                <div class="Container-Bar">
                    <div class="Info"><span>7.5</span> Apex Legends
                    </div>
                </div>
                <div style="width:75%;" class="Bar">
                </div>
            </div>
        </div>
        <div class="Top-Bar-Box">
            <div class="Container">
                <div class="Container-Bar">
                    <div class="Info"><span>6.21</span> Albinos Online Tak o
                    </div>
                </div>
                <div style="width:62.1%;" class="Bar">
                </div>
            </div>
        </div>
        <div class="Top-Bar-Box">
            <div class="Container">
                <div class="Container-Bar">
                    <div class="Info"><span>5.1</span> Jakaś Moba
                    </div>
                </div>
                <div style="width:51%;" class="Bar">
                </div>
            </div>
        </div>
        <div class="Top-Bar-Box">
            <div class="Container">
                <div class="Container-Bar">
                    <div class="Info"><span>4.42</span> Jakaś Moba
                    </div>
                </div>
                <div style="width:44.2%;" class="Bar">
                </div>
            </div>
        </div>
        <div class="Top-Bar-Box">
            <div class="Container">
                <div class="Container-Bar">
                    <div class="Info"><span>4.25</span> Jakaś Moba
                    </div>
                </div>
                <div style="width:42.5%;" class="Bar">
                </div>
            </div>
        </div>
    </section>
    <section id="New">
        <header>NOWE</header>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black Desert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>7.5</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:75%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black Desert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>9.5</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:95%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black yyyyDesert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>8.8</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:88%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black yyyyDesert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>8.8</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:88%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black yyyyDesert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>8.8</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:88%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="Full-Container">
                <div class="Container-Image">
                    <img class="Title-Image" src="News-Photo/Ninjazoom.png">
                </div>
                <div class="Info-Box">
                    <div class="Title-Box">
                        Black yyyyDesert Online
                    </div>
                    <div class="Top-Bar-Box">
                        <div class="Container">
                            <div class="Container-Bar">
                                <div class="Info"><span>8.8</span> #42 | Lata
                                </div>
                            </div>
                            <div style="width:88%;" class="Bar">
                            </div>
                        </div>
                    </div>
                    <div class="Meta-Data">
                    <span>
                    <h3>
                        <img src="CSS/SVG/view.svg"><span>412</span> 
                        <img src="CSS/SVG/likes.svg">    <span>421</span>
                        <img src="CSS/SVG/chat-speech-bubbles.svg"> <span>12</span>
                    </h3>
                    </span>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer>
        <div class="Author">
            <div class="Box">
                <p>Copyright 2019</p>
                <p class="Header">SUNSHINECORP</p>
            </div>
        </div>
        <div class="Contact">
            <div class="Box">
                <p><img src="CSS/SVG/close-envelope.svg"><span>kiebalalukasz@gmail.com</span></p>
            </div>
        </div>
    </footer>
</body>

</html>
