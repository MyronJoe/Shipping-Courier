@if(session()->has('message'))

    <div style="background-color: lightgreen; padding: 1em; border: 1px solid green; width: 90%; margin: 1em auto 0 auto">
        {{session()->get('message')}}
    </div>

@endif