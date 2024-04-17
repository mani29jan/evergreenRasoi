<html>
<head>
  <link rel="stylesheet" href="../css/stylesheet.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/df9eb6e63a.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="all-content">
<div>
  <p class="delivery-text">Free Delivery on All Orders Over $50 within San Jose</p>
</div>
<div id="home" class="header">

<div class="dropdown">
  <input onclick="menuDropDown()" class="dropbtn" type="image" src="../img/hamburger.png" />
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">Chef</a>
    <a href="#menu">Menu</a>
    <a href="#sides">Sides</a>
    <a href="#contact">Contact</a>
  </div>
</div>

<div class="logo">
  <h>Ever<span style="color:green;">green</span> Ras</h>
</div>

<div>
  <img class="plate" src="../img/plate.png" alt="plate">
</div>

<div>
  <img class="spoon" src="../img/spoon.png" alt="spoon">
</div>

<input onclick="" class="shopping-cart" type="image" src="../img/shopping-cart.png" />

</div>

<!-- banner -->
<div>
  <img class="banner" src="../img/banner.png" alt="banner">
</div>

<!-- the chef -->
<div class="chef-container">
<h1 id="about" class="the-chef">The Chef!</h1>
  <img class="the-chef-img" src="../img/theChef.png" alt="chef">
  <h1 class="my-name">Chef Narender</h1>
  <p class="indian">Indian</p>
  <p class="my-bio"> My name is Narender Kaur. I was born in a Punjabi family and grew up in Rajasthan.
    I learned both cuisines from my grandma and mother. While I grew up, cooking has become my passion,
    and I learned many Indian cuisines. I always try to tweak little things in my recipes to make my food
    more delicious and different from others, and healthy. Cooking makes me happy and even more happy when
    I see people devour my food in minutes. I am serving my food to many families in San Jose. My food is
    always appreciated by them, making me more excited to do something new in my recipes. Recently created
    my personal website and using this platform, I want to take my passion to the next level and deliver my
    healthy, delicious, and finger licking food from my kitchen to your table.</p>
</div>


<!-- container -->
<div class="container">

  <!-- menu-container -->
  <div class="menu-container">
  <h1 id="menu" class="chef-menu">Chef's Menu</h1>
  </div>






<div class="grid-box">
  <div onclick="menuModal('1Modal', '1ModalBtn')" id="1ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/bangan.png" alt="food-img">
  <p class="menu-title">Baingan Ka Bharta $9.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">Baingan bharta is a South Asian dish prepared by mincing grilled eggplant and mixing
    it with tomato, onion, herbs, and spices. Grilling the eggplant over charcoal or direct fire infuses the
     dish with a smoky flavor.</p>
  </div>

   <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>


</div>
<!-- The Modal -->
<div id="1Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/bangan.png" alt="food-img">
    <p class="menu-title">Baingan Ka Bharta</p>
    <p class="menu-des">Baingan bharta is a South Asian dish prepared by mincing grilled eggplant and mixing
      it with tomato, onion, herbs, and spices. Grilling the eggplant over charcoal or direct fire infuses the
       dish with a smoky flavor.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Salt, garlic, ginger, onion, turmeric, tomatoes, cumin, garam masala, cilantro, cumin seeds,
      red chili powder, green chili, olive oil, eggplant, black pepper.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Food may contain — or may be processed in a facility that contains — peanuts, tree nuts, wheat, dairy, eggs, fish or soy.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>








<div class="grid-box">
  <div onclick="menuModal('2Modal', '2ModalBtn')" id="2ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/chickenChangezi.png" alt="food-img">
  <p class="menu-title">Chicken Changezi              $10.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Murg Changezi is a very popular Mughlai street food in the northern
    parts of India. Chicken Changezi made with roasted chicken pieces cooked in tomato-based
    gravy flavored with spices, creaminess from nuts, and milk. Serve Chicken Changezi with roti or naan.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="2Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/chickenChangezi.png" alt="food-img">
    <p class="menu-title">Chicken Changezi</p>
    <p class="menu-des">Murg Changezi is a very popular Mughlai street food in the northern parts of India. Chicken Changezi
       made with roasted chicken pieces cooked in tomato-based gravy flavored with spices, creaminess from nuts, and milk.
       Serve Chicken Changezi with roti or naan.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Chicken, ginger-garlic paste, cashew nuts, sour cream, garam masala powder, kasuri methi (dry fenugreek),
      olive oil, green chilies, and milk.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain or may be processed in a facility that
       contains allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>









