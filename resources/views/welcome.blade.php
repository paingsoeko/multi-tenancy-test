<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card text-center">
        <table class="table mb-5">
            <thead>
            <tr>
                <th>Business Name</th>
                <th>Domain</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tenant as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td><a href="http://{{$t->id}}.localhost:8000/" target="_blank">{{$t->id}}.localhost</a></td>
                </tr>
            @endforeach
            </tbody>

        </table>
        <hr>
        <div class="card-header">
            Register your business
        </div>
        <div class="card-body d-flex justify-content-center">
            <form class="row g-3" action="{{ route('submit-business-form') }}" method="POST">
                @method('post')
                @csrf
                <div class="col-auto">
                    <label for="business_name" class="visually-hidden">Your Business Name</label>
                    <input type="text" name="business_name" class="form-control" id="business_name" placeholder="Your Business Name">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Register</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
           message:      @if(session('message'))
                <div class="text-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

