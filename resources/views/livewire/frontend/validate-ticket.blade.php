@section('title', 'Buy a Ticket')
@push('styles')
    <style>
        .swiper-slide {
            margin-bottom: 25px;
        }
        .bi-qr-code-scan{
            margin: auto;
            display: table;
        }
        .elementor-21 .elementor-element.elementor-element-7299f8b .exhibz-ticket-widget {
            background-color: #AC3E3E00;
            background-image: url('ticket_bg_1.png');
            background-position: right !important;
            background-repeat: no-repeat;
        }
        .elementor-17 .elementor-element.elementor-element-8a96f45 .exhibz-btn {
            padding: 0px 0px 13px 0px;
            font-size: 22px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 24px;
            color: #F52722;
            border: none;
        }
        .ekit-wid-con .ekit-mailChimpForm .ekit_form_control {
            font-size: 20px;
            line-height: 26px;
            border-radius: 0px 0px 0px 0px;
            border-style: solid;
            border-width: 3px 3px 3px 3px;
            border-color: var(--e-global-color-1adcc49 );
            padding: 33px 30px 33px 40px;
        }
    </style>
    <link rel="stylesheet" id="elementor-post-17-css" href="{{asset('assets/css/demo.themewinter.com_wp_exhibz_creative-conference_wp-content_uploads_sites_8_elementor_css_post-17.css_ver=1685272229.css')}}" type="text/css" media="all" />
