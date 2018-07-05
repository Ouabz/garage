<?php
Class VehiculeManager{
    // Propriétés
    private $bdd;
    // constructor
    public function __construct(){
        require('Connexion.php');        
       $connexion = Connexion::getInstance();
      $this->bdd = $connexion->bdd; 
    	
    }
        // methodes
        /**
        * 
        */
        // Getter/Setter
  
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
     * Cette function permet d'ajouter un véhicule a la base de donnée.
     */

    public function addVehicule($pPost) {
        $achat_price = $pPost['achat_price'];
        $vente_price = $pPost['vente_price'];
       // $other = $pPost['other'];
        $plaque = $pPost['immatriculation'];
        $poster = $_SESSION['firstname'].' '.$_SESSION['lastname'];
        $date = date("Y-m-d H:i:s");
        $etat = 1;
        $statut = 1;
        $modele = $pPost['modele'];
        $garage = $pPost['garage'];
        $date = date("Y-m-d H:i:s");
        $query = $this->bdd->prepare('INSERT INTO vehicules (veh_date_post,veh_gar_id,veh_immat,veh_price_achat,veh_price_vente,veh_poster,veh_mod) VALUES ("'.$date.'", "'.$garage.'", "'.$plaque.'", "'.$achat_price.'", "'.$vente_price.'", "'.$poster.'", "'.$modele.'")');
print_r($pPost);
$query->execute();



    }
    public function addGarage($pPost){
        $garname = $pPost['garage_name'];
        $garspace = $pPost['garage_space'];

        $insert = $this->bdd->prepare('INSERT INTO garages (gar_name,gar_space) VALUES ("'.$garname.'", "'.$garspace.'")');
        $insert->execute();
    }
    public function getModeleSelect(){
    	$constructeur = null;
    	if(!empty($_POST['constructeur'])){
    		$constructeur = $_POST['constructeur'];
    	}
    	if($constructeur == null){
    		   $query = $this->bdd->prepare('SELECT * FROM modele');
    	}else{
    		   $query = $this->bdd->prepare('SELECT * FROM modele WHERE mod_const_id = "'.$constructeur.'"');
    	}
           
            $query->execute();
            //
            $results = $query->fetchAll();
            $response = '';
            //

            foreach($results as $modele){
                $response.='<option value="'.$modele['mod_id'].'">'.$modele['mod_name'].'</option>';
            }

            //
            // $response .= '</select>';
          //  return $response;  
            echo $response;
            
    }
    public function getVehiculeList(){
    	$query = $this->bdd->prepare('SELECT * FROM vehicules');
    	$join = $this->bdd->prepare('SELECT * FROM vehicules v JOIN modele m ON v.veh_mod = m.mod_id JOIN constructeur c ON m.mod_const_id = c.const_id JOIN garages g ON v.veh_gar_id = g.gar_id');
    	$join->execute();
     	$query->execute();

    	$results = $join->fetchAll();
    	 // $response = 'Partie 1';
        //$benef = ($results['veh_price_achat']) - ($results['veh_price_vente']);
    	foreach($results as $vehicule){
         $benef =  $vehicule['veh_price_vente'] - $vehicule['veh_price_achat'];
            $response.=' <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                            class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>
                                                    <td>'.$vehicule['veh_id'].'</td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>'.$vehicule['veh_immat'].'</strong>
                                                    </div>
                                                    <small>'.$vehicule['const_name'].' '.$vehicule['mod_name'].'</small>
                                                </div>
                                            </td>

                                            <td>'.$vehicule['veh_price_achat'].' €</td>
                                            <td>'.$vehicule['veh_price_vente'].' €</td>
                                            

                                            <td>'.$vehicule['gar_name'].'</td>
                                            <td>'.$benef.'</td>
                                            <td>'.$vehicule['veh_etat'].'</td>
                                            <td><span class="r-3 badge statut'.$vehicule['veh_statut'].'">'.$vehicule['veh_statut'].'</span></td>
                                            <td>
                                           <a href="core/services.php?action=SetVendu" <button type="submit">Vendu?</button></a>
                                                </form>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                                </form>
                                            </td>
                                        </tr>';
     //       $response.='Re Teste';
    	}
    //	 $response .= 'Fin du code';
    	 return $response;
    }

    public function getGaragesList(){
        $query = $this->bdd->prepare('SELECT * FROM garages');
        $join = $this->bdd->prepare('SELECT * FROM vehicules v JOIN modele m ON v.veh_mod = m.mod_id JOIN constructeur c ON m.mod_const_id = c.const_id');
        $join->execute();
        $query->execute();

        $results = $query->fetchAll();
        // $response = 'Partie 1';
        foreach($results as $garage){

            $response.=' <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                            class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>'.$garage['gar_name'].'</strong>
                                                    </div>
                                                   
                                                </div>
                                            </td>

                                            <td>'.$garage['gar_space'].'</td>
                                            <td> 10 places réstantes</td>
                                            

                                         
                                            <td>Bonne état
                                            <td><span class="r-3 badge statut'.$garage['gar_statut'].'">'.$garage['gar_statut'].'</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-done_all"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>';
            //       $response.='Re Teste';
        }
        //	 $response .= 'Fin du code';
        return $response;
    }

    /**
     * Cette function permet de passer un véhicule de non vendu à vendu
     */
    public function SetVendu() {
        $update = $this->bdd->prepare('UPDATE vehicules SET veh_statut = "Vendu" WHERE veh_id = ');

        $update->execute();
    }
    /**
     *
     * La function CountVehicule permet de compté le nombre de véhicule.
     */
           public function CountVehicule(){

        $query = $this->bdd->prepare('SELECT * FROM vehicules');
       $query->execute();

       $nb_ligne = $query->rowCount();
       return $nb_ligne;
//        $row = $query->fetchAll();
//        $nb = count($row);
//        echo $nb;

    }
    /**
     *
     * La function CountMarque permet de compté le nombre de marque (constructeur).
     */
    public function CountMarque() {
               $query = $this->bdd->prepare('SELECT * FROM constructeur');
               $query->execute();
               $nb = $query->rowCount();
               return $nb;
    }

    /**
     *
     * La function CountVehiculeSell permet de compté le nombre de véhicule VENDU.
     */
    public function CountVehiculeSell(){

        $query = $this->bdd->prepare('SELECT * FROM vehicules WHERE veh_statut = "Vendu"');
        $query->execute();

        $nb_ligne = $query->rowCount();
        return $nb_ligne;
//        $row = $query->fetchAll();
//        $nb = count($row);
//        echo $nb;

    }
    /**
     *
     * La function CountAchat permet de compté les dépenses.
     * A RE-TRAVAILLAIR !!!!!
     */
        public function CountAchat() {
            $req = $this->bdd->prepare('SELECT SUM(veh_price_achat) AS nb FROM vehicules WHERE veh_statut = 1');
            $req->execute();
            $fetch = $req->fetch();

            $value = $fetch['nb'];

            return $value;
            }

    /**
     * La function CountVente permet de compté le chiffre d'affaire
     */

    public function CountVente()
    {
        $req = $this->bdd->prepare('SELECT SUM(veh_price_vente) AS nb2 FROM vehicules WHERE veh_statut = "Vendu"');
        $req->execute();
        $fetch = $req->fetch();

        $value = $fetch['nb2'];
        return $value;

    }

    /**
     * La function CountBenefice devras soustraire le prix de vente par le prix d'achat.
     * Exemple : On n'achete un véhicule a 2500 € et on le revend à 5000 €
     * Ducoup on feras 5000 - 2500
     */

    public function getConstructSelect(){
            $query = $this->bdd->prepare('SELECT * FROM constructeur');
            $query->execute();
            //
            $results = $query->fetchAll();
            $response = '<select class="form-control custom-select" id="constructeur" name="constructeur">';
            //

            foreach($results as $construct){
                $response.='<option value="'.$construct['const_id'].'">'.$construct['const_name'].'</option>';
            }

            //
            $response .= '</select>';
            echo $response;
           // return $response;  
            
    }
    public function getGarageSelect(){
        $query = $this->bdd->prepare('SELECT * FROM garages');
        $query->execute();
        $results = $query->fetchAll();
        $response = '<select class="form-control custom-select" id="garage" name="garage">';

        foreach($results as $garage){
            $response.='<option value="'.$garage['gar_id'].'">'.$garage['gar_name'].'</option>';
        }
        $response .= '</select>';
        echo $response;
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