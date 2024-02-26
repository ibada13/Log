<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soc</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-navbar />
    
    <main class=" pt-2 mx-auto ">
        <div class="flex  bg-gray-100">
            <div class="hidden sm:flex w-1/4 h-auto bg-purple-300 ">
                    
            </div>
            <div class="flex-grow w-max">
                @yield('content')
            </div>
            <div class="hidden md:flex w-1/5 h-auto  bg-purple-700">

            </div>
        </div>
    </main>
    
<x-footer />
</body>

</html>
