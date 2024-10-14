<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
    <div class="container">
        {{-- toto je komentar --}}
        {{-- takto se pouziva komponenta --}}
        <x-menu/>

        <h1>ZOO</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum natus vitae dolorem quasi rem? Quidem cum impedit sed iste, quaerat officia optio neque unde? Nulla accusantium error est exercitationem optio.</p>

        <p>Stav navstevnosti: {{ $stavNavstevnosti }} %</p>
        
        @if ($stavNavstevnosti > 80)
            <p>Máme plno</p>
        @elseif ($stavNavstevnosti > 60)    
            <p>Máme málo míst</p>
        @elseif ($stavNavstevnosti > 40)    
            <p>Je poloprázdno</p>
        @elseif ($stavNavstevnosti > 20)    
            <p>Máme hodně míst</p>
        @else  
            <p>Je tu prázdno</p>
        @endif

        @if ($jeOtevreno == true)
            <h3>Máme otevřeno</h3>
        @else
            <h3>Máme zavřeno</h3>
        @endif

        {{-- dump and die--}}
        {{-- dd(get_defined_vars()) --}}

        <h4>Časy veřejného krmení</h4>
        <ul>
            @foreach ($casyKrmeni as $cas)
            <li>{{ $cas }}</li>     
            @endforeach
        </ul>

        <table border="1px">
            <tr>
                <th>Jméno</th>
                <th>Popis</th>
            </tr>
            @foreach($poleZviratek AS $zvire)
                <tr>
                    <td>{{ $zvire->jmeno }}</td>
                    <td>{{ $zvire->popis }}</td>
                </tr>
            @endforeach
            </table>

    </div>
    
</body>
</html>