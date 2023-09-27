<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS Refletido</title>
</head>
<body onload="imprimirMensagem()">
  <form action="" method="get">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
    <input type="submit" value="Enviar">
  </form>

  <p id="mensagem"></p>

  <script>
    function imprimirMensagem(){
      let url = new URLSearchParams(window.location.search);
      let valorNome = url.get("nome");
      document.getElementById("mensagem").innerHTML = valorNome;
    }
  </script>
</body>
</html>