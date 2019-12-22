@extends('layouts.admin')
@section('content')



<div class="container profile-pro">

<!-- ---------------------------------------------------------------------- -->
<!--  start profile --------------------------------------------------------------->
<!-- ----------------------------------------------------------------------------->

    <div class="row profile profile-pro">
		<div class=" col-md-3">
			<div class="profile-sidebar box-chadaw">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://i.stack.imgur.com/34AD2.jpg" class="img-responsive" alt="">
				</div>
                <!-- END SIDEBAR USERPIC -->
                
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle ">
					<div class="profile-usertitle-name">
						anass haddaoui
					</div>
					<div class="profile-usertitle-city">
                        <h4> ville </h4>
                        <p> kenitra </p>
                    </div>
                    <div class="profile-usertitle-city">
                        <h4> age </h4>
                        <p> 25 </p>
                    </div>
                    <div class="profile-usertitle-city">
                        <h4> tel </h4>
                        <p> 0611946951 </p>
                    </div>
                    <div class="profile-usertitle-city">
                        <h4> cin </h4>
                        <P> G633495 </P>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm ">Follow</button>
					<button type="button" class="btn btn-danger btn-sm ">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
                <!-- END MENU -->
                </div>   
                    </div>

<!-- ---------------------------------------------------------------------- -->
<!--  end profile --------------------------------------------------------------->
<!-- ---------------------------------------------------------------------- -->


<!-- ---------------------------------------------------------------------- -->
<!--  start profile nav --------------------------------------------------------->
<!-- ---------------------------------------------------------------------- -->


        <div class=" col-md-9">
    <div class="card">
            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">

                <li class="nav-item"><a class="nav-link active" id="pills-Historique-du-paiement-tab" data-toggle="pill" href="#pills-Historique-du-paiement" role="tab" aria-controls="pills-Historique-du-paiement" aria-selected="true">Historique du  paiement</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-Opposition-du-paiement-tab" data-toggle="pill" href="#pills-Opposition-du-paiement" role="tab" aria-controls="pills-Opposition-du-paiement" aria-selected="false">Opposition du  paiement </a></li>
                <li class="nav-item"><a class="nav-link" id="pills-Renouveler-le-paiement-tab" data-toggle="pill" href="#pills-Renouveler-le-paiement" role="tab" aria-controls="pills-Renouveler-le-paiement" aria-selected="false">Renouveler le paiement</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">profile</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-Modifier-le-paiement-tab" data-toggle="pill" href="#pills-Modifier-le-paiement" role="tab" aria-controls="pills-Modifier-le-paiement" aria-selected="false">Modifier le paiement</a></li>

            </ul>
                                                
    <div class="tab-content" id="pills-tabContent">

<!-- ---------------------------------------------------------------------- -->
<!-------------- start Historique du  paiement -------------------------------------->
<!-- ---------------------------------------------------------------------- -->

<div class="tab-pane fade active show" id="pills-Historique-du-paiement" role="tabpanel" aria-labelledby="pills-Historique-du-paiement-tab">

<div class="box-body table-responsive no-padding">
         
         <div id="paiement_client_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="paiement_client_length"><label>Show <select name="paiement_client_length" aria-controls="paiement_client" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="paiement_client_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="paiement_client"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="paiement_client" class="table table-striped dataTable no-footer" role="grid" aria-describedby="paiement_client_info" style="width: 789px;">
        <thead class="info">
        
      <tr role="row"><th class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" style="width: 96px;" aria-label="Type d'abonnement: activate to sort column ascending">Type d'abonnement</th><th class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" style="width: 62px;" aria-label="Date paiement: activate to sort column ascending">Date paiement</th><th class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" style="width: 56px;" aria-label="Montant payé: activate to sort column ascending">Montant payé</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 56px;" aria-label="Montant due">Montant due</th><th class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" style="width: 68px;" aria-label="Date Fin paiement: activate to sort column ascending">Date Fin paiement</th><th style="width: 97px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="statut"><center>statut</center></th><th style="width: 50px" class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" aria-label="Reste: activate to sort column ascending"><center>Reste</center></th><th class="sorting" tabindex="0" aria-controls="paiement_client" rowspan="1" colspan="1" style="width: 44px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
     </thead>
     
        <tbody><tr role="row" class="odd"><td><a class="btn btn-block btn-social btn-default bg-purple">
                      <i class="fa fa-archive"></i>12 mois
                    </a></td><td>2019-12-19</td><td>900 DH</td><td>0 DH <span class="model_form" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-pencil" aria-hidden="true" id="608" rese="0"></i>
                      </span></td><td>2020-12-18</td><td><a class="btn btn-block btn-social btn-default btn-success">
                      <i class="fa fa-check"></i>payée</a></td><td><span class="pull-right badge bg-aqua">362</span></td><td>
                           <form class="form-horizontal" action="http://gogym.goprot.com/fr/Paiement/creat_paimment_pdf_client" method="POST" target="_blank">
     
     
                      <input type="hidden" name="client" value="523">
                      <input type="hidden" name="id_paiment" value="608">
                      <input type="hidden" name="id_GYM" value="1">
     
                      <button type="submit" class="btn bg-purple print" id="523"><i class="fa fa-print"></i></button>
                      </form>
                      </td></tr></tbody></table><div id="paiement_client_processing" class="dataTables_processing panel panel-default" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="paiement_client_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries (filtered from 580 total entries)</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="paiement_client_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="paiement_client_previous"><a href="#" aria-controls="paiement_client" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="paiement_client" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="paiement_client_next"><a href="#" aria-controls="paiement_client" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div> 
              </div>

