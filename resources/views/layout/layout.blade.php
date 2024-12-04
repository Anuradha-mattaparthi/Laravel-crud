<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anu- @yield('title','website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>Anu</h1>
        </header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        </nav>
        <main>
            <article>
                @hasSection('content')
                @yield('content')
                @else
                <h2>No Content found</h2>
                @endif
                
            </article>
            @section('sidebar')
            <aside>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/post">Post</a></li>

                </ul>
                @show
            </aside>
          
            
            
        </main>
        <footer>anuradha.businesslabs@gmail.com</footer>

    </div>
    @stack('scripts')
</body>

</html>
