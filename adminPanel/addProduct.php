<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/inc_adminheadpart.php'; ?>
</head>


<body>
    <div class="">



        <?php include 'includes/inc_sidenav_header.php'; ?>
        <!--        content section   -->

        <main class="l-main">

            <div class="addProducts">
                <h1>Add Products</h1>
                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6">
                                    Name : <input type="text" name="title" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * name of the product
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    Price : <input type="number" name="price" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * price of the product, no need to write Rs
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    Brand : <input type="text" name="brand" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * Brand of the product
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    categories : <input type="text" name="categories" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * category of the product
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discription:
                                    <br>
                                    <textarea name="discription" id="keywords" cols="50" rows="10" required></textarea>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * discription of the product
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    featured : <input type="number" name="	featured" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * it is boolean either type 1 or nothing, 1 means product will display on website
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    weight : <input type="text" name="	weight" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * weight of the product eg 300gm ONLY TYPE 300
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    dimension : <input type="text" name="	dimension" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * dimension of the product eg 20 X 40 X 20 X 40
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    material : <input type="text" name="	material" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * material of the product eg woolen,leather
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    quantity : <input type="number" name="	quantity" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * quantity of the product, how many product of this type do you have ?
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    image1 : <input type="file" name="image1" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * image1
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    image2 : <input type="file" name="image2" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * image2
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    image3 : <input type="file" name="image3" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * image3
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    color1 : <input type="text" name="color1" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * color1 of the product
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    color2 : <input type="text" name="color2" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * color2 of the product
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-lg-6">
                                    color3 : <input type="text" name="color3">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * color3 of the product, leave if you don't have.
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    color4 : <input type="text" name="color4">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * color4 of the product, leave if you don't have.
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    color5 : <input type="text" name="color5">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * color5 of the product, leave if you don't have.
                                </div>
                            </div>
                            <hr>




                            <div class="row">
                                <div class="col-lg-6">
                                    size1 : <input type="text" name="size1" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * size1 of the product, eg XL
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-lg-6">
                                    size2 : <input type="text" name="size2" required>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * size2 of the product, eg L
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    size3 : <input type="text" name="size3">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * size3 of the product, eg SM ,leave if you dont have.
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    size4 : <input type="text" name="size4">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * size4 of the product, eg M ,leave if you dont have.
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-lg-6">
                                    Discount percent : <input type="number" name="discountpercent" max=100>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * discount percent
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    Discount Price : <input type="number" name="list_price">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * should be calculated sum of discount price
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountYear: <input type="number" name="discountYear">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in year eg 2019
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountMonth: <input type="number" name="discountYear">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in month eg 9
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountDay: <input type="number" name="discountYear">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in day eg 23
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountHour: <input type="number" name="discountHour">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in hour eg 11
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountMinute: <input type="number" name="discountMinute">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in minutes eg 58
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    discountSecond: <input type="number" name="discountSecond">

                                </div>
                                <div class="col-lg-6 quotes">
                                    * time in minutes eg 30
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    keywords: <br>
                                    <textarea name="keywords" id="keywords" cols="50" rows="10" required></textarea>

                                </div>
                                <div class="col-lg-6 quotes">
                                    * keywords for search and SEO dont write comma just continue with keyword and space
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" name="launchProduct" value="Launch Product">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </main>

    </div>



    <script>
        <?php include 'includes/inc_dashboardScript.php'; ?>

    </script>
</body>

</html>
