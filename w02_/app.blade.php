<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ระบบจัดการรายวิชา</title>
    <!-- นำเข้า Bootstrap CSS เพื่อให้เว็บดูสวยงามแบบรวดเร็ว -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- แถบนำทาง (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('gis') }}">รายวิชา GIS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gis') }}">แนะนำรายวิชา (GIS)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bio') }}">ผู้จัดทำ (Bio)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assignment') }}">ภาระงาน (Assignment)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- พื้นที่แสดงเนื้อหาของแต่ละหน้า -->
    <div class="container mt-5 bg-white p-4 shadow-sm rounded">
        @yield('content')
    </div>

</body>
</html>