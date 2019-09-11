<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keepme | Trouver une nounou, en mieux</title>

        <style type="text/css">
            #mailLogo {
                height: 100px;
                width: 208px;
                margin: auto;
            }

            .mx-auto {
                margin-right: auto;
                margin-left: auto
            }

            .d-block {
                display: block
            }

            hr {
                box-sizing: content-box;
                height: 0;
                margin-top: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, .1)
            }

            a {
                text-decoration: none !important;
            }

            .text-right {
                text-align: right !important;
            }

            .text-center {
                text-align: center !important;
            }

            .text-uppercase {
                text-transform: uppercase !important;
            }

            .text-white {
                color: #FFFFFF !important;
            }

            .text-danger {
                color: #cc0000 !important;
            }

            .font-weight-bold {
                font-weight: bold !important;
            }

            .color-1 {
                color: #EBC8B2 !important;
            }

            .bg-color-1 {
                background-color: #EBC8B2 !important;
            }

            .btn {
                padding: 20px 30px;
                font-size: 0.81rem;
                -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
                -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                /*margin-top: 2em !important;*/
                /*margin-bottom: 2em !important;*/
                border: 0;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                cursor: pointer;
                text-transform: uppercase;
                white-space: normal;
                word-wrap: break-word;
                color: #fff;
            }


            @font-face {
                font-family: SourceSansProRegular;
                src: url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
                font-weight: 400;
                font-style: normal
            }

            @font-face {
                font-family: SourceSansProLight;
                src: url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
                font-weight: 400;
                font-style: normal
            }

            body {
                position: relative;
                background-color: #FFFFFF;
                color: #222;
                font-family: SourceSansProLight, SourceSansProRegular, sans-serif
            }

            .my-5 {
                margin-top: 4em !important;
                margin-bottom: 4em !important;
            }

            @media (min-width: 768px) {
                .w-50 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                    position: relative;
                    min-height: 1px;
                    padding-right: 15px;
                    padding-left: 15px;
                }
            }

            /*.text-center{text-align:center}.mx-auto{margin-right:auto;margin-left:auto}hr{box-sizing:content-box;height:0;margin-top:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}a,a:hover{text-decoration: none!important;}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;width:100%}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-left:0!important;margin-right:0!important}.w-100{width:100%!important}.my-4{margin-bottom:1.5rem!important;margin-top:1.5rem!important}.mt-5,.my-5{margin-bottom:3rem!important;margin-top:3rem!important}.img-fluid{max-width:100%;height:auto}.d-block{display:block}.px-0{padding-left:0!important;padding-right:0!important}.small,small{font-size:80%;font-weight:400}.text-right{text-align:right!important}.h5{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;font-size:1.25rem}.font-weight-bold{font-weight:700!important}.col-12,.col-md-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.col-md-6{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@font-face{font-family:AmaranthRegular;src:url(https://fonts.googleapis.com/css?family=Amaranth);font-weight:400;font-style:normal}@font-face{font-family:SourceSansProRegular;src:url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);font-weight:400;font-style:normal}@font-face{font-family:SourceSansProLight;src:url(/fonts/SourceSansPro-Light.otf);font-weight:400;font-style:normal}body{color:#222;font-family:SourceSansProLight,SourceSansProRegular,Verdana,Helvetica,Arial,sans-serif}.title{text-align:center;width:100%;margin-bottom:3rem}.btn{font-family:"Open Sans",sans-serif;padding:15px 30px;outline:0;font-size:15px;font-weight:600;-webkit-border-radius:2px!important;-moz-border-radius:2px!important;border-radius:2px!important;color:white!important}.btn:hover{background-color:#fff!important}.cursor-pointer{cursor:pointer}.company-name:before{content:'PN'}.company-name:after{content:'data';color:#aeb0b3;font-family:Aldrich,sans-serif}.black-text,.btn.black-bg:hover{color:#222!important}.black-bg{background-color:#222!important}.btn.black-bg:hover{border-color:#222!important}.btn.orange-bg:hover,.orange-text{color:#FBAC4C!important}.orange-bg{background-color:#FBAC4C!important}.btn.orange-bg:hover{border-color:#FBAC4C!important}.btn.pink-bg:hover,.pink-text{color:#D0427D!important}.pink-bg{background-color:#D0427D!important}.btn.pink-bg:hover{border-color:#D0427D!important}.blue-text,.btn.blue-bg:hover{color:#7EA3C5!important}.blue-bg{background-color:#7EA3C5!important}.btn.blue-bg:hover{border-color:#7EA3C5!important}.btn.green-bg:hover,.green-text{color:#7EC5C2!important}.green-bg{background-color:#7EC5C2!important}.btn.green-bg:hover{border-color:#7EC5C2!important}*/
        </style>
    </head>
    <body>
        <div id="app">

            <div class="container w-50 mx-auto">
                <img src="{{ asset("/img/logo.png") }}" class="d-block mx-auto" alt="Logo" id="mailLogo"/>
                <hr>
            </div>

            <div class="container w-50 mx-auto">
                @yield('content')
            </div>
        </div>

        <div class="container w-50 mx-auto">
            <p>Cordialement,</p>
            <p>L'équipe KeepMe.</p>
        </div>

        <hr class="w-50">

        <div class="container w-50 mx-auto text-right">
            <p>&copy; 2019
                <a href="{{ config('api.url.authorized') }}"><span class="color-1">KeepMe</span></a>
                Tous droits réservés.
            </p>
        </div>

    </body>
</html>
