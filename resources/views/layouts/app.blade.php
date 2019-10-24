<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PNdata | Pntransfert - Gestionnaire de l'interface sécurisée de transfert de fichiers</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="https://account.pndata.tech/img/favicon.ico">


        <!-- Styles -->
        <link type="text/css" rel="stylesheet"
              href="{{ asset('css/app.css') }}?v={{ Carbon\Carbon::now()->timestamp }}">
        <link type="text/css" rel="stylesheet"
              href="{{ asset('css/fonts.css') }}?v={{ Carbon\Carbon::now()->timestamp }}">
        <link type="text/css" rel="stylesheet"
              href="{{ asset('css/main.css') }}?v={{ Carbon\Carbon::now()->timestamp }}">
        @yield('stylesheet')
    </head>
    <body>
        <div id="app" class="{{ \App\Helpers::lightAppBg() }}">
            @include('includes.formload')
            @include('includes.navbar', [
            'links' => array([
                    'label' => 'Accueil',
                    'color' => 'blue-text',
                    'route' => 'home',
                    'active' => [route('home')],
                    'authorized' => config('config.AUTHORIZED_LABELS')['campaign']
                ],[
                    'label' => 'Client',
                    'color' => 'orange-text',
                    'class' => Route::is('customer.edit') ? 'active' : null,
                    'route' => 'customer.index',
                    'active' => [route('customer.index'), route('customer.create')],
                    'authorized' => config('config.AUTHORIZED_LABELS')['campaign']
                ],[
                    'label' => 'Campagne',
                    'color' => 'green-text',
                    'class' => Route::is('campaign.edit') ? 'active' : null,
                    'route' => 'campaign.index',
                    'active' => [route('campaign.index'), route('campaign.create')],
                    'authorized' => config('config.AUTHORIZED_LABELS')['campaign']
                ],[
                    'label' => 'Fichier',
                    'color' => 'pink-text',
                    'route' => 'file.index',
                    'active' => [route('file.index')],
                    'authorized' => config('config.AUTHORIZED_LABELS')['treatment']
                ],[
                    'label' => 'SFTP',
                    'color' => 'black-text',
                    'route' => 'sftp.index',
                    'active' => [route('sftp.index'), route('sftp.create')],
                    'authorized' => true
                ])

            ])

            @if((isset($sidebar) && $sidebar) || (isset($title) && $title))
                <div class="main-header {{ \App\Helpers::currentRouteCategory() }} d-flex justify-content-end align-items-center p-5">
                    <div class="main-title">
                        <span class="mr-2"><a href="http://www.pndata.fr"
                                              class="{{ $sidebarColor }}-text">PNdata</a></span>/<span class="mx-2"><a
                                    href="{{ route('home') }}"
                                    class="{{ $sidebarColor }}-text">PNtransfert</a></span>/@yield('main-tree')
                        <h4>@yield('main-title')</h4>
                    </div>
                </div>
            @endif

            @if(isset($sidebar) && $sidebar)

                @include('includes.sidebar')

                <div class="col-12 col-md-8 col-xl-10 ml-auto">
                    @endif
                    <div class="container-fluid main{{ Route::is('home') ? ' d-flex justify-content-center align-items-center' : ''}}">
                        @if (session('ok') || session('ko') || session('warn'))
                            @include('includes.feedback')
                        @endif

                        @yield('content')
                    </div>
                    @if(isset($sidebar) && $sidebar)
                </div>
            @endif
            @include('includes.footer', [
            'all' => true
            ])
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}?v={{ Carbon\Carbon::now()->timestamp }}"></script>
        <script src="{{ asset('js/views/index.js') }}?v={{ Carbon\Carbon::now()->timestamp }}"></script>
        <script src="{{ asset('js/commons/capitalize.js') }}?v={{ Carbon\Carbon::now()->timestamp }}"></script>
        <script src="{{ asset('js/commons/replaceAll.js') }}?v={{ Carbon\Carbon::now()->timestamp }}"></script>
        @yield('script')

    </body>
</html>
