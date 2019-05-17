<?php
// set style of TinyMCE.
add_editor_style('assets/css/editor-style.css');

// add some theme supports.
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// register sidebar.
add_action('widgets_init', function () {
    register_sidebar( array(
        'id' => 'sidebar-1',
        'before_widget' => '<div class="block">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
});

// modify tag cloud style.
add_filter('widget_tag_cloud_args', function ($args) {
    return array(
        'smallest' => 1,
        'largest' => 1,
        'unit' => 'em',
        'number' => 0,
        'orderby' => 'count',
        'order' => 'DESC',
        'separator' => '&nbsp;&nbsp;&nbsp;',
    );
});

// modify category list markup.
add_filter('wp_list_categories', function ($output, $args) {
    return preg_replace('/<\/a>\s*\((\d+)\)/', ' ($1)</a>', $output);
}, 10, 2);

// add header-id for header-link.
add_filter('the_content', function ($content) {
    if (is_singular()) {
        return preg_replace('/<h(\d)>([^<]+)<\/h\d>/', '<h$1 id="$2">$2</h$1>', $content);
    } else {
        return $content;
    }
});

// disable multiple selection and category-pop feature on edit-post view.
add_action('admin_print_footer_scripts', function () {
    echo <<<EOT
    <script>
        $ = jQuery.noConflict();
        $("ul#categorychecklist input[type='checkbox']").each(function () {
            $(this).replaceWith($(this).clone().attr("type", "radio"));
        });
        $("a[href='#category-pop']").remove();
    </script>
EOT;
});

// allow everyone to post entries which include iframe such as youtube embedded players.
add_filter('content_save_pre', function ($content) {
    global $allowedposttags;
    $allowedposttags['iframe'] = array(
        'class' => array(),
        'src' => array(),
        'width' => array(),
        'height' => array(),
        'frameborder' => array(),
        'scrolling' => array(),
        'marginheight' => array(),
        'marginwidth' => array(),
        'allowfullscreen' => array(),
    );
    return $content;
});