@endpush
<div>
    <livewire:frontend.top-menu />
    <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-6d1b691 creative-hero-area elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="6d1b691"
            data-element_type="section"
            data-settings='{"background_background":"gradient","ekit_section_parallax_multi_items":[{"_id":"8dd88f0","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_10.png","id":105,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":90,"sizes":[]},"pos_y":{"unit":"%","size":0,"sizes":[]},"animation":"ekit-fade","animation_iteration_count":"unset","zindex":0,"parallax_style":"animation","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation_tablet":"","animation_mobile":"","item_opacity":"1","animation_speed":"5","animation_direction":"normal","parallax_speed":null,"parallax_transform":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_Ellipse.png","id":108,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":80,"sizes":[]},"_id":"a4112f4","zindex":0,"item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"pos_y":{"unit":"%","size":10,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":40,"parallax_transform":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_9.png","id":109,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":93,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"zindex":0,"_id":"c311d93","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform":"translateY","parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"onscroll","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_8.png","id":110,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":80,"sizes":[]},"pos_y":{"unit":"%","size":82,"sizes":[]},"parallax_transform":"translateX","zindex":0,"_id":"e788db7","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":null,"parallax_transform_value":"250","smoothness":"700","offsettop":"0","offsetbottom":"0","maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_1.png","id":111,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":5,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"parallax_transform":null,"zindex":0,"_id":"a469bda","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_speed":40,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_3.png","id":113,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":0,"sizes":[]},"pos_y":{"unit":"%","size":45,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"4f82b01","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_2.png","id":114,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":15,"sizes":[]},"pos_y":{"unit":"%","size":20,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"9112220","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_4.png","id":115,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":5,"sizes":[]},"pos_y":{"unit":"%","size":50,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"c20451f","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null},{"parallax_style":"mousemove","image":{"url":"http:\/\/demo.themewinter.com\/wp\/exhibz\/creative-conference\/wp-content\/uploads\/sites\/8\/2021\/12\/hero_area_shape_5.png","id":116,"size":"","alt":"","source":"library"},"pos_x":{"unit":"%","size":12,"sizes":[]},"pos_y":{"unit":"%","size":80,"sizes":[]},"parallax_speed":10,"parallax_transform":null,"zindex":0,"_id":"25a513e","item_source":"image","shape":null,"shape_color":null,"width_type":"","custom_width":null,"source_rotate":{"unit":"deg","size":0,"sizes":[]},"parallax_blur_effect":{"unit":"px","size":0,"sizes":[]},"animation":null,"animation_tablet":null,"animation_mobile":null,"item_opacity":"1","animation_speed":null,"animation_iteration_count":null,"animation_direction":null,"parallax_transform_value":null,"smoothness":null,"offsettop":null,"offsetbottom":null,"maxtilt":null,"scale":null,"disableaxis":null}],"ekit_section_parallax_multi":"yes"}'
        >
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-153c5be" data-id="153c5be" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-5894256 elementor-widget elementor-widget-elementskit-heading"
                            data-id="5894256"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="elementskit-heading.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                        <h3 class="elementskit-section-subtitle">
                                            Ticket is Valid
                                            @if($ticket_info->ticket_status == "Used")
                                                - (Has been used)
                                            @endif
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-05c7e5f elementor-widget elementor-widget-heading"
                            data-id="05c7e5f"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{$transaction_info->client_name}}</h2>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7b32806 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7b32806"
                            data-element_type="section"
                        >
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-265a989" data-id="265a989" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-7085b50 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="7085b50"
                                            data-element_type="widget"
                                            data-settings='{"ekit_we_effect_on":"none"}'
                                            data-widget_type="elementskit-heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                                        <p class="ekit-heading--title elementskit-section-title">
                                                            1st  <span><span>July 2023</span></span>
                                                        </p>
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                                            KivuFest, Rubavu
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        @if($validation_message == "SUCCESSFUL")
                            <div
                                class="elementor-element elementor-element-5894256 elementor-widget elementor-widget-elementskit-heading"
                                data-id="5894256"
                                data-element_type="widget"
                                data-settings='{"ekit_we_effect_on":"none"}'
                                data-widget_type="elementskit-heading.default"
                                style="padding-top: 15px"
                            >
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-">
                                            <h3 class="elementskit-section-subtitle">
                                                Ticket is Used
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($validation_message == "")
                        <div
                            class="elementor-element elementor-element-7085b50 elementor-widget elementor-widget-elementskit-heading"
                            data-id="7085b50"
                            data-element_type="widget"
                            data-settings='{"ekit_we_effect_on":"none"}'
                            data-widget_type="elementskit-heading.default"
                            style="padding-top: 10px;"
                        >
                            @if (session('success'))
                                <h3 class="ekit-heading--subtitle elementskit-section-subtitle">
                                    {{ session('success') }}
                                </h3>
                            @endif
                            @if($ticket_info->ticket_status != "Used")
                             <div class="elementor-widget-container elementor-col-50 elementor-inner-column elementor-element elementor-element-265a989">
                                <div class="ekit-wid-con">
                                    <div class="ekit-mail-chimp">
                                        {{--                                                        <form class="ekit-mailChimpForm">--}}
                                        <form wire:submit.prevent="useTicket" class="ekit-mailChimpForm" wire:ignore>
                                            <div class="elementskit_form_wraper elementskit_inline_form">
                                                <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                    <div class="elementskit_form_group">
                                                        <div class="elementskit_input_element_container">
                                                            <input type="password" wire:model="use_code"  aria-label="use_code" name="use_code" class="ekit_mail_email ekit_form_control" placeholder="*********" required/>
                                                            @error('use_code') <span class="text-danger error">{{ $message }}</span> @enderror
                                                        </div>
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
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-380928c" data-id="380928c" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div
                                                            class="elementor-element elementor-element-8a96f45 elementor-widget elementor-widget-exhibz-button"
                                                            data-id="8a96f45"
                                                            data-element_type="widget"
                                                            data-settings='{"ekit_we_effect_on":"none"}'
                                                            data-widget_type="exhibz-button.default"
                                                        >
                                                            <div class="elementor-widget-container">
                                                                <div class="ekit-wid-con" style="padding-top: 15px;">
                                                                    <div class="ekit-btn-wraper">
                                                                        <button type="submit" class="exhibz-btn whitespace--normal" wire:loading.remove>
                                                                        <span class="exhibz-button-text"> Use <span>Ticket</span> </span>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50" fill="none">
                                                                                <path
                                                                                    d="M29.713 48.6221L22.9954 42.5031L33.2108 32.0607L34.8731 30.3614L32.4959 30.3614L1 30.3614L1 19.6386L32.4959 19.6386L34.8731 19.6386L33.2108 17.9393L22.9954 7.49689L29.7119 1.37891L53.602 25.0394L29.713 48.6221Z"
                                                                                    stroke="#F52722"
                                                                                    stroke-width="2"
                                                                                ></path>
                                                                            </svg>
                                                                        </button>
                                                                        <button wire:loading wire:target="useTicket" class="exhibz-btn whitespace--normal">
                                                                            <span class="exhibz-button-text"> Updating Ticket... </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>


    </div>
    <livewire:frontend.footer />
</div>
@push('scripts')
@endpush
