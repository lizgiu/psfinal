const products = [
    {
      "id": 1,
      "name": "Product 1",
      "image": "product-1.jpg",
      "price": 19.99
    },
    {
      "id": 2,
      "name": "Product 2",
      "image": "product-2.jpg",
      "price": 29.99
    },
    {
      "id": 3,
      "name": "Product 3",
      "image": "product-3.jpg",
      "price": 39.99
    },
    {
      "id": 4,
      "name": "Product 4",
      "image": "product-4.jpg",
      "price": 49.99
    },
    {
      "id": 5,
      "name": "Product 5",
      "image": "product-5.jpg",
      "price": 59.99
    }
  ];
  
  const main = document.querySelector("main");
  
  for (let product of products) {
    const productDiv = document.createElement("div");
    productDiv.classList.add("product");
  
    const productImage = document.createElement("img");
    productImage.src = product.image;
    productDiv.appendChild(productImage);
  
    const productName = document.createElement("h3");
    productName.textContent = product.name;
    productDiv.appendChild(productName);
  
    const productPrice = document.createElement("p");
    productPrice.textContent = `$${product.price}`;
    productDiv.appendChild(productPrice);
  
    const productButton = document.createElement("button");
    productButton.textContent = "Add to Cart";
    productDiv.appendChild(productButton);
  
    main.appendChild(productDiv);
  }
  