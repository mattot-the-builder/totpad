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
                                <td>{{ $checkin_log->action }}</td>
                                <td>{{ $checkin_log->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $checkinLogs->links() }}
        </div>
    </div>


</x-app-layout>
