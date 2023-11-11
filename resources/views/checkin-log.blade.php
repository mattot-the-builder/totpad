<x-app-layout>
    <div class="mx-auto card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Check In Log</h2>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Student</th>
                            <th>Action</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkinLogs as $checkin_log)
                            <tr class="hover">
                                <th>{{ $checkin_log->id }}</th>
                                <th>{{ $checkin_log->user->name }}</th>
                                <td>
                                    <div
                                        class="badge badge-lg {{ $checkin_log->action === 'checkin' ? 'badge-success' : 'badge-error' }}">
                                        <svg class="w-2 h-2 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                                        </svg>
                                        {{ $checkin_log->action }}
                                    </div>
                                </td>
                                <td>{{ $checkin_log->created_at->format('d-m-Y H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $checkinLogs->links() }}
        </div>
    </div>


</x-app-layout>
