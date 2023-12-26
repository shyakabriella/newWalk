

@foreach($posts as $post)
    <p>{{ $post->title }} - Status: 
        @if($post->approved)
            Approved
        @elseif($post->rejected)
            Rejected
        @else
            Pending
        @endif
    </p>
    <a href="{{ url('/posts/approve/' . $post->id) }}">Approve</a>
    <a href="{{ url('/posts/reject/' . $post->id) }}">Reject</a>
@endforeach
