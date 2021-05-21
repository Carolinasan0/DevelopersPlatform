<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-8 mx-8 py-8">
<!-- <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4"> -->
    @foreach($vacancies as $vacancy)
    <x-vacancy-card :vacancy="$vacancy" />
    @endforeach
</div>
