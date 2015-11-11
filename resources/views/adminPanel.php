<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

    <title></title>

    {{ HTML::style('css/bootstrap.min.css"); }}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>


<div class="row">

    <div class="col-md-2 left-side">
        <div class="row">
            <div class="col-md-10 logo">
<!--                <img src="images/syatis_logo.png" class="responsive">-->
                {{ HTML::image('img/picture.jpg', 'responsive') }}
                <p id="syatis"> SYATIS </p>
            </div>
        </div>

        <div class="row">
            <a href="index.html">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-dashboard " aria-hidden="true"></span>

                        <p> Dashboard </p>
                    </div>

                </div>
            </a>
        </div>

        <div class="row">
            <a href="insights.html">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-stats " aria-hidden="true"></span>

                        <p> Insights </p>
                    </div>

                </div>
            </a>
        </div>
        <div class="row">

            <a href="products.html">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                        <p> Your Products </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
            <a href="settings.html">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-cog " aria-hidden="true"></span>

                        <p>Settings</p>
                    </div>

                </div>
            </a>
        </div>
        <footer id="left-nav">

            <div class="row">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-off " aria-hidden="true"></span>

                        <p>Log Out</p>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="nav-side">
                        <span class="glyphicon glyphicon-comment " aria-hidden="true"></span>

                        <p>Feedback</p>
                    </div>

                </div>
            </div>

        </footer>
    </div>
</div>




<div class="col-md-10 right-side">
    <div class="col-md-12 top-bar">
        <div id = "seller-logo-container">
            <img src="images/logo_fatafatt.png">
        </div>
        <div class="icon-container">

            <div class="top-icon-position">
                <span class="glyphicon glyphicon-envelope  top-bar-icon" aria-hidden="true"></span>
            </div>
            <div class="badge-container">
                <div class="number">
                    10+
                </div>
            </div>
        </div>

        <div class="icon-container">

            <div class="top-icon-position">
                <span class="glyphicon glyphicon-bell top-bar-icon" aria-hidden="true"></span>
            </div>
            <div class="badge-container">
                <div class="number">
                    10+
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="white-container large"></div>

        </div>

        <div class="col-md-6">
            <div class="white-container large">
                <div class="col-md-12 blue-strip">
                    <div class="title-text">
                        Seller to watch
                    </div>
                    <div class="info-button">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </div>

                    <div class="listing">
                        <table>
                            <tr>
                                <th> Seller Name </th>
                                <th> No. Of Products</th>

                            </tr>
                            <tr>
                                <td>ABC Supplies </td>
                                <td>2345 </td>
                                <td> <button type="button" class="butn butn-blue">Watch Seller</button> </td>
                            </tr>

                            <tr>
                                <td>Fatafatt.com</td>
                                <td>2345 </td>
                                <td> <button type="button" class="butn butn-blue">Watch Seller</button> </td>
                            </tr>

                            <tr>
                                <td>urbangirl.com</td>
                                <td>2345 </td>
                                <td> <button type="button" class="butn butn-blue">Watch Seller</button> </td>
                            </tr>

                            <tr>
                                <td> gogazzab.com</td>
                                <td> 2345</td>
                                <td> <button type="button" class="butn butn-blue">Watch Seller</button> </td>
                            </tr>

                            <tr>
                                <td>kaymu.com</td>
                                <td> 2345</td>
                                <td> <button type="button" class="butn butn-blue">Watch Seller</button> </td>
                            </tr>



                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- eta bata top 5 product wala suru huncha -->
    <div class="row">
        <div class="col-md-6">
            <div class="white-container large">
                <div class="col-md-12 title-container">
                    YOUR TOP 5 PRODUCTS

                    <div class="listing">
                        <table class="most-viewed">
                            <tr>
                                <td> <img src="images/samsung-galaxy.jpg"><td>
                                <td>Samsung Galaxy S3<td>
                                <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234<td>
                                <td>Last Viewed Today<td>
                                <td><button type="button" class="butn butn-blue">View Product</button><td>
                            </tr>

                            <tr>
                                <td> <img src="images/samsung-galaxy.jpg"><td>
                                <td>Samsung Galaxy S3<td>
                                <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234<td>
                                <td>Last Viewed Today<td>
                                <td><button type="button" class="butn butn-blue">View Product</button><td>
                            </tr>

                            <tr>
                                <td> <img src="images/samsung-galaxy.jpg"><td>
                                <td>Samsung Galaxy S3<td>
                                <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234<td>
                                <td>Last Viewed Today<td>
                                <td><button type="button" class="butn butn-blue">View Product</button><td>
                            </tr>

                            <tr>
                                <td> <img src="images/samsung-galaxy.jpg"><td>
                                <td>Samsung Galaxy S3<td>
                                <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234<td>
                                <td>Last Viewed Today<td>
                                <td><button type="button" class="butn butn-blue">View Product</button><td>
                            </tr>

                            <tr>
                                <td> <img src="images/samsung-galaxy.jpg"><td>
                                <td>Samsung Galaxy S3<td>
                                <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234<td>
                                <td>Last Viewed Today<td>
                                <td><button type="button" class="butn butn-blue">View Product</button><td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="white-container large">
                <div class="col-md-12 blue-strip">
                    <div class="title-text">
                        Recent Messages
                    </div>


                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="username">
                                Nijel Shrestha

                            </div>
                            <span class="glyphicon glyphicon-envelope glyph-right" aria-hidden="true"></span>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="username">
                                Nijel Shrestha

                            </div>
                            <span class="glyphicon glyphicon-envelope glyph-right" aria-hidden="true"></span>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="username">
                                Nijel Shrestha

                            </div>
                            <span class="glyphicon glyphicon-envelope glyph-right" aria-hidden="true"></span>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>

                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="username">
                                Nijel Shrestha

                            </div>
                            <span class="glyphicon glyphicon-envelope glyph-right" aria-hidden="true"></span>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="username">
                                Nijel Shrestha

                            </div>
                            <span class="glyphicon glyphicon-envelope glyph-right" aria-hidden="true"></span>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-3">
            <div class="white-container large">
                <div class="col-md-12 blue-strip">
                    <div class="title-text">
                        Recent Comments
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="comment-notfication">
                                <b>Nijel Shrestha</b> commented on Dior sunglasses

                            </div>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="comment-notfication">
                                <b>Nijel Shrestha</b> commented on Dior sunglasses

                            </div>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="comment-notfication">
                                <b>Nijel Shrestha</b> commented on Dior sunglasses

                            </div>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="comment-notfication">
                                <b>Nijel Shrestha</b> commented on Dior sunglasses

                            </div>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>

                        <div class="list-container">
                            <img src="images/nijel2.png" alt="..." class="img-circle">
                            <div class="comment-notfication">
                                <b>Nijel Shrestha</b> commented on Dior sunglasses

                            </div>
                            <div class="timestamp">
                                Few Minutes Ago
                            </div>
                        </div>





                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ali ali chahalpahal data -->
    <div class="row">
        <div class="col-md-3">
            <div class="white-container small">
                <div class="col-md-12 text-container">
                    <div class="title-text-small"> Last Month </div>
                    <div class="subtitle">Total Views Of Your Product</div>
                    <div class="visitors_count">12,345</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="white-container small">
                <div class="col-md-12 text-container">
                    <div class="title-text-small"> Last Month </div>
                    <div class="subtitle">Redirected To Your Website</div>
                    <div class="visitors_count">93,45</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="white-container small">
                <div class="col-md-12 text-container">
                    <div class="title-text-small"> This Month </div>
                    <div class="subtitle">Total Views Of Your Product</div>
                    <div class="visitors_count">12,345</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="white-container small">
                <div class="col-md-12 text-container">
                    <div class="title-text-small"> This Month </div>
                    <div class="subtitle">Redirected To Your Website </div>
                    <div class="visitors_count">93,45</div>
                </div>
            </div>
        </div>


    </div>

</div>

</div>



</body>

</html>