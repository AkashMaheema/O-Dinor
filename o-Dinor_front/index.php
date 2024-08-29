<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>O-Dinor</title>
  <link rel="stylesheet" href="css/homestyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  </head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="container1">
    <video autoplay loop muted plays-inline class="back-video">
      <source src="video/shoeclip.mp4" type="video/mp4" />
    </video>
    <section class="home" id="home">
      <div class="containt">
        <h1 class="anim">
          <pre>  <span>O</span>  <span>DINOR</span>        </pre>
        </h1>
        <h3>
          <pre></pre>
        </h3>
      </div>
    </section>
  </div>

  <section class="about" id="about">
    <div class="heading">
      <h1>About Us</h1>
    </div>
    <div class="tbl">
      <table>
        <tr>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td>
            <div class="card">
              <a href="women.php?gender=F">
                <img src="img/blog-01.jpg" alt="women new red dress" />
              </a>
              <h4>Women</h4>
              <h6></h6>
            </div>
          </td>
          <td>
            <div class="card">
              <a href="men.php?gender=M">
                <img src="img/32.jpg" alt="#" />
              </a>
              <h4>Men</h4>
              <h6></h6>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="card">
              <a href="shop.php?category=watches">
                <img src="img/33.jpg" alt="#" />
              </a>
              <h4>Watches</h4>
            </div>
          </td>
          <td>
            <div class="card">
              <a href="shop.php?category=Bags">
                <img src="img/35.jpg" alt="#" />
                <h4>Bags</h4>
              </a>
              <h6></h6>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </section>

  <div class="container">
    <div class="title">Product Overview</div>
    <div class="listProduct"></div>
  </div>
  <br>
  <br>
  <?php include 'footer.php'; ?>
  <script>
    const products = [{
        id: 1,
        name: "LD015 LOUNGE",
        price: 100,
        image: "img/18.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },
      {
        id: 2,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/19.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 3,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/20.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 4,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/21.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 5,
        name: "Product 2",
        price: 200,
        image: "img/22.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 6,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/23.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 7,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/24.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 8,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/25.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 9,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/9.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 10,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/10.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 11,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/11.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 12,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/12.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 13,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/13.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 14,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/14.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 15,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/15.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 16,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/17.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 17,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/18.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },
      {
        id: 18,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/15.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },

      {
        id: 19,
        name: "LD015 LOUNGE",
        price: 200,
        image: "img/16.png",
        description: "The Petit CD bracelet from the Dioriviera capsule collection is a sophisticated and on-trend piece. It is made of alternating CD initial links in gold-tone metal and multi-coloured lacquer. Pair it with other pieces from the Dioriviera capsule collection.",
      },
    ];

    // Simulate fetching data from a JSON file
    function fetchProducts() {
      return new Promise((resolve) => {
        setTimeout(() => {
          resolve(products);
        }, 1000); // Simulate a network delay
      });
    }

    // Add data product to HTML
    let listProduct = document.querySelector(".listProduct");

    function addDataToHTML(products) {
      products.forEach((product) => {
        let newProduct = document.createElement("a");
        newProduct.href = "./detail.html?id=" + product.id;
        newProduct.classList.add("item");
        newProduct.innerHTML = `
                    <img src="${product.image}">
                    <h2>${product.name}</h2>
                    <div class="price">${product.price}</div>
                `;
        listProduct.appendChild(newProduct);
      });
    }

    // Fetch products and add to HTML
    fetchProducts().then((data) => {
      addDataToHTML(data);
    });
  </script>
</body>

</html>