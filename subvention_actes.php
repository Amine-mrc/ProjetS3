<?php 
	require('connexion.php'); //Permet la connexion à la base de données
	require('debut.php'); //En-tête html
	
?>



<section class="subvention_actes">

<h2> FORMULAIRE DE DEMANDE DE SUBVENTION POUR PUBLICATION D’ACTES DE COLLOQUE
 OU D’OUVRAGES THEMATIQUES COLLECTIFS </h2><br/>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<p><label> Coordinateur Paris 13: </label> <input type="text" name="Coordinateur" id="Coordinateur"/></p>
<p><label> Composante : </label> <input type="text" name="Composante" id="Composante"/></p>
<p><label> Laboratoire : </label><input type="text" name="Laboratoire" id="Laboratoire"/></p>
<p><label> Type (actes, ouvrage) et nom de la publication : </label> <input type="text" name="Type" id="Type"/></p>
<p><label> Date prévue et éditeur : </label> <input type="text" name="date_prevue" id="date_prevu"/></p>
<p><label> Financement demandé (en €) : </label> <input type="text" name="Financement" id="Financement"/></p>

<h3> DEMANDE DE SUBVENTION POUR PUBLICATION </h3><br/>

<p> Demande présentée par : </p>
<p><label> Prénom : </label> <input type="text" name="prenom" id="prenom"/></p>
<p><label> Nom : </label> <input type="text" name="nom" id="nom"/></p>
<p><label> Qualité : </label> <input type="text" name="Qualite" id="Qualite"/></p>
<p><label> Composante : </label> <input type="text" name="Composante2" id="Composante2"/></p>
<p><label> Laboratoire : </label> <input type="text" name="Laboratoire2" id="Laboratoire2"/></p>
<p><label> Téléphone : </label> <input type="text" name="tel" id="tel"/></p>
<p><label> Mail : </label> <input type="text" name="mail" id="mail"/></p><br/>

<p> Description de la publication </p>
<p><label> Type (actes de colloque, ouvrage collectif…) : </label> <input type="text" name="type2" id="type2"/></p>
<p><label> Titre de l’ouvrage : </label> <input type="text" name="titre" id="titre"/></p>
<p><label> Sous la direction de : </label> <input type="text" name="direction" id="direction"/></p>
<p><label> Collaboration avec une autre université ou institution : </label> <input type="text" name="collabaration" id="collaboration"/></p>
<p> Nombre des contributions (attendues) : </p>
<p><label> dont Université Paris 13 : </label> <input type="text" name="nombre_contributions_p13" id="nombre_contributionsp13"/></p>
<p><label> France : </label> <input type="text" name="nombre_contributions_fr" id="nombre_contributions_fr"/></p>
<p><label> Etranger : </label> <input type="text" name="nombre_contributions_etranger" id="nombre_contributions_etranger"/></p>
<p><label> Doctorants : </label> <input type="text" name="nombre_contributions_doc" id="nombre_contributions_doc"/></p>
<p><label> Mode de sélection des contributions  : </label> <input type="text" name="mode_de_contribution" id="mode_de_contribution"/></p>
<p> Reconnaissance de l’éditeur dans la discipline : (Document à fournir signer par la discipline)</p><br/>

<p> Financement </p>
<p><label>  Montant de la contribution financière demandée par l’éditeur : </label> <input type="text" name="montant_de_la_contribution_financieremontant_de_la_contribution_financiere" id=""/></p>
<p><label> Subvention demandée au CS : </label> <input type="text" name="subvention_demande_cs" id="subvention_demande_cs"/></p>
<p><label> Cofinancement : </label> <input type="text" name="Cofinancement" id="Cofinancement"/></p><br/>

<p> Si la subvention est accordée par l’université souhaitez-vous </p>
<p><label> - un virement au laboratoire ? : </label> <input type="radio" name="virement au laboratoire" value="oui"/> Oui <input type="radio" name="virement_au_laboratoire" value="non"/> Non </p>
<p><label> - une gestion financière au BRED ? : </label> <input type="radio" name="gestion_financiere_bred" value="oui"/> Oui <input type="radio" name="gestion_financiere_bred" value="non"/> Non </p><br/>

<p> Dans les deux cas, 2 exemplaires de l’ouvrage devront être déposés au BRED à l’issue de la publication. Dans le premier cas, une photocopie des factures sera également exigée. </p><br/>

<p><label> Préciser de quel appui logistique vous disposez pour la publication et, en particulier, venant de votre laboratoire : </label> <input type="text" name="appui" id="appui"/></p><br/>

<h4> ARGUMENTAIRE AU SOUTIEN DE LA DEMANDE DE SUBVENTION </h4><br/>

<p><label> Pour les actes de colloque : argumentaire de deux ou trois pages développant notamment les thématiques du colloque et les approches privilégiées pour la publication en spécifiant la liste des contributeurs et les titres des articles. </label> <input type="text" name="argument_actes" id="argument_actes"/></p><br/>
<p><label> Pour un ouvrage collectif : argumentaire de deux ou trois pages spécifiant les objectifs du projet, les méthodes et les approches privilégiées, la liste des auteurs ainsi que le titre et un bref résumé des propositions de contribution à la date de la demande. </label> <input type="text" name="argument_ouvrage" id="argument_ouvrage"/></p><br/>
<p> <input type="submit" /> </p>
</form>
</section>




<?php require('fin.php'); ?>
