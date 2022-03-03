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
        <h1 class="col-span-8 font-bold">sent chat</h1>

        <form action="/Auth/logout" method="post">
            @csrf
            <button type="submit" class="block text-red-500 underline">logout</button>
        </form>

        <a href="" class="block underline">setting</a>

    </nav>

    <main class=" grid grid-cols-8 h-full gap-2 p-1">
        <aside class="bg-white overflow-y-auto p-2 col-span-2" style="height: 505px">

            <div class="border mb-1 border-green-500 p-2 rounded">
                <h1>damayanti</h1>
            </div>

            <div class="border mb-1 hover:bg-blue-300 border-green-500 p-2 rounded">
                <h1>Pirda</h1>
            </div>

        </aside>

        <article class="col-span-6  bg-white p-2 ">
            <div class="bg-green-500 mb-2 rounded p-2">
                <a href="">
                    <h1 class="text-center text-white underline">Damayanti</h1>
                </a>
            </div>

            <section>
                <section class="h-96 overflow-y-auto m-1 p-2">

                    <div class="bg-slate-300 w-4/5 p-2 mb-2 rounded">
                        <p>Dinar lagi apa?</p>
                        <span class="text-xs block text-right">12:22</span>
                    </div>

                    <div class="flex justify-end">
                        <div class="bg-blue-200 w-4/5 p-2 mb-2 rounded">
                            <p>Lagi mikirin kamu, hehe</p>
                            <span class="text-xs block text-right">12:30</span>
                        </div>
                    </div>

                    <div class="bg-slate-300 w-4/5 p-2 mb-2 rounded">
                        <p>Dinar lagi apa?</p>
                        <span class="text-xs block text-right">12:22</span>
                    </div>

                    <div class="flex justify-end">
                        <div class="bg-blue-200 w-4/5 p-2 mb-2 rounded">
                            <p>Lagi mikirin kamu, hehe</p>
                            <span class="text-xs block text-right">12:30</span>
                        </div>
                    </div>



                </section>

                <section class="border border-1 border-green-500 p-2 rounded grid grid-cols-10 gap-1">
                    <div class="col-span-9">
                        <textarea name="send"
                            class="bg-blue-400 p-1 rounded active:border-0 h-8 w-full"> klik di sini </textarea>
                    </div>

                    <div class="col-span-1">
                        <button class="bg-orange-300 h-8 rounded w-full" type="submit">Kirim</button>
                    </div>
                </section>

            </section>

        </article>

    </main>

</body>

</html>