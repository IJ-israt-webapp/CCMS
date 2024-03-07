<form method="POST" action="{{ route('child.store') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="id_card">ID Card:</label>
        <input type="number" id="id_card" name="id_card" value="{{ old('id_card') }}" required>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}" required>
    </div>
    <div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required>{{ old('address') }}</textarea>
    </div>
    <div>
        <label for="parent_id">Parent ID:</label>
        <input type="number" id="parent_id" name="parent_id" value="{{ old('parent_id') }}" required>
    </div>
    <div>
        <label for="attendance_id">Attendance ID:</label>
        <input type="number" id="attendance_id" name="attendance_id" value="{{ old('attendance_id') }}" required>
    </div>
    <div>
        <label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group" value="{{ old('blood_group') }}" required>
    </div>
    <button type="submit">Submit</button>
</form>