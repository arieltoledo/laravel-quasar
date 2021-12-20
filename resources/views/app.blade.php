<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@^6.0.0/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/ionicons@^4.0.0/dist/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/eva-icons@^1.0.0/style/eva-icons.css" rel="stylesheet" type="text/css">
        <link href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@^1.0.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/quasar@2.3.4/dist/quasar.rtl.prod.css" rel="stylesheet" type="text/css">
    
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
