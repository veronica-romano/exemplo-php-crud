const exclusao = document.querySelectorAll('.exclusao');

        


    for (let i = 0; i < exclusao.length; i++) {
        exclusao.addEventListener('click', function(){
            confirm("Tem certeza?\nAperte OK ou Cancel.");
            let text;
            if (confirm("Tem certeza?") == true) {
                text = "OK!";
            } else {
                text = "Você cancelou!";
            }
        });
      }