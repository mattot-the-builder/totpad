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
                                <td>
                                    <div
                                        class="badge badge-lg {{ $student->status === 'checkin'? 'badge-success': 'badge-error' }}">
                                        <svg class="w-2 h-2 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                                        </svg>
                                        {{ $student->status }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $students->links() }}
        </div>
    </div>


</x-app-layout>
