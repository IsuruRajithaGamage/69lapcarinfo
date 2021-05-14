<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="bg-gray-700 text-white">
    
        <Header class="fixed bg-gray-900 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black"> Car.Info </h1>    
            <nav class="mx-2">
                <a href="{{ route('login')}}" class="texxt mx-2 text-white hover:text-pink-500 transititon">Login </a>
                <a href="{{ route('register')}}" class="texxt mx-2 text-white hover:text-pink-500 transititon">Register </a>

            </nav>
        </Header>
        <Main>
            @yield('page-content')
        </Main>
        <footer>
            <div class="container mx-auto p-4">
                
                <p>&copy; Car Info | explore cars </p>

            </div>
            
        </footer>
</body>
</html>