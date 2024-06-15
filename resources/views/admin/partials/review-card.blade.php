<ul class="mb-4">
    <li>
        <p>Autore recensione: {{ $reviews[$index]->author}}</p>
    </li>
    <li>
        <p>Testo recensione: {{ $reviews[$index]->comment}}</p>
    </li>
    <li>
        <p>Voto recensione: {{ $reviews[$index]->rating}}</p>
    </li>
    <!-- a href="{{ route('admin.reviews.edit', $reviews[$index]->id) }}" class="btn btn-primary">Modifica</a> -->
</ul>
<a href="{{ route('admin.reviews.edit', $reviews[$index],) }}" ><i class="fa-solid text-danger fa-pen"></i></a>
<form action="{{ route('admin.reviews.destroy', $reviews[$index]->id) }}" method="POST" class="text-end">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-button border-0 bg-transparent"
        data-item-title="{{ $reviews[$index]->author }}">
        <i class="fa-solid text-danger fa-trash"></i>
    </button>
</form>
@include('admin.partials.modal-delete')
