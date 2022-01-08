@extends('layouts.admin')

@section('content')

    <div class="p-4 m-4 border rounded-lg">
        <form action="{{route('upload.cv')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="20000">
            <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->
            <label>Votre fichier</label> :
            <input type="file" name="cv_file"><br>
            <input class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                type="submit" value="Envoyer">
        </form>
    </div>



    <br>
    <a href="{{route('welcome')}}">Aller à l'affichage original</a>
@endsection
