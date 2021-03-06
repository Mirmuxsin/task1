@extends('layouts.sidebar')

@section('main')
    <main class="main">
        @include('layouts.header')
        <section class="section">
            <header class="section__header">
                <h2 class="section__title">Raqamlar</h2>
                <a href="#" class="section__link">View all</a>
            </header>
            <ul class="team">
                <li class="team__item">
                    <a class="team__link focus--box-shadow" href="#">
                        <div class="team__header">
                            <ul class="photo">
                                <li class="photo__item">
                                    <span class="photo__substrate">+2</span>
                                </li>
                                <li class="photo__item">
                                    <img
                                        src="./img/julian-wan-WNoLnJo7tS8-unsplash.jpg"
                                        alt="Jack's photo"
                                    />
                                </li>
                                <li class="photo__item">
                                    <img
                                        src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
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
                            <p class="team__name">Product presentation</p>
                            <time class="date" datetime="2020-05-05T10:00:00"
                            >05 May, 2020</time
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
                                        src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
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
{{--                @foreach($chats as $chat)--}}
{{--                    <li class="project__item">--}}
{{--                        <a href="{{ route('members', $chat->id) }}" class="project__link focus--box-shadow">--}}
{{--                            <div class="project__wrapper">--}}
{{--                                <div class="project__element project__icon">--}}
{{--                                    <div--}}
{{--                                        class="icon--}}
{{--                                            @php if($chat->type == 'group'){--}}
{{--                                                echo "icon--viking";--}}
{{--                                            } else {--}}
{{--                                                echo "icon--rajah";--}}
{{--                                            } @endphp "--}}
{{--                                        aria-label="Icon of the 'Showcase Design' project"--}}
{{--                                    >--}}
{{--                                        <svg--}}
{{--                                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                                            viewBox="0 0 24 24"--}}
{{--                                            role="presentation"--}}
{{--                                        >--}}
{{--                                            <path--}}
{{--                                                d="M7,10H9A1,1,0,0,0,9,8H7a1,1,0,0,0,0,2ZM21,4H13V3a1,1,0,0,0-2,0V4H3A1,1,0,0,0,2,5V15a3,3,0,0,0,3,3H9.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,19.41V21a1,1,0,0,0,2,0V19.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L14.41,18H19a3,3,0,0,0,3-3V5A1,1,0,0,0,21,4ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V6H20ZM7,14h6a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Z"--}}
{{--                                            />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="project__element project__inform">--}}
{{--                    <span class="project__inform-name"--}}
{{--                    >{{ $chat->name }}</span--}}
{{--                    >--}}
{{--                                </div>--}}
{{--                                <div class="project__element project__photo">--}}
{{--                                    {{ $chat->type }}--}}
{{--                                </div>--}}
{{--                                <div class="project__element project__date">--}}
{{--                                    <time class="date" datetime="2020-05-05T10:00:00"--}}
{{--                                    >{{ $chat->created_at }}</time--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                                <div class="project__element project__status">--}}
{{--                                    <span class="status status--{{ $chat->status }}">{{ $chat->status }}</span>--}}
{{--                                </div>--}}
{{--                                <div class="project__element project__setting">--}}
{{--                                    <button--}}
{{--                                        class="setting setting--rotate focus--box-shadow"--}}
{{--                                        type="button"--}}
{{--                                    >--}}
{{--                                        <svg--}}
{{--                                            enable-background="new 0 0 515.555 515.555"--}}
{{--                                            height="512"--}}
{{--                                            viewBox="0 0 515.555 515.555"--}}
{{--                                            width="512"--}}
{{--                                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                                        >--}}
{{--                                            <path--}}
{{--                                                d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"--}}
{{--                                            />--}}
{{--                                            <path--}}
{{--                                                d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"--}}
{{--                                            />--}}
{{--                                            <path--}}
{{--                                                d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"--}}
{{--                                            />--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
            </ul>
        </section>
    </main>
@endsection
