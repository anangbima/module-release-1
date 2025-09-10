<x-module-release-1::admin-layout
    :title="__($title)"
    :role="'Admin'"
    :module="__(module_release_1_meta('label'))"
    :desa="config('app.name')"
    :breadcrumbs="$breadcrumbs"
>
    {{-- Table Section --}}
    <x-module-release-1::log-activity-table 
        :logs="$logs"
    />

</x-module-release-1::admin-layout>