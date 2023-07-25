
<x-layout>
@foreach($posts  as $post) 

<article class="{{$loop ->even ? 'foobar' :'' }}">
 
<h1> 
   <a herf="/posts/<? $post->$slug ;?>">
   {{ $post ->title}}
  </h1>
 
  <div>
   {{ $post ->excerpt }}
  </div>

</article>

@endforeach

</x-layout>