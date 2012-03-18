<?php
include_once('models/Television.php');

$tv = new Television();
$tv->turnOn();
// Resultado: Turning on the television.

$reflectionClass = new ReflectionClass('Television');
// Resgata o nome da classe
$className = $reflectionClass->getName();
// Resgata as interfaces que a classe implementa
$interfaces = $reflectionClass->getInterfaces();

// Resgatando uma propriedade da classe, objeto ReflectionProperty
$typeProperty = $reflectionClass->getProperty('displayType');
// Alterando a acessibilidade/visibilidade da propriedade
$typeProperty->setAccessible(true);
// Alterando o valor da propriedade em um determinado objeto($tv)
$typeProperty->setValue($tv, 'LED');

echo $tv->getDisplayType();
// Resultado: LED

// Resgatando os métodos da classe
$methods = $reflectionClass->getMethods();
// Verifica a quantidade de métodos
$methodsQtd = count($methods);

echo "{$className} has {$methodsQtd} methods.";
// Resultado: Television has 8 methods.

// Resgatando o método changeChannel
$changeChannelMethod = $reflectionClass->getMethod('changeChannel');
// Resgatando os parâmetros do método changeChannel
$parameters = $changeChannelMethod->getParameters();
// Resgatando os comentários/documentação do método
$docComment = $changeChannelMethod->getDocComment();

// Executando o método de um determinado objeto($tv)
$changeChannelMethod->invoke($tv, 6);

$tv->channelInfo();
// Resultado: You are watching channel 6.
$tv->turnOff();
// Resultado: Turning off the television.
?>