
<section class="scrap-form-section" id="scrap-form">
    <div class="container">

        <div class="scrap-form-wrapper">

            <!-- LEFT CONTENT -->
            <div class="scrap-form-left" data-aos="fade-right">

                <span class="section-eyebrow">START YOUR JOURNEY</span>

                <h2>Ready to Scrap Your <span>Vehicle?</span></h2>

                <p class="scrap-form-description">
                    Get started with a quick enquiry. Share a few details
                    about your vehicle and our team will get in touch with you
                    to guide you through the process.
                </p>

                <div class="scrap-form-benefits">

                    <div class="scrap-benefit">
                        <div class="scrap-benefit-icon">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div>
                            <h4>Quick & Simple Enquiry</h4>
                            <p>Submit your vehicle details in just a few steps.</p>
                        </div>
                    </div>

                    <div class="scrap-benefit">
                        <div class="scrap-benefit-icon">
                            <i class="bi bi-currency-rupee"></i>
                        </div>
                        <div>
                            <h4>Fair Vehicle Evaluation</h4>
                            <p>Get an evaluation based on your vehicle details.</p>
                        </div>
                    </div>

                    <div class="scrap-benefit">
                        <div class="scrap-benefit-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <h4>Convenient Pickup</h4>
                            <p>We help arrange a hassle-free pickup process.</p>
                        </div>
                    </div>

                </div>

                <div class="scrap-form-contact">
                    <div class="scrap-form-contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div>
                        <span>Need assistance?</span>
                        <h4>Talk to our team</h4>
                    </div>
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="scrap-form-card" data-aos="fade-left">

                <div class="scrap-form-heading">
                    <h3>Vehicle Enquiry Form</h3>
                    <p>Fill in your details to get started.</p>
                </div>

                <form action="process-enquiry.php" method="POST" class="vehicle-enquiry-form">

                    <!-- Customer Details -->
                    <div class="form-group">
                        <label for="customer_name">Full Name <span>*</span></label>
                        <input
                            type="text"
                            id="customer_name"
                            name="customer_name"
                            placeholder="Enter your full name"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number <span>*</span></label>
                        <input
                            type="tel"
                            id="mobile"
                            name="mobile"
                            placeholder="Enter 10-digit mobile number"
                            pattern="[6-9][0-9]{9}"
                            maxlength="10"
                            required
                        >
                    </div>

                    <!-- Vehicle Details -->
                    <div class="form-row">

                        <div class="form-group">
                            <label for="vehicle_type">Vehicle Type <span>*</span></label>
                            <select id="vehicle_type" name="vehicle_type" required>
                                <option value="">Select vehicle</option>
                                <option value="Car">Car</option>
                                <option value="Bike">Bike / Two Wheeler</option>
                                <option value="Scooter">Scooter</option>
                                <option value="Commercial Vehicle">Commercial Vehicle</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fuel_type">Fuel Type</label>
                            <select id="fuel_type" name="fuel_type">
                                <option value="">Select fuel type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="CNG">CNG</option>
                                <option value="LPG">LPG</option>
                                <option value="Electric">Electric</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group">
                            <label for="vehicle_brand">Vehicle Brand <span>*</span></label>
                            <input
                                type="text"
                                id="vehicle_brand"
                                name="vehicle_brand"
                                placeholder="e.g. Maruti, Honda"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="vehicle_model">Vehicle Model <span>*</span></label>
                            <input
                                type="text"
                                id="vehicle_model"
                                name="vehicle_model"
                                placeholder="e.g. Swift, City"
                                required
                            >
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group">
                            <label for="manufacturing_year">Manufacturing Year</label>
                            <select id="manufacturing_year" name="manufacturing_year">
                                <option value="">Select year</option>
                                <?php for ($year = date('Y'); $year >= 1980; $year--): ?>
                                    <option value="<?php echo $year; ?>">
                                        <?php echo $year; ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="vehicle_condition">Vehicle Condition</label>
                            <select id="vehicle_condition" name="vehicle_condition">
                                <option value="">Select condition</option>
                                <option value="Running">Running</option>
                                <option value="Not Running">Not Running</option>
                                <option value="Accident Damaged">Accident Damaged</option>
                                <option value="Scrap">Already Scrap</option>
                            </select>
                        </div>

                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Vehicle Location <span>*</span></label>
                        <input
                            type="text"
                            id="location"
                            name="location"
                            placeholder="Enter city / area / PIN code"
                            required
                        >
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            placeholder="Tell us anything else about your vehicle..."
                        ></textarea>
                    </div>

                    <!-- Privacy -->
                    <div class="form-privacy">
                        <i class="bi bi-shield-check"></i>
                        <p>Your information is used only to respond to your vehicle enquiry.</p>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="scrap-submit-btn">
                        Submit Vehicle Enquiry
                        <i class="bi bi-arrow-right"></i>
                    </button>

                </form>

            </div>

        </div>
    </div>
</section>
