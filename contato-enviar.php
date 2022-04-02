<?php

$nome = filter_input(INPUT_POST, 'nome');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $mensagem = filter_input(INPUT_POST, 'mensagem');
       
        
        
       //Compo E-mail
             $arquivo= 
          "===================================" ."\r\n"
          . "Solicitação de Orçamento" ."\r\n"
          . "===================================" ."\r\n"
          . "Nome: " . $nome ."\r\n"
          . "Telefone: " . $telefone ."\r\n"
          . "Email: "  . $email ."\r\n"
          . "Mensagem: " . $mensagem ."\r\n"
          . "===================================" ."\r\n";
          
            
      
       // emails para quem será enviado o formulário
       $emailenviar = "thiagoaaoliveira1989@gmail.com";
       $destino = $emailenviar;
       $assunto = "Contato pelo Formulario - Thatica";
     
     
 $headers = 'Return-Path: ' . $email . $nome;
 $headers .= 'Reply-To: ' . $email . $nome;
 $headers .= 'From: ' . '"=?' . $charset . '?B?' . base64_encode($nome) . '?=" <' . $email . '>' . "";
 $headers .= 'MIME-Version: 1.0' . "";
 $headers .= 'Content-Type: text/plain; charset="' . $charset . '"' . "";

$envio = mail($destino, $assunto, $arquivo, $headers, "-f$email");
    
       if(isset($envio)){
         echo '<div class="col s12 m12 l12 center alert-success green black-text " >
         <span>Mensagem Enviada</span>
         </div>';
       } else {
         echo '<div class="col s12 m12 l12 center alert-error red white-text " width="100px">
         <span>'.'Erro ao enviar mensagem</span>
         </div>';    
         }
         require_once('contato.php');
    
    
    ?>
