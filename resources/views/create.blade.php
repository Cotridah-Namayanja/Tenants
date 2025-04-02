<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tenant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Add New Tenant</h2>
            <form action="{{ route('store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" name="phonenumber" required>
                </div>
                <div class="mb-3">
                    <label for="home_address" class="form-label">Home Address</label>
                    <input type="text" class="form-control" id="home_address" name="home_address" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Tenant</button>
            </form>
        </div>
    </div>
</body>
</html>
