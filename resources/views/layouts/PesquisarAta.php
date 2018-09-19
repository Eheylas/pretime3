<!DOCTYPE html>
<html>
<body>

<h2 align ="center">Pesquisar ata</h2>
<form action="/ata/salvar" method="post">

    <table style="width:30%" align ="center">
    <tr>
        <td>Número da ata</td>
        <td>Período letivo</td>
        <td>Situação</td>
    </tr>
    <tr>
        <td><input type="text" name="numeroata" size="20"></td>
        <td><select name="períodoletivo" ></select></td>
        <td><select name="situaçao" ></select></td>
    </tr>
    <tr>
        <td>Responsável</td>        
   
    </tr>
    <tr>
        <td><input type="text" name="responsavel" size="20"></td>
     </tr>
    <tr>
        <td>Título da ata</td>
    </tr>
    <tr>
        <td><textarea name="tituloata" rows="4" cols="20"> </textarea></td>
    </tr>
    <tr>
        <td><input type="submit" value="Pesquisar" name="Pesquisar" /></td>
        <td><input type="submit" value="Criar" name="Criar" /></td>
    </tr>
    <tr>
        <td>    <table border="1" width="30%" cellpadding="20">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Período letivo</th>
                        <th>Titulo</th>
                        <th>Responsável</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>


</form>
</body>
</html>
