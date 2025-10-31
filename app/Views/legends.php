<?= $this->extend("layout/template") ?> <!-- view se ma zabalit do teto sablony, -->

<?= $this->section("content"); ?>

    

<div class="container-fluid mt-1 px-5"><div id="carouselExampleCaptions" class="carousel minecrart-carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/legendsL.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Objevte Minecraft Legends</h3>
              <p>Vydejte se na dobrodružství v epických bitvách a ovládněte celá království.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/legends1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Strategické Bitvy</h3>
              <p>Vytvářejte armády a bojujte v dynamických bitvách proti mocným nepřátelům.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/legends2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block fw-bold">
              <h3>Budování a Taktika</h3>
              <p>Využijte různé taktiky a stavte armády pro vítězství v bitvách.</p>
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
        <h1 class="text-center text-light">Minecraft Legends</h1>
        <p class="mt-4">
            Minecraft Legends je akční strategie v reálném čase, kterou vyvinulo Mojang Studios. Na rozdíl od původního Minecraftu a Minecraft Dungeons se Legends zaměřuje na strategické boje a rozsáhlé bitvy v dynamickém světě.
        </p>
        <p>
            Hráči ovládají hrdiny a vedou armády proti mocným nepřátelům, bojují o kontrolu nad klíčovými oblastmi a brání se silám zla. Hra kombinuje prvky strategie, boje a průzkumu.
        </p>
        <h2 class="mt-4">Hlavní Vlastnosti</h2>
        <ul>
            <li>Strategie v reálném čase: Vedejte své armády a rozvíjejte taktiky pro poražení nepřátel.</li>
            <li>Velkolepé Bitvy: Zažijte rozsáhlé bitvy s mechanikami útoku a obrany.</li>
            <li>Kooperativní Mnohohráč: Spojte se s přáteli a bojujte společně v strategických bitvách a při průzkumu světa.</li>
            <li>Rozmanité Biomy: Prozkoumejte různá prostředí s odlišnými výzvami a nepřáteli.</li>
        </ul>
        <h2 class="mt-4">Proč hrát Minecraft Legends?</h2>
        <p>
            Minecraft Legends poskytuje nový zážitek, který spojuje kreativitu Minecraftu s taktickými boji a epickými bitvami. Je ideální pro hráče, kteří si užívají jak strategii, tak akční hratelnost.
        </p>
        <h2 class="mt-4">Zajímavosti</h2>
        <ul class="border-bottom border-success pb-4">
            <li>Minecraft Legends je inspirován klasickými hrami typu real-time strategy.</li>
            <li>Hra nabízí různé biomy, včetně lesů, pouští a zasněžených oblastí.</li>
            <li>Součástí hry jsou multiplayerové režimy, kde můžete bojovat po boku přátel proti mocným nepřátelským armádám.</li>
        </ul>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="images/legends-game.webp" class="img-fluid rounded" alt="Gameplay Minecraft Legends 1">
            </div>
            <div class="col-md-6">
                <img src="images/legends-game2.jpg" class="img-fluid rounded" alt="Gameplay Minecraft Legends 2">
            </div>
        </div>
    </div>

   
       

<?= $this->endSection();?>
   
       
