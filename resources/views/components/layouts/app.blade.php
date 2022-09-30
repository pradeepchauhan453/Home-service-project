<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indobrisk</title>

    @vite('resources/css/app.css')
</head>
<body>

    <div class = "max-w-4xl mx-auto px-6 grid grid-cols-8 gap-12 mt-16">

        <div class = "col-span-2 border-r border-slate-200 space-y-6">
             <ul>
             <li>
                    <span href="" class="font-bold text-lg text-slate-600 hover:text-800 block py-1">
                        Alex
                    </span>
                </li>
                <li>
                    <a href="" class="font-bold text-lg text-slate-600 hover:text-800 block py-1">
                        Feed
                    </a>
                </li>
            </ul>

            <ul>
            <li>
                    <a href="" class="font-bold text-lg text-slate-600 hover:text-800 block py-1">
                        Login
                    </a>
                </li>
            </ul>
            <ul>
            <li>
                    <a href="/auth/register" class="font-bold text-lg text-slate-600 hover:text-800 block py-1">
                        Register
                    </a>
                </li>
            </ul>
        </div>

    <div class="col-span-6"> 
        @isset($header)
            <h1 class="font-bold text-2xl text-slate-800">
                {{ $header }}
            </h1>
        @endisset
        {{ $slot }} 
    </div>

    </div>
    
    
</body>
</html>