@extends('layouts.sidebar')

@section('main')
    <main class="main">
        @include('layouts.header')
        <section class="section">
            <header class="section__header">
                <h2 class="section__title">Recharge wallet</h2>
            </header>
            <div class="wrapper not-height">
                <form action="{{ route('wallet.update', Auth::user()->wallet->id ) }}" method="POST" class="clean-form bg:color-white bg:shadow-500 margin-bottom-30">
                    @csrf
                    @method('PUT')
                    <div class="form-title-group sm:text-center">
                        <h6 class="fontSize-32 sm:fontSize-28 margin-bottom-15">Recharging your wallet balance</h6>
                    </div>

                    <div class="clean-input-group margin-bottom-30">
                        <input id="inputTg" type="number" name="balance" class="input" />
                        <label for="inputTg" class="input:placeholder cursor-text">Amount</label>
                    </div>

                    <button class="button--width-100 button:true-v register-button fontSize-18 sm:fontSize-16">Submit</button>
                </form>
            </div>
        </section>
    </main>
    <script src="{{ asset('/assets/js/custom.select.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>
@endsection
