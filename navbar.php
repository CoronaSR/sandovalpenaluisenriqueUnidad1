<?php  

?>
<style type="text/css">
    .row{
        height: auto;
    }
    .navbar{
        background-color: #1f2261!important;
        color: white!important;
    }
    .navbar-brand{
        color: white!important;
    }
    .navbar-toggler{
        color: white!important;
        border: var(--bs-border-width) solid white;
    }
    .navbar-toggler-icon{
        background-image: 'img/navbar-icon-toggler.png'!important;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>