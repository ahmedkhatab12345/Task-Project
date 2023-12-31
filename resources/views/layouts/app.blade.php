<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #e5e5e5; 
    }

    .import-section, .export-section {
        margin-bottom: 20px;
        border: 1px solid #e5e5e5; 
        padding: 15px;
    }

    .data-section {
        margin-top: 20px;
    }

    footer {
        background-color: #333333;
        color: #ffffff;
        padding: 10px;
    }
</style>

</head>
<body>

<div class="container">
    <!-- Header Section -->
    @include('admin.include.header')
    @yield('content')
</div>
    <!-- Header Section -->
    @include('admin.include.footer')
</div>

</body>
</html>
