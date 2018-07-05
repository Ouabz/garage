<?php
/**
 * Created by PhpStorm.
 * User: cisco
 * Date: 06/07/2018
 * Time: 14:11
 */

class UserManager
{
    // Propr
private $bdd;
// Constructor
public function __construct()
{
    $connexion = Connexion::GetInstance();
    $this->bdd = $connexion->bdd;

}
    // meth
    //get set
    public function addUser($pPost){
        $pics = "assets/img/avatar.png";
        $email = htmlspecialchars(trim($pPost['email']));
        $pass = md5($pPost['password']);
        $firstname = htmlspecialchars(trim($pPost['firstname']));
        $lastname = htmlspecialchars(trim($pPost['lastname']));

        $insert = $this->bdd->prepare('INSERT INTO users (usr_pics,usr_email,usr_password,usr_firstname,usr_lastname) VALUES ("'.$pics.'","'.$email.'","'.$pass.'","'.$firstname.'","'.$lastname.'")');
        $insert->execute();
    }
    public function getUserList(){
        $query = $this->bdd->prepare('SELECT * FROM users');
        $query->execute();


        $results = $query->fetchAll();
        // $response = 'Partie 1';
        //$benef = ($results['veh_price_achat']) - ($results['veh_price_vente']);
        foreach($results as $users){

            $response.=' <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                            class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>
                                                    <td>'.$users['usr_id'].'</td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>'.$users['usr_email'].'</strong>
                                                    </div>
                                                    <small>'.$users['usr_firstname'].' '.$users['usr_lastname'].'</small>
                                                </div>
                                            </td>

                                       
                                            <td>'.$users['usr_firstname'].'</td>
                                            <td>User</td>
                                            <td>
                                           <a href="core/services.php?action=SetVendu" <button type="submit" class="form-control">Administrer</button></a>
                                        
                                            </td>
                                        </tr>';
            //       $response.='Re Teste';
        }
        //	 $response .= 'Fin du code';
        return $response;
    }

}