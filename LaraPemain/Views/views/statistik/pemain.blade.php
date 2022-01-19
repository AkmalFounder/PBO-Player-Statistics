@extends('layouts.home')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
     <h1>
       Players
       <small>containing players statistics</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Players</a></li>
       <li class="active">Top 5</li>
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
              <h3 class="box-title">Top 5</h3>

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
                    <th>Positions</th>
                    <th>Age</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/players/246430.png"></img></td>
                    <td><a style="color:black" href="/Datapemain"><span>Dušan Vlahović</span></td></a>
                    <td><span class="label label-info">ST</span></td>
                    <td>
                      <div class="sparkbar">21</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/players/223033.png"></img></td>
                    <td>Jorge Meré</td>
                    <td><span class="label label-warning">CB</span></td>
                    <td>
                      <div class="sparkbar">24</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/players/239085.png"></img></td>
                    <td>Erling Haaland</td>
                    <td><span class="label label-info">ST</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">21</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/players/238794.png"></img></td>
                    <td>Vinícius Jr.</td>
                    <td><span class="label label-info">LW</span></td>
                    <td>
                      <div class="sparkbar">21</div>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://fifastatic.fifaindex.com/FIFA22/players/255475.png"></img></td>
                    <td>Antony</td>
                    <td><span class="label label-info">RW</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">21</div>
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