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
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="maho">
            <h2 class="font-weight-light display-4">Maho</h2>
            <p>I love coffee!</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="saaya">
            <h2 class="font-weight-light display-4">Saaya</h2>
            <p>I can speak Korean.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="jun">
            <h2 class="font-weight-light display-4">Jun</h2>
            <p>Call me Oppa.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="takumi">
            <h2 class="font-weight-light display-4">Takumi</h2>
            <p>I love movies.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
            </p>
        </div>
        <div class="column p-3" id="erika">
            <h2 class="font-weight-light display-4">Erika</h2>
            <p>Call me beth.</p>
            <p class="profile-btn">
                <a class="btn btn-outline-light d-block my-1" href="#">Web Page</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Github</a>
                <a class="btn btn-outline-light d-block my-1" href="#">Facebook</a>
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
