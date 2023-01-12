<?php


// ======== Template Page Outside 
function MainPage_Template_homePage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    $articles = $data["articles"];
    $reviews = $data["reviews"];
    $services = $data["services"];
    
    echo '
    
    <body class="d-flex flex-column">';
        Navbar("home");
        echo '
        <main>
            
            <!-- CAROUSEL -->

            <div id="myCarousel" class="carousel carousel-main slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:linear-gradient(#00A2E9, #1470B8)">
                        <div class="container">
                            <div class="row mx-md-5 mb-2 mt-2 pt-2 text-white">
                                <div class="col-md-12">
                                    <h2 class="carousel-title fw-bold">Jasa Sedot WC Dan Limbah Industri Non B3 Profesional Dan Berkualitas</h2>
                                </div>
                            </div>
                            <div class="row mx-5 text-white">
                                <div class="col-md-6 col-12">
                                    <img src="/drives/drive-main-file/images/service.jpg" class="carousel-image border border-white border-5" alt="LOL">
                                </div>
                                <div class="col-md-6 col-12">
                                    <h5 class="fw-lighter lh-base carousel-description"><p>Merupakan penyedia jasa yang sangat profesional & berkualitas dalam mengatasi sedot septic tank, sedot resapan air, sedot limbah resto, sedot limbah industri, pelancaran saluran kamar mandi, wastafel dll.</p></h5>
                                </div>
                            </div>
                            <div class="row text-white mt-md-4">
                                <div class="col-md-12 text-center carousel-menu-button">
                                    <a href="https://wa.me/6282125235685" class="btn btn-menu-call border border-white border-4 fw-bold" style="border-radius:10px; width:180px">HUBUNGI KAMI</a>
                                    <a href="/service" class="btn btn-menu-service border border-white border-4 fw-bold" style="border-radius:10px; width:180px">LAYANAN</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image:linear-gradient(#00A2E9, #1470B8)">
                        <div class="container">
                            <div class="row mx-md-5 mb-2 mt-2 pt-2 text-white">
                                <div class="col-md-12">
                                    <h2 class="carousel-title fw-bold">Berlian Vacuum Buka Setiap Hari dan Responsif</h2>
                                </div>
                            </div>
                            <div class="row mx-5 text-white">
                                <div class="col-md-6 col-12">
                                    <img src="/drives/drive-main-file/images/crv 2.png" class="carousel-image border border-white border-5" alt="LOL" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 col-12">
                                    <h5 class="fw-lighter lh-base carousel-description"><p>Kami sangat memperhatikan kenyamanan pelanggan karena itu salah satu yang kami unggulkan buka setiap hari jadi bisa kapan saja Menggunakan jasa kami serta menyediakan admin yang responsif selalu menjawab keluhan serta masalah yang dialami pelanggan kami.</p></h5>
                                </div>
                            </div>
                            <div class="row text-white mt-md-4">
                                <div class="col-md-12 text-center carousel-menu-button">
                                    <a href="https://wa.me/6282125235685" class="btn btn-menu-call border border-white border-4 fw-bold" style="border-radius:10px; width:180px">HUBUNGI KAMI</a>
                                    <a href="/service" class="btn btn-menu-service border border-white border-4 fw-bold" style="border-radius:10px; width:180px">LAYANAN</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image:linear-gradient(#00A2E9, #1470B8)">
                        <div class="container">
                            <div class="row mx-md-5 mb-2 mt-2 pt-2 text-white">
                                <div class="col-md-12">
                                    <h2 class="carousel-title fw-bold">Biaya Terjangkau Serta Gratis Konsultasi</h2>
                                </div>
                            </div>
                            <div class="row mx-5 text-white">
                                <div class="col-md-6 col-12">
                                    <img src="/drives/drive-main-file/images/crv 3.png" class="carousel-image border border-white border-5" alt="LOL" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 col-12">
                                    <h5 class="fw-lighter lh-base carousel-description"><p>Berlian Vacuum memberikan layanan dengan harga yang cukup terjangkau serta pelanggan bisa melakukan konsultasi tentang masalah mereka secara gratis.</p></h5>
                                </div>
                            </div>
                            <div class="row text-white mt-md-4">
                                <div class="col-md-12 text-center carousel-menu-button">
                                    <a href="https://wa.me/6282125235685" class="btn btn-menu-call border border-white border-4 fw-bold" style="border-radius:10px; width:180px">HUBUNGI KAMI</a>
                                    <a href="/service" class="btn btn-menu-service border border-white border-4 fw-bold" style="border-radius:10px; width:180px">LAYANAN</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <img src="/drives/drive-main-file/icons/arow.svg" width="80" height="80">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <img src="/drives/drive-main-file/icons/arow-right.svg" width="80" height="80">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="everything">
                
                <!-- WHY US -->
                <div class="why-us mb-4 shadow-sm px-0 px-md-5 pb-5">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-our-color text-decoration-underline fw-bold">Mengapa Anda Harus Pilih Kami?</h3>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mt-2 mb-4 justify-content-center">
                        
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-date position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">BUKA SETIAP HARI</h5>
                                    <p class="card-text">Kami Buka Setiap Hari Weekend Hari Libur Nasional Kami Tetap Buka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-time position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">RESPON CEPAT</h5>
                                    <p class="card-text">Team Suport Kami Standby Dari Jam 06:00 Sampai Dengan Jam 22:00.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-payment position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">BIAYA TERJANGKAU</h5>
                                    <p class="card-text">Anda Akan Mendapatkan Layanan Maksimal Terbaik Kami Namun Dengan Biaya Yang Terjangkau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-list position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">HASIL RAPIH DAN MEMUASKAN</h5>
                                    <p class="card-text">Kami Sangat Memperhatikan Setiap Detail Pekerjaan Demi Menjaga Kualitas Hasil Dan Kepuasan Pelanggan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-team position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">TIM PROVESIONAL DAN BERINTEGRITAS</h5>
                                    <p class="card-text">Kami Sangat Ahli Dan Provesional Dalam Menangani Permasalahan Di Bidang Ini.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-tools position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">PERALATAN LENGKAP DAN CANGGIH</h5>
                                    <p class="card-text">Kualitas Layanan Kami Di Dukung Dengan Peralatan Kerja Yang Selalu Update Dan Canggih.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-gurarantine position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">GARANSI</h5>
                                    <p class="card-text">Kami Selalu Memberikan Garansi Dari Pekerjaan Yang Sudah Selesai Kami Kerjakan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-monitor position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">PEMANTAUAN</h5>
                                    <p class="card-text">Kami Tetep Akan Memantau Dari Hasil Pekerjaan Yang Telah Kami Kerjakan Sebelumnya.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-consultation position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">GRATIS KONSULTASI</h5>
                                    <p class="card-text">Anda dapat berkonsultasi secara geratis   terkait permasalahan limbah dan yang terkait lainya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-amanah position-relative top-50 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">Amanah</h5>
                                    <p class="card-text">Telah terbukti tanggung jawab dalam pekerjaan oleh beberapa pelanggan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ABOUT US -->
                <div class="about-us mb-4 shadow-sm px-md-5 py-5">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-our-color text-decoration-underline fw-bold">Tentang Kami</h3>
                        </div>
                    </div>
                    <div class="row servicette bg-our-color text-white align-items-center m-1">
                        <div class="col-md-4 p-0 mb-4 mb-md-0">
                            <img src="/drives/drive-main-file/images/CRV.png" class="featurette-image img-fluid mx-auto" width="500" height="500">
                        </div>
                        <div class="col-md-8">
                            <h4 class="fw-bold">SELAMAT DATANG di Berlian Vacuum</h4>
                            <h4 class="">Mengenal Berlian vacuum</h4>
                            <p class="fst-normal lh-sm fs-5" style="text-align:justify">Berlian Vacuum merupakan perseroan yang bergerak dibidang pengambilan limbah rumah tangga dan limbah hasil usaha, seperti Sedot WC/Tinja, Sedot Lemak, Pelancaran Saluran/WC Mampet, Dll. </p>
                            <p class="fst-normal lh-sm fs-7" style="text-align:justify">Dengan PROSEDUR yang kami terapkan dalam perusahaan peningkatan mutu dalam pekerjaan menjadi salah satu upaya kami dalam memaksimalkan kualitas dalam pelayanan. Jujur, profesional berkualitas serta harga yang terjangkau. </p>
                            
                            <p>
                                <a class="btn btn-read-detail border border-white border-4" href="/about-us" style="border-radius:20px">Baca Detail <span class="fa fa-search"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SERVICES -->
                <div class="services mb-4 shadow-sm px-0 px-md-5 py-5">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-our-color text-decoration-underline fw-bold">Layanan Kami</h3>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 mt-2 justify-content-center">';
                        if(sizeof($services)==0){
                            echo '<h1 class="text-info mt-4" style="height:270px">Kosong</h1>';
                        }
                        $_ = 0;
                        foreach($services as $service){
                            $_++;
                            if($_ == 5){
                                break;
                            }
                            echo '
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto service-item border border-1 shadow text-our-color text-center">
                                <div class="card-header border-0 bg-body">
                                    <div class="baysunny-icon position-relative top-0 start-50 translate-middle-x" id="sunnyIcon-'.$service["serviceID"].'"></div>
                                </div>
                                <div class="card-body">
                                    <text class="card-title fw-bold">'.$service["title"].'</text>
                                    <p class="card-text">'.$service["description"].'</p>
                                </div>
                                <div class="card-footer border-0 bg-body mb-2">
                                    <a href="/service/?detail='.$service["serviceID"].'&read-detail='.$service["iconName"].'" class="btn btn-danger btn-sm btn-footer"><span class="fa fa-search"></span> Baca Detail</a>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-success btn-sm btn-footer"><span class="fa fa-whatsapp"></span> Tanya Kami</a>
                                </div>     
                            </div>
                        </div>
                            ';
                        }

                        echo '

                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="/service" class="btn btn-darkblue" style="border-radius:20px">Periksa Layanan Lainnya <span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>

                <!-- REVIEWS -->
                <div class="our-services mb-4 shadow-sm px-0 px-md-5 py-5">';

                    if(sizeof($reviews) > 0){
                        echo '
                        <div id="reviews" class="carousel slide carousel-review" data-bs-ride="carousel">
                            <div class="carousel-indicators">';
                            $n = 0;
                            $carousel = "";
                            foreach($reviews as $review){
                                if($review["status"] != 1){
                                    continue;
                                }
                                if($n == 0){
                                    echo '<button type="button" data-bs-target="#reviews" data-bs-slide-to="'.$n.'" class="active" aria-current="true" aria-label="Slide '.$n.'"></button>';
                                }else{
                                    echo '<button type="button" data-bs-target="#reviews" data-bs-slide-to="'.$n.'" aria-label="Slide '.$n.'"></button>';
                                }
                                $n ++;
                            }echo '
                                
                            </div>
                            <div class="carousel-inner">';
                                $c = 1;
                                $carousel = "";
                                foreach($reviews as $review){
                                    if($review["status"] != 1){
                                        continue;
                                    }
                                    if($c == 1){
                                        $carousel = "active";
                                    }else{
                                        $carousel = "";
                                    }
                                    $c++;
                                    echo '
                                <div class="carousel-item '. $carousel.'">
                                    <img src="/drives/drive-main-file/images/crv 3.png" class="w-100 d-block" style="object-fit:cover">
                                    <div class="mask" style="background-color: rgba(149, 165, 166, 0.4)">
                                        <div class="carousel-caption d-md-block mb-5">
                                            <img src="/drives/drive-user/user-images/'.$review["userImage"].'" width="100" height="100" class="rounded-circle border border-3 border-white" style="object-fit:cover">
                                            <h3>'.$review["name"].'</h3>
                                            <h4>'.$review["email"].'</h4>
                                            <h5>';
                                    for($i=0; $i<5; $i++){
                                        if($i<$review["starRating"]){
                                            echo '<span class="fa fa-star text-warning"></span>';
                                        }else{
                                            echo '<span class="fa fa-star text-dark"></span>';
                                        }

                                    }
                                    echo '</h5>
                                            <p>'.$review["message"].'</p>
                                        </div>  
                                    </div>
                                </div>';

                                }
                                echo '                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#reviews" data-bs-slide="prev">
                                <img src="/drives/drive-main-file/icons/arow.svg" width="80" height="80">
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#reviews" data-bs-slide="next">
                                <img src="/drives/drive-main-file/icons/arow-right.svg" width="80" height="80">
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>';
                    }

                    echo '
                    <div class="col-lg-12 text-center">
                        <h5><button href="#" class="btn btn-darkblue btn-rounded fw-bold" id="generate-review-code">Klik Untuk Masukan Review Kamu</button></h5>
                    </div>
                </div>
            
                
                <!-- PRICE -->
                <div class="prices mb-4 shadow-sm px-0 px-md-5 py-5">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-our-color text-decoration-underline fw-bold">Biaya</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="card shadow border border-2 bg-darkblue text-white text-center h-100" style="border-radius:20px"> 
                                <div class="card-body h-100 p-3">
                                    <p class="card-text fs-7">Biaya layanan yang kami berikan bervariasi tergantung jenis pekerjaan dan kondisi di lapangan. Kami menentukan biaya layanan berdasarkan lokasi pengerjaan, jenis pekerjaan per titik, dan jarak mobil tangki dengan lokasi pengerjaan, dll. Kami akan menjelaskan semua rincian biaya tersebut saat proses transaksi. Jadi, Anda tidak perlu khawatir bahwa nanti kami akan membebankan biaya yang besar dan tidak diduga-duga saat pengerjaan di lapangan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ARTICLES -->';
                if(sizeof($articles) > 0){
                    echo '
                    <div class="article mb-4 shadow-sm px-0 mx-md-5">
                        <div class="row mx-1 mx-md-3 mb-4">
                            <div class="col-lg-12 text-center">
                                <h4 class="text-our-color fw-bold">Baca Juga Lainnya</h4>
                            </div>
                        </div>
                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="articleCarousel" class="carousel article-carousel" data-bs-ride="carousel">
                                <div class="carousel-inner justify-content-center">';

                                $z = 1;
                                $carousel = "";
                                foreach($articles as $article){
                                    if($z==1){
                                        $carousel = "active";
                                    }else{
                                        $carousel = "";
                                    }$z++;

                                    echo '
                                    <div class="carousel-item bg-body '.$carousel.'">
                                        <div class="col-md-4 m-auto bg-body" style="min-width: 18rem;">
                                            <div class="card border-0 m-auto h-100" style="max-width: 18rem;">
                                                <img src="/drives/drive-article/article-images/'.$article["imageName"].'" width="220" height="200" class="card-img-top" alt="..." style="border-radius:25px">
                                                <div class="card-body">
                                                    <h5 class="card-title fs-8 text-our-color">'.display_date($article["dateCreated"]).'</h5>
                                                    <h5 class="card-title">'.$article["title"].'</h5>
                                                    <p class="card-text fs-7">'.$article["description"].'</p>
                                                </div>
                                                <div class="card-footer bg-body border-0">
                                                    <a href="'.$article["url"].'" class="btn btn-darkblue btn-sm" style="border-radius:25px">Baca Detail <span class="fa fa-search"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }


                                echo '
                                    
                                    
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel" data-bs-slide="prev">
                                    <img src="/drives/drive-main-file/icons/arrow-left-blue.svg" class="me-md-5" width="50" height="50">
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel" data-bs-slide="next">
                                    <img src="/drives/drive-main-file/icons/arrow-right-blue.svg" class="ms-md-5" width="50" height="50">
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                            
                        </div>
                    </div>

                    ';
                }
                
                echo '

                <!-- MORE INFO -->
                <div class="more-info mb-4 px-0 px-md-5 py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center text-our-color">
                            <h3 class="text-decoration-underline fw-bold">Ingin tau info terkait lebih lanjut ?</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow-lg border-1 text-center h-100 text-our-info py-4" style="border-radius:25px">
                                <div class="card-body h-100">
                                    <p class="card-text fs-6 fw-bold">Jika penjelasan kami di atas masih ada yang Anda belum pahami, atau jika Anda ingin mendapatkan informasi lebih detail, silakan hubungi kami melalui beberapa cara di bawah ini. Kami akan sangat senang bisa membantu Anda.</p>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-green rounded-3"><span class="fa fa-whatsapp"></span> Chat / Telp Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- FOOTER -->';
        
        Layout_Footer();

        echo '
        </main>


        <div class="modal fade" id="modal-add-review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukan Review Kamu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-add-review" novalidate>
                            <input type="hidden" name="add_review" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="code" id="review-code" value="000">
                            <div class="mb-3" id="input-star-rating">
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star one-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star two-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star three-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star four-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star five-star text-warning"></span>
                                </button>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Foto Profile</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="userImage" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" id="recipient-name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-email" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="recipient-email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Pesan:</label>
                                <textarea class="form-control" id="message-text" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-add-review">Tambah</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        Akal Sehat
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>
        
        
        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>
        <script src="/assets/template/js/review.js"></script>
        <script src="/assets/template/js/article-carousel.js"></script>
        <script src="/assets/template/js/baysunny-load-icon.js"></script>
        <script src="/assets/handler_form/review.js"></script>

    </body>
    ';
}

function MainPage_Template_aboutUsPage($data){
    $ipAddress = getIpAddress();

    $articles = $data["articles"];
    echo '
    <body class="d-flex flex-column">';           
        Navbar("about-us");
        echo '

        <main>
            <div class="everything">
                
                <!-- ABOUT US -->
                <div class="about-us shadow-sm mb-4 px-0 px-md-5 py-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-our-color fw-bold">Tentang Berlian Vacuum</h1>
                        </div>
                    </div>
                    <div class="row mx-1 mx-md-3 mb-4">
                        <div class="col text-center">
                            <img src="/drives/drive-main-file/images/about-us-image.jpg" width="100%" style="object-fit:cover">
                        </div>
                    </div>
                    <div class="row mx-1 mx-md-5">
                        <div class="col-lg-12">
                            <h3 class="text-our-color">Berlian Vacuum</h3>
                            <p class="fs-5 text-our-color" style="text-align:justify"> Berlian Vacuum merupakan perseroan yang bergerak dibidang pengambilan limbah rumah tangga dan limbah hasil usaha, seperti Sedot WC/Tinja, Sedot Lemak, Pelancaran Saluran/WC Mampet, Dll. 
                            </p>
                            <p class="fs-5 text-our-color" style="text-align:justify"> Dengan PROSEDUR yang kami terapkan dalam perusahaan peningkatan mutu dalam pekerjaan menjadi salah satu upaya kami dalam memaksimalkan kualitas dalam pelayanan. Jujur, profesional berkualitas serta harga yang terjangkau.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ARTICLES -->';
                if(sizeof($articles) > 0){
                    echo '
                    <div class="article mb-4 shadow-sm px-0 mx-md-5">
                        <div class="row mx-1 mx-md-3 mb-4">
                            <div class="col-lg-12 text-center">
                                <h4 class="text-our-color fw-bold">Baca Juga Lainnya</h4>
                            </div>
                        </div>
                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="articleCarousel" class="carousel article-carousel" data-bs-ride="carousel">
                                <div class="carousel-inner justify-content-center">';

                                $z = 1;
                                $carousel = "";
                                foreach($articles as $article){
                                    if($z==1){
                                        $carousel = "active";
                                    }else{
                                        $carousel = "";
                                    }$z++;

                                    echo '
                                    <div class="carousel-item bg-body '.$carousel.'">
                                        <div class="col-md-4 m-auto bg-body" style="min-width: 18rem;">
                                            <div class="card border-0 m-auto h-100" style="max-width: 18rem;">
                                                <img src="/drives/drive-article/article-images/'.$article["imageName"].'" width="220" height="200" class="card-img-top" alt="..." style="border-radius:25px">
                                                <div class="card-body">
                                                    <h5 class="card-title fs-8 text-our-color">'.display_date($article["dateCreated"]).'</h5>
                                                    <h5 class="card-title">'.$article["title"].'</h5>
                                                    <p class="card-text fs-7">'.$article["description"].'</p>
                                                </div>
                                                <div class="card-footer bg-body border-0">
                                                    <a href="'.$article["url"].'" class="btn btn-darkblue btn-sm" style="border-radius:25px">Baca Detail <span class="fa fa-search"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }


                                echo '
                                    
                                    
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel" data-bs-slide="prev">
                                    <img src="/drives/drive-main-file/icons/arrow-left-blue.svg" class="me-md-5" width="50" height="50">
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel" data-bs-slide="next">
                                    <img src="/drives/drive-main-file/icons/arrow-right-blue.svg" class="ms-md-5" width="50" height="50">
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                            
                        </div>
                    </div>

                    ';
                }
                
                echo '
            </div>

        </main>

        <!-- FOOTER -->';

        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>

    </body>';  
}

function MainPage_Template_servicePage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    $services = $data["services"];

    echo '
    <body class="d-flex flex-column h-100">';
        Navbar("service");
        echo '

        <main>
            <div class="everything">

                <!-- SERVICES -->
                <div class="services mb-4 shadow-sm px-0 px-md-5 mt-5 mb-4">
                    <div class="row mb-4">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-our-color fw-bold">Layanan di Berlian Vacuum</h1>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5 class="text-our-color fs-6">Kami Menyediakan Beberapa Layanan Dengan Tenaga Profesional</h5>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-2 px-md-5 row-cols-xl-4 justify-content-center">';
                        if(sizeof($services)==0){
                            echo '<h1 class="text-info mt-4" style="height:270px">Kosong</h1>';
                        }
                        foreach($services as $service){
                            echo '
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto service-item border border-1 shadow text-our-color text-center">
                                <div class="card-header border-0 bg-body">
                                    <div class="baysunny-icon position-relative top-0 start-50 translate-middle-x" id="sunnyIcon-'.$service["serviceID"].'"></div>
                                </div>
                                <div class="card-body">
                                    <text class="card-title fw-bold">'.$service["title"].'</text>
                                    <p class="card-text">'.$service["description"].'</p>
                                </div>
                                <div class="card-footer border-0 bg-body mb-2">
                                    <a href="/service/?detail='.$service["serviceID"].'&read-detail='.$service["iconName"].'" class="btn btn-danger btn-sm btn-footer"><span class="fa fa-search"></span> Baca Detail</a>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-success btn-sm btn-footer"><span class="fa fa-whatsapp"></span> Tanya Kami</a>
                                </div>     
                            </div>
                        </div>
                            ';
                        }

                        echo '
                    </div>
                </div>
                
            </div>

            
        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>
        <script src="/assets/template/js/baysunny-load-icon.js"></script>

    </body>';  
}

