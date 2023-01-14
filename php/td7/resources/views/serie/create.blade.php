<x-app-layout>
<body>

    <form method="POST" action="{{route("serie.store")}}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title">
        
        <label for="description">Description</label>
        <input type="text" name="description">

        <input type="submit" value="Go !">
    </form>
    
</body>
</x-app-layout>