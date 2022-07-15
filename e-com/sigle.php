<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>flower gift Online</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!----css3---->
  <link rel="stylesheet" href="css/custom.css">


  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700;800&family=Lato:ital,wght@0,400;0,700;0,900;1,300&family=Livvic:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">


  <!--fontawesome-->
  <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">



  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/baguetteBox.min.css">

</head>

<body oncontextmenu="return ;">




  <div class="modal fade" id="myModal_delivery" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-loc-body">
          <div class="delivery-pop">
            <h2>Choose your Delivery City</h2>
            <h3>Enjoy Handpicked Gifts and Offers Personalized for your City</h3>
            <form name="myform" id="myForm">
              <div class="inputdiv-loc">
                <input type="text" name="delivery_popcity" id="delivery_popcity" placeholder="Enter City Name"
                  class="ui-autocomplete-input" autocomplete="off">
              </div>
            </form>
            <div class="top-cities">
              <p>Top Cities</p>
              <ul>
                <li>
                  <a href="" onclick="">Delhi</a>
                </li>
                <li><a href="" onclick="">Noida</a></li>
                <li><a href="" onclick="">Gurgaon</a></li>
                <li><a href="" onclick="">Mumbai</a></li>
                <li><a href="" onclick="">Hyderabad</a></li>
                <li><a href="" onclick="">Chennai</a></li>
                <li><a href="" onclick="">Bangalore</a></li>
                <li><a href="" onclick="">Lucknow</a></li>
                <li><a href="" onclick="">Noida</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="header" id="header">


    <div class="globalnav d-flex justify-content-lg-end justify-content-end">
      <ul>
        <li><a href="" title="" class="" target="_blank" rel="">partner with us</a></li>
        <li><a href="" title=" " class="" target="_blank" rel="">Help</a></li>
        <li><a href="" title=" " class="" target="_blank" rel="">Track Order</a></li>
        <li><a href="" title="" class="" target="_blank" rel="">Offers</a></li>
        <li><a href="" title="" class="" target="_blank" rel=""><i class="fas fa-phone"></i> Call us - 098711 41000</a>
        </li>
      </ul>
    </div>

    <div class="head-topper">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4 col-md-3 d-md-none d-lg-block">
            <div class="logo-section d-flex text-left justify-content-lg-start justify-content-center">
          <?php  
          include "conn.php";
          $queryp="SELECT * FROM `logo` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{
?>
              <a href="#"><img src="../Admin/<?=$row['logo'];?>" class="d-lg-block d-md-none d-none" /></a>
              <?php }?>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 px-0 px-md-2 px-lg-2">
            <div class="form-search-section">
              <form>
                <div class="form-group">
                  <div class="input-group">

                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                      placeholder="Applicant Mobile Number">
                    <div class="input-group-prepend">
                      <a href="javascript:void(0)" onclick="filter_search()" id="filter_search">
                        <div class="searchicon">GO</div>
                      </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <div class="col-lg-4 col-md-8  px-0 px-md-2 px-lg-2">

          <div class="header-social-icon d-flex justify-content-between ps-lg-5">

              <div class="delivery-location ms-lg-5">
                
              </div>

              <div class="header-right">
                <div class="online-cart d-flex align-items-center justify-content-end">
                  <a href="" type="button" class="trackorder me-lg-3 me-md-3 me-sm-2" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Track My Order"></a>

                  <a href="addcard.php" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Cart"
                    class="righticon me-lg-3 me-md-3 me-sm-2 cart"><span class="count"> 0 </span></a>

                  <div class="dropdown">
                    <button class="btn usericon dropbtn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                      data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu shadow user-menu" aria-labelledby="dropdownMenuButton1">
                      <a href="">My Orders</a>
                      <a href="">My Address</a>
                      <a href="">Login</a>
                    </ul>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="slider-section">

    <!-- revolution slider -->
    <section class="container-fluid px-lg-1 px-1">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          
          <?php
