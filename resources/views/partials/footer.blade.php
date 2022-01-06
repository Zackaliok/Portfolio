<footer role="footer" class="flex flex-col items-center justify-around bg-slate-900 h-96">
    <img src="medias/logo-moi.png" width="100px" class="rounded-full">
    <div class="flex justify-around">
        <a href="https://twitter.com/zackaliok" class="px-3"><img src="medias/twitter.png" width="40px"></a>
        <a href="https://github.com/Zackaliok" class="px-3"><img src="medias/github.png" width="40px"></a>
        <a href="https://www.instagram.com/zackaliok_/?hl=fr" class="px-3"><img src="medias/instagram.png" width="40px"></a>
    </div>
    <div class="flex justify-around">
        <a href="{{route('welcome')}}" class="px-7 text-white">Home</a>
        <a href="{{route('projects')}}" class="px-7 text-white">Projets</a>
        <a href="{{route('technologies')}}" class="px-7 text-white">A propos de moi</a>
        <a href="{{route('contact.show')}}" class="px-7 text-white">Contactez-moi</a>
    </div>

    <p class="text-white">© {{date("Y")}} Tristan Fumiere, All rights reserved</p>
</footer>
