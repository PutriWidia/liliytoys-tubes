<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login-karyawan.css') }}">
  <link rel="stylesheet" href="https://liliytoys-tubes-production-123e.up.railway.app/css/login-karyawan.css">

</head>
<body>

  <div class="background">
    <div class="login-container">
      <h2>Login</h2>
      <h3>Karyawan</h3>

      <form action="{{ route('karyawan.login.post') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" required>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

</body>
</html>
