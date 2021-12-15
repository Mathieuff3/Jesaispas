<ul class="list-unstyled">
    @foreach($events as $event)
        <li>
            <article class="my-2">
                <header class="border-bottom py-2">
                    <h2 class="h5"><a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->name }}</a></h2>
                    <small>Rédigé par {{ $event->user->name }} dans la catégorie {{ $event->category->name }}</small>
                </header>
                {{ substr($event->content, 0, 200) }}[...]<a href="{{ route('events.show', ['id' => $event->id]) }}">(voir la suite)</a>
            </article>
        </li>
    @endforeach
</ul