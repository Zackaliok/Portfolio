@extends('layouts.app')

@section('content')

    <div style="background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-image: url('https://images.unsplash.com/photo-1554147090-e1221a04a025?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1448&q=80');"
        class="flex flex-col">

        <a href="{{route('admin.login')}}">LOGIN</a>

        <div class="flex justify-around items-center py-5 lg:flex-row sm:flex-col-reverse">

            <h1 class="font-semibold text-7xl w-full px-28 bg-opacity-70" style="backdrop-filter: blur(20px);">
                Hello There ! <br>
                <span id="autotext"></span>
            </h1>
            <img class="rounded-full px-16 py-10" src="/medias/pp.png">
        </div>

        <div class=" self-center  rounded-lg w-1/2 my-16 mx-28 px-10 py-3 bg-opacity-70" style="backdrop-filter: blur(20px);"">
            <h1 class="py-3 text-4xl">Let me introduce <span style="color: deeppink;">myself</span></h1>
            <br>
            <p>Je suis tombé amoureux du développement et j'ai, je pense, appris pas mal de choses.</p>
            <!--<p>I fell in love with programming and I have at least learnt something, I think...</p>-->
            <p>J'ai de l'expérience dans les classiques comme Java, Javascript, PHP etc...</p>
            <!--<p>I am fluent in classics like Java, Javascript and PHP...</p>-->
            <!--<p>My field of Interest's are building new Web Technologies and Products</p>-->
            <p>Mes centres d'intérêts sont de construire de nouvelles technologies et produits web</p>
            <p>Quand j'ai le temps, le m'applique aussi à découvrir de nouvelles technologies comme React.js et autres.</p>
            <!--<p>Whenever possible, I also apply my passion for learning new technologies like React.js ...</p>-->
        </div>
    </div>





@endsection
