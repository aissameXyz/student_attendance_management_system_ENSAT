<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="flex-col flex">
        <form method="POST" action={{url("Teacher/absence/seanceStart/$seance_id")}}>
            @csrf
            <button class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md" type="submit" id="start" >Start Seance</button>
        </form>

        <form method="POST" action={{url("Teacher/absence/seanceEnd/$seance_id")}}>
            @csrf
            <button class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md" type="submit" id="end" >End Seance</button>
        </form>
    </div>

    <script type="text/javascript">

    </script>

    @if($absences)
    <div id="absence_sheet" class="py-12 w-full">
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="table">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="col">
                                                            First Name
                                                        </th>
                                                        <th>
                                                            Last Name
                                                        </th>
                                                        <th>
                                                        Code Apogée
                                                        </th>
                                                        <th>
                                                            Present
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <form class="px-4 py-2 btn" method="POST" action="{{ route('teacher.absence.store') }}">
                                                        @csrf
                                                        @foreach ($absences as $absence)
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->firstName }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->lastName }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->code_ap }}
                                                                    </div>
                                                                </td>
                                                                <td class="d-flex justify-content-center whitespace-nowrap">
                                                                    @if($absence->status=="present")
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" name="absent[]" type="checkbox" value="{{ $absence->student()->id }}" checked id="flexSwitchCheckDefault">
                                                                        </div>
                                                                    @else
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" name="absent[]" type="checkbox" value="{{ $absence->student()->id }}" id="flexSwitchCheckDefault">
                                                                        </div>
                                                                    @endif
                                                                    <input type="hidden" value="{{ $absence->student()->id }}" name="ids[]">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <input type="hidden" value="{{ $seance_id }}" name="seance">
                                                            <button class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md" type="submit">Submit</button>
                                                    </form>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</x-app-layout>


