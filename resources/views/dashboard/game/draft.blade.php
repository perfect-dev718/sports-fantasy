@extends('dashboard.layout')
@section('title')

@endsection

@section('style')

@endsection

@section('pagetitle')

@endsection

@section('pageback')

@endsection

@section('content')
    <div class="container-fluid row d-flex justify-content-center" id="draft">
        <div class="col-md-4 text-center">
            <div class="tab active" id="tab-1">
                <div class="image">
                    <img src="{{ asset('image/draft1.svg') }}" class="background">
                    <img src="{{ asset("image/logo.svg") }}" class="logo">
                </div>
                <h5>DOUBLE DRAFT</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
            <div class="tab" id="tab-2">
                <div class="image">
                    <img src="{{ asset('image/draft2.svg') }}" class="background">
                    <img src="{{ asset("image/snack.png") }}" class="snack">
                </div>
                <h5>SNAKE</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
            <div class="tab" id="tab-3">
                <div class="image">
                    <img src="{{ asset('image/draft3.svg') }}" class="background">
                    <img src="{{ asset("image/auction.png") }}" class="auction">
                </div>
                <h5>AUCTION</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
            <div class="tab" id="tab-4">
                <div class="image">
                    <img src="{{ asset('image/draft4.svg') }}" class="background">
                    <img src="{{ asset("image/autopick.png") }}" class="autopick">
                </div>
                <h5>AUTOPICK</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
            <div class="tab-slider">
                <span class="fa fa-circle-o slider-item" data-tab="tab-1" id="tab-slider-1"></span>
                <span class="fa fa-circle slider-item" data-tab="tab-2" id="tab-slider-2"></span>
                <span class="fa fa-circle slider-item" data-tab="tab-3" id="tab-slider-3"></span>
                <span class="fa fa-circle slider-item" data-tab="tab-4" id="tab-slider-4"></span>
            </div>
            <button class="draft-btn active btn-1" id="draftBtn" type="button">Double Draft</button>
            <button class="draft-btn btn-2" id="snakeBtn" type="button">SNAKE</button>
            <button class="draft-btn btn-3" id="auctionBtn" type="button">AUCTION</button>
            <button class="draft-btn btn-4" id="autoPickBtn" type="button">AUTOPICK</button>
            <div class="skip-block justify-content-end d-flex">
                <a href="javascript: skip()" class="text-white">Skip</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var curStep = 1;
        function skip() {
            curStep = (Math.floor(curStep)) % 4 + 1;
            setTab("tab-slider-" + curStep, "tab-" + curStep);
        }

        $(function () {
            $('.slider-item').click(function (){
                var tabId = $(this).data('tab');
                curStep = tabId.replace("tab-", "");
                setTab($(this).attr('id'), tabId);
            })

            $('#autoPickBtn').click(function (){
                location.href = "{{ route('draft.order') }}";
            })
        });

        function setTab(sliderId, tabId) {
            $('.tab').removeClass('active');
            $(`#${tabId}`).addClass('active');
            $('.slider-item').removeClass('fa-circle-o').addClass('fa-circle');
            $(`#${sliderId}`).addClass('fa-circle-o').removeClass('fa-circle');
            $('.draft-btn').removeClass('active');
            $(`.btn-${curStep}`).addClass('active');
        }
    </script>
@endsection
