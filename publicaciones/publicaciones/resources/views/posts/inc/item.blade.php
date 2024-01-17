<a href="{{ route('users.show', $post->user->id) }}" class="text-lg font-semibold">
    {{$post->user->name}}
</a>
<p class="met-1 text-xs">
    <em>
        {{$post->created_at->format('d/m/Y')}}
    </em>
        {{$post->body}}
</p>
@can('destroy-posts', $post)
<form action="{{route('posts.destroy', $post->id)}}" method="post">
    @csrf
    @method('delete')
    <button class="text-indigo-600 text-xs">{{__('Delete')}}</button>
</form>
@endcan