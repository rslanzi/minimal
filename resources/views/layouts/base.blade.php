<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Prefetch -->
	<link rel="dns-prefetch preconnect" href="https://www.google-analytics.com">
	<link rel="dns-prefetch preconnect" href="https://www.googletagmanager.com">

	@if (env('APP_ENV') === 'production')
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ env('GTM_ID') }}');</script>
	@endif

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<meta name="description" content="@yield('meta_description')">
	{{--
	@if(View::hasSection('canonical'))
	<link rel="canonical" href="@yield('canonical')" />
	@endif
	--}}

	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />

	<!-- Social Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:creator" content="" />
	{{--
	<meta property="og:url" content="{{ url()->current() }}" />
	--}}
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('meta_description')" />
	{{--
	@if(View::hasSection('meta_image'))
	<meta property="og:image" content="@yield('meta_image')" />
	@else
	<meta property="og:image" content="/img/placeholder.webp" />
	@endif
	--}}

	<!-- Scripts -->
	<script src="/js/app.js" defer></script>
	@stack('scripts')

	<!-- Styles -->
	<link href="/css/style.css" rel="stylesheet" media="screen">
	@stack('styles')
</head>

<body class="max-w-full overflow-x-hidden">
	@if (env('APP_ENV') === 'production')
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id={{ env('GTM_ID') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	@endif

	@include('layouts.partials.nav')


	<main class="max-w-full overflow-x-hidden">

		@yield('content')

	</main>

	@include('layouts.partials.footer')

</body>
</html>
