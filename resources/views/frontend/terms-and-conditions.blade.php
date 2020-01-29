@extends('layouts.master')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 padding-top-mobile py-4">
            
            <p>Terms and Conditions are subject to change at any time, without prior notice. These Conditions can be saved electronically or printed by all users of our Website. These Conditions will apply to all transactions carried out by placing an order via our Website or Email from COVET HOUSE’s Sales Representative, it is implied that you accept our terms and conditions as listed below: </p>
            <p>Updated version 10/01/2020</p>
            
            <h6 class="mt-4">PRICES</h6> 
            <p>1. Price excludes shipping or assembly service; </p>
            <p>2. Specifically, on Upholstery items, the price includes the standard fabric according the grade specified; In case a different fabric from one of the brands from Covet House is required, or COM/COL option, price will be provided according your requirement and client must contact the sales Representative for pricing. </p>
             

            <h6 class="mt-4">ACCOUNT & PAYMENT TERMS</h6> 
            <p>All accounts will be registered once the first Proforma Invoice COVET (FPCVT) is issued; </p>
            <p>1. Proforma Invoices will require a 50% deposit to start the production of orders and the payment of the final balance prior shipping or pick up from Portugal; We reserve the right to negotiate a deposit higher than 60% for large value orders.</p>
            <p>2. Proforma Invoices must be signed and stamped by the client in order to approve the described content.</p>
             
            <p>3. COVET LDA <br>
            Bank Details <br>
            BPI Account USD <br>
            NIB: 0010 9999 55721160601 88 <br>
            IBAN: PT50 0010 9999 5572 1160 6018 8 <br>
            SWIFT: BBPIPTPL</p>
            
            <p>4. All products are property of COVET HOUSE until full payment is received.</p>
             

            <h6 class="mt-4">PRODUCT & STORAGE FEES</h6> 
            <p>1. Upon completion, an additional storage fee of 120€/m3 per week will be charged to any stored merchandise if the invoice balance is not fully paid and shipping arrangements have not been made within 2 weeks from the date the goods are received in our warehouse.</p>
             

            <h6 class="mt-4">STOCK & OUTLET PRODUCTS</h6> 
            <p>1. We keep a reasonable number of products in Stock and a product only can be reserved upon a deposit received from the client.</p>
            <p>2. We offer great deals on all available floor and sample items, up to 70% off. These items have been used in showrooms, trade shows or other product placement events. Therefore, finishes variations, slight different dimensions and minor imperfections may occur from the standard product displayed on our website and catalogues. We will provide details about individual condition of each item upon request. COVET HOUSE Outlet items are available to be purchased at their current condition. We take all reasonable care to ensure that the product descriptions and details provided are accurate before purchase. Items are subject to availability and quantities are limited. Outlet sales are final - no returns or refunds. </p>
            <p>3. Availability of the product must be confirmed with the sales representative, due to our stock turnover.</p>
             

            <h6 class="mt-4">DISTRIBUTION POLICY </h6>
            <p>Contact our the sales representative or via our general email <a href="mailto:info@covethouse.eu">info@covethouse.eu</a> for further information.</p>
             

            <h6 class="mt-4">SAMPLES</h6> 
            <p>COVET HOUSE has samples available of all its standard finishes, for hard case and fabrics. If the clients wishes to acquire any of the finishes they should contact, via email at <a href="mailto:info@covethouse.eu">info@covethouse.eu</a> or the sales representative in order to purchase them. When a fee for the sample is applied, it is deduced in your next order with COVET HOUSE.</p>
             

            <h6 class="mt-4">FREIGHT POLICY & DAMAGE CLAIMS</h6> 
            <p>1. Shipping Incoterm could be Ex Works (EXW), DAP or DDP – Origin Porto, Portugal; </p>
            <p>2. All the transports made by COVET Lda are insured. If transportation is arranged by COVET HOUSE, fees will be charged separately from the product(s) value. Standard shipping quotation includes door-to-door, drop off service only. If a different service or urgent delivery is required, the customer must clearly request it when placing the order and will be charged accordingly. All products are carefully packed and inspected prior to shipment. </p>
            <p>3. POD must be signed with reservations. In case of apparent damage, the customer must open the goods in front of the carrier and mention the damages on POD. The customer should keep the products in the final destination and save the packages. In case of no apparent damage, the customer must mention on POD – “received the goods but will be checked the state”. In this case, the customer has a maximum of 7 business days, after delivery, to claim. </p>
            <p>4. We are not responsible for damages caused by handling, loading or unloading by people acting on behalf of the customer. COVET HOUSE is not responsible for loss or damage in transit. Should visible or concealed damage occur in transit, immediately notify the delivering carrier with initial notification of intent to file a claim. </p>
            <p>5. Any damage should be communicated to the sales rep during the first 48 hours after receiving the order; photographic and video evidence of the damages should be sent via email. Failure to report concealed damage within 48 hours of reception may result in the denial of the claim. Proving that any damage in the piece(s) caused by the transport requires re-placement, COVET HOUSE compromises to exchange the damaged part or complete piece(s) within a period agreed with the customer.</p>

            <a href="https://www.caffelattehome.com/resources/terms-conditions-caffe-latte.pdf" target="_blank" class="btn-background-full col-12 col-lg-3">DOWNLOAD TERMS & CONDITIONS</a>
        </div>
    </div>
</div>

@endsection

@section('meta')
    <title>Caffe Latte Modern Design</title>
    <meta name="description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic">
    <meta name="keywords" content="Neutral Furniture, Minimalist Designs, Modern Aesthetic, Neutral Tones">
    <meta name="author" content="Caffe Latte Modern Design">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Caffe Latte Modern Design" />
    <meta property="og:description" content="Neutral and Minimalist Designs for Functional Environments with a Modern Aesthetic" />
    <meta property="og:url" content="https://www.caffelattehome.com/" />
    <meta property="og:site_name" content="Caffe Latte Modern Design" />
    <meta name="image" content="/img/caffe-latte-logo.png">
    <meta property="og:image" content="/img/caffe-latte-logo.png" />
@endsection

@section('head-includes')
@endsection

@section('footer-includes')
<script>
    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: true,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {items: 1},
            600: {items: 1},
            768: {items: 1}
        }
    });

    $('.teste-collapse').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });

    $('.close-menu').click(function(){
        var toggleWidth = $(".menu_mobile").width() == 0 ? "90vw" : '0px';
        $(".main_menu_mobile").css('width', toggleWidth);
    });
</script>
@endsection