function MainPage_Template_serviceDetailPage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    $detailServiceID = $data["serviceDetailID"];
    $services = $data["services"];

    echo '
    <body class="d-flex flex-column h-100">';           
        Navbar("service");
        echo '

        <main>
            <div class="everything">

                <!-- OPENING -->
                <div class="services shadow-sm px-0 mx-md-5 mt-5 mb-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-our-color fw-bold">Layanan Berlian Di Vacuum</h1>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5 class="text-our-color fs-6">Kami Menyediakan Beberapa Layanan Dengan Tenaga Profesional</h5>
                        </div>
                    </div>
                </div>

                <!-- SERVICE DETAIL -->
                <div class="services mb-5 py-3 shadow-sm mx-md-5">';

                    foreach($services as $key=>$service){
                        if($service["serviceID"] == $detailServiceID){
                            echo '
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/drives/drive-service/service-images/'.$service["imageName"].'" width="85%" height="400px" style="object-fit:cover">
                            </div>
                            
                            
                        </div>

                        <div class="row mx-2 my-5 mx-md-5 px-md-4">
                            <div class="col-12">
                                <h3 class="text-our-color">'.$service["title"].'</h3>
                                <p class="fs-5 text-our-color"> '.$service["fullDescription"].' </p>
                            </div>
                        </div>';
                            unset($services[$key]);
                            break;
                        }
                    }echo '
                </div>


                <!-- OTHER SERVICES -->';
                if(sizeof($services) > 0){
                    echo '
                    <div class="services mb-4 shadow-sm px-0 mx-md-5">
                        <div class="row mx-1 mx-md-3 mb-4">
                            <div class="col-lg-12 text-center">
                                <h4 class="text-our-color fw-bold">Baca Juga Lainnya</h4>
                            </div>
                        </div>
                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="servicesCarousel" class="carousel services-carousel" data-bs-ride="carousel">
                                <div class="carousel-inner justify-content-center">';

                                $z = 1;
                                $carousel = "";
                                foreach($services as $service){
                                    if($z==1){
                                        $carousel = "active";
                                    }else{
                                        $carousel = "";
                                    }$z++;

                                    echo '
                                    <div class="carousel-item '.$carousel.' box-sunny-sm">
                                        <div class="card mx-auto service-item-sm shadow text-our-color text-center">
                                            <div class="card-header bg-body border-0">
                                                <div class="baysunny-icon-sm position-relative top-0 start-50 translate-middle-x" id="sunnyIcon-'.$service["serviceID"].'"></div>
                                            </div>
                                            <div class="card-body pt-1">
                                                <text class="card-title fw-bold">'.$service["title"].'</text>
                                                <p class="card-text">'.$service["description"].'</p>
                                            </div>
                                            <div class="card-footer border-0 bg-body mb-2">
                                                <a href="/service/?detail='.$service["serviceID"].'&read-detail='.$service["iconName"].'" class="btn btn-danger btn-sm btn-footer"><span class="fa fa-search"></span> Baca Detail</a>
                                                <a href="'.$contact["link-whatsapp"].'" class="btn btn-success btn-sm btn-footer"><span class="fa fa-whatsapp"></span> Tanya Kami</a>
                                            </div>     
                                        </div>
                                    </div>';
                                }


                                echo '
                                    
                                    
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                                    <img src="/drives/drive-main-file/icons/arrow-left-blue.svg" class="me-md-5" width="50" height="50">
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                                    <img src="/drives/drive-main-file/icons/arrow-right-blue.svg" class="ms-md-5" width="50" height="50">
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                            
                        </div>
                    </div>

                    ';
                }
                

                echo '
                <!-- CONTACT -->
                <div class="more-info mb-4 px-0 px-md-5 py-5">
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow-lg border-1 text-center h-100 text-our-info py-4 text-our-color" style="border-radius:25px">
                                <div class="card-body h-100">
                                    <div class="card-title fw-bold fs-5">Kontak Kami</div>
                                    <p class="card-text fs-7">Apabila Ada Yang Ingin Ditanyakan Dari Layanan Kami Silahkan Chat atau Telefon Kami</p>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-green rounded-3"><span class="fa fa-whatsapp"></span> Chat / Telp Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            
        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>
        <script src="/assets/template/js/baysunny-load-icon.js"></script>
        <script src="/assets/template/js/services-carousel.js"></script>

    </body>';  
}

