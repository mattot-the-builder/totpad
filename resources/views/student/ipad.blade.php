<x-app-layout>
    @if (auth()->user()->ipad)
        <div class="flex justify-center space-x-6" x-data="{ isOpen: false }">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">My iPad</h2>
                    <p>Model : <b>{{ auth()->user()->ipad->model }}</b> <br>
                        Serial Number : <b>{{ auth()->user()->ipad->serial_number }}</b></p>
                    <div class="card-actions justify-end space-x-2 items-center">
                        <form action="{{ route('student.ipad.destroy', auth()->user()->ipad) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-neutral">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Remove
                            </button>
                        </form>

                        <button type="button" @click="isOpen=true" class="btn btn-primary">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            Update
                        </button>
                    </div>
                </div>
            </div>

            <div class="card w-96 bg-base-100 shadow-xl" x-show="isOpen">
                <div class="card-body">
                    <h2 class="card-title">Update iPad</h2>
                    <form action="{{ route('student.ipad.update', auth()->user()->ipad) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label class="label">
                            <span class="label-text">Ipad Model</span>
                        </label>
                        <input type="text" name="model" placeholder="Model"
                            class="mb-3 input input-bordered w-full" value="{{ auth()->user()->ipad->model }}" />

                        <label class="label">
                            <span class="label-text">Serial Number</span>
                        </label>
                        <input type="text" name="serial_number" placeholder="Serial Number"
                            class="mb-3 input input-bordered w-full"
                            value="{{ auth()->user()->ipad->serial_number }}" />
                        </p>
                        <div class="modal-action">
                            <!-- if there is a button in form, it will close the modal -->
                            <button type="button" @click="isOpen=false" class="btn">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="flex justify-center space-x-6" x-data="{ isOpen: false }">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body text-center">
                    <p>No iPad detail associated with your account found</p>
                    <button class="btn btn-primary" @click="isOpen = true">Add</button>
                </div>
            </div>

            <div class="card w-96 bg-base-100 shadow-xl" x-show="isOpen">
                <div class="card-body">
                    <h2 class="card-title">Add iPad</h2>
                    <form action="{{ route('ipad.store') }}" method="POST">
                        @csrf
                        <input type="text" name="model" placeholder="Model"
                            class="mb-3 input input-bordered w-full" />
                        <input type="text" name="serial_number" placeholder="Serial Number"
                            class="mb-3 input input-bordered w-full" />
                        </p>
                        <div class="modal-action">
                            <!-- if there is a button in form, it will close the modal -->
                            <button type="button" class="btn" @click="isOpen = false">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
