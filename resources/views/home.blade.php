<table>
    @foreach ($pessoas as $pessoa)

        <tr>
            <td>{{ $pessoa['nome'] }}</td>        
        </tr>
    @endforeach
</table>