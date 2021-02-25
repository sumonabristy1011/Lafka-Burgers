const burgerContainer = document.querySelector('#product-container');

burgerContainer.addEventListener('click', (e) => {
  if(e.target.tagName === 'path' || e.target.tagName === 'svg'){
    // We selected the Element
    let element;
    if(e.target.tagName === 'path'){
      element = e.target.parentElement.parentElement
    }
    element = e.target.parentElement

    const dataset = element.dataset;

    // We find the data according to the element

    const productCollection = products[dataset.type];
    let productData;
    for (let j = 0; j < productCollection.length; j++) {
      const product = productCollection[j];
      if(product.id == dataset.id){
        productData = product
      }
    }

    // localStorage.setItem('favourites', )

    console.log(productData)
  }
})
