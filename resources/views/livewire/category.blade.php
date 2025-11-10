@foreach ($categories as $category)
    <a href="{{ route('show-category', $category->slug) }}">
        {{ $category->name }}
    </a>
@endforeach