</div>

<!-------------- end Historique du  paiement ----------------------------------------------------->



<!-- ---------------------------------------------------------------------- -->
<!-------------- start opposition de paiement --------------------------------------------->
<!-- ---------------------------------------------------------------------- -->

<div class="tab-pane fade" id="pills-Opposition-du-paiement" role="tabpanel" aria-labelledby="pills-Opposition-du-paiement-tab">


<div class="tab-pane active" id="settings">
                <form action="http://gogym.goprot.com/fr/Paiement/holde" class="form-horizontal" method="post" accept-charset="utf-8">

  <input type="hidden" name="client" value="523">
  <input type="hidden" name="id_GYM" value="1" id="id_GYM">
         
  

                  <div class="form-group">
                    <!-- <div class="col-sm-10"> -->
                      <!-- <button type="submit" class="btn btn-danger">Oppositioner</button> -->
                      
                    <!-- </div> -->

              
                  
                  <div class="form-group">
                    <!-- <div class="col-sm-10"> -->
                      <!-- <button type="submit" class="btn btn-danger">Oppositioner</button> -->
                      
                    <!-- </div> -->
                    <div class="four col-sm-2">
                                                <div class="button-wrap" id="523">
                                                 <div class="button-bg">
                            <div class="button-out"></div>
                            <div class="button-in"></div>
                            <div class="button-switch"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Historique d'oppositionnements </h3>

              <div class="box-tools">
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th style="width: 140px">Date de paiement</th>
                  <th style="width: 200px">Date d'oppositionnements </th>
                  <th style="width: 200px">nombre du jours restant</th>
                  <th style="width: 110px">a renouvelé le</th>
                  <th>Status</th>
                  
                </tr>
                                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
                  </div>
               

              </div></form>
            </div>
</div>

<!--------- end opposition de paiement --------------------------------------------->



<!-- ---------------------------------------------------------------------- -->
<!-------------- start Renouveler le paiement --------------------------------------------->
<!-- ---------------------------------------------------------------------- -->

<div class="tab-pane fade " id="pills-Renouveler-le-paiement" role="tabpanel" aria-labelledby="pills-Renouveler-le-paiement-tab">

<div class="tab-pane active" id="activity">
    <!-- Post -->
    <div class="post">
   <div class="box">
<div class="box-header with-border">
  <h3 class="box-title">Tous les paiements de <i>khoyi yassine</i> </h3>
</div>

<form class="form-horizontal" action="http://gogym.goprot.com/fr/Paiement/add_paiment_history" method="POST">
 <input type="hidden" name="client" value="523">
 <input type="hidden" name="id_GYM" value="1" id="id_GYM">
  <div class="box-body">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label">type abonnement</label>

      <div class="col-sm-4">
               <select class="form-control" name="abonnement_paiement" id="abonnement_paiement" onchange="myFunction(event)" required="">
    <option value="" disabled="" selected="">choisir le Type abonnement</option>
    <option value="1 10">1 jour</option>
    <option value="2 200">1 mois</option>
    <option value="3 500">3 mois</option>
    <option value="4 700">6 mois</option>
    <option value="5 1200">12 mois</option>
  </select>
      </div>
    </div>

   <div class="form-group">
      <label class="col-sm-3 control-label">Prix d'abonnement</label>

      <div class="col-sm-2">
         <input type="number" id="prix" class="form-control" name="prix_abonnement"> 
      </div>
      <label class="control-label">DH</label>
    </div>

 

       <div class="form-group">
      <label class="col-sm-3 control-label">Prix payé</label>

      <div class="col-sm-2">
         <input type="number" id="prix_paye" class="form-control" name="prix_paye"> 
      </div>
      <label class="control-label">DH</label>
    </div>

     <div class="form-group">
      

      <label class="col-sm-3 control-label container"> 

         remise de prix &nbsp;&nbsp;
          <input type="checkbox" id="myCheckremise" onclick="Function_remise()">
        <span class="checkmark"></span>
      <!--</label>
          Droit d'inscription <input type="checkbox" id="myCheck"  onclick="Function_check()"> 
         -->
        </label>

       <div class="col-sm-2">
         <input type="number" class="form-control" name="remise" id="remise" style="display:none">
       </div>

       <label id="remise_dh" style="display:none">DH</label>
   
    </div>
    <div class="form-group">
      

      <label class="col-sm-3 control-label container"> 

         Droit d'inscription &nbsp;&nbsp;
          <input type="checkbox" id="myCheck" onclick="Function_check()">
        <span class="checkmark"></span>
      <!--</label>
          Droit d'inscription <input type="checkbox" id="myCheck"  onclick="Function_check()"> 
         -->
        </label>

       <div class="col-sm-2">
         <input type="number" class="form-control" name="droit_inscription" id="droit" style="display:none">
       </div>

       <label id="droit_dh" style="display:none">DH</label>
   
    </div>


   <div class="form-group">
      <label class="col-sm-3 control-label">Commentaire</label>

      <div class="col-sm-4" d="">
         <textarea class="form-control" placeholder="Commentaire ici ..." name="commentaire"></textarea>
      </div>
    </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="button" class="btn btn-default">Annuler</button>
    <button type="submit" class="btn btn-info pull-right">Renouveler</button>
  </div>
  <!-- /.box-footer -->


