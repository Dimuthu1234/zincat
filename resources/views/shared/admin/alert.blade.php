@if (session('status'))
    <div class="alert bg-success alert-styled-left">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span
                class="sr-only">Close</span></button>
        {{session('status')}}
    </div>
@endif

@if (session('error'))
    <div class="alert bg-danger alert-styled-left">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span
                class="sr-only">Close</span></button>
        {{session('error')}}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-styled-left alert-bordered">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span><span class="sr-only">Close</span></button>
                    <span class="text-semibold"></span> {{ $error }}.
                </li>
            @endforeach
        </ul>
    </div>
@endif
