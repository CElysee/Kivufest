@section('title', 'Buy a Ticket') @push('styles')
    <style>
        .exhibz-btn {
            padding: 0px 0px 10px 0px;
            margin-top: 15px;
            font-size: 22px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 24px;
            color: var(--e-global-color-3ea4cdc);
            text-align: justify;
        }
        .ekit-wid-con button {
            cursor: pointer;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            border: none;
            padding: 15px;
        }
        .elementor-21 .elementor-element.elementor-element-8c0ae77 .elementskit-section-title-wraper .elementskit-section-title {
            line-height: 1;
        }
    </style>
@endpush
<div>
    <livewire:frontend.top-menu />
    <div data-elementor-type="wp-page" data-elementor-id="21" class="elementor elementor-21">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-be69071 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="be69071"
            data-element_type="section"
            data-settings='{"ekit_section_parallax_multi_items":[{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/venu_hall_shape_1.png","id":401,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":0,"sizes":[]},"pos_y":{"unit":"%","size":50,"sizes":[]},"_id":"962e16d","source_rotate":{"unit":"deg","size":"","sizes":[]},"width_type":"custom","custom_width":{"unit":"px","size":168,"sizes":[]},"pos_x_tablet":{"unit":"px","size":-360,"sizes":[]},"item_source":"image","shape":null,"shape_color":null,"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform":"translateY","parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null,"zindex":"2"},{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_9.png","id":109,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":91,"sizes":[]},"pos_y":{"unit":"%","size":34,"sizes":[]},"source_rotate":{"unit":"deg","size":"","sizes":[]},"width_type":"custom","custom_width":{"unit":"px","size":168,"sizes":[]},"pos_x_tablet":{"unit":"px","size":-360,"sizes":[]},"_id":"b6c6418","item_source":"image","shape":null,"shape_color":null,"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform":"translateY","parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null,"zindex":"2"}],"background_background":"classic","ekit_section_parallax_multi":"yes"}'
        >
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-513503b" data-id="513503b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-ca3d504 elementor-absolute elementor-widget elementor-widget-heading"
                            data-id="ca3d504"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"onscroll","ekit_we_scroll_animation":"translateX","ekit_we_scroll_animation_value":-350,"_position":"absolute","ekit_we_on_test_mode":"on","ekit_we_scroll_smoothness":700,"ekit_we_scroll_offsettop":0,"ekit_we_scroll_offsetbottom":0}'
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">ticket</h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-7422f1d elementor-widget elementor-widget-elementskit-heading"
                            data-id="7422f1d"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="elementskit-heading.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="ekit-heading elementskit-section-title-wraper text_center ekit_heading_tablet- ekit_heading_mobile-"><h2 class="ekit-heading--title elementskit-section-title">Ticket pricing</h2></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-effdef6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="effdef6"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-296b50e" data-id="296b50e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-7299f8b elementor-widget elementor-widget-exhibz-event-ticket"
                                            data-id="7299f8b"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="exhibz-event-ticket.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="exhibz-ticket-widget etn-event-form-widget">
                                                    <div class="etn-widget etn-ticket-widget ticket-widget-banner etn-single-event-ticket-wrap">
                                                        <h4 class="etn-widget-title etn-title etn-form-title">Register Now:</h4>
                                                        <form method="post" class="etn-event-form-parent etn-ticket-variation">
                                                            <input type="hidden" id="ticket_purchase_next_step_two" name="ticket_purchase_next_step_two" value="05c672a433" />
                                                            <input type="hidden" name="_wp_http_referer" value="/wp/exhibz/creative-conference/ticket-pricing/" /> <input name="ticket_purchase_next_step" type="hidden" value="two" />
                                                            <input name="event_id" type="hidden" value="482" />
                                                            <input name="event_name" type="hidden" value="Building your Custom GraphQL Tooling for Team  Copy" />
                                                            <!-- Ticket Markup Starts Here -->

                                                            <div class="variations_0">
                                                                <input type="hidden" name="variation_picked_total_qty" value="0" class="variation_picked_total_qty" />
                                                                @foreach($ticket_info as $ticket)
                                                                    <div class="swiper-slide">
                                                                        <div class="event-registration variation_0">
                                                                            <div class="etn-row align-items-center etn-form-wrap">
                                                                                <div class="etn-col-md-4">
                                                                                    <div class="price-image">
                                                                                        <div class="content">
                                                                                            <h2 class="plan-title">
                                                                                                {{$ticket->ticket_title}}
                                                                                            </h2>
                                                                                            <p class="end-date">
                                                                                                Until July 1, 2023
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ./col -->
                                                                                <div class="col-md-5 etn-single-ticket-item">
                                                                                    <div class="item">
                                                                                        <div class="ticket-price-item">
                                                                                            <div class="etn-ticket-price">
                                                                                                {{$ticket->ticket_amount}} RWF
                                                                                            </div>
                                                                                            <label>/ Seat</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- ./item -->
                                                                                    <!-- ./item -->
                                                                                    <div class="item">
                                                                                    <span class="seat-remaining-text">
                                                                                        {{$ticket->ticket_description}}
                                                                                    </span>
                                                                                    </div>
                                                                                    <!-- ./item -->
                                                                                    {{-- <input name="ticket_price[]" type="hidden" value="529" />--}} {{-- <input name="ticket_name[]" type="hidden" value="DEFAULT" />--}} {{--
                                                                                <input name="ticket_slug[]" type="hidden" value="482-default-5ac17" />--}}
                                                                                </div>
                                                                                <!-- ./col -->
                                                                                <div class="col-md-3">
                                                                                    <!-- price_btn -->
                                                                                    <a href="#Buynow" class="exhibz-btn whitespace--normal">
                                                                                    <span class="exhibz-button-text">
                                                                                        Buy
                                                                                        <span>Now</span>
                                                                                    </span>
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">
                                                                                            <path
                                                                                                d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"
                                                                                                stroke="#F52722"
                                                                                                stroke-width="2"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </a>

                                                                                    <!-- price_btn -->
                                                                                </div>
                                                                                <!-- ./col -->

                                                                                <div class="show_message show_message_0 quantity-error-msg"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            id="Buynow"
            class="elementor-section elementor-top-section elementor-element elementor-element-71f224d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="71f224d"
            data-element_type="section"
            data-settings='{"ekit_section_parallax_multi_items":[{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/join_us_shape_1.png","id":250,"size":"","alt":"","source":"library"},"pos_y":{"unit":"%","size":80,"sizes":[]},"_id":"962e16d","parallax_transform":"translateX","parallax_transform_value":-250,"item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"pos_x":{"unit":"%","size":10,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null,"zindex":"2"}],"background_background":"classic","ekit_section_parallax_multi":"yes"}'
        >
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0e7c043 subscription-shape" data-id="0e7c043" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-60691c3 elementor-absolute elementor-widget elementor-widget-heading"
                            data-id="60691c3"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"onscroll","ekit_we_scroll_animation":"translateX","ekit_we_scroll_animation_value":350,"_position":"absolute","ekit_we_on_test_mode":"on","ekit_we_scroll_smoothness":700,"ekit_we_scroll_offsettop":0,"ekit_we_scroll_offsetbottom":0}'
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Buy Now</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-c5f9c15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c5f9c15"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f12fbea" data-id="f12fbea" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        @if($transaction_status_momo == "PENDING")
                                        <div
                                            @if ($transaction_status_momo == "PENDING") wire:poll.5000ms @endif
                                            class="elementor-element elementor-element-8c0ae77 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="8c0ae77"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title">Momo Payment is {{$transaction_status_momo}}!</h2>
                                                       <img src="{{asset('/loading.gif')}}" style="width: 150px; margin: auto; display: block;">
                                                        @if (session('success'))
                                                            <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                                {{ session('success') }}
                                                            </h3>
                                                        @endif
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                            {{$payment_status_momo}}
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                            @if($transaction_status_momo == "SUCCESSFUL")
                                                <div
                                                    class="elementor-element elementor-element-8c0ae77 elementor-widget elementor-widget-elementskit-heading"
                                                    data-id="8c0ae77"
                                                    data-element_type="widget"
                                                    data-settings='{"ekit_we_effect_on":"none"}'
                                                    data-widget_type="elementskit-heading.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="ekit-wid-con">
                                                            <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                                <h2 class="ekit-heading--title elementskit-section-title">Momo Payment is {{$transaction_status_momo}}!</h2>
                                                                <img src="{{asset('/happy.png')}}" style="width: 250px; margin: auto; display: block;">
                                                                @if (session('success'))
                                                                    <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                                        {{ session('success') }}
                                                                    </h3>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @if($transaction_status_momo == "")
                                        <div
                                            class="elementor-element elementor-element-8c0ae77 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="8c0ae77"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title">join us!</h2>
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle  ">
                                                            Don’t miss out on the entertainment and fun!
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="elementor-element elementor-element-6053523 creative-subscribe-form elementor-widget elementor-widget-elementskit-mail-chimp"
                                            data-id="6053523"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-mail-chimp.default"
                                            wire:ignore
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-mail-chimp">
{{--                                                        <form class="ekit-mailChimpForm">--}}
                                                        <form wire:submit.prevent="create" class="ekit-mailChimpForm">
                                                            <div class="elementskit_form_wraper elementskit_inline_form">
                                                                <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                    <div class="elementskit_form_group">
                                                                        <div class="elementskit_input_element_container">
                                                                            <input type="text" wire:model="names"  aria-label="names" name="names" class="ekit_mail_email ekit_form_control" placeholder="Names" minlength="5" maxlength="30" required/>
{{--                                                                            @error('names') <span class="text-danger error">{{ $message }}</span>@enderror--}}
                                                                            @error('names') <span class="text-danger error">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementskit_form_wraper elementskit_inline_form">
                                                                <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                    <div class="elementskit_form_group">
                                                                        <div class="elementskit_input_element_container">
                                                                            <input type="email"  wire:model="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" aria-label="email" name="email" class="ekit_mail_email ekit_form_control" placeholder="Enter e-mail" required/>
{{--                                                                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror--}}
                                                                            @error('email') <span class="text-danger error">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                <div class="elementskit_form_group">
                                                                    <div class="elementskit_input_element_container">
                                                                        <input type="text" wire:model="phone_number"  aria-label="Phone number" name="phone_number" class="ekit_mail_email ekit_form_control" placeholder="078********" pattern="[0-9]{10}" required />
{{--                                                                        @error('phone_number') <span class="text-danger error">{{ $message }}</span>@enderror--}}
                                                                        @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                <div class="elementskit_form_group">
                                                                    <div class="elementskit_input_element_container">
                                                                        <select wire:model="number_of_tickets" name="number_of_tickets" class="ekit_mail_email ekit_form_control" required>
                                                                            <option>Select ticket</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                        </select>
{{--                                                                        <input type="number" step="0" wire:model="number_of_tickets" aria-label="Number of tickets" name="number_of_tickets" class="ekit_mail_email ekit_form_control" placeholder="Number of tickets" required/>--}}
{{--                                                                        @error('number_of_tickets') <span class="text-danger error">{{ $message }}</span>@enderror--}}
                                                                        @error('number_of_tickets') <span class="error">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-d283035 elementor-widget elementor-widget-exhibz-button"
                                                                data-id="d283035"
                                                                data-element_type="widget"
                                                                data-settings='{"ekit_we_effect_on":"none"}'
                                                                data-widget_type="exhibz-button.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="ekit-wid-con" style="text-align: center;">
                                                                        <div class="ekit-btn-wraper">
                                                                            <button type="submit" class="exhibz-btn whitespace--normal" wire:loading.remove>
                                                                                <span class="exhibz-button-text"> Grab <span>Ticket</span> </span>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">
                                                                                    <path
                                                                                        d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"
                                                                                        stroke="#F52722"
                                                                                        stroke-width="2"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
{{--                                                                            <button wire:click.prevent="create()" class="exhibz-btn whitespace--normal" wire:loading.remove>--}}
{{--                                                                                <span class="exhibz-button-text"> Grab <span>Ticket</span> </span>--}}
{{--                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">--}}
{{--                                                                                    <path--}}
{{--                                                                                        d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"--}}
{{--                                                                                        stroke="#F52722"--}}
{{--                                                                                        stroke-width="2"--}}
{{--                                                                                    ></path>--}}
{{--                                                                                </svg>--}}
{{--                                                                            </button>--}}
                                                                            <button wire:loading wire:target="create" class="exhibz-btn whitespace--normal">
                                                                                <span class="exhibz-button-text"> Processing Payment... </span>
                                                                            </button>
                                                                            @if (session('success'))
                                                                                <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                                                    {{ session('success') }}
                                                                                </h3>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c6b671c"
                                    data-id="c6b671c"
                                    data-element_type="column"
                                    data-settings='{"background_background":"classic"}'
                                >
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-50a109a elementor-widget elementor-widget-image"
                                            data-id="50a109a"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="image.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <img
                                                    decoding="async"
                                                    width="545"
                                                    height="582"
                                                    src="https://demo.themewinter.com/wp/exhibz/creative-conference/wp-content/uploads/sites/8/2021/12/join_us_image.png"
                                                    class="attachment-large size-large wp-image-188"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div
                            class="elementor-element elementor-element-1a70051 elementor-widget elementor-widget-exhibz-gallery-slider"
                            data-id="1a70051"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="exhibz-gallery-slider.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- banner start-->
                                <section
                                    class="ts-gallery-slider"
                                    data-widget_settings='{"exhibz_slider_items":[{"exhibz_team_title":" Carousel #1","_id":"34b40cc","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""},{"exhibz_team_title":" Carousel #1","_id":"9d5da38","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""},{"exhibz_team_title":" Carousel #1","_id":"980a9e6","exhibz_slider_bg_image":{"url":"","id":"","size":""},"exhibz_gallery_title":""}],"slider_items":5,"slider_space_between":"","speaker_slider_autoplay":"no","speaker_slider_speed":1500,"show_navigation":"no","show_pagination":"no","left_arrow_icon":{"value":"icon icon-left-arrows","library":"solid"},"right_arrow_icon":{"value":"icon icon-right-arrow1","library":"solid"},"_title":"","_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_element_width":"","_element_width_tablet":"","_element_width_mobile":"","_element_custom_width":{"unit":"%","size":"","sizes":[]},"_element_vertical_align":"","_position":"","_offset_orientation_h":"start","_offset_x":{"unit":"px","size":"0","sizes":[]},"_offset_x_end":{"unit":"px","size":"0","sizes":[]},"_offset_orientation_v":"start","_offset_y":{"unit":"px","size":"0","sizes":[]},"_offset_y_end":{"unit":"px","size":"0","sizes":[]},"_z_index":"","_element_id":"","_css_classes":"","ekit_we_effect_on":"none","ekit_we_css_animation_fx":"","ekit_we_css_animation":"ekit-fade","ekit_we_css_animation_speed":"5","ekit_we_css_animation_iteration_count":"infinite","ekit_we_css_animation_direction":"normal","ekit_we_css_transform_fx":"","ekit_we_css_transform_fx_translate_toggle":"","ekit_we_css_transform_fx_translate_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_translate_y":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_toggle":"","ekit_we_css_transform_fx_rotate_z":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_rotate_y":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_scale_toggle":"","ekit_we_css_transform_fx_scale_x":{"unit":"px","size":1,"sizes":[]},"ekit_we_css_transform_fx_scale_y":{"unit":"px","size":1,"sizes":[]},"ekit_we_css_transform_fx_skew_toggle":"","ekit_we_css_transform_fx_skew_x":{"unit":"px","size":"","sizes":[]},"ekit_we_css_transform_fx_skew_y":{"unit":"px","size":"","sizes":[]},"ekit_we_on_test_mode":"on","ekit_we_tilt_maxtilt":20,"ekit_we_tilt_scale":1,"ekit_we_tilt_disableaxis":"","ekit_we_mousemove_parallax_speed":40,"ekit_we_scroll_animation":"translateY","ekit_we_scroll_animation_value":250,"ekit_we_scroll_smoothness":700,"ekit_we_scroll_offsettop":0,"ekit_we_scroll_offsetbottom":0,"_animation":"","_animation_tablet":"","_animation_mobile":"","animation_duration":"","_animation_delay":"","_transform_rotate_popover":"","_transform_rotateZ_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotate_3d":"","_transform_rotateX_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateX_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateX_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateY_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_perspective_effect":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translate_popover":"","_transform_translateX_effect":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scale_popover":"","_transform_keep_proportions":"yes","_transform_scale_effect":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_mobile":{"unit":"px","size":"","sizes":[]},"_transform_skew_popover":"","_transform_skewX_effect":{"unit":"px","size":"","sizes":[]},"_transform_skewX_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewX_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect":{"unit":"px","size":"","sizes":[]},"_transform_skewY_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_flipX_effect":"","_transform_flipY_effect":"","_transform_rotate_popover_hover":"","_transform_rotateZ_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotate_3d_hover":"","_transform_rotateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateX_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateX_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_rotateY_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateY_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_perspective_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_perspective_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translate_popover_hover":"","_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scale_popover_hover":"","_transform_keep_proportions_hover":"yes","_transform_scale_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scale_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_scaleY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_skew_popover_hover":"","_transform_skewX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_skewX_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewX_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_skewY_effect_hover_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_skewY_effect_hover_mobile":{"unit":"deg","size":"","sizes":[]},"_transform_flipX_effect_hover":"","_transform_flipY_effect_hover":"","_transform_transition_hover":{"unit":"px","size":"","sizes":[]},"motion_fx_transform_x_anchor_point":"","motion_fx_transform_y_anchor_point":"","_background_background":"","_background_color":"","_background_color_stop":{"unit":"%","size":0,"sizes":[]},"_background_color_b":"#f2295b","_background_color_b_stop":{"unit":"%","size":100,"sizes":[]},"_background_gradient_type":"linear","_background_gradient_angle":{"unit":"deg","size":180,"sizes":[]},"_background_gradient_position":"center center","_background_image":{"url":"","id":"","size":""},"_background_position":"","_background_xpos":{"unit":"px","size":0,"sizes":[]},"_background_ypos":{"unit":"px","size":0,"sizes":[]},"_background_attachment":"","_background_repeat":"","_background_size":"","_background_bg_width":{"unit":"%","size":100,"sizes":[]},"_background_video_link":"","_background_video_start":"","_background_video_end":"","_background_play_once":"","_background_play_on_mobile":"","_background_privacy_mode":"","_background_video_fallback":{"url":"","id":"","size":""},"_background_slideshow_gallery":[],"_background_slideshow_loop":"yes","_background_slideshow_slide_duration":5000,"_background_slideshow_slide_transition":"fade","_background_slideshow_transition_duration":500,"_background_slideshow_background_size":"","_background_slideshow_background_position":"","_background_slideshow_lazyload":"","_background_slideshow_ken_burns":"","_background_slideshow_ken_burns_zoom_direction":"in","_background_hover_background":"","_background_hover_color":"","_background_hover_color_stop":{"unit":"%","size":0,"sizes":[]},"_background_hover_color_b":"#f2295b","_background_hover_color_b_stop":{"unit":"%","size":100,"sizes":[]},"_background_hover_gradient_type":"linear","_background_hover_gradient_angle":{"unit":"deg","size":180,"sizes":[]},"_background_hover_gradient_position":"center center","_background_hover_image":{"url":"","id":"","size":""},"_background_hover_position":"","_background_hover_xpos":{"unit":"px","size":0,"sizes":[]},"_background_hover_ypos":{"unit":"px","size":0,"sizes":[]},"_background_hover_attachment":"","_background_hover_repeat":"","_background_hover_size":"","_background_hover_bg_width":{"unit":"%","size":100,"sizes":[]},"_background_hover_video_link":"","_background_hover_video_start":"","_background_hover_video_end":"","_background_hover_play_once":"","_background_hover_play_on_mobile":"","_background_hover_privacy_mode":"","_background_hover_video_fallback":{"url":"","id":"","size":""},"_background_hover_slideshow_gallery":[],"_background_hover_slideshow_loop":"yes","_background_hover_slideshow_slide_duration":5000,"_background_hover_slideshow_slide_transition":"fade","_background_hover_slideshow_transition_duration":500,"_background_hover_slideshow_background_size":"","_background_hover_slideshow_background_position":"","_background_hover_slideshow_lazyload":"","_background_hover_slideshow_ken_burns":"","_background_hover_slideshow_ken_burns_zoom_direction":"in","_background_hover_transition":{"unit":"px","size":"","sizes":[]},"_border_border":"","_border_width":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_border_color":"","_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_box_shadow_box_shadow_type":"","_box_shadow_box_shadow":{"horizontal":0,"vertical":0,"blur":10,"spread":0,"color":"rgba(0,0,0,0.5)"},"_box_shadow_box_shadow_position":" ","_border_hover_border":"","_border_hover_width":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_border_hover_color":"","_border_radius_hover":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"_box_shadow_hover_box_shadow_type":"","_box_shadow_hover_box_shadow":{"horizontal":0,"vertical":0,"blur":10,"spread":0,"color":"rgba(0,0,0,0.5)"},"_box_shadow_hover_box_shadow_position":" ","_border_hover_transition":{"unit":"px","size":"","sizes":[]},"_mask_switch":"","_mask_shape":"circle","_mask_image":{"url":"","id":"","size":""},"_mask_notice":"","_mask_size":"contain","_mask_size_scale":{"unit":"%","size":100,"sizes":[]},"_mask_position":"center center","_mask_position_x":{"unit":"%","size":0,"sizes":[]},"_mask_position_y":{"unit":"%","size":0,"sizes":[]},"_mask_repeat":"no-repeat","hide_desktop":"","hide_tablet":"","hide_mobile":"","widget_id":"1a70051"}'
                                >
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper"></div>
                                    </div>
                                </section>
                                <!-- banner end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <livewire:frontend.footer />
</div>
@push('scripts') @endpush
