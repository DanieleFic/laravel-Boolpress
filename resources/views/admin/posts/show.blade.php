@extends('layouts.app')

@section('title','Show Post')

@section('content')
<div class="container">
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">title</div>
            <div class="col col-2">author</div>
            <div class="col col-5">content</div>
            <div class="col col-1">tag</div>
            <div class="col col-1">Slug</div>
        </li>
        <li class="table-row">
            <div class="col col-1">{{$post->title}}</div>
            <div class="col col-2">{{$post->author}}</div>
            <div class="col col-5">{{$post->content}}</div>
            <div class="col col-1">
                @foreach($post->tags as $tag)
                    <h6><span class="badge badge-secondary">{{$tag->name ? $tag->name : '-'}}</span></h6>
                @endforeach
            </div>
            <div class="col col-1">{{$post->slug}}</div>
        </li>
        @if(count($post->comments) > 0 )
        <div class="mt-3" id="comments">
            <h3>Commenti</h3>
            <table class="table">
                <tbody>
                    @foreach($post->comments as $comment)
                    <tr>
                        <td>{{$comment->content}}</td>
                        <td>
                            @if(!$comment->approved)
                            <form action="{{route('admin.comments.update',$comment->id)}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <button type="submit" class="btn btn-success">Approva</button>
                            </form>
                            @else
                                Approvato
                            @endif
                        </td>
                        <td>
                            <form action="{{route("admin.comments.destroy", $comment->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        {{-- facciamo un bottone con il route comics.show che si trova nel nostro controllore  --}}
        <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-info">Indietro</button></a>
    </ul>
</div>     
@endsection