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
                        <div class="content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Notifications
                                            </div>

                                            <div class="card-body">
                                                @if(Auth::user()->hasRole('Student'))
                                                    @forelse($notifications as $notification)
                                                        <div class="alert alert-success" role="alert">
                                                            [{{ $notification->created_at }}] Teacher {{ $notification->data['firstName'] }} has Started The Seance for {{ $notification->data['module_Name'] }}
                                                            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}" data-module="{{$notification->data['module']}}" data-seance="{{$notification->data['seance']}}">
                                                                <form action="{{ route('markPresence') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $notification->data['module']}}" name="module_id">
                                                                    <input type="hidden" value="{{ $notification->data['seance']}}" name="seance_id">
                                                                    <button type="submit" class=""> Mark your Presence</button>
                                                                </form>
                                                            </a>
                                                        </div>
                                                    @empty
                                                        There are no new notifications
                                                    @endforelse
                                                @else
                                                    You are logged in!
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @if(Auth::user()->hasRole('Student'))
            <script>
                function sendMarkRequest(id = null,module,seance) {
                    return $.ajax("{{ route('markNotification') }}", {
                     headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        method: 'POST',
                        data: {
                            id,
                            module,
                            seance,
                        }
                    });
                }
                $(function() {
                    $('.mark-as-read').click(function() {
                        let request = sendMarkRequest($(this).data('id'),$(this).data('id'),$(this).data('id'));
                        request.done(() => {
                            $(this).parents('div.alert').remove();
                        });
                    });
                });
            </script>
        @endif
</x-app-layout>

