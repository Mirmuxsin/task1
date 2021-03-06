<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href=" {{ asset('/styles/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/styles/index.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-16x16.png') }}">


    <!-- Jquery -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <ul class="nav__list" role="menubar">
            <li class="nav__item nav__item--isActive">
                <a
                    href="{{ route('home') }}"
                    class="nav__link focus--box-shadow"
                    role="menuitem"
                    aria-label="Home"
                >
                    <svg
                        class="nav__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            fill="#6563ff"
                            d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"
                        />
                    </svg>
                </a>
            </li>
            <li class="nav__item">
                <a
                    href="test"
                    class="nav__link focus--box-shadow"
                    role="menuitem"
                    aria-label="Favorite projects"
                >
                    <svg
                        class="nav__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                        />
                    </svg>
                </a>
            </li>
            <li class="nav__item">
                <a
                    href="#"
                    class="nav__link focus--box-shadow"
                    role="menuitem"
                    aria-label="Informational messages"
                ><svg
                        class="nav__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M12,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,12,8Zm0-6A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"
                        />
                    </svg>
                </a>
            </li>
            <li class="nav__item">
                <a
                    href="#"
                    class="nav__link focus--box-shadow"
                    role="menuitem"
                    aria-label="Collections"
                >
                    <svg
                        class="nav__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M2.5,10.56l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,0-1.73l-9-5.2a1,1,0,0,0-1,0l-9,5.2a1,1,0,0,0,0,1.73ZM12,5.65l7,4-7,4.05L5,9.69Zm8.5,7.79L12,18.35,3.5,13.44a1,1,0,0,0-1.37.36,1,1,0,0,0,.37,1.37l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,.37-1.37A1,1,0,0,0,20.5,13.44Z"
                        />
                    </svg>
                </a>
            </li>
            <li class="nav__item">
                <a
                    href="test"
                    class="nav__link focus--box-shadow"
                    role="menuitem"
                    aria-label="Analytics"
                >
                    <svg
                        class="nav__icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M6,13H2a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H6a1,1,0,0,0,1-1V14A1,1,0,0,0,6,13ZM5,21H3V15H5ZM22,9H18a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V10A1,1,0,0,0,22,9ZM21,21H19V11h2ZM14,1H10A1,1,0,0,0,9,2V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V2A1,1,0,0,0,14,1ZM13,21H11V3h2Z"
                        />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    @yield('main')

    <aside class="aside">
        <section class="section">
            <div class="aside__control">
                <button
                    class="aside__button focus--box-shadow"
                    type="button"
                    aria-label="Close profile settings"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"
                        />
                    </svg>
                </button>
                <button
                    class="aside__button aside__button--notification focus--box-shadow"
                    type="button"
                    aria-label="You have new feedback"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                    >
                        <path
                            d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"
                        />
                    </svg>
                </button>
            </div>
            <div class="profile-main">
                <button
                    class="profile-main__setting focus--box-shadow"
                    type="button"
                >
                    <img
                        class="profile-main__photo"
                        src="{{ asset('./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg') }}"
                        alt="Profile photo"
                    />
                </button>
                <h1 class="profile-main__name">{{ Auth::user()->name }}</h1>
            </div>
            <ul class="statistics">
                <li class="statistics__entry">
                    <a class="statistics__entry-description" href="#">Email</a
                    ><span class="statistics__entry-quantity">{{ Auth::user()->email }}</span>
{{--                </li><li class="statistics__entry">--}}
{{--                    <a class="statistics__entry-description" href="#">Guruhlar</a--}}
{{--                    ><span class="statistics__entry-quantity">test</span>--}}
{{--                </li>--}}
{{--                <li class="statistics__entry">--}}
{{--                    <a class="statistics__entry-description" href="#">Kanallar</a--}}
{{--                    ><span class="statistics__entry-quantity">test</span>--}}
{{--                </li>--}}
                <li class="statistics__entry">
                    <a class="statistics__entry-description" href="#">Balance:</a
                    ><span class="statistics__entry-quantity">{{ Auth::user()->wallet->balance }} $</span>
                </li>
            </ul>
            <div class="banner">
                <h3 class="banner__title">Premium access</h3>
                <p class="banner__description">Create teams without limits</p>
                <button class="banner__button" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Get Premium Access
                </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </section>
    </aside>
</div>
</body>
</html>
