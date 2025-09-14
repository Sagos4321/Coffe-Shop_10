<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="signup-container">
    <div class="logo">Logo</div>
    <div class="signup-box">
      <h2 style="text-align:center;">
        Sign Up
      </h2>
      <p>
        Lorem ipsum dolor sit amet adipiscing elit.
      </p>

      <form>
        <label for="*Name" style="text-align:left; display:block; font-size:12px;">
          *Name
        </label>
        <input type="text" required>

        <label for="*Email" style="text-align:left; display:block; font-size:12px;">
          *Email
        </label>
        <input type="email" required>

        <label for="*Password" style="text-align:left; display:block; font-size:12px;">
          *Password
        </label>
        <input type="password" required>

        <button type="submit" class="btn">
          Sign up
        </button>
        <button type="button" class="btn-google">
           <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" style="width:18px; height:18px; vertical-align:middle; margin-right:8px;">
          Sign up with Google
        </button>
      </form>

      <p class="bottom-text">
        Already have an account?
        <a href="login.php">
          Log In
        </a>
      </p>
      <footer>© 2025 NamaKelompok</footer>
    </div>
  </div>
</body>
</html>
