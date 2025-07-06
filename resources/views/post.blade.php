<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main>
        <div class="mx-auto max-w-7xl py-3">

            <article class="py-4 max-w-screen-md ">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-950">{{ $post['title'] }}</h2>
                <div>
                    <a href="#">{{ $post['author'] }}</a> | 1 January 2025
                </div>
                <p>
                    {{ $post['body'] }}
                </p>
                <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to posts
                </a>
            </article>

        </div>
    </main>
</x-layout>
