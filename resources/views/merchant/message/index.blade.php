@extends('merchant.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{asset('css/message.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.css"
          integrity="sha512-vE1vuJehUqVW9CvtimaOOJ+vgfv5o/d5Z7uBorSX5ASYxi18F3wO7H+IK0G2i5TqHCwQ/XOZGXzx3dne9a9AhA=="
          crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/OverlayScrollbars.min.js"
            integrity="sha512-5R3ngaUdvyhXkQkIqTf/k+Noq3phjmrqlUQyQYbgfI34Mzcx7vLIIYTy/K1VMHkL33T709kfh5y6R9Xy/Cbt7Q=="
            crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            //The first argument are the elements to which the plugin shall be initialized
            //The second argument has to be at least a empty object or a object with your desired options
            OverlayScrollbars(document.querySelectorAll("#scroll"), {
                className: "os-theme-dark",
                resize: "none",
                sizeAutoCapable: true,
                clipAlways: true,
                normalizeRTL: true,
                paddingAbsolute: false,
                autoUpdate: null,
                autoUpdateInterval: 33,
                updateOnLoad: ["img"],
                nativeScrollbarsOverlaid: {
                    showNativeScrollbars: false,
                    initialize: true
                },
                overflowBehavior: {
                    x: "scroll",
                    y: "scroll"
                },
                scrollbars: {
                    visibility: "auto",
                    autoHide: "never",
                    autoHideDelay: 800,
                    dragScrolling: true,
                    clickScrolling: false,
                    touchSupport: true,
                    snapHandle: false
                },
                textarea: {
                    dynWidth: false,
                    dynHeight: false,
                    inheritedAttrs: ["style", "class"]
                },
                callbacks: {
                    onInitialized: null,
                    onInitializationWithdrawn: null,
                    onDestroyed: null,
                    onScrollStart: null,
                    onScroll: null,
                    onScrollStop: null,
                    onOverflowChanged: null,
                    onOverflowAmountChanged: null,
                    onDirectionChanged: null,
                    onContentSizeChanged: null,
                    onHostSizeChanged: null,
                    onUpdated: null
                }
            });
        })
    </script>


@endpush
@section('main')
    <livewire:message></livewire:message>
@endsection
