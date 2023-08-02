<div>
    <!-- CSS -->
    <style type="text/css">
        .search-box ul {
            list-style: none;
            padding: 0px;
            width: 100%;
            position: absolute;
            margin: 0;
            background: white;
            overflow: auto;
        }

        .search-box ul li {
            background: lavender;
            padding: 4px;
            margin-bottom: 1px;
        }

        .search-box ul li:nth-child(even) {
            background: cadetblue;
            color: white;
        }

        .search-box ul li:hover {
            cursor: pointer;
        }
    </style>

    <div class="search-box text-black relative">
        <input type='text' class="border border-gray-300 appearance-none rounded w-full py-2 px-3 text-gray-700 focus:outline-none" wire:model="search" wire:keyup="searchResult" placeholder="Escribe para buscar un nombre" required>
        <input type="hidden" readonly name="athlete_id" wire:model="athlete_id" required>

        <!-- Search result list -->
        @if($showdiv)
        <ul>
            @if(!empty($records))
            @foreach($records as $record)

            <li wire:click="fetchAthleteDetail({{ $record->id }})">{{ $record->name}}</li>

            @endforeach
            @endif
        </ul>
        @endif
    </div>
</div>