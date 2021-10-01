<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('assets/dist/logo.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - NLK Admin</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('assets/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <!--<img alt="NLK ADMIN" class="img-fluid" src="dist/logof.png">-->
                      
                    </a>
                    <div class="my-auto">
                         <img alt="NLK ADMIN" class="-intro-x w-1/2 -mt-16" src="{{asset('assets/dist/images/icon.png')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign in to your account.
                        </div>
                       
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <form class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto" action="" method="post">
                    @csrf    
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account.</div>
                        <div class="intro-x mt-8">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span style="color: red; display:block; margin-bottom:2px">
                            {{ $error }};
                            </span>
                            @endforeach
                            @endif
                    
                            <input type="text" name="username" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Username">
                            <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                           
                             
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button name="login_user" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                            
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                           
                        </div>
                    </form>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
       
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('assets/dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>