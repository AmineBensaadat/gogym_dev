@extends('layouts.admin')
@section('content')







<div class="container">
    <div class="row profile">
		<div class=" col-md-4">
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
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
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
	</div>
</div>


@endsection