<div class="grid-box">
  <div onclick="menuModal('3Modal', '3ModalBtn')" id="3ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/mixedVegg.png" alt="food-img">
  <p class="menu-title">Mixed Vegetable              $9.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">A delicious and healthy blend of bell pepper, potatoes, carrots, paneer, onion,
    cauliflower, and green peas. I suggest pairing this with chapati or naan.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="3Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/mixedVegg.png" alt="food-img">
    <p class="menu-title">Mixed Vegetable</p>
    <p class="menu-des">A delicious and healthy blend of bell pepper, potatoes, carrots, paneer, onion, cauliflower, and green peas.
       I suggest pairing this with chapati or naan.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Garlic, ginger, onion, tomatoes, garam masala, coriander powder, green chili, potatoes, carrots, bell peppers,
      olive oil, coriander leaves, turmeric, cinnamon, cauliflower, green peas, tomato puree, and paneer (cottage cheese).</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain or may be processed in a facility
       that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>










<div class="grid-box">
  <div onclick="menuModal('4Modal', '4ModalBtn')" id="4ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/palakPaneer.png" alt="food-img">
  <p class="menu-title">Palak Paneer              $9.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">This deliciously creamy and vibrantly green dish is made with paneer
     in a mildly spiced fresh spinach sauce. One of the most popular and well-liked paneer
     recipes packed with healthy nutrients like calcium, iron, and vitamin C.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="4Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/palakPaneer.png" alt="food-img">
    <p class="menu-title">Palak Paneer</p>
    <p class="menu-des">This deliciously creamy and vibrantly green dish is made with paneer in a mildly spiced
       fresh spinach sauce. One of the most popular and well-liked paneer recipes packed with healthy nutrients
       like calcium, iron, and vitamin C.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Spinach, paneer, salt, ginger-garlic paste, homemade garam masala, olive oil, turmeric powder,
       red chili powder, and fresh cream.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs,
       fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>













<div class="grid-box">
  <div onclick="menuModal('5Modal', '5ModalBtn')" id="5ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/pulao.png" alt="food-img">
  <p class="menu-title">Vegetable Pulao              $6.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">Indian Vegetable Pulao is basmati rice flavored with whole spices and mixed
    vegetables such as carrots, peas, corn, and green beans. Pulao can be flavored with ginger, garlic,
     green chilies, and tomatoes. You can enjoy it with yogurt or daal.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="5Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/pulao.png" alt="food-img">
    <p class="menu-title">Vegetable Pulao</p>
    <p class="menu-des">Indian Vegetable Pulao is basmati rice flavored with whole spices and mixed vegetables
      such as carrots, peas, corn, and green beans. Pulao can be flavored with ginger, garlic, green chilies,
      and tomatoes. You can enjoy it with yogurt or daal.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Salt, ginger, onions, potatoes, tomatoes, cumin seeds, coriander powder, garam masala powder,
      basmati rice, green peas, green beans, and corn.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
      soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>
















<div class="grid-box">
  <div onclick="menuModal('6Modal', '6ModalBtn')" id="6ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/mutton.png" alt="food-img">
  <p class="menu-title">Mutton Curry Halal              $14.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Mutton Curry, also referred to as Goat Curry or Lamb Curry, is a dish that is
    prepared from goat meat (or sometimes lamb meat) and vegetables. I suggest pairing this with rice or roti.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="6Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/mutton.png" alt="food-img">
    <p class="menu-title">Mutton Curry Halal</p>
    <p class="menu-des">Mutton Curry, also referred to as Goat Curry or Lamb Curry, is a dish that is
      prepared from goat meat (or sometimes lamb meat) and vegetables. I suggest pairing this with rice or roti.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Halal goat meat, ginger-garlic paste, onions, tomatoes, turmeric powder, salt, homemade garam
       masala, olive oil, water, and yogurt.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed in
      a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>












