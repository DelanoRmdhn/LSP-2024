<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card login-container shadow" style="border: 1px solid #babed6">
          <div class="card-header">
            <h3 class="text-center tittle">Login Sebagai Admin</h3>
          </div>
          <div class="card-body">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif
              <div class="form-group mb-4">
                <label for="username" class="mb-3">Username :</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="ilham123">
              </div>
              <div class="form-group mb-4">
                <label for="password"  class="mb-3">Password :</label>
                <input type="password" name="password" class="form-control" class="mb-5" id="password" placeholder="Enter password">
              </div>
              <button type="submit" class="button-solid btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
