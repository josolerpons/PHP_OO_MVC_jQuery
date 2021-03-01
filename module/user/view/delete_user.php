<br><br><br><br>
<div id="contenido">
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_user&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Desea seguro borrar al producto <?php echo $user['codprod']; ?>?</h3></td>
                
            </tr>

            <!-- <?php
                   // echo $user['codprod'];
                ?> -->
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_user&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>