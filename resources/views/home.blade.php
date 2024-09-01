<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>{{ __('Featured Jobs') }}</x-section-heading>
            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section>
            <x-section-heading>{{ __('Tags') }}</x-section-heading>
            <div class="mt-6 space-x-6">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>{{ __('Recent Jobs') }}</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </div>
</x-layout>