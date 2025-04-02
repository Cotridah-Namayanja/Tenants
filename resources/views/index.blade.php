<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <div class="col">
                <a href="{{ route('newtenant') }}" class="btn btn-primary">New Tenant</a>

            </div>
            <h2 class="text-center mb-4">Tenant List</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Home Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tenants as $tenant)
                    <tr>
                        <td>{{ $tenant->id }}</td>
                        <td>{{ $tenant->name }}</td>
                        <td>{{ $tenant->phonenumber }}</td>
                        <td>{{ $tenant->home_address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>
