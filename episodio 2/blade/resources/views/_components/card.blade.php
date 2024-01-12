<div style="border: 1px solid black; border-radius: 5px; padding: 10px; margin: 5px;">
    <h3>{{ $title }}</h3>
    {{-- en caso de modificar la url, no se dañara la carga de imagenes --}}
    <img src="{{ asset('assets/img/react.webp') }}" alt="example" width="100px">
    <p>{{ $content }}</p>
</div>