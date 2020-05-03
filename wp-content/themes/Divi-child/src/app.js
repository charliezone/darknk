(jQuery)($ => {
    $(document).ready(() => {
        let cart = document.querySelector('.wpmenucart-display-standard .cartcontents');
        if(cart){
            cart.textContent = cart.textContent.match(/\d+/g)[0];
            cart.style.visibility = 'visible';
        }

        $( document.body ).on( 'adding_to_cart added_to_cart removed_from_cart updated_wc_div ', () => {
            cart = document.querySelector('.wpmenucart-display-standard .cartcontents');
            if(cart){
                cart.textContent = cart.textContent.match(/\d+/g)[0];
                cart.style.visibility = 'visible';
            }
        });

        const pagRight = document.querySelector('.blog-section .pagination .alignright a'),
              pagLeft = document.querySelector('.blog-section .pagination .alignleft a'),
              pagination = document.querySelector('.blog-section .pagination');

              if(!pagRight && !pagLeft){
                pagination.style.display = 'none';
              }
    });
});