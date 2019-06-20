<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    
    <title>{{ config('app.name', 'Lumen with Scaffolding') }}</title>
    <!-- Fonts will go here-->
    

    <!-- Styles will Go here-->
    <link rel="stylesheet" type="text/css" href="{{ _('css/styles.css') }}">
</head>
<body>   
    @yield('content')
   

    <!-- Scripts -->
    <script src="{{ _('js/app.js') }}" defer></script>
</body>
</html>
