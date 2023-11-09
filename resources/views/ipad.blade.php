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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ipads as $ipad)
                            <tr class="hover">
                                <th>{{ $ipad->id }}</th>
                                <th>{{ $ipad->user->name }}</th>
                                <td>{{ $ipad->model }}</td>
                                <td>{{ $ipad->serial_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $ipads->links() }}
        </div>
    </div>


</x-app-layout>
