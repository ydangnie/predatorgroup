
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREDATORWATCH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-gray-300">
    <!-- Footer Section -->
    <footer class="gradient-overlay pt-16 pb-8 border-t border-gray-800 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5 bg-repeat" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iMiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==');"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Brand Column -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="watch-icon mr-3 text-amber-500">
                            <i class="fas fa-clock text-2xl"></i>
                        </div>
                        <h2 class="brand-font text-2xl font-bold text-white glow-text">PREDATOR<span class="text-amber-500">WATCH</span></h2>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Khám phá bộ sưu tập đồng hồ cao cấp với thiết kế độc đáo và bí ẩn. Mỗi chiếc đồng hồ là một tác phẩm nghệ thuật, kết hợp giữa công nghệ hiện đại và phong cách đầy cá tính.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full border-glow flex items-center justify-center hover:bg-amber-500 hover:border-amber-500 transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border-glow flex items-center justify-center hover:bg-amber-500 hover:border-amber-500 transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border-glow flex items-center justify-center hover:bg-amber-500 hover:border-amber-500 transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border-glow flex items-center justify-center hover:bg-amber-500 hover:border-amber-500 transition-all duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-6 text-lg uppercase tracking-wider hover-glow">Danh Mục</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300 hover-glow">Đồng Hồ Nam</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300 hover-glow">Đồng Hồ Nữ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300 hover-glow">Bộ Sưu Tập Giới Hạn</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300 hover-glow">Đồng Hồ Thông Minh</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300 hover-glow">Phụ Kiện</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-semibold mb-6 text-lg uppercase tracking-wider hover-glow">Liên Hệ</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-amber-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">123 Đường Thời Gian, Quận 1, TP.HCM</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-amber-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">+84 123 456 789</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-amber-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">info@predatorwatch.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-amber-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">Mở cửa: 9:00 - 21:00</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Newsletter Section -->
            <div class="border-glow rounded-lg p-6 mb-12 bg-gradient-to-r from-gray-900 to-black">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-white text-xl font-semibold mb-2 hover-glow">Đăng Ký Nhận Tin</h3>
                        <p class="text-gray-400">Nhận thông tin mới nhất về bộ sưu tập và ưu đãi đặc biệt</p>
                    </div>
                    <div class="flex w-full md:w-auto">
                        <input type="email" placeholder="Email của bạn" class="px-4 py-3 bg-gray-800 text-white rounded-l-lg focus:outline-none focus:ring-2 focus:ring-amber-500 w-full md:w-64">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-r-lg transition-colors duration-300 font-medium">
                            Đăng Ký
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-500 text-sm mb-4 md:mb-0">
                    &copy; 2023 PREDATORWATCH. Tất cả quyền được bảo lưu.
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-500 hover:text-amber-500 transition-colors duration-300">Chính Sách Bảo Mật</a>
                    <a href="#" class="text-gray-500 hover:text-amber-500 transition-colors duration-300">Điều Khoản Sử Dụng</a>
                    <a href="#" class="text-gray-500 hover:text-amber-500 transition-colors duration-300">Chính Sách Đổi Trả</a>
                </div>
            </div>
        </div>
        
        <!-- Decorative Element -->
        <div class="absolute bottom-0 right-0 w-32 h-32 opacity-10">
            <div class="absolute inset-0 flex items-center justify-center">
                <i class="fas fa-cog text-6xl animate-spin" style="animation-duration: 20s;"></i>
            </div>
        </div>
    </footer>

    <script>
       
    </script>
</body>
</html>
```