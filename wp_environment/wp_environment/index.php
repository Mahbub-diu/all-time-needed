
<?php get_header(); ?>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero_content">
                <h1 class="hero_title fw-semibold fs-2">conrise</h1>
                <p class="hero_description mx-auto mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, esse.</p>
                <button class="hero_button btn btn-warning mt-2 text-uppercase fw-bold">Discover Now</button>
            </div>
        </div>
    </section>

    <!-- Love by people -->
    <section id="lovedby" class="lovedby bg-light">
        <div class="d-flex align-items-center justify-content-center py-3">
            <div class="lovedby_images d-flex align-items-center">
                <img src="src/assets/images/loveby-1.jpg" class="lovedby_pic rounded-circle" width="20px" height="20px">
                <img src="src/assets/images/loveby-2.jpg" class="lovedby_pic rounded-circle" width="20px" height="20px">
            </div>

            <h2 class="lovedby-text mb-0 ms-2 gap-1">
                <span class="fw-bold">Tom, Andreas</span> and <span class="fw-bold">2,534 other people</span> 
                    <img src="src/assets/images/check.png" width="17px" alt=""> 
                love our products.
            </h2>
        </div>
    </section>

    <!-- Categories -->
    <section id="categories" class="caegories">
        <div class="container py-5">
            <h2 class="fs-6 fw-semibold text-center mt-4">Now Trending</h2>
            <h1 class="fs-2 fw-bold text-center mt-3">conrise Theme Categories</h1>
            <div class="row mt-5">

                <div class="col-md-4">
                    <div class="card">
                        <img src="src/assets/images/cat-1.jpg" class="card-img" alt="...">

                        <div class="card-img-overlay d-flex justify-content-center align-items-end">
                            <h3 class="text-center text-white fs-5 fw-bold">men's clothing</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <img src="src/assets/images/cat-2.jpg" class="card-img" alt="...">

                        <div class="card-img-overlay d-flex justify-content-center align-items-end">
                            <h3 class="text-center text-white fs-5 fw-bold">women's clothing</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <img src="src/assets/images/cat-3.jpg" class="card-img" alt="...">

                        <div class="card-img-overlay d-flex justify-content-center align-items-end">
                            <h3 class="text-center text-white fs-5 fw-bold">watches</h3>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Reviews -->
    <section id="reviews" class="reviews mt-5">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <div class="card bg-transparent border-0 ">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center gap-2">
                            <h2 class="card-title text-center fs-5 fw-bold">reviews</h2>
                            <h3 class="d-flex gap-1 fs-3 fw-bold">4.5 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="20px" alt="">
                                    <img src="src/assets/images/star.svg" width="20px" alt="">
                                    <img src="src/assets/images/star.svg" width="20px" alt="">
                                    <img src="src/assets/images/star.svg" width="20px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="20px" alt="">
                                </div>
                            </h3>
                            <p class="review_subtitle w-50 text-center">an average of 428 positive experiences</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-center">
                    <div class="card satisfied_card bg-transparent border-white">
                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div class="review_top d-flex flex-column gap-3 p-3 h-100">
                                <div class="d-flex gap-3">
                                    <div class="d-flex gap-1">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                    </div>
    
                                    <div class="d-flex gap-1 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#656565" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        <p class="review_verified_text mb-0">Verified</p>
                                    </div>
                                </div>
                                <h2 class="card-title fs-6 fw-bold mb-0">Very Satisfied</h2>
                                <p class="review_subtitle">This product really exceeded my expectations. I will definitely buy here again.</p>
                            </div>

                            <div class="review_bottom">
                                <p class="review_reviwer align-items-center mb-0 p-3"><span class="fw-bold">Alex</span>, 12 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-center">
                    <div class="card satisfied_card bg-transparent border-white">
                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div class="review_top d-flex flex-column gap-3 p-3 h-100">
                                <div class="d-flex gap-3">
                                    <div class="d-flex gap-1">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                    </div>
    
                                    <div class="d-flex gap-1 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#656565" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        <p class="review_verified_text mb-0">Verified</p>
                                    </div>
                                </div>
                                <h2 class="card-title fs-6 fw-bold mb-0">Great product</h2>
                                <p class="review_subtitle">Extremely fast delivery, the product is amazing. Great Product</p>
                            </div>

                            <div class="review_bottom">
                                <p class="review_reviwer align-items-center mb-0 p-3"><span class="fw-bold">Laura</span>, 1 day ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-center">
                    <div class="card satisfied_card bg-transparent border-white">
                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div class="review_top d-flex flex-column gap-3 p-3 h-100">
                                <div class="d-flex gap-3">
                                    <div class="d-flex gap-1">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                        <img src="src/assets/images/star.svg" width="17px" alt="">
                                    </div>
    
                                    <div class="d-flex gap-1 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#656565" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        <p class="review_verified_text mb-0">Verified</p>
                                    </div>
                                </div>
                                <h2 class="card-title fs-6 fw-bold mb-0">More is not possible</h2>
                                <p class="review_subtitle">The quality of this product is simply unmatched. It is sturdy, well made and looks great.</p>
                            </div>

                            <div class="review_bottom">
                                <p class="review_reviwer align-items-center mb-0 p-3"><span class="fw-bold">Thomas</span>, 4 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Popular Products -->
    <section id="popularProducts" class="popularProducts">
        <div class="container py-5">
            <h2 class="fs-6 fw-semibold text-center mt-4">Particularly popular</h2>
            <h1 class="fs-2 fw-bold text-center mt-3">Our best-selling products</h1>

            <div class="products mt-5">
                <div class="row">

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                              <p class="product_price text-center fw-bold">away 80.00€</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                              <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                                <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                                <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                              <p class="product_price text-center fw-bold">away 80.00€</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                              <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-7.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                                <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card border-0">
                            <img src="src/assets/images/products/product-8.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center fs-6 fw-bold">Casual Knit Pullover</h5>
                              <h3 class="d-flex justify-content-center fs-6"> 
                                <div class="d-flex gap-1">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star.svg" width="15px" alt="">
                                    <img src="src/assets/images/star-half.svg" width="15px" alt="">
                                </div>
                                (394)
                                </h3>
                                <p class="product_price text-center fw-bold">away 80.00€ <span class="text-body-tertiary text-decoration-line-through">109.95€</span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Club -->
    <section id="club" class="club py-5">
        <div class="container">
            <div class="row align-items-center club_container">
                <div class="col-md-7 col-12 p-5">
                    <h2 class="fs-4 text-body-secondary">100% free</h2>
                    <h1 class="py-4 fw-bold">Come to the conrise Club!</h1>
                    <p class="text-body-tertiary fw-bold">As a member of the club, you will be rewarded for every purchase and activity with us! Exclusive 
                        iscounts, early access to our sales, special birthday surprises and much more await you. 
                        And the best part? Membership in our club is 100% free for you!
                    </p>
                    <button class="btn btn-warning fw-bold text-uppercase">Register Now</button>
                </div>

                <div class="col-md-5 col-12 club_img">
                    <img src="src/assets/images/club.jpg" width="100%" height="100%" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- SEO content -->
    <search id="seoContent" class="seoContent">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-6 py-4">
                    <h2 class="fs-5 fw-bold">Best quality at a fair price</h2>
                    <p class="seoContent_text text-secondary lh-md">
                        Best quality at a fair price means getting products or services that are both high quality 
                        and affordable. Customers can rely on durability, reliability and outstanding performance 
                        without paying excessively. This balance ensures that consumers invest their money wisely 
                        and receive real appreciation for their spending. Companies that follow this principle 
                        create trust and build long-term relationships with their customers. Ultimately, both 
                        sides benefit: the customer receives excellent products and services, while the company 
                        grows through satisfied and loyal customers.
                    </p>
                </div>

                <div class="col-md-6 py-4">
                    <h2 class="fs-5 fw-bold">High-quality materials</h2>
                    <p class="seoContent_text text-secondary lh-md">
                        Best quality at a fair price means getting products or services that are both high quality 
                        and affordable. Customers can rely on durability, reliability and outstanding performance 
                        without paying excessively. This balance ensures that consumers invest their money wisely 
                        and receive real appreciation for their spending. Companies that follow this principle 
                        create trust and build long-term relationships with their customers. Ultimately, both 
                        sides benefit: the customer receives excellent products and services, while the company 
                        grows through satisfied and loyal customers.
                    </p>
                </div>

                <div class="col-md-6 py-4">
                    <h2 class="fs-5 fw-bold">support startup</h2>
                    <p class="seoContent_text text-secondary lh-md">
                        Best quality at a fair price means getting products or services that are both high quality 
                        and affordable. Customers can rely on durability, reliability and outstanding performance 
                        without paying excessively. This balance ensures that consumers invest their money wisely 
                        and receive real appreciation for their spending. Companies that follow this principle 
                        create trust and build long-term relationships with their customers. Ultimately, both 
                        sides benefit: the customer receives excellent products and services, while the company 
                        grows through satisfied and loyal customers.
                    </p>
                </div>

                <div class="col-md-6 py-4">
                    <h2 class="fs-5 fw-bold">This is how we pay attention to the details</h2>
                    <p class="seoContent_text text-secondary lh-md">
                        Best quality at a fair price means getting products or services that are both high quality 
                        and affordable. Customers can rely on durability, reliability and outstanding performance 
                        without paying excessively. This balance ensures that consumers invest their money wisely 
                        and receive real appreciation for their spending. Companies that follow this principle 
                        create trust and build long-term relationships with their customers. Ultimately, both 
                        sides benefit: the customer receives excellent products and services, while the company 
                        grows through satisfied and loyal customers.
                    </p>
                </div>

            </div>
        </div>
    </search>

    
    <?php get_footer(); ?>