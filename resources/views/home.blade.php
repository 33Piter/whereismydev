@extends('layouts.app')

@section('content')
    <!-- Page Container -->
    <div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main id="page-content" class="flex flex-auto flex-col max-w-full">
            <!-- Hero -->
            <div class="bg-white overflow-hidden">
                <!-- Header -->
                <header id="page-header" class="flex flex-none items-center bg-white py-10">
                    <div class="flex flex-col text-center md:flex-row md:items-center md:justify-between space-y-6 md:space-y-0 container xl:max-w-7xl mx-auto px-4 lg:px-8">
                        <div>
                            <a href="javascript:void(0)" class="inline-flex items-center space-x-2 font-bold text-lg tracking-wide text-indigo-600 hover:text-indigo-400">
                                <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="opacity-75 hi-outline hi-cube-transparent inline-block w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                                <span>Company</span>
                            </a>
                        </div>
                        <div class="flex flex-col text-center md:flex-row md:items-center md:justify-between space-y-6 md:space-y-0 md:space-x-10">
                            <nav class="space-x-4 md:space-x-6">
                                <a href="javascript:void(0)" class="font-semibold text-gray-900 hover:text-gray-500">
                                    <span>Features</span>
                                </a>
                                <a href="javascript:void(0)" class="font-semibold text-gray-900 hover:text-gray-500">
                                    <span>Plans</span>
                                </a>
                                <a href="javascript:void(0)" class="font-semibold text-gray-900 hover:text-gray-500">
                                    <span>About</span>
                                </a>
                            </nav>
                            <div class="flex items-center justify-center space-x-2">
                                <a href="/admin" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                    <span>Sign In</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-arrow-right inline-block w-5 h-5"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END Header -->

                <!-- Page Header Section: Simple Brand With Cover -->
                <div class="bg-cover bg-bottom" style="background-image: url('https://source.unsplash.com/Nyvq2juw4_o/1280x400');">
                    <div class="bg-indigo-900 bg-opacity-90">
                        <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                            <div class="text-center">
                                <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-400">
                                    Features
                                </div>
                                <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-white">
                                    Fully Responsive UI Components
                                </h2>
                                <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-indigo-200 lg:w-2/3 mx-auto">
                                    Carefully coded and tested. You can use them to build the UI of your web project without ever leaving your HTML.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Header Section: Simple Brand With Cover -->
            </div>
            <!-- END Hero -->

            <!-- Features Section: With Images -->
            <div class="bg-gray-100">
                <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                    <!-- Heading -->
                    <div class="text-center">
                        <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-700">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-terminal inline-block w-10 h-10"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                            Fully Featured
                        </h2>
                        <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600 lg:w-2/3 mx-auto">
                            Amazing and latest features to help you build your next idea with cool tools and super modern technology.
                        </h3>
                    </div>
                    <!-- END Heading -->

                    <!-- Features -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                        <div class="py-5">
                            <div class="p-2 bg-white rounded-lg mb-8 hover:bg-indigo-500 transition">
                                <img src="https://source.unsplash.com/clN6N30q3sw/800x650" alt="Preview Feature Image" class="rounded-lg" />
                            </div>
                            <h4 class="text-lg font-bold mb-2">
                                Amazing Feature
                            </h4>
                            <p class="leading-relaxed text-gray-600 mb-3">
                                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti.
                            </p>
                        </div>
                        <div class="py-5">
                            <div class="p-2 bg-white rounded-lg mb-8 hover:bg-indigo-500 transition">
                                <img src="https://source.unsplash.com/zNRITe8NPqY/800x650" alt="Preview Feature Image" class="rounded-lg" />
                            </div>
                            <h4 class="text-lg font-bold mb-2">
                                Inspiring Feature
                            </h4>
                            <p class="leading-relaxed text-gray-600 mb-3">
                                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti.
                            </p>
                        </div>
                        <div class="py-5">
                            <div class="p-2 bg-white rounded-lg mb-8 hover:bg-indigo-500 transition">
                                <img src="https://source.unsplash.com/H0r6LB_9rz4/800x650" alt="Preview Feature Image" class="rounded-lg" />
                            </div>
                            <h4 class="text-lg font-bold mb-2">
                                Cool Feature
                            </h4>
                            <p class="leading-relaxed text-gray-600 mb-3">
                                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti.
                            </p>
                        </div>
                    </div>
                    <!-- END Features -->
                </div>
            </div>
            <!-- END Features Section: With Images -->

            <!-- FAQ Section: To the Side -->
            <div class="bg-white">
                <div class="lg:flex space-y-16 lg:justify-between lg:space-x-8 lg:space-y-0 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                    <!-- Heading -->
                    <div class="text-center lg:text-left">
                        <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-700">
                            We Answer
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                            Frequently Asked Questions
                        </h2>
                        <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600">
                            Be sure to <a href="javascript:void(0)" class="text-indigo-600 hover:text-indigo-400">get in touch</a> and let us know if you have any further questions.
                        </h3>
                    </div>
                    <!-- END Heading -->

                    <!-- FAQ -->
                    <div class="space-y-8 lg:w-3/5 lg:flex-none">
                        <div class="prose prose-indigo">
                            <h4>
                                What features are included?
                            </h4>
                            <p>
                                Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque.
                            </p>
                        </div>
                        <div class="prose prose-indigo">
                            <h4>
                                Do I get access to the community?
                            </h4>
                            <p>
                                Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque.
                            </p>
                        </div>
                        <div class="prose prose-indigo">
                            <h4>
                                Do you offer email support?
                            </h4>
                            <p>
                                Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque.
                            </p>
                        </div>
                        <div class="prose prose-indigo">
                            <h4>
                                Are the updates free for life?
                            </h4>
                            <p>
                                Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque.
                            </p>
                        </div>
                    </div>
                    <!-- END FAQ -->
                </div>
            </div>
            <!-- END FAQ Section: To the Side -->

            <!-- Contact Section: With Image Cover Brand -->
            <div class="bg-cover" style="background-image: url('https://source.unsplash.com/wpU4veNGnHg/1280x800');">
                <div class="bg-indigo-900 bg-opacity-95">
                    <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                        <div class="flex flex-col lg:flex-row lg:items-center space-y-16 lg:space-y-0 lg:space-x-16">
                            <!-- Heading with Company Info -->
                            <div class="lg:w-2/5 text-white">
                                <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-400">
                                    We reply in 24hrs
                                </div>
                                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                                    Get in touch
                                </h2>
                                <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-indigo-200">
                                    If something does not make sense, feel free to contact us and we will get back to you as soon as possible.
                                </h3>
                                <div class="text-indigo-200 mt-10">
                                    <h4 class="uppercase font-semibold tracking-wider mb-4">
                                        Company Inc.
                                    </h4>
                                    <div class="leading-relaxed">
                                        1080 Sunshine Valley, Suite 2563<br />
                                        San Francisco, CA 85214<br />
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </div>
                                </div>
                            </div>
                            <!-- END Heading with Company Info -->

                            <!-- Contact Form -->
                            <div class="lg:w-3/5 p-2 bg-white bg-opacity-10 rounded-xl">
                                <form method="post" action="{{ route('contact') }}" class="bg-white rounded-lg p-6 space-y-6">
                                    @csrf
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                        <div class="space-y-1">
                                            <label for="name" class="font-medium">Nome ou Razão Social</label>
                                            <input
                                                class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-indigo-500
                                        focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                                type="text" name="name" id="name" value="{{ old('name') }}"/>

                                            @if ($errors->has('name'))
                                                <div class="error">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="space-y-1">
                                            <label for="email" class="font-medium">E-mail</label>
                                            <input
                                                class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-indigo-500
                                        focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                                type="email" name="email" id="email" value="{{ old('email') }}"/>
                                            @if ($errors->has('email'))
                                                <div class="error">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="space-y-1">
                                            <label for="company" class="font-medium">CPF ou CNPJ</label>
                                            <input
                                                class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-indigo-500
                                        focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                                type="text" name="identification" id="identification" value="{{ old('identification') }}"/>

                                            @if ($errors->has('identification'))
                                                <div class="error">
                                                    {{ $errors->first('identification') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="space-y-1">
                                            <label for="phone" class="font-medium">Celular</label>
                                            <input
                                                class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-indigo-500
                                        focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="(00) 00000-0000"
                                                type="text" name="phone" id="phone" value="{{ old('phone') }}" maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}"/>
                                            @if ($errors->has('phone'))
                                                <div class="error">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-span-2 space-y-1">
                                        <label for="message" class="font-medium">Mensagem</label>
                                        <textarea
                                            class="block border border-gray-200 rounded placeholder-gray-400 px-5 py-3 w-full focus:border-indigo-500 focus:ring
                                    focus:ring-indigo-500 focus:ring-opacity-50"
                                            id="message" name="message" rows="6">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <div class="error">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <button type="submit"
                                            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-4 py-3 leading-6
                                    rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800
                                    focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                             class="opacity-50 hi-solid hi-paper-airplane inline-block w-5 h-5">
                                            <path
                                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0
                                        00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                        </svg>
                                        <span>Enviar</span>
                                    </button>
                                </form>
                            </div>
                            <!-- END Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Contact Section: With Image Cover Brand -->

            <!-- CTA Section: Simple Boxed -->
            <div class="bg-gray-100 overflow-hidden">
                <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                    <div class="relative">
                        <div class="pattern-dots-lg text-gray-300 absolute top-0 right-0 w-32 h-32 lg:w-48 lg:h-48 transform translate-x-12 -translate-y-16"></div>
                        <div class="pattern-dots-lg text-gray-300 absolute bottom-0 left-0 w-32 h-32 lg:w-48 lg:h-48 transform -translate-x-12 translate-y-16"></div>
                        <div class="p-10 lg:py-12 lg:px-16 bg-white rounded shadow text-center relative">
                            <div class="space-y-10">
                                <!-- Heading -->
                                <div class="text-center">
                                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                                        Ready? <span class="text-indigo-600">Let’s do it!</span>
                                    </h2>
                                    <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600">
                                        Get your own custom dashboard and start building amazing services, always with the most solid and rock steady foundation.
                                    </h3>
                                </div>
                                <!-- END Heading -->

                                <!-- CTA -->
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-center space-y-4 sm:space-y-0 sm:space-x-2">
                                    <a href="javascript:void(0)" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-6 py-4 leading-6 rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-arrow-right inline-block w-5 h-5"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span>Get Started</span>
                                    </a>
                                    <a href="javascript:void(0)" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-6 py-4 leading-6 rounded border-gray-200 bg-gray-200 text-gray-700 hover:text-gray-700 hover:bg-gray-300 hover:border-gray-300 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-gray-200 active:border-gray-200">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-information-circle inline-block w-5 h-5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                        <span>Learn More</span>
                                    </a>
                                </div>
                                <!-- END CTA -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CTA Section: Simple Boxed -->

            <!-- Footer Section: Simple Vertical With Social Dark -->
            <footer id="page-footer" class="bg-gray-800">
                <div class="text-center text-sm lg:text-base container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                    <div class="space-y-10">
                        <nav class="space-x-4">
                            <a href="javascript:void(0)" class="text-gray-400 hover:text-indigo-600">
                                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-twitter inline-block w-5 h-5"><path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 3.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z"></path></svg>
                            </a>
                            <a href="javascript:void(0)" class="text-gray-400 hover:text-indigo-600">
                                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-facebook inline-block w-5 h-5"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"></path></svg>
                            </a>
                            <a href="javascript:void(0)" class="text-gray-400 hover:text-indigo-600">
                                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-instagram inline-block w-5 h-5"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path></svg>
                            </a>
                            <a href="javascript:void(0)" class="text-gray-400 hover:text-indigo-600">
                                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-github inline-block w-5 h-5"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                            <a href="javascript:void(0)" class="text-gray-400 hover:text-indigo-600">
                                <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-github inline-block w-5 h-5"><path d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12 12-5.373 12-12S18.628 0 12 0zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073a42.153 42.153 0 00-.767-1.68c2.31-1 4.165-2.358 5.548-4.082a9.863 9.863 0 012.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68a46.287 46.287 0 00-3.488-5.438A9.894 9.894 0 0112 2.087c2.275 0 4.368.779 6.043 2.072zM7.527 3.166a44.59 44.59 0 013.537 5.381c-2.43.715-5.331 1.082-8.684 1.105a9.931 9.931 0 015.147-6.486zM2.087 12l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48A9.865 9.865 0 012.087 12zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027a39.137 39.137 0 012.043 7.46c-3.349 1.291-6.953.666-9.641-1.433zm11.586.43a41.098 41.098 0 00-1.92-6.897c1.876-.265 3.94-.196 6.199.196a9.923 9.923 0 01-4.279 6.701z"></path></svg>
                            </a>
                        </nav>
                        <nav class="space-x-2 sm:space-x-4">
                            <a href="javascript:void(0)" class="font-medium text-gray-300 hover:text-gray-400">
                                About
                            </a>
                            <a href="javascript:void(0)" class="font-medium text-gray-300 hover:text-gray-400">
                                Terms of Service
                            </a>
                            <a href="javascript:void(0)" class="font-medium text-gray-300 hover:text-gray-400">
                                Privacy Policy
                            </a>
                        </nav>
                    </div>
                    <hr class="my-10 opacity-10" />
                    <div class="text-gray-400">
                        <span class="font-medium">Where is my dev?</span> © 2022
                    </div>
                </div>
            </footer>
            <!-- END Footer Section: Simple Vertical With Social Dark -->
        </main>
        <!-- END Page Content -->
    </div>
    <!-- END Page Container -->
@stop

@section('footer-scripts')
    <script>
        const phone = document.getElementById('phone')

        phone.addEventListener('keypress', (e) => phoneMask(e.target.value))
        phone.addEventListener('change', (e) => phoneMask(e.target.value))

        const phoneMask = (value) => {
            value = value.replace(/\D/g, "")
            value = value.replace(/^(\d{2})(\d)/g, "($1) $2")
            value = value.replace(/(\d)(\d{4})$/, "$1-$2")
            phone.value = value
        }
    </script>
@endsection
