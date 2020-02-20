
<body>
    <div class="container-fluid">
        <div class="row">
                <header class="main-header container-fluid shadow p-4 mb-4 ">
                    <nav class=" navbar navbar-expand-sm mx-auto justify-content-center ">
                        
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-dark" href="<?= base_url(); ?>">HOME</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="<?= base_url(); ?>design">PORTOFOLIO</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="<?= base_url(); ?>resume">RESUME</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="<?= base_url(); ?>blog">BLOG</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="<?= base_url(); ?>podcast">PODCAST</a></li>
                        </ul>
                        
                    </nav>
                </header>
        </div>        
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12 media p-3 mx-auto mt-5 h-100 ">
                <section class="content">
                    <?php foreach($about as $abouts) { ?>
                    <span class="txt-home">
                        <?php echo $abouts->about ?> 
                    </span>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>

    
    