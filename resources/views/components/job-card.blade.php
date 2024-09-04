@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">
        {{ $job->employer->name }}
    </div>
    <div class="py-8">
        <h3 class="text-xl font-bold transition-colors duration-200 group-hover:text-blue-800">
            {{ $job->title }}
        </h3>
        <p class="mt-4 text-sm">
            {{ $job->schedule . __('- From ') . $job->salary . __(' per Year') }}
        </p>
    </div>
    <div class="flex items-center justify-between mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag
                    size="small"
                    :tag="$tag"
                />
            @endforeach
        </div>
        <x-employer-logo width="42" :employer="$job->employer" />
    </div>
</x-panel>
