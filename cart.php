<?php include 'inc/header.php'; ?>
<div class="sy-cart" id="syCart" style="padding:40px 0; background:var(--vv-cream-bg);">

    <div class="vv-container">
        <div class="sy-cart__header">
            <div>
                <h1 class="sy-cart__title" style="color:var(--vv-maroon-deep);">Shopping Cart</h1>
                <div class="sy-cart__subrow">आपल्या निवडक वास्तू उत्पादनांची यादी</div>
            </div>
            <a href="products.php" class="sy-cart__continue" style="color:var(--vv-maroon);">&larr; खरेदी सुरू ठेवा</a>
        </div>
        <div class="sy-cart__layout">
            <div class="order-left">

                <!-- Items -->
                <div class="sy-cart__panel">
                    <table class="sy-cart__table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="syCartItems">
                            <tr class="sy-cart__row" data-price="1199">
                                <td data-label="Product">
                                    <div class="sy-cart__product">
                                        <img class="sy-cart__thumb" src="./img/product-pyrite.jpg" alt="नॅचरल पायराइट मनी ब्रेसलेट">
                                        <div>
                                            <p class="sy-cart__name">नॅचरल पायराइट मनी ब्रेसलेट</p>
                                            <p class="sy-cart__variant">अस्सल नैसर्गिक क्रिस्टल</p>
                                            <p class="sy-cart__sku">SKU: VV-BR-001</p>
                                            <span class="sy-cart__badge">✓ १००% मंत्रसिद्ध व शुद्ध केलेले</span>
                                        </div>
                                    </div>
                                </td>

                                <td data-label="Quantity">
                                    <div class="sy-cart__qty">
                                        <button type="button" class="sy-cart__qty-btn" data-action="dec">−</button>
                                        <input type="text" class="sy-cart__qty-input" value="1" readonly>
                                        <button type="button" class="sy-cart__qty-btn" data-action="inc">+</button>
                                    </div>
                                </td>

                                <td data-label="Remove">
                                    <button type="button" class="sy-cart__remove" data-action="remove"
                                        aria-label="Remove item"><img src="./img/bin.png" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="sy-cart__coupon">
                        <span class="sy-cart__coupon-label">🏷 Have a coupon code?</span>
                        <input type="text" class="sy-cart__coupon-input" id="syCouponInput"
                            placeholder="Enter coupon code">
                        <button type="button" class="sy-cart__coupon-btn" id="syCouponApply">Apply</button>
                    </div>
                </div>
                <!-- Items -->
                <div class="sy-cart__panel">
                    <table class="sy-cart__table">
                        <thead>
                            <tr>
                                <th>Product</th>

                                <th>Quantity</th>

                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="syCartItems">
                            <tr class="sy-cart__row" data-price="1199">
                                <td>
                                    <div class="sy-cart__product">
                                        <img class="sy-cart__thumb" src="./img/product-pyrite.jpg" alt="????? ??????? ??? ????????">
                                        <div>
                                            <p class="sy-cart__name">????? ??????? ??? ????????</p>
                                            <p class="sy-cart__variant">Premium Edition</p>
                                            <p class="sy-cart__sku">SKU: SS-NGY-009</p>
                                            <span class="sy-cart__badge">✓ Energized &amp; Crafted for Maximum
                                                Benefits</span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="sy-cart__qty">
                                        <button type="button" class="sy-cart__qty-btn" data-action="dec">−</button>
                                        <input type="text" class="sy-cart__qty-input" value="1" readonly>
                                        <button type="button" class="sy-cart__qty-btn" data-action="inc">+</button>
                                    </div>
                                </td>

                                <td>
                                    <button type="button" class="sy-cart__remove" data-action="remove"
                                        aria-label="Remove item"><img src="./img/bin.png" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="sy-cart__coupon">
                        <span class="sy-cart__coupon-label">🏷 Have a coupon code?</span>
                        <input type="text" class="sy-cart__coupon-input" id="syCouponInput"
                            placeholder="Enter coupon code">
                        <button type="button" class="sy-cart__coupon-btn" id="syCouponApply">Apply</button>
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="sy-cart__summary">
                <h2 class="sy-cart__summary-title">Order Summary</h2>
                <div class="sy-cart__summary-rule"></div>
                <div class="summury-box">
                    <div class="sy-cart__summary-row">
                        <span>Subtotal</span>
                        <span data-role="subtotal"><strong>Rs. 1199.00</strong></span>
                    </div>
                    <div class="sy-cart__summary-row sy-cart__summary-row--free">
                        <span>Shipping</span>
                        <span>FREE</span>
                    </div>
                    <div class="sy-cart__summary-row">
                        <span>Taxes</span>
                        <span>Included</span>
                    </div>

                    <hr class="sy-cart__summary-divider">

                    <div class="sy-cart__summary-total">
                        <span>Total</span>
                        <span class="sy-cart__summary-total-value" data-role="grand-total">Rs. 1199.00</span>
                    </div>

                    <a href="https://wa.me/919921314541?text=Hello%20Vastuvardhaan,%20I%20want%20to%20order%20products%20from%20cart" target="_blank" class="sy-cart__checkout-btn" style="text-decoration:none; display:flex; align-items:center; justify-content:center; gap:8px;">
                        <i class="ti ti-brand-whatsapp text-xl"></i> WhatsApp द्वारे ऑर्डर पूर्ण करा
                    </a>



                    <div class="sy-cart__payments">

                        <span class="sy-cart__payment-chip">UPI</span>
                        <span class="sy-cart__payment-chip">GPay</span>
                        <span class="sy-cart__payment-chip">Paytm</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust strip -->
        <div class="sy-cart__strip">
            <div class="sy-cart__strip-item">
                <img src="./img/money.png" alt="">
                <span>
                    <h3>FREE SHIPPING</h3><span class="sy-cart__strip-sub">Across India</span>
                </span>
            </div>
            <div class="sy-cart__strip-item">
                <img src="./img/exchange.png" alt="">
                <span>
                    <h3>7-DAY RETURN</h3><span class="sy-cart__strip-sub">No Questions Asked</span>
                </span>
            </div>
            <div class="sy-cart__strip-item">
                <img src="./img/cyber-security.png" alt="">
                <span>
                    <h3>SECURE PAYMENT</h3><span class="sy-cart__strip-sub">100% Protected</span>
                </span>
            </div>
        </div>

        <!-- You may also like -->
        <!-- <div class="sy-cart__also">
            <h3 class="sy-cart__also-title">You may also like</h3>
            <div class="sy-cart__also-grid">
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="./img/product-pyramid.jpg"
                        alt="Brass Vastu Pyramid">
                    <div>
                        <p class="sy-cart__also-name">Brass Vastu Pyramid</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 1499.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="1499">+</button>
                        </div>
                    </div>
                </div>
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="./img/product-pyrite.jpg"
                        alt="Pyrite Money Bracelet">
                    <div>
                        <p class="sy-cart__also-name">Pyrite Money Bracelet</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 1199.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="1199">+</button>
                        </div>
                    </div>
                </div>
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="./img/product-tourmaline.jpg"
                        alt="Black Tourmaline Bracelet">
                    <div>
                        <p class="sy-cart__also-name">Black Tourmaline Protection Bracelet</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 299.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="299">+</button>
                        </div>
                    </div>
                </div>
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="https://placehold.co/64x64/5a2a20/ffffff?text=Book"
                        alt="Navgraha Shanti Puja Book">
                    <div>
                        <p class="sy-cart__also-name">Navgraha Shanti Puja Book</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 199.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="199">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<?php include 'inc/footer.php'; ?>
