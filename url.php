<?php

/*
Dada uma URL, desenvolva um programa que indique se a URL é válida ou não e, caso seja válida, retorne as suas partes constituintes.
Exemplos:
Entrada: http://www.google.com/mail/user=fulano
Saída:
protocolo: http
host: www
domínio: google.com
path: mail
parâmetros: user=fulano
Entrada: ssh://fulano%senha@git.com/
Saída:
protocolo: ssh
usuário: fulano
senha: senha
dominio: git.com
*/

$url = "https://www.opservices.com.br";
preg_match("/[^:]*/",$url,$protocol);

preg_match("/w+/", $url, $host);

preg_match("/((\.)+[\w]+)+/", $url, $dominio);



print "protocol: " . $protocol[0] . PHP_EOL; 
print "host: " . $host[0] . PHP_EOL;
print "dominio: " . $dominio[0]. PHP_EOL;





