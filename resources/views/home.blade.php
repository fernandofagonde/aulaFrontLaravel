
@section('content_header')
    @foreach ($pessoas as $pessoa)
        <tr>
            <td>{{ $pessoa['nome'] }}</td>        
        </tr>
    @endforeach
@stop