function MainPage_Template_benefitPage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    echo '
    <body class="d-flex flex-column h-100">';           
        Navbar("benefit");
        echo '

        <main>
            <div class="everything">

                <!-- BENEFITS -->
                <div class="services mb-4 px-0 px-md-5 mt-5 mb-4">
                    <div class="row mb-4">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-our-color fw-bold">Keuntungan Menggunakan Jasa Berlian Vacuum</h1>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5 class="text-our-color fs-6">Kami Menyediakan Beberapa Layanan Dengan Tenaga Profesional</h5>
                        </div>
                    </div>
                    
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mt-2 mb-4 justify-content-center">
                        
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-date position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">BUKA SETIAP HARI</h5>
                                    <p class="card-text">Kami Buka Setiap Hari Weekend Hari Libur Nasional Kami Tetap Buka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-time position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">RESPON CEPAT</h5>
                                    <p class="card-text">Team Suport Kami Standby Dari Jam 06:00 Sampai Dengan Jam 22:00.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-payment position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">BIAYA TERJANGKAU</h5>
                                    <p class="card-text">Anda Akan Mendapatkan Layanan Maksimal Terbaik Kami Namun Dengan Biaya Yang Terjangkau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-list position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">HASIL RAPIH DAN MEMUASKAN</h5>
                                    <p class="card-text">Kami Sangat Memperhatikan Setiap Detail Pekerjaan Demi Menjaga Kualitas Hasil Dan Kepuasan Pelanggan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-team position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">TIM PROVESIONAL DAN BERINTEGRITAS</h5>
                                    <p class="card-text">Kami Sangat Ahli Dan Provesional Dalam Menangani Permasalahan Di Bidang Ini.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-tools position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">PERALATAN LENGKAP DAN CANGGIH</h5>
                                    <p class="card-text">Kualitas Layanan Kami Di Dukung Dengan Peralatan Kerja Yang Selalu Update Dan Canggih.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-gurarantine position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">GARANSI</h5>
                                    <p class="card-text">Kami Selalu Memberikan Garansi Dari Pekerjaan Yang Sudah Selesai Kami Kerjakan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-monitor position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">PEMANTAUAN</h5>
                                    <p class="card-text">Kami Tetep Akan Memantau Dari Hasil Pekerjaan Yang Telah Kami Kerjakan Sebelumnya.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-consultation position-relative top-0 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">GRATIS KONSULTASI</h5>
                                    <p class="card-text">Anda dapat berkonsultasi secara geratis   terkait permasalahan limbah dan yang terkait lainya.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto benefit-box border border-2 shadow text-our-color text-center">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="sunny-icon sunny-icon-amanah position-relative top-50 start-50 translate-middle-x"></div>
                                    </div>
                                    <h5 class="card-title fw-bold">Amanah</h5>
                                    <p class="card-text">Telah terbukti tanggung jawab dalam pekerjaan oleh beberapa pelanggan</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="more-info mb-4 px-0 px-md-5 py-5">
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow-lg border-1 text-center h-100 text-our-info py-4 text-our-color" style="border-radius:25px">
                                <div class="card-body h-100">
                                    <div class="card-title fw-bold fs-5">Kontak Kami</div>
                                    <p class="card-text fs-7">Apabila Ada Yang Ingin Ditanyakan Dari Layanan Kami Silahkan Chat atau Telefon Kami</p>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-green rounded-3"><span class="fa fa-whatsapp"></span> Chat / Telp Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>

    </body>';  
}

