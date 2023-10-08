<select>
    @foreach($versions as $version)
        <option value="{{ $version }}">{{ $version }}</option>
    @endforeach
</select>