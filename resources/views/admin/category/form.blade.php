<x-admin.modal
    enctype="multipart/form-data"
    :title="isset($category) ? 'Update category' : 'Add New category'"
    :action="isset($category) ? route('admin.category.update', $category->id) : route('admin.category.store')"
    :button="isset($category) ? 'Update' : 'Submit'"
>
    @isset($category)
        @method('PUT')
    @endisset
    {{-- <x-admin.form-group label="class" :required="false" isType="select" class="select2" column="">
        <option value="{{ $category->classroom_id ?? '' }}">{{ $category->classroom->title ?? 'Select Class' }}</option>
        @foreach ($classes as $class)
        <option value="{{ $class->id }}">{{ $class->title }}</option>
        @endforeach
    </x-admin.form-group> --}}
    <x-admin.form-group label="title" placeholder="Enter Title" :value="$category->title ?? ''" />



</x-admin.modal>
