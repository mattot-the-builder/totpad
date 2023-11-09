<x-app-layout>
    <div class="mx-auto card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Student List</h2>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="hover">
                                <th>{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->checkinLogs()->latest()->first()->action === 'checkin' ? 'Checked In' : 'Checked Out' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $students->links() }}
        </div>
    </div>


</x-app-layout>
