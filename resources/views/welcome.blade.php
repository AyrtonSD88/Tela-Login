<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tela Login</title>

        <style>

          html {
            background-color: #1275a8;
          }

          body {
            font-family: "Poppins", sans-serif;
            height: 100%;
          }

          #fundo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
          }
          
          #caixaform {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: center;
            padding: 30px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
          }

          input[type=button], input[type=submit], input[type=reset]  {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
          }

          input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
}
        </style>
    </head>

    <body>
      <div id="fundo">
        <div id="caixaform">
          <fundo>
          <form>
            <input type="text" id="Login" name="Login" placeholder=" Digite seu e-mail ">
            <input type="text" id="Senha" name="Senha" placeholder=" Digite sua senha ">
            <input type="submit" value="Log in">
          </form>
          </fundo>
        </div>
      </div>
    </body>
</html>