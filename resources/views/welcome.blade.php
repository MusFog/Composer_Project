<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<h1>Edit User</h1>

@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf

    <label for="first_name">Ім'я:</label>
    <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}" required>

    <label for="last_name">Прізвище:</label>
    <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <h3>Address:</h3>
    <label for="addressline1">Address Line 1:</label>
    <input type="text" id="addressline1" name="addressline1" value="{{ $user->addresses->first()->addressline1 }}" required>
    <label for="addressline2">Address Line 1:</label>
    <input type="text" id="addressline2" name="addressline2" value="{{ $user->addresses->first()->addressline2 }}" required>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" value="{{ $user->addresses->first()->city }}" required>
    <label for="province">Province:</label>
    <input type="text" id="province" name="province" value="{{ $user->addresses->first()->province }}" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ $user->addresses->first()->phone }}" required>
    <label for="postal">Postal:</label>
    <input type="text" id="postal" name="postal" value="{{ $user->addresses->first()->postal }}" required>
    <button type="submit">Update</button>
</form>
</body>
</html>
