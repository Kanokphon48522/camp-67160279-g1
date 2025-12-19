<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>HTML - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans+Thai:wght@100..800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Playpen Sans Thai", cursive;
            background-color: #f8f9fa; /* เพิ่มพื้นหลังสีเทาอ่อนให้ดูสบายตา */
        }
        .form-label {
            display: inline-block;
            width: 120px;
        }
        .form-control, select, textarea {
            display: inline-block;
            width: 250px;
            vertical-align: middle;
        }
        .radio-group label {
            margin-right: 10px;
        }
        .checkbox-label {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            width: 280px;
        }
    </style>
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="card p-4 shadow-sm">
            <h1>File Default</h1>
            <hr>
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
