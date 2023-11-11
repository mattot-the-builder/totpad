<select class="select select-bordered w-full max-w-xs" name="model">
    <option disabled selected>Select iPad model</option>
    @foreach ($ipads as $ipad)
        <option>{{ $ipad->Generation }} {{ var_dump($ipad->ANumber) }}</option>
    @endforeach
</select>
