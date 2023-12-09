<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Thread</title>
</head>

<body>
    @include ('partials/_header')
    <div class="container my-4">
        @foreach ($data3 as $row)
        <div class="jumbotron">
            <h1 class="display-4">{{$row->thread_title}}</h1>
            <p class="lead">{{$row->thread_desc}}</p>
            <hr class="my-4">
            <p>
                This forum is for sharing Knowledge with each other.Be respectful to each other.Do not harass other
                based
                on their color,race or religion.Dont send spam or self advertisement
            </p>
        </div>
        @endforeach
    </div>

    <div class="container">
        <h1 class="py-2">Post Comment</h1>
        @if(session('user'))
        <form method="post" action="/insertcomment">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment Post</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="threadid" value="{{$row->thread_id}}">
                <input type="hidden" name="user_id" value="{{session('userid')}}"> 
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
        @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hold on!</strong> You should login first to comment.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>

    @if ($comment_list->isEmpty())
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">No Discussion Found</h1>
            <p class="lead">Be First To Discuss</p>


        </div>
    </div>
    @else


    <div class="container my-2">
        <h1 class="py-2">Discussion</h1>
        @foreach ($comment_list as $comment_item)
        <div class="media py-2">
            <img class="mr-3" src="{{asset('image/user.jpg')}}" width="50px" alt="Generic placeholder image">
            <div class="media-body">
                <p class="font-weight-bold my-0">{{$comment_item->username}} at {{$comment_item->created_at}}</p>
                <h5 class="mt-0">{{$comment_item->comment_content}}</h5>
            </div>
        </div>
        @endforeach




    </div>


    @endif




    @include ('partials/_footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>