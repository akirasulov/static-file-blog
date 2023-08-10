<div class="text-sm mt-10">
    {{ $post->author }} / {{ $post->date->toDateString() }}
    @if (count($post->tags))
        <ul class="not-prose mt-2 p-0 list-none flex items-center space-x-1">
            @foreach ($post->tags as $tag)
                <li class="text-sm">
                    <a class="text-blue-500" href="">{{ Str::title($tag) }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
