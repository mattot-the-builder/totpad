<x-app-layout>

    <div class="space-y-6">
        <div class="mx-auto card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        <div class="mx-auto card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        <div class="mx-auto card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