<div class="grid-box">
  <div onclick="menuModal('7Modal', '7ModalBtn')" id="7ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/chickenKeema.png" alt="food-img">
  <p class="menu-title">Aloo Chicken Keema              $13.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Chicken Keema, or Keema Aloo, is spicy, flavor-packed, and one of the best
    from Indian Cuisine. It is made with minced meat, loads of onions, tomatoes, ginger, garlic, and a
    few basic spices. Chicken Keema is best served with grilled butter-laden pavs or chapati.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="7Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/chickenKeema.png" alt="food-img">
    <p class="menu-title">Aloo Chicken Keema</p>
    <p class="menu-des">Chicken Keema, or Keema Aloo, is spicy, flavor-packed, and one of the
      best from Indian Cuisine. It is made with minced meat, loads of onions, tomatoes, ginger,
      garlic, and a few basic spices. Chicken Keema is best served with grilled butter-laden pavs or chapati.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Salt, garlic, ginger, onions, turmeric, tomatoes, garam masala, boneless chicken, olive oil, and red chili powder.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed in a
      facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>















<div class="grid-box">
  <div onclick="menuModal('8Modal', '8ModalBtn')" id="8ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/doPyaja.png" alt="food-img">
  <p class="menu-title">Paneer Do Pyaza              $10.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">Paneer Do Pyaza is made from onions and paneer (cottage cheese)
     dunked in a creamy, rich, and classic onion, tomato, and cashew-based gravy. This
     gravy adds plenty of flavor to this recipe.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="8Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/doPyaja.png" alt="food-img">
    <p class="menu-title">Paneer Do Pyaza</p>
    <p class="menu-des">Paneer Do Pyaza is made from onions and paneer (cottage cheese) dunked in a creamy,
       rich, and classic onion, tomato, and cashew-based gravy. This gravy adds plenty of flavor to this recipe.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Salt, ginger-garlic paste, cashew nut paste, heavy cream, onions, cottage cheese (paneer),
      homemade garam masala, olive oil, red chili powder, and turmeric powder.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>
















<div class="grid-box">
  <div onclick="menuModal('9Modal', '9ModalBtn')" id="9ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/pepperMutton.png" alt="food-img">
  <p class="menu-title">Pepper Mutton Halal              $14.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Halal Pepper Mutton is a creamy and spicy mouth-watering dish made with yogurt
     gravy and juicy mutton pieces. Enjoy with chapati, rice, or naan.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="9Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/pepperMutton.png" alt="food-img">
    <p class="menu-title">Pepper Mutton Halal</p>
    <p class="menu-des">Halal Pepper Mutton is a creamy and spicy mouth-watering dish made with yogurt
      gravy and juicy mutton pieces. Enjoy with chapati, rice, or naan.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Halal mutton, garlic, ginger, onion, yogurt, black pepper, tomatoes, garam masala,
       olive oil, mint leaves, and salt., cumin seeds, coriander powder, chaat masala, clove, cinnamon stick,
        black pepper powder, green cardamom, and black cardamom.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>









<div class="grid-box">
  <div onclick="menuModal('10Modal', '10ModalBtn')" id="10ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/daal.png" alt="food-img">
  <p class="menu-title">Daal Makhani              $9.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">Daal Makhani is a dish originating in New Delhi, India. It is a modern
    take on the age-old Urad ki Dal. Dal Makhani is made using black lentils (urad dal) and red
    kidney beans (rajma) that have been soaked overnight. These are mixed with tomato puree, garam masala,
    ginger-garlic paste, and large amounts of butter.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="10Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/daal.png" alt="food-img">
    <p class="menu-title">Daal Makhani</p>
    <p class="menu-des">Dal Makhani is a dish originating in New Delhi, India. It is a modern take on the
      age-old Urad ki Dal. Dal Makhani is made using black lentils (urad dal) and red kidney beans (rajma)
       that have been soaked overnight. These are mixed with tomato puree, garam masala, ginger-garlic paste,
       and large amounts of butter.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Salt, garlic, ginger, onion, tomatoes, turmeric, urad dal (black gram), chana daal,
      rajma (red kidney beans), butter, green chilies, cumin seeds, heavy cream, and water.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
      soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>














