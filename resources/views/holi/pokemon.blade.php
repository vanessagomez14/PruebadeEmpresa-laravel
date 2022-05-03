<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pokemon</title>
</head>
<body>

    <h1>Bienvenidos a mi examen</h1>
    <p>Maryi Vanessa Gomez Henao</p>


    <select id="pokemon">
 
    </select>
    <div id="tupokemon">

    </div>
    
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://pokeapi.co/api/v2/pokemon/">"https://pokeapi.co/api/v2/pokemon/"</script>
    <script>

    $('#pokemon').find(function(){
        $('#traer').find('option').remove();
        $.ajax({
            type:"get",
            url:"https://pokeapi.co/api/v2/pokemon/",
            success: function(res){
                $('#pokemon').append('<option value="">Selecciona un pokemon</option>');
                $(res.results).each(function(i,v){
                    $('#pokemon').append('<option value="'+v.url+'">'+v.name+'</option>');
                });
            },
            error: function(error){
                console.log(error);
            }
        })
    });

    $('#pokemon').change(function(){
       maryi = $('#pokemon').val();
       $.ajax({  
            url: maryi,
            success: function(resultado){         
                   $('#tupokemon').append('<input disabled value="'+resultado.forms[0].name+'"></input>')
                   $('#tupokemon').append('<a href="'+resultado.forms[0].url+'">Ver màs</a>');
            },
            error: function(error){
                console.log(error);
            }
        })
    })

    


   

    </script>
</body>
</html>