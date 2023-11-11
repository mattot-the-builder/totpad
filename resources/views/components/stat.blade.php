<div class="stats stats-vertical lg:stats-horizontal shadow mt-4 w-full max-w-4xl">

    <div class="stat">
        <div class="stat-title">Checked In</div>
        <div class="stat-value">
            {{ $current_check_in }}
        </div>
        <div class="stat-actions justify-end">
            <x:generate-qr :url="route('student.checkin')" />
        </div>
    </div>

    <div class="stat">
        <div class="stat-title">Checked Out</div>
        <div class="stat-value">
            {{ $current_check_out }}
        </div>
        <div class="stat-actions justify-end">
            <x:generate-qr :url="route('student.checkout')" />
        </div>
    </div>

</div>