function MainPage_Template_workAreaPage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    $workAreas = $data["workAreas"];
    echo '
    <body class="d-flex flex-column h-100">';           
        Navbar("work-area");
        echo '

        <main>
            <div class="everything">

                <!-- WORK AREA -->
                <div class="services mb-4 px-0 px-md-5 mt-5 mb-4">
                    <div class="row mb-4">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-our-color fw-bold">Area Kerja Berlian Vacuum</h1>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5 class="text-our-color fs-6">Kami Menyediakan Beberapa Layanan Dengan Tenaga Profesional</h5>
                        </div>
                    </div>
                    
                    <div class="row row-cols-1 mt-2 mb-4 justify-content-center">';

                    foreach($workAreas as $area){
                        echo '
                        <div class="col mb-3">
                            <div class="card text-center bg-our-color text-white" style="border-radius:20px">
                                <div class="card-body py-1" style="height:50px">
                                    <h5 class="card-title fs-7 fw-bold">'.$area["areaName"].'</h5>
                                    <p class="card-text fs-8">';

                                    for($i=0; $i<sizeof($area["child"]); $i++){
                                        if($i< sizeof($area["child"]) - 1){
                                            echo $area["child"][$i]["areaName"].' | ';
                                        }else{
                                            echo $area["child"][$i]["areaName"];
                                        }
                                        
                                    }
                                    echo '
                                    </p>
                                </div>
                                
                            </div>
                        </div>                            
                        ';
                    }
                    echo '
                        
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="more-info mb-4 px-0 px-md-5 py-5">
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow-lg border-1 text-center h-100 text-our-info py-4 text-our-color" style="border-radius:25px">
                                <div class="card-body h-100">
                                    <div class="card-title fw-bold fs-5">Area Kerja Diluar Jangkauan</div>
                                    <p class="card-text fs-7">Untuk Area Kerja Diluar Jangkauan Kami Masih Bisa Didiskusikan Bersama.</p>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-green rounded-3"><span class="fa fa-whatsapp"></span> Chat / Telp Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>

    </body>';  
}

function MainPage_Template_contactPage($data){
    $ipAddress = getIpAddress();
    $contact = getContact();
    echo '
    <body class="d-flex flex-column h-100">';           
        Navbar("contact");
        echo '

        <main>
            <div class="everything">

                <!-- CONTACT -->
                <div class="services mb-4 px-0 px-md-5 mt-5 mb-4">
                    <div class="row row-cols-1 mb-4">
                        <div class="col text-center">
                            <h1 class="text-our-color fw-bold">Kontak Kami</h1>
                        </div>
                    </div>
                    <div class="row row-cols-1 mx-1 mx-md-3 mb-4">
                        <div class="col">
                            <h2 class="text-our-color">Peta Lokasi</h2>
                        </div>
                        <div class="col text-center">
                            <div class="card">
                                <div class="card-body p-2">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9958251262506!2d107.06073081476937!3d-6.264277995465875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc585d74df2e6fd86!2zNsKwMTUnNTEuNCJTIDEwN8KwMDMnNDYuNSJF!5e0!3m2!1sen!2sid!4v1666019646076!5m2!1sen!2sid" class="location" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row row-cols-1 mx-1 mx-md-3 mb-4">
                        <div class="col">
                            <h2 class="text-our-color">Informasi Kontak</h2>
                        </div> 
                        <div class="col">
                            <ul class="list-group">
                                <li class="list-group-item border-0 text-our-color d-flex">
                                    <span class="sunny-icon-phone me-2"></span>'.$contact["phone"].'
                                </li>
                                <li class="list-group-item border-0 text-our-color">
                                    <span class="fa fa-whatsapp me-2"></span>'.$contact["whatsapp"].'
                                </li>
                                <li class="list-group-item border-0 text-our-color">
                                    <span class="fa fa-envelope me-2"></span>'.$contact["email"].'
                                </li>
                                <li class="list-group-item border-0 text-our-color d-flex">
                                    <span class="sunny-icon-location me-2"></span>Jl. Pendidikan III, Kec. Tambun Sel, Bekasi, Jawa Barat, 17510
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="more-info mb-4 px-0 px-md-5 py-5">
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow-lg border-1 text-center h-100 text-our-info py-4 text-our-color" style="border-radius:25px">
                                <div class="card-body h-100">
                                    <div class="card-title fw-bold fs-5">Kontak Kami</div>
                                    <p class="card-text fs-7">Apabila Ada Yang Ingin Ditanyakan Dari Layanan Kami Silahkan Chat atau Telefon Kami</p>
                                    <a href="'.$contact["link-whatsapp"].'" class="btn btn-green rounded-3"><span class="fa fa-whatsapp"></span> Chat / Telp Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>

    </body>';  
}

function MainPage_Template_iamLostPage($data){

    $ipAddress = getIpAddress();

    echo '
    <body class="d-flex flex-column h-100">';           
        Navbar("");
        echo '

        <main>
            <div class="everything">

                <!-- OPENING -->
                <div class="services px-0 mx-md-5 mt-5 mb-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-our-color fw-bold">404</h1>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5 class="text-our-color fs-5">Halaman Tidak Ditemukan</h5>
                        </div>
                    </div>
                </div>

                <!-- SERVICE DETAIL -->
                <div class="services mb-5 pb-5 mx-md-5">
                    <div class="row mx-1 mx-md-3 mb-4">
                        <div class="col text-center">
                            <img src="/drives/drive-main-file/images/sleeping-girl.jpg" width="100%" style="object-fit:cover">
                        </div>
                    </div>
                </div> 
            </div>
        </main>

        <!-- FOOTER -->';
        
        Layout_Footer();

        echo '

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <a href="#" onclick="topFunction()" class="btn btn-scroll-up" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/global.js"></script>

    </body>';
}


function Navbar($activePage){
    $contact = getContact();
    $menu = array(
        "home"=>array("page"=>"Beranda", "url"=>"/"),
        "about-us"=>array("page"=>"Tentang Kami", "url"=>"/about-us"),
        "service"=>array("page"=>"Layanan", "url"=>"/service"),
        "benefit"=>array("page"=>"Keuntungan", "url"=>"/benefit"),
        "work-area"=>array("page"=>"Area Kerja", "url"=>"/work-area"),
        "contact"=>array("page"=>"Kontak", "url"=>"/contact")
    );

    if($activePage == "authentication"){
        $page = "active";
    }
    echo '
        <header>
            <nav class="navbar navbar-expand-md bg-darkblue">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white"><span class="fa fa-phone"></span> contact</span>
                    </button>
                    <div class="collapse navbar-collapse" id="bdNavbar">
                        <div class="navbar-nav-scroll">
                            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                                <li class="nav-item text-white">
                                     <span class="fa fa-envelope-o"></span> '.$contact["email"].'  &nbsp;&nbsp;
                                </li>
                                <li class="nav-item text-white"> 
                                     <span class="fa fa-phone"></span> '.$contact["phone"].'
                                </li>
                            </ul>
                        </div>
                        <hr class="d-md-none text-white-50">

                        <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                            <li class="nav-item">
                                <a href="'.$contact["link-whatsapp"].'" class="nav-link rounded-2" target="_blank" rel="noopener" aria-label="GitHub">
                                    <span class="fa fa-whatsapp text-white"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="'.$contact["link-instagram"].'" class="nav-link p-2" target="_blank" rel="noopener" aria-label="GitHub">
                                    <span class="fa fa-instagram text-white"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="'.$contact["link-facebook"].'" class="nav-link p-2" href="https://www.facebook.com/profile.php?id=100082307663543" target="_blank" rel="noopener" aria-label="GitHub">
                                    <span class="fa fa-facebook text-white"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="'.$contact["link-twitter"].'" class="nav-link p-2" href="#" target="_blank" rel="noopener" aria-label="GitHub">
                                    <span class="fa fa-twitter text-white"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <nav class="bd-subnavbar shadow" aria-label="Secondary navigation">
            <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand ps-md-5 ps-2" href="/">
                    <img src="/drives/drive-main-file/images/main-logo.png" alt="" width="130" height="42">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-md-auto sub-navbar-menu">';
                        foreach($menu as $page=>$detail){
                            if($page==$activePage){
                                echo '
                            <li class="nav-item">
                                <a href="'.$detail["url"].'" class="btn nav-btn-darkblue active text-white fw-bold">
                                    <span class="d-lg-inline">'.$detail["page"].'</span>
                                </a>
                            </li>';
                            }else{
                                echo '
                            <li class="nav-item">
                                <a href="'.$detail["url"].'" class="btn text-darkblue fw-bold">
                                    <span class="d-lg-inline">'.$detail["page"].'</span>
                                </a>
                            </li>';
                            }
                        }
                        echo '
                    </ul>
                    <ul class="navbar-nav flex-row flex-wrap me-4 sub-navbar-menu">
                        <li class="nav-item">
                            <a href="/authentication/lgn.php" class="btn btn-link icon-account p-0 rounded-circle '.$page.'">
                                <div class="sunny-icon-sm sunny-icon-account"></div>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>';
}

function Layout_Footer(){
    $contact = getContact();
    echo '
        <footer class="footer mt-auto d-flex flex-wrap justify-content-between align-items-center py-3 px-4 border-top bg-primary mb-0">
            <div class="col-12 col-md-4 d-flex me- align-items-center">
                <span class="text-white">&copy; 2021 Company, Inc</span>
            </div>
            <div class="col-12 col-md-4 text-md-center">
                <text class="fs-6 text-white fw-light">&copy; Copyright <span class="text-white fw-bold">rewang.id</span> All Rights Reserved</text>
            </div>
            <div class="col-12 col-md-4 justify-content-end d-flex">
                <ul class="nav list-unstyled">
                    <li class="ms-3"><a class="text-white" href="'.$contact["link-whatsapp"].'"><span class="fa fa-whatsapp"></span></a></li>
                    <li class="ms-3"><a class="text-white" href="'.$contact["link-instagram"].'"><span class="fa fa-instagram"></span></a></li>
                    <li class="ms-3"><a class="text-white" href="'.$contact["link-facebook"].'"><span class="fa fa-facebook"></span></a></li>
                    <li class="ms-3"><a class="text-white" href="'.$contact["link-twitter"].'"><span class="fa fa-twitter"></span></a></li>
                </ul>
            </div>
        </footer>
    ';
}

function AuthenticationPage_Template_loginPage($data){
    $ipAddress = getIpAddress();
    $status = "d-none";
    if(isset($data["authenticationLoginError"])){
        $status = "";
    }else{
        $data["authenticationLoginError"] = "";
    }

    echo '
    
    <body>';           
        Navbar("authentication");
        echo '


        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-danger '.$status.'" id="login-failed" role="alert">
                    '.$data["authenticationLoginError"].'!
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="row g-3 needs-validation" id="form-login" novalidate>
                        <div class="">
                              <input type="hidden" name="authentication_login" value="000">
                              <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                        </div>
                        <div class="">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" autocomplete="chrome-off" required>
                              <div class="invalid-feedback">
                                Enter Username!
                              </div>
                        </div>
                        <div class="">
                            <label for="validationCustomPassword" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="validationCustomPassword" aria-describedby="inputGroupPrepend" autocomplete="new-password" required>
                              <div class="invalid-feedback">
                                Enter Password!
                              </div>
                        </div>
                        
                        <div class="col-12">
                            <button class="btn btn-primary" id="login-button" type="submit"> 
                              Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="/assets/drive/important-images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Login Status</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/handler_form/authentication.js"></script>
    <script src="/assets/template/js/global.js"></script>
        
    </body>  


    ';
}


