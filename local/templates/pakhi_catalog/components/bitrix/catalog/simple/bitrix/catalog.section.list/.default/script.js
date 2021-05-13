$(function(){

    $('.add2cart').submit(function(){
        var $this = $(this),
            data = $this.serialize(),
            loader = $this.closest('.item-product').find('.loader'),
            btn = $this.find('button');

        $.ajax({
            //url: '',
            type: 'POST',
            data: data,
            beforeSend: function(){
                btn.attr('disabled', true);
                loader.fadeIn();
            },
            success: function(res){
                loader.delay(500).fadeOut(300, function(){
                    btn.attr('disabled', false);
                    swal(res.MESSAGE);
                });
            },
            error: function(){
                alert('Error!');
            }
        });

        return false;
    });

    $('.color-props li').click(function(){
        var id = $(this).data('id'),
            value = $(this).data('value'),
            price = $(this).data('price');
        $('.color-props li').removeClass('active-prop');
        $(this).addClass('active-prop');
        $(this).closest('.price').find('.price-value').text(price + ' (' + value + ')');
        $(this).parent().next().find('.id-offer').val(id);
    });

});