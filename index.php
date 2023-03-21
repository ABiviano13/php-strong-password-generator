<?php

$length_pass = $_GET['value'];
var_dump($_GET);

    function getPassword($length_pass){
        $alpha_number = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $alpha_number_length = strlen($alpha_number) - 1;
        $password = [];

        for ($i = 0; $i < $length_pass; $i++){
            $index = rand(0, $alpha_number_length);
            $password[] = $alpha_number[$index];
            print(implode($password)); 
        }

        return $password;

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator</title>
    <style>
        .section-generator{
            background-color: #001732;
            padding: 130px 0;
        }

        .parametro-text{
            padding: 47px 34px;
            border-radius: 10px;
        }

        .generator{
            padding: 34px;
            border-radius: 10px;
        }

        .row,
        form .btn{
            margin-top: 35px;
        }
    </style>
</head>
<body>
    <main>
        <section class="section-generator">
            <div class="container">
                <div class="title text-center">
                    <h1 class="text-secondary-emphasis">Strong Password Generator</h1>
                    <h2 class="text-white mt-3">Genera una password sicura</h2>
                </div>
                <form method="GET">
                    <div class="bg-primary-subtle parametro-text mt-3">
                        <?php if($length_pass !== NULL ? getPassword($length_pass) : 'Password Non Generata.')?> 
                    </div>
                    <div class="generator bg-white mt-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                Lunghezza Password:
                            </div>
                            <div class="col">
                                <input type="number" name="value">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Genera
                        </button>
                    </div>
                </form>
                
            </div>
        </section>
    </main>
</body>
</html>