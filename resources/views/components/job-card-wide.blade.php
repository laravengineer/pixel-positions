@props(['job'])

<x-panel class="gap-6">
    <div>
        <x-employer-logo :imageUrl={{ $job->employer->logo }} />
    </div>
    <div class="flex flex-col flex-1">
        <a
            href="#"
            class="self-start text-sm text-gray-400"
        >
            {{ $job->employer->name }}
        </a>
        <h3 class="mt-3 text-xl font-bold transition-colors duration-200 group-hover:text-blue-800">
            {{ $job->title }}
        </h3>
        <p class="mt-auto text-sm text-gray-400">
            {{ $job->schedule . __('- From ') . $job->salary . __(' per Year') }}
        </p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag
                size="small"
                :tag="$tag"
            />
        @endforeach
    </div>
</x-panel>
