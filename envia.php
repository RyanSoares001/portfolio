<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Coletar e sanitizar os dados do formulário
                    $nome = htmlspecialchars($_POST['nome']);
                    $email = htmlspecialchars($_POST['email']);
                    $telefone = htmlspecialchars($_POST['telefone']);
                    $mensagem = htmlspecialchars($_POST['mensagem']);

                    // Endereço de e-mail do destinatário
                    $para = "ryandeus10@gmail.com";
                    $assunto = "Oportunidade de estágio";

                    // Construção do corpo do e-mail
                    $corpo = "Nome: " . $nome . "\n" .
                             "Email: " . $email . "\n" .
                             "Telefone: " . $telefone . "\n" .
                             "Mensagem: " . $mensagem;

                    // Construção dos cabeçalhos
                    $cabeca = "From: " . $email . "\r\n" .
                              "Reply-To: " . $email . "\r\n" .
                              "X-Mailer: PHP/" . phpversion();

                    // Envio do e-mail
                    if (mail($para, $assunto, $corpo, $cabeca)) {
                        echo "<p>Email enviado com sucesso!</p>";
                    } else {
                        echo "<p>Houve um erro ao enviar o email!</p>";
                    }
                }
                ?>