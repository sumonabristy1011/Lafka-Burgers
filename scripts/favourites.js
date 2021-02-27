const burgerContainer = document.querySelector('#product-container');

burgerContainer.addEventListener('click', (e) => {
  if(e.target.tagName === 'path' || e.target.tagName === 'svg'){
    // We selected the Element
    let element;
    if(e.target.tagName === 'path'){
      element = e.target.parentElement.parentElement
    }
    else{
      element = e.target.parentElement
    }

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

    const favourites = localStorage.getItem('favourites')
    // Checking if there is data already in the localstorage
    // If there is no data then we will create a new data store named favourites
    if(!favourites){
      localStorage.setItem('favourites', JSON.stringify([productData]))
    }
    else{
      const favourites = JSON.parse(localStorage.getItem('favourites'));
      favourites.push(productData);
      localStorage.setItem('favourites', JSON.stringify(favourites))
    }
  }
})
