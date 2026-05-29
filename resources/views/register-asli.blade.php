<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registrasi</title>
  <!-- CSS -->
  <link rel="stylesheet" href="src/output.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet"/>
</head>

<body class=" font-[Poppins] min-h-screen flex items-center justify-center p-4">
    
  <!-- Container -->
  <div class="w-full max-w-6xl bg-white rounded-[30px] p-5 flex gap-5 shadow-lg">

    <!-- LEFT SIDE -->
    <div class="group w-1/2 hover:w-[55%] transition-all duration-500 min-h-[760px] relative rounded-[30px] overflow-hidden animate-left">

      <!-- Gradient -->
      <div class="absolute inset-0 bg-gradient-to-br from-[#CFC4FF] via-[#6D4CFF] to-[#FF6B2C]"></div>

      <!-- Blur Effect -->
      <div class="absolute top-[-100px] left-[-100px] w-[300px] h-[300px] bg-white/30 rounded-full blur-3xl"></div>

      <div class="absolute bottom-[-120px] right-[-120px] w-[350px] h-[350px] bg-orange-300/40 rounded-full blur-3xl"></div>

      <!-- Content -->
      <div class="relative h-full flex flex-col justify-between p-10 text-white">

        <!-- Logo -->
        <div class="text-6xl font-light">
            <img src="assets/Logo.png" alt="PaySen Logo" class="h-20 object-contain">
        </div>

        <!-- Text -->
        <div>
          <h1 class="text-6xl font-bold leading-tight mb-4">This is where <br> everything begin</h1>

          <p class="text-lg font-light leading-relaxed">Create an account to get started <br> and explore more,</p>
        </div>

      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="w-1/2 hover:w-[55%] transition-all duration-500 flex items-center justify-center px-16 animate-right">

      <div class="w-full max-w-lg">

        <!-- Heading -->
        <div class="text-center mb-10">
          <h2 class="text-5xl font-bold text-[#333] mb-3">Hiya! Welcome!</h2>

          <p class="text-gray-400 text-lg">Welcome to Vellum! Really glad you choose us!</p>
        </div>

        <!-- Form -->
        <form class="space-y-6 id=registerForm">

          <!-- Name -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Name</label>

            <input type="text"placeholder="Enter your full name"class="w-full h-[65px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Email -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Email</label>

            <input type="email"placeholder="Enter your email"class="w-full h-[65px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Password -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Password</label>

            <input type="password"placeholder="Enter your password"class="w-full h-[65px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Confirm Password -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Confirm Password</label>

            <input type="password"placeholder="Enter your password"class="w-full h-[65px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Button -->
          <button type="submit" class="w-full h-[60px] rounded-2xl bg-[#6D4CFF] text-white text-xl font-semibold hover:scale-[1.03] transition duration-300 shadow-lg animate-glow">
            Register
          </button>

        </form>

        <!-- Login -->
        <p class="text-center text-gray-400 mt-8">
            Have an account?
          <a href="#" class="text-[#6D4CFF] font-semibold">Login!</a>
        </p>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    const registerForm = document.getElementById("registerForm");
  
    registerForm.addEventListener("submit", function(e) {
      e.preventDefault();
  
      // simpan status login
      localStorage.setItem("isLogin", "true");
  
      // pindah halaman
      window.location.href = "./home.html";
    });
  </script>
</body>
</html>
