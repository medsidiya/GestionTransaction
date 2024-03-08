<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&family=Work+Sans:wght@200;400;500;600;700;800&display=swap')}}" rel="stylesheet">


<link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
</head>
<body>
<div class="p-3">
    <div class="logo d-flex">
        <div class="mt-3 ml-2 mr-4">
            <h4>REPUBLIQUE ISLAMIQUE DE MAURITANIE</h4>
            <P>Honneur-Fraternite-Justice</P>
            <h4>Direction Des Marches Public </h4>
        </div>
        <div class="mr-2 mt-4">
            <img src="{{url('imgs/logo.png')}}" alt="logo" style="width: 100px;">
        </div>
    </div>

<div class="info mt-5 d-flex justify-content-center">
    <h5>Secreter Generale</h5>
</div> 
<div class="details">
    il s'est presente devant nous {{ $notaires->nom}}
     Le Mr, {{$vendeurs->nom}}. Numéro National {{ $vendeurs->NNI}} est apparu devant nous,
     où il a déclaré avoir vendu un {{ $terrains->surface}} à M.{{ $acheteurs->nom}} du Numéro National {{ $acheteurs->NNI}} pour un montant en
      présence du témoin{{ $temoins->nom}} prix {{ $terrains->prix}}  
</div>
<div class="foter mt-5">
    <p>temoins</p>
    <span>{{ $temoins->nom}} </span>
</div>
</div>
    <script src="{{url('js/app.js')}}"></script>
    <script>
        window.print();
    </script>
</body>
</html>
