<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant | {{$tenant->id}}</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">User Data</h1>
    <h2 class="mb-4">This is your multi-tenant application. The id of the current tenant is {{$tenant->id}}</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS (optional, for certain features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


{{--$tenant4 = App\Models\Tenant::create(['id' => 'newuser']);--}}
{{--$tenant4->domains()->create(['domain' => 'newuser.localhost']);--}}
