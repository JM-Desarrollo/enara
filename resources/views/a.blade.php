
@php
$arr = unserialize($item->habilidades);
@endphp


ID Usuario Conectado: {{Auth::User()->id}}<br />
ID Item que estoy viendo: {{$item->id}} <br />
                
{{$item->name}}
@foreach($arr as $key => $a)

   <br /> {{$key}}: {{$a}}
    
@endforeach




