<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Elérhetőségek - Sipos Bálint</title>
</head>
<body>

  <div class="loader">

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/hamburger.js"></script>
    <script src="../js/adminLogin.js"></script>

    <header id="myheader">

    <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
    </div>
      <div class= "logoholder">
        <img id = "logo" src="../webp/tinywow_Logó.webp" alt="">
      </div>

      <nav id = "navv">
        <ul class="nav justify-content-end" id="menu">
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Kezdőlap</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/gallery/nature">Galéria</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#phph">Elérhetőségek</a>
          </li>
        </ul>
      </nav>
  </header>

    <main>

      <div class="container">
        <div class="form">
          <form action="/mail" method="POST">
            @csrf

            <!-- <div class="mb-3">
              <select class="form-select" required aria-label="select example">
                <option value="">Válasszon szolgáltatást</option>
                <option value="1">Naptár rendelés</option>
                <option value="2">Kép rendelés</option>
                <option value="3">Portré fotózás</option>
                <option value="4">Rendezvényfotózás</option>
                <option value="5">Egyéb...</option>
              </select>
              <div class="invalid-feedback">Válasszon az alábbi listából</div>
            </div> -->

            <div class="mb-3">
              <label for="name" class="form-label">Név</label>
              <input class="form-control" id="validationTextarea" required name="name"></input>           
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email cím</label>
              <input class="form-control" id="validationTextarea" required name="address"></input>            
            </div>

            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Üzenet</label>
              <textarea class="form-control" id="validationTextarea" required name="text"></textarea>
            </div>
          
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
        </div>
      </div>

    </main>

    <footer id="footer">
      <div class="row">
        <div class="col">
          Logó:
          <ul>
            <li><a href="https://vipix.hu/" target="_blank">VIPIX Grafikai Stúdió</a></li>
          </ul>
        </div>

        <div class="col">
            <ul>
              <li>Az oldalt készítette: Sipos Bálint</li>
              <li>Cím: 9200, Mosonmagyaróvár Gát utca 45/b</li>
              <li><a href="/contact">Elérhetőségek</a></li>
            </ul>    
        </div>
      </div>

    </footer>
    
</body>
</html>