<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('home2/style.css') }}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

    @include('home2.header')




    <section class="layout_padding pt-4" >
        <div class="w-100 pt-0">

            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            <div class="heading_container heading_center mb-3">
                <h2>
                   <span>Payment</span>
                </h2>
             </div>

            <div class="d-flex flex-column w-50 mx-auto pb-4" style="border-radius: 8px;border: 1px solid #00000030;">

                <div class="w-100 pl-3" style="background-color: #f5f5f5;border-radius:inherit">
                    <p class="pt-2" style="font-weight: 500">Payment Details</p>
                </div>

                <form
                    role="form"
                    action={{ route('stripepost',$totale) }}
                    method="post"
                    class="require-validation w-100 pt-2"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                    id="payment-form">
                    @csrf

                    <div class='form-group required px-2'>
                        <label class='control-label' style="font-weight: 600">Name on Card</label> <input
                            class='form-control' size='4' type='text'>
                    </div>

                    <div class='form-group card required px-2' style="border: 0px">
                        <label class='control-label' style="font-weight: 600">Card Number</label> <input
                            autocomplete='off' class='form-control card-number'
                            type='text'>
                    </div>

                    <div class='form-row row px-2'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label' style="font-weight: 600">CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label' style="font-weight: 600">Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label' style="font-weight: 600">Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY'
                                type='text'>
                        </div>
                    </div>


                    <div class='form-row row px-2'>
                        <div class='col-md-12 error form-group d-none'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>


                    <div class="d-flex flex-row w-100 justify-content-center">
                        <button style="background-color: #f7444e;color:white" class="btn w-50 py-2" type="submit">Pay Now</button>
                    </div>




                </form>
            </div>
        </div>
     </section>







     @include('home2.footer')





    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">

        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
                $errorMessage.addClass('d-none');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('d-none');
                    e.preventDefault();
                }
                });

                if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });


        let menubtn = document.getElementById('menubtn');
        let menucount = 0;
        let dropmenu = document.getElementById('dropmenu');

        menubtn.addEventListener('click',()=>{
            if(menucount===0){
                dropmenu.setAttribute('class','px-4 pt-2 d-md-flex d-sm-flex d-flex flex-column d-lg-none d-xl-none d-xxl-none bg-white');
                menucount=1;
            }else{
                if(menucount===1){
                    dropmenu.setAttribute('class','px-4 pt-2 d-md-none d-sm-none d-none flex-column d-lg-none d-xl-none d-xxl-none bg-white');
                    menucount=0;
                }
            }
        })
    </script>


</body>
</html>
