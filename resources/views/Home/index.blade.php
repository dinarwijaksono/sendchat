@extends('layout/main')

@section('article')
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
            <textarea name="send" class="bg-blue-400 p-1 rounded active:border-0 h-8 w-full"> klik di sini </textarea>
        </div>

        <div class="col-span-1">
            <button class="bg-orange-300 h-8 rounded w-full" type="submit">Kirim</button>
        </div>
    </section>

</section>

</article>
@endsection

@push('script')
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
@endpush