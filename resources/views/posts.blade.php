<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main>
        <div class="mx-auto max-w-7xl py-3">

            @foreach ($posts as $post)
                <article class="py-4 max-w-screen-md border-b border-gray-300">
                    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-950">{{ $post['title'] }}</h2>
                    </a>
                    <div>
                        <a href="#">{{ $post['author'] }}</a> | 1 January 2025
                    </div>
                    <p>
                        {{ Str::limit($post['body'], 100) }}

                    </p>
                    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline"> Read more
                        &raquo;</a>
                </article>
            @endforeach


        </div>
    </main>
</x-layout>
