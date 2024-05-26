<style>
  #header {
  border-bottom: solid 1px black;
  background-color: white;
  padding: 40px;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
}

.nav-link {
  color: black;
}

.nav-link:hover {
  color: #83472da4;
}

form .btn {
  margin: 0 !important; 
}
</style>

<header id="header" class="section-p1 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <div class="col-md-3 mb-2 mb-md-0 ">
    <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
      <img width="100px" src="../img/logo/logo-no-background.png" alt="logo" />
    </a>
  </div>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="../client/home.php" class="nav-link px-2">Home</a></li>
    <li>
      <a href="../client/contact.php" class="nav-link px-2">Contact Us</a>
    </li>
    <li><a href="../client/about.php" class="nav-link px-2">About</a></li>
  </ul>

  <div class="col-md-3 text-end">
    <a href="../client/register.php">
      <button type="button" class="btn btn-outline-dark me-2">
        Register Now
      </button>
    </a>
  </div>
</header>