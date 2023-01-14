<x-app-layout>
<div>
    @foreach ($series as $serie)
        <div class="p-4 bg-slate-300 rounded-lg flex ">
            <h2 class="font-mono flex-1">
                <a href="{{route("serie.show",$serie->id)}}">
                    {{$serie->title}}
                </a>
            </h2>
        </div>
        <br>
        
    @endforeach
</div>
</x-app-layout>