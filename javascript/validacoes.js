function valida_envia(){
    //valido o nome
    if (document.form.nome.value.length==0){
       alert("Tem que escrever seu nome")
       document.form.nome.focus()
       return 0;
    }

    //o formulário se envia
    alert("Dados alterados com sucesso");
    document.form.submit();
} 