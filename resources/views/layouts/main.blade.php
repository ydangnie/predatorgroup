<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Bootstrap Demo</title>
  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  @include('layouts.navbar.header')
  
  <header class="bg-primary text-white text-center py-5">
    @yield('top')
  </header>

  <!-- Content Grid -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Tiêu đề 1</h5>
              <p class="card-text">Nội dung mô tả cho phần này.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Tiêu đề 2</h5>
              <p class="card-text">Nội dung mô tả cho phần này.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Tiêu đề 3</h5>
              <p class="card-text">Nội dung mô tả cho phần này.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('layouts.navbar.footer')
 

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>