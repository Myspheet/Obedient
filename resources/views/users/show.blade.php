<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
    <div class="header__wrapper">
        <header></header>
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    <img src="{{ asset('img/5.jpg') }}" alt="" />
                    <span></span>
                </div>
                <h2>{{ $user->name }}</h2>
                <p>{{ $user->rank }}</p>
                <p>{{ $user->email }}</p>

                <ul class="about">
                    <li><span>State</span>{{ $user->state }}</li>
                    <li><span>Ward</span>{{ $user->ward }}</li>
                    <li><span>Polling Unit</span>{{ $user->pollingUnit }}</li>
                </ul>

                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
                        erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
                        ligula egestas nulla.
                    </p>
                </div>
            </div>

            <div class="right__col">
                <nav>
                    <ul>
                        <li><a style="" href="/profile">photos</a></li>
                        <li><a href="/profile?tab=search">Search</a></li>
                    </ul>
                    <a href="/profile/edit"><button>Edit Profile</button></a>
                </nav>

                @if (!isset($_GET['tab']))
                    <div class="photos">
                        <img src="{{ asset('img/obi.jpeg') }}" alt="Photo" />
                        <img src="{{ asset('img/top.jpg') }}" alt="Photo" />
                        <img src="{{ asset('img/peter-Obi-1-1.jpg') }}" alt="Photo" />
                        <img src="{{ asset('img/2.jpg') }}" alt="Photo" />
                        <img src="{{ asset('img/3.jpg') }}" alt="Photo" />
                        <img src="{{ asset('img/move.jpg') }}" alt="Photo" />

                    </div>
                @endif

            </div>
        </div>
    </div>
</body>

</html>
