@extends('base')

@section('body')
    <main class="w-full container flex justify-center">
        <form action="" method="post" class="w-2/3 py-56">
            @csrf
            <div class="py-6">
                <h2>Paramètre du compte</h2>
                <div class="flex row md:justify-between py-4">
                    <div class="w-2/3 md:w-1/3 m-2 md:m-0">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                    <div class="w-2/3 md:w-1/3 m-2 md:m-0">
                        <input type="email" name="email" placeholder="Adresse email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                </div>
                <div class="flex row justify-between py-4">
                    <div class="w-2/3 md:w-1/3 m-2 md:m-0">
                        <input type="password" name="password" placeholder="Mot de passe" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                    <div class="w-2/3 md:w-1/3 m-2 md:m-0">
                        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <h2>Paramètre de la companie</h2>
                <div class="flex row justify-between py-4">
                    <div class="w-2/3 md:w-1/3 m-2 md:m-0">
                        <input type="text" name="company_name" placeholder="Nom de la companie" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                    <div class="w-2/3 flex row md:w-1/3 m-2 md:m-0">
                        <label for="companie_iata" class="inline-flex items-center w-auto md:text-nowrap text-wrap mr-2 text-center">Code IATA</label>
                        <input type="text" id="companie_iata" name="companie_iata" placeholder="Ex: Air France : AF" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-0 focus:-outline-offset-0 sm:text-sm/6" required>
                    </div>
                </div>
            </div>
            <div>
                <h2>CGU</h2>
            </div>
            <div class="w-full flex justify-center">
                <button class="mt-3 inline-flex w-full justify-center rounded-md bg-green-900 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-800 sm:mt-0 sm:w-auto">S'inscrire</button>
            </div>
        </form>
    </main>
@endsection