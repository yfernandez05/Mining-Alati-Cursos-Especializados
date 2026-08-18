<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        .contenenedor{
            text-align: center;
            color: #333;
            flex-direction: column;
            padding: 2rem;
            border: 1px solid #dee1e5;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
        }

        .cabecera{
            background: #0062ae;
            color: #fff;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .logo img{
            max-width: 100%;
        }
        
        .cuerpo{
            padding-bottom: 1.5rem;
        }
        
        .titulo-cuerpo{
            padding-top: .5rem;    
            padding-bottom: .5rem;    

        }
        
        .detalle{
            font-size: 1rem;
        }
        
        .nombres
        {
            padding-top: .2rem;
            padding-bottom: 1.2rem;
            color:#333;
        }
        .gracias,
        .mensaje{
            padding-top: .5rem;
            padding-bottom: .25rem;
            color: #333;
        }
        .pie {
            color: #666;
        }
        
        .pie a{
            color: #009bdb;
            text-decoration: none;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        
    </style>
</head>
<body>
    <div class="contenenedor">
        <div>
            
            <div class="cuerpo">
                <!-- <a href="https://www.facebook.com/MiningAlatisac">
                    <img src="{{$message->embed('images/Gracias-por-registrate.jpg')}}" alt="Gracias por Registrarte" class="img-fluid">
                </a> -->
                <h2 style="color: #0062ae;">Registro Exitoso</h2>
                <p>Estimado/a {{$cliente->nombreapellido}},</p>
                <p>Gracias por registrarte en Mining Alati para la Certificación con líderes Internacionales en capacitación minera.</p>
                <p>Nuestro equipo se pondrá en contacto contigo en breve para brindarte más información. Si tienes alguna pregunta mientras tanto, no dudes en ponerte en contacto con nosotros.</p>
                <p>Atentamente,</p>
                <p>Tu Equipo de Mining Alati</p>

            </div>
            <div class="pie">
                Derechos reservados Copyright © 2024 <a style="color: #0062ae;" href="{{route('welcome')}}" target="_blank"> <strong>Mining Alati</strong> </a>
            </div>
        </div>
    </div>
</body>
</html>