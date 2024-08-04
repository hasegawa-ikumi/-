<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
      
        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
       <h1>Blog Name</h1>
       <a href="/posts/create">create</a>
       <div closs='posts'>
           @foreach($posts as $post)
           <div class='post'>
              <a href="/posts/{{ $post->id}}"><h2 class='title'>{{ $post->title}}</h2></a>
               <p class='body'>{{$post->body}}</p>
           </div>
           @endforeach
       </div>
       <div class='paginate'>{{ $posts->links()}}</div>
    </body>
</html>
