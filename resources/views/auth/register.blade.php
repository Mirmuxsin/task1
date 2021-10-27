<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Task 1 Person hunters</title>

    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('/styles/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/styles/index.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicons/site.webmanifest') }}">

    <!-- Jquery -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
</head>

<body>
<div class="wrapper wrapper--align-center wrapper--mobile">
    <form method="POST" class="clean-form bg:color-white bg:shadow-500" action="{{ route('register') }}">
        @csrf
        <div class="form-title-group sm:text-center">
            <h6 class="fontSize-48 sm:fontSize-28">Create account</h6>
            <p class="text--dark-500 margin-bottom-30 sm:fontSize-12">Welcome to {{ config('app.name') }}</p>
        </div>

        <div class="clean-input-group margin-bottom-30">
            <input id="inputName" type="text" name="name" class="input" />
            <label for="inputName" class="input:placeholder cursor-text">Full name</label>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="clean-input-group margin-bottom-30">
            <input id="inputMail" type="email" name="email" class="input" />
            <label for="inputMail" class="input:placeholder cursor-text">E-Mail</label>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="clean-input-group margin-bottom-30">
            <input id="inputPassword" type="password" name="password" class="input" />
            <label for="inputPassword" class="input:placeholder cursor-text">Password</label>
            <span class="svg-icon eye-icon eye-x-icon pointer" onclick="togglePasswordInput($(this))"></span>


            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="clean-input-group margin-bottom-30">
            <input id="inputPassword2" type="password" name="password_confirmation" class="input" />
            <label for="inputPassword2" class="input:placeholder cursor-text">Password</label>
            <span class="svg-icon eye-icon eye-x-icon pointer" onclick="togglePasswordInput($(this))"></span>


            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <button class="button--width-100 button:true-v register-button sm:fontSize-26">Register</button>

        <p class="text-center margin-y-15 sm:fontSize-14">Already have a account? <a href="{{ route('login') }}" class="text:underline">Log in</a></p>

    </form>
</div>

@if($errors->any())
    @foreach ($errors->all() as $type => $error)
        <div class="wrapper wrapper--align-center alert-modal">
            <div class="alert-body bg:shadow-500">
                <div class="alert-icon">
                    <img src="{{ asset('/assets/svg/wrong.svg') }}" alt="fuck">
                </div>
                <div class="alert-message">
                    <p class="fontSize-32 sm:fontSize-26">{{ $error }}</p>
                </div>

                <span class="alert-close" onclick="closeModal($(this))"></span>
            </div>
        </div>
    @endforeach
@endif


<script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