<div class="grid-box">
  <div onclick="menuModal('11Modal', '11ModalBtn')" id="11ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/muttonDoPyaja.png" alt="food-img">
  <p class="menu-title">Mutton Do Pyaja Halal              $14.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Mutton Do Pyaja is a delicious Mughlai dish of Hydrabadi cuisine.
    It is quite famous for its delectable flavor, tender texture, along with the generous
    amount of onion, which gives it a unique flavor. It is made of goat meat and spiced with
    lots of onion.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="11Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/muttonDoPyaja.png" alt="food-img">
    <p class="menu-title">Mutton Do Pyaja Halal</p>
    <p class="menu-des">Mutton Do Pyaja is a delicious Mughlai dish of Hydrabadi cuisine.
      It is quite famous for its delectable flavor, tender texture, along with the generous
      amount of onion, which gives it a unique flavor. It is made of goat meat and spiced with lots of onion.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Halal mutton, garlic, onion, ginger, coriander, garam masala, turmeric, salt,
       garam masala powder, olive oil, and cinnamon.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
      in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
      soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>














<div class="grid-box">
  <div onclick="menuModal('12Modal', '12ModalBtn')" id="12ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/gatte.png" alt="food-img">
  <p class="menu-title">Rajasthani Gatte Ki Sabji              $9.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
  <p class="menu-des">Gatte Ki Sabzi is a popular gravy-based dish from Rajasthani cuisine.
     Gatta, or gatte, is gram flour (besan) roundels that are boiled and then simmered in a
     yogurt-based tangy curry.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="12Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/gatte.png" alt="food-img">
    <p class="menu-title">Rajasthani Gatte Ki Sabji</p>
    <p class="menu-des">Gatte Ki Sabzi is a popular gravy-based dish from Rajasthani cuisine. Gatta,
      or gatte, is gram flour (besan) roundels that are boiled and then simmered in a yogurt-based tangy curry.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Gram flour, carom seeds, hing (asafoetida), homemade yogurt, onions, tomatoes, ginger-garlic paste,
      olive oil, kasuri methi (dry fenugreek), and water., yogurt, coriander leaves, coriander seeds, water.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed in a facility
      that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>



</div>
  <!-- End of Menu -->









  <!-- Start sides -->
<div class="container">
<!-- sides menu -->
<div class="menu-container">
<h1 id="sides" class="chef-sides">Chef's Sides</h1>
</div>

<div class="grid-box">
  <div onclick="menuModal('13Modal', '13ModalBtn')" id="13ModalBtn" class="grid-box-content">
  <img class="food-img" src="../img/chilliChicken.png" alt="food-img">
  <p class="menu-title">Chili Chicken              $10.99</p>
  <i class="fas fa-pepper-hot" style="padding-left: 20px; color:red;"></i>
  <i class="fas fa-pepper-hot" style="color: red;"></i>
  <i class="fas fa-pepper-hot" style="color: gray;"></i>
  <p class="menu-des">Chilli Chicken is a sweet, spicy, and crispy appetizer. It is extremely
    popular in Indo-Chinese cuisine. Crispy marinated chicken is sautéed in a spicy-sweet sauce
    along with onions and bell peppers.</p>
  </div>
  <div class="plus-minus">
    <div class="plus-minus-icon">
      <div class="minus">
      <i class="fas fa-minus-square"></i>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="minus">
      <input class="input-box"></input>
      </div>
    </div>

    <div class="plus-minus-icon">
      <div class="plus">
        <i class="fas fa-plus-square"></i>
      </div>
    </div>
  </div>

