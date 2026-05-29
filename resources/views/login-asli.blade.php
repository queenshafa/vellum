<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <!-- CSS -->
  <link rel="stylesheet" href="src/output.css">

  <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet"/>
</head>

<body class="bg-[#F5F5F5] font-[Poppins] min-h-screen flex items-center justify-center p-4">

  <!-- Container -->
  <div class="w-full max-w-6xl bg-white rounded-[30px] p-5 flex gap-5 shadow-lg">

    <!-- LEFT SIDE -->
    <div class="group w-1/2 hover:w-[55%] transition-all duration-500 min-h-[760px] relative rounded-[30px] overflow-hidden animate-left">

      <!-- Gradient -->
      <div class="absolute inset-0 bg-gradient-to-br from-[#D7D0FF] via-[#6D4CFF] to-[#FF6B2C]"></div>

      <!-- Blur -->
      <div class="absolute top-[-100px] left-[-100px] w-[300px] h-[300px] bg-white/40 rounded-full blur-3xl"></div>

      <div class="absolute bottom-[-120px] right-[-120px] w-[350px] h-[350px] bg-orange-300/40 rounded-full blur-3xl"></div>

      <!-- Content -->
      <div class="relative h-full flex flex-col justify-between p-10 text-white">

        <!-- Logo -->
        <div class="text-7xl font-light">
            <img src="assets/Logo.png" alt="PaySen Logo" class="h-20 object-contain">
        </div>

        <!-- Text -->
        <div>
          <h1 class="text-5xl font-bold leading-tight mb-4">Welcome back!</h1>

          <p class="text-lg font-light leading-relaxed">Create an account to get started <br> and explore more,</p>
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="w-1/2 hover:w-[55%] transition-all duration-500 flex items-center justify-center px-16 animate-right">

      <div class="w-full max-w-md">

        <!-- Heading -->
        <div class="mb-10">
          <h2 class="text-5xl font-bold text-[#333] leading-tight mb-3">Glad to see you again!</h2>

          <p class="text-gray-400 text-lg">Welcome to Vellum! Really glad you choose us!</p>
        </div>

        <!-- Form -->
        <form class="space-y-5 id=loginForm">

          <!-- Email -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Email</label>

            <input type="email"placeholder="Enter your email"class="w-full h-[60px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Password -->
          <div>
            <label class="block mb-2 text-lg font-semibold text-[#444]">Password</label>

            <input type="password"placeholder="Enter your email"class="w-full h-[60px] px-5 rounded-2xl border-2 border-gray-200 outline-none focus:border-[#6D4CFF] transition">
          </div>

          <!-- Forgot Password -->
          <div class="flex justify-end">
            <a href="#" class="text-sm text-gray-400 hover:text-[#6D4CFF] transition">Forgot Password?</a>
          </div>

          <!-- Button -->
          <button class="w-full h-[60px] rounded-2xl bg-[#6D4CFF] text-white text-xl font-semibold hover:scale-[1.03] transition duration-300 shadow-lg animate-glow">
            Login
          </button>

        </form>

        <!-- Signup -->
        <p class="text-center text-sm text-gray-400 mt-5">
          Don't have an account?
          <a href="#" class="text-[#6D4CFF] font-medium">Sign Up!</a>
        </p>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    const loginForm = document.getElementById("loginForm");
  
    loginForm.addEventListener("submit", function(e) {
      e.preventDefault();
  
      localStorage.setItem("isLogin", "true");
  
      window.location.href = "./home.html";
    });
  </script> 
</body>
</html>
