<DOCTYPE html>
<style>
    body{
        background-image: linear-gradient(150deg, #020024, #7b0c9c, #0665be);
    }
    div{
        background-color: white;
        padding: 1em;
        width: 300px;
        margin: auto;
        border: 1px solid #CCC;
        border-radius: 1em;
    }
    h1{
        text-align: center;
    }
</style>
<body>
<div>
<?php

    echo "Your name is " . $_POST["name"] . "<br>";
    echo "Your email is " . $_POST["email"] . "<br>";
    echo "Your age is " . $_POST["age"] . "<br>";
    echo "Select: " . $_POST["role"] . "<br>";

    echo "You have access in: " . $_POST["local"] . "<br>";

    if(isset($_POST["device"])){

        foreach($_POST["device"] as $dev){
            echo "device select: " . $dev . "<br>";
        }
    }
    else{
        echo "You don't select device " . "<br>";
    }
    
    echo "Comment: ". "<br>" . $_POST["comment"] . "<br>";
?>
</div>
<h1> Teste de Formulário: feito por 3TTT </h1><br>
</body>
</html>