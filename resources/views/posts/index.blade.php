<x-app-layout>
    <div>
    @forelse ($posts as $post )
    <div>{{$post->message}}</div>
    @empty
        {{__('No posts')}}
    @endforelse
    </div>

</x-app-layout>
