<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Poliklinik Sehat
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
  </style>
 </head>
 <body class="bg-blue-50">
  <header class="bg-white shadow-md">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="text-2xl font-bold text-blue-600">
     Poliklinik Sehat
    </div>
    <nav class="hidden md:flex space-x-6">
     <a class="text-gray-600 hover:text-blue-600" href="#home">
      Home
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="#about">
      About
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="#services">
      Services
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="#doctors">
      Doctors
     </a>
     <a class="text-gray-600 hover:text-blue-600" href="#contact">
      Contact
     </a>
    </nav>
    <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md mt-2">
        login
    </a>
    </a>
    <div class="md:hidden">
     <button class="text-gray-600 focus:outline-none" id="menu-btn">
      <i class="fas fa-bars text-2xl">
      </i>
     </button>
    </div>
   </div>
   <nav class="hidden md:hidden" id="mobile-menu">
    <a class="block text-gray-600 hover:text-blue-600 px-4 py-2" href="#home">
     Home
    </a>
    <a class="block text-gray-600 hover:text-blue-600 px-4 py-2" href="#about">
     About
    </a>
    <a class="block text-gray-600 hover:text-blue-600 px-4 py-2" href="#services">
     Services
    </a>
    <a class="block text-gray-600 hover:text-blue-600 px-4 py-2" href="#doctors">
     Doctors
    </a>
    <a class="block text-gray-600 hover:text-blue-600 px-4 py-2" href="#contact">
     Contact
    </a>
   </nav>
  </header>
  <main class="container mx-auto mt-8 px-6">
   <section class="bg-blue-100 rounded-lg p-8 mb-8 relative overflow-hidden" id="home">
    <div class="absolute inset-0 bg-blue-600 opacity-20">
    </div>
    <div class="relative z-10 flex flex-col lg:flex-row items-center">
     <div class="lg:w-1/2">
      <h1 class="text-4xl font-bold text-gray-800 mb-4">
       Kesehatan Anda, Prioritas Kami
      </h1>
      <p class="text-gray-600 mb-6">
       Kami selalu siap melindungi dan merawat kesehatan Anda dan keluarga Anda. Kesehatan Anda adalah prioritas kami.
      </p>
      <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md mr-4">
       register
      </a>
      <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md">
       Pelajari Lebih Lanjut
      </button>
     </div>
     <div class="lg:w-1/2 mt-8 lg:mt-0">
      <img alt="Doctors" class="w-full rounded-lg shadow-lg" height="400" src="
      https://lh3.googleusercontent.com/p/AF1QipPf6GPUApW_ZSpHPnIEO8nc76Z-HmSFtusvK5lZ=s680-w680-h510" width="600"/>
     </div>
    </div>
   </section>
   <section class="bg-white shadow-md rounded-lg p-6 mb-8" id="about">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
     Tentang Kami
    </h2>
    <p class="text-gray-600 mb-4">
     Poliklinik Sehat adalah pusat kesehatan yang berkomitmen untuk memberikan pelayanan kesehatan terbaik bagi Anda dan keluarga. Kami memiliki dokter-dokter spesialis yang berpengalaman dan fasilitas yang lengkap untuk memastikan kesehatan Anda terjaga dengan baik.
    </p>
    <p class="text-gray-600 mb-4">
     Kami menyediakan berbagai layanan kesehatan mulai dari konsultasi umum, pemeriksaan kesehatan rutin, hingga perawatan spesialis. Dengan tim medis yang profesional dan berpengalaman, kami siap memberikan pelayanan yang ramah, cepat, dan tepat.
    </p>
    <p class="text-gray-600">
     Visi kami adalah menjadi pusat kesehatan terdepan yang memberikan pelayanan kesehatan berkualitas tinggi dengan mengutamakan kepuasan dan kenyamanan pasien. Misi kami adalah memberikan pelayanan kesehatan yang komprehensif dan terintegrasi dengan mengedepankan profesionalisme, inovasi, dan empati.
    </p>
   </section>
   <section class="bg-blue-100 shadow-md rounded-lg p-6 mb-8" id="services">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
     Layanan Poliklinik Kami
    </h2>
    <div class="flex flex-wrap space-y-4 md:space-y-0 md:space-x-4">
     <div class="flex items-center bg-white p-4 rounded-lg w-full md:w-auto">
      <div class="bg-blue-600 text-white p-4 rounded-full">
       <i class="fas fa-heart text-2xl">
       </i>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-800">
        Dokter Jantung
       </h3>
      </div>
     </div>
     <div class="flex items-center bg-white p-4 rounded-lg w-full md:w-auto">
      <div class="bg-blue-600 text-white p-4 rounded-full">
       <i class="fas fa-tooth text-2xl">
       </i>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-800">
        Dokter Gigi
       </h3>
      </div>
     </div>
     <div class="flex items-center bg-white p-4 rounded-lg w-full md:w-auto">
      <div class="bg-blue-600 text-white p-4 rounded-full">
       <i class="fas fa-brain text-2xl">
       </i>
      </div>
      <div class="ml-4">
       <h3 class="text-lg font-semibold text-gray-800">
        Dokter Saraf
       </h3>
      </div>
     </div>
    </div>
   </section>
   <section class="bg-white shadow-md rounded-lg p-6 mb-8" id="doctors">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
     Dokter Kami
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 1" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-cgJ2KxSzf84wosYoiK6YjFCb.png?st=2025-04-15T17%3A57%3A47Z&amp;se=2025-04-15T19%3A57%3A47Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T05%3A26%3A17Z&amp;ske=2025-04-16T05%3A26%3A17Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=ygdpNkwV6n0Q1mRMltzC%2BxNeYv7mrd6RaY%2B%2BzgeEXYE%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Andi Wijaya
      </h3>
      <p class="text-gray-600">
       Spesialis Jantung
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 2" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-dKtD6YJwavE1MEISaDDY2MKj.png?st=2025-04-15T17%3A57%3A43Z&amp;se=2025-04-15T19%3A57%3A43Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T04%3A45%3A20Z&amp;ske=2025-04-16T04%3A45%3A20Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=%2B584k74EzY2%2BwLQ1oU77I0VAv0Un9gibs0NVZD58fhQ%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Budi Santoso
      </h3>
      <p class="text-gray-600">
       Spesialis Gigi
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 3" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-26P33sB6gnF4u86OhuY3eXEK.png?st=2025-04-15T17%3A57%3A42Z&amp;se=2025-04-15T19%3A57%3A42Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T05%3A36%3A01Z&amp;ske=2025-04-16T05%3A36%3A01Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=XtGgRASbFDLEzoSSrfhffuBod9BCGTaYljQ9/RrmZQg%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Clara Dewi
      </h3>
      <p class="text-gray-600">
       Spesialis Saraf
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 4" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-J6v9R5Ic0wntMfOpEruveSAz.png?st=2025-04-15T17%3A57%3A40Z&amp;se=2025-04-15T19%3A57%3A40Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T04%3A51%3A12Z&amp;ske=2025-04-16T04%3A51%3A12Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=v4VOhyiN2C0F/RNg1aE7GfFZL65l7nDU9tWZRTFpYAw%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Dedi Pratama
      </h3>
      <p class="text-gray-600">
       Spesialis Anak
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 5" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-3Thpa8Dgpa1P687evKTEl3sA.png?st=2025-04-15T17%3A57%3A41Z&amp;se=2025-04-15T19%3A57%3A41Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T04%3A57%3A35Z&amp;ske=2025-04-16T04%3A57%3A35Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=DDQLtMypTtVJyzKULRDwCgcfeYBurKcBoGqIBcdya64%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Evi Lestari
      </h3>
      <p class="text-gray-600">
       Spesialis Kulit
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg text-center">
      <img alt="Doctor 6" class="rounded-full mx-auto mb-4" height="150" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-tZcx7KoO2aHBzjQ3LdtNuKC1.png?st=2025-04-15T17%3A57%3A42Z&amp;se=2025-04-15T19%3A57%3A42Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T06%3A31%3A20Z&amp;ske=2025-04-16T06%3A31%3A20Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=F87bpBEZ1tYgwIzCvpztHSt9Ob/8va%2B6L3PWHH9b4WE%3D" width="150"/>
      <h3 class="text-lg font-semibold text-gray-800">
       Dr. Fajar Nugroho
      </h3>
      <p class="text-gray-600">
       Spesialis Mata
      </p>
     </div>
    </div>
   </section>
   <section class="bg-white shadow-md rounded-lg p-6 mb-8" id="contact">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
     Kontak Kami
    </h2>
    <p class="text-gray-600">
     Jika Anda memiliki pertanyaan atau ingin membuat janji, jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini:
    </p>
    <ul class="list-disc list-inside text-gray-600 mt-4">
     <li>
      Telepon: (021) 123-4567
     </li>
     <li>
      Email: info@polikliniksehat.com
     </li>
     <li>
      Alamat: Jl. Sehat No. 123, Jakarta
     </li>
    </ul>
   </section>
   <section class="bg-blue-100 shadow-md rounded-lg p-6">
    <div class="flex items-center">
     <img alt="Doctor" class="rounded-full w-16 h-16 mr-4" height="100" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-5fObnilOQbYlHyU7ZAj6jRg4.png?st=2025-04-15T17%3A57%3A49Z&amp;se=2025-04-15T19%3A57%3A49Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=cc612491-d948-4d2e-9821-2683df3719f5&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2025-04-15T05%3A32%3A50Z&amp;ske=2025-04-16T05%3A32%3A50Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=LnHOMMa6i/MrU32zAF4fsvVQ9Qe%2BdPNqUM796Z8GbWI%3D" width="100"/>
     <div>
      <h2 class="text-2xl font-bold text-gray-800">
       Masa Depan Kesehatan Berkualitas Anda
      </h2>
      <p class="text-gray-600">
       Poliklinik Sehat selalu memberikan layanan terbaik untuk kesehatan Anda. Kesehatan Anda adalah prioritas kami dan kami selalu siap membantu Anda.
      </p>
     </div>
    </div>
   </section>
  </main>
  <footer class="bg-white shadow-md mt-8">
   <div class="container mx-auto py-6 px-6">
    <div class="flex justify-between items-center">
     <div class="text-gray-600">
      © 2023 Poliklinik Sehat. All rights reserved.
     </div>
     <div class="space-x-4">
      <a class="text-gray-600 hover:text-blue-600" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a class="text-gray-600 hover:text-blue-600" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-gray-600 hover:text-blue-600" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-gray-600 hover:text-blue-600" href="#">
       <i class="fab fa-linkedin-in">
       </i>
      </a>
     </div>
    </div>
   </div>
  </footer>
  <script>
   const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
  </script>
 </body>
</html>
