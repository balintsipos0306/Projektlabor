<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Sipos Bálint - Szerkesztő felület</title>
</head>
<body id="page">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <header id="myheader">
    <div class= "logoholder">
      <img id = "logo" src="webp/tinywow_Logó.webp" alt="">
    </div>

    
    <div class="container" id="title">
        <h1>Szerkesztő felület</h1>
        <form action="/logout" method="POST" id="logout">
            @csrf
            @method('DELETE')
            <button id="signout" type="submit" class="btn btn-primary">Kilépés</button>
        </form>
    </div>
  </header>
    
    
  <main id = "main">
      <div class="left">
        <div class="container">
            <h2>Képek feltöltése</h2>
        </div>
      </div>
      
      <div class="rigt">
        <div class="container">
            <h2>Képek törlése</h2>
        </div>
      </div>
  </main>
</body>
</html>