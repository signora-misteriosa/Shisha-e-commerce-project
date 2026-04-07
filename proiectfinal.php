<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600&family=Merriweather:wght@700&family=Playfair+Display:ital@1&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
	<header>
        <div id="antet_mobile">
            <div id="antet" style= "display : flex;">
                <button id="buttonmenu"><img src="menu_burger.png" alt="3linii" width="20"></button>
                <button><img src="search_icon.png" alt="lupa" width="20"></button>
                <button id="shisha"><a href="#section_1"><img src="shisha.png" alt="logo" width="100"></a></button>
                <button><img src="heart.png" alt="inima" width="22"></button>
                <button><img src="bag_icon.png" alt="shopbag" width="20"></button>
            </div>
        </div>
        <div id="antet_desktop">
            <div id="antet_linie-1">
                <div id="l1-1">
                    <button>Femei</button>
                    <button>Bărbați</button>
                </div>
                <button id="shisha_icon">
                    <a href="proiectfinal.html"><img src="shisha.png" alt="logo" width="250"></a>
                </button>
                <div id="l1-2">
                    <button><img src="user.png" alt="om" width="30"></button>
                    <button><img src="heart.png" alt="inima" width="30"></button>
                    <button><img src="bag_icon.png" alt="shopbag" width="30"></button>
                </div>
            </div>
            <div id="antet_linie-2">
                <div id="l2-1">
                    <button>New In</button>
                    <button>Shop By</button>
                    <button>Brands</button>
                    <button>Genți</button>
                    <button>Pre-owned</button>
                    <button>Sale</button>
                </div>
                <div id="l2-2">
                    <form class="example">
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit"><img src="search_icon.png" alt="logo" width="20"></button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <nav id="menu" style= "display : none;">
        <div id="antet_menu">
            <img src="shisha.png" alt="logo" width="130">
            <button id="close_menu"><img src="close-window.png" alt="x" width="30"></button>
        </div>
        <div class="tab">
          <button class="tablinks" onclick="deschide_categoria(event, 'Femei')">Femei</button>
          <button class="tablinks" onclick="deschide_categoria(event, 'Barbati')">Bărbați</button>
        </div>
        <div id="Femei" class="tabcontent" style="display: none;">
          <div class="Femei_cat">
            <button>Exclusive</button>
            <button>Toate gențile</button>
            <button>Genți de plajă</button>
            <button>Genți Bucket</button>
            <button>Genți Clutch</button>
            <button>Genți Mini</button>
            <button>Genți Cross-body</button>
            <button>Genți de umăr</button>
            <button>Genți Tote</button>
            <button>Sale</button>
          </div>
        </div>
        <div id="Barbati" class="tabcontent" style="display: none;">
          <div class="Femei_cat">
            <button>Poșete și genți</button>
            <button>Toate gențile</button>
            <button>Rucsacuri</button>
            <button>Genți centură</button>
            <button>Genți de mână</button>
            <button>Genți pentru laptop</button>
            <button>Serviete</button>
            <button>Genți de voiaj și Trolere </button>
            <button>Genți de umăr</button>
            <button>Genți Tote</button>
            <button>Sale</button>
          </div>
        </div>
        <div id="contul_meu">
            <p>Contul meu</p>
            <button>Conectare</button>
            <button>Înregistrează-te</button>
        </div>
    </nav>
    <section id="section_1">
        <img src="chanel.jpeg" alt="chanelbag" width="100%">
        <article>
          <p id="text1">A synonym of<br> yourself.</p>
          <p id="text2">Created with<br> passion.</p>
        </article>
    </section>
    <section id="section_2">
        <article>
            <h3>THE NEW SEASON STARTS NOW</h3>
            <p>Colecțiile de primăvară au sosit și la noi vei găsi piesele care se vor integra perfect în dulapul tău, indiferent de stilul tău.</p>
        </article>
        <button>Shop now</button>
    </section>
    <section id="section_1_desktop">
        <div>
            <article>
                <h3>THE NEW SEASON STARTS NOW</h3>
                <p>Colecțiile de primăvară au sosit și la noi vei găsi piesele care se vor integra perfect în dulapul tău, indiferent de stilul tău.</p>
            </article>
            <button>Shop now</button>
        </div>
        <img src="woman_bags.jpg" alt="womanwithbags">
    </section>
    <section id="section_3">
        <h4>Articole care ar putea să-ți placă</h4>
        <h5>Recomandări pentru tine</h5>
        <button id="vezi_mai_multe">Vezi mai multe &#8594;</button>
        <div id="liked_pr">
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p3" onclick="location.href='p6.html';" value="Click to view product details" ><img src="5.png" alt="geanta5" width="170"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">New Season</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă de umăr Le Chiquito<br>Noeud</p>
                    <p id="t4">$1,005</p>
                </div>
            </div>
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p1" ><img src="6.png" alt="geanta6" width="170"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">New Season</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă de umăr Le Bambinou</p>
                    <p id="t4"><br>$1,816</p>
                </div>
            </div>
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p2"><img src="1.png" alt="geanta1" width="170"></button>
                    </div>
                </div>
                <div id="text_produs">
                    <p id="t1">New Season</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă de umăr Le Grand<br>Chiquito</p>
                    <p id="t4">$1,576</p>
                </div>
            </div>
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p4"><img src="2.png" alt="geanta2" width="170"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">New Season</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă tote din piele Le<br>Bambinou</p>
                    <p id="t4">$1,450</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section_2_desktop">
        <img src="man_bags.jpg" alt="manwithbags">
        <article>
          <p id="text1">A synonym of yourself.</p>
          <p id="text2">Created with<br> passion.</p>
        </article>
    </section>
    <section id="section_3">
        <h4>Cele mai bune oferte</h4>
        <h5>Reduceri de preț pentru tine</h5>
        <button id="vezi_mai_multe">Vezi mai multe &#8594;</button>
        <div id="liked_pr">
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p6"><img src="8.png" alt="geanta8" width="140"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">Exclusive</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă crossbody din piele</p>
                    <p id="t4">$1,682  - 45%</p>
                    <p id="t5">$1,160</p>
                </div>
            </div>
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p7"><img src="10.png" alt="geanta10" width="140"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">Exclusive</p>
                    <p id="t2">Jacquemus</p>
                    <p id="t3">Geantă tote Le Chiquito</p>
                    <p id="t4">$1,385 - 40%</p>
                    <p id="t5">$989 </p>
                </div>
            </div>
            <div id="produs" class="p1">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p5"><img src="7.png" alt="geanta7" width="140"></button>
                    </div>
                </div>
                <div>
                    <p id="t1">Final Sale</p>
                    <p id="t2">Ferragamo</p>
                    <p id="t3">Geanta Trifolio cu mâner superior</p>
                    <p id="t4">$2,920  - 40%</p>
                    <p id="t5">$1,754</p>
                </div>
            </div>
            
            <div id="produs">
                <div>
                    <div id="heart">
                        <button id="bheart"><img id="inima" src="heart.png" alt="inima" width="22"></button>
                    </div>
                    <div id="primage">
                        <button id="p8"><img src="9.png" alt="geanta9" width="170"></button>
                    </div>
                </div>
                <div>
                <p id="t1">Final Sale</p>
                <p id="t2">Jacquemus</p>
                <p id="t3">Geantă tote Le Chiquito</p>
                <p id="t4">$2,730  - 65%</p>
                <p id="t5">$959</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section_4">
        <button id="b1">
            <img src="hanger.png" alt="umeras" width="20">
            <h4>Cum să faci cumpărături</h4>
            <h5>Ghidul tău pentru plasarea comenzilor</h5>
        </button>
        <button id="b2">
            <img src="question.png" alt="intrebare" width="20">
            <h4>Întrebări frecvente</h4>
            <h5>Aici găsești răspunsuri la întrebările tale</h5>
        </button>
        <button id="b3">
            <img src="contact_us.png" alt="message" width="20">
            <h4>Ai nevoie de ajutor ?</h4>
            <h5>Contactați echipa noastră globală de servicii</h5>
        </button>
    </section>
    <footer id="section_5">
        <div id="info_">
            <div id="info">
                <button class="acordeon">Follow us</button>
                <div class="content_acordeon">
                    <div id="icons first">
                        <button class="imgbtn"><img src="twitter.png" alt="twitter" width="25"></button>
                        <button class="imgbtn"><img src="facebook.png" alt="facebook" width="25"></button>
                        <button class="imgbtn"><img src="instagram.png" alt="instagram" width="25"></button> 
                    </div>  
                </div>
            </div>
            <div id="info">
                <button class="acordeon">Serviciu Clienți</button>
                <div class="content_acordeon">
                    <div id="icons">
                        <button>Contactați-ne</button>
                        <button>Comenzi și livrare</button>
                        <button>Plata și livrare</button> 
                        <button>Retururi și rambursări</button>
                        <button>Politica de confidențialitate</button> 
                    </div>  
                </div>
            </div>
            <div id="info">
                <button class="acordeon">Despre SHISHA</button>
                <div class="content_acordeon">
                    <div id="icons">
                        <button>Despre noi</button>
                        <button>Cariere</button>
                        <button>Program de afiliere</button> 
                        <button>Reducere pentru studenți UNiDAYS</button>
                    </div>  
                </div>
            </div>
        </div>
        <div id="info_4">
            <div id="info_3">
            <div id="info_1">
                <img src="romania.png" alt="flag" width="25">
                <p>România, CAD&dollar;</p>
            </div>
            <div id="info_2">
                <img src="copyright.png" alt="c" width="15">
                <p>Copyright 2023 SHISHA UK Limited. Toate drepturile rezervate.</p>
            </div>
        </div>
        </div>
    </footer> 

    <script>
            var buttonmenu = document.getElementById('buttonmenu');
            var menu = document.getElementById('menu');
            var antet = document.getElementById('antet')
            var close = document.getElementById ('close_menu')

            buttonmenu.addEventListener('click', function() {
                if (menu.style.display === 'none' && antet.style.display === 'flex') {
                    menu.style.display = 'block';
                    antet.style.display = 'none';
                }
                });

                close.addEventListener('click', function() {
                    if (menu.style.display === 'block' && antet.style.display === 'none') {
                        menu.style.display = 'none';
                        antet.style.display = 'flex';
                    } 
                });


            function deschide_categoria(evt, category) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(category).style.display = "block";
                evt.currentTarget.className += " active";
            }

            var a = document.getElementsByClassName("acordeon");
            var i;

            for (i = 0; i < a.length; i++) {
              a[i].addEventListener("click", function() {
                this.classList.toggle("activa");
                var content_acordeon = this.nextElementSibling;
                if (content_acordeon.style.maxHeight) {
                  content_acordeon.style.maxHeight = null;
                } else {
                  content_acordeon.style.maxHeight = content_acordeon.scrollHeight + "px";
                } 
              });
            }
    </script>

</body>
</html> 