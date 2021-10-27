@extends('layouts.sidebar')

@section('main')
    <main class="main">
        @include('layouts.header')
        <section class="section">
            <header class="section__header">
                <h2 class="section__title">Wallet</h2>
                <a href="#" class="section__link">View all</a>
            </header>
            <ul class="team">
                <li class="team__item">
                    <a class="team__link focus--box-shadow" href="#">
                        <div class="team__header">
                            <ul class="photo">
                                Balance
                            </ul>
                            <button
                                class="setting setting--absolute focus--box-shadow"
                                type="button"
                            >
                                <svg
                                    enable-background="new 0 0 515.555 515.555"
                                    height="512"
                                    viewBox="0 0 515.555 515.555"
                                    width="512"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="team__inform">
                            <p class="team__name">{{ Auth::user()->wallet->balance }} $</p>
                            <time class="date" datetime="2020-05-05T10:00:00"
                            >{{ date('d F, Y  G:i', strtotime(Auth::user()->wallet->updated_at)) }}</time
                            >
                        </div>
                    </a>
                </li>
                <li class="team__item">
                    <a class="team__link focus--box-shadow" href="#">
                        <div class="team__header">
                            <ul class="photo">
                                <li class="photo__item">
                                    <span class="photo__substrate">+6</span>
                                </li>
                                <li class="photo__item">
                                    <img
                                        src="{{ asset('/img/raychan-9UkAHVs5y7Y-unsplash.jpg') }}"
                                        alt="Yulia's photo"
                                    />
                                </li>
                                <li class="photo__item">
                                    <img
                                        src="{{ asset('/img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg') }}"
                                        alt="Jessica's photo"
                                    />
                                </li>
                            </ul>
                            <button
                                class="setting setting--absolute focus--box-shadow"
                                type="button"
                            >
                                <svg
                                    enable-background="new 0 0 515.555 515.555"
                                    height="512"
                                    viewBox="0 0 515.555 515.555"
                                    width="512"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="team__inform">
                            <p class="team__name">New project</p>
                            <time class="date" datetime="2020-05-01T10:00:00"
                            >01 May, 2020</time
                            >
                        </div>
                    </a>
                </li>
                <li class="team__item">
                    <a class="team__link focus--box-shadow" href="#">
                        <div class="team__header">
                            <ul class="photo">
                                <li class="photo__item">
                                    <img
                                        src="{{ asset('/img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg') }}"
                                        alt="Jessica's photo"
                                    />
                                </li>
                            </ul>
                            <button
                                class="setting setting--absolute focus--box-shadow"
                                type="button"
                            >
                                <svg
                                    enable-background="new 0 0 515.555 515.555"
                                    height="512"
                                    viewBox="0 0 515.555 515.555"
                                    width="512"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                    <path
                                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="team__inform">
                            <p class="team__name">Design development</p>
                            <time class="date" datetime="2020-01-10T10:00:00"
                            >10 January, 2020</time
                            >
                        </div>
                    </a>
                </li>
            </ul>
        </section>
        <section class="section">
            <header class="section__header">
                <h2 class="section__title"></h2>
                <div class="section__control">
                    <button
                        class="section__button focus--box-shadow"
                        type="button"
                        aria-label="Filter projects"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            role="presentation"
                        >
                            <path
                                d="M20,8.18V3a1,1,0,0,0-2,0V8.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V13.82a3,3,0,0,0,0-5.64ZM19,12a1,1,0,1,1,1-1A1,1,0,0,1,19,12Zm-6,2.18V3a1,1,0,0,0-2,0V14.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V19.82a3,3,0,0,0,0-5.64ZM12,18a1,1,0,1,1,1-1A1,1,0,0,1,12,18ZM6,6.18V3A1,1,0,0,0,4,3V6.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V11.82A3,3,0,0,0,6,6.18ZM5,10A1,1,0,1,1,6,9,1,1,0,0,1,5,10Z"
                            />
                        </svg>
                    </button>
                    <a href="{{ route('wallet.create') }}">
                        <button
                            class="section__button section__button--painted focus--box-shadow"
                            type="button"
                            aria-label="Add New project"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                role="presentation"
                            >
                                <path
                                    d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                                />
                            </svg>
                        </button>
                    </a>
                </div>
            </header>
            <ul class="project">

            </ul>
        </section>
    </main>
@endsection
