

<html>
<head>
<title>login to Kaya</title>
<link rel="stylesheet" href="css/stylec.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-great.css">
 <link rel="stylesheet" href="css/style.css">
</head>
  <!--header and menu-->
  <header class="py-sm-3 pt-3 pb-2" id="home">
  <div>
            <h2> <a href="index.php">Kaya</a> </h2>
         </div>

    
    <div class="nav-top-wthree">
        <div class="forms ml-auto">
                       <nav><a href="http://localhost/implementation191212017/rlogin.php" class="btn"> login</a></nav>
                       
                    
                    <nav>
        
                            <ul class="menu"><a href="http://localhost/implementation191212017/aboutus.php">About Us</a></ul>
                    </nav>
                            <nav> <ul class="menu"><a href="http://localhost/implementation191212017/shop.php">Collections</a></ul></nav>
                           <nav> <ul class="menu"><a href="http://localhost/implementation191212017/contact.php">Contact</a></ul></nav>
                           <nav></nav>
                           <nav></nav>
                     
                    <!-- //nav -->
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="server.php" method="post" class="newsletter" >
                                <input class="search" type="search" placeholder="Search here..." required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                    </div>
    
                    
                    <div class="clearfix"></div>
        </header>
<body class="back">
    <?php if(isset($SESSION["msg"])):?>
        <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                ?>
                </div>
                <?php endif ?>
    <div class="container"> 
    <table>
        <thead>
            <tr>
            <th>Log in onto Kaya Online store to start shopping now!</th>
        
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td> enter your username & password</td>
                    
                    <td><a href="#">edit</a></td>
                    <td><a href="#">delete</a></td>
                </tr>
            </tbody>
        
    </table>
    
   
    <div class="form-w3layouts-grid">
    <form method="POST" action="server.php">
        
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="name" placeholder="username..." required="">
        </div>
  
   
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="address" placeholder="password..." required="">
        </div>

        <div class="input-group">
           <button type="submit" name="save" class="btn">Login</button>
        </div>
    </form>
    <td>Don't have an account? <a href="http://localhost/implementation191212017/register.php">register now</a></td>
    
    </div>
    </div>
    <footer class="footercontainer">
<div>
        <nav>
    <?php include 'footer.php';?>
        </nav>
 </div>
 <div class="move-top text-center mt-lg-4 mt-3">
                <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
 <footer>
</body>

</html>