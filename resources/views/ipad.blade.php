<x-app-layout>
    <div class="mx-auto card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Ipad List</h2>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Student</th>
                            <th>Model</th>
                            <th>Serial Number</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ipads as $ipad)
                            <tr class="hover">
                                <th>{{ $ipad->id }}</th>
                                <th>{{ $ipad->user->name }}</th>
                                <td>{{ $ipad->model }}</td>
                                <td>{{ $ipad->serial_number }}</td>
                                <td>
                                    <div
                                        class="badge badge-lg {{ $ipad->isAvailable ? 'badge-success': 'badge-error' }}">
                                        <svg class="w-2 h-2 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                                        </svg>
                                        {{ $ipad->isAvailable ? 'Checked In': 'Checked Out' }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $ipads->links() }}
        </div>
    </div>


</x-app-layout>
