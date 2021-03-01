<br>
<br>
<br>
<br>
<br><br>
<br>
<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE PRODUCTOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table id="table_crud">
    		    <thead>
                <tr>
                    <td width=125><b>ID</b></th>
                    <td width=125><b>Codprod</b></th>
                    <td width=125><b>Name</b></th>
                    <td width=125><b>Madein</b></th>
                    <td width=125><b>Tipo</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['id'] . '</td>';
                    	   	echo '<td width=125>'. $row['codprod'] . '</td>';
                               echo '<td width=125>'. $row['name'] . '</td>';
                               echo '<td width=125>'. $row['madein'] . '</td>';
                               echo '<td width=125>'. $row['tipo'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	// echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['id'].'">Read</a>';
                             	   	
                    	    print ("<div class='user' id='".$row['id']."'>Read</div>");  //READ
                    	   	echo '<a  class="button special" href="index.php?page=controller_user&op=update&id='.$row['id'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a  class="button special" href="index.php?page=controller_user&op=delete&id='.$row['id'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
                </tbody>
            </table>

            <p><a href="index.php?page=controller_user&op=deleteall"><img src="view/img/delete.png"></a></p>
    	</div>
    </div>
</div>

<!-- <section id="user_modal">
    <div id="details_user" hidden>
        <div id="details">
            <div id="container">
                CodProd: <div id="codprod"></div></br>
                name: <div id="name"></div></br>
                madein: <div id="madein"></div></br>
                tipo: <div id="tipo"></div></br>
                Rest. Edad: <div id="reed"></div></br>
                prov: <div id="prov"></div></br>
             
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="user_modal"> -->
<div id="modal_content">
</div>
<!-- </section> -->