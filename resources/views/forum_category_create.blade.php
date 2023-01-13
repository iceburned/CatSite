<!DOCTYPE html>
@extends('base')
@section('nav')

<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Member Login">
    <meta name="description" content="">
    <title>Create post</title>
    <link rel="stylesheet" href="{{asset('/forum/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('/forum/css/Create-post.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('forum/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('forum/js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="#">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Create post">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" data-lang="en">
<section class="u-clearfix u-section-3" id="carousel_03c7">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Create Category</h1>
        <div class="u-border-3 u-border-palette-5-light-1 u-line u-line-horizontal u-line-1"></div>
        <h4 class="u-text u-text-default u-text-2"><span class="u-text-custom-color-3"></span>
        </h4>
        <div class="u-form u-form-1">
            <form action="{{route('category-create-custom')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title"></label><input type="text" placeholder="Title" id="title" class="form-control" name="title"
                                                         required autofocus>
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="description"></label><input type="text" placeholder="Description" id="description" class="form-control" name="description"
                                                         required autofocus>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <button type="submit"
                        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">
                    Create
                </button>
                <a href="{{route('index')}}"
                   class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Cancel</a>
            </form>
        </div>
    </div>
</section>
@endsection
