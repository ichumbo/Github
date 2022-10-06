<!--C / C++--> 

Código fonte -> Código executável (específico para o sistema operacional) -> Sistema Operacional -> Hardware

<!--PHP, Python, JavaScript-->

Código fonte -> Interpretador (específico para o sistema operacional) -> Sistema Operacional -> Hardware

<!--Java, C#-->

Bytecode (código precompilado) -> Máq. virtual (específico para o sistema operacional) -> Sistema Operacional -> Hardware

-> - serve para indicar para onde está indo 

a <- 32  ("a" recebe 32)

: - serve para indicar o tipo 

a : inteiro 

*exercicio de fixação*



VAR 
produto1 -> "Computador"

produto2 -> "TV"

preco1 -> 2100.5

preco2 -> 1830.0 

idade -> 30 

codigo -> 5291

genero -> "F"

CODIGO

Produtos:
escraval("O produto" produto1 "custa R$" preco1:6)
escreval("O produtro" produto2 "custa R$" preco2:6)

escreval("Codigo="" codigo)

escreva("Dados da pessoa: genero" genero "e" idade" idade)

<!--PROCESSAMENTOS DE DADOS-->

-> Comando de atribuição

Sintaxe: 

<variavel> <- <expressão> (recebe)

OBS: não pode botar um variavel "real" pra receber algo de uma variavel "inteira"

<!--EXEMPLO-->

nome1, nome2 : caractere
idade1, idade2 : inteiro 
media : real 

escreval("Dados da primeira pessoa:")
escreva("Nome: ")
leia(nome1)
escreva("Idade: ")
leia(idade1)

escreval("Dados da segunda pessoa:")
escreva("Nome: ")
leia(nome2)
escreva("Idade: ")
leia(idade2)

media <- (idade1 + idade2) / 2

escreval("A idade media de ", nome1, " é ", nome2, " eh de ", media, " anos ")

<!--PROBLEMA SOMA-->

valorx : inteiro
valory : inteiro
soma : inteiro 

escreval("Digite o valor de X: ")
leia(valorx)
escreval("Digite o valor de Y: ")
leia(valory)

soma <- valorx + valory

escrevaL("SOMA = ", soma)

<!--PROBLEMA TROCO-->

 
quantidade : inteiro
dinheiro, troco, preço_produto, cobrar: real 

escraval("Preço unitário do produto: ")
leia(preço_produto)
escreval("Quantidade comprada: ")
leia(quantidade)
escreval("Dinheiro recebido: ")
leia(dinheiro)

cobrar <- preço * quantidade 
troco <- dinheiro - cobrar 

escreva("TROCO =", troco)

<!--PROBLEMA PAGAMENTO-->

nome : caractere
valor_horas : real 
horas_trabalhadas : inteiro 
pagamento : real 

escreval("Nome: ")
leia(nome)
escreval("Valor por hora: ")
leia(valor_horas)
escraval("Horas trabalhadas: ")
leia(horas_trabalhadas)

pagamento<- horas_trabalhadas * valor_horas

escreva("O pagamento para", nome, "deve ser", pagamento)

<!--PROBLEMA PAGAMENTO-->


distancia_percorrida : inteiro 
combustivel_gasto, consumo_medio : real

escraval("Distancia percorrida: ")
leia(distancia_percorrida)
escraval("Combustível gasto: ")
leia(combustivel_gasto)

consumo_medio <- distancia_percorrida / combustivel_gasto

<!--OPERADORES-->

e - todas condiçoes devem ser verdadeiras!

ou - uma ou outra condição deve ser verdadeira

<!--ESTRUTURA CONDICIONAL--> 

PERMITE DEFINIR QUE UM CERTO bloco de comandos SEMENTE SERÁ EXECUTADO DEPENDENDO DE UMA condição 

-> Sintaxe da estrutura condicional 

[Simples:] 

se <condição> entao
    <comando 1>
    <comando 2> 
fimse

exemplo: 

x  : inteiro 

x <- 5

escreval("Bom dia")

se x > 0 entao 
    escreval("Boa Tarde")
fimse 

escreval("Boa noite")


[Composta:] 

- REGRA: 

V: executa o bloco de comandos
F: pula o bloco de comandos

se <condição> entao
    <comando 1>
    <comando 2> 
senao
    <comando 1>
    <comando 2> 
fimse

exemplo:

escreva("Digite uam hora do dia: ")
leia(hora)

se hora < 12 entao 
    escreval("Boa dia") 
fimse 

se (hora >= 12) e (hora < 18) entao 
    escreval("Boa tarde") 
fimse 

se hora > 18 entao 
    escreval("Boa noite") 
fimse 


exemplo 2 [melhorado]:

escreva("Digite uam hora do dia: ")
leia(hora)

se hora < 12 entao 
    escreval("Boa dia") 
senao
    se (hora >= 12) e (hora < 18) entao 
        escreval("Boa tarde")  
    senao
        escreval("Boa noite")   
    fimse

fimse

