$('.caixa').find('.botao').on('click', function(event){
    //$(this).parent().find('p').remove();
    $(this).parent().toggleClass('azul');
    //event.stopPropagation();
    $(this).parent().toggleClass('tamanho');
    event.preventDefault();
    //var elemento = $(this).parent().data('nome');
    //$(this).parent().find('p').append(elemento);
    //$(this).closest("#caixas").find(".caixaAviso").toggleClass('popup');
    //$(".caixaAlerta").find('.sim').on('click', function(){
        //$(this).parent().find('li').clear();
    //});

    //$('#caixas').on('click', function(){
    //    alert('BATATA DOCE E FRANGO');

    //})

    });
