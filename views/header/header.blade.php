<!doctype html>
<html lang="en">

<head>
     <script src="https://cdn.tiny.cloud/1/4h5urpdupawdfroxbqicxj7r3jjawjaq3daks20ac7rheegr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@isset($Title)
            {{ $Title }}
        @endisset</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('dt/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flexselect.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/lightbox.min.css') }}">

   {{--  @if (Auth::user()->Privileges != 'Super_Admin')
        <style>
            .deleteConfirm {

                display: none !important;
            }

        </style>

    @endif --}}

    <style>
        .select2-selection {

            display: none !important;
        }
     .bdr {
    border-radius: 12px !important;
     }

    </style>
</head>

<body class="antialiased">
    <div class="wrapper">
