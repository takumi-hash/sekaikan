<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css" type="text/css" />
    <title>Welcome to TeamSEKAIKAN!</title>

</head>

<body>
    <div id="logo">
        <h1 class="text-white text-center py-2"><span class="font-weight-light">TEAM</span><span class="font-weight-bold">SEKAIKAN</span></h1>
        <a class="btn btn-outline-light d-inline" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="column-container">
        <div class="column p-3" id="manatee">
            <h2 class="font-weight-light display-4">Manatee</h2>
            <p>I am Manatee!</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/manato">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/kymmmana/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="https://www.facebook.com/profile.php?id=100007848092711">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="maho">
            <h2 class="font-weight-light display-4">Maho</h2>
            <p>I love coffee!</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/maho">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/maho143/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="https://www.facebook.com/profile.php?id=100003604086115">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="saaya">
            <h2 class="font-weight-light display-4">Saaya</h2>
            <p>I can speak Korean.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/saaya">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/saaaaaaya/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="https://www.facebook.com/sa.ya.snsd.pink">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="jun">
            <h2 class="font-weight-light display-4">Jun</h2>
            <p>Call me Oppa.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/jun">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/junwoo593/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="https://www.facebook.com/profile.php?id=100003603514429">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="takumi">
            <h2 class="font-weight-light display-4">Takumi</h2>
            <p>I love movies.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/takumi">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/takumi-hash/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="///facebook.com/profile.php?id=100002450637697">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="erika">
            <h2 class="font-weight-light display-4">Erika</h2>
            <p>Call me Beth.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="/erika">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="https://github.com/erika1028/">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="https://www.facebook.com/profile.php?id=100004031251503">Facebook</a>
            </p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>

</html>
