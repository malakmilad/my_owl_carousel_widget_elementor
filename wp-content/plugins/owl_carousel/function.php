<?php
// use Elementor\Widget_Base;


if (!defined('ABSPATH')) {
    exit;
}

class Custom_Carousel_Widget extends \Elementor\Widget_Base

{

    public function get_name()
    {
        return 'custom-carousel-widget';
    }

    public function get_title()
    {
        return esc_html__('My Custom Carousel', 'elementor');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }
    public function get_categories()
    {
        return ['basic'];
    }
    protected function _register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Carousel Items', 'elementor-owl-carousel'),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Title', 'elementor-owl-carousel'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'image',
            [
                'label' => __('Image', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => __('Description', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Description', 'elementor-owl-carousel'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'items_number_web',
            [
                'label' => __('items_number_web', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'items_number_mobile',
            [
                'label' => __('items_number_mobile', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'items_number_tablet',
            [
                'label' => __('items_number_tablet', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'autoplayTimeout',
            [
                'label' => __('Auto Play Time Out', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'placeholder' => esc_html__('1000', 'textdomain'),
                'default' => '1000'
            ]
        );
        $this->add_control(
            'carousel_items',
            [
                'label' => __('Carousel Items', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->add_control(
            'autoplay',
            [
                'label' => __('Autoplay', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'elementor-owl-carousel'),
                'label_off' => __('No', 'elementor-owl-carousel'),
            ]
        );
        $this->add_control(
            'loop',
            [
                'label' => __('Loop', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'elementor-owl-carousel'),
                'label_off' => __('No', 'elementor-owl-carousel'),
            ]
        );
        $this->add_control(
            'navs',
            [
                'label' => __('Navs', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'elementor-owl-carousel'),
                'label_off' => __('No', 'elementor-owl-carousel'),
            ]
        );
        $this->add_control(
            'autoplayHoverPause',
            [
                'label' => __('Auto Play Hover Pause', 'elementor-owl-carousel'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'elementor-owl-carousel'),
                'label_off' => __('No', 'elementor-owl-carousel'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Nav Next Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'position_nav_next_top',
            [
                'label' => esc_html__('Top', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_next_right',
            [
                'label' => esc_html__('Right', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_next_bottom',
            [
                'label' => esc_html__('Bottom', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_next_left',
            [
                'label' => esc_html__('Left', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'color_nav_next',
            [
                'label' => esc_html__('Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'background_nav_next',
            [
                'label' => esc_html__('BackgroundColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'width_nav_next',
            [
                'label' => esc_html__('Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'height_nav_next',
            [
                'label' => esc_html__('Height', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'border_radius_nav_next',
            [
                'label' => esc_html__('Border', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'hover_color_nav_next',
            [
                'label' => esc_html__('HoverColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'hover_background_nav_next',
            [
                'label' => esc_html__('HoverBackgroundColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'icon_nav_next',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style2',
            [
                'label' => esc_html__('Nav Prev Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'position_nav_prev_top',
            [
                'label' => esc_html__('Top', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_prev_right',
            [
                'label' => esc_html__('Right', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_prev_bottom',
            [
                'label' => esc_html__('Bottom', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'position_nav_prev_left',
            [
                'label' => esc_html__('Left', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'color_nav_prev',
            [
                'label' => esc_html__('Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'background_nav_prev',
            [
                'label' => esc_html__('BackgroundColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'width_nav_prev',
            [
                'label' => esc_html__('Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'height_nav_prev',
            [
                'label' => esc_html__('Height', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'border_radius_nav_prev',
            [
                'label' => esc_html__('Border', 'textdomain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
            ]
        );
        $this->add_control(
            'hover_color_nav_prev',
            [
                'label' => esc_html__('HoverColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'hover_background_nav_prev',
            [
                'label' => esc_html__('HoverBackgroundColor', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'icon_nav_prev',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings();
        //?setting content
        $carousel_items = $settings['carousel_items'];
        $items_number_web = $settings['items_number_web'];
        $items_number_mobile = $settings['items_number_mobile'];
        $items_number_tablet = $settings['items_number_tablet'];
        $autoplay = ($settings['autoplay'] === 'yes') ? true : false;
        $loop = ($settings['loop'] === 'yes') ? true : false;
        $navs = ($settings['navs'] === 'yes') ? true : false;
        $autoplayHoverPause = ($settings['autoplayHoverPause'] === 'yes') ? true : false;
        $autoplayTimeout = $settings['autoplayTimeout'];
        //?setting for next navigation
        $position_nav_next_top = $settings['position_nav_next_top'];
        $position_nav_next_right = $settings['position_nav_next_right'];
        $position_nav_next_bottom = $settings['position_nav_next_bottom'];
        $position_nav_next_left = $settings['position_nav_next_left'];
        $color_nav_next=$settings['color_nav_next'];
        $background_nav_next=$settings['background_nav_next'];
        $width_nav_next=$settings['width_nav_next'];
        $height_nav_next=$settings['height_nav_next'];
        $border_radius_nav_next=$settings['border_radius_nav_next'];
        $hover_color_nav_next=$settings['hover_color_nav_next'];
        $hover_background_nav_next=$settings['hover_background_nav_next'];
        $icon_nav_next=$settings['icon_nav_next'];
        //?setting for prev navigation
        $position_nav_prev_top = $settings['position_nav_prev_top'];
        $position_nav_prev_right = $settings['position_nav_prev_right'];
        $position_nav_prev_bottom = $settings['position_nav_prev_bottom'];
        $position_nav_prev_left = $settings['position_nav_prev_left'];
        $color_nav_prev=$settings['color_nav_prev'];
        $background_nav_prev=$settings['background_nav_prev'];
        $width_nav_prev=$settings['width_nav_prev'];
        $height_nav_prev=$settings['height_nav_prev'];
        $border_radius_nav_prev=$settings['border_radius_nav_prev'];
        $hover_color_nav_prev=$settings['hover_color_nav_prev'];
        $hover_background_nav_prev=$settings['hover_background_nav_prev'];
        $icon_nav_prev=$settings['icon_nav_prev'];
        //?display html
        $html = '<div class="owl-carousel owl-theme">';
        if (!empty($carousel_items) && is_array($carousel_items)) {
            foreach ($carousel_items as $item) {
                $title = $item['title'];
                $image_url = $item['image']['url'];
                $description = $item['description'];
                $html .= '<div class="item">';
                $html .= '<img src="' . $image_url . '" alt="' . $title . '">';
                $html .= '<h3>' . $title . '</h3>';
                $html .= '<p>' . $description . '</p>';
                $html .= '</div>';
            }
        } else {
            $html .= '<div>No carousel items found</div>';
        }
        $html .= '</div>';
        $html .= '<style>
            .owl-theme .owl-nav .owl-next{
                position: absolute !important;
                top: ' . $position_nav_next_top . '% !important;
                right: ' . $position_nav_next_right . '% !important;
                bottom: ' . $position_nav_next_bottom . '% !important;
                left: ' . $position_nav_next_left . '% !important;
            }
            .owl-carousel .owl-nav button.owl-next{
                background: '.$background_nav_next.';
                color: '.$color_nav_next.';
                padding: 0 !important;
                width: '.$width_nav_next.'px;
                height: '.$height_nav_next.'px;
                border-radius: '.$border_radius_nav_next.'px;
            }
            .owl-theme .owl-nav .owl-prev{
                position: absolute !important;
                top: ' . $position_nav_prev_top . '% !important;
                right: ' . $position_nav_prev_right . '% !important;
                bottom: ' . $position_nav_prev_bottom . '% !important;
                left: ' . $position_nav_prev_left . '% !important;
            }
            .owl-carousel .owl-nav button.owl-prev{
                background: '.$background_nav_prev.';
                color: '.$color_nav_prev.';
                padding: 0 !important;
                width: '.$width_nav_prev.'px;
                height: '.$height_nav_prev.'px;
                border-radius: '.$border_radius_nav_prev.'px;
            }
            .owl-theme .owl-nav .owl-next:hover {
                background: '.$hover_background_nav_next.';
                color: '.$hover_color_nav_next.';
                text-decoration: none;
            }
            .owl-theme .owl-nav .owl-prev:hover {
                background: '.$hover_background_nav_prev.';
                color: '.$hover_color_nav_prev.';
                text-decoration: none;
            }
        </style>';
        echo $html;
?>
        <script>
            jQuery(document).ready(function($) {
                $(".owl-carousel").owlCarousel({
                    loop: <?php echo $loop ? 'true' : 'false'; ?>,
                    items: <?php echo count($carousel_items); ?>,
                    autoplay: <?php echo $autoplay ? 'true' : 'false'; ?>,
                    autoplayTimeout: <?php echo $autoplayTimeout > 1000 ? $autoplayTimeout : 1000; ?>,
                    autoplayHoverPause: <?php echo $autoplayHoverPause ? 'true' : 'false'; ?>,
                    margin: 10,
                    nav: <?php echo $navs ? 'true' : 'false'; ?>,
                    navText: [
                        "<i class='<?php echo $icon_nav_prev['value'] ?>'></i>",
                        "<i class='<?php echo $icon_nav_next['value'] ?>'></i>"
                    ],
                    responsive: {
                        0: {
                            items: <?php echo $items_number_web ?>
                        },
                        768: {
                            items: <?php echo $items_number_mobile ?>
                        },
                        1000: {
                            items: <?php echo $items_number_tablet ?>
                        }
                    }
                });
            });
        </script>
<?php
    }
}
