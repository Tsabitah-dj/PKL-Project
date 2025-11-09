<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow p-4" style="width: 400px; border-radius: 15px;">

    <img src="{{ asset('assets/images/Garut.jpg') }}" 
         alt="User Logo" 
         class="mx-auto mb-3 d-block"
         style="width: 100px; height: auto; object-fit: cover;">
    <h3 class="text-center mb-4">Login</h3>
    <p class="text-center mt-3">
      Belum punya akun? <a href="{{ route('register') }}">Register</a>
    </p>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach 
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required autofocus>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
          <input type="password" class="form-control" name="password" id="password" required>
          <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
            <i class="bi bi-eye" id="toggleIcon"></i>
          </button>
        </div>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label" for="remember">
          Ingat saya
        </label>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>

       <div class="text-center mt-3">
    <small class="text-muted">
      &copy; {{ date('Y') }} Kabupaten Garut. Created by PPLG,SMKN 1 GRT (ART)
    </small>
  </div>

    </form>
  </div>
</div>



<script>
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.remove("bi-eye");
      toggleIcon.classList.add("bi-eye-slash");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.remove("bi-eye-slash");
      toggleIcon.classList.add("bi-eye");
    }
  }
</script>

</body>
</html>
