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
            <img src="images/dungeon.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Objevte Minecraft Dungeons</h3>
              <p>Vydejte se na dobrodružství plné dungeonů, pokladů a nebezpečných nepřátel.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/dungeon1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Kooperativní Akce</h3>
              <p>Hrajte s přáteli a společně překonávejte výzvy v týmové hře.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/dungeon3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Unikátní Výbava</h3>
              <p>Najděte vzácné zbraně a artefakty, které vám pomohou v boji.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/dungeon2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Epické Bitvy</h3>
              <p>Postavte se mocným bossům a odhalte tajemství dungeonů.</p>
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
    
    
    <div class="container mt-5 border-top border-success">
        <h1 class="text-center text-light">Minecraft Dungeons</h1>
        <p class="mt-4">
            Minecraft Dungeons je akční dobrodružná hra vyvinutá studiem Mojang Studios a Double Eleven. Je spin-offem Minecraftu a vyšla v květnu 2020. Na rozdíl od původního Minecraftu se Dungeons zaměřuje na prozkoumávání dungeonů a kooperativní hraní.
        </p>
        <p>
            Hráči prozkoumávají procedurálně generované dungeony plné pastí, hádanek a nepřátel. Hra klade důraz na boj, sbírání kořisti a přizpůsobení postavy, čímž nabízí unikátní zážitek oproti sandboxové povaze Minecraftu.
        </p>
        <h2 class="mt-4">Hlavní Funkce</h2>
        <ul>
            <li>Kooperativní Hraní: Hrajte s až čtyřmi přáteli místně nebo online.</li>
            <li>Unikátní Kořist: Objevujte mocné zbraně, brnění a artefakty pro vylepšení vaší postavy.</li>
            <li>Procedurálně Generované Úrovně:Každý dungeon nabízí nový a nepředvídatelný zážitek.</li>
            <li>Bitvy s Bossem: Postavte se náročným bossům, abyste postupovali v příběhu.</li>
        </ul>
        <h2 class="mt-4">Proč hrát Minecraft Dungeons?</h2>
        <p>
            Minecraft Dungeons nabízí svěží pohled na Minecraft univerzum, kombinuje kouzlo původní hry s rychlou akcí a napínavým hraním. Je ideální pro hráče, kteří si užívají kooperativní dobrodružství a lovení pokladů.
        </p>
        <h2 class="mt-4">Zajímavosti</h2>
        <ul class="border-bottom border-success pb-4">
            <li>Minecraft Dungeons byl inspirován klasickými dungeonovými hrami, jako je Diablo.</li>
            <li>Hra obsahuje různé biomy, včetně lesů, pouští a zasněžených hor.</li>
            <li>Obsahuje sezónní aktualizace a DLC, které rozšiřují obsah a příběh hry.</li>
        </ul>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="images/dungeon-game1.jpg" class="img-fluid rounded" alt="Dungeons Gameplay Image 1">
            </div>
            <div class="col-md-6">
                <img src="images/Dunegon.game.avif" class="img-fluid rounded" alt="Dungeons Gameplay Image 2">
            </div>
        </div>
    </div>
   
       

<?= $this->endSection();?>

   
       
