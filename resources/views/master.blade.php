<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"> 
	<link rel="stylesheet" href="uikit/css/uikit.css" />
	<link rel="stylesheet" href="uikit/css/app.css">
    <link rel="stylesheet" type="text/css" href="">
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/uikit-icons.js"></script> 
    <title>@yield('title')</title>
<!-- @stack('head') -->

</head>
{{-- body --}}
<body>
{{-- hearder --}}
@component('components.header') @endcomponent
{{-- main --}}
 @component('components.main') @endcomponent
{{-- footer --}}
 @component('components.footer') @endcomponent

@yield('js')

</body>
</html>