</div></form>
    </div>
    <!-- /.post -->


</div>
  </div>
</div>



<!-------------- end Renouveler le paiement --------------------------------------------->


<!-- ---------------------------------------------------------------------- -->
<!-------------- start profil ----------------------------------------------------->
<!-- ---------------------------------------------------------------------- -->

<div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

    <div class="tab-pane active" id="user_update">
      <form action="http://gogym.goprot.com/fr/Paiement/modifier_paiement" class="form-horizontal" id="myform" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<input type="hidden" name="id_client" value="523">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Civilite</label>

          <div class="col-sm-10">
            <select class="form-control" name="civilite">
      <option>Mr</option>
      <option>Mme</option>
      <option>Mlle</option>
    </select>
          </div>
        </div>
           <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Nom</label>

          <div class="col-sm-10">
            <input type="text" name="nom" class="form-control" id="inputName" value="khoyi">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Prenom</label>

          <div class="col-sm-10">
            <input type="text" name="prenom" class="form-control" id="inputEmail" value="yassine">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Tel</label>

          <div class="col-sm-10">
            <input type="text" name="tele" class="form-control" id="inputName" value="0624104680">
          </div>
        </div>
          <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Ville:</label>

          <div class="col-sm-10">
            <input type="text" name="ville" class="form-control" id="inputName" value="">
          </div>
        </div>
         <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Adresse:</label>

          <div class="col-sm-10">
            <input type="text" name="adresse" class="form-control" id="inputName" value="ain atiq">
          </div>
        </div>
       
          <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">CIN:</label>

          <div class="col-sm-10">
            <input type="text" name="cin" class="form-control" id="inputName" value="0624104680">
          </div>
        </div>
        <div class="form-group">
          <label for="inputExperience" class="col-sm-2 control-label">email</label>

          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail" value="">
          </div>
        </div>
       <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Image:</label>

          <div class="col-sm-10">
            <input id="inputFile" type="file" name="userfile">
          </div>
        </div>
   
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger">Modifier</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.tab-pane -->



</div>


<!-------------- end profil ----------------------------------------------------->


<!-- ---------------------------------------------------------------------- -->
<!-------------- star Modifier le paiement ---------------------------->
<!-- ---------------------------------------------------------------------- -->

<div class="tab-pane fade " id="pills-Modifier-le-paiement" role="tabpanel" aria-labelledby="pills-Modifier-le-paiement-tab">
    

<div class=" active" id="paiment_update">

<input type="hidden" name="id_client" value="523">
        


<div class="form-group">

          <div class="form-group ">


          <label for="message-text" name="commentaire" class="col-sm-3 control-label ">Abonnement : 5</label>

                  <div class="col-sm-10">
                      <select class="form-control" name="abonnement_paiement" id="abonnement_paiement" onchange="myFunction(event)" required="">
                          <option value="" disabled="" selected="">choisir le Type abonnement</option>
                          <option value="1">1 jour</option>
                          <option value="2">1 mois</option>
                          <option value="3">3 mois</option>
                          <option value="4">6 mois</option>
                          <option selected="true" value="5">12 mois</option>
                        </select>
                  </div>
                </div>


          <label for="inputName" class="col-sm-3 control-label ">À renouveler le:</label>

          <div class="col-sm-10 ">
            <input type="text" name="date_fin_paiment" class="form-control " id="date_fin_paiment" value="18-12-2020">
          </div>
        </div>



           <div class="form-group box">
          <label for="inputName" class="col-sm-2 control-label">prix payé</label>

          <div class="col-sm-10">
            <input type="number" name="prix_payee" class="form-control" id="inputName" value="900">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">montant due</label>

          <div class="col-sm-10">
            <input type="number" name="rest" class="form-control" id="inputEmail" value="0">
          </div>
        </div>


         <div class="form-group">
          <label for="message-text" name="commentaire" class="col-sm-2 control-label">Commentaire:</label>

          <div class="col-sm-10">
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </div>
     

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger">Modifier</button>
          </div>
        </div>
      </form>
    </div>

</div>

<!-------------- end opposition du paiment ---------------------------->

    </div>
        </div>
            </div>
</div>
</div>

</div>


@endsection