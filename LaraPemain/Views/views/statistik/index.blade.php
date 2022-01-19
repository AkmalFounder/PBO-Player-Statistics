@extends('layouts.home')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
     <h1>
       Teams
       <small>containing teams statistics</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Teams</a></li>
       <li class="active">Club</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
    
       <div class="box-body">
       <!--content-->
             <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Club</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>League</th>
                    <th>Contract</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/73.png"></img></td>
                    <td><a href="/players" style="color:black">Paris Saints-Germain</td></a>
                    <td><span class="label label-success">France Ligue 1</span></td>
                    <td>
                      <div class="sparkbar" data-color="#77c385" data-height="20">2023</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/10.png"></img></td>
                    <td>Manchester City</td>
                    <td><span class="label label-warning">England Premier League</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">2026</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/21.png"></img></td>
                    <td>Bayern Munchen</td>
                    <td><span class="label label-danger">Germany 1. Bundesliga</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">2027</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/9.png"></img></td>
                    <td>Liverpool</td>
                    <td><span class="label label-info">Englang Premier League</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">2025</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/243.png"></img></td>
                    <td>Real Madrid</td>
                    <td><span class="label label-warning">Spain Primera Division</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">2029</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/5.png"></img></td>
                    <td>Chelsea</td>
                    <td><span class="label label-danger">England Premier League</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">2031</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/teams/light/240.png"></img></td>
                    <td>Atletico de Madrid</td>
                    <td><span class="label label-success">Spain Primera Division</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">2025</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
         
          </div>
          <!-- /.box -->
        </div>

       <!-- /.box-footer-->
  

   </section>
   <!-- /.content -->
   @endsection