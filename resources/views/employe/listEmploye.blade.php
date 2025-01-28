@extends('base')

@section('body')
    <main class="flex flex-col items-center">
        <div class="w-full flex flex-col items-center mt-6">
            <div class="flex row w-full justify-center">
                @foreach ($ListeEmployeTotal as $Employe)
                    <div class="my-2 mx-5 p-6 border-2 border-gray-300 rounded-lg w-2/6">
                        <h2 class="mb-3">Effectif {{$Employe['nom_poste']}}</h2>
                        <div class="flex row text-sm row mb-4">
                            <p class="mr-3">Nombre de {{$Employe['nom_poste']}}: {{$Employe['total_employe']}}</p>
                            <p>Salaire Actuelle {{$Employe['salaire_actuel']}} $ / Heure</p>
                        </div>
                        <form action="" method="post" class="flex flex-col">
                            <input type="hidden" name="id" value="{{$Employe['nom_poste']}}">
                            <div>
                                <label for="salaire-{{$Employe['nom_poste']}}">Nouveau salaire:</label>
                                <input type="number" id="salaire-{{$Employe['nom_poste']}}" name="salaire" placeholder="Nouveau Salaire" class="placeholder:text-black text-black placeholder:px-1 rounded-md h-7 mb-5" required>
                            </div>
                            <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:mt-0 sm:w-auto">Modifié la rémunération</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="flex row w-full justify-center">
                <div class="my-2 mx-5 py-6 px-3 border-2 border-gray-300 rounded-lg w-4/6">
                    <h3>Charges de personnels</h3>
                    <div class="flex row">
                        
                    </div>
                </div>
                <div class="my-2 mx-5 py-6 px-3 border-2 border-gray-300 rounded-lg w-2/6">
                    <h3>Autre (Administratif)</h3>
                    <div class="flex row">

                    </div>
                </div>
            </div>
        </div>
        <div>
            Liste des emploie sur chaque apparail
        </div>
    </main>
@endsection