$queryp="SELECT * FROM `sider` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{
  $ps=$row['id'];
  if($ps==1)
  {
      $sk="active";
  }
  else
  {
    $sk="";
  }
?>
<div class="carousel-item <?=$sk;?>">
            <img class="d-block w-100" src="../Admin/<?=$row['sider'];?>" alt="First slide" height="300px">
            </div>
            <?php }?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- revolution slider end -->


  </div>




  <div class="category-section-top">
    <div class="data surprise-for hidden-xs">
      <ul>
      <?php
include "conn.php";
$queryp="SELECT * FROM `category` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{

?>
        <li class="leaf"><a href="cat.php?id=<?=$row['id'];?>">
            <span class="icon">
              <img style="background: #ffecef;"
                src="../Admin/<?=$row['img'];?>" alt="Birthday"
                title="<?=$row['categaroy'];?>"></span>
            <span class="category"><?=$row['categaroy'];?></span></a></li>
            <?php }?>
      </ul>
    </div>
  </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
            <?php
            include "conn.php";
                @$x=$_GET['id'];
          $q="SELECT * FROM `prodect` WHERE `p_id`='$x'";
$runs=mysqli_query($conn,$q);
while($ro=mysqli_fetch_assoc($runs))
{
    $ig=$ro['p_img'];
    $names=$ro['p_name'];
    $sales=$ro['p_sale_price'];
    $ll=$ro['p_categary']; 
  ?>
   <form method="post" enctype="multipart/form-data">
  <div class="card" style="width:30rem;">
 <img src="../Admin/<?=$ig;?>" class="card-img-top" alt="..." height="40%" width="20%"> 
  <div class="card-body">
    <h5 class="card-title"><?=$names;?></h5>
    <p class="card-text">Rs. <s><?=$ro['p_mrp'];?></s> <?=$ro['p_sale_price'];?></p>
  </div>
  <div class="card-body">
     
    <input type="submit" name="click" class="card-link btn btn-info" value="Add to Card">
    <a href="#" class="card-link btn btn-success">By Now</a>
    </form>
    <?php

if(isset($_POST['click']))
{
    
    $query="INSERT INTO `addcard`(`name`, `img`, `sale-price`,`pid`) VALUES ('$names','$ig','$sales','$ll')";
    $sud=mysqli_query($conn,$query);
    if($sud)
    {
        echo "ok";
    }

}

?>
  </div>
</div>
<?php
        } ?>
</div>


<?php
            include "conn.php";
            if(isset($_GET['id']))
            {
                $x=$_GET['id'];
          $q="SELECT * FROM `prodect` WHERE `p_id`='$x'";
$runs=mysqli_query($conn,$q);
while($ro=mysqli_fetch_assoc($runs))
{
  ?>
<div class="col-6">     
  <div class="card" style="width:40rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$ro['p_name'];?></h5>
    <p class="card-text">
        <pre>
        Here are Top Reasons to Choose MyFlowerTree to Send Flowers Online:
India's Largest Flower Delivery Network
Expert Florists Serving Since 2009
Delivering flowers all over India and Internationally (UK, USA, UAE &
 other countries)
Same Day, Early Morning, Midnight and Express flower delivery available
FREE Shipping across India
100% Secure Payment process with Visa Card and PayPal
Most exclusive Floral Jewellery Online Shop in India
Professional Flower Delivery anywhere in India within 3 hours
On-time, Hassle-free delivery of Flowers, Cakes and Gifts
Freshly picked flowers arrangements by Trusted Local Florists
Prompt, Efficient and Dedicated Customer Support
Offering Mouth-melting cakes, including Sugar-free, diet cakes, etc.
Delivering flowers all over India and Internationally (UK, USA, UAE &
 other countries)
Same Day, Early Morning, Midnight and Express flower delivery available
FREE Shipping across India
100% Secure Payment process with Visa Card and PayPal
Most exclusive Floral Jewellery Online Shop in India
Professional Flower Delivery anywhere in India within 3 hours
Most exclusive Floral Jewellery Online Shop in India
Professional Flower Delivery anywhere in India within 3 hours

        </pre>
    </p>
  </div>
</div>
</div>

<?php
        } }?>
