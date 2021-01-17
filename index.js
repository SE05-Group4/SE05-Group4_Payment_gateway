$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })


    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })


    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    let $total_price =  $("#amount");
    // let $input = $(".qty .qty_input");

    // Init data
    $deal_price.text($deal_price.data('total').toLocaleString('it-IT', {style : 'currency', currency : 'VND'}));
    $total_price.val($deal_price.data('total'))

    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text((item_price * $input.val()).toLocaleString('it-IT', {style : 'currency', currency : 'VND'}));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.data('total')) + parseInt(item_price); // Thuộc tính data- của html thường đc dùng để lưu giá trị chuẩn
                    $deal_price.data('total', subtotal)


                    $deal_price.text(subtotal.toLocaleString('it-IT', {style : 'currency', currency : 'VND'}));
                    $total_price.val(subtotal)
                }

            }}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text((item_price * $input.val()).toLocaleString('it-IT', {style : 'currency', currency : 'VND'}));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.data('total')) - parseInt(item_price);
                    $deal_price.data('total', subtotal)

                    $deal_price.text(subtotal.toLocaleString('it-IT', {style : 'currency', currency : 'VND'}));
                    $total_price.val(subtotal)
                }

            }}); // closing ajax request
    }); // closing qty down button


});