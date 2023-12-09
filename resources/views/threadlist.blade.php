<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ThreadList</title>
</head>

<body>
    @include ('partials/_header')


    <div class="container my-4">
        <div class="jumbotron">

            <h1 class="display-4">
                Welcome To {{$data->categorey_name}} Forums
            </h1>
            <p class="lead">{{$data->categorey_description}}</p>

            <hr class="my-4">
            <p>This forum is for sharing Knowledge with each other.Be respectful to each other.Do not harass other based
                on their color,race or religion.Dont send spam or self advertisement</p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>

        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Start Discussion</h1>
        @if (session('user'))
        <form method="post" action="/insertthread">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Thread Title</label>
                <input type="text" class="form-control" id="threadtitle" name="threadtitle" aria-describedby="emailHelp"
                    placeholder="Enter Title" required>
                <small id="emailHelp" class="form-text text-muted">Try To keep Title Short And Relevant</small>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Thread Description</label>
                <textarea class="form-control" id="threaddesc" name="threaddesc" rows="3" required></textarea>
                <input type="hidden" name="cat_id" value="{{$data->categorey_id}}">
                <input type="hidden" name="user" value="{{session('userid')}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should login first.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    <!--Browse Question Categories-->
    @if ($threds_list->isEmpty())
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">No Questions Found</h1>
            <p class="lead">Be the first to ask a question</p>
        </div>
    </div>
@else
    <div class="container my-2">
        <h1 class="py-2">Browse Questions</h1>
        @foreach ($threds_list as $thread_item)
            <div class="media py-2">
                <img class="mr-3" src="{{ asset('image/user.jpg') }}" width="50px" alt="Generic placeholder image">
                <div class="media-body">
                            <p class="font-weight-bold my-0">{{ $thread_item->username }} at {{ $thread_item->created_at }}</p>
                    <h5 class="mt-0"><a class="text-dark" href="/threadq/{{ $thread_item->thread_id }}">{{ $thread_item->thread_title }}</a></h5>
                    {{ $thread_item->thread_desc }}
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