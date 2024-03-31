@extends('layouts.auth')
@section('content')
<div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
    <div class="container z-1">
    <div class="flex flex-wrap -mx-3">
        <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0">
            <h4 class="font-bold">Forgot Password</h4>
            <p class="mb-0">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
            <!-- Session Status -->
			<div class="mb-4 font-medium text-sm text-green-600">
				{{ session('status') }}
			</div>

			<!-- Validation Errors -->
			@if ($errors->any())
				<div class="mb-4">
					<div class="font-medium text-red-600">
						{{ __('Whoops! Something went wrong.') }}
					</div>

					<ul class="mt-3 list-disc list-inside text-sm text-red-600">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            </div>

            <div class="flex-auto p-6">
            <form method="POST" action="{{ route('password.email') }}" role="form">
			@csrf
                <div class="mb-4">
                <input id="email" name="email" type="email" placeholder="Email" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-[#0B0960] focus:outline-none" value="{{ old('email') }}" required autofocus/>
                </div>
                <div class="text-center">
                <button type="submit" class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-[#0B0960] border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>
            </div>

        </div>
        </div>
        <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
        <div class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg')] rounded-xl ">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60"></span>
            <h4 class="z-20 mt-12 font-bold text-white">"Attention is the new currency"</h4>
            <p class="z-20 text-white ">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

