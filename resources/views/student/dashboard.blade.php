<x-app-layout>

    <div class="flex justify-center">

        @if (auth()->user()->ipad)

            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">
                        @if (auth()->user()->status === 'checkin')
                            <span class="badge badge-success">Checked In</span>
                        @elseif (auth()->user()->status === 'checkout')
                            <span class="badge badge-error">Checked Out</span>
                        @endif
                    </h2>
                    <p>Hello, <b>{{ auth()->user()->name }}</b></p>
                    <p>
                        Last {{ auth()->user()->status }} at <b>{{ auth()->user()->updated_at->diffForHumans() }}</b>
                    </p>
                    <div class="card-actions justify-end">
                        @if (auth()->user()->status === 'checkin')
                            <a href="{{ route('student.checkout') }}" class="btn btn-primary">Checkout</a>
                        @else
                            <a href="{{ route('student.checkin') }}" class="btn btn-success">Checkin</a>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body text-center">
                    <p>Please add your iPad detail first</p>
                    <a class="btn btn-primary" href="{{route('student.ipad')}}">Add</a>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
