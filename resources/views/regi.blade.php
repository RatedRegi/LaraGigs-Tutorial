{{-- <h1>{{$heading}}</h1>
@foreach ($list as $liz)
    <h2> {{$liz['title']}} </h2>
    <p>{{$liz['description']}}</p>
@endforeach --}}

{{--view DB contents example--}}
@foreach($list as $li)
    <h1>{{$li->tags}}</h1> 
@endforeach