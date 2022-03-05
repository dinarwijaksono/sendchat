<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent chat</title>
    <script src="/asset/js/tailwindcss.js"></script>
</head>

<body class="bg-slate-300">

    <nav class="bg-green-500 p-2 grid gap-1 grid-cols-10 text-white">
        <h1 class="col-span-9 font-bold"><a href="">sent chat</a></h1>

        <a href="" class="block underline">setting</a>

    </nav>

    <main class=" grid grid-cols-8 h-full gap-2 p-1">
        <aside class="bg-white overflow-y-auto p-2 col-span-8" style="height: 505px">

            <h1 class="text-lg text-center"><?= auth()->user()->username ?></h1>
            <h1 class="text-center"><?= auth()->user()->email ?></h1>

            <hr class="my-4">

            <a href="" class="text-blue-500">
                <p class="text-center">Edit profile</p>
            </a>

            <form action="/Auth/logout" method="post">
                @csrf
                <button class="text-center block mx-auto text-red-500" type="submit">Logout</button>
            </form>

        </aside>


    </main>

</body>

</html>