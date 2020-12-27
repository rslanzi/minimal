<header x-data="{ open: false }">
	<div class="relative bg-white mb-6">
		<div class="max-w-screen-xl mx-auto">
			<div class="relative z-10 bg-white w-full">
				<div class="relative pt-6 pl-4 sm:pl-6 lg:pl-8">
					<nav class="relative flex items-center justify-between">
						<div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
							<div class="flex items-center justify-between w-full md:w-auto">
								<div class="w-auto">
									<a href="{{ route('home') }}" aria-label="Home" class="font-semibold text-xl text-blue-600">{{ env('APP_NAME') }}</a>
								</div>
								<div class="mr-2 flex items-center md:hidden">
									<button
                                        x-on:click="open = !open"
                                        type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                        id="main-menu"
                                        aria-label="Main menu"
                                        aria-haspopup="true">
										<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
										</svg>
									</button>
								</div>
							</div>
						</div>
						<div class="hidden md:block px-0">
							<a href="{{ route('home') }}" class="nav-link">{{ __('messages.nav.home') }}</a>
							<a href="{{ route('contact') }}" class="nav-link">{{ __('messages.nav.contact') }}</a>
							<a href="{{ route('blog.index') }}" class="nav-link">{{ __('messages.nav.blog') }}</a>
						</div>
					</nav>
				</div>
			</div>
		</div>

		{{-- Mobile menu --}}
		<div
			x-show="open" 
			x-on:click.away="open = false"
            x-transition:enter="transition ease-out duration-150 transform"
            x-transition:enter-start="opacity-0 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-75"
            class="absolute top-0 z-20 inset-x-0 p-2 transition transform origin-top-right md:hidden">
			<div class="rounded-lg shadow-md">
				<div class="rounded-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
					<div class="px-5 pt-4 flex items-center justify-between">
						<div>
							<a href="{{ route('home') }}" aria-label="Home" class="font-semibold text-xl text-blue-600">{{ env('APP_NAME') }}</a>
						</div>
						<div class="-mr-2">
							<button
                                x-on:click="open = !open"
                                type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                aria-label="Close menu">
								<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
								</svg>
							</button>
						</div>
					</div>
					<div class="px-2 pt-2 pb-3">
						<a href="{{ route('home') }}" class="nav-link-mobile" role="menuitem">{{ __('messages.nav.home') }}</a>
						<a href="{{ route('contact') }}" class="nav-link-mobile mt-1" role="menuitem">{{ __('messages.nav.contact') }}</a>
						<a href="{{ route('blog.index') }}" class="nav-link-mobile mt-1" role="menuitem">{{ __('messages.nav.blog') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>