<h1>user page</h1>
@include ('inner')

@foreach ($users as $item)
<h3>{{$item}}</h3>
@endforeach


<script>
    var data=@json($usrs);
    console.warn(data[0])
</script>