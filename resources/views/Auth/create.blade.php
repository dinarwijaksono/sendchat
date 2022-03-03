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

    <form action="/Auth/create" method="post">
        <div class="flex pt-32 justify-center rounded drop-shadow-md">
            @csrf
            <section class="basis-6/12 p-2 col-span-5 bg-white">
                <h1 class="text-center mb-3 text-xl">DAFTAR</h1>

                @if (session('status'))
                <div class="bg-green-200 p-2 rounded mb-2">
                    <p class="text-center"><?= session('status') ?></p>
                </div>
                @endif

                <div class="grid gap-1 justify-end grid-cols-10 mb-2">
                    <label class="col-span-2  p-2 align-middle" for="username">Username</label>
                    <input class="col-span-8 bg-slate-200 p-2 ring-0" type="textz" name="username"
                        placeholder="username" id="username" value="<?= old('username') ?>">

                    @error('username')
                    <div class="col-span-2"></div>
                    <div class="col-span-8 text-red-500 text-sm">
                        <p><?= $message ?></p>
                    </div>
                    @enderror

                </div>

                <div class="grid gap-1 justify-end grid-cols-10 mb-2">
                    <label class="col-span-2  p-2 align-middle" for="email">Email</label>
                    <input class="col-span-8 bg-slate-200 p-2 ring-0" type="email" name="email" placeholder="email"
                        id="email" value="<?= old('email') ?>">

                    @error('email')
                    <div class="col-span-2"></div>
                    <div class="col-span-8 text-red-500 text-sm">
                        <p><?= $message ?></p>
                    </div>
                    @enderror

                </div>

                <div class="grid gap-1 grid-cols-10 mb-2">
                    <label class="col-span-2 p-2 align-middle" for="Password">Password</label>
                    <input class="col-span-8 bg-slate-200 p-2 ring-0" type="password" name="password"
                        placeholder="Password" id="password">

                    @error('password')
                    <div class="col-span-2"></div>
                    <div class="col-span-8 text-red-500 text-sm">
                        <p><?= $message ?></p>
                    </div>
                    @enderror

                </div>


                <div class="grid gap-1 grid-cols-10 mb-2">
                    <label class="col-span-2 p-2 align-middle" for="Password2">Password</label>
                    <input class="col-span-8 bg-slate-200 p-2 ring-0" type="password" name="password_confirmation"
                        placeholder="Password" id="password2">
                </div>

                <div class="flex justify-end mb-5">
                    <button class="p-1 basis-4/12 rounded bg-orange-300" type="submit">Register</button>
                </div>

                <hr>

                <p class="text-center mt-5">Sudah punya akun? <a class="text-blue-500 underline" href="/Auth/index">Klik
                        di sini untuk login</a></p>

            </section>
        </div>
    </form>

</body>

</html>