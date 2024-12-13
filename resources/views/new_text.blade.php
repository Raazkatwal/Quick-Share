@extends('layout')
@section('content')
<main
    class="bg-custombg font-play grid h-screen place-items-center p-5 text-white"
>
    <form action="{{ route('share') }}" class="h-full w-full rounded-xl bg-[#22283C] p-5" method="POST">
        @csrf
        <div class="flex justify-between">
            <input
                type="text"
                name="title"
                class="rounded-lg bg-[#303A55] p-3 outline-none focus:bg-[#252d41]"
                placeholder="Enter a title"
                title="Enter a title"
                tabindex="1"
                required
            />
            <a
                href="/"
                class="rounded-lg bg-red-600 px-5 py-3 font-bold uppercase"
                title="Cancel & Go back to home"
                tabindex="4"
            >
                Cancel <i class="fa-solid fa-x ml-3"></i>
            </a>
        </div>
        <textarea
            name="text"
            class="mt-5 h-[400px] w-full rounded-lg bg-[#303A55] px-3 py-3 text-gray-100 outline-none focus:bg-[#252d41] focus:outline-2 focus:outline-blue-800"
            required
            placeholder="Enter or paste your text/code here..."
            title="Enter the text to share"
            tabindex="2"
        ></textarea>
        <button
        tabindex="3"
            type="submit"
            class="mt-12 cursor-pointer rounded-full bg-blue-500 px-4 py-2 text-center font-semibold text-gray-50 transition-all duration-300 ease-in hover:scale-110 hover:bg-blue-600"
        >
            Share Now
        </button>
    </form>
</main>
@endsection
