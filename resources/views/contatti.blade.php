<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel-primi-passi</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .border-bottom{
                border-bottom: 1px solid #888888;
            }
            .one-quarter-height {
                height: 25vh;
            }
            .full-width{
                width: 100%;
            }
            .chi-siamo-formatting{
                width: 50%;
                margin: auto;
                text-align: center;
            }
            .flex-center{
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 28px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            ul{
                padding: 0;    
            }
            li{
                list-style: none;        
            }
            li a{
                transition: color .2s linear .2s;
            }
            li:hover a{
                color: lightgray;
            }
            img{
                object-fit: cover;
                width: 160px;
                height: 160px;
                border-radius: 50%;
                box-shadow: 2px 2px 5px 2px #888888;
            }
        </style>
    </head>
    <body>
        
        <nav class="one-quarter-height flex-center border-bottom">
            <ul>
                @foreach ($nav as $element)
                <li class="links flex-center">                    
                    <a href="{{$element['link']}}">
                        {{$element['title']}}
                    </a>
                </li>                    
                @endforeach
            </ul>
        </nav>
        <main class="flex-center chi-siamo-formatting">
            <ul>
                @foreach ($info as $element)   
                <li>
                    <h2 class="full-width">{{$element['address']}}</h2>
                    <h2 class="full-width">{{$element['phoneNumber']}}</h2>
                    <h2 class="full-width">{{$element['email']}}</h2>
                </li>
                @endforeach
            </ul>

        </main>
    </body>
</html>