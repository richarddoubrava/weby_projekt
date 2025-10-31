<<?= $this->extend("layout/template") ?> <!-- view se ma zabalit do teto sablony, -->

<?= $this->section("content"); ?>

    
<div class="container-fluid mt-5 px-5"><div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/movie.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-danger-emphasis fw-bold">
              <h3>Minecraft: Film</h3>
              <p>Epické dobrodružství zasazené do blokového světa Minecraftu, kde hrdinové povstanou, aby zachránili svou zemi.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/movie1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-succes fw-bold">
              <h3>Stavění snů</h3>
              <p>Sledujte cestu mladého stavitele, který odhaluje tajemství Nadsvěta.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/movie2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Útěk z Netheru</h3>
              <p>Napínavý útěk z ohnivých hlubin Netheru, kde na každém rohu číhá nebezpečí.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/movie3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hněv Ender Draka</h3>
              <p>Ultimátní souboj proti Ender Drakovi za záchranu Minecraftového vesmíru.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container mt-5 text-center">
      <h2 class="text-center mb-4">O filmu Minecraft</h2>
      <p>
      Film Minecraft je epické dobrodružství zasazené do světa plného bloků, kde se hrdinové musí spojit, aby čelili nebezpečí, které ohrožuje jejich domov. Tento film přináší jedinečný pohled na oblíbenou hru, kde se příběh zaměřuje na odvahu, přátelství a kreativitu.
      </p>
      <h3>Hlavní postavy</h3>
      <ul class="list-unstyled">
      <li>Steve: Odvážný průzkumník a stavitel, který vede skupinu hrdinů.</li>
      <li>Alex: Zkušená bojovnice a Steveova věrná přítelkyně.</li>
      <li>Ender Drak: Mocný protivník, který ohrožuje celý Minecraftový svět.</li>
      </ul>
     
      <h3>Proč se těšit na film?</h3>
      <ul class="list-unstyled">
      <li>Úžasné vizuální efekty inspirované hrou Minecraft.</li>
      <li>Napínavý příběh plný zvratů a emocí.</li>
      <li>Dobrodružství, které osloví fanoušky všech věkových kategorií.</li>
      </ul>
      <p>
      Připravte se na nezapomenutelný zážitek, který vás vtáhne do světa Minecraftu jako nikdy předtím!
      </p>
      <img class="m-3 film-img rounded-circle img-fluid" src="images/steve.webp" alt="">
      <img class="m-3 film-img rounded-circle img-fluid" src="images/natalie.webp" alt="">
      <img class="m-3 film-img rounded-circle img-fluid" src="images/dawn.jpeg" alt="">
    </div>

   
       

<?= $this->endSection();?>

