
@extends('home')
@section('content')
    <div class="container py-5 d-flex justify-content-center" style="margin: auto">
        <div class="px-3 py-3 pt-3 bg-transparent register_form card register_card justify-content-center"
            style="width: 32rem">
            <div class="pb-4 text-center">
                <img src="{{ asset('logo.png') }}" class="register-card-logo" alt="...">
            </div>

            <div class="card-body">
                <form action="{{route('register',$package_id)}}" method="post">
                    @csrf
                    <div class="mb-4 form-group">
                        <input type="text"
                            class="text-white bg-transparent border shadow-none ps-1 rounded-0 form-control border-top-0 border-start-0 border-end-0"
                            name="name" id="exampleFormControlInput1" placeholder="Enter your name">
                    </div>
                    <div class="mb-4 form-group">
                        <input type="email"
                            class="text-white bg-transparent border shadow-none rounded-0 ps-1 form-control border-top-0 border-start-0 border-end-0"
                            name="email" id="exampleFormControlInput1" placeholder="Enter your email">
                    </div>
                    <div class="pt-3 mb-3 text-center">
                        <button class="register_btn w-100">Sign Up</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
