@extends('layouts.home')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
     <h1>
       Dashboard
       <small>about information</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Edit</a></li>
       <li class="active">Information</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
    
     <div class="container">
     
            <div class="col-12">
                <h1 class="mt-3 text-center mb-4">Edit Data Statistik Pemain</h1>
                    
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-body">
                            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                 
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="nama" class="form-control" value="{{$data->name}}"  id="exampleInputEmail1" aria-describedby="emailHelp" style="padding-right: 20px; padding-left: 20px; margin-right: 80px;">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Positions</label>
                                    <input type="text" name="nim" class="form-control" value="{{$data->position}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Age</label>
                                    <input type="text" name="judul" class="form-control" value="{{$data->age}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">League</label>
                                    <input type="text" name="pembimbing_1" class="form-control" value="{{$data->league}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Club</label>
                                    <input type="text" name="judul" class="form-control" value="{{$data->club}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Contract</label>
                                    <input type="text" name="judul" class="form-control" value="{{$data->contract}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                                    <input type="text" name="judul" class="form-control" value="{{$data->rating}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Status</label>
                                    <select class="form-select"  name="status" aria-label="Default select example">
                                        <option selected>{{$data->status}}</option>
                                        <option value="OPEN">OPEN</option>
                                        <option value="CLOSED">CLOSED</option>
                                    </select>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>

            </div>
     
    </div>

       <!-- /.box-footer-->
  

   </section>
   <!-- /.content -->
   @endsection