@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <form method="post" action="/news/{{ $news->id }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <fieldset>

                    <!-- Form Name -->
                    <legend>News</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="title">News Title:</label>
                        <div class="">
                            <input id="title" name="title" type="text" value="{{ $news->title }}" placeholder="" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="content">News Content:</label>
                        <div class="">
                            <textarea id="content" name="content" type="text" placeholder="" class="form-control input-md">{{ $news->content }}</textarea>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="control-label" for="okOrCancel"></label>
                        <div class="col-md-8">
                            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
                            <a href="/" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>

                </fieldset>
            </form>
            </div>
        </div>
    </div>
@endsection
