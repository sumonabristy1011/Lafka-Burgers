var product_menu = document.querySelectorAll('.product-category')
var product_container = document.querySelector('#product-container')


for(var i=0; i < product_menu.length; i++){
  product_menu[i].addEventListener('click', function(e){
    // Detecting the menu, Which one is selected
    var selected_menu = e.target.innerText.replace(' ', '');

    //To clear/reset the color before any menu is selected
    for(var k = 0 ; k<product_menu.length; k++){
      product_menu[k].style.color = '#fff';
      product_menu[k].style.backgroundColor = '#a5102e';
    }
    //Styling the selected menu -> background, font color
    e.target.style.color = '#f7c338';
    e.target.style.backgroundColor = '#550017';

    // Identifying the products from the product-data object
    var selected_products = products[selected_menu];

    // To clean the container before any dynamic render happens
    product_container.innerHTML = '';

    // Rendering the products
    for(var j=0; j<selected_products.length; j++){
      // Storing one of the product in a variable
      var product = selected_products[j];

      // Splitting the product price
      var price = product.price.split('.');

      //Inserting the products into the container
      product_container.insertAdjacentHTML('beforeend', `
        <div class="col-4">
          <div class="burger">
              <div class="burger_hero">
                <div class="burger_price">$${price[0]}
                    <span class="burger_price-subscript">.${price[1]}</span>
                </div>
                <img class="burger_image" src=${product.image} alt="" />
                <div class="burger_icon" data-type=${selected_menu} data-id=${product.id ? product.id : ''} ><i class="far fa-heart"></i></div>
              </div>
              <div class="burger_content">
                <h3 class="burger_title">${product.name}</h3>
                <p class="burger_details">${product.description}</p>
                <button class="burger_order" data-id=${product.id ? product.id : ''} data-type=${selected_menu}>Order Now</button>
              </div>
          </div>
        </div>
      `)
    }
    // products[selected_menu]
    // product_container.
  })
}