// ======== Template Page Inside (Currently Admin)
function DashboardPage_Template_dashboardPage($data){
    $ipAddress = getIpAddress();
    $sidebarMenu = $data["sidebarMenu"];
    $articles = $data["articles"];

    echo '

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">Sign out</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">';
                            foreach($sidebarMenu as $page){
                                echo '
                            <li class="nav-item">
                                <a class="nav-link '.$page["status"].'" href="'.$page["url"].'">
                                    <span data-feather="'.$page["icon"].'"></span>
                                    '.$page["page"].'
                                </a>
                            </li>';
                            }

                            echo '
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/settings">
                                    <span data-feather="settings"></span>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">
                                    <span data-feather="log-out"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div clas="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">
                                <span class="fa fa-file-o"></span>
                                Artikel
                            </h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" id="add-article">Tambah Artikel <span class="fa fa-plus"></span></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">'.sizeof($articles).'</button>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-3 row-cols-1 justify-content-md-start justify-content-center">
                    ';

                        foreach($articles as $article){
                            echo '
                            <div class="col" style="width: 18rem;">
                                <div class="card mb-4">
                                    <img src="/drives/drive-article/article-images/'.$article["imageName"].'" class="p-2 card-img-top rounded float-start" alt="..." width="200" height="200" style="object-fit:cover">
                                    <div class="card-header">
                                        <a href="#" class="card-link text-secondary edit-article">Edit</a>
                                        <a href="#" class="card-link text-danger delete-article">Delete</a>
                                        <a href="#" class="d-none article-id">'.$article["articleID"].'</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-none article-id">'.$article["articleID"].'</div>
                                        <h5 class="card-title">'.$article["title"].'</h5>
                                        <p class="card-text text-truncate" style="height: 60px">'.$article["description"].'</p>
                                        
                                        <footer class="blockquote-footer">'.display_date($article["dateCreated"]).'</footer>
                                    </div>
                                    <div class="card-footer">
                                        <a href="'.$article["url"].'" class="btn btn-primary btn-sm btn-rounded">Baca Lebih Lanjut <span class="fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                                ';
                        }
                        echo '                        
                    </div>
                </main>
            </div>
        </div>
        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <text class="d-none" id="my-username">'.$_SESSION['username'].'</text>
        <text class="d-none" id="my-code">'.$_SESSION['code'].'</text>
        <!-- Modal Add Article -->
        <div class="modal fade" id="modal-add-article" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-plus"></span> Tambah Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-add-article" novalidate>
                            <input type="hidden" name="add_article" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" name="authenticationCode" id="add-article-authentication-code" value="000">
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Thumbnail</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="articleImage" accept="image/*" required>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingTitle" placeholder="Judul" name="title" required>
                                <label for="floatingTitle">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingDetail" placeholder="Detail" name="description" required>
                                <label for="floatingDetail">Detail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingUrl" placeholder="Url" name="url" required>
                                <label for="floatingUrl">Url/Link</label>
                            </div>
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-add-article">Tambah</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Modal Edit Article -->
        <div class="modal fade" id="modal-edit-article" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-cog"></span> Edit Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-edit-article" novalidate>
                            <input type="hidden" class="new-data" name="edit_article" value="000">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="articleID" id="edit-article-id" value="000">
                            <div class="row">
                                <img src="/drives/drive-article/article-images/general-image.jpg" class="img-thumbnail p-2 float-start rounded" id="edit-image" alt="..." style="width:150px;height:150px">
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Thumbnail</label>
                                    <input class="form-control form-control-sm new-data" id="formFileSm" name="articleImage" type="file" name="articleImage" accept="image/*" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="edit-title" class="form-label">Ganti Judul</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" placeholder="Judul Lama" aria-label="Judul Lama" id="edit-title" value="Judul Lama" disabled>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="title" placeholder="Judul Baru" aria-label="Judul Baru" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="edit-description" class="form-label">Ganti Detail</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" placeholder="Deskripsi Lama" aria-label="Deskripsi Lama" id="edit-description" value="Deskripsi Lama" disabled>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="description" placeholder="Deskripsi Baru" aria-label="Deskripsi Baru" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="edit-url" class="form-label">Ganti Url/Link</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" placeholder="Url Lama" aria-label="Url Lama" id="edit-url" value="Url Lama" disabled>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="url" placeholder="Url Baru" aria-label="Url Baru" required>
                                </div>
                            </div>
                            </div class="row">
                                <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-edit-article">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete Article -->
        <div class="modal fade" id="modal-delete-article" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-exclamation-circle"></span> Hapus Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-delete-article" novalidate>
                            <input type="hidden" class="new-data" name="delete_article" value="000">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="articleID" id="delete-article-id" value="000">
                            <div class="row text-center">
                                <h3>Hapus Artikel? <br>
                                    <text id="title">( Article )</text>
                                </h3>
                            </div>
                            
                            </div class="row">
                                <button type="submit" class="btn btn-danger text-white fw-bold" id="btn-form-delete-article">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/dashboard.js"></script>
        <script src="/assets/handler_form/article.js"></script>
        <script src="/assets/template/js/article.js"></script>
    </body>';
}

