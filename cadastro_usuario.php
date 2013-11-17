    <!DOCTYPE html>
    <html>
    <head>
    <title>Cadastro de usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>     
  <table style="width: 625px;" border="0">

    <tbody><tr>

      <td width="69">Nome:</td>

      <td width="546"><input id="nome" maxlength="60" name="nome" size="70" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Email:</td>

      <td><input id="email" maxlength="60" name="email" size="70" type="text" />

      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Sexo:</td>

      <td><input checked="checked" name="sexo" type="radio" value="Masculino" />

        Masculino 

        <input name="sexo" type="radio" value="Feminino" />

        Feminino <span class="style1">*</span> </td>

    </tr>

    <tr>

      <td>DDD:</td>

      <td><input id="ddd" maxlength="2" name="ddd" size="4" type="text" />

      Telefone:

        <input id="telefone" name="telefone" type="text" />

        <span class="style3">Apenas números</span> </td>

    </tr>

    <tr>

      <td>Endereço:</td>

      <td><input id="endereco" maxlength="70" name="endereco" size="70" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Cidade:</td>

      <td><input id="cidade" maxlength="20" name="cidade" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Estado:</td>

      <td><select id="estado" name="estado">

        <option>Selecione...</option>

        <option value="AC">AC</option>

        <option value="AL">AL</option>

        <option value="AP">AP</option>

        <option value="AM">AM</option>

        <option value="BA">BA</option>

        <option value="CE">CE</option>

        <option value="ES">ES</option>

        <option value="DF">DF</option>

        <option value="MA">MA</option>

        <option value="MT">MT</option>

        <option value="MS">MS</option>

        <option value="MG">MG</option>

        <option value="PA">PA</option>

        <option value="PB">PB</option>

        <option value="PR">PR</option>

        <option value="PE">PE</option>

        <option value="PI">PI</option>

        <option value="RJ">RJ</option>

        <option value="RN">RN</option>

        <option value="RS">RS</option>

        <option value="RO">RO</option>

        <option value="RR">RR</option>

        <option value="SC">SC</option>

        <option value="SP">SP</option>

        <option value="SE">SE</option>

        <option value="TO">TO</option>

          </select>

        <span class="style1">*      </span></td>

    </tr>

    <tr>

      <td>Bairro:</td>

      <td><input id="bairro" maxlength="20" name="bairro" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>País:</td>

      <td><input id="pais" maxlength="20" name="pais" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Login:</td>

      <td><input id="login" maxlength="12" name="login" type="text" />

        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td>Senha:</td>

      <td><input id="senha" maxlength="12" name="senha" type="password" />

          <span class="style1">*</span></td>

    </tr>

    <tr>

      <td colspan="2"><input id="news" checked="checked" name="news" type="checkbox" value="ATIVO" />

Desejo receber novidades e informações sobre o conteúdo deste site. </td>

    </tr>

    <tr>

      <td colspan="2"><p>

        <input id="cadastrar" name="cadastrar" type="submit" value="Cadastrar" /> 

        



          <input id="limpar" name="limpar" type="reset" value="Limpar" />

          



          <span class="style1">* Campos com * são obrigatórios!          </span></p>

      <p> </p></td>

    </tr>

  </tbody></table>

</form>  
  
    
    </body>
    </html>