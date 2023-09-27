# Lab-XSS
Esté é um simples laboratório desenvolvido usando HTML, JavaScript, PHP e SQL, que é intencionalmente vulnerável a XSS.

Este repositório foi feito para armazenar o código usado no artigo: [XSS: definição, tipos e exploração](https://medium.com/@josianebarros/xss-definição-tipos-e-exploração-e74ef57de059)

# Requisitos
Ter o XAMPP instalado.

# Instalação
Para instalar esse projeto você pode clonar o repositório:

```
git clone https://github.com/JosianeBarros/Lab-XSS.git
```

É necessário ter um banco de dados com o nome `dados`, e dentro dele deve ter a tabela `Tabelacomentarios`, para cria-lá use:

```
CREATE TABLE Tabelacomentarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    comentarios VARCHAR(250) NOT NULL
)
```
