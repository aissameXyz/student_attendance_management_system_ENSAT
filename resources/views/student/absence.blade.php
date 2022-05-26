<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Absence
                </div>
            </div>
        </div>
    </div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="absence">
                    <table>
                        <thead>
                        <tr>
                            <td>id</td>
                            <td>apooge</td>
                            <td>module</td>

                            <td>date</td>
                            <td>seance</td>
                            <td>status</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->admissionNo}}</td>
                                <td>{{$item->designation}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->seance}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>              </div>
        </div>
    </div>
</div>
</x-app-layout>
