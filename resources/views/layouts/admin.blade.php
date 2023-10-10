
<?php
$page="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('AdminPanel/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('Public/assets/img/favicon.png')}}" />
    <title>Administrator</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('AdminPanel/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('AdminPanel/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{asset('AdminPanel/assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
    <script src="{{asset('sweetalert.js')}}"></script>
</head>

<style>

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        right: 7px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<style id="imgwidth">
    .imgwidth
    {
        width: 550px;
    }
</style>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
<div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="{{route('index')}}" target="_blank">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Texno Park</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <!-- SideBar  -->
    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            <!-- Accaunt Page-->
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account</h6>
            </li>

            <!-- Profile -->
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('profile.edit')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 fas fa-user"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>

            <!-- Admin Page-->
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Administrator</h6>
            </li>
            <!-- Messages -->
            <li class="mt-0.5 w-full">
                <a class="
                @if(Route::Is('messages') || Route::Is('Message.show'))<?php $page="Xabarlar"; ?> py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors
                 @else  dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors @endif
                 " href="{{route('messages')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-yellow-800 fas fa-bell"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Xabarlar</span>
                </a>
            </li>

        </ul>
    </div>
</aside>


<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-200 backdrop-blur-2xl dark:bg-slate-850/80 dark:shadow-dark-blur bg-[hsla(0,0%,100%,0.8)] shadow-blur z-110" navbar-main="" navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="opacity-50 dark:text-white" href="javascript:;">Sahifa</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/'] dark:text-white dark:before:text-white" aria-current="page">{{$page}}</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize dark:text-white">
                    {{$page}}
                </h6>
            </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <li class="flex items-center">
                        <a href="{{ route('profile.edit') }}" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand dark:text-white">
                            <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                            <span class="hidden sm:inline">{{$user->first_name." ".$user->last_name}}</span>
                        </a>
                    </li>
                    <li class="flex items-center pl-4 xl:hidden">
                        <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand dark:text-white" sidenav-trigger="">
                            <div class="w-4.5 overflow-hidden">
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                                <i class="ease relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                            </div>
                        </a>
                    </li>
                    <li class="flex items-center px-4">

                    </li>

                    <!-- notifications -->

                    <li class="relative flex items-center pr-2">
                        <p class="hidden transform-dropdown-show"></p>
                        <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand dark:text-white" dropdown-trigger="" aria-expanded="false">
                            <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                        </a>

                        <ul dropdown-menu="" class="text-sm transform-dropdown before:font-awesome before:leading-default dark:shadow-dark-xl before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer dark:before:text-white">
                            <!-- add show class on dropdown open js -->
                            @foreach($ntf as $val)
                                <li class="relative mb-2">
                                    <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="{{route('Message.show',$val->id)}}">
                                        <div class="flex py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span class="font-semibold">{{$val->subject}}</span> from {{$val->name}}</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                    {{$val->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">




        @yield('content')










        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            Created by
                            <a class="font-semibold dark:text-white text-slate-700" target="_blank">S.Farruhbek</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </main>

        </body>
        <!-- plugin for scrollbar  -->
        <script src="{{asset('AdminPanel/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
        <!-- main script file  -->
        <script src="{{asset('AdminPanel/assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
        <script>
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                var dark_mode = document.querySelector("[dark-toggle]");
                var root = document.querySelector("html");
                root.classList.add("dark");
            }
        </script>
        <script>
            if(window.innerWidth>575) {
                document.getElementById('imgwidth').innerHTML = ".imgwidth{width: " + parseInt(window.innerWidth / 2.7921) + "px;}";
            }
            else
            {
                document.getElementById('imgwidth').innerHTML = ".imgwidth{width: " + parseInt(window.innerWidth/1.25) + "px;}";
            }
            function href(loc) {
                location.href = loc;
            }
            function fireSweetAlert(id) {
                Swal.fire({
                    title: 'Haqiqatdan ham o`chirilsinmi?',
                    text: "O`chirilganda so`ng qayta tiklab bo`lmaydi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ha, o`chirilsin!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'O`chirildi!',
                            '',
                            'success'
                        )
                        var de='button'+id;
                        document.getElementById(de).click();
                    }
                })
            }
        </script>
        </html>
