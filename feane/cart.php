<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/cart.css" />
  <title>سلة الشراء</title>
  <style>
    .shopping-cart {
      width: 80%;
      margin: 0 auto;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 15px;
    }

    .image img {
      width: 100px;
      height: 100px;
    }

    .description {
      flex: 1;
      padding: 0 15px;
    }

    .quantity {
      display: flex;
      align-items: center;
    }

    .quantity button {
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .quantity input {
      width: 40px;
      text-align: center;
      border: 1px solid #ccc;
      padding: 5px;
    }

    .total-price {
      font-weight: bold;
      color: #000;
    }

    .delete-btn {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="shopping-cart">
    <div class="title">سلة الشراء</div>

    <div id="cart-items"></div>
    <div id="total-price"></div>
  </div>

  <script>
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length > 0) {
      const cartItems = document.getElementById("cart-items");
      cartItems.innerHTML = "";
      let totalPrice = 0;

      cart.forEach((product, index) => {
        totalPrice += product.price * product.quantity;

        const itemDiv = document.createElement("div");
        itemDiv.classList.add("item");

        itemDiv.innerHTML = `
            <div class="buttons">
              <span class="delete-btn" onclick="removeItem(${index})">
                <img src="./images/delete-icn.svg" alt="delete" />
              </span>
            </div>

            <div class="image">
              <img src="${product.image}" alt="${product.name}" />
            </div>

            <div class="description">
              <h4>${product.name}</h4>
            </div>

            <div class="quantity">
              <button class="minus-btn" type="button" onclick="updateQuantity(${index}, -1)">
                <img src="./images/minus.svg" alt="minus" />
              </button>
              <input type="text" name="quantity" value="${
                product.quantity
              }" readonly />
              <button class="plus-btn" type="button" onclick="updateQuantity(${index}, 1)">
                <img src="./images/plus.svg" alt="plus" />
              </button>
            </div>

            <div class="total-price">${product.price * product.quantity} $</div>
          `;

        cartItems.appendChild(itemDiv);
      });

      document.getElementById(
        "total-price"
      ).innerHTML = `إجمالي السعر: ${totalPrice} $`;
    } else {
      document.getElementById("cart-items").innerHTML = "<p>سلتك فارغة.</p>";
    }

    function updateQuantity(index, change) {
      const product = cart[index];

      if (product.quantity + change > 0) {
        product.quantity += change;

        localStorage.setItem("cart", JSON.stringify(cart));

        location.reload();
      }
    }

    function removeItem(index) {
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      location.reload();
    }
  </script>
</body>

</html>