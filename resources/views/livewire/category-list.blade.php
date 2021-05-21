<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-8 mx-8 py-8">
    @foreach($categories as $category)
    <x-category-card :category="$category" />
    @endforeach
</div>