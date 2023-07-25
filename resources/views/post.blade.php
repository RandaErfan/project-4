<!DOCTYPE html>
    <title> My Blog </title>

    <link rel="stylesheet" herf="/app.css">
    <link rel="stylesheet" herf="/vendor-lib.css">


    <body> 

    <article>
        {{ $post->title }}

        <div>
            {{!! $posts ->body !!}}
        </div>
    </article>

    <a herf="/">Go Back</a>




</body>
</html>
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