@extends('layouts.app')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
        @endforeach
    @endif


    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-4 text-uppercase">Зареєструватися</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-outline form-white mb-4">
                            <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg" value="{{ old('name') }}">
                            <label class="form-label" for="typeEmailX" style="margin-left: 0px;">Імʼя</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 40px;"></div><div class="form-notch-trailing"></div></div>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" value="{{ old('email') }}">
                            <label class="form-label" for="typeEmailX" style="margin-left: 0px;">Email</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 40px;"></div><div class="form-notch-trailing"></div></div>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" value="{{ old('password') }}">
                            <label class="form-label" for="typePasswordX" style="margin-left: 0px;">Пароль</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" name="password_confirmation" id="typePassword" class="form-control form-control-lg" value="{{ old('password_confirmation') }}">
                            <label class="form-label" for="typePassword" style="margin-left: 0px;">Підтвердіть пароль</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div>
                        </div>

                        <button class="btn btn-outline-dark btn-lg px-5" type="submit">Зареєструватися</button>

                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#!" class=""><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#!" class=""><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                            <a href="#!" class=""><i class="fab fa-google fa-lg"></i></a>
                        </div>
                    </form>
                </div>

                <div>
                    <p class="mb-0">Є аккаунта? <a href="{{ route('register') }}" class=" fw-bold">Увійти</a></p>
                </div>

            </div>
        </div>
    </div>
@endsection

