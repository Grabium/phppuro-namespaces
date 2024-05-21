<html>
  <header></header>
  <body>
    <h1>NameSpaces</h1>
    <p>
      <pre>
        
        Para inlcuir um arquivo em outro é necessário o require ou include.
        
        <em>
          require_once 'src/Controllers/TesteController.php';
          require_once 'src/Views/TesteController.php';  //classe com mesmo nome que acima mas em pasta diferente.
          require_once 'src/Controllers/TesteSecondController';
          require_once 'src/Views/TesteView';
        </em>
        
        Os Namespaces servem apenas para organizar a questão da duplicidade de classes já inseridas com os includes e requires.
        Os requires e includes deveriam ser inseridos em cada arquivo que usar o "use":
        
        <em>
          require_once 'src/Controllers/TesteController.php';
          require_once 'src/Views/TesteController.php';  //classe com mesmo nome que acima mas em pasta diferente.
          require_once 'src/Controllers/TesteSecondController';
          require_once 'src/Views/TesteView';
          
          use Gabriel\PHP_Puro_Namespaces\Controllers\TesteController as T;
          use Gabriel\PHP_Puro_Namespaces\Views\TesteController as TV; //classe com mesmo nome que acima mas em pasta diferente.
          use Gabriel\PHP_Puro_Namespaces\Controllers\TesteSecondController as TSecond;
          use Gabriel\PHP_Puro_Namespaces\Views\TesteView as V;
        </em>
        
        Temos um problema. Todos os arquivos que fazem o use teriam que ter a mesa quantidade de requires se não fosse o autoload.php:

        <em>
          namespace Gabriel\PHP_Puro_Namespaces\Controllers;

          require 'Views/TesteView.php';
          use Gabriel\PHP_Puro_Namespaces\Views\TesteView as V;

          class TesteSecondController 
          {  
          ...
        </em>

        Com o autoload.php, é necessário fazer um único require no index.php:
        
        <em>
          require_once 'autoload.php';  
          ...
        </em>

        Toda vez que invocar um USE ... o arquivo será buscado primeiro através do namespace indicado no use. E, finalmente, a classe poderá ser acessada.

        <em>

          spl_autoload_register(function ($nomeCompletoDaClasse){
            $caminhoCompleto = str_replace('Gabriel\\PHP_Puro_Namespaces', 'src', $nomeCompletoDaClasse);
            $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto).'.php';
            if(file_exists($caminhoDoArquivo)) {
              require_once $caminhoDoArquivo;
            }

          });

          print '...completed'.PHP_EOL;
          // DIRECTORY_SEPARATOR é o separadorde diretório relacionado ao sistema:

        </em>
        
      </pre>
    </p>
  </body>


  
</html>