<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<body class="">
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid border-bottom border-success">
      <a class="navbar-brand" href="#"><img class="mb-1" style="width: 180px;" src="images/Minecraft.svg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" <?= anchor("spoluzaci", "Spolužáci"); ?>  
          </li>
          <li class="nav-item">
            <a class="nav-link" <?= anchor("film", "Film"); ?> 
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Hry</a>
            <div class="dropdown-menu">
              <a class= "dropdown-item" <?= anchor("minecraft", " Minecraft"); ?>  
              <a class="dropdown-item"  <?= anchor("dungeons", " Minecraft Dungeons"); ?>  
              <a class="dropdown-item"  <?= anchor("legends", " Legends"); ?> 
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Hledat">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Hledat</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>