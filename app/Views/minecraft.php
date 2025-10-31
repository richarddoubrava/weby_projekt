<?= $this->extend("layout/template") ?> <!-- view se ma zabalit do teto sablony, -->

<?= $this->section("content"); ?>

    

<div class="container-fluid mt-1 px-5"><div id="carouselExampleCaptions" class="carousel minecrart-carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/minecraft-page2.avif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block s fw-bold">
              <h3>Prozkoumejte Nekonečné Světy</h3>
              <p>Objevte nekonečné možnosti blokového vesmíru Minecraftu, kde kreativita nezná hranic.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/survival.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold ">
              <h3>Dobrodružství v Přežití</h3>
              <p>Shromažďujte suroviny, stavte úkryty a přežijte proti mobům v náročném režimu přežití.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/Creative.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none  d-md-block fw-bold">
              <h3>Uvolněte Kreativitu</h3>
              <p>Postavte cokoliv, co si dokážete představit, s neomezenými zdroji v kreativním režimu.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/minecraft-page1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Epické Souboje s Bossy</h3>
              <p>Postavte se Ender Drakovi a dalším výzvám v ultimátním zážitku Minecraftu.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Předchozí</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Další</span>
        </button>
      </div>
    
      <div class="container mt-5 border-top  border-success">
        <h1 class="text-center text-light">Minecraft</h1>
        <p class="mt-4">
            Minecraft je sandboxová videohra vyvinutá studiem Mojang Studios. Hra byla vytvořena Markusem "Notch" Perssonem v programovacím jazyce Java a poprvé byla veřejně vydána v květnu 2009. Oficiálně byla vydána v listopadu 2011, kdy vývoj převzal Jens Bergensten.
        </p>
        <p>
            V Minecraftu hráči prozkoumávají blokový, procedurálně generovaný 3D svět s nekonečným terénem. Mohou objevovat a získávat suroviny, vyrábět nástroje a předměty, a stavět struktury nebo zemní práce. V závislosti na herním režimu mohou hráči bojovat proti počítačem ovládaným mobům, stejně jako spolupracovat nebo soutěžit s ostatními hráči ve stejném světě.
        </p>
        <h2 class="mt-4">Herní Režimy</h2>
        <ul>
            <li>Režim Přežití:Hráči musí získávat zdroje k budování světa a udržování zdraví.</li>
            <li>Režim Kreativity: Hráči mají neomezené zdroje k stavění a možnost létat.</li>
            <li>Režim Dobrodružství: Hráči mohou hrát vlastní mapy vytvořené jinými hráči s konkrétními pravidly.</li>
            <li>Hardcore Režim: Variant přežití s trvalou smrtí, kde má hráč pouze jeden život.</li>
        </ul>
        <h2 class="mt-4">Proč je Minecraft tak populární?</h2>
        <p>
            Popularita Minecraftu pramení z jeho otevřeného herního stylu, který hráčům umožňuje vyjádřit jejich kreativitu a představivost. Má také silnou komunitu, která vytváří mody, vlastní mapy a servery pro více hráčů, čímž zvyšuje opakovatelnost hry.
        </p>
        <h2 class="mt-4">Zábavná Fakta</h2>
        <ul  class="border-bottom border-success pb-4">
            <li>Minecraft je nejprodávanější videohra všech dob, s více než 200 miliony prodanými kusy.</li>
            <li>Hra byla použita ve vzdělávacím prostředí k výuce předmětů jako matematika, historie a programování.</li>
            <li>Ikonický Creeper byl vytvořen náhodou kvůli chybě v kódu, když se snažili vytvořit prase.</li>
        </ul>
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="images/minecraft-game.png" class="img-fluid rounded" alt="Gameplay Image 1">
          </div>
          <div class="col-md-6">
            <img src="images/minecraft-game2.webp" class="img-fluid rounded" alt="Gameplay Image 2">
          </div>
        </div>
    </div>
    
      
       

<?= $this->endSection();?>