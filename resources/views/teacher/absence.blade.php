<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>





    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                                <div class="flex justify-center p-2">
                                    <a href="{{ url('Teacher/absence/seance/1') }}" class="px-4 py-2 btn btn-success">Séance 1</a>
                                    <a href="{{ url('Teacher/absence/seance/2') }}" class="px-4 py-2 btn btn-success">Séance 2</a>
                                    <a href="{{ url('Teacher/absence/seance/3') }}" class="px-4 py-2 btn btn-success">Séance 3</a>
                                    <a href="{{ url('Teacher/absence/seance/4') }}" class="px-4 py-2 btn btn-success">Séance 4</a>
                                    <a href="{{ url('Teacher/absence/seance/5') }}" class="px-4 py-2 btn btn-success">Séance 5</a>
                                    <a href="{{ url('Teacher/absence/seance/6') }}" class="px-4 py-2 btn btn-success">Séance 6</a>
                                    <a href="{{ url('Teacher/absence/seance/7') }}" class="px-4 py-2 btn btn-success">Séance 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







</x-app-layout>
