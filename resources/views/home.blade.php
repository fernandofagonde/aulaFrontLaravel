<style>
    table, tr, td{
        border:1px solid #00ff00;
        border-collapse: collapse;
        padding:5px;
    }
</style>
<table>
    @foreach ($pessoas as $pessoa)
        <tr>
            <td>{{$pessoa['id']}} - {{ $pessoa['nome'] }}</td>  
            <td>{{ $pessoa['email'] }}</td>       
        </tr>
    @endforeach
</table>


<form action="/" method="POST">
    @csrf
    Nome: <input name="nome"><br />
    E-mail:<input name="email"><br/>
    <input type="submit" value="enviar">
</form>