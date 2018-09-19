<!DOCTYPE html>
<html>
<body>

<h2 align ="center">Vizualizar Ata</h2>
<form action="/ata/salvar" method="post">

    <table style="width:20%" align ="center">
    <tr>
        <td>Número da ata</td>
        <td>Período letivo</td>
        <td>Situação</td>
    </tr>
    <tr>
        <td><input type="text" name="numeroata" size="20"></td>
         <td><input type="text" name="periodoletivo" size="20"></td>
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
        <td>Pontos discutidos</td>
    </tr>
    <tr>
        <td> <textarea name="Pontosdiscutidos" rows="4" cols="20"> </textarea></td>
    </tr>
    <tr>
        <td>Participantes</td>
    </tr>
    
    <tr>
        <td>        <table border="1" width="300" cellpadding="20">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Assinar" name="Assinar" /></td>
        <td><input type="reset" value="Cancelar" name="Cancelar" /> </td>
        <td><input type="submit" value="Retornar" name="Retornar" /> </td>
    </tr>
</table>


</form>
</body>
</html>
