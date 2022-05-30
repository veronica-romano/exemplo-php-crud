//Acessando todos os links com a classe excluir
const links = document.querySelectorAll('.exclusao');
console.log(links);

for(let i = 0; i < links.length; i++){
    links[i].addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm('Deseja mesmo excluir?');
        if (resposta) {
            location.href = links[id].getAttribute('href');
        }
    });
}

