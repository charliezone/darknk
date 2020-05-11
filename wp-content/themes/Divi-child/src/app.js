(jQuery)($ => {
    $(document).ready(() => {
        const pagRight = document.querySelector('.blog-section .pagination .alignright a'),
              pagLeft = document.querySelector('.blog-section .pagination .alignleft a'),
              pagination = document.querySelector('.blog-section .pagination');

              if(!pagRight && !pagLeft){
                pagination.style.display = 'none';
              }
    });
});