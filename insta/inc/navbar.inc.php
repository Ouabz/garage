  <?php
$title = "InstaPop";

?>
  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">INSTAGRAM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <?php if($_SESSION['statut'] == 2){
               echo '<button class="btn btn-success my-2 my-sm-0" type="submit"> Administration</button> ';
                 }else{}
                 ?>
                <li class="nav-item active">
                  <a class="nav-link" href="article.php">ACCUEIL <span class="sr-only">(current)</span></a>
                </li>
 <li class="nav-item">
                  <a class="nav-link" href="poste.php">Poste</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mes-articles.php">My Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="allpost.php">All Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Urbain
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Moderne</a>
                    <a class="dropdown-item" href="#">Geek</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Paysage</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              
              <?php if(empty($_SESSION['email']))
                echo ' <form class="form-inline my-2 my-lg-0"> <a href="login" class="btn btn-outline-info my-2 my-sm-0">Inscription / Connexion</a>';
                else {
                  echo  '<form class="form-inline my-2 my-lg-0"> <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>';
                }

                ?>
              </form>

            </div>
          </nav>