<?php include 'inc/header.php'; ?>
<div class="sy-cart" id="syCart">

    <div class="container m-auto">
        <div class="sy-cart__header">
            <div>
                <h1 class="sy-cart__title">Shopping Cart</h1>
                <div class="sy-cart__subrow">Review your selected items</div>
            </div>
            <a href="#" class="sy-cart__continue">&larr; Continue Shopping</a>
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

                    <button type="button" class="sy-cart__checkout-btn">Proceed to Checkout</button>



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
                    <img class="sy-cart__also-thumb" src="https://placehold.co/64x64/d9a441/ffffff?text=Pyramid"
                        alt="Shree Yantra Energized Pyramid">
                    <div>
                        <p class="sy-cart__also-name">Shree Yantra Energized Pyramid</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 1199.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="1199">+</button>
                        </div>
                    </div>
                </div>
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="https://placehold.co/64x64/b9852f/ffffff?text=Navgraha"
                        alt="Navgraha Yantra Copper Plate">
                    <div>
                        <p class="sy-cart__also-name">Navgraha Yantra Copper Plate</p>
                        <div class="sy-cart__also-row">
                            <span class="sy-cart__also-price">Rs. 399.00</span>
                            <button type="button" class="sy-cart__also-add" data-price="399">+</button>
                        </div>
                    </div>
                </div>
                <div class="sy-cart__also-card">
                    <img class="sy-cart__also-thumb" src="https://placehold.co/64x64/2a1d14/ffffff?text=Bracelet"
                        alt="Navgraha Protection Bracelet">
                    <div>
                        <p class="sy-cart__also-name">Navgraha Protection Bracelet</p>
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
