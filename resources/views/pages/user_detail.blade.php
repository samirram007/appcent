@extends('home')
@section('content')
    <div class="container py-5 m-auto text-center justify-content-center d-flex">
        <div class="bg-transparent card w-75 user-detail-card" >
            <div class="row">
                <div class="overflow-hidden d-flex col-md-6 justify-content-center align-items-center" >
                    <img src="{{asset('logo.png')}}" class="detail-card-img " alt="" srcset="">
                </div>
                <div class="text-center justify-content-center col-md-6" >
                    <p  class="pt-3 text-center text-white fs-3 fw-bold">Your Login Credentials</p>
                    <p class="text-white fw-bold fs-4 ">UserName</p>
                    <p class="fs-5 user-credentials">{{$user->code}}</p>
                    <p class="text-white fw-bold fs-4">Passcode</p>
                    <p class="fs-5 user-credentials">{{$user->passcode}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection    