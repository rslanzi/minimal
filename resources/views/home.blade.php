@extends('layouts.base')

@section('title'){{ $title ?? 'Title' }}@endsection
@section('meta_description'){{ 'Meta description...' }}@endsection

@section('content')

	@component('components.hero')
		<h1 class="hidden">Minimal Framework</h1>
		<h2 class="text-4xl tracking-tight leading-10 font-extrabold text-blue-900; sm:text-5xl sm:leading-none; md:text-6xl;">
			Some of Laravel's magic<br><span class="text-blue-700">in less than 10mb</span>
		</h2>
		<p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
		    Routing, Controller, Dependecy Injection, Env and much more.
		</p>
		<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
	        <a href="https://github/rslanzi/minimal" title="Minimal Framework" class="flex inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-100 bg-blue-600 hover:text-white hover:bg-blue-900 focus:outline-none focus:border-blue-700 focus:ring; md:py-4 md:px-8 md:text-lg;">
	            <div class="mr-2 fill-current">
	                <svg width="24" height="24" fill="currentColor" class="inline"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"></path></svg>
	            </div> Show on GitHub
	        </a>
		</div>

		@slot('image')
			<picture>
			    <source type="image/webp"
			        srcset="/img/desk_300.webp 300w,
			        /img/desk_1034.webp 1034w,
			        /img/desk_1638.webp 1638w,
			        /img/desk_1952.webp 1952w">
			    <source type="image/jpeg"
			        srcset="/img/desk_300.jpg 300w,
			        /img/desk_1034.jpg 1034w,
			        /img/desk_1638.jpg 1638w,
			        /img/desk_1952.jpg 1952w">
			    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
			        sizes="(max-width: 1952px) 100vw, 1952px"
			        src="/img/desk_1952.webp"
			        width="1952"
			        height="1300"
					alt="Hero image">
			</picture>
		@endslot
	@endcomponent

	@component('components.section')
		@slot('title')
			{{ $title ?? 'Title' | ucwords }}
		@endslot
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, sem at placerat maximus, dui dolor elementum ex, sed pharetra nunc diam ut ante. Fusce iaculis ac odio sit amet interdum. Etiam sed ligula elementum, accumsan mauris a, egestas velit. Pellentesque venenatis volutpat ante, eu dictum mi. Duis ut ipsum pulvinar, faucibus metus vitae, rhoncus est. Proin erat risus, pharetra ac hendrerit eget, convallis vitae ligula. Nam nisi sem, hendrerit sed magna vitae, convallis condimentum ex. Aliquam sed fermentum risus. Suspendisse quis ligula a velit fringilla lobortis. Mauris nisl nunc, imperdiet sit amet accumsan et, vulputate quis sem. Vestibulum ante purus, vulputate non mattis in, cursus nec massa.</p>
	@endcomponent

@endsection
