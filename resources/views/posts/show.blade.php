<x-app-layout>
    <x-slot name="header">
        　（show）
    </x-slot>
       <h1　class='title' >
       {{$post ->title}}
       </h1>
    
       <div closs='content'>
        
           <div class='content_post'>
               <h3>本文</h3>
               <h2 class='title'>{{ $post->title}}</h2>
               <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
               <p class='body'>{{$post->body}}</p>
           </div>
       </div>
       <div class='footer'>
           <a href="/posts/{{$post->id}}/edit">edit</a>
            </div>
       <div class='footer'>
           <a href="/">戻る</a>
            </div>
       
 </x-app-layout>