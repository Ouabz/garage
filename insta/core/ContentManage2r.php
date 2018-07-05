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
        $password = password_hash($pPost['password'], PASSWORD_BCRYPT, $options);

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
    $password = md5($_POST['password']);

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
        $secret = '6Lcx9lgUAAAAAJjcF8LVLg4hs-N66e2gMq5YNqZt';
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
        $pseudo = $pPost['pseudo'];
        
        $statut = 0;
        if(isset($pPost["statut"])){
            $statut = 1;
        }
        $date = date("Y-m-d H:i:s");
        
if(iconv_strlen($_POST['desc']) < 300){
    echo "Tu est désormais un fdp.";
} else {
    

            
        
        $query = $this->bdd->prepare('INSERT INTO artwork (art_title,art_desc,art_media,art_artist,art_category,art_uploaded_at,art_active, art_ip_poster) VALUES ("'.$title.'", "'.$desc.'", "'.$avatar.'", "'.$poster.'", "'.$category.'", "'.$date.'", "'.$statut.'", "'.$ip_poster_artwork.'")');
        $query->execute();
        
}
    }
      public function addArtworkArtist($pPost, $pFIles){
   $_SESSION["erros"] = array();
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
        $pseudo = $pPost['pseudo'];
        $id_poster_artist = $_SESSION['id'];
       $statut = 1;
        $date = date("Y-m-d H:i:s");
        
if(iconv_strlen($_POST['desc']) < 300){
    echo "Tu est désormais un fdp.";
} else {
    

            
        
        $query = $this->bdd->prepare('INSERT INTO artwork (art_title,art_desc,art_media,art_artist,art_category,art_uploaded_at,art_active, art_ip_poster) VALUES ("'.$title.'", "'.$desc.'", "'.$avatar.'", "'$id_poster_artist'", "'.$category.'", "'.$date.'", "'.$statut.'", "'.$ip_poster_artwork.'")');
        $query->execute();
        
}
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
                $response.='<option value="'.$artiste['id'].'">'.$artiste['pseudo'].' '.$artiste['name_art'].'</option>';
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
        $response .= 'fdpfdp';
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
                echo '<img class="figure-img img-fluid rounded" src="images/'.$d['art_media'].'" alt=""/>';
                echo '<br>';
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
        $response = '';
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
        $response .= '  
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
    function logArtist(){
    //1 connexion
    require('Connexion.php');
    //2 Selectionner les utilisateurs ayant le log le md5 du password
    //et un rôle à 1 dans la bdd
    $query = $this->bdd->prepare('SELECT * FROM artiste WHERE email="'.$_POST['email_'].'" AND password="'.md5($_POST['password']).'" AND statut=1');
    //3 Execution de la requête
    $query->execute();
    //4 Traitement des données reçues de la base
    //On analyse le nombre de ligne(s) de données renvoyée(s) par la base
    if(mysqli_num_rows($req)==0){
        //Si 0 on est pas connecté
        //Création d'un message d'erreur
        $_SESSION['msg_error'] = "Erreur d'identifiant et/ou de mot de passe";
        //Redirection vers la page de login
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }else{
        //Sinon on est connecté et on mémorise les données dans une 
        //variable de session
        //On agence les données remontées de la base.
       $results = $query->fetchAll();
        //On mémorise le nom et le prenom dans la session dans 
        //une entrée nommée 'user' on crée un sous tableau.
        $_SESSION['artiste']['email'] = $artiste['email'];
        $_SESSION['user']['nom'] = $user['usr_nom'];
        $_SESSION['user']['log'] = $user['usr_log'];
        $_SESSION['user']['islog'] = true;
        //Redirection vers la page menu.php du BO
        header('Location: ../../admin/menu.php');
    }
}
    public function getConnexionList(){
        $query = $this->bdd->prepare("SELECT * FROM history_connexion WHERE success_statut = 'Login Success'");
        $query->execute();
        //
        $results = $query->fetchAll();
        $response = '';
        //

        foreach($results as $historylogin){
            $response.='<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">IP</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
            <th>'.$historylogin['email_artist'].'</th>';
            $response.='<td>'.$historylogin['ip_login'].'</td>';
            $response.='<td>'.$historylogin['date_login'].'</td>';
             $response .= '</tr> </tbody> </table>';
        }

        //
        $response .= '';
        return $response;
}
}