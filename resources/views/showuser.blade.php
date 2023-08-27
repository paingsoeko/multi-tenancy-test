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
    <table class="table mb-5">
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
    <hr>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
               @if(session('success'))
                    <div class="alert alert-success">
                      {{session('success')}}
                    </div>
               @endif
                <form class="row g-3" action="{{ route('submit-user-form') }}" method="POST">
                    @method('post')
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Name</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="email" id="form1Example2" class="form-control" />
                        <label class="form-label" for="form1Example2">Email</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS (optional, for certain features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


{{--$tenant4 = App\Models\Tenant::create(['id' => 'newuser']);--}}
{{--$tenant4->domains()->create(['domain' => 'newuser.localhost']);--}}
