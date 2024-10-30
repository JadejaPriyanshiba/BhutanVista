<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BhutanVista</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="mainpagestyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php
            $servername='localhost';
            $userername='root';
            $databasename='test';
            $password='';
            try{
                $con= new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
                //echo 'Connected Successfully';
            }catch(PDOException $e){
                echo 'connection failed: '.$e->getMessage();
            }
        ?>
    </head>
    <body style="overflow-x: hidden;">

        <!-- Main Introdction -->

        <div class="row bgdiv m-0 p-0">
            <div class="h-25 navbaro row p-5 m-0 justify-content-between">
                <span class="ntitle p-0 m-0" style="min-height: 35px;"></span>
                <span class="p-0 m-0 w-25 navbar-style justify-content-end">
                    <!-- <a class="p-0 m-0" id="nquestion" href="questionspage.php">Questions</a>
                    <a class="p-0 m-0" id="ncontact" href="contactpage.php">Contact</a> -->
                    <!-- <a class="p-0 m-0" id="nlogin" href="loginpage.php">About Us</a>   -->
                </span>
            </div>
            <div>
                <p class="title-style ps-5">Bhutan Trails: <br>The Last Shangri-La</p>
                <p class="sub-style ps-5">Discover Bhutan: A land of stunning landscapes and cultural treasures.</p>
            </div>  
        </div>

        <!-- Rest of the body -->
        <div class="container">
            
            <!-- Section 1: what awaits bhutan? -->
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="mt-5 titletext">What Awaits in Bhutan?</p>
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="w-100 mt-2 subtext">Unveil the wonders of Bhutan, where every journey is a new adventure. Nestled in the heart of the Himalayas, Bhutan offers breathtaking landscapes, rich cultural heritage, and deep spirituality. Explore lush valleys, majestic peaks, and ancient monasteries like the iconic Tiger’s Nest. Experience vibrant festivals, where traditions come alive through music and dance. Discover a land committed to Gross National Happiness, where the well-being of its people and nature is paramount. Engage with the warm, hospitable locals and immerse yourself in Bhutanese culture. Whether you seek tranquility, adventure, or cultural enrichment, Bhutan promises an unforgettable experience. Come, embrace the magic and serenity of Bhutan.</p>
            
            <!-- Section 2: Understanding Bhutan -->
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="mt-5 pt-3 titletext">Understanding Bhutan</p>
            <div class="row mt-2">
                <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="min-height:30vh !important; background-image: url('https://www.colorado.edu/tibethimalayainitiative/sites/default/files/styles/slider-large/public/slider/image_2.jpg?itok=ae_wri8m');" class="simg col-4"></div>
                <div class="col-4">
                    <p data-aos="fadeIn" data-aos-delay="11" data-aos-duration="1500" data-aos-easing="ease-in-out" style="font-size:23px;" class="titletext m-3">Culture of Bhutan</p>
                    <p data-aos="fadeIn" data-aos-delay="11" data-aos-duration="1500" data-aos-easing="ease-in-out" style="letter-spacing:0px; text-align: justify;" class="subtext m-3">Bhutan's culture is deeply rooted in Buddhism, influencing its festivals, art, and daily life. Traditional events like "tshechus" feature masked dances and religious rituals, fostering community spirit. Traditional dress, such as the gho for men and kira for women, is commonly worn, and Bhutanese cuisine, known for its spicy flavors, includes dishes like ema datshi.</p>
                </div>
                <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="min-height:30vh !important; background-image: url('https://static.theprint.in/wp-content/uploads/2023/11/ANI-20231104075721.png?compress=true&quality=80&w=376&dpr=2.6');" class="simg col-4"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="font-size:23px;" class="titletext m-3">History of Bhutan</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="letter-spacing:0px; text-align: justify;" class="subtext m-3">Bhutan's history dates back to the 7th century, with Buddhism introduced by Guru Rinpoche in the 8th century. In the 17th century, Zhabdrung Ngawang Namgyal unified the country and established a central government. Bhutan maintained its sovereignty over the centuries and transitioned to a constitutional monarchy in 2008, holding its first democratic elections.</p>
                </div>
                <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="min-height:30vh !important; background-image: url('https://www.holidify.com/images/cmsuploads/compressed/culture1_20180920080134.jpg');" class="simg col-4"></div>
                <div class="col-4">
                    <p data-aos="fadeIn" data-aos-delay="12" data-aos-duration="2000" data-aos-easing="ease-in-out" style="font-size:23px;" class="titletext m-3">Governance of Bhutan</p>
                    <p data-aos="fadeIn" data-aos-delay="12" data-aos-duration="2000" data-aos-easing="ease-in-out" style="letter-spacing:0px; text-align: justify;" class="subtext m-3">Bhutan is a constitutional monarchy blending tradition with modern governance. The King, revered as the Druk Gyalpo, symbolizes unity and stability. In 2008, Bhutan transitioned to democracy, holding its first parliamentary elections. The government emphasizes Gross National Happiness, prioritizing sustainable development, environmental conservation, and cultural preservation.</p>
                </div>
            </div>

            <!-- Section 3: Geogrophical Highlights -->
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext mt-5">Geographyical Highlights</p>

            <!-- part 1:Regions of Bhutan -->
            <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="row pt-3 px-5 pb-5 justify-content-center">
                    <!-- Style 1 left one side image in box 
                    <div style="position:relative;">
                        <div style="left:40%;position: relative; background-color: cadetblue; min-height:45vh; max-width: 55vh; right:-10vh;">
                            <div style="width: 40vh; height:40vh ps-5 py-2 ms-5 bg-warning">
                                txt here
                            </div>
                        </div>
                        <div style="left:25%; top:-40vh; position:relative; background-color:red; width:35vh; min-height:35vh;" class="simg">

                        </div>
                    </div> -->
                    <!-- Style 2: bubbles -->
                    <div class="col-5 pe-0 align-self-center pt-5">
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg m-0" style="min-height:22vw; max-width:22vw; border-radius:100%; background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/PunakhaDzong.jpg/1200px-PunakhaDzong.jpg');"></div>
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg" style="border: 5px solid white; margin-top:-8vw; margin-left:13vw; min-height:10vw; max-width:10vw; border-radius:100%; background-image: url('https://www.andbeyond.com/wp-content/uploads/sites/5/Bhutan-Thimpu-Valley-Website-square-800x800-fill-gravityauto.jpg');"></div>
                    </div> 
                    <div class="col-7 ps-5 align-self-center pe-5">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="font-size: 23px;" class="titletext ps-4">Regions in Bhutan</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="letter-spacing: 2px;" class="subtext ps-4">Bhutan is divided into distinct regions, each offering unique cultural experiences and natural beauty.<br>Western Bhutan: Includes Thimphu and Paro, known for their blend of tradition and modernity. Thimphu features the Tashichho Dzong and National Memorial Chorten, while Paro is home to the iconic Paro Taktsang monastery.<br>Central Bhutan: Characterized by lush valleys and historical dzongs like Punakha Dzong, situated at the confluence of rivers.<br>Eastern Bhutan: Known for rugged terrain and traditional village life, with districts like Trashigang offering ancient monasteries and scenic landscapes.<br>Southern Bhutan: Features subtropical plains and wildlife sanctuaries such as Royal Manas National Park.</p>
                    </div>
            </div>

            <!-- part 2: Major cities of Bhutan -->
            <div class="row p-5">
                <div class="col-7 align-self-center pe-5">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="font-size: 23px;" class="titletext p-4">Major Cities in Bhutan</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="letter-spacing: 2px;" class="subtext p-4">Explore Bhutan's major cities, each offering a unique blend of tradition and modernity.<br>Thimpu: Bhutan's capital, where ancient monasteries coexist with modern infrastructure like the Tashichho Dzong and bustling markets.<br>Paro: Known for the Paro Taktsang monastery and the vibrant Paro town, offering a gateway to Bhutan's cultural heart.<br>Punakha: Home to the historic Punakha Dzong, set against scenic river confluences and serene countryside.<br>Wangdue Phodrang: Famous for its dzong and traditional crafts, set amidst picturesque valleys.<br>Phuentsholing: Bhutan's gateway city, connecting to India, with bustling markets and a blend of Bhutanese and Indian cultures.</p>
                </div>
                <div class="col-5 pe-0 align-self-center ">
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg m-0" style="min-height:22vw; max-width:22vw; border-radius:100%; background-image: url('https://media.holidify.com/images/cmsuploads/compressed/914ba4291d9b4f5c611ca6123de8cdd0_20240522124915.jpg');"></div>
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg" style="border: 5px solid white; margin-top:-15vw; margin-left: -3vw; min-height:10vw; max-width:10vw; border-radius:100%; background-image: url('https://media.istockphoto.com/id/1183080420/photo/gangteng-monastery-bhutan.jpg?s=612x612&w=0&k=20&c=rzvVoepoEt4v5JaaRsWNl9qCodBfQ0gmDUQjvRKgROc=');"></div>
                </div>
            </div>

            <!-- part 3: Key attractions of Bhutan -->
            <div class="row p-5">
                <div class="col-5 pe-0 align-self-center">
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg m-0" style="min-height:22vw; max-width:22vw; border-radius:100%; background-image: url('https://gangteylodge.com/app/uploads/2022/12/experiences-banner-scaled.jpg');"></div>
                        <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"  class="simg" style="border: 5px solid white; padding-bottom:10vw; margin-top:-15vw; margin-left:13vw; min-height:10vw; max-width:10vw; border-radius:100%; background-image: url('https://ewenbell.com/10k/mcache/Phobjikha%20Valley/F-1DM49814.jpg');"></div>
                </div>
                <div class="col-7 align-self-center ps-5">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="font-size: 23px;" class="titletext ps-4">Key Attractions in Bhutan</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="letter-spacing: 2px;" class="subtext ps-4">Discover Bhutan's iconic tourist attractions, blending spirituality, history, and natural beauty.<br>Paro Taktsang (Tiger's Nest): A sacred monastery perched on a cliffside, offering stunning views and spiritual significance.<br>Punakha Dzong: An architectural masterpiece at the confluence of rivers, showcasing Bhutan's ancient fortress-monastery design.<br>Tashichho Dzong, Thimphu: The seat of Bhutanese government and a religious center, known for its intricate architecture and vibrant festivals.<br>Gangtey Monastry: Nestled in the Phobjikha Valley, renowned for its serene ambiance and traditional Buddhist teachings.<br>Phobjikha Valley: A glacial valley home to the rare black-necked cranes during winter, offering breathtaking landscapes and wildlife.<br>Haa Valley: Known for its cultural heritage and pristine landscapes, perfect for trekking and exploring traditional Bhutanese villages.</p>
                </div>
            </div>

            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext pt-5 mt-5">A Glimpse of Serenity and Splendor</p>
            <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" id="imgcarousel" class="carousel slide carousel-fade mt-3 mb-5" data-bs-ride="true">
                <div class="carousel-indicators">
                <?php
                    $query=$con->prepare('SELECT * FROM carousel;');
                    $query->execute();
                    $data = $query->fetchAll();
                    $slideindex = 0;
                    $slide =1;
                    foreach($data as $row){
                        if($row['intcarouselID']=='1'){
                            ?> <button type="button" data-bs-target="#imgcarousel" data-bs-slide-to= <?php echo (string)$slideindex ?> class="active" aria-current="true" aria-label= "<?php echo "Slide ".$slide ?>"></button> <?php
                        }else{
                            ?> <button type="button" data-bs-target="#imgcarousel" data-bs-slide-to= <?php echo (string)$slideindex ?> aria-label= "<?php echo "Slide ".$slide ?>"></button> <?php
                        }
                        $slideindex++;
                        $slide++;
                    }
                ?>
                </div>
                <div class="carousel-inner">        
                    <?php
                        foreach($data as $row){
                            if($row['intcarouselID']=='1'){
                                ?>
                                <div class="carousel-item active">
                                    <div class="simg" style="background-image: url(<?php echo $row['strimglink']?>); min-height: 85vh;"></div>
                                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="carousel-caption d-none d-md-block">
                                        <p class="carouseltitle"><?php echo $row['strlabel']?></p>
                                        <p class="carouseltext"><?php echo $row['strcaption']?></p>
                                    </div>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="carousel-item">
                                    <div class="simg" style="background-image: url(<?php echo $row['strimglink']?>); min-height: 85vh;"></div>
                                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="carousel-caption d-none d-md-block">
                                        <p class="carouseltitle"><?php echo $row['strlabel']?></p>
                                        <p class="carouseltext"><?php echo $row['strcaption']?></p>
                                    </div>
                                </div>
                                <?php
                            } 
                        }
                    ?>                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#imgcarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imgcarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="pt-5 p-2 titletext">Plan Your Perfect Trip</p>
            <div class="row">
                <div class="col-5 pe-0 align-self-center pt-5">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="simg m-0" style="background-size: contain; min-height:22vw; max-width:22vw; border-radius:100%; background-image: url('https://i.pinimg.com/originals/e1/16/3c/e1163c00b19b39dd0d25625bc2235f5b.png');"></div>
                    <!-- 888888<div class="simg" style="border: 5px solid white; margin-top:-6vw; margin-left:15vw; min-height:7vw; max-width:7vw; border-radius:100%; background-image: url('https://images.pexels.com/photos/5966251/pexels-photo-5966251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div> -->
                </div>
                <div class="col-2 justify-content-center" style="display:flex">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="border: 0.05px solid #969084; width:1px; height:100%; align-self: center;"><div style="border-radius:50%; background-color:#969084; width:24px; height:24px; margin-left: -12px; margin-top:-2px; border: 5px solid #ffffff;"></div></div>
                </div>
                <div class="col-5 ps-0 align-self-center pt-5">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext" style="font-size: 20px;">Best Time</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="subtext" style="text-align:justify; font-size:15px">The best time to visit Bhutan depends on your preferences. Spring (March to May) offers pleasant weather, blooming flowers, and is ideal for trekking. Summer (June to August) is the monsoon season with fewer tourists and lush landscapes. Autumn (September to November) features clear skies and vibrant festivals, perfect for hiking. Winter (December to February) is cold, especially in higher elevations, but provides clear skies and beautiful mountain views.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5 ps-0 align-self-center">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext" style="font-size: 20px;">Stay Duration</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="subtext" style="text-align:justify; font-size:15px">Travel time to Bhutan varies. From India, direct flights take 2-3 hours. From the US, flights usually involve layovers and take 20-24 hours. From Europe, travel time is around 15-20 hours, and from Southeast Asia, direct flights take 3-5 hours. To fully enjoy Bhutan, plan to stay for at least 7-10 days to explore major cities and partake in cultural and trekking activities.</p>
                </div>
                <div class="col-2 justify-content-center" style="display:flex">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="border: 1px solid #969084; width:1px; height:100%; align-self: center;"><div style="border-radius:50%; background-color:#969084; width:24px; height:24px; margin-left: -12px; margin-top:-2px; border: 5px solid #ffffff;"></div></div>
                </div>
                <div class="col-5 ps-5 align-self-center">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="simg m-0" style="background-size:contain; min-height:20vw; max-width:20vw; border-radius:100%; background-image: url('https://media.istockphoto.com/id/1291879514/vector/hand-drawn-vector-nature-illustration-with-mountains-and-forest-on-first-view-using-for.jpg?s=612x612&w=0&k=20&c=sT8UAdgd_IOfeG3_-5LlpztL7dzGJFxc5qpytrDQwXk=');"></div>
                    <!-- <div class="simg" style="border: 5px solid white; margin-top:-6vw; margin-left:-1vw; min-height:6vw; max-width:6vw; border-radius:100%; background-image: url('https://images.pexels.com/photos/5966251/pexels-photo-5966251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div> -->
                </div>
            </div>
            <div class="row">
            <div class="col-5 pe-0 align-self-center">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="simg m-0" style="min-height:18vw; max-width:18vw; border-radius:100%; background-image: url('https://static.vecteezy.com/system/resources/previews/023/257/789/non_2x/continuous-one-line-drawing-bank-teller-counting-money-banking-concept-single-line-draw-design-graphic-illustration-vector.jpg');"></div>
                    <!-- <div class="simg" style="border: 5px solid white; margin-top:-10vw; margin-left:15vw; min-height:7vw; max-width:7vw; border-radius:100%; background-image: url('https://images.pexels.com/photos/5966251/pexels-photo-5966251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div> -->
                </div>
                <div class="col-2 justify-content-center" style="display:flex">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="border: 0.05px solid #969084; width:1px; height:100%; align-self: center;"><div style="border-radius:50%; background-color:#969084; width:24px; height:24px; margin-left: -12px; margin-top:-2px; border: 5px solid #ffffff;"></div></div>
                </div>
                <div class="col-5 ps-0 align-self-center">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out"class="titletext" style="font-size: 20px;">Travel cost</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="subtext" style="text-align:justify; font-size:15px">Travel costs include visa fees of $40, waived for Indian, Bangladeshi, and Maldivian nationals. A minimum daily package of $200-$250 per person per night is required for most tourists, covering accommodation, meals, a licensed guide, transport within Bhutan, and entrance fees. Flight costs vary: $200-$400 round trip from India, $1,200-$2,000 from the US, $800-$1,500 from Europe, and $300-$600 from Southeast Asia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5 ps-0 align-self-center">
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext" style="font-size: 20px;">Practical Information</p>
                    <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="subtext" style="text-align:justify; font-size:15px">Most travelers need a visa to visit Bhutan, which must be arranged through a licensed tour operator, except for nationals of India, Bangladesh, and the Maldives. When traveling, pack warm clothing, comfortable hiking shoes, and altitude sickness medication. It's important to follow local customs and respect religious sites. Bhutan is generally safe with low crime rates, but always carry your travel documents and follow your tour guide's advice for a smooth and enjoyable journey.</p>
                </div>
                <div class="col-2 justify-content-center" style="display:flex">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" style="border: 1px solid #969084; width:1px; height:100%; align-self: center;"><div style="border-radius:50%; background-color:#969084; width:24px; height:24px; margin-left: -12px; margin-top:-2px; border: 5px solid #ffffff;"></div></div>
                </div>
                <div class="col-5 ps-5 align-self-center">
                    <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="simg m-0" style="background-size:contain; min-height:20vw; max-width:20vw; border-radius:100%; background-image: url('https://qph.cf2.quoracdn.net/main-qimg-ef53349267c86bc64bfd6542eda3724f-lq');"></div>
                    <!-- <div class="simg" style="border: 5px solid white; margin-top:-10vw; margin-left:0vw; min-height:6vw; max-width:6vw; border-radius:100%; background-image: url('https://images.pexels.com/photos/5966251/pexels-photo-5966251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div> -->
                </div>
            </div>
            
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext mt-5">Bhutan Bucket List</p>
            <div class="row pt-3">
                <?php
                    $query=$con->prepare('SELECT * FROM tbltotrythings');
                    $query->execute();
                    $data=$query->fetchAll();
                    foreach($data as $row){ //00461c 654401 855900
                        ?> <div class="col-4 mb-5 justify-content-center" style="display: flex;">
                                <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="p-0 m-0" style="background-color: #95aba3; min-height:100%; max-width:fit-content;">
                                    <div class="simg" style="background-image: url('<?php echo $row['strimglink']?>'); min-height:25vh; max-width:350px"></div>
                                    <div style="background-color: #95aba3; min-height:20vh; max-width:350px">
                                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1500" data-aos-easing="ease-in-out" class="titletext m-0 p-2 pt-4" style="color:white; font-size: 20px;"><?php echo $row['strtitle']?></p>
                                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext p-4" style="color:white; font-size: 12px;"><?php echo $row['strsubtext']?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="titletext mt-5">Traveler's Tales: Bhutan Reflections</p>
            <div id="feedbackCarousel" class="carousel slide mb-5">
                <div class="carousel-inner">
                    <?php 
                        $query=$con->prepare('SELECT * from tblfeedback;');
                        $query->execute();
                        $data = $query->fetchAll();
                        foreach($data as $row){
                            ?>
                                <div class="<?php if($row['intfeedbackID']==1){echo 'carousel-item active';}else{echo 'carousel-item';}?>">
                                    <div class="col">
                                        <div class="row" style="height: 30vh;">
                                            <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="col-6 simg" style="max-height:30vh; min-height:20vh; background-image:url(<?php echo $row['strimglink']?>); background-position: center;"></div>
                                            <div class="col-6 ps-4 align-self-center"> 
                                                <div data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="simg mb-3" style="min-height: 6vh; min-width: 10vh;background-size: contain; background-image:url('assets/images/doublequote.png')"></div>
                                                <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="subtext" style="font-size:15px; text-align: justify;"><?php echo $row['strfeedback']?></p>
                                                <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" class="carouseltitle" style="text-align: end; font-size: 30px; color:black; line-height:30px;"><?php echo $row['strname']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
                        
                <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class = "simg w-100" style="background-image: 'assets/images/geranimo-qzgN45hseN0-unsplash.jpg'; min-height: 500px;">
                <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-5 titletext">Bon Voyage from Bhutan Vista</p>
                <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-3 subtext">Dear Travelers,</p>
                <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-2 ps-5 pe-5 mb-5 subtext">Thank you for visiting Bhutan Vista! This page is just an experiment, and I hope you find it inspiring and helpful. There's so much more to come, so stay tuned. I encourage you to visit Bhutan to experience its breathtaking landscapes and vibrant culture firsthand. Wishing you an unforgettable journey and the best of luck!</p>
            </div>
            
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-5 titletext">Bon Voyage from Bhutan Vista</p>
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-3 subtext">Dear Travelers,</p>
            <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="mt-2 ps-5 pe-5 mb-5 subtext">Thank you for visiting Bhutan Vista! This page is just an experiment, and I hope you find it inspiring and helpful. There's so much more to come, so stay tuned. I encourage you to visit Bhutan to experience its breathtaking landscapes and vibrant culture firsthand. Wishing you an unforgettable journey and the best of luck!</p>

        </div>
        <!-- <div class="p-5 w-100 ms-1 row simg" style="background-attachment: fixed; overflow-x:hidden; background-image: url('https://images.unsplash.com/photo-1502252430442-aac78f397426?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> -->
        <div class="w-100 simg" style="background-attachment: fixed; overflow-x:hidden; background-image: url('https://images.unsplash.com/photo-1534531409543-069f6204c5b4?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <div class="row p-5 w-100" style="background-color: #000000aa;">
                    <div class="col-3 align-items-center" style="">
                        
                        <!-- <div class="simg" style="min-height:70px; align-self:center; max-width:70px; background-image:url('assets/images/modern-young-woman-sitting-on-600nw-1920630998-removebg-preview.png'); border-radius: 100%;"></div> -->
                        <!-- <img src="assets/images/modern-young-woman-sitting-on-600nw-1920630998-removebg-preview.png" alt="texthere" style="max-height: 70px; align-self: center;"> -->
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; font-size: 40px; line-height: 40px; text-align: center;">Bhutan Vista</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext" style="color:white">Developer: Jadeja Priyanshiba</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext" style="color:white">Email: <a class="subtext" style="color:white; text-decoration: solid"  href="mailto:jadeja.code@gmail.com">jadeja@gmail.com</a> </p>
                    </div>
                    <div class="col-3 justify-content-center" style="">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; font-size:40px; line-height: 40px; text-align:center;">Important Resources</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.gov.bt/" target="_blank">Official Bhutan Government Website</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.tourism.gov.bt/" target="_blank">Bhutan Tourism Department</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.google.com/maps/place/Bhutan/@27.4500065,87.7948272,7z/data=!3m1!4b1!4m6!3m5!1s0x375b92a573c595cf:0xbb0cac652836bcda!8m2!3d27.514162!4d90.433601!16zL20vMDdieGhs?entry=ttu" target="_blank">Bhutan on Google Maps</a></p>
                    </div>
                    <div class="col-3 justify-content-center" style="">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; font-size:40px; line-height: 40px; text-align:center;">Recommended Guides and PDFs</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.lonelyplanet.com/bhutan" target="_blank">Lonely Planet Guide to Bhutan</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.roughguides.com/destinations/asia/bhutan/" target="_blank">Bhutan Travel Guide</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.tourism.gov.bt/plan/guidebooks" target="_blank">Government of Bhutan's Tourism Council Visitor's Guide</a></p>
                    </div>
                    <div class="col-3 justify-content-center" style="">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; font-size:40px; line-height: 40px; text-align:center;">Fun things you can try</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.youtube.com/channel/UC0xvpQniEmwX9gZbdthEUQw" target="_blank">Bhutan Awaits You on YouTube</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.isw.unibe.ch/ueber_uns/e41180/e523709/e548182/1991e_ger.pdf" target="_blank">Master Dzongkha with Ease</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="https://www.google.com/maps/place/Bhutan/@27.4919677,89.6249189,3a,75y,330.83h,107.56t/data=!3m8!1e1!3m6!1sAF1QipO7JQMGRoaUI6DOCSmnb-Ge1_H2AvQ92PMAditG!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipO7JQMGRoaUI6DOCSmnb-Ge1_H2AvQ92PMAditG%3Dw900-h600-k-no-pi-17.555001733444513-ya296.834198207434-ro0-fo90!7i7168!8i3584!4m9!3m8!1s0x375b92a573c595cf:0xbb0cac652836bcda!8m2!3d27.514162!4d90.433601!10e5!14m1!1BCgIgARICCAI!16zL20vMDdieGhs?coh=205410&entry=ttu" target="_blank">Stroll Through</a></p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext"><a class="subtext styfooter" style="color:white; text-decoration: solid" href="" target="_blank">Exciting Surprises Ahead!</a></p>
                    </div>
                    <div class="mt-3 col-12">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; text-align:center; line-height: 40px; font-size:40px;">Disclaimer</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext" style="color:white">Bhutan Vista is an experimental website designed to inspire and guide visitors to Bhutan. Information provided on this site is for general purposes only. While we strive for accuracy, we do not guarantee the completeness or reliability of the information. Visitors are advised to verify details through official sources.</p>
                    </div>
                    <div class="mt-1 col-12 mb-5">
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="carouseltitle" style="color:burlywood; text-align:center; line-height: 40px; font-size:40px;">Photo credits</p>
                        <p data-aos="fadeIn" data-aos-delay="10" data-aos-duration="1550" data-aos-easing="ease-in-out" class="subtext" style="color:white">Images used on Bhutan Vista are credited to <a style="text-decoration: solid; color:burlywood" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a style="text-decoration: solid; color:burlywood" href="https://www.pexels.com/" target="_blank">Pexels</a>.</p>
                    </div>

                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            $(document).scroll(function(){
                AOS.init();
                AOS.refreshHard();
                //     $('.subtext').fadeIn(1000);
                // });
                // $('.subtext').prev().hover(function(){
                //     $('.subtext').slideDown(1000);
                // });
                // $(document).on("scroll", function () {
                // var pageTop = $(document).scrollTop();
                // var pageBottom = pageTop + $(window).height() - 20;
                // var tags = $(".fade");

                // for (var i = 0; i < tags.length; i++) {
                //     var tag = tags[i]

                //     if ($(tag).position().top < pageBottom) {
                //     // $(tag).addClass("visible")
                //     $(tag).fadeIn(1000);
                //     } else {
                //     // $(tag).removeClass("visible")
                //     $(tag).fadeOut(1000);
                //     }
                // }
                // });

            });

        </script>
    </body>
</html>