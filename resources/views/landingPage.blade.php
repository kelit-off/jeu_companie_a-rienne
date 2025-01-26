@extends('base')

@section('body')
<div class="">
    <header>

    </header>
    <section class="py-8 mb-12">
        <div class="container mx-auto px-4">
            <form class="flex items-center justify-evenly" action="/auth/login" method="post">
                @csrf
                <input type="text" name="username" placeholder="Pseudo" class="bg-gray-700 text-white px-3 py-2 rounded">
                <input type="password" name="password" placeholder="Mot de passe" class="bg-gray-700 text-white px-3 py-2 rounded">
                
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="form-checkbox text-green-500">
                    <span>Se souvenir de moi</span>
                </label>

                <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Se connecter</button>
            </form>

            <div class="flex justify-center mt-4 text-sm">
                <a href="/auth/resetPassword" class="text-orange-400 hover:text-orange-500 m-3 px-4 py-2">Mot de passe oublié ?</a>
                <a href="/auth/register" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded m-3">S'inscrire sur Air Carrier !</a>
            </div>
        </div>
    </section>
    <main class="container mx-auto px-4 py-8 mb-12">
        <h2 class="text-xl font-bold mb-4">Le tout dans un environnement concurrentiel !</h2>
        <p class="mb-4">
            Vous vous sentez l'âme d'un gestionnaire et vous êtes passionné par l'aérien ? N'hésitez plus et créez votre propre compagnie aérienne, celle à votre image !
        </p>
        <p class="mb-4">
            Notre volonté, que vous puissiez interagir avec le reste de la communauté en gérant votre compagnie.
        </p>
        <p class="mb-4">
            C'est pour cette raison que nous mettons en place des modules liant les joueurs entre eux. Cela vous permet d'influencer positivement comme négativement sur la gestion des autres joueurs.
        </p>
        <p class="font-semibold">
            Jouer sur Air Carrier c'est avoir en outre, à gérer :
        </p>
    </main>

    <!-- Footer Stats Section -->
    <footer class="py-8">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-lg font-bold mb-4">En quelques chiffres ..</h3>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-700 p-4 rounded">
                    <p class="text-2xl font-bold">123</p>
                    <p>Compagnies actives</p>
                </div>
                <div class="bg-gray-700 p-4 rounded">
                    <p class="text-2xl font-bold">456</p>
                    <p>Avions en vol</p>
                </div>
                <div class="bg-gray-700 p-4 rounded">
                    <p class="text-2xl font-bold">789</p>
                    <p>Routes commerciales</p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection