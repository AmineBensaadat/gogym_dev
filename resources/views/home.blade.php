@extends('layouts.admin')
@section('content')
@can('role_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
   
        </div>
    </div>
@endcan


<div class="row">
    <div class="col-md-6 col-lg-3 add_new_members">
      <div> 
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
      </div>

      <div>  <button class="btn btn-block btn-primary" type="button">Créer un nouveau membre</button>
      </div>
    </div>
</div>  


<div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary members_paye">
                
                  <div class="card-body pb-0 ">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value members_paye_value">15</div>
                    <div>Members payé</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="105" style="display: block; height: 70px; width: 194px;" width="291"></canvas>
                  <div id="card-chart1-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 88.2422px; top: 113.156px;"><div class="tooltip-header"><div class="tooltip-header-item">January</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">65</span></div></div></div></div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info members_paye">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right " type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value members_paye_value">31</div>
                    <div>Nouvelles inscriptions</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart2" height="105" width="291" style="display: block; height: 70px; width: 194px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning members_paye">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value members_paye_value">9.823</div>
                    <div>En attente de paiement</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="105" width="339" style="display: block; height: 70px; width: 226px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger members_paye">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value members_paye_value">14</div>
                    <div>Members Expirés</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="105" width="291" style="display: block; height: 70px; width: 194px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>


            <div class="row">

            <div class="col-lg-6">
<div class="card">
<div class="card-header"> Simple Table</div>
<div class="card-body">
<table class="table table-responsive-sm">
<thead>
<tr>
<th>Username</th>
<th>Date registered</th>
<th>Role</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>Samppa Nori</td>
<td>2012/01/01</td>
<td>Member</td>
<td><span class="badge badge-success">Active</span></td>
</tr>
<tr>
<td>Estavan Lykos</td>
<td>2012/02/01</td>
<td>Staff</td>
<td><span class="badge badge-danger">Banned</span></td>
</tr>
<tr>
<td>Chetan Mohamed</td>
<td>2012/02/01</td>
<td>Admin</td>
<td><span class="badge badge-secondary">Inactive</span></td>
</tr>
<tr>
<td>Derick Maximinus</td>
<td>2012/03/01</td>
<td>Member</td>
<td><span class="badge badge-warning">Pending</span></td>
</tr>
<tr>
<td>Friderik Dávid</td>
<td>2012/01/21</td>
<td>Staff</td>
<td><span class="badge badge-success">Active</span></td>
</tr>
</tbody>
</table>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="#">Prev</a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</div>
</div>
</div>
              <!-- /.col-->
            </div>
@section('scripts')
@parent

@endsection
@endsection