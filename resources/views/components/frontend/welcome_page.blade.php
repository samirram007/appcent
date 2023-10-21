@extends('home')
@section('content')
<div class="container py-5">
  <div class="row">
      @foreach ($collections as $k => $package)
          <div class="col-md-4">
              <div class="card" style="width: 20rem; background-color: #BDBDBD;">
                  <div class="pb-5 card-body">
                    <h5 class="text-center member-card-title card-title">Plan</h5>
                    <p class="text-center member-card-name fw-bold">{{$package->name}}</p>
                    <div class="pt-3 pb-5 h-100 member-card-detail">
                      <div class="pt-3 pb-5">
                          <p class="text-center fw-bold fs-5 ">{{$package->amount}}</p>
                      </div>
                      <div class="px-3">
                          <p class="member-description">{{$package->description}}</p>
                      </div>
                    </div>
                    <div class="text-center d-flex justify-content-center">
                      <a href="{{route('register',$package->id)}}" class="text-center member-button">Sign Up</a>
                    </div>
                   
                  </div>
                </div>
          </div>
  @endforeach
  </div>
</div>
@endsection

