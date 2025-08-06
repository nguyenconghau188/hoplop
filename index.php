<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư Mời Hội Ngộ Lớp 12A1 (2008-2011)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- Chosen Palette: Warm Nostalgia -->
    <!-- Application Structure Plan: A single-page, scrolling microsite designed to guide the user through the reunion invitation. It starts with an engaging hero section featuring a countdown to build anticipation. This is followed by the heartfelt invitation letter, a clear visual schedule of events, a nostalgic photo gallery to evoke memories, and finally, a clear call-to-action with an embedded Google Form for RSVP. -->
    <!-- Visualization & Content Choices: 
        - Countdown Timer (Hero Section): Goal: Build excitement. Method: Vanilla JS. Justification: Creates a sense of urgency and anticipation for the event.
        - Event Schedule (Timeline): Goal: Inform clearly. Method: HTML/Tailwind with icons. Justification: A visual timeline is more engaging and easier to scan than a simple bulleted list.
        - Photo Gallery (Memories): Goal: Evoke nostalgia. Method: HTML/Tailwind grid with a JS-powered modal. Justification: Interactivity encourages exploration and strengthens the emotional connection to the event.
        - RSVP Form (Confirmation): Goal: Gather responses. Method: Embedded Google Form. Justification: Leverages a reliable, familiar tool for data collection, simplifying the process for both organizers and attendees.
    -->
    <!-- CONFIRMATION: NO SVG graphics used. NO Mermaid JS used. -->
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://placehold.co/1920x1080/a3a3a3/f5f5f5?text=S%C3%A2n+tr%C6%B0%E1%BB%9Dng+th%C3%A2n+y%C3%AAu');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-stone-100 text-stone-800">

    <!-- Hero Section -->
    <header class="hero-bg text-white shadow-lg">
        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Hội Ngộ 12A1</h1>
            <p class="text-lg md:text-2xl mb-2">Niên khóa 2008 – 2011</p>
            <p class="text-base md:text-lg mb-8">Kỷ niệm 70 năm thành lập trường THPT Trần Cao Vân</p>
            
            <div id="countdown" class="flex space-x-4 text-center mb-8">
                <div>
                    <span id="days" class="text-4xl font-bold">00</span>
                    <p class="text-sm">Ngày</p>
                </div>
                <div>
                    <span id="hours" class="text-4xl font-bold">00</span>
                    <p class="text-sm">Giờ</p>
                </div>
                <div>
                    <span id="minutes" class="text-4xl font-bold">00</span>
                    <p class="text-sm">Phút</p>
                </div>
                <div>
                    <span id="seconds" class="text-4xl font-bold">00</span>
                    <p class="text-sm">Giây</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-6 md:p-12">
        <!-- Invitation Letter Section -->
        <section id="letter" class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-lg shadow-md -mt-16 relative z-10">
            <h2 class="text-3xl font-bold text-center text-amber-700 mb-6">Thư Ngỏ Thân Gửi</h2>
            <p class="text-lg text-center text-stone-600 mb-8">Gửi các bạn 12A1 – Niên khóa 2008–2011</p>
            <div class="text-stone-700 space-y-4 leading-relaxed text-justify">
                <p>Các bạn thân mến,</p>
                <p>Thấm thoắt đã gần 15 năm kể từ ngày chúng ta rời mái trường Trần Cao Vân thân yêu – nơi lưu giữ những kỷ niệm trong sáng, hồn nhiên của một thời áo trắng. Dù giờ đây mỗi người một ngã rẽ, có bạn đã ổn định gia đình, có bạn đang theo đuổi sự nghiệp, thì ký ức về những năm tháng học trò vẫn luôn là sợi dây gắn kết chúng ta.</p>
                <p>Nhân dịp kỷ niệm 70 năm thành lập Trường THPT Trần Cao Vân, chúng mình rất mong 12A1 sẽ có dịp hội ngộ đông đủ – để cùng về thăm lại trường xưa, tri ân thầy cô, ôn chuyện cũ và viết tiếp những kỷ niệm đẹp của tình bạn, tình thầy trò.</p>
                <p>Mỗi bạn, dù ở đâu hay đang bận rộn thế nào, xin hãy dành chút thời gian trở về – để kết nối, sẻ chia và giữ trọn những gì đẹp nhất của tuổi thanh xuân.</p>
                <p class="text-center font-semibold mt-6">Hẹn gặp lại thật đông đủ nhé!</p>
                <p class="text-right font-bold mt-4">Đạt – Đại diện Ban liên lạc lớp 12A1</p>
            </div>
        </section>

        <!-- Schedule Section -->
        <section id="schedule" class="py-16 md:py-24">
            <h2 class="text-3xl font-bold text-center text-amber-700 mb-12">Chương Trình Dự Kiến</h2>
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-amber-500">🎉</div>
                    <div>
                        <h3 class="font-bold text-lg">Lễ Kỷ Niệm Trường</h3>
                        <p class="text-stone-600">Cùng nhau tham dự Lễ kỷ niệm 70 năm thành lập trường.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-amber-500">💰</div>
                    <div>
                        <h3 class="font-bold text-lg">Góp Quỹ Tổ Chức</h3>
                        <p class="text-stone-600">Đóng góp vào quỹ chung để buổi họp mặt thêm trọn vẹn.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-amber-500">🍽️</div>
                    <div>
                        <h3 class="font-bold text-lg">Gặp Mặt Lớp 12A1</h3>
                        <p class="text-stone-600">Check-in, chia sẻ và cùng nhau ăn tối thân mật.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-amber-500">🏫</div>
                    <div>
                        <h3 class="font-bold text-lg">Thăm Trường & Thầy Cô</h3>
                        <p class="text-stone-600">Trở về lớp học cũ và gửi lời tri ân đến các thầy cô.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="py-16 md:py-24 bg-stone-200 -mx-6 px-6 md:-mx-12 md:px-12">
            <h2 class="text-3xl font-bold text-center text-amber-700 mb-12">Góc Kỷ Niệm</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="gallery-item"><img src="https://placehold.co/400x400/d4d4d8/3f3f46?text=K%E1%BB%B7+ni%E1%BB%87m+1" alt="Kỷ niệm 1" class="rounded-lg shadow-md cursor-pointer w-full h-full object-cover"></div>
                <div class="gallery-item"><img src="https://placehold.co/400x400/d4d4d8/3f3f46?text=K%E1%BB%B7+ni%E1%BB%87m+2" alt="Kỷ niệm 2" class="rounded-lg shadow-md cursor-pointer w-full h-full object-cover"></div>
                <div class="gallery-item"><img src="https://placehold.co/400x400/d4d4d8/3f3f46?text=K%E1%BB%B7+ni%E1%BB%87m+3" alt="Kỷ niệm 3" class="rounded-lg shadow-md cursor-pointer w-full h-full object-cover"></div>
                <div class="gallery-item"><img src="https://placehold.co/400x400/d4d4d8/3f3f46?text=K%E1%BB%B7+ni%E1%BB%87m+4" alt="Kỷ niệm 4" class="rounded-lg shadow-md cursor-pointer w-full h-full object-cover"></div>
            </div>
        </section>

        <!-- RSVP Section with Google Form -->
        <section id="rsvp" class="py-16 md:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-amber-700 mb-4">Bạn Sẽ Tham Gia Chứ?</h2>
                <p class="text-stone-600 mb-8">Vui lòng điền thông tin vào biểu mẫu dưới đây để xác nhận tham gia trước ngày 01/11/2025 nhé. Sự có mặt của bạn là niềm vui lớn nhất!</p>
                
                <!-- Google Form Embed Start -->
                <div class="bg-white p-2 sm:p-4 rounded-lg shadow-lg overflow-hidden">
                     <!-- HƯỚNG DẪN: Thay thế `src` dưới đây bằng link nhúng Google Form của bạn -->
                     <!-- CÁCH LẤY LINK: Mở Form -> Nút "Gửi" -> Chọn tab < > (Nhúng HTML) -> Sao chép mã HTML và thay thế toàn bộ thẻ <iframe> bên dưới -->
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf8LLNmNzVVfZXZIpsxG1YFFgnj4IWkrj4tG6bKI-Nrp8c44Q/viewform?usp=dialog" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
                </div>
                <!-- Google Form Embed End -->
            </div>
        </section>
    </main>

    <footer class="bg-stone-800 text-stone-300 py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 | Thiết kế với ❤️ dành cho tập thể 12A1 (2008-2011)</p>
            <p>Mọi thắc mắc vui lòng liên hệ: Nhật Nam (Đại diện BLL)</p>
        </div>
    </footer>

    <!-- Image Modal -->
    <div id="image-modal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4">
        <div class="relative bg-white p-2 rounded-lg shadow-lg max-w-3xl max-h-full">
            <button id="close-modal" class="absolute -top-4 -right-4 text-white bg-amber-600 rounded-full w-8 h-8 flex items-center justify-center text-2xl">&times;</button>
            <img id="modal-image" src="" alt="Kỷ niệm phóng to" class="rounded-md w-full h-auto object-contain" style="max-height: 85vh;">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Countdown Timer
            const countdownDate = new Date("Aug 30, 2025 15:00:00").getTime();

            const countdownFunction = setInterval(function() {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML = "<div class='text-2xl font-bold'>ĐÃ ĐẾN NGÀY HỘI NGỘ!</div>";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerText = days.toString().padStart(2, '0');
                document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
                document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
                document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
            }, 1000);

            // Smooth scrolling for RSVP button
            document.querySelector('a[href="#rsvp"]').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#rsvp').scrollIntoView({ behavior: 'smooth' });
            });

            // Image Gallery Modal
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');
            const closeModalBtn = document.getElementById('close-modal');

            document.querySelectorAll('.gallery-item img').forEach(item => {
                item.addEventListener('click', event => {
                    modalImage.src = event.target.src;
                    modal.classList.remove('hidden');
                });
            });

            const closeModal = () => {
                modal.classList.add('hidden');
            };

            closeModalBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // No custom RSVP form script needed anymore
        });
    </script>
</body>
</html>
