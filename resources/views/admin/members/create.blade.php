@extends('layouts.admin')
@section('content')

<div class=" col-md-12 ">

<!-- multistep form -->
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Social Profiles</li>
		<li>Personal Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset class=" col-md-12 ">
		<h2 class="fs-title">DÉTAILS PERSONNELS</h2>
		<h3 class="fs-subtitle">Enregistrer les  informations personnels de membre</h3>

		<select name="civilite" id="civilite" required="">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                </select>
            
                <input type="text" name="prenom" placeholder="Prenom" required="">
                <input type="text" name="nom" placeholder="Nom" required="">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="tele" placeholder="Tel">
                <input type="text" name="cin" id="cin" placeholder="CIN" required="required">
                <span id="cin_result"></span>
                <input type="text" name="adresse" placeholder="Adresse">
                
                <div class="bootstrap-iso">
                <input type="text" placeholder="Date_naisssance" id="date_naissance" name="date_naissance">
                </div>
		<input type="button" name="next" class="next action-button" value="Next" />
		
	</fieldset>
	<fieldset col-md-6>

	<h2 class="fs-title">Type abonnement</h2>
                <h3 class="fs-subtitle">choisir le Type abonnement</h3>
            <select name="abonnement_paiement" id="abonnement_paiement" required=""> 
                <option value="" disabled="" selected="">choisir le Type abonnement</option>
                <option value="1 10">1 jour</option>
                <option value="2 200">1 mois</option>
                <option value="3 500">3 mois</option>
                <option value="4 750">6 mois</option>
                <option value="5 1200">12 mois</option>
            </select>
        
                <input type="number" id="prix" name="prix_abonnement" placeholder="Prix d'abonnement">
                <input type="number" id="prix_paye" name="prix_paye" placeholder="Prix payé par le client">
                

		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
		
	</fieldset>
	<fieldset col-md-6>

				<h2 class="fs-title">REMISE &amp; DROIT D'INSCRIPTION</h2>
                <h3 class="fs-subtitle">REMISE &amp; DROIT D'INSCRIPTION</h3>
                <input type="number" name="remise" id="remise" placeholder="Remise">
                <input type="number" name="droit_inscription" id="droit" placeholder="droit d'inscription">

		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="enregistrés" />

	</fieldset>
</form>
</div>



@endsection