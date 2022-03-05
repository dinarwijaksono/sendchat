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

        <section class="bg-white overflow-y-auto p-2 col-span-8" style="height: 505px">

            <a href="/" class="text-orange-500 underline">Kembali</a>

            <h1 class="text-lg mb-2 text-center">Tambah kontak</h1>

            @if (session('addError'))
            <div class="p-1 text-center mb-2 bg-yellow-300 rounded text-slate-500">
                <p><?= session('addError') ?></p>
            </div>
            @endif

            @if (session('addIsSuccessfully'))
            <div class="p-1 text-center mb-2 bg-green-300 rounded text-slate-500">
                <p><?= session('addIsSuccessfully') ?></p>
            </div>
            @endif

            <form action="/Contact/add" method="post">
                @csrf
                <div class="grid mb-2">
                    <label for="email">Email</label>
                    <input class="border-2 px-2 border-orange-500" type="email" name="email" id="email"
                        placeholder="Email" autocomplete="off">

                    @error('email')
                    <p class="text-red-500"><?= $message ?></p>
                    @enderror

                </div>

                <div class="flex justify-end">
                    <button class="bg-orange-500 w-52 text-center p-1 rounded text-white" type="submit">Tambah</button>
                </div>

            </form>
        </section>

    </main>

</body>


</html>