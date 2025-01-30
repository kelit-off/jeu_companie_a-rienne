@extends('base')

@section('body')
    <main class="py-10">
        <div class="flex flex-row">
            <div class="my-2 mx-5 py-6 px-3 border-2 flex flex-col border-gray-300 rounded-lg w-3/6">
                <h2>Embaucher PNT</h2>
                <form class="flex flex-col items-center w-full mt-5">
                    <div class="flex flex-row justify-around w-full">
                        <div class="mx-auto text-center">
                            <h3>PNT pour cette famille</h3>
                            <span>10</span>
                        </div>
                        <div class="mx-auto text-center">
                            <h3>PNT Total</h3>
                            <span>20</span>
                        </div>
                    </div>
                    <div class="w-5/12 mt-5">
                        <input type="number" class="rounded-lg w-full placeholder:pl-5 outline-none focus:outline-1 focus:outline-blue-500" placeholder="Entre le nombre d'employe">
                    </div>
                    <div class="mt-10">
                        <button type="button" class="bg-green-500 hover:bg-green-600 text-white">Embauche</button>
                        <button type="button" class="bg-red-500 hover:bg-red-600 text-white">Virer</button>
                    </div>
                </form>
            </div>
            <div class="my-2 mx-5 py-6 px-3 border-2 border-gray-300 rounded-lg w-3/6">
                <h2>Embauche PNC</h2>
                <form class="flex flex-col items-center w-full mt-5">
                    <div class="flex flex-row justify-around w-full">
                        <div class="mx-auto text-center">
                            <h3>PNC pour cette famille</h3>
                            <span>10</span>
                        </div>
                        <div class="mx-auto text-center">
                            <h3>PNC Total</h3>
                            <span>20</span>
                        </div>
                    </div>
                    <div class="w-5/12 mt-5">
                        <input type="number" class="rounded-lg w-full placeholder:pl-5 outline-none focus:outline-1 focus:outline-blue-500" placeholder="Entre le nombre d'employe">
                    </div>
                    <div class="mt-10">
                        <button type="button" class="bg-green-500 hover:bg-green-600 text-white">Embauche</button>
                        <button type="button" class="bg-red-500 hover:bg-red-600 text-white">Virer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="my-2 mx-5 py-6 px-3 border-2 border-gray-300 rounded-lg w-6/6">
            Liste des apparail pour certifie
        </div>
    </main>
@endsection