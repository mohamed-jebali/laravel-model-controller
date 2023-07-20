<div class="container">
    <ul>
    @foreach($movies as $movie)
            <h2>
                {{ $movie->title }}
            </h2>
            <p>
                <strong>
                    {{ $movie->original_title }}
                </strong>
            </p>
    @endforeach
    </ul>
</div>