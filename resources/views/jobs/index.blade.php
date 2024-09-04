<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">
                {{ __("Let's Find Your Next Job") }}
            </h1>
            <x-forms.form action="{{ route('search') }}" class="mt-6">
                <x-forms.input
                    :label="false"
                    name="query"
                    placeholder="{{__('I\'m looking for...')}}"
                />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>
                {{ __('Featured Jobs') }}
            </x-section-heading>
            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job"/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>
                {{ __('Tags') }}
            </x-section-heading>
            <div class="mt-6 space-x-6">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>
                {{ __('Recent Jobs') }}
            </x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job"/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>