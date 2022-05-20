const exclusao = document.querySelector('.exclusao');
    exclusao.addEventListener('click', function(){
        confirm("Tem certeza?\nAperte OK ou Cancel.");
        let text;
        if (confirm("Tem certeza?") == true) {
            text = "OK!";
        } else {
            text = "Você cancelou!";
        }
    });
        


