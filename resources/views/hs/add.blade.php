<form action="{{ route('hs.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Ten hoc sinh: </label>
        <input type="text" name="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div>
        <label for="gioitinh">Gioi tinh: </label>
        <input type="text" name="gioitinh">
    </div>
    <div>
        <label for="quequan">Que quan: </label>
        <input type="text" name="quequan">
    </div>
    <button type="submit">Them hoc sinh</button>
</form>