<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="d-flex w-50 order-0">
        <a class="navbar-brand mr-1" href="#">E-Portfolio</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="home") {echo"active";} ?>" 
      href="home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="overmij") {echo"active";} ?>" 
      href="overmij">Overmij</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="opleiding") {echo"active";} ?>" 
      href="opleiding">Opleiding</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="showcase") {echo"active";} ?>" 
      href="showcase">Showcase</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="studiemonitor") {echo"active";} ?>" 
      href="studiemonitor">Studiemonitor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="cv") {echo"active";} ?>" 
      href="cv">CV</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($paginanaam=="contact") {echo"active";} ?>" 
      href="contact">Contact</a>
    </li>
  </ul>
    </div>
    <span class="navbar-text large text-truncate mt-1 w-50 text-right order-1 order-md-last">
      Lucas de Ruijter.nl
    </span>
</nav>
