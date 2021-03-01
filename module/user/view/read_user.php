<div id="contenido">
    <h1>Informacion del Producto</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Id: </td>
            <td>
                <?php
                    echo $user['id'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Codprod: </td>
            <td>
                <?php
                    echo $user['codprod'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>name: </td>
            <td>
                <?php
                    echo $user['name'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Madein: </td>
            <td>
                <?php
                    echo $user['madein'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $user['tipo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Restriccion edad: </td>
            <td>
                <?php
                    echo $user['reed'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Proveedores: </td>
            <td>
                <?php
                    echo $user['prov'];
                ?>
            </td>
        </tr>
        
<!--         
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    //echo $user['birthdate'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Edad: </td>
            <td>
                <?php
                    //echo $user['age'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Pais: </td>
            <td>
                <?php
                   // echo $user['country'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                    //echo $user['language'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Observaciones: </td>
            <td>
                <?php
                  //  echo $user['comment'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Aficiones: </td>
            <td>
                <?php
                    //echo $user['hobby'];
                ?>
            </td>
        </tr> -->
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>