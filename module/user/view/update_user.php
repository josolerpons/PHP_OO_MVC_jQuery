<br>
<br>
<br>
<br><br><br>

<div id="contenido">
    <!-- <form autocomplete="on" method="post" name="update_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update"> -->
    <form method="post" name="update_user" id="update_user">

        <h1>Modificar usuario</h1>
        <table border='0'>
        <tr>
                <td>Id: </td>
                <td><input type="text" id="id" name="id" placeholder="id" value="<?php echo $user['id'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_id" class="error">
                        <?php
                            echo "$error_id";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            
            <tr>
                <td>Codprod: </td>
                <td><input type="text" id="codprod" name="codprod" placeholder="codprod" value="<?php echo $user['codprod'];?>"/></td>
                <td><font color="red">
                    <span id="error_codprod" class="error">
                        <?php
                            echo "$er";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name" name="name" placeholder="name" value="<?php echo $user['name'];?>"/></td>
                <td><font color="red">
                    <span id="error_name" class="error">
                        <?php
                            echo "$error_name";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Made in: </td>
                <td><input type="text" id="madein" name="madein" placeholder="madein" value="<?php echo $user['madein'];?>"/></td>
                <td><font color="red">
                    <span id="error_madein" class="error">
                        <?php
                            echo "$error_madein";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Tipo: </td>
                <td><input type="text" id= "tipo" name="tipo" placeholder="tipo" value="<?php echo $user['tipo'];?>"/></td>
                <td><font color="red">
                    <span id="error_tipo" class="error">
                        <?php
                            echo "$error_tipo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Restriccion edad: </td>
                <td>
                    <?php
                        if ($user['reed']==="+3"){
                    ?>
                        <!-- <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre" checked/>Hombre
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer"/>Mujer -->
                    <div class="4u 12u$(small)">
                    <input type="radio" id="reed" name="reed" placeholder="reed" value="+3" checked/>
                    <label for="reed" >+3</label>

                    <input type="radio" id="reed2" name="reed" placeholder="reed" value="+12"/>
                    <label for="reed2" >+12</label>

                    <input type="radio" id="reed3" name="reed" placeholder="reed" value="+18"/>
                    <label for="reed3" >+18</label>

                    </div>
                    <?php    
                        }else if ($user['reed']==="+12"){
                    ?>
                    <div class="4u 12u$(small)">

                    <input type="radio" id="reed" name="reed" placeholder="reed" value="+3"/>
                    <label for="reed" >+3</label>

                    <input type="radio" id="reed2" name="reed" placeholder="reed" value="+12" checked/>
                    <label for="reed2" >+12</label>

                    <input type="radio" id="reed3" name="reed" placeholder="reed" value="+18"/>
                    <label for="reed3" >+18</label>

                    </div>
                    <?php   
                        }else{
                    ?>
                    <div class="4u 12u$(small)">

                    <input type="radio" id="reed" name="reed" placeholder="reed" value="+3"/>
                    <label for="reed" >+3</label>

                    <input type="radio" id="reed2" name="reed" placeholder="reed" value="+12" />
                    <label for="reed" >+12</label>

                    <input type="radio" id="reed3" name="reed" placeholder="reed" value="+18" checked/>
                    <label for="reed3" >+18</label>

                    
                    </div>
                    <?php   
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_reed" class="error">
                        <?php
                            echo "$error_reed";
                        ?>
                    </span>
                </font></font></td>
            </tr>


            <tr>
                <td>Proveedores: </td>
                <?php
                    $afi=explode(":", $user['prov']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Europa", $afi);
                        if($busca_array){
                    ?>
                    <div class="6u 12u$(small)">

                        <input type="checkbox" id= "prov[]" name="prov[]" value="Europa" checked/>
                        <label for="prov[]" value="Europa">Europa</label>

                    </div>

                    <?php
                        }else{
                    ?>
                        <div class="6u 12u$(small)">

                        <input type="checkbox" id= "prov[]" name="prov[]" value="Europa"/>
                        <label for="prov[]" value="Europa">Europa</label>

                        </div>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Asia", $afi);
                        if($busca_array){
                    ?>
                        <div class="6u 12u$(small)">

                        <input type="checkbox" id= "prov2[]" name="prov[]" value="Asia" checked/>
                        <label for="prov2[]" value="Asia">Asia</label>

                        </div>
                    <?php
                        }else{
                    ?>
                        <div class="6u 12u$(small)">

                        <input type="checkbox" id= "prov2[]" name="prov[]" value="Asia"/>
                        <label for="prov2[]" value="Asia">Asia</label>

                        </div>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("America", $afi);
                        if($busca_array){
                    ?>
                        <div class="6u 12u$(small)">

                        <input type="checkbox" id= "prov3[]" name="prov[]" value="America" checked/>
                        <label for="prov3[]" value="America">America</label>

                    </div>
                    </td>
                    <?php
                        }else{
                    ?>
                    <div class="6u 12u$(small)">

                    <input type="checkbox" id= "prov3[]" name="prov[]" value="America"/>
                    <label for="prov3[]" value="America">America</label>

                    </div>
                    </td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_prov" class="error">
                        <?php
                            echo "$error_prov";
                        ?>
                    </span>
                </font></font></td>
            </tr>
     
                <!-- <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td> -->
            </tr>
        </table>
        <input name="Submit" type="button" value="Registrar" id="update" onclick="validateu()"/>

    </form>
</div>