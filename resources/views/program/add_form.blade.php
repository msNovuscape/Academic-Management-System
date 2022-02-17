@extends('master')

@section('title')
    Add Program
@endsection

@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
         
            <div class="col-xl-4 col-lg-5 ">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Add {{$title}}</h4>
                  <!-- <p class="mb-0">Enter your email and password to register</p> -->
                </div>
                <div class="card-body">
                  <form role="form" method = "post" action = "{{route('program.store')}}">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name = "name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name = "no_of_semester" class="form-control">
                    </div>
                    <!-- <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control">
                    </div> -->
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add</button>
                    </div>
                  </form>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    
</div>
@endsection