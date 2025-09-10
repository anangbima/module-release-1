<x-module-release-1::admin-layout
    :title="__($title)"
    :role="'Admin'"
    :module="__(module_release_1_meta('label'))"
    :desa="config('app.name')"
    :breadcrumbs="$breadcrumbs"
>

    {{-- Button Export & tab Role--}}
    <div class="mb-2 flex gap-2 flex-wrap items-center mt-1">
        @foreach ($roles as $role)
            <x-link 
                :href="route(module_release_1_meta('kebab').'.admin.logs.by-role', $role->id)" 
                intent="primary" 
                class="{{ $role->id === $selectedRole->id ? 'ui-btn-solid' : '' }}" 
                size="sm"
                :active="$role->id === $selectedRole->id"
            >
                {{ ucfirst($role->name) }}
            </x-link>
        @endforeach
    </div>

    {{-- Table Section --}}
    <x-module-release-1::log-activity-table 
        :logs="$logs"
    />


</x-module-release-1::admin-layout>