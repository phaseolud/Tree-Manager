<x-custom-layout>
    <div class="p-2">
        @foreach($trees as $tree)
            <x-tree-card :tree="$tree"/>
        @endforeach
    </div>
    </x-custom-layout>
