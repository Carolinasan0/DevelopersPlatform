<div class="grid grid-cols-3 gap-4 mt-8 mx-10 my-6 pb-10">
    @foreach($categories as $category)
    <x-category-card :category="$category" />
    @endforeach
</div>