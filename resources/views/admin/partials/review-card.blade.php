<ul class="mb-4">
    <li>
        <p>Autore recensione: {{ $reviews[$index]->author}}</p>
    </li>
    <li>
        <p>Testo recensione: {{ $reviews[$index]->comment}}</p>
    </li>

    <a href="{{ route('admin.movies.reviews.create', $movie->id) }}" class="btn btn-danger">Create a new post</a>
    <!-- a href="{{ route('admin.reviews.edit', $reviews[$index]->id) }}" class="btn btn-primary">Modifica</a> -->
</ul>