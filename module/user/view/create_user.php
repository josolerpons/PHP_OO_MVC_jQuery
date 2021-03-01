<br><br><br><br><br><br>

<div id="contenido">
    <!-- <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create"> -->
      
    <form method="post" name="alta_user" id="alta_user">
  <h1>Producto nuevo</h1>
        <table border='0'>
            <tr>
                <td>Codprod: </td>
                <td><input type="text" id="codprod" name="codprod" placeholder="codprod" value=""/></td>
                <td><font color="red">
                    <span id="error_codprod" class="error">
                        <?php
                            echo "$ep";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name" name="name" placeholder="name" value=""/></td>
                <td><font color="red">
                    <span id="error_name" class="error">
                        <?php
                            echo "$error_name";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Madein: </td>
                <td><input type="text" id="madein" name="madein" placeholder="madein" value=""/></td>
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
                <td><input type="text" id= "tipo" name="tipo" placeholder="tipo" value=""/></td>
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
                <div class="4u 12u$(small)">
											
                <td><input type="radio" id="reed" name="reed" placeholder="reed" value="+3"/>
                <label for="reed" >+3</label>

                    <input type="radio" id="reed2" name="reed" placeholder="reed" value="+12"/>
                    <label for="reed2" >+12</label>

                    <input type="radio" id="reed3" name="reed" placeholder="reed" value="+18"/>
                    <label for="reed3" >+18</label>

                    </td>
                    </div>
                <td><font color="red">
                    <span id="error_reed" class="reed">
                        <?php
                            echo "$error_reed";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Proveedores del producto: </td>
                <div class="6u 12u$(small)">
										
                <td><input type="checkbox" id= "prov[]" name="prov[]" placeholder= "prov" value="Europa"/>
                <label for="prov[]" value="Europa">Europa</label>

                    <input type="checkbox" id= "prov2[]" name="prov[]" placeholder= "prov" value="Asia"/>
                    <label for="prov2[]" value="Asia">Asia</label>

                    <input type="checkbox" id= "prov3[]" name="prov[]" placeholder= "prov" value="America"/>
                    <label for="prov3[]" value="America">America</label>
                    </td>
                    </div>
                <td><font color="red">
                    <span id="error_prov" class="error">
                        <?php
                            echo "$error_prov";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <!-- <tr>
                <td>Sexo: </td>
                <td><input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre"/>Hombre
                    <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer"/>Mujer</td>
                <td><font color="red">
                    <span id="error_sexo" class="error">
                        <?php
                           // echo "$error_sexo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                            //echo "$error_fecha_nacimiento";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Edad: </td>
                <td><input type="text" id="edad" name="edad" placeholder="edad" value=""/></td>
                <td><font color="red">
                    <span id="error_edad" class="error">
                        <?php
                            //echo "$error_edad";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Francia">Francia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                        <?php
                           // echo "$error_pais";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Idioma: </td>
                <td><select multiple size="3" id="idioma[]" name="idioma[]" placeholder="idioma">
                    <option value="Español">Español</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Portugues">Portugues</option>
                    <option value="Frances">Frances</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                     //       echo "$error_idioma";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                        <?php
                       //     echo "$error_observaciones";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Aficiones: </td>
                <td><input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Informatica"/>informatica
                    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Alimentacion"/>alimentacion
                    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Automovil"/>automovil</td>
                <td><font color="red">
                    <span id="error_aficion" class="error">
                        <?php
                         //   echo "$error_aficion";
                            ?>
                        </span>
                    </font></font></td>
                </tr>
                
            <tr> -->
                <!-- <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td> -->
            <!-- </tr> -->
        </table>
        <input name="Submit" type="button" value="Registrar" id="create" onclick="validate()"/>

    </form>
</div>