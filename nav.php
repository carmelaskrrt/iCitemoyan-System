<nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">iCitemoyan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item active">
        <a class="nav-link" href="icitemoyan.html">Citation Machine</a>
        </li>
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Welcome <?php echo ucfirst($_SESSION['username'])?></a>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>