
<html>
<b> Vehicule total: </b>
<?php
require('core/VehiculeManager.class.php');
$vh = new VehiculeManager();
echo $vh->CountVehicule()
?>

<b> Vehicule vendu: </b>
<?php
echo $vh->CountVehiculeSell()
?>
<b><br> Argent dépensé pour les véhicules : </b>
<?php
echo $vh->CountAchat();
?>
<b> Nombre de marque : </b>
<?php $vh->CountMarque() ?>
<b> Nombre de benef : </b>
<?php $vh->CountVente() ?>
</html>