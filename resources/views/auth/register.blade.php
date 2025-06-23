<!DOCTYPE html>
     <html lang="id">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Furgetech - Daftar</title>
         <script src="https://cdn.tailwindcss.com"></script>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
     </head>
     <body class="font-poppins bg-gray-100 min-h-screen flex items-center justify-center">
         <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
             <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Daftar ke Furgetech</h2>
             @if ($errors->any())
                 <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center">
                     {{ $errors->first() }}
                 </div>
             @endif
             @if (session('success'))
                 <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
                     {{ session('success') }}
                 </div>
             @endif
             <form action="{{ route('register') }}" method="POST" class="space-y-4">
                 @csrf
                 <div>
                     <label for="name" class="block text-gray-700 font-semibold">Nama</label>
                     <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                 </div>
                 <div>
                     <label for="email" class="block text-gray-700 font-semibold">Email</label>
                     <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                 </div>
                 <div>
                     <label for="password" class="block text-gray-700 font-semibold">Password</label>
                     <input type="password" id="password" name="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                 </div>
                 <div>
                     <label for="password_confirmation" class="block text-gray-700 font-semibold">Konfirmasi Password</label>
                     <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                 </div>
                 <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-3 rounded-lg hover:bg-orange-600 transition">Daftar</button>
             </form>
             <p class="text-center mt-4 text-gray-600">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk di sini</a></p>
         </div>
     </body>
     </html>