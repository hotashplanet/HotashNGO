<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($event->exists ? 'Edit Event' : 'New Event') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto my-5 bg-white p-3 shadow">
        <div x-data="{ lang : 'en' }">
            <div class="bg-gray-200 mb-4">
                <nav class="flex flex-col sm:flex-row">
                    <button @click.prevent="lang = 'en'" :class="{ 'text-gray-900 border-b-2 font-medium border-blue-500' : lang === 'en' }" class="text-gray-600 @if($errors->has('en.*')) bg-red-700 text-gray-200 hover:text-white @endif text-xs py-4 px-6 block hover:text-blue-500 focus:outline-none">
                        EN
                    </button>
                    <button @click.prevent="lang = 'bn'" :class="{ 'text-gray-900 border-b-2 font-medium border-blue-500' : lang === 'bn' }" class="text-gray-600 @if($errors->has('bn.*')) bg-red-700 text-gray-200 hover:text-white @endif text-xs py-4 px-6 block hover:text-blue-500 focus:outline-none">
                        BN
                    </button>
                </nav>
            </div>
            <H:form :model="$event" :action="$event->exists ? route('admin.events.update', $event) : route('admin.events.store')" :method="$event->exists ? 'PATCH' : 'POST'" multipart>
                <div class="relative flex flex-col flex-grow mt-5">
                    <h2 class="z-10 flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                        <H:label class="text-sm font-semibold" name="thumbnail" />
                    </h2>
                    <div x-data="{ files: null }" id="thumbnail" class="block w-full pt-5 pb-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
                        <input type="file" name="thumbnail"
                               class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                               x-on:change="files = $event.target.files; console.log($event.target.files);"
                               x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')" x-on:drop="$el.classList.remove('active')"
                        >
                        <template x-if="files !== null">
                            <div class="flex flex-col space-y-1">
                                <template x-for="(_,index) in Array.from({ length: files.length })">
                                    <div class="flex flex-row items-center space-x-2">
                                        <template x-if="files[index].type.includes('audio/')"><i class="far fa-file-audio fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('application/')"><i class="far fa-file-alt fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('image/')"><i class="far fa-file-image fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('video/')"><i class="far fa-file-video fa-fw"></i></template>
                                        <span class="font-medium text-gray-900" x-text="files[index].name">Uploading</span>
                                        <span class="text-xs self-end text-gray-500" x-text="filesize(files[index].size)">...</span>
                                    </div>
                                </template>
                            </div>
                        </template>
                        <template x-if="files === null">
                            <div class="flex flex-col space-y-2 items-center justify-center">
                                <small>You can replace thumbnail, <strong>If you want</strong></small>
                                <small>Drag & drop your thumbnail or <strong>Browse</strong></small>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                                <H:label class="text-sm font-bold" name="organizer" />
                            </h2>
                            <H:input name="organizer" wire:model.defer="organizer" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                            <H:error class="text-red-500" name="organizer" />
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                                <H:label class="text-sm font-bold" name="location" />
                            </h2>
                            <H:input name="location" wire:model.defer="location" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                            <H:error class="text-red-500" name="location" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                                <H:label class="text-sm font-bold" name="starts_at[date]" />
                            </h2>
                            <div class="flex">
                                <H:input type="date" name="starts_at[date]" wire:model.defer="starts_at.date" class="small-caps block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                                <H:input type="time" name="starts_at[time]" wire:model.defer="starts_at.time" class="small-caps block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                            </div>
                            <H:error class="text-red-500" name="starts_at[date]" />
                            <H:error class="text-red-500" name="starts_at[time]" />
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                                <H:label class="text-sm font-bold" name="finish_at[date]" />
                            </h2>
                            <div class="flex">
                                <H:input type="date" name="finish_at[date]" wire:model.defer="finish_at.date" class="small-caps block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                                <H:input type="time" name="finish_at[time]" wire:model.defer="finish_at.time" class="small-caps block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                            </div>
                            <H:error class="text-red-500" name="finish_at[date]" />
                            <H:error class="text-red-500" name="finish_at[time]" />
                        </div>
                    </div>
                </div>

                @foreach(config('translatable.locales', []) as $lang)
                <div x-show="lang === '{{ $lang }}'" class="flex flex-wrap">
                    <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                            <H:label class="text-sm font-bold" name="{{ $lang }}[title]" />
                        </h2>
                        <H:input name="{{ $lang }}[title]" :value="$event->{'title:'.$lang}" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <H:error class="text-red-500" name="{{ $lang }}[title]" />
                    </div>
                </div>
                @endforeach
                <div class="flex flex-wrap">
                    <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                            <H:label class="text-sm font-bold" name="slug" />
                        </h2>
                        <H:input name="slug" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <H:error class="text-red-500" name="slug" />
                    </div>
                </div>
                @foreach(config('translatable.locales', []) as $lang)
                <div x-show="lang === '{{ $lang }}'" class="flex flex-wrap">
                    <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                            <H:label class="text-sm font-bold" name="{{ $lang }}[content]" />
                        </h2>
                        <H:textarea tinymce name="{{ $lang }}[content]" :value="$event->{'content:'.$lang}" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <H:error class="text-red-500" name="{{ $lang }}[content]" />
                    </div>
                </div>
                @endforeach

                <x-jet-button class="block w-full mt-6 py-3">
                    Submit
                </x-jet-button>
            </H:form>
        </div>
    </div>
</x-app-layout>
