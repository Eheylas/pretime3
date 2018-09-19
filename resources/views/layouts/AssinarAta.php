<!DOCTYPE html>
<html>
<body>

<h2 align ="center">Assinar ata</h2>
<form action="/ata/salvar" method="post">

    <table style="width:30%" align ="center">
    <tr>
        <td>Número do ata</td>
        <td>Período letivo</td>
        <td>Situação</td>
    </tr>
    <tr>
        <td><input type="text" name="numeroata" size="20"></td>
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
        <td>Título da ata</td>
    </tr>
    <tr>
        <td><textarea name="tituloata" rows="4" cols="20"> </textarea></td>
           
    </tr>
    <tr>
        <td> Participante</td>
        <td> Senha</td>
    </tr>
    <tr>
        <td><input type="text" name="participante" size="20"></td>
        <td><input type="password" name="senhaparticipante" size="10"> </td>
    </tr>
    <tr>
        <td><input type="submit" value="Salvar" name="Salvar" /></td>
        <td><input type="reset" value="Desistir" name="Desistir" /></td>
    </tr>
</table>


</form>
</body>
</html>