</div>
</div>
<div class="container mt-3">
<div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Remrder</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <?php
            @$ll=$_GET['id'];
          $queryp="SELECT * FROM `prodect` WHERE `p_categary`='$ll'";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{
  ?>
  

            <li class="leaf first">
              <a href="sigle.php?id=<?=$row['p_id'];?>">
                <div class="pro-img">
                  <img class=""
                    src="../Admin/<?=$row['p_img'];?>"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" width="200px" height="250px">
                </div>
                <div class="pro-desc">
                  <div class="pro-name"><?=$row['p_name'];?></div>
                  <div class="price"> Rs. <s><?=$row['p_mrp'];?></s> <?=$row['p_sale_price'];?></div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>

            <?php } ?>
          </ul>
        </div>
      </div>
  </div>




  <section class="content-section py-4">
    <div class="container-fluid px-lg-5">
      <span class="block-content">
        <div class="editor-content" style="text-align: left">
          <h1 style="color: #669999;">Flower Delivery Online in India From MyFlowerTree - India's Leading Online Florist
          </h1>
          <p>Sending Flowers online is in trend these days since flowers are the most beautiful gifts. From time
            immemorial, flowers are used as a visual expression of love and respect. Flowers exude positive vibes. They
            help express one's emotions that words cannot, in a most vivid way. Flower Bouquets make every occasion
            bright and happy.</p>
          <p>People of all ages from little ones to elderly people love receiving flowers. They are the best way of
            expressing love. Our <b>online flower shop</b> helps you express emotions and that too just in time!
            <b>Deliver fresh flowers online</b> to make your loved ones feel that you are constantly reminded of them.
          </p>
          <h2>Here are Top Reasons to Choose MyFlowerTree to Send Flowers Online:</h2>
          <ul>
            <li>India's Largest Flower Delivery Network</li>
            <li>Expert Florists Serving Since 2009</li>
            <li>Delivering flowers all over India and Internationally (UK, USA, UAE &amp; other countries)</li>
            <li>Same Day, Early Morning, Midnight and Express flower delivery available</li>
            <li><b>FREE Shipping across India</b></li>
            <li>100% Secure Payment process with<em> Visa Card</em> and <em>PayPal</em></li>
            <li>Most exclusive Floral Jewellery Online Shop in India</li>
            <li><b>Professional Flower Delivery anywhere in India within 3 hours</b></li>
            <li>On-time, Hassle-free delivery of Flowers, Cakes and Gifts</li>
            <li>Freshly picked flowers arrangements by <b>Trusted Local Florists</b></li>
            <li>Prompt, Efficient and Dedicated Customer Support</li>
            <li>Offering Mouth-melting cakes, including Sugar-free, diet cakes, etc.</li>
          </ul>
          <h2>Shop Exclusive and Exotic Flowers For All Occasions With MyFlowerTree</h2>
          <p>We are the stewards of life's celebrations. In this fast-paced modern world, we make it easy for you to
            <b>buy and send flowers online </b>with just a few clicks! Occasions like birthdays, anniversaries,
            Rakshabandhan, Valentine’s Day and weddings need flowers to celebrate. They are the most affectionate form
            of expressing love, making them a must in every celebration.The Flower Arrangements beautifully wrapped by
            <b>expert florists</b> will make your loved ones know how much you really adore them.The unparalleled range
            of flower bouquets is best and you would not find them with your <b>local florists</b> or at any other
            online portal. Celebrate birthdays and anniversaries by having the <b>hand-picked flowers delivered at the
              doorstep</b> of your precious ones.
          </p>
          <p>Celebrating every festival with great zeal is an integral part of our Indian culture. No festival can be
            celebrated without flowers. Flowers add the magical touch to every occasion. Commemorate Diwali with
            exquisite flower bouquets delivered to your relatives and loved ones place. Flowers are available in
            varieties of <b>roses, <a href="/lilies">lilies</a>, <a href="/orchid">orchids</a>, tulips, <a
                href="/carnations">carnations</a>, <a href="/gerberas">gerberas</a>, mixed flowers, serenades, Luxurious
              flowers, gold roses</b> among many others.</p>
          <p>Celebrate every bond with flowers; they will bind you even stronger. Flowers make time stop for a moment
            whenever one glances over them. You can even go for flower combos to make affectionate ones extra special.
          </p>
          <p>Nothing says <a href="/congratulations">congratulations</a> better than flowers, and we deliver them
            promptly with our delivery heroes. <b>Send Flowers to your dear ones </b> at their wedding, since it is the
            biggest occasion of their life. <a href="/mixed-flowers">Mixed flowers</a> are best suited for birthdays.
            Add enthusiasm to one's birthday with bright-colored flowers. <a href="/roses">Send Roses Online</a> on
            Valentine’s Day or when you are missing your beloved. Gift a bunch of pink roses on baby's birth. Big
            Colourful Rose bouquets are the best flowers for <a href="/anniversary">anniversary</a>. Thus, we offer you
            flowers to make every important occasion of your life memorable.</p>
          <h2>Expert Florists with Same Day Flower Delivery- within 3 Hours</h2>
          <p>MyFlowerTree crafts the most beautiful and perfect flower bouquet in the <b>online flower delivery</b>
            industry. We have the most <b>reliable online flower delivery services </b>with a widely distributed
            network. We understand our customer's needs of <b>delivering flowers</b> to their loved ones in time,
            thereby offering speedy same day delivery service within 3 hours or even less. The adept <b>florists</b>
            design the trendiest and most striking flower arrangements for you. We treasure an impressive collection of
            a variety of <a href="/send-flower-bouquets-online">flower bouquets</a> with on the button delivery options
            that no other <b>online florist</b> vows.</p>
          <h2>Send Flower Bouquets Online to your Loved Ones</h2>
          <p>An overwhelming majority of people love receiving flowers. Flowers always generate a smile every time a
            person looks at them. Flowers make all the blues go away. Every occasion can be made special with flowers.
            Women absolutely love receiving flowers. The belief that ‘women don’t like flowers because they would die
            anyway’ is very untrue! They love flowers. When you send flowers to girlfriend on her birthday, Valentine's
            Day, or on any other special occasion, waking her up to flowers or just without any reason, she will feel
            appreciated and pampered. The Premium Flower Bouquets are the best to send flowers to wife, the luxurious
            flowers convey your royal love for her, be it on occasions like <a href="/birthday">Birthday</a>,
            Anniversary, Diwali, <a href="/valentine">Valentine's day</a>, <a href="/new-year">New Year</a>. Couple them
            with best gift ideas that we have in store.</p>
          <p>Walk an extra mile and send flowers to Husband. Even men like receiving flowers. Sending a beautiful
            bouquet will make him feel that his love is reciprocated and you love him as much as he does. Surprise him
            with flowers and cakes on his birthday or on your anniversary. Send flowers to boyfriend when you are
            confused as to what to choose and want him to feel loved. <a href="/chocolates">Chocolates</a>, <a
              href="/cakes">cakes</a>, <a href="/personalised-gifts">personalised gifts</a> and flowers are the <a
              href="/birthday-gifts-for-brother">best gift for brother on his birthday</a>, Bhai Dooj, Rakhi, and other
            occasions.</p>
          <p>Thank your mother on the occasion of <a href="/mothers-day">Mothers day.</a> She is your savior, you cannot
            go a moment without her. Send her flowers to appreciate all that she does for you. Fathers are your strength
            and support. Send flowers on <a href="/fathers-day">Father's Day</a> and acknowledge the sacrifices he makes
            every day for you.</p>
          <h2>Buy Flowers Online For Delivery In India - Same Day, Midnight, Fixed Time Delivery</h2>
          <p>When you are unable to decide what to order, <b>buy flowers online</b> to bring an assured smile on your
            dear one's face. Just remembered someone's birthday? Don’t worry, we have you covered with our Same Day
            Delivery option. Birthday calls for celebrations right at 12. Make your dear ones feel extremely loved by
            sending midnight surprises via our Midnight Delivery Option. You can also get your flowers delivered within
            3 hours with <a href="/express-delivery">express delivery</a>. Opting for our Fixed-time Delivery of Flowers
            will allow you to choose your preferred time slot in which you want to send flowers to your loved ones. Yes,
            it works! Not just this, we provide free-shipping across India. Spare yourself of last-minute confusion and
            <b>shop flowers online</b> with multiple delivery options like <a href="/sameday-delivery">same day</a>,<a
              href="/midnight-delivery"> midnight</a>, and so on.
          </p>
          <p>MyFlowerTree is your perfect choice if you want to <b>send flowers to your loved one</b> residing in <a
              href="/delhi">Delhi</a>, <a href="/mumbai">Mumbai</a>, <a href="/bangalore">Bangalore</a> or any other
            city. We will get the flowers delivered with our fast delivery services.</p>
          <p>Sending just flowers is not always enough. Complement them with our add-ons like delectable cakes,
            personalized gifts like cushions, photo- frames, mugs, jewellery, home décor, soft toys, chocolate bouquets,
            dry fruits, green plants, among many others. You can even choose combos of these as well. Make memories last
            forever with us.</p>
          <h2>Shop &amp; Send Your Warm Wishes With Flowers Internationally</h2>
          <p>We not only have an impressive delivery network all over India but also across the boundaries. No worries,
            if you have your loved one residing in a far-fetched place, we will cover the distance for you. Send Flowers
            and cakes internationally to many destinations like <a href="send-flowers-to-usa">USA</a>, <a
              href="send-flowers-to-uk">UK</a>, <a href="/australia">Australia</a>, Germany, <a
              href="send-flowers-to-france">France</a>, <a href="/send-flowers-to-canada">Canada</a> and many others. We
            make sure you get the best experience with instant delivery abroad. If you are looking for a perfect flower
            bouquet, cake, gifts, we have an unmatched collection to meet your need. Buy flowers for <a
              href="/christmas">Christmas</a>, they are an unrivaled gift.</p>
          <h2>Shop Flowers For Every Occasion With Discount Coupons By MyFlowerTree</h2>
          <p>We have something extra for you in our palette for your special occasion so that gifting flowers and other
            <a href="/gifting">gifts</a> is never heavy on your budget. You can make use of our Coupon Codes and make
            your <b>flower shopping </b>economical. Happiness is just a few bucks away while shopping with us. Have a
            look at the treasure trove of flowers that we have and pick the best deals and offers. We are florally
            yours! Happy Gifting!
          </p>
          <h2>Are You Seeking An Opportunity To Grow In The Booming Bakery Industry?</h2>
          <p>Make your dream of becoming your own boss come true by joining hands with MyFlowerTree. Is there anyone who
            doesn’t like fresh breads, buns, honey cakes, cupcakes, or other baked delicacies? The love of freshly-baked
            breads can be profitable for you by opening a bakery franchise. MyFlowerTree assists all new and old
            franchises from their inception to proper functionality. We offer a great source of earning that lasts for
            forever. Founded in 2009, MyFlowerTree is serving thousands of customers throughout India and abroad. Our
            satisfactory customer service has gained popularity and made us a top-notch online gifting portal. So, don’t
            think a lot and join us to work together and make a new success story.</p>
          <p>Join MyFlowerTree with its amazing bakery franchise in India.</p>
          <h2>Pour in Some Romance and Send Valentines Gifts Online</h2>
          <p>Valentines is all about the celebration of Love and lovers, who are apart no matter what, sending precious
            valentines gifts to each other on Valentine’s Day. Especially, the ones who are in long-distance
            relationships rely on sending gifts online. So, MyFlowerTree is standing here to serve you at its best. Our
            all-inclusive Rose Day Gifts will bring your fondest celebrations. We will bake you a delish story to
            impress the love of your life that will remain in her dreams forever. You can send any <a href="/valentine"
              target="_blank">Valentines Gift Online</a> with our impressive service.</p>
          <h2>Same Day Delivery Valentines Gifts for Her at MyFlowerTree</h2>
          <p>Our hand-picked Rose collection never disappoints lovers around the world who want to send gifts! Our
            stunning Valentines combos, <a href="/rose-day/roses" target="_blank">Roses for Rose Day</a> and Valentines
            cakes will let you choose the gifts apt for this occasion. So, here you will find the most adorable yet
            classic <a href="/valentine/personalised-gifts" target="_blank">Personalised Valentines Gifts</a>. The best
            way is to fuse it with delish Personalised Cakes in different flavours. Our gifts are perfect for your
            girlfriend or boyfriend on the day of lovers like Valentines Day. Getting the most lovable <a
              href="/valentine/chocolates" target="_blank">Valentines Day Chocolates</a> without giving it a second
            thought is the most pleasant way to say I Love You. Gift your special someone with our bouquet of sweetness.
            Just tell him or her how much you love them. Be it a wedding, a birthday, an anniversary or any other
            occasion like Valentines Day, our ideal gift items for your friends and family. Our beautiful round cane
            basket is full of chocolates to woo her.</p>
          <h2>Celebrate the Day of Love with Valentines Flowers, Cakes and Personalised Gifts</h2>
          <p>Do you want to shower all your loved affection on the special man or woman in your life, then here we have
            the greatest ideas to surprise you? Our designer cakes and flowers are just for them! Gift the sweetest
            heart shape gifts to someone special in your life and make the sitting space more interesting and happening.
            Our amazing love theme cushions will definitely brighten up the day. A perfect <a
              href="/valentine/gifts/for-girlfriend" target="_blank">Valentines Day gift for a girlfriend</a> on any
            occasion would serve as a constant reminder of your love! Get her a Solid Red Colour Personalised Sequence
            Cushion as a perfect gift to make her occasion special. The heart shape, cushion, flower arrangement and
            cake will display your affection perfectly.</p>
          <h2>Unique Valentines Day Gift Ideas for Girlfriend – Avail Express Delivery</h2>
          <p>There is no feeling that Rose cannot express, and when you want to add sweetness and flavours to her life
            than adding a cake will always be a good idea. MyFlowerTree gives you an easy way to get hassle-free
            delivery to her home. Here we have something subtle but unique <a href="/valentine/gifts/for-her"
              target="_blank">Valentines gifts for her</a>. So, sending flowers with cake to your partner on Valentine's
            Day will foster her confidence eternally. Valentine Gifts for Girlfriend will nurture her love for you. If
            you want to reciprocate the gesture of love, you can order <a href="/valentine/gifts/for-him"
              target="_blank">Valentines Day gifts for him</a> from our website. Couples love our collection and the
            hassle-free doorstep delivery to your loved ones home. Not only will you get gifts for a perfect love story,
            but you can make it even more special by personalizing it.</p>
        </div>
      </span>
    </div>
  </section>

  <section class="blog-section">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-box">

            <div class="blog-heading  d-flex justify-content-between">
              <h3>Fresh &amp; Juicy Read from our Blogs
              </h3>
              <a target="_blank" href="">View all Blogs</a>
            </div>

            <ul>
              <li class="blog-items">
                <h4><a target="_blank" href="">9 Jewellery For Your Lady To Appreciate Her On Women's Day</a></h4>
                <p>Internationally, Women's Day is celebrated on 8th March to honor and respect every woman. She shares
                  her knowledge for the upliftment of the nation while sacrificing her personal choices for the family.
                  She also cares, loves, pampers, and motivates her nearer ones at needy times. Therefore,
                  to pay a...<a target="_blank" href="">Read More</a></p>
              </li>
              <li class="blog-items">
                <h4><a target="_blank" href="">Out-Of-The Box Ideas To Celebrate Women's Day</a></h4>
                <p>People all around the world celebrate March 8th as international women's day. It is commemorated to
                  pay a
                  tribute for their tremendous support for the upliftment of society. Also, on this day thanking wishes
                  are
                  conveyed for their unconditional love and care. On women's day, greeting with gifts has
                  ...<a target="_blank" href="">Read More</a></p>
              </li>

              <li class="blog-items">
                <h4><a target="_blank" href="">6 Places to Visit on Your First Anniversary</a></h4>
                <p>Life gets an aim and becomes interesting with a person aside to hold hands. For newlyweds, their
                  first 365
                  days of togetherness will be always crucial as it creates beautiful memories. Nevertheless, these are
                  the perfect
                  days to understand each other and relish the romantic relationship. So, it is i...
                  <a target="_blank" href="">Read More</a>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <div class="footer-sections">
      <div class="hidden-xs"
        style="text-align:center; font-size:35px; color:#333; padding:5px; border-bottom: 1px solid #ccc;">
        Make Someone Happy Today</div>
      <div class="footer-inner-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-4 subcribe text-center ">
              <div class="footer-heading">
                <p class="footer-txt-hedng">SIGN UP FOR EMAIL OFFERS &amp; UPDATES</p>
              </div>
              <input type="text" name="newsletter-email" id="newsletter-email" placeholder="Email">
              <button class="subcribe" id="newsletter">SUBMIT</button>
              <div class="errorNews" style="color: red;"></div>
            </div>
            <div class="col-md-4 d-flex justify-content-center text-center">
              <div class="social-icons">
                <div class="footer-heading">
                  <p class="footer-txt-hedng">CONNECT WITH US</p>
                </div>
                <a class="facebook" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" target="_blank"
                  href="">
                  <i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter" class="twitter"
                  href="">
                  <i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="youtube" class="youtube"
                  href=""><i class="fab fa-youtube" aria-hidden="true"></i></a>
                <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinterest"
                  class="pinterest" href=""><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="LinkedIn" class="linkedin"
                  href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"
                  class="Instagram" href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-md-4 hidden-xs">
              <div class="footer-heading text-center">
                <p class="footer-txt-hedng">SECURE ORDERING &amp; TRANSACTIONS</p>
              </div>
              <div class="pull-left">
                <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/live-new/images/footerpayment.png"
                  width="100%">
              </div>
            </div>





          </div>
        </div>
      </div>
      <div class="footer-items hidden-xs d-flex justify-content-center">
        <div class="footer-items-list "><a href="/about-us">About Us</a>
          | <a href="">Sitemap</a>
          | <a href="/contact-us">Contact Us</a>
          | <a href="/faq">FAQS</a>
          | <a href="/blog">Blog</a>
          | <a href="/special-offers">Offers</a>
          | <a href="/terms-of-use">Terms &amp; Conditions</a>
          | <a href="/CustomizeYourBouquet">Customize Your Bouquet</a>
          | <a href="/floristlogin">Become a Partner</a>
        </div>
      </div>
      <p style="padding-top:5px; font-size:12px; text-align:center; margin:0px; padding-bottom:5px;">Copyright &copy
        2009-2022, MyFlowerTree.com, All Rights Reserved.</p>

    </div>


    <a id="scrollUp" href="#top" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to Top"
      style="position: fixed; z-index: 2147483647; display: block;">
      <i class="fas fa-long-arrow-alt-up"></i></a>



    <div id="WAButton" class="floating-wpp">
      <div class="floating-wpp-button">
        <img src="img/whatsapp-gif.gif">
        <div class="floating-wpp-button-image"></div>
      </div>

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/bootstrap.bundle.min.js"></script>




    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>



    <script type="text/javascript" src="js/whatsapp.js"></script>



    <script>

      $(function () {
        $('#WAButton').floatingWhatsApp({
          phone: '+9717185100', //WhatsApp Business phone number International format-
          //Get it with Toky at https://toky.co/en/features/whatsapp.
          headerTitle: 'Chat with us on WhatsApp!', //Popup Title
          popupMessage: 'Hello, how can we help you?', //Popup Message
          showPopup: true, //Enables popup display
          buttonImage: '<img src="img/whatsapp-gif.gif" />', //Button Image
          //headerColor: 'crimson', //Custom header color
          //backgroundColor: 'crimson', //Custom background button color
          position: "right"
        });
      });

      //Auto Focus Input
      $(document).ready(function () {
        $('.appint-btn, #formclick').click(function () {
          $('#fullname_f').focus();
          $('#InputToFocus').focus();
        });
      });

      $(".appint-btn, #formclick").click(function () {
        $([document.documentElement, document.body]).animate({
          scrollTop: $(".tp-mask-wrap, .contact_form_section").offset().top
        }, 200);
      });
    </script>



    <script>
      $(document).ready(function () {
        $('.close').click(function () {
          $('.floating-wpp-popup').removeClass('active');
        });
        $('.floating-wpp-button').mouseover(function () {
          $('.floating-wpp-popup').addClass('active');
        });
      });
    </script>





    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>


    <script>
      $(document).ready(function () {
        $('.contents').btnLoadmore({
          showItem: 8,
          whenClickBtn: 4,
          textBtn: 'Load more...',
          classBtn: 'btn btn-secondary'
        });
      });

    </script>
    <script>
      $(document).ready(function ($) {
        var $element = $('.counter');
        if ($element.length > 0) {
          $element.counterUp({
            delay: 10,
            time: 1000
          });
        }
      });
    </script>

    <script>
      $('.location-slider').slick({
        slidesToShow: 5,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<i class="fas fa-chevron-left prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right next"></i>',
        swipe: true,
        swipeToSlide: true,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            // centerMode: true,
          }
        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]


      });

    </script>

    <script>
      $('.client-slider').slick({
        slidesToShow: 6,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        prevArrow: '<i class="fas fa-chevron-left prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right next"></i>',
        swipe: true,
        swipeToSlide: true,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            // centerMode: true,
          }
        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
            dots: false,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]


      });

    </script>

    <script>
      $('.project-slider').slick({
        slidesToShow: 4,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        prevArrow: '<i class="fas fa-chevron-left prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right next"></i>',
        swipe: true,
        swipeToSlide: true,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            // centerMode: true,
          }
        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]


      });

    </script>


    <script>
      $('.ticker-slider').slick({
        speed: 500,
        arrows: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fas fa-chevron-left tab-prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right tab-next"></i>',
        dots: false,
      });


    </script>



    <script>
      window.addEventListener('load', function () {
        baguetteBox.run('.gallery,.gallery2');
      });
    </script>

    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>



    <script>
      $('.blog-slider').slick({
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            // centerMode: true,
          }
        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
            dots: false,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]
      });
    </script>





    <script>
      $(document).ready(function () {
        $(window).scroll(function () {//scroll--top---indicator---arrow-jquery----//
          if ($(window).scrollTop() > 600) {//---position---600----px scroll-----//
            $("#scrollUp").fadeIn();
          }
          else {
            $("#scrollUp").css("display", "none");
          }
        });
      });

    </script>




    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(window).scrollTop() < 90) { //-navbar-----scrolltop---fixed---jquery--/
            $('#header').removeClass('navbar-scroll');
          }
          else {
            $('#header').addClass('navbar-scroll');
          }
        });

      });

    </script>





</body>

</html>