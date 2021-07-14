<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#7952b3">

  <title>The First Theme</title>
  <!-- Fonts -->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .h4{
      font-family: "Times New Roman", Times, serif;
      font-style: italic;
      color:white;
    }
    .h2{
      text-align:center;
      color:white;
      
    }
    .hr{
      width:120px;
      color:white;    
    }
    
    .h6{
      font-size:12px;
      color:white;
    }
    .button1:hover {
      background-color: #070461;
      color: white;
    }
    
    .button1{
      background-color:#F8AE03;
      border: none;
      color:white;
      height:35px;
      width:100px;
      font-size:12px;
    }
    
    .p{
      color:white;
    }
    .background {
      width: 100%;
      height: 100%;
      background-image: url("https://www.teahub.io/photos/full/96-962454_flat-wallpaper-fondo-flat-design.png");
      background-position: center;
    }
    .background:hover{
      background-size: 110%;
    }
  </style>
</head>
<body class="antialiased">
  <main class="container" style="padding-top: 150px;">
    <div class="row m-0 p-3 background" >
      <div class="col-md-6 order-2 align-self-center">
        <h2 class="h2">SOME TEXT</h2>
      </div>
      <div class="col-md-6 order-1 order-md-5 pt-4 pb-4">
        <h4 class="h4">The Title</h4>
        <h6 class="h6">THE SUB TITLE HERE</h6><hr class="hr">
        <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit qui nostrum similique atque reiciendis obcaecati corporis ipsa incidunt, voluptatem voluptas labore illo quia perspiciatis. Dignissimos autem dolorem tempore pariatur eligendi.</p>
        <button class="button button1">Button Link</button>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
