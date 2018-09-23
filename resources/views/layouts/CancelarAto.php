<!DOCTYPE html>
<html>
<body>

<h2 align ="center">Cancelar Ato</h2>
<form action="/ata/salvar" method="post">

    <table style="width:30%" align ="center">
    <tr>
        <td>Número do ato</td>
        <td>Período letivo</td>
        <td>Situação</td>
    </tr>
    <tr>
        <td><input type="text" name="numeroato" size="20"></td>
        <td><input type="text" name="períodoletivo" size="20"></td>
        <td><input type="text" name="situaçao" size="20"></td>
    </tr>
    <tr>
        <td>Responsável</td>        
        
        <td>Data Criação</td>
    </tr>
    <tr>
        <td><input type="text" name="responsavel" size="20"></td>
        
        <td><input type="date" name="datacriaçao" size="20"></td>
    </tr>
    <tr>
        <td>Título da ato</td>
    </tr>
    <tr>
        <td><textarea name="tituloato" rows="4" cols="20"> </textarea></td>
           
    </tr>
    <tr>
        <td>Motivo</td>
    </tr>
    <tr>
        <td> <textarea name="motivo" rows="4" cols="20"> </textarea></td>
    </tr>
    <tr>
        <td><input type="submit" value="Salvar" name="Salvar" /></td>
        <td><input type="reset" value="Desistir" name="Desitir" /></td>
    </tr>
</table>


</form>
</body>
</html>
