<!-- Begin Generic NavBAR-->
<nav class="navbar navbar-expand-sm navbar-light bg-lignt sticky-top">
   <!-- Brand -->
   <a class="navbar-brand" href="Accueil.php"><img src="img/iconedodo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">MIAGE</a>
   <!-- Toggler/collapsibe Button -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
   </button>
   <!-- Navbar links -->
   <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
         <li <?php if ($currentPage == 'Accueil') {  echo 'class="nav-item dropdown active"';}else{echo 'class="nav-item dropdown"';} ?>>
            <a class="nav-link dropdown-toggle "  data-toggle="dropdown" href="Accueil.php">Accueil</a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="Accueil.php#Presentation">Présentation</a>
               <a class="dropdown-item" href="Accueil.php#Caracteristiques">Caractéristiques</a>
               <a class="dropdown-item" href="Accueil.php#Embauches">Embauches</a>
               <a class="dropdown-item" href="Accueil.php#Avantages">Avantages</a>
            </div>
         </li>
         <li <?php if ($currentPage == 'Matieres') {  echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
            <a class="nav-link" href="Matieres.php">Matières</a>
         </li>
         <li <?php if ($currentPage == 'Etudiants') {  echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
            <a class="nav-link" href="Etudiants.php">Etudiants</a>
         </li>
         <li <?php if ($currentPage == 'Candidater') {  echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
            <a class="nav-link" href="Candidater.php">Candidater</a>
         </li>
      </ul>
   </div>
</nav>
<!-- END Generic NavBAR-->