<x-app-layout>
    <x-slot name="header">
        <span class="font-bold">{{ __('News') }}</span>
    </x-slot>
    <div class="overflow-hidden shadow-md sm:rounded-md">
        <div class="flex flex-wrap py-3 lg:px-5 lg:py-7">
            @foreach($news as $item)
                <div class="w-full sm:w-1/2 xl:w-1/4 overflow-hidden rounded p-2">
                    <div class="m-2 bg-white shadow border">
                        <img alt="avatar" class="w-full h-56 object-cover object-center"
                             src="{{ $item->getFirstMediaUrl('thumbnail') }}">
                        <div class="flex flex-wrap items-center justify-between px-3 py-1 bg-gray-900">
                            <H:a class="rounded px-2 py-1 m-1 text-xs border-b-4 border-l-2 shadow-lg bg-blue-700 border-blue-800" :href="route('admin.news.edit', $item)">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white fill-current text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </H:a>
                            <form method="post" action="{{ route('admin.news.destroy', $item) }}">
                                @csrf
                                @method('DELETE')
                                <button class="rounded px-2 py-1 m-1 text-xs border-b-4 border-l-2 shadow-lg bg-red-700 border-red-800" href="">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white fill-current text-center">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="py-4 px-6">
                            <h1 class="text-md font-semibold text-gray-800">
                                <a href="{{ route('news.show', $item) }}" target="_blank" class="hover:underline">{{ $item->title }}</a>
                            </h1>
                            <div class="text-sm">{!! $item->excerpt !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $news->links() !!}
    </div>
</x-app-layout>