</div>
<!-- The Modal -->
<div id="13Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <img class="modal-food-img" src="../img/chilliChicken.png" alt="food-img">
    <p class="menu-title">Chili Chicken</p>
    <p class="menu-des">Chilli Chicken is a sweet, spicy, and crispy appetizer. It is extremely
       popular in Indo-Chinese cuisine. Crispy marinated chicken is sautéed in a spicy-sweet sauce
        along with onions and bell peppers.</p>
    <p class="modal-title2">Main ingredients</p>
    <p class="menu-des">Chicken, ginger-garlic paste, bell peppers, onions, soy sauce, olive oil, black pepper, and tomato sauce.</p>
    <p class="modal-title2">Allergy warning</p>
    <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed in a facility
      that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish, soy, or sesame.</p>
    <p class="modal-title2">Portion size</p>
    <p class="menu-des">12 oz container</p>

    </div>
</div>











  <div class="grid-box">
    <div onclick="menuModal('14Modal', '14ModalBtn')" id="14ModalBtn" class="grid-box-content">
    <img class="food-img" src="../img/nimbuAachar.png" alt="food-img">
    <p class="menu-title">Nimbu Ka Khatta Mitha Achar              $4.99</p>
    <i class="fas fa-pepper-hot" style="padding-left: 20px; color:gray;"></i>
    <i class="fas fa-pepper-hot" style="color: gray;"></i>
    <i class="fas fa-pepper-hot" style="color: gray;"></i>
    <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
    <p class="menu-des">This sweet and sour lemon pickle is no oil lemon pickle. Serving this
      pickle along with food helps to improve the digestion of the food being consumed. Ajwain/caraway
       seeds are well known for the digestive properties, these are added in good quantity. If stored well
       the sweet and sour lemon pickle lasts for years.</p>
    </div>
    <div class="plus-minus">
      <div class="plus-minus-icon">
        <div class="minus">
        <i class="fas fa-minus-square"></i>
        </div>
      </div>

      <div class="plus-minus-icon">
        <div class="minus">
        <input class="input-box"></input>
        </div>
      </div>

      <div class="plus-minus-icon">
        <div class="plus">
          <i class="fas fa-plus-square"></i>
        </div>
      </div>
    </div>

  </div>
  <!-- The Modal -->
  <div id="14Modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>

      <img class="modal-food-img" src="../img/nimbuAachar.png" alt="food-img">
      <p class="menu-title">Nimbu Ka Khatta Mitha Achar</p>
      <p class="menu-des">This sweet and sour lemon pickle is no oil lemon pickle. Serving this pickle
        along with food helps to improve the digestion of the food being consumed. Ajwain/caraway seeds
         are well known for the digestive properties, these are added in good quantity. If stored well the
          sweet and sour lemon pickle lasts for years.</p>
      <p class="modal-title2">Main ingredients</p>
      <p class="menu-des">Salt, sugar, lemon, kashmiri red chili powder, ajwain, black salt.</p>
      <p class="modal-title2">Allergy warning</p>
      <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
        in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
         soy, or sesame.</p>
      <p class="modal-title2">Portion size</p>
      <p class="menu-des">12 oz container</p>

      </div>
  </div>










    <div class="grid-box">
      <div onclick="menuModal('15Modal', '15ModalBtn')" id="15ModalBtn" class="grid-box-content">
      <img class="food-img" src="../img/jiraRice.png" alt="food-img">
      <p class="menu-title">Jeera Rice              $4.99</p>
      <i class="fas fa-pepper-hot" style="padding-left: 20px; color:gray;"></i>
      <i class="fas fa-pepper-hot" style="color: gray;"></i>
      <i class="fas fa-pepper-hot" style="color: gray;"></i>
      <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
      <p class="menu-des">Jeera Rice, or Zeera Rice, is an Indian dish consisting of rice and cumin seeds.
         It is a popular dish in North India and Pakistan as an everyday rice dish.</p>
      </div>
      <div class="plus-minus">
        <div class="plus-minus-icon">
          <div class="minus">
          <i class="fas fa-minus-square"></i>
          </div>
        </div>

        <div class="plus-minus-icon">
          <div class="minus">
          <input class="input-box"></input>
          </div>
        </div>

        <div class="plus-minus-icon">
          <div class="plus">
            <i class="fas fa-plus-square"></i>
          </div>
        </div>
      </div>

    </div>
    <!-- The Modal -->
    <div id="15Modal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>

        <img class="modal-food-img" src="../img/jiraRice.png" alt="food-img">
        <p class="menu-title">Jeera Rice</p>
        <p class="menu-des">Jeera Rice, or Zeera Rice, is an Indian dish consisting of rice and cumin seeds.
           It is a popular dish in North India and Pakistan as an everyday rice dish.</p>
        <p class="modal-title2">Main ingredients</p>
        <p class="menu-des">Rice, salt, jeera (cumin), cilantro, and olive oil.</p>
        <p class="modal-title2">Allergy warning</p>
        <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
          in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
          soy, or sesame.</p>
        <p class="modal-title2">Portion size</p>
        <p class="menu-des">16 oz container</p>

        </div>
    </div>










      <div class="grid-box">
        <div onclick="menuModal('16Modal', '16ModalBtn')" id="16ModalBtn" class="grid-box-content">
        <img class="food-img" src="../img/roti.png" alt="food-img">
        <p class="menu-title">Rotti              $2.50</p>
        <i class="fas fa-pepper-hot" style="padding-left: 20px; color:gray;"></i>
        <i class="fas fa-pepper-hot" style="color: gray;"></i>
        <i class="fas fa-pepper-hot" style="color: gray;"></i>
        <i class="fas fa-leaf" style="padding-left: 280px; color: green;"></i>
        <p class="menu-des">Unleavened and unflavored flatbread originating from the Indian
           subcontinent and staple in India. It is also known as roti or phulka.</p>
        </div>
        <div class="plus-minus">
          <div class="plus-minus-icon">
            <div class="minus">
            <i class="fas fa-minus-square"></i>
            </div>
          </div>

          <div class="plus-minus-icon">
            <div class="minus">
            <input class="input-box"></input>
            </div>
          </div>

          <div class="plus-minus-icon">
            <div class="plus">
              <i class="fas fa-plus-square"></i>
            </div>
          </div>
        </div>

      </div>
      <!-- The Modal -->
      <div id="16Modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>

          <img class="modal-food-img" src="../img/roti.png" alt="food-img">
          <p class="menu-title">Rotti</p>
          <p class="menu-des">Unleavened and unflavored flatbread originating from the Indian subcontinent and staple
             in India. It is also known as roti or phulka.</p>
          <p class="modal-title2">Main ingredients</p>
          <p class="menu-des">Wheat flour, salt, water, and olive oil.</p>
          <p class="modal-title2">Allergy warning</p>
          <p class="menu-des">Please note that only main ingredients are listed and food may contain — or may be processed
            in a facility that contains — allergens such as milk, peanuts, tree nuts, wheat, dairy, eggs, fish, shellfish,
             soy, or sesame.</p>
          <p class="modal-title2">Portion size</p>
          <p class="menu-des">3 pieces</p>

          </div>
      </div>



  </div>
    <!-- End of sides -->



  <!-- start contact form -->

    <div class="container">
    <!-- contact us -->
    <div class="menu-container">
    <h1 id="contact" class="contact-us">Contact Us!</h1>
    </div>
    <div class="container">
<form  class="text-font" action="contact.php">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  <label for="email">Email</label>
  <input type="text" id="email" name="email" placeholder="Your email..">

  <label for="phone">Phone Number</label>
  <input type="text" id="phone" name="phonenumber" placeholder="Your phone number..">

  <label for="subject">Message</label>
  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  <div class="send-btn-center">
  <input class="send-btn" type="image" value="Send" src="../img/send.png">
  </div>
</form>
</div>
    </div>



</div>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script src="script.js"></script>
</body>
</html>
