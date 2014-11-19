
<table align = "center" border="2"   cellpadding="0"  cellspacing="1" width=70%>

    <th align="left"><font size=4 >Usuario: xxxxxxxxx xxxxxxxxxx ---------- Emprestimo de chave</th>


</table>


<table align = "center" border="2"    width=70% HEIGHT="85%">

    <tr>
        <td valign="top" width="20%">
            <table     cellpadding="0"  cellspacing="1"  >
                <tr height=70%><td></td></tr>
                <tr height=70%><td></td></tr>
                <tr height=70%><td></td></tr>
				<tr height=70%><td>GERENCIAR CHAVES</td></tr>
                <tr height=70%><td><a href ="../ocorrencia/ocorrenciaC.php?matricula=<?php echo $matricula?>">Emprestar</a></td></tr>
                <tr height=70%><td><a href ="../historico/historicoC.php?matricula=<?php echo $matricula?>">Historico</a></td></tr> 
                <tr height=70%><td><a href ="../relatorios/relatoriosC.php?matricula=<?php echo $matricula?>">Relatorios</a></td></tr>
               	<tr height=70%><td>GERENCIAR CHAVES</td></tr>
                <tr height=70%><td><a href ="../ocorrencia/ocorrenciaC.php?matricula=<?php echo $matricula?>">Emprestar</a></td></tr>
                <tr height=70%><td><a href ="../historico/historicoC.php?matricula=<?php echo $matricula?>">Historico</a></td></tr> 
                <tr height=70%><td><a href ="../relatorios/relatoriosC.php?matricula=<?php echo $matricula?>">Relatorios</a></td></tr>
				<tr height=70%><td><a href ="../relatorios/relatoriosC.php?matricula=<?php echo $matricula?>">Novo equipamento</a></td></tr>
                <tr height=70%><td><a href ="logoff.php">Sair</a></td></tr>
              


            </table>




        </td>
        <td   width="80%" >

            <table  align="LEFT"  cellpadding="0"  cellspacing="1"  >
                      <tr><td>Chave:<br><select>
                        <option value="lab 135">Laboaratorio 135</option>
						<option value="lab 147">Laboaratorio 147</option>
						<option value="DACOMP">DACOMP</option>
						<option value="DAMAT">DAMAT</option>
                    </SELECT>  </td> 
                      </tr>
					  <tr><td><br></td></tr>
			<tr>
			<td>Usuario:<input type="text" name="Uname">  </td> 
			<td>   </td>
					
			<td>Matricula:<input type="text" name="Umat">  </td> 
			
			
						</tr>
<tr><td><br></td>
<TD><input type="button"  value="Emprestar"></TD></tr>	  

            </table>

        </td>


    </tr>


</table>