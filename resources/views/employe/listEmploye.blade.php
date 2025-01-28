@extends('base')

@section('body')
    <main class="">
        <div>
            <div class="flex row">
                @foreach ($ListeEmploye as $Employe)
                    <div>
                        <h2>Effectif {{$Employe['nom_poste']}}</h2>
                        <p>Salaire Actuelle {{$Employe['salaire_actuel']}} $ / Heure</p>*
                        <form action="" method="post">
                            <input type="hidden" name="id" value="{{$Employe['nom_poste']}}">
                            <input type="number" name="salaire" placeholder="Nouveau Salaire" class="placeholder:text-black text-black" required>
                            <button type="submit">Modifié la rémunération</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="flex row">
                <div></div>
                <div></div>
            </div>
        </div>
        <div>
            Liste des emploie sur chaque apparail
        </div>
    </main>
@endsection