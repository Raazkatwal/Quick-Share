@extends('layout')
@section('content')
<main class="bg-custombg font-play h-screen pt-4 text-white">
    <nav class="flex w-screen items-center justify-center">
        <a href="" class="text-2xl font-semibold">QuickShare</a>
    </nav>
    <div class="mt-8 flex h-4/5 flex-col items-center justify-between justify-items-center">
        <button class="rounded-lg border border-white px-5 py-3 text-sm" onclick="openModal()">
            <i class="fa-solid fa-magnifying-glass mr-4"></i>Search Code
        </button>
        <dialog class="w-96 backdrop:bg-black backdrop:bg-opacity-50 rounded-lg" id="searchModal">
            <form action="{{ route('search') }}" method="POST" class="flex flex-col items-center justify-items-center gap-5 p-5">
                @csrf
                <h1 class="py-2 text-xl font-semibold select-none">Search Text</h1>
                <input type="text" placeholder="Enter Code" name="id" autofocus 
                class="focus:outline-blue-500 border-blue-400 w-full h-12 rounded-xl px-2 text-center bg-gray-50 outline-none focus:outline-2  border-2  focus:border-0 transition-all duration-150 ease-out focus:bg-gray-100 mb-1">
                <button class="w-full bg-blue-500 text-md my-2 text-white hover:bg-blue-600 active:bg-blue-400 py-3 rounded-md">Search</button>
            </form>
        </dialog>
        <div class="grid h-64 w-64 place-items-center rounded-full bg-[#303A56]">
            <div class="col-start-1 row-start-1 h-48 w-48 rounded-full bg-[#22283C]"></div>
            <div class="col-start-1 row-start-1 h-32 w-32 rounded-full bg-[#141824]"></div>
            <img class="col-start-1 row-start-1 h-16 w-16 rounded-full" src="{{ asset('img/pointer.webp') }}"
                alt="pointer" />
        </div>
        <a href="/code">
            <button class="rounded-lg border border-white px-5 py-3 text-sm">
                <i class="fa-solid fa-plus mr-4"></i>Share Text
            </button>
        </a>
    </div>
</main>
@endsection

@push('scripts')
    <script>
        const modal = document.getElementById("searchModal");

function openModal() {
    modal.showModal();
}

modal.addEventListener("click", (event) => {
    const rect = modal.getBoundingClientRect();
    if (
        event.clientX < rect.left ||
        event.clientX > rect.right ||
        event.clientY < rect.top ||
        event.clientY > rect.bottom
    ) {
        modal.close();
    }
});
    </script>
    
@endpush