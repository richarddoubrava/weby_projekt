<?= $this->extend("layout/template") ?> <!-- view se ma zabalit do teto sablony, -->

<?= $this->section("content"); ?>

    

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 g-4 mt-3 p-2 border-bottom border-success">
      <div class="col">
        <a href="">
          <div class="card h-100">
            <img class="card-img-top" src="images/Minecraft-ORG.jpg" alt="Minecraft">
            <div class="card-body text-center">
              <h3 class="card-title text-light ">Minecraft</h3>
              <p class="card-text small">Minecraft je sandboxová hra, která umožňuje hráčům stavět a prozkoumávat
                nekonečné světy plné dobrodružství.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="">
          <div class="card h-100">
            <img class="card-img-top" src="images/legends.webp" alt="Legends">
            <div class="card-body text-center ">
              <h3 class="card-title text-light ">Minecraft Legends</h3>
              <p class="card-text small">Minecraft Legends je akční strategická hra, která hráčům umožňuje vést své
                spojence do epických bitev za záchranu světa.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="">
          <div class="card h-100">
            <?php
$data = [
    "class" => "card-img-top",
    'alt' => "Dungeons",
    "src" => "images/dungeons.webp"
];
echo img($data);
?>
            
            <div class="card-body text-center">
              <h3 class="card-title text-light">Minecraft Dungeons</h3>
              <p class="card-text small">Minecraft Dungeons je akční dobrodružná hra inspirovaná klasickými dungeon
                crawlery, kde hráči bojují proti hordám nepřátel a objevují poklady.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container mt-4">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card max">
          <img src="images/block.png" class="card-img-top" alt="Blokový svět">
          <div class="card-body">
            <h5 class="card-title">Blokový svět</h5>
            <p class="card-text">Prozkoumejte svět tvořený bloky, od obyčejné hlíny po cenné rudy.</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card max">
          <img src="images/biomes.avif" class="card-img-top" alt="Biomy">
          <div class="card-body">
            <h5 class="card-title">Biomy</h5>
            <p class="card-text">Objevte různé biomy jako lesy, pouště a hory.</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card max">
          <img src="images/characters.webp" class="card-img-top" alt="Postavy">
          <div class="card-body">
            <h5 class="card-title">Postavy</h5>
            <p class="card-text">Seznamte se se Stevem, Alex a dalšími postavami ve světě Minecraftu.</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/survival.webp" class="card-img-top" alt="Režim přežití">
          <div class="card-body">
            <h5 class="card-title">Režim přežití</h5>
            <p class="card-text">Sbírejte suroviny a přežijte v divokém světě Minecraftu.</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/Creative.jpeg" class="card-img-top" alt="Kreativní režim">
          <div class="card-body">
            <h5 class="card-title">Kreativní režim</h5>
            <p class="card-text">Postavte cokoliv chcete s neomezenými zdroji!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/adventure.jpg" class="card-img-top" alt="Dobrodružný režim">
          <div class="card-body">
            <h5 class="card-title">Dobrodružný režim</h5>
            <p class="card-text">Prozkoumejte vlastní mapy a dokončete dobrodružství v Minecraftu.</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/hardcore.webp" class="card-img-top" alt="Hardcore režim">
          <div class="card-body">
            <h5 class="card-title">Hardcore režim</h5>
            <p class="card-text">Přežijte co nejdéle, s jediným životem!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/crafting.png" class="card-img-top" alt="Vyrábění">
          <div class="card-body">
            <h5 class="card-title">Vyrábění</h5>
            <p class="card-text">Kombinujte suroviny a vytvořte nástroje, zbroj a další!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/enchanting.jpg" class="card-img-top" alt="Očarování">
          <div class="card-body">
            <h5 class="card-title">Očarování</h5>
            <p class="card-text">Vylepšete své předměty mocnými očarováními!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/redstone.jpeg" class="card-img-top" alt="Redstone">
          <div class="card-body">
            <h5 class="card-title">Redstone</h5>
            <p class="card-text">Vytvářejte stroje a automatizujte svůj svět pomocí redstonu!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/monsters.webp" class="card-img-top" alt="Monstra">
          <div class="card-body">
            <h5 class="card-title">Monstra</h5>
            <p class="card-text">Setkejte se s creepery, zombiemi a dalšími nepřátelskými tvory!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/bosses.jpg" class="card-img-top" alt="Bossové">
          <div class="card-body">
            <h5 class="card-title">Bossové</h5>
            <p class="card-text">Porazte mocné bossy jako Ender Draka a Withera!</p>
            <a href="#" class="btn btn-primary">Zjistit více</a>
          </div>
        </div>
      </div>
    </div>
  </div>

   
       

<?= $this->endSection();?>