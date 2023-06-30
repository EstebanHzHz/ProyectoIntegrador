<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <center>
    <div>
      <div class="header">
        <h1>Registro de usuarios</h1>
      </div>
      <div>
        <form
          action="formularios.html"
          method="get"
          name="frmnew"
          autocomplete="off"
        >
          <fieldset>
            <table>
              <tr>
                <td><label for="nombre">Nombre : </label></td>
                <td>
                  <input
                    type="text"
                    name="nombre"
                    id="nombre"
                    placeholder="Nombre completo"
                    required
                    minlength="10"
                    pattern="[a-zA-Z ]+"
                  />
                </td>
              </tr>
              <tr>
              <td><label for="email">Correo : </label></td>
                <td>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Correo..."
                    required
                  />
                </td>
              </tr>
              <tr>
                <td><label for="user">Usuario : </label></td>
                <td>
                  <input
                    type="text"
                    name="user"
                    id="user"
                    placeholder="Usuario"
                    required
                    minlength="5"
                    maxlength="10"
                  />
                </td>
              </tr>
              <tr>
                <td><label for="pass">Password : </label></td>
                <td>
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Password"
                    required
                    minlength="8"
                    maxlength="16"
                  />
                </td>
              </tr>
              <tr>
                <td><label for="pass2">Confirmar password : </label></td>
                <td>
                  <input
                    type="password"
                    name="pass2"
                    id="pass2"
                    placeholder="Confirmar password"
                    required
                  />
                </td>
              </tr>
              <tr>
              <tr>
                <td><label for="fchnac">Fecha de nacimiento</label></td>
                <td>
                  <input type="date" name="fchnac" id="fchnac" required />
                </td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" value="Registrar" /></td>
              </tr>
            </table>
          </fieldset>
        </form>
    </center>
  </body>
</html>