function DashboardPage_Template_servicePage($data){
    $ipAddress = getIpAddress();
    $sidebarMenu = $data["sidebarMenu"];
    $services = $data["services"];
    echo '

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">Sign out</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">';
                            foreach($sidebarMenu as $page){
                                echo '
                            <li class="nav-item">
                                <a class="nav-link '.$page["status"].'" href="'.$page["url"].'">
                                    <span data-feather="'.$page["icon"].'"></span>
                                    '.$page["page"].'
                                </a>
                            </li>';
                            }
                            echo '
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/settings">
                                    <span data-feather="settings"></span>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">
                                    <span data-feather="log-out"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div clas="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">
                                <span class="fa fa-file-o"></span>
                                Layanan
                            </h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" id="add-service">Tambah Layanan <span class="fa fa-plus"></span></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">'.sizeof($services).'</button>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-2 row-cols-md-2 px-md-5 row-cols-xl-3 justify-content-center">';
                        if(sizeof($services)==0){
                            echo "<h1>Kosong</h1>";
                        }
                        foreach($services as $service){
                            echo '
                        <div class="col mb-4 d-flex box-sunny">
                            <div class="card mx-auto service-item border border-1 shadow text-our-color text-center">

                                <div class="card-header border-0 bg-body">
                                    <div class="baysunny-icon position-relative top-0 start-50 translate-middle-x" id="sunnyIcon-'.$service["serviceID"].'"></div>
                                </div>
                                <div class="card-body">
                                    <text class="card-title fw-bold">'.$service["title"].'</text>
                                    <p class="card-text">'.$service["description"].'</p>
                                </div>
                                <div class="card-footer mb-2">
                                    <a href="#" class="card-link text-secondary edit-service">Edit</a>
                                    <a href="#" class="card-link text-danger delete-service">Delete</a>
                                    <a href="#" class="d-none service-id">'.$service["serviceID"].'</a>
                                </div>     
                            </div>
                        </div>
                            ';
                        }

                        echo '
                    </div>
                    
                </main>
            </div>
        </div>

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <text class="d-none" id="my-username">'.$_SESSION['username'].'</text>
        <text class="d-none" id="my-code">'.$_SESSION['code'].'</text>

        <!-- Modal Add Service -->
        <div class="modal fade" id="modal-add-service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-plus"></span> Tambah Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-add-service" novalidate>
                            <input type="hidden" name="add_service" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" name="authenticationCode" id="add-service-authentication-code" value="000">
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">icon </label>
                                <label for="formFileSm" class="form-label text-warning"><span class="fa fa-exclamation-circle"></span> format (svg, jpg, png), ukuran (), warna (#00A2E9)</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="serviceIcon" accept="image/*" required>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingTitle" placeholder="Judul" name="title" required>
                                <label for="floatingTitle">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingDescription" placeholder="Detail" name="description" required>
                                <label for="floatingDescription">Detail</label>
                            </div>
                            <div class="mb-3">
                                <label for="serviceImage" class="form-label">Gambar Layanan </label>
                                <input class="form-control form-control-sm" id="serviceImage" type="file" name="serviceImage" accept="image/*" required>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Penjelasan" id="floatingFDescription" name="fullDescription" style="height: 100px" required></textarea>
                                <label for="floatingFDescription">Penjelasan</label>
                            </div>
                            
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-add-service">Tambah</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Modal Edit Service -->
        <div class="modal fade" id="modal-edit-service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-exclamation-circle"></span> Perbarui Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-edit-service" novalidate>
                            <input type="hidden" name="edit_service" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">

                            <input type="hidden" class="new-data" name="serviceID" id="edit-service-id" value="000">
                            <input type="hidden" name="authenticationCode" id="edit-service-authentication-code" value="000">
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label"><span class="fa fa-exclamation-circle text-info"></span> Ganti icon </label>
                                <label for="formFileSm" class="form-label text-warning"><span class="fa fa-exclamation-circle"></span> format (svg), ukuran (), warna (#00A2E9)</label>
                                <input class="form-control form-control-sm new-data" id="formFileSm" type="file" name="serviceIcon" accept="image/*" required>
                            </div>
                            <div class="row">
                                <label for="edit-service-title" class="form-label"><span class="fa fa-exclamation-circle text-info"></span> Ganti Judul</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" placeholder="Judul Lama" aria-label="Judul Lama"  id="edit-service-title" value="Judul Lama" disabled>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="newTitle" placeholder="Judul Baru" aria-label="Judul Baru" required>
                                </div>
                            </div>

                            <div class="row">
                                <label for="edit-service-description" class="form-label"><span class="fa fa-exclamation-circle text-info"></span> Ganti Deskripsi</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" placeholder="Deskripsi Lama" aria-label="Deskripsi Lama" id="edit-service-description" value="Deskripsi Lama" disabled>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="newDescription" placeholder="Deskripsi Baru" aria-label="Deskripsi Baru" required>
                                </div>
                            </div>

                            <div class="row">
                                <label for="edit-service-description" class="form-label"><span class="fa fa-exclamation-circle text-info"></span> Ganti Gambar</label>
                                    <div class="mb-3">
                                    <label for="fileImage" class="form-label">icon </label>
                                    <label for="fileImage" class="form-label text-warning"><span class="fa fa-exclamation-circle"></span> format (jpg, jpeg, png), ukuran ()</label>
                                    <input class="form-control form-control-sm new-data" id="newFileImage" type="file" name="serviceImage" accept="image/*" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Gambar Lama
                                        </div>
                                        <div class="card-img-top">
                                            <img src="/drives/drive-service/service-images/general-image.jpg" width="100%"  height="200" style="object-fit:cover" id="edit-service-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Gambar Baru
                                        </div>
                                        <div class="card-img-top">
                                            <img src="/drives/drive-service/service-images/general-image.jpg" width="100%" height="200" style="object-fit:cover" id="edit-service-newImage">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="edit-service-description" class="form-label"><span class="fa fa-exclamation-circle text-info"></span> Ganti Penjelasan</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control old-data" placeholder="Penjelasan Lama" id="edit-service-fullDescription" style="height: 100px" disabled></textarea>
                                    <label for="edit-service-FDescription">Penjelasan Lama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control new-data" placeholder="Penjelasan Baru" id="edit-service-fullDescription" name="newFullDescription" style="height: 100px" required></textarea>
                                    <label for="edit-service-FDescription">Penjelasan Baru</label>
                                </div>
                            </div>
                            
                            
                            
                            
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-edit-service">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete Service -->
        <div class="modal fade" id="modal-delete-service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-exclamation-circle"></span> Hapus Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-delete-service" novalidate>
                            <input type="hidden" class="new-data" name="delete_service" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="serviceID" id="delete-service-id" value="000">
                            <input type="hidden" name="authenticationCode" id="delete-service-authentication-code" value="000">
                            <div class="row row-cols-1 px-md-5 justify-content-center">
                                <div class="row text-center">
                                    <text>Hapus Layanan?</text>
                                    <div class="col d-flex box-sunny">
                                        <div class="card mx-auto service-item border border-1 shadow text-our-color text-center">

                                            <div class="card-header border-0 bg-body">
                                                <div class="baysunny-icon position-relative top-0 start-50 translate-middle-x" id="delete-service-sunnyIcon"></div>
                                            </div>
                                            <div class="card-body">
                                                <text class="card-title fw-bold" id="delete-service-title">[TITLE]</text>
                                                <p class="card-text" id="delete-service-description">[DESCRIPTION]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            </div class="row">
                                <button type="submit" class="btn btn-danger text-white fw-bold" id="btn-form-delete-service">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/dashboard.js"></script>
        <script src="/assets/template/js/service.js"></script>
        <script src="/assets/template/js/baysunny-load-icon.js"></script>
        <script src="/assets/handler_form/service.js"></script>
    </body>';
}

function DashboardPage_Template_workAreaPage($data){
    $ipAddress = getIpAddress();
    $sidebarMenu = $data["sidebarMenu"];
    $workAreas = $data["workAreas"];
    echo '

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">Sign out</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">';
                            foreach($sidebarMenu as $page){
                                echo '
                            <li class="nav-item">
                                <a class="nav-link '.$page["status"].'" href="'.$page["url"].'">
                                    <span data-feather="'.$page["icon"].'"></span>
                                    '.$page["page"].'
                                </a>
                            </li>';
                            }
                            echo '
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/settings">
                                    <span data-feather="settings"></span>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">
                                    <span data-feather="log-out"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div clas="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">
                                <span class="fa fa-file-o"></span>
                                Area Kerja
                            </h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <span class="d-none" id="add-workArea-parent-id">0</span>
                                    <button type="button" class="btn btn-sm btn-outline-secondary add-workArea" id="add-mainArea">Tambah Area Kerja <span class="fa fa-plus"></span></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">'.sizeof($workAreas).'</button>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-1 justify-content-center">
                        <div class="accordion" id="accordionExample">';
                        foreach($workAreas as $area){
                            echo '
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-'.$area["workAreaID"].'">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-'.$area["workAreaID"].'" aria-expanded="true" aria-controls="collapse-'.$area["workAreaID"].'">
                                        <text class="fs-7">KOTA</text> - '.$area["areaName"].'
                                    </button>
                                </h2>
                                <div id="collapse-'.$area["workAreaID"].'" class="accordion-collapse collapse" aria-labelledby="heading-'.$area["workAreaID"].'" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-block">';
                                                    if(sizeof($area["child"]) == 0){
                                                        echo 'Kosong';
                                                    }
                                                    foreach($area["child"] as $subArea){
                                                        echo '
                                                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                                                        <span class="d-none" id="delete-workArea-id">'.$subArea["workAreaID"].'</span>
                                                        <span class="d-none" id="delete-workArea-parent-id">'.$subArea["parentID"].'</span>
                                                        <span class="d-none" id="delete-workArea-parent-name">'.$subArea["parentID"].'</span>
                                                        <span class="d-none" id="delete-workArea-name">'.$subArea["areaName"].'</span>
                                                        <button type="button" class="btn btn-sm btn-primary">'.$subArea["areaName"].'</button>
                                                        <button type="button" class="btn btn-sm btn-primary delete-workArea" id="delete-subAreaof-'.$subArea["workAreaID"].'"><span class="fa fa-close"></span></button>
                                                    </div>';
                                                    }
                                                    echo '
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <! –– these spans only for add ––>   
                                                <span class="d-none" id="add-workArea-parent-id">'.$area["workAreaID"].'</span>
                                                <span class="d-none" id="add-workArea-parent-name">'.$area["areaName"].'</span>
                                                <button type="button" class="btn btn-link text-info fs-7 add-workArea" id="add-subAreaof-'.$area["workAreaID"].'">
                                                    <span class="fa fa-plus"></span> Tambah <strong>Sub Area Kerja</strong> ('.$area["areaName"].')
                                                </button>

                                                <! –– these spans only for delete ––>
                                                <span class="d-none" id="delete-workArea-id">'.$area["workAreaID"].'</span>
                                                <span class="d-none" id="delete-workArea-name">'.$area["areaName"].'</span>
                                                <span class="d-none" id="delete-workArea-parent-id">'.$area["parentID"].'</span>
                                                <button type="button" class="btn btn-link text-danger fs-7 delete-workArea" id="delete-workAreaof-'.$area["workAreaID"].'">
                                                    <span class="fa fa-close"></span> hapus <strong>Area Kerja</strong> ('.$area["areaName"].')
                                                </button>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '
                            
                            
                        </div>
                    </div>
                    
                </main>
            </div>
        </div>

        <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
        <text class="d-none" id="my-username">'.$_SESSION['username'].'</text>
        <text class="d-none" id="my-code">'.$_SESSION['code'].'</text>

        <!-- Modal Add WorkArea -->
        <div class="modal fade" id="modal-add-workArea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-plus"></span> Tambah Area Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-add-workArea" novalidate>
                            <input type="hidden" name="add_workArea" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" name="level" id="add-workArea-level" value="000">
                            <input type="hidden" name="parentID" id="add-workArea-parentID" value="000">

                            <input type="hidden" name="authenticationCode" id="add-workArea-authentication-code" value="000">
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="floatingAreaName" placeholder="Area Kerja" name="areaName" required>
                                <label for="floatingAreaName">Lokasi Area Kerja</label>
                            </div>
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-add-workArea">Tambah</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Modal Delete WorkArea -->
        <div class="modal fade" id="modal-delete-workArea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-exclamation-circle"></span> Hapus Area Kerja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-delete-workArea" novalidate>
                            <input type="hidden" name="delete_workArea" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" name="workAreaID" id="to-delete-workArea-id" value="000">
                            <input type="hidden" name="authenticationCode" id="delete-workArea-authentication-code" value="000">
                            <div class="row row-cols-1 px-md-5 justify-content-center">
                                <div class="row text-center">
                                    <text>Hapus Area Kerja?</text>
                                    <h3 id="to-delete-workArea-name">[NONE]</h3>
                                </div>
                            </div>
                            
                            </div class="row">
                                <button type="submit" class="btn btn-danger text-white fw-bold" id="btn-form-delete-workArea">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/dashboard.js"></script>
        <script src="/assets/template/js/work_area.js"></script>
        <script src="/assets/handler_form/work_area.js"></script>
    </body>';
}

function DashboardPage_Template_reviewPage($data){
    $sidebarMenu = $data["sidebarMenu"];
    $reviews = $data["reviews"];

    echo '

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">Sign out</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">';
                            foreach($sidebarMenu as $page){
                                echo '
                            <li class="nav-item">
                                <a class="nav-link '.$page["status"].'" href="'.$page["url"].'">
                                    <span data-feather="'.$page["icon"].'"></span>
                                    '.$page["page"].'
                                </a>
                            </li>';
                            }
                            echo '
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/settings">
                                    <span data-feather="settings"></span>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">
                                    <span data-feather="log-out"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div clas="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">
                                <span class="fa fa-star-o"></span>
                                Reviews
                            </h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-3 row-cols-2">';
                        foreach($reviews as $review){
                            if($review["status"] != 0 && $review["status"]!=1){
                                continue;
                            }
                            $reviewStatus = "";
                            $reviewInfo = '<label class="form-check-label" for="flexSwitchCheckDefault"><span class="fa fa-exclamation-circle"></span> Tidak Ditampilkan</label>';
                            if($review["status"] == 1){
                                $reviewStatus = "checked";
                                $reviewInfo = "";
                            }

                            echo '
                            <div class="col mb-4" style="">
                                <div class="card" style="height:100%">
                                    <div class="card-header bg-our-color">
                                        <div class="row justify-content-between">
                                            <div class="col-6">';
                                            for($i=0; $i<5; $i++){
                                                if($i<$review["starRating"]){
                                                    echo '<span class="fa fa-star text-warning pt-2"></span>';
                                                }else{
                                                    echo '<span class="fa fa-star text-dark"></span>';
                                                }

                                            }

                                            echo '
                                            </div>
                                            <div class="col-4 d-flex justify-content-end">
                                                <button class="card-link btn btn-link p-0 delete-review">
                                                    <span class="fa fa-md fa-close text-danger"></span>
                                                </button>
                                                <a href="#" class="d-none review-id">'.$review["reviewID"].'</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body my-auto">
                                        <h5 class="card-title fs-8"><span class="fa fa-calendar"></span> '.display_date($review["dateCreated"]).'</h5>
                                        <h5 class="card-title fs-8">
                                            <span class="fa fa-user-o"></span> '.$review["name"].'
                                        </h5>
                                        <h5 class="card-title fs-8 mb-4">
                                            <span class="fa fa-envelope-o"></span> '.$review["email"].'
                                        </h5>
                                        <p class="card-text">'.$review["message"].'</p>
                                        
                                    </div>
                                    <div class="card-footer d-flex">
                                        <a href="#" class="d-none review-id">'.$review["reviewID"].'</a>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input mt-1 sh-review" type="checkbox" role="switch" id="flexSwitchCheckDefault" '.$reviewStatus.'>
                                            <a href="#" class="d-none review-id">'.$review["reviewID"].'</a>
                                            <span class="spinner-border spinner-border-sm review-status-loading-animation d-none"></span>
                                            <text class="fs-8">'.$reviewInfo.'</text>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '
                                       
                    </div>
                </main>
            </div>
        </div>

        <!-- Modal Change Status Review -->
        <div class="modal fade" id="modal-change-status-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-cog"></span> Tampilkan Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-change-status-review" novalidate>
                            <input type="hidden" class="new-data" name="change_status_review" value="000">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="reviewID" id="change-status-review-id" value="000">
                            
                            <div class="card" style="height:100%">
                                <div class="card-header">
                                    <div class="row justify-content-between">
                                        <div class="col-4" id="change-status-review-star-rating">
                                            <span class="fa fa-star text-warning"></span> 0
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <footer class="blockquote-footer" id="change-status-review-email">[@Email]</footer>
                                    <p class="card-text" id="change-status-review-message">[Message]</p>
                                </div>
                                <div class="card-footer d-flex">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input mt-1" type="checkbox" role="switch" id="change-status-review-sh" disabled>
                                        <label class="form-check-label text-warning" id="change-status-review-info" for="change-status-review-sh">
                                            <span class="fa fa-exclamation-circle"></span> [hidden]
                                        </label>
                                    </div>
                                </div>
                            </div>
                            </div class="row">
                                <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-change-status-review">[Update]</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete Review -->
        <div class="modal fade" id="modal-delete-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-danger" id="staticBackdropLabel"><span class="fa fa-exclamation-circle"></span> Hapus Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                        <form class="row g-3 needs-validation" id="form-delete-review" novalidate>
                            <input type="hidden" class="new-data" name="delete_review" value="000">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="reviewID" id="delete-review-id" value="000">
                            
                            <div class="card" style="height:100%">
                                <div class="card-header">
                                    <div class="row justify-content-between">
                                        <div class="col-4" id="delete-review-star-rating">
                                            <span class="fa fa-star text-warning"></span> 0
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <footer class="blockquote-footer" id="delete-review-email">[@Email]</footer>
                                    <p class="card-text" id="delete-review-message">[Message]</p>
                                </div>
                                <div class="card-footer d-flex">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input mt-1" id="delete-review-sh" type="checkbox" role="switch" disabled>
                                        <label class="form-check-label text-warning" id="delete-review-info" for="delete-review-sh"><span class="fa fa-exclamation-circle"></span> [NULL]</label>
                                    </div>
                                </div>
                            </div>
                            </div class="row">
                                <button type="submit" class="btn btn-danger text-white fw-bold" id="btn-form-delete-review">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/dashboard.js"></script>
        <script src="/assets/handler_form/review.js"></script>
        <script src="/assets/template/js/review.js"></script>
    </body>';
}

function SettingPage_Template_settingPage($data){
    $sidebarMenu = $data["sidebarMenu"];
    $ipAddress = getIpAddress();
    $user = $data["user"];
    echo '

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">Sign out</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">';
                            foreach($sidebarMenu as $page){
                                echo '
                            <li class="nav-item">
                                <a class="nav-link '.$page["status"].'" href="'.$page["url"].'">
                                    <span data-feather="'.$page["icon"].'"></span>
                                    '.$page["page"].'
                                </a>
                            </li>';
                            }
                            echo '
                        </ul>
                        
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link active" href="/dashboard/settings">
                                    <span data-feather="settings"></span>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout">
                                    <span data-feather="log-out"></span>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div clas="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">
                                <span class="fa fa-cog"></span>
                                Settings
                            </h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-cols-md-3 row-cols-1 justify-content-md-start justify-content-center">

                        <form class="row g-3 needs-validation" id="form-update-user" novalidate>
                            <input type="hidden" name="generate_authentication_code" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" name="note" value="user-update">
                            <input type="hidden" name="userID" value="000">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="newUsername" class="form-control" id="username" value="'.$user["username"].'" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="newPassword" class="form-control" id="password" value="'.$user["showedPassword"].'" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="newEmail" class="form-control" id="email" value="'.$user["email"].'" required>
                            </div>
                            <button type="submit" id="btn-form-update-user" class="btn btn-primary">Update</button>
                        </form>
                                       
                    </div>
                </main>
            </div>
        </div>

     
        <!-- Modal Update User Comfirmation -->
        <div class="modal fade" id="modal-confirmation-update-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><span class="fa fa-cog"></span> Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-confirmation-update-user" novalidate>
                            <input type="hidden" class="new-data" name="update_user" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" class="new-data" name="username" value="'.$_SESSION["username"].'">
                            <input type="hidden" class="new-data" name="code" value="'.$_SESSION["code"].'">
                            <input type="hidden" class="new-data" name="authenticationCode" id="authentication-code" value="">
                            
                            <div class="row">
                                <label for="edit-username" class="form-label">Username</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="text" class="form-control old-data" name="username" placeholder="Username" aria-label="Username" id="edit-username" value="[username]" required readonly>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="text" class="form-control new-data" name="newUsername" id="new-username" placeholder="New Username" aria-label="New Username" required readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label for="edit-password" class="form-label">Ganti Detail</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="password" class="form-control old-data" placeholder="Password" aria-label="Password" id="edit-password" value="[password]" readonly>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="password" class="form-control new-data" name="newPassword" id="new-password" placeholder="New Password" aria-label="New Password" required readonly>
                                </div>
                            </div>
                            <div class="row">
                                <label for="edit-email" class="form-label">Ganti Url/Link</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary copy-text" type="button" id="button-addon1"><span class="fa fa-copy"></span></button>
                                    <input type="email" class="form-control old-data" placeholder="email" aria-label="email" id="edit-email" value="[email]" readonly>
                                    <span class="input-group-text"><span class="fa fa-arrow-right"></span></span>
                                    <input type="email" class="form-control new-data" name="newEmail" id="new-email" placeholder="New Email" aria-label="New Email" required readonly>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#modal-enter-password" data-bs-toggle="modal"> <span class="fa fa-sign-in"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update User Comfirmation Password -->
        <div class="modal fade" id="modal-enter-password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><button class="btn btn-primary" data-bs-target="#modal-confirmation-update-user" data-bs-toggle="modal"> <span class="fa fa-arrow-left"></span></button> Konfirmasi Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-4">
                            
                            
                            <div class="row">
                                <label for="confirmation-password" class="form-label">Masukan Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control new-data" name="password" placeholder="password" id="confirmation-password" aria-label="password" required>
                                </div>
                            </div>
                            
                            </div class="row">
                                <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-confirmation-update-user">Update</button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/drive-main-file/images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/dashboard.js"></script>
        <script src="/assets/handler_form/user.js"></script>
    </body>';
}


// ======== Dump
function MainPage_Template_mainPagemine($data){
    $articles = $data["articles"];
    $reviews = $data["reviews"];
    $ipAddress = getIpAddress();
    
    echo '
    
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">WC-Umum</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0 pe-1">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><span class="fa fa-home"></span> Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-address-book"></span> Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-handshake-o"></span> Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-gift"></span> Keuntungan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-fa fa-sitemap"></span> Area Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-phone"></span> Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="fa fa-suitcase"></span> Profile</a>
                            </li>
                        </ul>
                        
                        <div class="text-end">
                            <a href="/authentication/lgn.php" class="btn btn-sm btn-warning me-2">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

     
        <main>
            
            <!-- Carousel. -->

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/drives/important-images/YaeMiko.jpg" alt="LOL" width="100%" height="100%" style="object-fit: cover;">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Yae Miko</h1>
                                <p>The Kitsune Lady</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Simp now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/drives/important-images/YaeMiko2.jpg" alt="LOL" width="100%" height="100%" style="object-fit: cover;">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Yae Miko</h1>
                                <p>The Kitsune Lady</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Or die!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="marketing">
                
                <a href="#" onclick="topFunction()" class="btn btn-dark" id="back-to-top" title="Go to top"><span class="fa fa-arrow-up"></span></a>
                

                <!-- OUR services -->
                <div class="our-services mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline">Layanan Kami</h3>
                        </div>
                    </div>
                    
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 m-4 service-list">

                        <div class="col service-item-first" style="height:195px">
                            <div class="card border-0 text-info text-center h-100">
                                <div class="card-body h-100">
                                    <h5 class="card-title"><span class="fa fa-calendar-check-o"></span></h5>
                                    <h5 class="card-title fs-6">PENYEDOTAN SEPTIC TANK</h5>
                                    <p class="card-text fs-7">Melayani Jasa Penyedotan Untuk Limbah Tinja.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col service-item" style="height:195px">
                            <div class="card border-0 text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-clock-o""></span></h5>
                                    <h5 class="card-title fs-6">GRAYWATER NON B3</h5>
                                    <p class="card-text fs-7">Melayani Jasa Pengangkutan Limbah Industri Non B3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col service-item" style="height:195px">
                            <div class="card border-0 text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-credit-card"></span></h5>
                                    <h5 class="card-title fs-6">LIMBAH LEMAK RESTO</h5>
                                    <p class="card-text fs-7">Melayani Pengangkutan/penyedotan Limbah Lemak Resto, Catering, Toko Kue, Pabrik Dll.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col service-item-last" style="height:195px">
                            <div class="card border-0 text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-credit-card"></span></h5>
                                    <h5 class="card-title fs-6">LIMBAH INDUSTRI NON B3</h5>
                                    <p class="card-text fs-7">Melayani Jasa Pengangkutan Limbah Non B3.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn btn-info text-white btn-rounded fw-bold" data-bs-toggle="modal" data-bs-target="#moreservices">Periksa Layanan Lainnya <span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>

                <!-- ABOUT US -->
                <div class="about-us mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline text-dark">Tentang Kami</h3>
                        </div>
                    </div>
                    <div class="row featurette bg-dark text-white d-flex align-items-center">
                        <div class="col-md-4 p-0">
                            <img src="/drives/important-images/YaoYao.jpg" class="featurette-image img-fluid mx-auto" width="500" height="500">
                        </div>
                        <div class="col-md-8 p-5">
                            <h4 class="fw-bold">SELAMAT DATANG di Berlian Vacuum</h4>
                            <h4 class="">Mengenal Berlian vacuum</h4>
                            <p class="fst-normal lh-sm" style="text-align:justify">Berlian Vacuum merupakan perseroan yang bergerak dibidang pengambilan limbah rumah tangga dan limbah hasil usaha, seperti Sedot WC/Tinja, Sedot Lemak, Pelancaran Saluran/WC Mampet, Dll. </p>
                            <p class="fst-normal lh-sm" style="text-align:justify">Dengan PROSEDUR yang kami terapkan dalam perusahaan peningkatan mutu dalam pekerjaan menjadi salah satu upaya kami dalam memaksimalkan kualitas dalam pelayanan. Jujur, profesional berkualitas serta harga yang terjangkau. </p>
                            
                            <p><a class="btn btn-secondary btn-white" href="#">Baca Detail <span class="fa fa-search"></span></a></p>
                        </div>
                    </div>
                </div>

                <!-- WHY US -->
                <div class="why-us mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline">Mengapa Anda Harus Pilih Kami?</h3>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 mt-2 mb-4">

                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body h-100">
                                    <h5 class="card-title"><span class="fa fa-calendar-check-o"></span></h5>
                                    <h5 class="card-title fs-6">BUKA SETIAP HARI</h5>
                                    <p class="card-text fs-7">Kami Buka Setiap Hari Weekend Hari Libur Nasional Kami Tetap Buka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-clock-o""></span></h5>
                                    <h5 class="card-title fs-6">RESPON CEPAT</h5>
                                    <p class="card-text fs-7">Team Suport Kami Standby Dari Jam 06:00 Sampai Dengan Jam 22:00.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-credit-card"></span></h5>
                                    <h5 class="card-title fs-6">BIAYA TERJANGKAU</h5>
                                    <p class="card-text fs-7">Anda Akan Mendapatkan Layanan Maksimal Terbaik Kami Namun Dengan Biaya Yang Terjangkau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-credit-card"></span></h5>
                                    <h5 class="card-title fs-6">HASIL RAPIH DAN MEMUASKAN</h5>
                                    <p class="card-text fs-7">Kami Sangat Memperhatikan Setiap Detail Pekerjaan Demi Menjaga Kualitas Hasil Dan Kepuasan Pelanggan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-users"></span></h5>
                                    <h5 class="card-title fs-6">TIM PROVESIONAL DAN BERINTEGRITAS</h5>
                                    <p class="card-text fs-7">Kami Sangat Ahli Dan Provesional Dalam Menangani Permasalahan Di Bidang Ini.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-wrench"></span></h5>
                                    <h5 class="card-title fs-6">PERALATAN LENGKAP DAN CANGGIH</h5>
                                    <p class="card-text fs-7">Kualitas Layanan Kami Di Dukung Dengan Peralatan Kerja Yang Selalu Update Dan Canggih.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-calendar-check-o"></span></h5>
                                    <h5 class="card-title fs-6">GARANSI</h5>
                                    <p class="card-text fs-7">Kami Selalu Memberikan Garansi Dari Pekerjaan Yang Sudah Selesai Kami Kerjakan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" style="height:195px">
                            <div class="card shadow border border-2 rounded-3 border-info text-info text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="fa fa-shield"></span></h5>
                                    <h5 class="card-title fs-6">PEMANTAUAN</h5>
                                    <p class="card-text fs-7">Kami Tetep Akan Memantau Dari Hasil Pekerjaan Yang Telah Kami Kerjakan Sebelumnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- PRICE -->
                <div class="prices mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline">Biaya</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="card shadow border border-2 rounded-3 text-info text-center h-100">
                                <div class="card-body h-100">
                                    <h4 class="card-title"><span class="fa fa-money"></span></h4>
                                    <p class="card-text fs-7">Biaya layanan yang kami berikan bervariasi tergantung jenis pekerjaan dan kondisi di lapangan. Kami menentukan biaya layanan berdasarkan lokasi pengerjaan, jenis pekerjaan per titik, dan jarak mobil tangki dengan lokasi pengerjaan, dll. Kami akan menjelaskan semua rincian biaya tersebut saat proses transaksi. Jadi, Anda tidak perlu khawatir bahwa nanti kami akan membebankan biaya yang besar dan tidak diduga-duga saat pengerjaan di lapangan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ARTICLES -->
                <div class="article mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline">Artikel</h3>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">';

                    foreach($articles as $article){
                        echo '
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">Article</strong>
                                    <h5 class="mb-0">'.$article["title"].'</h5>
                                    <div class="mb-1 text-muted">'.display_date($article["dateCreated"]).'</div>
                                    <p class="card-text fs-7 mb-auto lh-sm overflow-hidden" style="max-height:40px;">'.$article["description"].'</p>
                                    <a href="'.$article["url"].'" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img src="/drives/drive-article/article-images/'.$article["imageName"].'" alt="LOL" width="220" height="200" role="img" aria-label="Placeholder: Thumbnail">
                                </div>
                            </div>
                        </div>';
                    }
                        echo '
                        
                        
                    </div>
                </div>

                <!-- MORE INFO -->
                <div class="more-info mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-decoration-underline">Ingin tau info terkait lebih lanjut ?</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1 mt-2 justify-content-center">
                        <div class="col col-md-8">
                            <div class="card shadow border-0 text-center h-100">
                                <div class="card-body h-100">
                                    <h5 class="card-title"><span class="fa fa-money"></span></h5>
                                    <h5 class="card-title fs-6">BUKA SETIAP HARI</h5>
                                    <p class="card-text fs-7">Jika penjelasan kami di atas masih ada yang Anda belum pahami, atau jika Anda ingin mendapatkan informasi lebih detail, silakan hubungi kami melalui beberapa cara di bawah ini. Kami akan sangat senang bisa membantu Anda.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
                <!-- REVIEWS -->
                <div class="row reviews mb-4 shadow-sm px-0 px-md-5 py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="text-info text-decoration-underline">Review</h3>
                            
                        </div>
                        <div class="col-lg-12 text-center">
                            <h5><button class="btn btn-darkblue btn-rounded fw-bold" id="generate-review-code">Klik Untuk Masukan Review Kamu</button></h5>
                        </div>
                    </div>
                    <div class="row justify-content-center">';
                    foreach($reviews as $review){
                        if($review["status"] != 1){
                            continue;
                        }
                        echo '
                        <div class="col-md-3 m-3">
                            <div class="card">
                                <div class="card-header">';
                                for($i=0; $i<5; $i++){
                                    if($i<$review["starRating"]){
                                        echo '<span class="fa fa-star text-warning"></span>';
                                    }else{
                                        echo '<span class="fa fa-star text-dark"></span>';
                                    }

                                }

                                echo '
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <footer class="blockquote-footer">'.$review["email"].'</footer>
                                    <p class="card-text">'.$review["message"].'</p>
                                </div>
                            </div>
                        </div>';
                    }
                    echo '
                    </div>
                </div>


            </div>


            <!-- FOOTER -->
            <footer class="container">
                <text class="d-none" id="my-ipAddress">'.$ipAddress.'</text>
                <p>&copy; 2022-9999 baysunny, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </main>

        <div class="modal fade" id="moreservices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Layanan Kami</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-2">
                            <div class="d-flex flex-row overflow-scroll gx-4 justify-content-between">
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">1</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold">PENYEDOTAN SEPTIC TANK</h6>
                                            <p class="card-text">Melayani Jasa Penyedotan Untuk Limbah Tinja.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">2</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold">GRAYWATER NON B3</h6>
                                            <p class="card-text">Melayani Jasa Pengangkutan Limbah Industri Non B3.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">3</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold">LIMBAH LEMAK RESTO</h6>
                                            <p class="card-text">Melayani Pengangkutan/penyedotan Limbah Lemak Resto, Catering, Toko Kue, Pabrik Dll.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">4</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold">LIMBAH INDUSTRI NON B3</h6>
                                            <p class="card-text">Melayani Jasa Pengangkutan Limbah Non B3.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">5</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Lumpur bor pile</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk penyedotan lumpur bekas bor pile.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">6</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pelancaran kloset</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk pelancaran kloset mampet karena sumbatan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">7</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pelancaran kamar mandi</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk pelancaran kloset mampet karena sumbatan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">8</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pelancaran wastafel</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk pelancaran wastafel mampet karena sumbatan.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">9</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pelancaran drainase</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk pelancaran drainase mempet karena sumbatan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">10</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Penyedotan got lingkungan</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk penyedotan saluran got di lingkungan warga.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">11</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pembuatan septic tank</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk pembuatan septic tank baru konvensional dan bio fill.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-4">
                                    <div class="card text-center shadow-lg border-5" style="width: 14rem;height:100%">
                                        <div class="card-header fw-bold">12</div>
                                        <div class="card-body text-info">
                                            <h6 class="card-title fw-bold text-uppercase">Pembuatan resapan air</h6>
                                            <p class="card-text text-capitalize">Melayani jasa untuk Pembuatan resapan air.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        Berlian Vacuum
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-add-review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukan Review Kamu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="form-add-review" novalidate>
                            <input type="hidden" name="add_review" value="000">
                            <input type="hidden" name="ipAddress" value="'.$ipAddress.'">
                            <input type="hidden" name="code" id="review-code" value="000">
                            <div class="mb-3" id="input-star-rating">
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star one-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star two-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star three-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star four-star text-warning"></span>
                                </button>
                                <button class="btn btn-link p-0 star-rating">
                                    <span class="fa fa-star five-star text-warning"></span>
                                </button>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Thumbnail</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="userImage" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" id="recipient-name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="recipient-name" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Pesan:</label>
                                <textarea class="form-control" id="message-text" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-info text-white fw-bold" id="btn-form-add-review">Tambah</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        Akal Sehat
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Success Notification -->
        <div class="modal fade" id="modal-success-notification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-body text-center text-white bg-info">
                        <h1><span class="fa fa-check"></span></h1>
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification / Error Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-white">
                    <img src="/drives/important-images/YaoYao.jpg" width="30" height="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                   NULL message
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/template/js/review.js"></script>
        <script src="/assets/handler_form/review.js"></script>
        <script>
            window.onscroll = function() {scrollFunction()}

            var mybutton = document.getElementById("back-to-top")
            function scrollFunction() {
              if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
                mybutton.style.display = "block"
              } else {
                mybutton.style.display = "none"
              }
            }

        </script>
    </body>
    ';
}

?>
