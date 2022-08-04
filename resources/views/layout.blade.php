<html>
    <head>
        <title>Healthcare App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
       crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">Healthcare App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="productlist">Products</a>
      <a class="nav-item nav-link" href="doclist">Doctors</a>
      <a class="nav-item nav-link" href="clientlist">Clients</a>
      <a class="nav-item nav-link" href="addProduct">Add Product</a>
      <a class="nav-item nav-link" href="contact">Contact Us</a>
      <a class="nav-item nav-link" href="service">Services</a>
      <a class="nav-item nav-link" href="about">About Us</a>
      <a class="nav-item nav-link" href="login">Login</a>
      <a class="nav-item nav-link" href="signup">Register</a>
      
    </div>
  </div>
</nav>
        <div class="container">
            @yield('content')
        </div>
        <footer></footer>


</body>
</html>