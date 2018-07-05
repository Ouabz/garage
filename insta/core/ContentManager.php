<?php
Class ContentManager{
    // Propriétés
    private $bdd;
    // constructor
    public function __construct(){
        require('Connexion.php');        
        $connexion = Connexion::getInstance();
        $this->bdd = $connexion->bdd; }
        // methodes
        /**
        * 
        */
     
        public function addCat($pPost, $pFIles){

            // Verifier si on a un fichier image
            $image="";
            if(!empty($pFIles['picture']['tmp_name'])){
                $uniq = uniqid();
                // uniqid est une methode native de php qui renvoi un numéo unique
                // cela permet d'être sur de ne pas avoir 2fois le même fichier image
                move_uploaded_file($pFIles['picture']['tmp_name'], "../images/".$uniq.$pFIles['picture']['name']);
                $image = $uniq.$pFIles['picture']['name'];
            }
            $title = mb_convert_case($pPost['title'], MB_CASE_TITLE, "UTF-8");
            $query = $this->bdd->prepare('INSERT INTO category (cat_title,cat_pict) VALUES ("'.$title.'", "'.$image.'")');
            $query->execute();
        }
            private function createKey($pNum){
        $chars = "0123456789abcdefghijklmnopqrstuvwxyz";
        // On casse la chaine de caractere
        $t = str_split($chars);
        // Déclaration de la chaine
        $reponse= '';

        for($i=0; $i < $pNum; $i++){
            // On tire un chiffre aléatoire
            $random = rand(0, strlen($chars)-1);
            // on additionne
            $response.= $t[$random];
        }
        return $response;
    }
        // Getter/Setter
        public function addArtist($pPost, $pFIles){
   
            // Verifier si on a un fichier image
            $avatar="";
            if(!empty($pFIles['avatar']['tmp_name'])){
                $uniq = uniqid();
                // uniqid est une methode native de php qui renvoi un numéo unique
                // cela permet d'être sur de ne pas avoir 2fois le même fichier image
                move_uploaded_file($pFIles['avatar']['tmp_name'], "../images/".$uniq.$pFIles['avatar']['name']);
                $avatar = $uniq.$pFIles['avatar']['name'];
            }
            $salt = $this->createKey(22);
            $options = [
                'cost' => 11,
                // 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
                'salt' => $salt
            ];
        $password = md5($pPost['password'], $options);

        $firstname = htmlspecialchars(mb_convert_case($pPost['firstname'], MB_CASE_TITLE, "UTF-8"));

            $name = mb_convert_case($pPost['name'], MB_CASE_TITLE, "UTF-8");

            $adress = mb_convert_case($pPost['adress'], MB_CASE_TITLE, "UTF-8");

            $city = mb_convert_case($pPost['city'], MB_CASE_TITLE, "UTF-8");

            $country = mb_convert_case($pPost['country'], MB_CASE_TITLE, "UTF-8");

            $email = $pPost['email'];

            $lat = mb_convert_case($pPost['lat'], MB_CASE_TITLE, "UTF-8");

            $lon = mb_convert_case($pPost['lon'], MB_CASE_TITLE, "UTF-8");
         /*
        $firstname = htmlspecialchars(mb_convert_case($pPost['firstname'], MB_CASE_TITLE, "UTF-8"));
          $name = htmlspecialchars(mb_convert_case($pPost['name'], MB_CASE_TITLE, "UTF-8"));
            $adress = htmlspecialchars(mb_convert_case($pPost['adress'], MB_CASE_TITLE, "UTF-8"));
              $city = htmlspecialchars(mb_convert_case($pPost['city'], MB_CASE_TITLE, "UTF-8"));
                $country = htmlspecialchars(mb_convert_case($pPost['country'], MB_CASE_TITLE, "UTF-8"));
                  $email = htmlspecialchars(mb_convert_case($pPost['email'], MB_CASE_TITLE, "UTF-8"));
                  
      */

            $pseudo = $pPost['pseudo'];

            $statut = 0;
            if(isset($pPost["statut"])){
                $statut = 1;
            }
           
            $date = date("Y-m-d H:i:s");
            $query = $this->bdd->prepare('INSERT INTO artiste (firstname,name_art,adress,city,country,email,lat,lon,password,pseudo,avatar,statut,uploaded_at,salt) VALUES ("'.$firstname.'", "'.$name.'", "'.$adress.'", "'.$city.'", "'.$country.'", "'.$email.'", "'.$lat.'", "'.$lon.'", "'.$password.'", "'.$pseudo.'", "'.$avatar.'", "'.$statut.'", "'.$date.'", "'.$salt.'")');
            $query->execute();
        }
    /**
     * Add Artist Page
     */
    public function registerArtist($pPost, $pFIles){
    
        
        
        // Verifier si on a un fichier image
        $avatar="";
        if(!empty($pFIles['avatar']['tmp_name'])){
            $uniq = uniqid();
            // uniqid est une methode native de php qui renvoi un numéo unique
            // cela permet d'être sur de ne pas avoir 2fois le même fichier image
            move_uploaded_file($pFIles['avatar']['tmp_name'], "../images/".$uniq.$pFIles['avatar']['name']);
            $avatar = $uniq.$pFIles['avatar']['name'];
        }
        $salt = $this->createKey(22);
        $options = [
            'cost' => 11,
            // 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            'salt' => $salt
        ];
    $password = md5($pPost['password']);

        $firstname = mb_convert_case($pPost['firstname'], MB_CASE_TITLE, "UTF-8");

        $name = mb_convert_case($pPost['name'], MB_CASE_TITLE, "UTF-8");

        $adress = mb_convert_case($pPost['adress'], MB_CASE_TITLE, "UTF-8");

        $city = mb_convert_case($pPost['city'], MB_CASE_TITLE, "UTF-8");

        $country = mb_convert_case($pPost['country'], MB_CASE_TITLE, "UTF-8");

        $email = $pPost['email'];

        $lat = mb_convert_case($pPost['lat'], MB_CASE_TITLE, "UTF-8");

        $lon = mb_convert_case($pPost['lon'], MB_CASE_TITLE, "UTF-8");
        
 

        $pseudo = $pPost['pseudo'];
        
        $statut = 0;
        if(isset($pPost["statut"])){
            $statut = 1;
        }
       
        $date = date("Y-m-d H:i:s");
        $secret = '6LeP4GAUAAAAACHm6iJ4Y2Ui3ssFcrg5UtfkBIhe';
    $recaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $recaptcha = json_decode($recaptcha);
    if($recaptcha->success == true) {
        
        $query = $this->bdd->prepare('INSERT INTO artiste (firstname,name_art,adress,city,country,email,lat,lon,password,pseudo,avatar,statut,uploaded_at,salt) VALUES ("'.$firstname.'", "'.$name.'", "'.$adress.'", "'.$city.'", "'.$country.'", "'.$email.'", "'.$lat.'", "'.$lon.'", "'.$password.'", "'.$pseudo.'", "'.$avatar.'", "'.$statut.'", "'.$date.'", "'.$salt.'")');
            
        $query->execute();
    }else{
        $reponse = "Erreur Recaptcha";
    }
    }
    public function addArtwork($pPost, $pFIles){
   $_SESSION["erros"] = array();
   if(empty($pPost['title'])){
       $_SESSION["errors"]["title"] = "A title must be specified";
   }
   if(empty($pPost['desc'])){
    $_SESSION["errors"]["desc"] = "A description must be specified";
   }
   if(empty($pPost['desc'])){
    $_SESSION["errors"]["avatar"] = "A avatar must be specified";
   }
        // Verifier si on a un fichier image
        $avatar="";
        if(!empty($pFIles['avatar']['tmp_name'])){
            $uniq = uniqid();
            // uniqid est une methode native de php qui renvoi un numéo unique
            // cela permet d'être sur de ne pas avoir 2fois le même fichier image
            move_uploaded_file($pFIles['avatar']['tmp_name'], "../images/".$uniq.$pFIles['avatar']['name']);
            $avatar = $uniq.$pFIles['avatar']['name'];
        }
      

        $title = mb_convert_case($pPost['title'], MB_CASE_TITLE, "UTF-8");

        $desc = mb_convert_case($pPost['desc'], MB_CASE_TITLE, "UTF-8");
        
        $poster = mb_convert_case($pPost['poster'], MB_CASE_TITLE, "UTF-8");

        $category = mb_convert_case($pPost['category'], MB_CASE_TITLE, "UTF-8");
 
        $ip_poster_artwork = $_SERVER['REMOTE_ADDR'];
        $pseudo = $pPost['artiste'];
        
        $statut = 0;
        if(isset($pPost["statut"])){
            $statut = 1;
        }
        $date = date("Y-m-d H:i:s");
        $query = $this->bdd->prepare('INSERT INTO artwork (art_title,art_desc,art_media,art_artist,art_category,art_uploaded_at,art_active, art_ip_poster, art_pseudo) VALUES ("'.$title.'", "'.$desc.'", "'.$avatar.'", "'.$poster.'", "'.$category.'", "'.$date.'", "'.$statut.'", "'.$ip_poster_artwork.'", "'.$pseudo.'")');
        $query->execute();

    }
    public function addArtworkArtist($pPost, $pFIles){
        
        $_SESSION["erros"] = array();
        if(empty($pPost['title'])){
            $_SESSION["errors"]["title"] = "A title must be specified";
        }
        if(empty($pPost['desc'])){
         $_SESSION["errors"]["desc"] = "A description must be specified";
        }
        if(empty($pPost['desc'])){
         $_SESSION["errors"]["avatar"] = "A avatar must be specified";
        }
             // Verifier si on a un fichier image
             $avatar="";
             if(!empty($pFIles['avatar']['tmp_name'])){
                 $uniq = uniqid();
                 // uniqid est une methode native de php qui renvoi un numéo unique
                 // cela permet d'être sur de ne pas avoir 2fois le même fichier image
                 move_uploaded_file($pFIles['avatar']['tmp_name'], "../images/".$uniq.$pFIles['avatar']['name']);
                 $avatar = $uniq.$pFIles['avatar']['name'];
             }
           
     
             $title = mb_convert_case($pPost['title'], MB_CASE_TITLE, "UTF-8");
     
             $desc = mb_convert_case($pPost['desc'], MB_CASE_TITLE, "UTF-8");
             
             $posterid = $_SESSION['id'];
     
             $category = mb_convert_case($pPost['category'], MB_CASE_TITLE, "UTF-8");
      
             $ip_poster_artwork = $_SERVER['REMOTE_ADDR'];
             $pseudo = $pPost['pseudo'];
             $statut = 0;
             if(isset($pPost["statut"])){
                 $statut = 1;
             }
             $date = date("Y-m-d H:i:s");
             $query = $this->bdd->prepare('INSERT INTO artwork (art_title,art_desc,art_media,art_artist,art_category,art_uploaded_at,art_active, art_ip_poster) VALUES ("'.$title.'", "'.$desc.'", "'.$avatar.'", "'.$posterid.'", "'.$category.'", "'.$date.'", "'.$statut.'", "'.$ip_poster_artwork.'")');
             $query->execute();
     
         }

    /**
     * Cette fonction permet a select un artist
     */
    public function getArtisteSelect(){
            $query = $this->bdd->prepare('SELECT * FROM artiste WHERE statut=1');
            $query->execute();
            //
            $results = $query->fetchAll();
            $response = '<select class="form-control" name="artiste">';
            //

            foreach($results as $artiste){
                $response.='<option value="'.$artiste['pseudo'].'">'.$artiste['pseudo'].' '.$artiste['name_art'].'</option>';
            }

            //
            $response .= '</select>';
            return $response;
    }
     /**
     * Cette fonction permet a select une category
     */
    public function getCategorySelect(){
        $query = $this->bdd->prepare('SELECT * FROM category');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '<select class="form-control" name="category">';
        //

        foreach($results as $category){
            $response.='<option value="'.$category['cat_id'].'">'.$category['cat_title'].'</option>';
        }

        //
        $response .= '</select>';
        return $response;
}
    /**
     * Cette fonction permet a select tout les départements
     */
    public function getCitySelect(){
        $query = $this->bdd->prepare('SELECT * FROM departement');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '<select class="form-control" name="departement">';
        //

        foreach($results as $city){
            $response.='<option value="'.$city['departement_nom'].'">'.$city['departement_nom'].'</option>';
        }

        //
        $response .= '</select>';
        return $response;
    }
     /**
     * Cette fonction permet a select les artoste
     */
    public function getArtistelist(){
        $query = $this->bdd->prepare('SELECT * FROM artiste');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '<table class="table">
        <thead>
          <tr>';
        //

        foreach($results as $artistelist){
            $response.='<th scope="row">'.$artistelist['pseudo'].'</th>';
        }

        //
        $response .= ' </tr>
        </thead>
        <tbody>';
        return $response;
}
 /**
     * Cette fonction permet a select les 4 dernier postes
     */
    public function getArtworklist(){
        $query = $this->bdd->prepare('SELECT * FROM artwork ORDER BY art_uploaded_at DESC LIMIT 4');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '';
        //

        foreach($results as $artworklist){
            $response.='<div class="card mr-sm-2" style="width: 18rem;">
            <img class="card-img-top" src="images/'.$artworklist['art_media'].'">
            <div class="card-body">
            <h5 class="card-title">'.$artworklist['art_title'].'</h5>';
            $response.='<p class="card-text description"><div class="fixheight">'.$artworklist['art_desc'].'</p></div><a href="/insta/'.$artworklist['art_id'].'" class="btn btn-primary">Visit</a> <div class="card-footer pb-2">
      <small class="text-muted">Publié le : '.$artworklist['art_uploaded_at'].'</small></div>  </div>
            </div>';
        }

        //
        $response .= '';
        return $response;
}
public function getMyArtwork(){
        $idman = $_SESSION['id'];
    $query = $this->bdd->prepare('SELECT * FROM artwork WHERE art_artist = "'.$idman.'"');
    $query->execute();
    $results = $query->fetchAll();
    $response = '';

    foreach($results as $artworklist){
        $response.='<div class="card mr-sm-2" style="width: 18rem;">
        <img class="card-img-top" src="images/'.$artworklist['art_media'].'">
        <div class="card-body">
        <h5 class="card-title">'.$artworklist['art_title'].'</h5>';
        $response.='<p class="card-text description"><div class="fixheight">'.$artworklist['art_desc'].'</p></div><a href="/insta/'.$artworklist['art_id'].'" class="btn btn-primary">Visit</a> <div class="card-footer pb-2">
  <small class="text-muted">Publié le : '.$artworklist['art_uploaded_at'].'</small></div>  </div>
        </div>';
    }
    $response .= '';
    return $response;
}
/** 
 * Permet de récuperé l'id de chaque article pour l'afficher dans une page.
 */
    public function getArticlId($id){
            $query = $this->bdd->prepare('SELECT * FROM artwork WHERE art_id = ?');
            $query->execute(array($id));
            while($d = $query->fetch()){
                echo ''.$d['art_title'].'';
                echo '<img src="images/'.$d['art_media'].'" alt=""/>';
                echo ''.$d['art_desc'].'';
            }
    }
    /**
     * Cette fonction permet a select les 4 dernier postes
     */
    public function getArtworkalllist(){
        $query = $this->bdd->prepare('SELECT * FROM artwork WHERE art_active=1 ORDER BY art_uploaded_at DESC');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '<div class="containpost">';
        //

        foreach($results as $artworklist){
            $response.='<div class="card mr-sm-2" style="width: 18rem;">
            <img class="card-img-top" src="images/'.$artworklist['art_media'].'">
            <div class="card-body">

            <h5 class="card-title">'.$artworklist['art_title'].'</h5>';
            $response.='<p class="card-text description"><div class="fixheight">'.$artworklist['art_desc'].'</p></div><a href="/insta/'.$artworklist['art_id'].'" class="btn btn-primary">Visit</a>  </div>
            </div>';
        }

        //
        $response .= ' </div> 
         ';
        return $response;
}
public function addNew($pPost, $pFIles){
  
 
         $title = mb_convert_case($pPost['title'], MB_CASE_TITLE, "UTF-8");
 
         $desc = mb_convert_case($pPost['desc'], MB_CASE_TITLE, "UTF-8");
         
         $poster = mb_convert_case($pPost['artiste'], MB_CASE_TITLE, "UTF-8");
         
         $statut = 0;
         if(isset($pPost["statut"])){
             $statut = 1;
         }
         $date = date("Y-m-d H:i:s");
         $query = $this->bdd->prepare('INSERT INTO news (new_title,new_contenu,new_poster,new_date) VALUES ("'.$title.'", "'.$desc.'", "'.$poster.'", "'.$date.'")');
         $query->execute();
 
     }
     public function getNew(){
        $query = $this->bdd->prepare('SELECT * FROM news');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '';
        //

        foreach($results as $artworklist){
            $response.=' <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">'.$news['new_title'].'"</h4>

            <h5 class="card-title">'.$artworklist['art_title'].'</h5>';
            $response.='<p class="card-text description"><div class="fixheight">'.$artworklist['art_desc'].'</p></div><a href="/insta/'.$artworklist['art_id'].'" class="btn btn-primary">Visit</a>  </div>
            </div>';
        }

        //
        $response .= '  
         ';
        return $response;
}
      public function getArtistid($id2){
            $query = $this->bdd->prepare('SELECT * FROM artist WHERE id = ?');
            $query->execute(array($id));
            while($d = $query->fetch()){
                echo ''.$d['pseudo'].'';
                echo '<img src="images/'.$d['art_media'].'" alt=""/>';
                echo ''.$d['art_desc'].'';
            }
    }
        public function getArtworklistAdmin(){
        $query = $this->bdd->prepare('SELECT * FROM artwork ORDER BY art_uploaded_at DESC');
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '';
        //

        foreach($results as $artworklist){
            $response.='<div class="card mr-sm-2" style="width: 18rem;">
            <img class="card-img-top" src="../images/'.$artworklist['art_media'].'">
            <div class="card-body">
            <h5 class="card-title">'.$artworklist['art_title'].'</h5>';
            $response.='<p class="card-text description"><div class="fixheight">'.$artworklist['art_desc'].'</p></div><a href="/insta/admin/edit/'.$artworklist['art_id'].'" class="btn btn-primary">Manage</a> <div class="card-footer pb-2">
      <small class="text-muted">Publié le : '.$artworklist['art_uploaded_at'].'</small>
      <small class="text-muted">IP :  : '.$artworklist['art_ip_poster'].'</small></div>  </div>
            </div>';
        }

        //
        $response .= '';
        return $response;
}
}