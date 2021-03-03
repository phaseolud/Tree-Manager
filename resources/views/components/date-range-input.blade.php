<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <label for="{{$field . 'start_week'}}">Start {{$label}}</label>
    <input type="number" min="1" max="52" name="{{$field . 'start_week'}}">

    <label for="{{$field . 'end_week'}}">Einde {{$label}}</label>
    <input type="number" min="1" max="52" name="{{$field . 'end_week'}}">
</div>
