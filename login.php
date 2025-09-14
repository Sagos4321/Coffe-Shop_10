<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <!-- Bagian kiri (Login form) -->
    <div class="left">
      <div class="logo">Logo</div>
      <h2>Log In</h2>
      <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>

      <form>
        <label style="font-size:12px">Email*</label>
        <input type="email" required placeholder="Masukkan email">

        <label style="font-size:12px">
          Password* <a href="#" class="forgot" style="font-size:12px">Forgot your password?</a>
        </label>
        <input type="password" required placeholder="Masukkan password">
        
        

        <button type="submit" class="btn">Log in</button>
        <button type="button" class="btn-google">
           <img src="https://www.svgrepo.com/show/355037/google.svg" 
       alt="Google Logo" 
       style="width:18px; height:18px; vertical-align:middle; margin-right:8px;">
          Log in with Google
        </button>
      </form>

      <p class="bottom-text">Don't have an account? <a href="signup.php">Sign up</a></p>
      <footer>© 2025 NamaKelompok</footer>
    </div>

    <!-- Bagian kanan (Gambar) -->
    <div class="right">
      <img src="" alt="Login Image">
    </div>
  </div>
</body>
</html>
