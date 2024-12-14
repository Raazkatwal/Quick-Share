@extends('layout')
@section('content')
<main
    class="bg-custombg font-play grid h-screen place-items-center p-5 text-white"
>
    <div class="h-full w-full rounded-xl bg-[#22283C] p-5">
        @csrf
        <div class="flex justify-between">
            <input
                type="text"
                name="title"
                class="rounded-lg bg-[#303A55] p-3 outline-none"
                readonly
                value="{{ $data->title }}"
                tabindex="1"
                required
            />
            <a
                href="/"
                class="flex items-center gap-3 justify-center justify-items-center text-white bg-blue-500 w-[161px] hover:bg-blue-600 hover:text-white transition-all ease duration-100 active:bg-blue-400 py-2 rounded-md"
                title="Go back to home"
                tabindex="4"
            >
                Go Home <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <textarea id="myInput"
            name="text"
            class="mt-5 h-[400px] w-full rounded-lg bg-[#303A55] px-3 py-3 text-gray-100 outline-none"
            required
            readonly
            tabindex="2"
        >{{ $data->text }}</textarea>
        <div class="flex items-center gap-2 justify-items-center">

        <button id="copyButton" onclick="copyToClipboard()"
        tabindex="3"
            type="submit"
            class="mt-12 cursor-pointer rounded-full bg-blue-500 px-4 py-2 text-center font-semibold text-gray-50 transition-all duration-300 ease-in hover:scale-110 hover:bg-blue-600"
        >
            Copy <i id="copyIcon" class="fa-solid fa-copy"></i>
        </button>
        <a
                href="/code"
                class="rounded-full bg-white px-4 py-2 uppercase text-black mt-12"
                title="Share New Text"
                tabindex="4"
            >
               <i class="fa-solid fa-share-from-square mr-3"></i> Share New 
            </a>
        </div>

    </div>
</main>
@endsection
