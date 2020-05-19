<!-- Begin Generic NavBAR-->
<nav class="navbar navbar-expand-sm navbar-light bg-lignt sticky-top">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="img/iconedodo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">Mon Master</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
              <li class="nav-item dropdown" <?php if ($currentPage == 'Accueil') {  echo 'class="nav-item dropdown active"';} ?>>
                 <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="Accueil.php">Accueil</a>
                 <div class="dropdown-menu">
                    <a class="dropdown-item" href="Accueil.php#Presentation">Présentation</a>
                    <a class="dropdown-item" href="Accueil.php#Cracteristiques">Caractéristiques</a>
                    <a class="dropdown-item" href="Accueil.php#Embauches">Embauches</a>
                    <a class="dropdown-item" href="Accueil.php#Avantages">Avantages</a>
                 </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#">Matières</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#">Etudiants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Candidater</a>
             </li>
           </ul>
        </div>
     </nav>
   <!-- END Generic NavBAR-->