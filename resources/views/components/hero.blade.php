<section class="relative bg-white max-w-screen-xl mx-auto ">
	<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 my-6">
		<div class="block mb-8 md:hidden">
            {!! $image !!}
		</div>

		<div class="sm:text-center lg:text-left">
            {!! $slot !!}
		</div>
	</div>

	<div class="hidden lg:block 
		md:absolute md:inset-y-0 md:right-0 md:w-1/3
		lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2"
		>
		{!! $image !!}
	</div>
</section>
