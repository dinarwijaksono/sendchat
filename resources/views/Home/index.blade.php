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
        <h1 class="col-span-9 font-bold"><a href="/">sent chat</a></h1>

        <a href="/Home/setting" class="block underline">setting</a>

    </nav>

    <main class=" grid grid-cols-8 h-full gap-2 p-1">

        <aside class="bg-white relative overflow-y-auto p-2 col-span-2" style="height: 505px">

            <div class="border mb-1 border-green-500 p-2 rounded">
                <h1>damayanti</h1>
            </div>

            <div class="border mb-1 hover:bg-blue-300 border-green-500 p-2 rounded">
                <h1>Pirda</h1>
            </div>

            <!-- list kontak -->
            <section id="listKontak"
                class="bg-blue-300 hidden mb-2 absolute top-3 left-3 right-3 shadow-lg rounded h-52 overflow-y-auto p-2">

                <a id="xListContact">
                    <div class="bg-red-500 text-center rounded p-1 mb-1 text-white">Tutup box</div>
                </a>

                <a href="/Contact/add">
                    <div class="bg-orange-500 text-center rounded p-1 mb-1 text-white">Tambah kontak</div>
                </a>

                @foreach ($listContact as $contact)
                <a href="">
                    <div class="bg-white rounded p-1 mb-1 text-blue-500">damayanti</div>
                </a>
                @endforeach

            </section>
            <!-- end list kontak -->

            <a id="tChat" class="absolute bottom-5 right-5 bg-orange-500 text-center p-2 text-white rounded">Chat</a>

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
                        <p>Lorem, ipsum dolor?</p>
                        <span class="text-xs block text-right">12:22</span>
                    </div>

                    <div class="flex justify-end">
                        <div class="bg-blue-200 w-4/5 p-2 mb-2 rounded">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
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

    <script>
    let listKontak = document.getElementById('listKontak');
    let tChat = document.getElementById('tChat');
    let xListContact = document.getElementById('xListContact');


    tChat.addEventListener('click', function() {
        listKontak.classList.toggle('hidden')
    })

    xListContact.addEventListener('click', function() {
        listKontak.classList.toggle('hidden')
    })
    </script>

</body>

</html>