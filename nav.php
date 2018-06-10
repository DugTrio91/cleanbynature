<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/clean-by-nature-logo.png"
          alt="Clean By Nature logo, click to go home">
    </a>
    <button class="navbar-inverse navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php foreach($navMenuLinks as $link => $uri): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $uri ?>"><?php echo $link ?></a>
          </li>
        <?php endforeach ?>
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Regular Cleaning</a>
          <a class="dropdown-item" href="#">Office &amp; Showroom Cleaning</a>
          <a class="dropdown-item" href="#">End of tennancy cleaning</a>
          <a class="dropdown-item" href="#">Post building cleaning</a>
          <a class="dropdown-item" href="#">After party cleaning</a>
          <a class="dropdown-item" href="#">Carptet &amp; upholstery cleaning</a>
          <a class="dropdown-item" href="#">Home or delivery ironing service</a>
        </div>
      </li>-->
        <li class="nav-item">
          <a class="nav-link tel-number" href="telno:07714346060">07714 346 060</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
