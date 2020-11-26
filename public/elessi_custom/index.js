
    $(document).ready(function() {
      //for chose menu
      var url = window.location.pathname;
      console.log(url.indexOf('/category/products/show'));
     
      // if(url.indexOf('/') !== -1){
      //   console.log($('.nav_parent').first().addClass('active'));
      //   console.log('haha')
      // }
      if(url.indexOf('/') !== -1){
        $('.nav-header-content li:eq(0)').addClass('active');
        // console.log('haha123')
      }
       if(url.indexOf('/category/giay') !== -1){
        $('.nav-header-content .nav_parent').siblings().removeClass('active');

        $('.nav-header-content .nav_parent:eq(1)').addClass('active');
      }
      if(url.indexOf('/category/quan-ao') !== -1){
        $('.nav-header-content .nav_parent').siblings().removeClass('active');

     $('.nav-header-content .nav_parent:eq(2)').addClass('active');
      }
      if(url.indexOf('/products/show') !== -1){
           $('.nav-header-content .nav_parent').siblings().removeClass('active');

          $('.nav-header-content .nav_parent:eq(3)').addClass('active');
      }
      // var $slag = true; 
      // if($slag){
      //   $('.nav_parent').addClass('active');
      // }
     
     
      

     

      function cartDelete(event) {
        event.preventDefault();
        let urlDelete = $('.cart_wrapper').data('url');
        let id =$(this).data('id');

        $.ajax({
          type: 'GET',
          url: urlDelete,
          data:{
            id: id,
            
          },
          success: function(data){
            if(data.code === 200){
              $('.cart_wrapper').html(data.cart_component);
             
            }
          },
          error: function(){}
        })

      }

      //change price giỏ hàng
      function cartUpdate(event){
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id =$(this).data('id');
        let quantity = $(this).parents('tr').find('input.quantity').val();
        let this1 = $(this);
        // this1.parents('table')
        // .append(
        //   $('<div class="alert alert-success"><strong>Success!</strong> Indicaates a successful or positive action.</div>')
        // );
        $.ajax({
          type: 'GET',
          url: urlUpdateCart,
          data:{
            id: id,
            quantity: quantity
          },
          success: function(data){
            if(data.code === 200){
              $('.cart_wrapper').html(data.cart_component);
              console.log(this1.parent());
              this1.parents('table')
              .append(
                $('<div class="alert alert-success"><strong>Success!</strong> Indicaates a successful or positive action.</div>')
              );
              
              
            }
          },
          error: function(){}
        })
      }

      $(function(){
        $(document).on('click', '.cart_update', cartUpdate);
        $(document).on('click', '.cart_delete', cartDelete);

      })

      //end change price giỏ hàng

     
      //add to cart
      function addToCart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        let idToast = $(this).data('id');
        let this1 = $(this);
        $.ajax({
          type: "GET",
          url: urlCart,
          dataType: 'json',
          success: function(data){
            if(data.code === 200){
              // console.log( $('.toast'));
              
                $('.toast').toast('show');
              
              // console.log(this1.parents('.trendy-tab-block-wrap'))
              // this1.parents('.trendy-tab-block-wrap').append(
              //   '<div class="toast"><div class="toast-header">success</div><div class="toast-body">Some text inside the</div></div>'
              // );
              // alert('Thêm Sản phẩm Thành công');
            }
          },
          error: function(data){

          }
        })
    }

    $(function(){
        $('.add_to_cart').on('click', addToCart);
    })
    //end add to cart


        // var owl = $('.owl-carousel');
        // owl.owlCarousel({
        //   items:3,
        //   loop:true,
        //   margin:10,
        //   autoplay:true,
        //   autoplayTimeout:3000,
        //   autoplayHoverPause:true
        // });
        // 
        //cho khối blog
        $('.owl-one').owlCarousel({
    
          loop: true,
          margin: 10,
          autoplay:true,
          autoplayTimeout:3000,
          responsiveClass: true,
          nav :false,
          responsive: {
            0: {
              items: 1,
      //        nav: true
            },
            849: {
              items: 2,
     //         nav: false
            },
            1129: {
              items: 3,
              // nav: true,
              loop: false,
              margin: 20
            }
          }
        })
         //cho khối thương hiệu
      $('.owl-two').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:3
            },
            900:{
                items:4
            },
    
        }
    
    })
    
      //cho khối header
       $('.owl-three').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        autoplay:true,
        smartSpeed:800,
        dots:false,
        
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
    
            },
            1000:{
                items:2
            }
        }
        })

        //sản phẩm recommend
        $('.owl-four').owlCarousel({
          loop:true,
          margin:10,
          // autoplay:true,
          smartSpeed:800,
          
          responsive:{
              0:{
                  items:2
              },
              600:{
                  items:3
      
              },
              1000:{
                  items:4
              }
          }
          })
    
    
      })
  

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("trendy-tab-block");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tit-tab-item");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" tit-active", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " tit-active";
  }
  
  // $('.owl-three').owlCarousel({
  //       autoWidth:true,
  //       loop: true,
  //       // margin: 10,
  //       // autoplay:true,
  //       // autoplayTimeout:5000,
  //       responsiveClass: true,
  //       nav :false,
  //       items:1
  //     })
  
 