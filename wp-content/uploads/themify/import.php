<?php

function themify_do_demo_import() {
$term = array (
  'term_id' => 18,
  'name' => 'New Dishes',
  'slug' => 'new-dishes',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 21,
  'name' => 'Promotions',
  'slug' => 'promotions',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 16,
  'name' => 'Main Navigation',
  'slug' => 'main-navigation',
  'term_group' => 0,
  'taxonomy' => 'nav_menu',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$post = array (
  'ID' => 333,
  'post_date' => '2019-09-20 16:27:56',
  'post_date_gmt' => '2019-09-20 16:27:56',
  'post_content' => '<!-- wp:paragraph -->
<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Limited Edition Pizzas!',
  'post_excerpt' => '',
  'post_name' => 'limited-edition-pizzas',
  'post_modified' => '2019-09-20 20:52:15',
  'post_modified_gmt' => '2019-09-20 20:52:15',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=333',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-promo-1.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 360,
  'post_date' => '2019-09-20 16:27:09',
  'post_date_gmt' => '2019-09-20 16:27:09',
  'post_content' => '<!-- wp:paragraph -->
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.&nbsp;Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Our New Pastry Chef',
  'post_excerpt' => '',
  'post_name' => 'new-pastry-chef',
  'post_modified' => '2019-09-20 20:52:27',
  'post_modified_gmt' => '2019-09-20 20:52:27',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=360',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/waiting-for-pizza.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 351,
  'post_date' => '2019-09-20 16:25:49',
  'post_date_gmt' => '2019-09-20 16:25:49',
  'post_content' => '<!-- wp:paragraph -->
<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Chatty Wednesdays Returns',
  'post_excerpt' => '',
  'post_name' => 'event-chatty-wednesdays',
  'post_modified' => '2019-09-20 20:52:36',
  'post_modified_gmt' => '2019-09-20 20:52:36',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=351',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/strawberry-pizza.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 350,
  'post_date' => '2019-09-20 16:25:06',
  'post_date_gmt' => '2019-09-20 16:25:06',
  'post_content' => '<!-- wp:paragraph -->
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?”&nbsp; repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'This Season\'s Specials',
  'post_excerpt' => '',
  'post_name' => 'season-specials',
  'post_modified' => '2019-09-20 20:52:47',
  'post_modified_gmt' => '2019-09-20 20:52:47',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=350',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-desert-menu.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 349,
  'post_date' => '2019-09-20 16:24:18',
  'post_date_gmt' => '2019-09-20 16:24:18',
  'post_content' => '<!-- wp:paragraph -->
<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. &nbsp;Ton provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&nbsp;Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Limited Dish: Italian Meat Pie',
  'post_excerpt' => '',
  'post_name' => 'italian-meat-pie',
  'post_modified' => '2019-09-20 20:53:18',
  'post_modified_gmt' => '2019-09-20 20:53:18',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=349',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pastella.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 334,
  'post_date' => '2019-09-20 16:23:16',
  'post_date_gmt' => '2019-09-20 16:23:16',
  'post_content' => '<!-- wp:paragraph -->
<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><br>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Ultra Ristorante New York Popup!',
  'post_excerpt' => '',
  'post_name' => 'new-york-popup',
  'post_modified' => '2019-09-20 20:53:29',
  'post_modified_gmt' => '2019-09-20 20:53:29',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=334',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pizza-resto.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 332,
  'post_date' => '2019-09-20 16:21:54',
  'post_date_gmt' => '2019-09-20 16:21:54',
  'post_content' => '<!-- wp:paragraph -->
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Our Favourite Home Dishes',
  'post_excerpt' => '',
  'post_name' => 'our-favourite-home-dishes',
  'post_modified' => '2019-09-20 20:53:40',
  'post_modified_gmt' => '2019-09-20 20:53:40',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=332',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/dinner.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 331,
  'post_date' => '2019-09-20 16:21:10',
  'post_date_gmt' => '2019-09-20 16:21:10',
  'post_content' => '<!-- wp:paragraph -->
<p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Our Special Pizza Dough Recipe',
  'post_excerpt' => '',
  'post_name' => 'pizza-dough-recipe',
  'post_modified' => '2019-09-23 02:35:14',
  'post_modified_gmt' => '2019-09-23 02:35:14',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=331',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 330,
  'post_date' => '2019-09-20 16:20:27',
  'post_date_gmt' => '2019-09-20 16:20:27',
  'post_content' => '<!-- wp:paragraph -->
<p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Limited Dish: Chutney Bruschetta',
  'post_excerpt' => '',
  'post_name' => 'chutney-bruschetta',
  'post_modified' => '2019-09-20 20:54:00',
  'post_modified_gmt' => '2019-09-20 20:54:00',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=330',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fruit-bread.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 329,
  'post_date' => '2019-09-20 16:19:22',
  'post_date_gmt' => '2019-09-20 16:19:22',
  'post_content' => '<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Why is the Margherita Pizza Famous?',
  'post_excerpt' => '',
  'post_name' => 'margherita-pizza-famous',
  'post_modified' => '2019-09-23 02:35:22',
  'post_modified_gmt' => '2019-09-23 02:35:22',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=329',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/cheese-pizza.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 326,
  'post_date' => '2019-09-20 16:18:01',
  'post_date_gmt' => '2019-09-20 16:18:01',
  'post_content' => '<!-- wp:paragraph -->
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?”&nbsp; repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Our Newest Special: Eggplant Parmigiana',
  'post_excerpt' => '',
  'post_name' => 'eggplant-parm',
  'post_modified' => '2019-09-20 20:12:11',
  'post_modified_gmt' => '2019-09-20 20:12:11',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=326',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 305,
  'post_date' => '2019-09-20 16:16:14',
  'post_date_gmt' => '2019-09-20 16:16:14',
  'post_content' => '<!-- wp:paragraph -->
<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Ultra Ristorante LA Popup!',
  'post_excerpt' => '',
  'post_name' => 'los-angeles-popup',
  'post_modified' => '2019-09-20 20:54:18',
  'post_modified_gmt' => '2019-09-20 20:54:18',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=305',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/auto-pizza.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 112,
  'post_date' => '2019-09-13 08:26:20',
  'post_date_gmt' => '2019-09-13 08:26:20',
  'post_content' => '<!-- wp:paragraph -->
<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores.<a href="javascript:void(0);"></a><br></p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Secret Spaghetti Bolognese Sauce',
  'post_excerpt' => '',
  'post_name' => 'spaghetti-bolognese-sauce',
  'post_modified' => '2019-09-20 20:54:27',
  'post_modified_gmt' => '2019-09-20 20:54:27',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=112',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 107,
  'post_date' => '2019-09-13 07:59:20',
  'post_date_gmt' => '2019-09-13 07:59:20',
  'post_content' => '<!-- wp:paragraph -->
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.&nbsp;Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'The Formula for the Best Pizza Toppings',
  'post_excerpt' => '',
  'post_name' => 'pizza-with-mushroom-topping-recipe',
  'post_modified' => '2019-09-24 03:00:39',
  'post_modified_gmt' => '2019-09-24 03:00:39',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=107',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/best-pizza-topping.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 100,
  'post_date' => '2019-09-13 07:52:39',
  'post_date_gmt' => '2019-09-13 07:52:39',
  'post_content' => '<!-- wp:paragraph -->
<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae. Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores.</p>
<!-- /wp:paragraph -->

<!-- wp:themify-builder/canvas /-->',
  'post_title' => 'Limited Edition: Italian Pasta Salad Supreme',
  'post_excerpt' => '',
  'post_name' => 'italian-salad',
  'post_modified' => '2019-09-20 20:54:39',
  'post_modified_gmt' => '2019-09-20 20:54:39',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=100',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'mobile_menu_styles' => 'default',
  ),
  'tax_input' => 
  array (
    'category' => 'new-dishes, promotions',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 129,
  'post_date' => '2019-09-18 02:29:40',
  'post_date_gmt' => '2019-09-18 02:29:40',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>About Us</h1>
<ul data-id="tb_mcuc974" data-visible="1" data-mob-visible="0" data-scroll="1" data-auto-scroll="off" data-speed="1" data-wrap="yes" data-arrow="yes" data-pagination="yes" data-effect="scroll" data-height="variable" data-pause-on-hover="resume" data-horizontal="no" > <li> <h3>1989</h3> <p>It was a beautiful year. The year this husband and wife team got married and the same year they opened Ultra Ristorante.</p> <p>From their kids scrambling through their kitchen, to their grandparents making meatballs in the apartment above, the Ultra Ristorante took years of love and work to help make come true. </p> <p>We are a proud family establishment with 30 years in the business and still striving to impress and bless those around us.</p> </li> <li> <h3>1997</h3> <p>It was time to take the restaurant to new heights. We opened up two new locations around the greater Toronto area and were breathless when they opened up to great reviews.</p> <p>We chose to focus and hone our commitment to quality and freshness, and it has always served us well.</p> </li> <li> <h3>2019</h3> <p>Even though we\'ve been offered to launch a franchise or asked to sell our restaurants, we\'ve always believed in staying true to our own nature.</p> <p>That is to keep things in the family while opening doors for the beautiful mosaic of our country\'s people to flood through to share our customs and culture with.</p> </li> </ul>
<a href="https://www.youtube.com/watch?v=vcfNpDtVqOw" data-zoom-config="600px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cook-600x639.jpg" width="600" alt="italian-cook" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cook-600x639.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cook.jpg 485w" sizes="(max-width: 600px) 100vw, 600px" /> </a>
<h3>Our Chefs</h3> <p>The good chefs</p>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fabrizio-220x220.jpg" width="220" title="Fabrizio Pitti" alt="Executive Chef Trained at the prestigious Massimo Ristorante in Milano, he&#039;s lead this team for 10 years." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fabrizio.jpg 220w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fabrizio-150x150.jpg 150w" sizes="(max-width: 220px) 100vw, 220px" /> <h3> Fabrizio Pitti </h3> <p>Executive Chef </p>Trained at the prestigious Massimo Ristorante in Milano, he\'s lead this team for 10 years.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/antonella-220x220.jpg" width="220" title="Antonella Pitti" alt="Head Chef After 8 years in Torino working under in a Michelin restaurant, she&#039;s Fab&#039;s right hand woman." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/antonella.jpg 220w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/antonella-150x150.jpg 150w" sizes="(max-width: 220px) 100vw, 220px" /> <h3> Antonella Pitti </h3> <p>Head Chef </p> After 8 years in Torino working under in a Michelin restaurant, she\'s Fab\'s right hand woman.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fillipo-220x220.jpg" width="220" title="Fillipo Pitti" alt="Senior Chef Trained by Antonella and Fabrizio, he leads the team of weekend line chefs." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fillipo.jpg 220w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/fillipo-150x150.jpg 150w" sizes="(max-width: 220px) 100vw, 220px" /> <h3> Fillipo Pitti </h3> <p>Senior Chef </p>Trained by Antonella and Fabrizio, he leads the team of weekend line chefs.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/luigi-220x220.jpg" width="220" title="Mario Stanza" alt="Junior Chef Trained in Modena under the hands of Francesca Gianni, he leads the weeknight crew." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/luigi.jpg 220w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/luigi-150x150.jpg 150w" sizes="(max-width: 220px) 100vw, 220px" /> <h3> Mario Stanza </h3> <p>Junior Chef </p>Trained in Modena under the hands of Francesca Gianni, he leads the weeknight crew.
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/spaghetti-maker.jpg" data-zoom-config="500px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/spaghetti-maker-265x265.jpg" width="265" height="265" alt="Fresh Spaghetti" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/spaghetti-maker-265x265.jpg 265w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/spaghetti-maker-150x150.jpg 150w" sizes="(max-width: 265px) 100vw, 265px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-chef-in-kitchen.jpg" data-zoom-config="500px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-chef-in-kitchen-265x265.jpg" width="265" height="265" alt="italian-chef-in-kitchen" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-chef-in-kitchen-265x265.jpg 265w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-chef-in-kitchen-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-chef-in-kitchen-256x256.jpg 256w" sizes="(max-width: 265px) 100vw, 265px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/chef-preparing-food-550x550.jpg" data-zoom-config="500px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/chef-preparing-food-550x550.jpg" width="550" height="550" alt="Italian Menus" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/chef-preparing-food-550x550.jpg 550w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/chef-preparing-food-150x150.jpg 150w" sizes="(max-width: 550px) 100vw, 550px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-women-chef-550x550.jpg" data-zoom-config="500px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-women-chef-550x550.jpg" width="550" height="550" alt="italian-women-chef" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-women-chef-550x550.jpg 550w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/italian-women-chef-150x150.jpg 150w" sizes="(max-width: 550px) 100vw, 550px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/strawberry-desert.jpg" data-zoom-config="600px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/strawberry-desert-265x265.jpg" width="265" height="265" alt="strawberry-desert" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/strawberry-desert-265x265.jpg 265w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/strawberry-desert-150x150.jpg 150w" sizes="(max-width: 265px) 100vw, 265px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/prepare-food-italian.jpg" data-zoom-config="500px|px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/prepare-food-italian-265x265.jpg" width="265" height="265" alt="prepare-food-italian" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/10/prepare-food-italian-265x265.jpg 265w, https://themify.me/demo/themes/ultra-ristorante/files/2019/10/prepare-food-italian-150x150.jpg 150w" sizes="(max-width: 265px) 100vw, 265px" /> </a>
<h3>Industry Reviews</h3> <p>Some of the best and brightest have sat down to eat with us.</p>
<ul data-id="tb_nezz463" data-visible="1" data-mob-visible="0" data-scroll="1" data-auto-scroll="off" data-speed="1" data-wrap="yes" data-arrow="yes" data-pagination="yes" data-effect="scroll" data-height="variable" data-pause-on-hover="resume" data-horizontal="" > <li> 
 <p>Food flavours are well balanced with specials that are actually great dishes. Pasta dishes are a favourite of mine here. They\'re heads and tails better than the big chain restaurants. Reservations are definitely recommended.</p> <figure><img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-100x100.jpg" width="100" height="100" alt="face1" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-100x100.jpg 100w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Jennifer Turner Executive Chef Petite Toulouse </li> <li> 
 <p>Their Italian food is, in my opinion, the most delicious in the city. The menu is extensive and offers pasta, pizza, meat, and seafood dishes. Very friendly and efficient staff that provide top-notch service. Great decor, great atmosphere, and appeals to couples and families.</p> <figure><img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-100x100.jpg" width="100" height="100" alt="face7" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-100x100.jpg 100w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Ahmed Farri Head Chef Las Ramblas </li> </ul>
<h3>In the Press</h3> <p>Coverage on Ultra Ristorante</p>
<p>Lorem ipsum dolor</p> <h3>The Starter Guide<br />to Self to Improvement</h3>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/cashier-170x170.jpg" width="170" alt="Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/cashier.jpg 170w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/cashier-150x150.jpg 150w" sizes="(max-width: 170px) 100vw, 170px" /> Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/restaurant-bar-170x170.jpg" width="170" alt="Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/restaurant-bar.jpg 170w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/restaurant-bar-150x150.jpg 150w" sizes="(max-width: 170px) 100vw, 170px" /> Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/our-menus-170x170.jpg" width="170" alt="Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/our-menus.jpg 170w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/our-menus-150x150.jpg 150w" sizes="(max-width: 170px) 100vw, 170px" /> Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua.
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/inside-our-restaurant-170x170.jpg" width="170" alt="Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/inside-our-restaurant.jpg 170w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/inside-our-restaurant-150x150.jpg 150w" sizes="(max-width: 170px) 100vw, 170px" /> Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua.<!--/themify_builder_static-->',
  'post_title' => 'About',
  'post_excerpt' => '',
  'post_name' => 'about',
  'post_modified' => '2019-10-23 01:35:52',
  'post_modified_gmt' => '2019-10-23 01:35:52',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?page_id=129',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"wdti538\\",\\"cols\\":[{\\"element_id\\":\\"2vni539\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"w3vx157\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>About Us<\\\\/h1>\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_bottom\\":\\"148\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"148\\",\\"cover_color\\":\\"#000000_0.59\\",\\"cover_color-type\\":\\"color\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/about-header.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"91\\",\\"padding_top\\":\\"91\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":\\"1\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"90\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"90\\",\\"padding_top_unit\\":\\"px\\",\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":\\"1\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_bottom\\":\\"110\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"110\\",\\"padding_top_unit\\":\\"px\\",\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":\\"1\\"}}},{\\"element_id\\":\\"lds6867\\",\\"cols\\":[{\\"element_id\\":\\"wwu1869\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"slider\\",\\"element_id\\":\\"mcuc974\\",\\"mod_settings\\":{\\"posts_per_page_slider\\":\\"4\\",\\"display_slider\\":\\"none\\",\\"img_w_slider\\":\\"360\\",\\"img_h_slider\\":\\"200\\",\\"horizontal\\":\\"no\\",\\"visible_opt_slider\\":\\"1\\",\\"pause_on_hover_slider\\":\\"resume\\",\\"show_arrow_slider\\":\\"yes\\",\\"show_nav_slider\\":\\"yes\\",\\"wrap_slider\\":\\"yes\\",\\"auto_scroll_opt_slider\\":\\"off\\",\\"post_type\\":\\"post\\",\\"height_slider\\":\\"variable\\",\\"effect_slider\\":\\"scroll\\",\\"speed_opt_slider\\":\\"normal\\",\\"scroll_opt_slider\\":\\"1\\",\\"mob_visible_opt_slider\\":\\"0\\",\\"layout_slider\\":\\"slider-agency\\",\\"text_content_slider\\":[{\\"text_caption_slider\\":\\"<h3>1989<\\\\/h3>\\\\n<p>It was a beautiful year. The year this husband and wife team got married and the same year they opened Ultra Ristorante.<\\\\/p>\\\\n<p>From their kids scrambling through their kitchen, to their grandparents making meatballs in the apartment above, the Ultra Ristorante took years of love and work to help make come true. <\\\\/p>\\\\n<p>We are a proud family establishment with 30 years in the business and still striving to impress and bless those around us.<\\\\/p>\\"},{\\"text_caption_slider\\":\\"<h3>1997<\\\\/h3>\\\\n<p>It was time to take the restaurant to new heights. We opened up two new locations around the greater Toronto area and were breathless when they opened up to great reviews.<\\\\/p>\\\\n<p>We chose to focus and hone our commitment to quality and freshness, and it has always served us well.<\\\\/p>\\"},{\\"text_caption_slider\\":\\"<h3>2019<\\\\/h3>\\\\n<p>Even though we\\\'ve been offered to launch a franchise or asked to sell our restaurants, we\\\'ve always believed in staying true to our own nature.<\\\\/p>\\\\n<p>That is to keep things in the family while opening doors for the beautiful mosaic of our country\\\'s people to flood through to share our customs and culture with.<\\\\/p>\\"}],\\"open_link_new_tab_slider\\":\\"no\\",\\"unlink_feat_img_slider\\":\\"no\\",\\"hide_feat_img_slider\\":\\"no\\",\\"unlink_post_title_slider\\":\\"no\\",\\"hide_post_title_slider\\":\\"no\\",\\"orderby_slider\\":\\"date\\",\\"order_slider\\":\\"desc\\",\\"blog_category_slider\\":\\"0|single\\",\\"taxonomy\\":\\"category\\",\\"layout_display_slider\\":\\"text\\"}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"margin-bottom\\":46,\\"margin-bottom_unit\\":\\"px\\",\\"padding_bottom\\":0,\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"46\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"ksjt772\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"dyco368\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/www.youtube.com\\\\/watch?v=vcfNpDtVqOw\\",\\"width_image\\":\\"600\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-cook-600x639.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":false,\\"caption_on_overlay\\":false,\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"2\\",\\"v_dir\\":\\"up\\"}}}}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column-full\\",\\"col_mobile\\":\\"column-full\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"100\\",\\"padding_bottom\\":\\"100\\",\\"padding_opp_top\\":\\"1\\",\\"background_position\\":\\"50,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/buble-bg-blue.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"76\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"76\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"88\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"88\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"a6gl757\\",\\"cols\\":[{\\"element_id\\":\\"fk2v760\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"1odp128\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Our Chefs<\\\\/h3>\\\\n<p>The good chefs<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"padding_bottom\\":\\"50\\",\\"padding_bottom_unit\\":\\"px\\"}},{\\"element_id\\":\\"svtq83\\",\\"cols\\":[{\\"element_id\\":\\"vs4d84\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"89hv810\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Fabrizio Pitti\\",\\"width_image\\":\\"220\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/fabrizio.jpg\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"<p>Executive Chef <\\\\/p>Trained at the prestigious Massimo Ristorante in Milano, he\\\'s lead this team for 10 years.\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\"}}}]},{\\"element_id\\":\\"7e1884\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"r5s5965\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Antonella Pitti\\",\\"width_image\\":\\"220\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/antonella.jpg\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"<p>Head Chef <\\\\/p> After 8 years in Torino working under in a Michelin restaurant, she\\\'s Fab\\\'s right hand woman.\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\"}}}]},{\\"element_id\\":\\"vu7s84\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"1tr0677\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Fillipo Pitti\\",\\"width_image\\":\\"220\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/fillipo.jpg\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"<p>Senior Chef <\\\\/p>Trained by Antonella and Fabrizio, he leads the team of weekend line chefs.\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\"}}}]},{\\"element_id\\":\\"g5nu85\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"25fq224\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Mario Stanza\\",\\"width_image\\":\\"220\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/luigi.jpg\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"<p>Junior Chef <\\\\/p>Trained in Modena under the hands of Francesca Gianni, he leads the weeknight crew.\\",\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\"}}}]}],\\"col_tablet_landscape\\":\\"column4-1\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column-full\\"}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"106\\",\\"padding_bottom\\":\\"106\\",\\"padding_opp_top\\":\\"1\\",\\"background_color\\":\\"#000000\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":76,\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":76,\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"78\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"78\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"8wp0600\\",\\"cols\\":[{\\"element_id\\":\\"zazs600\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"element_id\\":\\"6mkq588\\",\\"cols\\":[{\\"element_id\\":\\"ywfm589\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"h40c590\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"500\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/spaghetti-maker.jpg\\",\\"width_image\\":\\"265\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/spaghetti-maker-265x265.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"padding_opp_left\\":false,\\"padding_opp_top\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_bottom\\":\\"15\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"lightbox_height_unit\\":\\"px\\",\\"height_image\\":\\"265\\"}}]},{\\"element_id\\":\\"7sz7590\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"zs0g590\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"500\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/italian-chef-in-kitchen.jpg\\",\\"width_image\\":\\"265\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/italian-chef-in-kitchen-265x265.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"height_image\\":\\"265\\",\\"padding_opp_left\\":false,\\"padding_opp_top\\":false}}]}],\\"styling\\":{\\"margin_opp_left\\":false,\\"margin_bottom\\":\\"15\\",\\"margin_opp_top\\":false,\\"padding_opp_left\\":false,\\"padding_opp_top\\":false}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"7gw8887\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"500\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/chef-preparing-food-550x550.jpg\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/chef-preparing-food-550x550.jpg\\",\\"style_image\\":\\"image-center\\",\\"width_image\\":\\"550\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_bottom\\":\\"15\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"lightbox_height_unit\\":\\"px\\",\\"height_image\\":\\"550\\"}}]},{\\"element_id\\":\\"w6x5845\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"0f06594\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"500\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/italian-women-chef-550x550.jpg\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/italian-women-chef-550x550.jpg\\",\\"style_image\\":\\"image-center\\",\\"width_image\\":\\"550\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"margin_bottom\\":\\"15\\",\\"height_image\\":\\"550\\"}},{\\"element_id\\":\\"6wzy462\\",\\"cols\\":[{\\"element_id\\":\\"v2t4466\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"x1v0175\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/strawberry-desert.jpg\\",\\"width_image\\":\\"265\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/strawberry-desert-265x265.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_bottom\\":\\"15\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"lightbox_height_unit\\":\\"px\\",\\"height_image\\":\\"265\\"}}]},{\\"element_id\\":\\"jufr466\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"4htb922\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"500\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/prepare-food-italian.jpg\\",\\"width_image\\":\\"265\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/10\\\\/prepare-food-italian-265x265.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":\\"1\\",\\"caption_on_overlay\\":false,\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"height_image\\":\\"265\\"}}]}],\\"styling\\":{\\"checkbox_margin_apply_all\\":\\"1\\",\\"margin_opp_left\\":false,\\"margin_opp_top\\":false,\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_opp_left\\":false,\\"padding_opp_top\\":false}}]}],\\"column_alignment\\":\\"col_align_bottom\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column-full\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"120\\",\\"padding_bottom\\":\\"70\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/buble-bg-blue.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_top\\":55,\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":55,\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"90\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"7lmg460\\",\\"cols\\":[{\\"element_id\\":\\"366w461\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"95tf297\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Industry Reviews<\\\\/h3>\\\\n<p>Some of the best and brightest have sat down to eat with us.<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"padding_bottom\\":\\"50\\",\\"padding_bottom_unit\\":\\"px\\"}},{\\"mod_name\\":\\"testimonial-slider\\",\\"element_id\\":\\"nezz463\\",\\"mod_settings\\":{\\"layout_testimonial\\":\\"image-bottom\\",\\"img_h_slider\\":\\"100\\",\\"img_w_slider\\":\\"100\\",\\"visible_opt_slider\\":\\"1\\",\\"auto_scroll_opt_slider\\":\\"off\\",\\"tab_content_testimonial\\":[{\\"content_testimonial\\":\\"<p>Food flavours are well balanced with specials that are actually great dishes. Pasta dishes are a favourite of mine here. They\\\'re heads and tails better than the big chain restaurants. Reservations are definitely recommended.<\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/face1.jpg\\",\\"person_name_testimonial\\":\\"Jennifer Turner\\",\\"person_position_testimonial\\":\\"Executive Chef \\",\\"company_testimonial\\":\\"Petite Toulouse\\"},{\\"content_testimonial\\":\\"<p>Their Italian food is, in my opinion, the most delicious in the city. The menu is extensive and offers pasta, pizza, meat, and seafood dishes. Very friendly and efficient staff that provide top-notch service. Great decor, great atmosphere, and appeals to couples and families.<\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/face7.jpg\\",\\"person_name_testimonial\\":\\"Ahmed Farri\\",\\"person_position_testimonial\\":\\"Head Chef\\",\\"company_testimonial\\":\\"Las Ramblas\\"}],\\"height_slider\\":\\"variable\\",\\"show_arrow_buttons_vertical\\":\\"vertical\\",\\"show_arrow_slider\\":\\"yes\\",\\"show_nav_slider\\":\\"yes\\",\\"wrap_slider\\":\\"yes\\",\\"pause_on_hover_slider\\":\\"resume\\",\\"effect_slider\\":\\"scroll\\",\\"speed_opt_slider\\":\\"normal\\",\\"scroll_opt_slider\\":\\"1\\",\\"mob_visible_opt_slider\\":\\"0\\",\\"grid_layout_testimonial\\":\\"list-post\\",\\"type_testimonial\\":\\"slider\\"}}]}],\\"styling\\":{\\"padding_top\\":\\"70\\",\\"background_position\\":\\"51.33,60\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"row_width\\":\\"fullwidth\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"0\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"34\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"35\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"tt3b386\\",\\"cols\\":[{\\"element_id\\":\\"2m3i387\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"t75x614\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>In the Press<\\\\/h3>\\\\n<p>Coverage on Ultra Ristorante<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"padding_bottom\\":\\"51\\",\\"padding_bottom_unit\\":\\"px\\"}},{\\"element_id\\":\\"5yi6650\\",\\"cols\\":[{\\"element_id\\":\\"syfr652\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"nqk6610\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>Lorem ipsum dolor<\\\\/p>\\\\n<h3>The Starter Guide<br \\\\/>to Self to Improvement<\\\\/h3>\\",\\"p_margin_bottom_unit\\":\\"px\\",\\"p_margin_bottom\\":\\"7\\"}}],\\"styling\\":{\\"padding_bottom\\":\\"84\\",\\"padding_top\\":\\"84\\",\\"padding_opp_top\\":\\"1\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/our-restaurat.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_left\\":\\"50\\",\\"padding_right\\":\\"50\\",\\"font_color\\":\\"#ffffff\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\"}},{\\"element_id\\":\\"nmcn653\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"37s2361\\",\\"mod_settings\\":{\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua. \\",\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/cashier.jpg\\",\\"style_image\\":\\"image-left\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"8\\",\\"margin_bottom\\":\\"25\\",\\"width_image\\":\\"170\\",\\"image_zoom_icon\\":false,\\"auto_fullwidth\\":false,\\"appearance_image\\":false,\\"caption_on_overlay\\":false}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"25fx80\\",\\"mod_settings\\":{\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua. \\",\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/restaurant-bar.jpg\\",\\"style_image\\":\\"image-left\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"8\\",\\"margin_bottom\\":\\"25\\",\\"width_image\\":\\"170\\"}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"rxuc201\\",\\"mod_settings\\":{\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua. \\",\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/our-menus.jpg\\",\\"style_image\\":\\"image-left\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"8\\",\\"margin_bottom\\":\\"25\\",\\"width_image\\":\\"170\\"}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"nz8s924\\",\\"mod_settings\\":{\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur niscing elit, sed do eiusmod tempor incididnut labore et dolore magna aliqua. \\",\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/inside-our-restaurant.jpg\\",\\"style_image\\":\\"image-left\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"8\\",\\"width_image\\":\\"170\\"}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"padding_top\\":\\"56\\",\\"padding_top_unit\\":\\"px\\"}}}],\\"column_alignment\\":\\"col_align_bottom\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column-full\\"}]}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"100\\",\\"padding_bottom\\":\\"170\\",\\"padding_top_unit\\":\\"px\\",\\"background_position\\":\\"50,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/buble-bg-blue.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_top\\":55,\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":\\"75\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"69\\",\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":\\"90\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_bottom\\":\\"104\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"81\\",\\"padding_top_unit\\":\\"px\\"}}}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 394,
  'post_date' => '2019-09-20 16:51:36',
  'post_date_gmt' => '2019-09-20 16:51:36',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Blog</h1>
<!--/themify_builder_static-->',
  'post_title' => 'Blog',
  'post_excerpt' => '',
  'post_name' => 'blog',
  'post_modified' => '2019-09-24 02:52:39',
  'post_modified_gmt' => '2019-09-24 02:52:39',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?page_id=394',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    'layout' => 'grid3',
    'display_content' => 'none',
    'hide_date' => 'yes',
    'hide_meta_all' => 'yes',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"xv3p383\\",\\"cols\\":[{\\"element_id\\":\\"yav9383\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"v2rg384\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>Blog<\\\\/h1>\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_bottom\\":\\"148\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"148\\",\\"cover_color\\":\\"#000000_0.59\\",\\"cover_color-type\\":\\"color\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https://themify.me/demo/themes/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/contact-hero-banner.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"margin-bottom_unit\\":\\"px\\",\\"margin-bottom\\":\\"153\\",\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"91\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"91\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"cxzr888\\",\\"cols\\":[{\\"element_id\\":\\"1kvj889\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"post\\",\\"element_id\\":\\"df0c409\\",\\"mod_settings\\":{\\"layout_post\\":\\"grid3\\",\\"post_per_page_post\\":\\"6\\",\\"display_post\\":\\"none\\",\\"hide_page_nav_post\\":\\"no\\",\\"post_type_post\\":\\"post\\",\\"hide_post_meta_post\\":\\"yes\\",\\"hide_post_date_post\\":\\"yes\\",\\"unlink_post_title_post\\":\\"no\\",\\"hide_post_title_post\\":\\"no\\",\\"unlink_feat_img_post\\":\\"no\\",\\"hide_feat_img_post\\":\\"no\\",\\"orderby_post\\":\\"date\\",\\"order_post\\":\\"desc\\",\\"post_filter\\":\\"no\\",\\"category_post\\":\\"0|single\\",\\"term_type\\":\\"category\\",\\"type_query_post\\":\\"category\\",\\"auto_fullwidth_post\\":\\"\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 132,
  'post_date' => '2019-09-18 02:29:57',
  'post_date_gmt' => '2019-09-18 02:29:57',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Contact Us</h1>
<h2>Get In Touch</h2> <p>Come on over and take a seat - the next few hours are all about you. We hope to make you feel welcome, warm, and special during your stay with us.</p> <p>If there\'s anything extra or special you might need during your time here, don\'t hesitate to let us know. We\'re at your convenience.</p>
<a href="http://facebook.com/themify"> </a> <a href="https://twitter.com/themify"> </a> <a href="https://www.instagram.com/themify/"> </a>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/elegant-restaurant-600x677.jpg" width="600" alt="elegant-restaurant" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/elegant-restaurant-600x677.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/elegant-restaurant.jpg 475w" sizes="(max-width: 600px) 100vw, 600px" />
<h3> Address </h3> <p>96 Richmond St W, Toronto, ON M5H 2A3, Canada</p>
<h3> Email </h3> <p>Ristorante@resto.com</p>
<h3> Phone </h3> <p>+416 - 001-2345</p>
<h3> Open Hours </h3> <p>Tues-Sun<br />12:00 – 3:00 <br />6:00 – late <br />(Closed Mondays)</p>
<h3>Contact Us</h3> <p>For reservations of 8 or more, please email or call us.</p>
<form action="https://themify.me/demo/themes/ultra-ristorante/wp-admin/admin-ajax.php" id="contact-0--form" method="post"> <label for="contact-0--contact-name">Name *</label> <input type="text" name="contact-name" placeholder="" id="contact-0--contact-name" value="" required/> <label for="contact-0--contact-email">Email *</label> <input type="text" name="contact-email" placeholder="" id="contact-0--contact-email" value="" required /> <label for="contact-0--contact-subject">Subject *</label> <input type="text" name="contact-subject" placeholder="" id="contact-0--contact-subject" value="" required /> <label for="contact-0--contact-message">Message *</label> <textarea name="contact-message" placeholder="" id="contact-0--contact-message" rows="8" cols="45" required></textarea> <button type="submit"> Send Message </button> </form>
<p>96 Richmond St W, Toronto, ON M5H 2A3, Canada</p>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/map-pin.png" alt="map-pin" /><!--/themify_builder_static-->',
  'post_title' => 'Contact',
  'post_excerpt' => '',
  'post_name' => 'contact',
  'post_modified' => '2019-10-23 01:37:28',
  'post_modified_gmt' => '2019-10-23 01:37:28',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?page_id=132',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"syq7830\\",\\"cols\\":[{\\"element_id\\":\\"st3k831\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"3t9c832\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>Contact Us<\\\\/h1>\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_bottom\\":\\"148\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"148\\",\\"cover_color\\":\\"#000000_0.59\\",\\"cover_color-type\\":\\"color\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/contact-hero-banner.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"93\\",\\"padding_top\\":\\"91\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"77\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"77\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"mrll431\\",\\"cols\\":[{\\"element_id\\":\\"l18p431\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"23r1690\\",\\"mod_settings\\":{\\"content_text\\":\\"<h2>Get In Touch<\\\\/h2>\\\\n<p>Come on over and take a seat - the next few hours are all about you. We hope to make you feel welcome, warm, and special during your stay with us.<\\\\/p>\\\\n<p>If there\\\'s anything extra or special you might need during your time here, don\\\'t hesitate to let us know. We\\\'re at your convenience.<\\\\/p>\\",\\"margin_opp_left\\":false,\\"margin_bottom\\":\\"20\\",\\"margin_opp_top\\":false}},{\\"mod_name\\":\\"icon\\",\\"element_id\\":\\"m6yi932\\",\\"mod_settings\\":{\\"content_icon\\":[{\\"icon\\":\\"ti-facebook\\",\\"icon_color_bg\\":\\"red\\",\\"link\\":\\"http:\\\\/\\\\/facebook.com\\\\/themify\\",\\"link_options\\":\\"regular\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_height_unit\\":\\"px\\"},{\\"icon\\":\\"ti-twitter-alt\\",\\"icon_color_bg\\":\\"red\\",\\"link\\":\\"https:\\\\/\\\\/twitter.com\\\\/themify\\",\\"link_options\\":\\"regular\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_height_unit\\":\\"px\\"},{\\"icon\\":\\"ti-instagram\\",\\"icon_color_bg\\":\\"red\\",\\"link\\":\\"https:\\\\/\\\\/www.instagram.com\\\\/themify\\\\/\\",\\"link_options\\":\\"regular\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_height_unit\\":\\"px\\"}],\\"icon_arrangement\\":\\"icon_horizontal\\",\\"icon_style\\":\\"circle\\",\\"icon_size\\":\\"normal\\",\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"41\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"41\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"bgge432\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"bhp4432\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"param_image\\":\\"lightbox\\",\\"width_image\\":\\"600\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/elegant-restaurant-600x677.jpg\\",\\"style_image\\":\\"image-center\\",\\"auto_fullwidth\\":false,\\"caption_on_overlay\\":false,\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"2\\",\\"v_dir\\":\\"up\\"}}},\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\"}}],\\"styling\\":{\\"padding_bottom\\":\\"30\\",\\"padding_right\\":\\"30\\",\\"background_position\\":\\"100,100\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/dots.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_tablet\\":{\\"text-shadow_blur_unit\\":\\"px\\",\\"text-shadow_vShadow_unit\\":\\"px\\",\\"text-shadow_hShadow_unit\\":\\"px\\",\\"text_align\\":\\"center\\",\\"letter_spacing_unit\\":\\"px\\",\\"line_height_unit\\":\\"px\\",\\"font_size_unit\\":\\"px\\"},\\"breakpoint_mobile\\":{\\"text-shadow_blur_unit\\":\\"px\\",\\"text-shadow_vShadow_unit\\":\\"px\\",\\"text-shadow_hShadow_unit\\":\\"px\\",\\"text_align\\":\\"center\\",\\"letter_spacing_unit\\":\\"px\\",\\"line_height_unit\\":\\"px\\",\\"font_size_unit\\":\\"px\\",\\"padding_bottom\\":23,\\"padding_bottom_unit\\":\\"px\\"}}}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column-full\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"104\\",\\"padding_bottom\\":\\"104\\",\\"padding_opp_top\\":\\"1\\",\\"background_position\\":\\"50,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/buble-bg-blue.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":52,\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":52,\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"77\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"77\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"ukxp114\\",\\"cols\\":[{\\"element_id\\":\\"8bsv198\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"feature\\",\\"element_id\\":\\"r21t198\\",\\"mod_settings\\":{\\"title_feature\\":\\"Address\\",\\"content_feature\\":\\"<p>96 Richmond St W, Toronto, ON M5H 2A3, Canada<\\\\/p>\\",\\"icon_feature\\":\\"ti-home\\",\\"layout_feature\\":\\"icon-left\\",\\"circle_size_feature\\":\\"custom\\",\\"icon_type_feature\\":\\"icon\\",\\"link_options\\":\\"regular\\",\\"circle_percentage_feature\\":\\"0\\",\\"icon_color_feature\\":\\"#ffffff\\",\\"custom_circle_size_feature\\":\\"50\\",\\"feature_download_link\\":false,\\"breakpoint_mobile\\":{\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_right_unit\\":\\"px\\",\\"padding_right\\":\\"20\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\"}}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#ffffff_0.42\\",\\"border-type\\":\\"right\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\",\\"padding_left\\":\\"2\\",\\"breakpoint_mobile\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#f46887\\",\\"border-type\\":\\"right\\",\\"padding_left\\":\\"0\\",\\"padding_right\\":\\"0\\"},\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\"},\\"padding_left_unit\\":\\"%\\",\\"padding_right_unit\\":\\"%\\",\\"border_left_style\\":\\"solid\\",\\"border_bottom_style\\":\\"solid\\",\\"border_right_style\\":\\"solid\\",\\"border_top_style\\":\\"solid\\",\\"checkbox_padding_apply_all\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\"}},{\\"element_id\\":\\"otvh857\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"feature\\",\\"element_id\\":\\"py8l858\\",\\"mod_settings\\":{\\"title_feature\\":\\"Email\\",\\"content_feature\\":\\"<p>Ristorante@resto.com<\\\\/p>\\",\\"icon_feature\\":\\"ti-email\\",\\"layout_feature\\":\\"icon-left\\",\\"circle_size_feature\\":\\"custom\\",\\"icon_type_feature\\":\\"icon\\",\\"link_options\\":\\"regular\\",\\"circle_percentage_feature\\":\\"0\\",\\"icon_color_feature\\":\\"#ffffff\\",\\"custom_circle_size_feature\\":\\"50\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\",\\"padding_top\\":\\"0\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#ffffff_0.42\\",\\"border-type\\":\\"right\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"2\\",\\"breakpoint_mobile\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#f46887\\",\\"border-type\\":\\"right\\",\\"padding_left\\":\\"0\\",\\"padding_right\\":\\"0\\"},\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\"},\\"padding_opp_left\\":\\"1\\",\\"border_left_style\\":\\"solid\\",\\"border_bottom_style\\":\\"solid\\",\\"border_right_style\\":\\"solid\\",\\"border_top_style\\":\\"solid\\"}},{\\"element_id\\":\\"186i323\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"feature\\",\\"element_id\\":\\"dqou325\\",\\"mod_settings\\":{\\"title_feature\\":\\"Phone\\",\\"content_feature\\":\\"<p>+416 - 001-2345<\\\\/p>\\",\\"icon_feature\\":\\"ti-mobile\\",\\"layout_feature\\":\\"icon-left\\",\\"circle_size_feature\\":\\"custom\\",\\"icon_type_feature\\":\\"icon\\",\\"link_options\\":\\"regular\\",\\"circle_percentage_feature\\":\\"0\\",\\"icon_color_feature\\":\\"#ffffff\\",\\"custom_circle_size_feature\\":\\"50\\",\\"circle_stroke_feature\\":\\"0\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#ffffff_0.42\\",\\"border-type\\":\\"right\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"2\\",\\"breakpoint_mobile\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#f46887\\",\\"border-type\\":\\"right\\",\\"padding_left\\":\\"0\\",\\"padding_right\\":\\"0\\"},\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\"},\\"border_left_style\\":\\"solid\\",\\"border_bottom_style\\":\\"solid\\",\\"border_right_style\\":\\"solid\\",\\"border_top_style\\":\\"solid\\"}},{\\"element_id\\":\\"i5wr959\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"feature\\",\\"element_id\\":\\"lomu960\\",\\"mod_settings\\":{\\"title_feature\\":\\"Open Hours\\",\\"content_feature\\":\\"<p>Tues-Sun<br \\\\/>12:00 – 3:00 <br \\\\/>6:00 – late <br \\\\/>(Closed Mondays)<\\\\/p>\\",\\"icon_feature\\":\\"ti-time\\",\\"layout_feature\\":\\"icon-left\\",\\"circle_size_feature\\":\\"custom\\",\\"icon_type_feature\\":\\"icon\\",\\"link_options\\":\\"regular\\",\\"circle_percentage_feature\\":\\"0\\",\\"icon_color_feature\\":\\"#ffffff\\",\\"custom_circle_size_feature\\":\\"50\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"2\\",\\"border-type\\":\\"right\\",\\"breakpoint_mobile\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#f46887\\",\\"border-type\\":\\"right\\",\\"padding_left\\":\\"0\\",\\"padding_right\\":\\"0\\"},\\"padding_top\\":\\"0\\",\\"breakpoint_tablet\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"1\\",\\"border_right_color\\":\\"#f46887\\",\\"border-type\\":\\"right\\",\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\",\\"padding_top\\":\\"0\\"},\\"border_left_style\\":\\"solid\\",\\"border_bottom_style\\":\\"solid\\",\\"border_right_style\\":\\"solid\\",\\"border_top_style\\":\\"solid\\"}}],\\"gutter\\":\\"gutter-none\\",\\"col_tablet_landscape\\":\\"column4-1\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column4-2\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"background_color\\":\\"#ef2753\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom\\":\\"79\\",\\"padding_top\\":\\"79\\",\\"padding_opp_top\\":\\"1\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"57\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"57\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"62\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"62\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"21l2374\\",\\"cols\\":[{\\"element_id\\":\\"zwj7375\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"3anl729\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Contact Us<\\\\/h3>\\\\n<p>For reservations of 8 or more, please email or call us.<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\"}},{\\"mod_name\\":\\"contact\\",\\"element_id\\":\\"2byb955\\",\\"mod_settings\\":{\\"field_name_label\\":\\"Name\\",\\"field_email_label\\":\\"Email\\",\\"field_subject_label\\":\\"Subject\\",\\"field_message_label\\":\\"Message\\",\\"field_sendcopy_label\\":\\"Send a copy to myself\\",\\"field_send_label\\":\\"Send Message \\",\\"gdpr_label\\":\\"I consent to my submitted data being collected and stored\\",\\"field_name_require\\":\\"yes\\",\\"field_email_require\\":\\"yes\\",\\"field_name_active\\":\\"yes\\",\\"field_email_active\\":\\"yes\\",\\"field_subject_active\\":\\"yes\\",\\"field_subject_require\\":\\"yes\\",\\"field_message_active\\":\\"yes\\",\\"field_send_align\\":\\"center\\",\\"field_extra\\":\\"{ \\\\\\"fields\\\\\\": [] }\\",\\"field_order\\":\\"{}\\",\\"contact_sent_from\\":\\"enable\\",\\"send_to_admins\\":\\"true\\",\\"layout_contact\\":\\"animated-label\\"}}],\\"styling\\":{\\"b_sh_color\\":\\"#000000_0.07\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"20\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"0\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_top\\":\\"50\\",\\"zi\\":\\"3\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"background_color\\":\\"#ffffff\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"120\\",\\"padding_bottom\\":\\"0\\",\\"margin-bottom_unit\\":\\"px\\",\\"margin-bottom\\":\\"-71\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_top\\":0,\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"90\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"2fac427\\",\\"cols\\":[{\\"element_id\\":\\"ubho428\\",\\"grid_class\\":\\"col4-1\\"},{\\"element_id\\":\\"rzaf583\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"element_id\\":\\"zwpd211\\",\\"cols\\":[{\\"element_id\\":\\"eo7z212\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"lpic814\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>96 Richmond St W, Toronto, ON M5H 2A3, Canada<\\\\/p>\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_bottom\\":\\"50\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"50\\",\\"p_margin_bottom_unit\\":\\"px\\",\\"p_margin_bottom\\":\\"0\\",\\"background_position\\":\\"50,50\\",\\"background_repeat\\":\\"repeat\\",\\"background_image-circle-radial\\":false,\\"background_image-type\\":\\"image\\"}}]}],\\"styling\\":{\\"text_align\\":\\"center\\",\\"background_color\\":\\"#ffffff\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"margin_bottom\\":\\"10\\",\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"1\\",\\"v_dir\\":\\"up\\"}}},\\"b_sh_inset\\":false,\\"b_sh_color\\":\\"#000000_0.16\\",\\"b_sh_spread_unit\\":\\"px\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"18\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"6\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"b_ra_opp_left\\":false,\\"b_ra_opp_bottom\\":false,\\"background_position\\":\\"50,50\\",\\"background_zoom\\":false,\\"background_gradient-circle-radial\\":false,\\"background_gradient-gradient-angle\\":\\"180\\",\\"background_gradient-gradient-type\\":\\"linear\\"}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"0g5x616\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/map-pin.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"03oo585\\",\\"grid_class\\":\\"col4-1\\"}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"margin-top\\":\\"0\\",\\"margin-top_unit\\":\\"px\\",\\"padding_top\\":\\"207\\",\\"padding_bottom\\":\\"207\\",\\"padding_opp_top\\":\\"1\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/map-grayscale.jpg\\",\\"cover_color\\":\\"#ffffff_0.31\\",\\"cover_color-type\\":\\"color\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\"}}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 6,
  'post_date' => '2019-09-11 03:51:48',
  'post_date_gmt' => '2019-09-11 03:51:48',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/quality-badge-400x329.png" width="400" alt="quality-badge" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/quality-badge-400x329.png 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/quality-badge.png 500w" sizes="(max-width: 400px) 100vw, 400px" />
<h3>Our House Specials</h3> <p>What we\'re known for, made with love.</p>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg" width="90" height="90" alt="Famous Spaghetti Bolognese " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Famous Spaghetti Bolognese </h4> Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy. 
 $18.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-90x90.jpg" width="90" height="90" alt="Classic Farfalle in Pesto Sauce" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Classic Farfalle in Pesto Sauce</h4> A beautiful blend of crushed garlic, pine nuts, basil leaves, and pecorino, with perfectly coated farfalle. 
 $17.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg" width="90" height="90" alt="Favourite Margherita Pizza" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-600x591.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-768x756.jpg 768w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-400x394.jpg 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish.jpg 800w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Favourite Margherita Pizza</h4> Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. 
 $15.00 <br/>
<a href="https://themify.me/demo/themes/ultra-ristorante/menus/" > View Our Menus </a>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pizza-pepperoni-500x336.jpg" width="500" alt="italian-pizza-pepperoni" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pizza-pepperoni-500x336.jpg 500w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pizza-pepperoni-550x370.jpg 550w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pizza-pepperoni.jpg 570w" sizes="(max-width: 500px) 100vw, 500px" />
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-480x274.jpg" width="480" alt="italian-spaghetti" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-480x274.jpg 480w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-600x343.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-450x257.jpg 450w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-90x51.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-400x228.jpg 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti.jpg 603w" sizes="(max-width: 480px) 100vw, 480px" />
<h3>Our Story</h3> <p>A celebration of Toronto\'s love for Italian food and culture, Ultra Ristorante showcases ingredient-led, traditional Italian cuisine. Their commitment to beautiful ingredients and dishes that act as both food for the eye and stomache are trademarks of Head Chef Marco Massi. </p> <p>Ultra Ristorante is a four-time winner of Best Italian Restaurant in Toronto Magazine’s Restaurant Awards. Ristorante is an elegant, classic, and warm eatery, with welcoming and attentive service. </p> <p>Open for lunch and dinner, with in bar dining menus and private rooms, Ristorante can deliver an array of dining experiences from business lunches to after-work drinks and formal events.</p>
<a href="https://themify.me/demo/themes/ultra-ristorante/about/" > See More </a>

<h3>Our Ingredients</h3> <p>You have the right to know every ingredient that goes into a dish. Fresh and great quality produce is at the heart of everything we do. We strive to deliver the authentic. </p>
<a href="https://themify.me/" > See More </a>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/ingredients-700x503.jpg" width="700" alt="ingredients" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/ingredients-700x503.jpg 700w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/ingredients-600x432.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/ingredients.jpg 702w" sizes="(max-width: 700px) 100vw, 700px" />
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-main-menu.jpg" alt="pizza-main-menu" />
<h3>Our Specialties</h3> <p>We\'re good at what we do, and we love doing it.<br />Take a look at our most popular and highly reviewed dishes.</p>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-90x90.jpg" width="90" height="90" alt="Beef, Tomato, and Mushroom Fettucini" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Beef, Tomato, and Mushroom Fettucini</h4> Cherry tomatoes, beef steak, basil, and mushrooms in a rich and creamy sauce. 
 $24.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-90x90.jpg" width="90" height="90" alt="Genovese Delight Pizza" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Genovese Delight Pizza</h4> Spicy and flavourful genovese salami, in-house sundried tomatoes, and pepperoncini! 
 $16.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg" width="90" height="90" alt="Mediterranean Bruschetta" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Mediterranean Bruschetta</h4> A favourite twist on our classic bruschetta - with a creamy fior di latte base. 
 $12.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-90x90.jpg" width="90" height="90" alt="Classic Mushroom White Pizza " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping.jpg 550w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Classic Mushroom White Pizza </h4> Chicken, mushroom, olives and delectable white mozzarella on our home-made dough. 
 $15.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg" width="90" height="90" alt="Eggplant Parmigiana" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Eggplant Parmigiana</h4> Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara. 
 $19.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-90x90.jpg" width="90" height="90" alt="Spaghetti Special " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-100x100.jpg 100w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Spaghetti Special </h4> This crowd favourite is the perfect twist on a favourite dish with a meatball in the center! 
 $18.00 <br/>
<a href="https://themify.me/demo/themes/ultra-ristorante/menus/" > View All Menus </a>
<h3>Industry Reviews</h3> <p>Some of the best and brightest have sat down to eat with us.</p>
<ul data-id="tb_vdb0425" data-visible="1" data-mob-visible="0" data-scroll="1" data-auto-scroll="off" data-speed="1" data-wrap="yes" data-arrow="yes" data-pagination="yes" data-effect="scroll" data-height="variable" data-pause-on-hover="resume" data-play-controller="no" data-horizontal="" > <li> 
 <p>Food flavours are well balanced with specials that are actually great dishes. Pasta dishes are a favourite of mine here. They\'re heads and tails better than the big chain restaurants. Reservations are definitely recommended.</p> <figure><img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-100x100.jpg" width="100" height="100" alt="face1" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-100x100.jpg 100w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face1.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Jennifer Turner Executive Chef Petite Toulouse </li> <li> 
 <p>Their Italian food is, in my opinion, the most delicious in the city. The menu is extensive and offers pasta, pizza, meat, and seafood dishes. Very friendly and efficient staff that provide top-notch service. Great decor, great atmosphere, and appeals to couples and families.</p> <figure><img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-100x100.jpg" width="100" height="100" alt="face7" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-100x100.jpg 100w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/face7.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Ahmed Farri Head Chef Las Ramblas </li> </ul>
<h3>Enjoy the best of Italian cuisine.</h3> <p>We look forward to welcoming you and your guests, like family, and like friends.</p>
<h3>What\'s Cooking?</h3>
<!--/themify_builder_static-->',
  'post_title' => 'Home',
  'post_excerpt' => '',
  'post_name' => 'home',
  'post_modified' => '2020-02-04 05:02:20',
  'post_modified_gmt' => '2020-02-04 05:02:20',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?page_id=6',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"bt2z734\\",\\"cols\\":[{\\"element_id\\":\\"pui4740\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"0o9h395\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/quality-badge-400x329.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"6urd871\\",\\"grid_class\\":\\"col4-2\\"}],\\"col_tablet_landscape\\":\\"column4-2\\",\\"styling\\":{\\"padding_bottom_unit\\":\\"px\\",\\"padding_bottom\\":\\"195\\",\\"padding_top_unit\\":\\"px\\",\\"padding_top\\":\\"182\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/banner-hero-home.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"row_width\\":\\"fullwidth\\",\\"link_color\\":\\"#ffffff\\",\\"font_color\\":\\"#c9c9c9\\",\\"background_color\\":\\"#ffffff\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"124\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"135\\",\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":\\"187\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"128\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"5lqz849\\",\\"cols\\":[{\\"element_id\\":\\"gtz9850\\",\\"grid_class\\":\\"col2-1\\",\\"styling\\":{\\"padding_right\\":\\"2\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-maker.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"background_position\\":\\"50,100\\",\\"b_ra_opp_left\\":false,\\"b_ra_opp_bottom\\":false,\\"b_ra_top\\":\\"8\\",\\"b_ra_left\\":\\"8\\",\\"b_sh_inset\\":false,\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"17\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"5\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"b_sh_color\\":\\"#000000_0.10\\"}},{\\"element_id\\":\\"8v5d850\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"h1ef451\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Our House Specials<\\\\/h3>\\\\n<p>What we\\\'re known for, made with love.<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"margin_bottom\\":\\"35\\",\\"breakpoint_mobile\\":{\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"30\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\"}}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"b8xb186\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Famous Spaghetti Bolognese \\",\\"description_service_menu\\":\\"Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy.\\",\\"price_service_menu\\":\\"$18.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-bolognese-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"fp7l718\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Classic Farfalle in Pesto Sauce\\",\\"description_service_menu\\":\\"A beautiful blend of crushed garlic, pine nuts, basil leaves, and pecorino, with perfectly coated farfalle.\\",\\"price_service_menu\\":\\"$17.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-pasta-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"tb45193\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Favourite Margherita Pizza\\",\\"description_service_menu\\":\\"Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. \\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-flat-dish-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"highlight_color_service_menu\\":\\"red\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\"}},{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"2k4917\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"View Our Menus\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/menus\\\\/\\",\\"link_options\\":\\"regular\\",\\"button_color_bg\\":\\"red\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_shape\\":\\"rounded\\",\\"buttons_size\\":\\"normal\\"}}],\\"styling\\":{\\"background_color\\":\\"#ffffff\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_top\\":\\"59\\",\\"padding_right\\":\\"59\\",\\"padding_bottom\\":\\"59\\",\\"padding_left\\":\\"59\\",\\"breakpoint_mobile\\":{\\"padding_right\\":\\"35\\",\\"padding_right_unit\\":\\"px\\",\\"padding_bottom\\":\\"35\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_left\\":\\"35\\",\\"padding_left_unit\\":\\"px\\",\\"padding_top\\":\\"35\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_right\\":\\"46\\",\\"padding_right_unit\\":\\"px\\",\\"padding_bottom\\":\\"46\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_left\\":\\"46\\",\\"padding_left_unit\\":\\"px\\",\\"padding_top\\":\\"46\\",\\"padding_top_unit\\":\\"px\\"},\\"checkbox_b_ra_apply_all\\":false,\\"b_ra_left_unit\\":\\"px\\",\\"b_ra_opp_left\\":false,\\"b_ra_right_unit\\":\\"px\\",\\"b_ra_right\\":\\"8\\",\\"b_ra_bottom_unit\\":\\"px\\",\\"b_ra_opp_bottom\\":false,\\"b_ra_top_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_opp_top\\":false,\\"b_sh_inset\\":false,\\"b_sh_spread_unit\\":\\"px\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"15\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"5\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"b_sh_color\\":\\"#000000_0.10\\",\\"b_ra_bottom\\":\\"8\\"}}],\\"column_alignment\\":\\"col_align_middle\\",\\"gutter\\":\\"gutter-none\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column-full\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_bottom\\":\\"60\\",\\"padding_top\\":\\"0\\",\\"margin-top_unit\\":\\"px\\",\\"margin-top\\":\\"-100\\",\\"margin-top_opp_top\\":false,\\"hide_anchor\\":false,\\"padding_opp_left\\":false,\\"padding_opp_top\\":false}},{\\"element_id\\":\\"jkq2245\\",\\"cols\\":[{\\"element_id\\":\\"pn0e247\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"slev868\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"500\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-pizza-pepperoni-500x336.jpg\\",\\"style_image\\":\\"image-top\\",\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"1\\",\\"v_dir\\":\\"up\\"}}},\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"6\\",\\"image_zoom_icon\\":false,\\"auto_fullwidth\\":false,\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\",\\"breakpoint_tablet\\":{\\"checkbox_i_t_m_apply_all\\":false,\\"i_t_m_left_unit\\":\\"px\\",\\"i_t_m_left\\":\\"30\\",\\"i_t_m_opp_left\\":false,\\"i_t_m_bottom_unit\\":\\"px\\",\\"i_t_m_right_unit\\":\\"px\\",\\"i_t_m_opp_top\\":false,\\"i_t_m_top_unit\\":\\"px\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"ui9c288\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"480\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-spaghetti-480x274.jpg\\",\\"style_image\\":\\"image-right\\",\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"3\\",\\"v_dir\\":\\"up\\"}}},\\"global_styles\\":\\"tb_gs525d7\\",\\"padding_bottom\\":\\"20\\",\\"padding_right\\":\\"30\\",\\"background_position\\":\\"100,100\\",\\"background_repeat\\":\\"no-repeat\\",\\"background_image-type\\":\\"image\\",\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"6\\"}}],\\"styling\\":{\\"background_position\\":\\"100,92.5\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom\\":\\"20\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/dots.png\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":0,\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"dzve701\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"3jtc68\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Our Story<\\\\/h3>\\\\n<p>A celebration of Toronto\\\'s love for Italian food and culture, Ultra Ristorante showcases ingredient-led, traditional Italian cuisine. Their commitment to beautiful ingredients and dishes that act as both food for the eye and stomache are trademarks of Head Chef Marco Massi. <\\\\/p>\\\\n<p>Ultra Ristorante is a four-time winner of Best Italian Restaurant in Toronto Magazine’s Restaurant Awards. Ristorante is an elegant, classic, and warm eatery, with welcoming and attentive service. <\\\\/p>\\\\n<p>Open for lunch and dinner, with in bar dining menus and private rooms, Ristorante can deliver an array of dining experiences from business lunches to after-work drinks and formal events.<\\\\/p>\\",\\"breakpoint_tablet\\":{\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\",\\"padding_top\\":\\"30\\"}}},{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"gscp668\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"See More\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/about\\\\/\\",\\"link_options\\":\\"regular\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_height_unit\\":\\"px\\",\\"button_color_bg\\":\\"red\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_shape\\":\\"rounded\\",\\"buttons_size\\":\\"normal\\",\\"buttons_style\\":\\"solid\\",\\"breakpoint_tablet\\":{\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\",\\"text-shadow_blur_unit\\":\\"px\\",\\"text-shadow_vShadow_unit\\":\\"px\\",\\"text-shadow_hShadow_unit\\":\\"px\\",\\"text_align\\":\\"center\\",\\"letter_spacing_unit\\":\\"px\\",\\"line_height_unit\\":\\"px\\",\\"font_size_unit\\":\\"px\\",\\"font_gradient_color-circle-radial\\":false,\\"font_gradient_color-gradient-angle\\":\\"180\\",\\"font_gradient_color-gradient-type\\":\\"linear\\",\\"font_color_type\\":\\"font_color_solid\\"}}}],\\"styling\\":{\\"background_position\\":\\"0,100\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\"}}],\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column-full\\",\\"col_mobile\\":\\"column-full\\",\\"styling\\":{\\"padding_bottom\\":\\"70\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"70\\",\\"background_position\\":\\"50,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/buble-bg-blue.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":69,\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":69,\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"2zn9333\\",\\"cols\\":[{\\"element_id\\":\\"ggon334\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"element_id\\":\\"zufm852\\",\\"cols\\":[{\\"element_id\\":\\"8h90854\\",\\"grid_class\\":\\"col4-1\\"},{\\"element_id\\":\\"2klk854\\",\\"grid_class\\":\\"col4-3\\",\\"modules\\":[{\\"mod_name\\":\\"plain-text\\",\\"element_id\\":\\"psm7796\\"},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"nnuf388\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Our Ingredients<\\\\/h3>\\\\n<p>You have the right to know every ingredient that goes into a dish. Fresh and great quality produce is at the heart of everything we do. We strive to deliver the authentic. <\\\\/p>\\"}},{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"tvtu62\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"See More\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/\\",\\"link_options\\":\\"regular\\",\\"button_color_bg\\":\\"red\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_shape\\":\\"rounded\\",\\"buttons_size\\":\\"normal\\",\\"margin_bottom\\":\\"40\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":83,\\"margin_bottom_unit\\":\\"px\\"}}}]}],\\"col_tablet\\":\\"column-full\\",\\"styling\\":{\\"font_color\\":\\"#ffffff\\",\\"breakpoint_mobile\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"5\\"},\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"8\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"8\\"}}}]},{\\"element_id\\":\\"2ulw729\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"yzs4172\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"700\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/ingredients-700x503.jpg\\",\\"style_image\\":\\"image-top\\",\\"margin_bottom\\":\\"-100\\",\\"global_styles\\":\\"tb_gs525d7\\",\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"1\\",\\"v_dir\\":\\"down\\"}}},\\"checkbox_i_t_r_c_apply_all\\":\\"1\\",\\"i_t_r_c_top\\":\\"8\\",\\"image_zoom_icon\\":false,\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\",\\"auto_fullwidth\\":false,\\"appearance_image\\":\\"rounded\\",\\"caption_on_overlay\\":false}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column4-2\\",\\"styling\\":{\\"background_color\\":\\"#000000\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_top\\":\\"96\\",\\"row_width\\":\\"fullwidth-content\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"61\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"4xay130\\",\\"cols\\":[{\\"element_id\\":\\"3vmn131\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"7yf8775\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"auto_fullwidth\\":\\"1\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-main-menu.jpg\\",\\"style_image\\":\\"image-top\\"}}]},{\\"element_id\\":\\"bw45911\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"3pmh780\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Our Specialties<\\\\/h3>\\\\n<p>We\\\'re good at what we do, and we love doing it.<br \\\\/>Take a look at our most popular and highly reviewed dishes.<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\"}}],\\"grid_width\\":62,\\"styling\\":{\\"padding_right\\":\\"0\\",\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\"}}},{\\"element_id\\":\\"y8qh466\\",\\"grid_class\\":\\"col4-1\\",\\"grid_width\\":9}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet\\":\\"column3-1-3-2\\",\\"col_mobile\\":\\"column-full\\",\\"styling\\":{\\"padding_bottom\\":\\"0\\",\\"padding_top\\":\\"160\\",\\"row_width\\":\\"fullwidth-content\\",\\"padding_top_unit\\":\\"px\\",\\"margin-bottom\\":\\"0\\",\\"breakpoint_tablet\\":{\\"padding_top\\":\\"108\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"l2sr112\\",\\"cols\\":[{\\"element_id\\":\\"n2ab114\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"ugv6114\\",\\"cols\\":[{\\"element_id\\":\\"b9ov115\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"to94115\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Beef, Tomato, and Mushroom Fettucini\\",\\"description_service_menu\\":\\"Cherry tomatoes, beef steak, basil, and mushrooms in a rich and creamy sauce.\\",\\"price_service_menu\\":\\"$24.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-beef-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"whfc116\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Genovese Delight Pizza\\",\\"description_service_menu\\":\\"Spicy and flavourful genovese salami, in-house sundried tomatoes, and pepperoncini! \\",\\"price_service_menu\\":\\"$16.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/delicious-pizza-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"p1ap116\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Mediterranean Bruschetta\\",\\"description_service_menu\\":\\"A favourite twist on our classic bruschetta - with a creamy fior di latte base.\\",\\"price_service_menu\\":\\"$12.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/tomattos-cream-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}}]},{\\"element_id\\":\\"p5d3116\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"e5bo117\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Classic Mushroom White Pizza \\",\\"description_service_menu\\":\\"Chicken, mushroom, olives and delectable white mozzarella on our home-made dough.\\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/mushroom-pizza-topping-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"padding_bottom\\":\\"0\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"d91y102\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Eggplant Parmigiana\\",\\"description_service_menu\\":\\"Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara.\\",\\"price_service_menu\\":\\"$19.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/bread-beef-italian-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"abxo379\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Spaghetti Special \\",\\"description_service_menu\\":\\"This crowd favourite is the perfect twist on a favourite dish with a meatball in the center!\\",\\"price_service_menu\\":\\"$18.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-spaghetti-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}}]}],\\"col_tablet_landscape\\":\\"column4-2\\",\\"styling\\":{\\"padding_top_unit\\":\\"%\\",\\"breakpoint_tablet\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"padding_left\\":\\"2\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"2\\"}}},{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"jr5x118\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"View All Menus\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/menus\\\\/\\",\\"link_options\\":\\"regular\\",\\"button_color_bg\\":\\"red\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_shape\\":\\"rounded\\",\\"buttons_size\\":\\"normal\\",\\"alignment\\":\\"center\\",\\"breakpoint_tablet\\":{\\"margin_top\\":\\"30\\"}}}]}],\\"styling\\":{\\"padding_top\\":\\"30\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_tablet_landscape\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_opp_left\\":\\"1\\",\\"padding_right\\":\\"5\\",\\"padding_top\\":\\"30\\"},\\"breakpoint_mobile\\":{\\"padding_top\\":50,\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"uncn211\\",\\"cols\\":[{\\"element_id\\":\\"0f66211\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"ndop425\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Industry Reviews<\\\\/h3>\\\\n<p>Some of the best and brightest have sat down to eat with us.<\\\\/p>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"padding_bottom\\":\\"51\\",\\"padding_bottom_unit\\":\\"px\\"}},{\\"mod_name\\":\\"testimonial-slider\\",\\"element_id\\":\\"vdb0425\\",\\"mod_settings\\":{\\"layout_testimonial\\":\\"image-bottom\\",\\"img_h_slider\\":\\"100\\",\\"img_w_slider\\":\\"100\\",\\"visible_opt_slider\\":\\"1\\",\\"auto_scroll_opt_slider\\":\\"off\\",\\"tab_content_testimonial\\":[{\\"content_testimonial\\":\\"<p>Food flavours are well balanced with specials that are actually great dishes. Pasta dishes are a favourite of mine here. They\\\'re heads and tails better than the big chain restaurants. Reservations are definitely recommended.<\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/face1.jpg\\",\\"person_name_testimonial\\":\\"Jennifer Turner\\",\\"person_position_testimonial\\":\\"Executive Chef \\",\\"company_testimonial\\":\\"Petite Toulouse\\"},{\\"content_testimonial\\":\\"<p>Their Italian food is, in my opinion, the most delicious in the city. The menu is extensive and offers pasta, pizza, meat, and seafood dishes. Very friendly and efficient staff that provide top-notch service. Great decor, great atmosphere, and appeals to couples and families.<\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/face7.jpg\\",\\"person_name_testimonial\\":\\"Ahmed Farri\\",\\"person_position_testimonial\\":\\"Head Chef\\",\\"company_testimonial\\":\\"Las Ramblas\\"}],\\"height_slider\\":\\"variable\\",\\"show_arrow_buttons_vertical\\":\\"vertical\\",\\"show_arrow_slider\\":\\"yes\\",\\"show_nav_slider\\":\\"yes\\",\\"wrap_slider\\":\\"yes\\",\\"pause_on_hover_slider\\":\\"resume\\",\\"effect_slider\\":\\"scroll\\",\\"speed_opt_slider\\":\\"normal\\",\\"scroll_opt_slider\\":\\"1\\",\\"mob_visible_opt_slider\\":\\"0\\",\\"grid_layout_testimonial\\":\\"list-post\\",\\"type_testimonial\\":\\"slider\\"}}]}],\\"styling\\":{\\"padding_top\\":\\"143\\",\\"background_position\\":\\"100,100\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/home-pizza-bg.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom\\":\\"180\\",\\"padding_top_unit\\":\\"px\\",\\"padding_bottom_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"283\\",\\"padding_top\\":64,\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"80\\",\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":280,\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"rhbp999\\",\\"cols\\":[{\\"element_id\\":\\"ccg50\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"izzr510\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Enjoy the best of Italian cuisine.<\\\\/h3>\\\\n<p>We look forward to welcoming you and your guests, like family, and like friends.<\\\\/p>\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"46\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\",\\"breakpoint_mobile\\":{\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"40\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\",\\"h3_margin_bottom_unit\\":\\"px\\",\\"h3_margin_top_unit\\":\\"px\\",\\"t_shh3_blur_unit\\":\\"px\\",\\"t_shh3_vShadow_unit\\":\\"px\\",\\"t_shh3_hShadow_unit\\":\\"px\\",\\"letter_spacing_h3_unit\\":\\"px\\",\\"line_height_h3_unit\\":\\"px\\",\\"font_gradient_color_h3-circle-radial\\":false,\\"font_gradient_color_h3-gradient-angle\\":\\"180\\",\\"font_gradient_color_h3-gradient-type\\":\\"linear\\"}}}]}],\\"styling\\":{\\"padding_bottom\\":\\"100\\",\\"margin-top\\":\\"0\\",\\"padding_top\\":\\"100\\",\\"padding_opp_top\\":\\"1\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/banner-italian-food.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"text_align\\":\\"center\\",\\"font_color\\":\\"#ffffff\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"cover_color_hover\\":\\"#000000_0.31\\",\\"cover_color_hover-type\\":\\"hover_color\\",\\"cover_color\\":\\"#000000_0.42\\",\\"cover_color-type\\":\\"color\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"87\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"87\\",\\"padding_top_unit\\":\\"px\\"},\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\"}},{\\"element_id\\":\\"9qe9477\\",\\"cols\\":[{\\"element_id\\":\\"3tmp479\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"3lke802\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>What\\\'s Cooking?<\\\\/h3>\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"padding_bottom\\":\\"25\\",\\"padding_bottom_unit\\":\\"px\\"}},{\\"mod_name\\":\\"post\\",\\"element_id\\":\\"ixlo666\\",\\"mod_settings\\":{\\"layout_post\\":\\"grid3\\",\\"post_per_page_post\\":\\"3\\",\\"display_post\\":\\"none\\",\\"hide_page_nav_post\\":\\"yes\\",\\"post_type_post\\":\\"post\\",\\"hide_post_meta_post\\":\\"yes\\",\\"hide_post_date_post\\":\\"yes\\",\\"unlink_post_title_post\\":\\"no\\",\\"hide_post_title_post\\":\\"no\\",\\"unlink_feat_img_post\\":\\"no\\",\\"hide_feat_img_post\\":\\"no\\",\\"orderby_post\\":\\"date\\",\\"order_post\\":\\"desc\\",\\"post_filter\\":\\"no\\",\\"category_post\\":\\"0|single\\",\\"term_type\\":\\"category\\",\\"type_query_post\\":\\"category\\",\\"img_height_post\\":\\"270\\",\\"img_width_post\\":\\"360\\",\\"checkbox_f_i_r_c_apply_all\\":\\"1\\",\\"auto_fullwidth_post\\":false}}]}],\\"styling\\":{\\"padding_top\\":\\"90\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":30,\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":59,\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"63\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_bottom\\":\\"64\\",\\"padding_bottom_unit\\":\\"px\\"},\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_bottom\\":\\"60\\",\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false}}]',
    'themify_used_global_styles' => 
    array (
      0 => 'tb_gs525d7',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 135,
  'post_date' => '2019-09-18 02:34:02',
  'post_date_gmt' => '2019-09-18 02:34:02',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Our Menus</h1>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-550x550.jpg" width="550" alt="mushroom-pizza-topping" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping.jpg 550w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-90x90.jpg 90w" sizes="(max-width: 550px) 100vw, 550px" />
<h2>We Love Food</h2> <p>I know everyone says they love food. But have you met us yet? We\'re food, quality, fresh obsessed. And we\'re serving up some hot and delicious offerings that will have you coming back for more.</p> <p>Start your food journey with us and be part of our story as we adjust, modify and edit the classics with flair and innovation!</p>
<h3>Lunch Menus</h3>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg" width="90" height="90" alt="Famous Spaghetti Bolognese " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Famous Spaghetti Bolognese </h4> Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy. 
 $18.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg" width="90" height="90" alt="Mediterranean Bruschetta" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Mediterranean Bruschetta</h4> A favourite twist on our classic bruschetta - with a creamy fior di latte base. 
 $12.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg" width="90" height="90" alt="Eggplant Parmigiana" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Eggplant Parmigiana</h4> Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara. 
 $19.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cream-salad-90x90.jpg" width="90" height="90" alt="Mediterranean Chickpea Salad" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cream-salad-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cream-salad-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Mediterranean Chickpea Salad</h4> Fresh bell peppers, italian parsley, tahina hummus, and chickpeas. 
 $14.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg" width="90" height="90" alt="Favourite Margherita Pizza" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-600x591.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-768x756.jpg 768w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-400x394.jpg 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish.jpg 800w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Favourite Margherita Pizza</h4> Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. 
 $15.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-90x90.jpg" width="90" height="90" alt="Italian Pasta Salad Supreme" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Italian Pasta Salad Supreme</h4> Roast Trout, Italian asparagus, Jersey Royals, watercress 
 $17.00 <br/>
<h3>You\'re In Good Hands</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition</p>
<h3>Dinner Menus</h3>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg" width="90" height="90" alt="Famous Spaghetti Bolognese " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Famous Spaghetti Bolognese </h4> Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy. 
 $18.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-90x90.jpg" width="90" height="90" alt="Classic Farfalle in Pesto Sauce" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-pasta-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Classic Farfalle in Pesto Sauce</h4> A beautiful blend of crushed garlic, pine nuts, basil leaves, and pecorino, with perfectly coated farfalle. 
 $17.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg" width="90" height="90" alt="Favourite Margherita Pizza" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-600x591.jpg 600w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-768x756.jpg 768w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-400x394.jpg 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish.jpg 800w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Favourite Margherita Pizza</h4> Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. 
 $15.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-90x90.jpg" width="90" height="90" alt="Beef, Tomato, and Mushroom Fettucini" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-beef-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Beef, Tomato, and Mushroom Fettucini</h4> Cherry tomatoes, beef steak, basil, and mushrooms in a rich and creamy sauce. 
 $24.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-90x90.jpg" width="90" height="90" alt="Genovese Delight Pizza" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/delicious-pizza-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Genovese Delight Pizza</h4> Spicy and flavourful genovese salami, in-house sundried tomatoes, and pepperoncini! 
 $16.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pasta-dimeglio-90x90.jpg" width="90" height="90" alt="Baked Trout in Sicilian Sauce" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pasta-dimeglio-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pasta-dimeglio-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Baked Trout in Sicilian Sauce</h4> Roast Trout, Italian asparagus, Jersey Royals, and watercress. 
 $26.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg" width="90" height="90" alt="Mediterranean Bruschetta" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Mediterranean Bruschetta</h4> A favourite twist on our classic bruschetta - with a creamy fior di latte base. 
 $12.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-90x90.jpg" width="90" height="90" alt="Classic Mushroom White Pizza " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/mushroom-pizza-topping.jpg 550w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Classic Mushroom White Pizza </h4> Chicken, mushroom, olives and delectable white mozzarella on our home-made dough. 
 $15.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg" width="90" height="90" alt="Eggplant Parmigiana" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/bread-beef-italian-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Eggplant Parmigiana</h4> Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara. 
 $19.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-90x90.jpg" width="90" height="90" alt="Spaghetti Special " srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-150x150.jpg 150w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-100x100.jpg 100w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Spaghetti Special </h4> This crowd favourite is the perfect twist on a favourite dish with a meatball in the center! 
 $18.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pastella-90x90.jpg" width="90" height="90" alt="Italian Meat Pies" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pastella-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pastella-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Italian Meat Pies</h4> Beef slow cooked in a heart tomato sauce all wrapped up in a flaky crust. 
 $15.00 <br/>
<img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-90x90.jpg" width="90" height="90" alt="Italian Pasta Salad Supreme" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-90x90.jpg 90w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/Italian-tortelini-salad-150x150.jpg 150w" sizes="(max-width: 90px) 100vw, 90px" /> 
 <h4>Italian Pasta Salad Supreme</h4> Roast Trout, Italian asparagus, Jersey Royals, watercress 
 $17.00 <br/>
<h3>We Take Food Seriously</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition</p>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-spaghetti-400x300.jpg" width="400" height="300" alt="italian-spaghetti" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/tomattos-cream-400x300.jpg" width="400" height="300" alt="tomattos-cream" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pasta-dimeglio.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pasta-dimeglio-400x300.jpg" width="400" height="300" alt="pasta-dimeglio" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-400x300.jpg" width="400" height="300" alt="spaghetti-bolognese" srcset="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-400x300.jpg 400w, https://themify.me/demo/themes/ultra-ristorante/files/2019/09/spaghetti-bolognese-360x270.jpg 360w" sizes="(max-width: 400px) 100vw, 400px" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/pizza-flat-dish-400x300.jpg" width="400" height="300" alt="pizza-flat-dish" /> </a>
<a href="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cream-salad.jpg" data-zoom-config="600px|500px" > <img src="https://themify.me/demo/themes/ultra-ristorante/files/2019/09/italian-cream-salad-400x300.jpg" width="400" height="300" alt="italian-cream-salad" /> </a><!--/themify_builder_static-->',
  'post_title' => 'Menus',
  'post_excerpt' => '',
  'post_name' => 'menus',
  'post_modified' => '2020-02-04 05:18:48',
  'post_modified_gmt' => '2020-02-04 05:18:48',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?page_id=135',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"uz7z0\\",\\"cols\\":[{\\"element_id\\":\\"c37q0\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"lxvp1\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>Our Menus<\\\\/h1>\\"}}],\\"styling\\":{\\"font_color\\":\\"#ffffff\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_bottom\\":\\"148\\",\\"padding_opp_top\\":\\"1\\",\\"padding_top\\":\\"148\\",\\"cover_color\\":\\"#000000_0.59\\",\\"cover_color-type\\":\\"color\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/contact-hero-banner.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"91\\",\\"padding_top\\":\\"91\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"91\\",\\"padding_top\\":\\"91\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"xwpz177\\",\\"cols\\":[{\\"element_id\\":\\"pab1177\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"6zn6179\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"param_image\\":\\"lightbox\\",\\"width_image\\":\\"550\\",\\"appearance_image\\":\\"rounded\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/mushroom-pizza-topping.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"global_styles\\":\\"tb_gs525d7\\",\\"padding_bottom\\":\\"30\\",\\"padding_right\\":\\"30\\",\\"background_position\\":\\"100,100\\",\\"background_repeat\\":\\"no-repeat\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/dots.png\\",\\"background_image-type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"56\\",\\"padding_bottom_unit\\":\\"px\\"},\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\",\\"auto_fullwidth\\":false,\\"caption_on_overlay\\":false,\\"motion_effects\\":{\\"v\\":{\\"val\\":{\\"v_speed\\":\\"2\\",\\"v_dir\\":\\"up\\"}}}}}]},{\\"element_id\\":\\"mnjp178\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"wxzl178\\",\\"mod_settings\\":{\\"content_text\\":\\"<h2>We Love Food<\\\\/h2>\\\\n<p>I know everyone says they love food. But have you met us yet? We\\\'re food, quality, fresh obsessed. And we\\\'re serving up some hot and delicious offerings that will have you coming back for more.<\\\\/p>\\\\n<p>Start your food journey with us and be part of our story as we adjust, modify and edit the classics with flair and innovation!<\\\\/p>\\",\\"breakpoint_mobile\\":{\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"32\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\"}}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column4-2\\",\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"100\\",\\"padding_bottom\\":\\"70\\",\\"background_position\\":\\"50,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_top\\":58,\\"padding_top_unit\\":\\"px\\",\\"padding_bottom\\":40,\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"80\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"idtp29\\",\\"cols\\":[{\\"element_id\\":\\"5ob429\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"e0ms504\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Lunch Menus<\\\\/h3>\\",\\"margin_bottom\\":\\"40\\",\\"breakpoint_mobile\\":{\\"background_repeat\\":\\"repeat\\",\\"background_color\\":\\"#ffffff\\",\\"background_image-type\\":\\"image\\",\\"border-type\\":\\"top\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_top\\":\\"12\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"30\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\"},\\"breakpoint_tablet\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_top\\":\\"14\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"background_repeat\\":\\"repeat\\",\\"background_color\\":\\"#ffffff\\",\\"background_image-type\\":\\"image\\"}}},{\\"element_id\\":\\"wnfs29\\",\\"cols\\":[{\\"element_id\\":\\"sa1h30\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"8qn7425\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Famous Spaghetti Bolognese \\",\\"description_service_menu\\":\\"Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy.\\",\\"price_service_menu\\":\\"$18.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-bolognese-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"ak0g408\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Mediterranean Bruschetta\\",\\"description_service_menu\\":\\"A favourite twist on our classic bruschetta - with a creamy fior di latte base.\\",\\"price_service_menu\\":\\"$12.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/tomattos-cream-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"uyyh771\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Eggplant Parmigiana\\",\\"description_service_menu\\":\\"Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara.\\",\\"price_service_menu\\":\\"$19.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/bread-beef-italian-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}}]},{\\"element_id\\":\\"l65d31\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"ar6p450\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Mediterranean Chickpea Salad\\",\\"description_service_menu\\":\\"Fresh bell peppers, italian parsley, tahina hummus, and chickpeas.\\",\\"price_service_menu\\":\\"$14.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-cream-salad-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"height_service_menu\\":\\"90\\",\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"4vf3978\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Favourite Margherita Pizza\\",\\"description_service_menu\\":\\"Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. \\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-flat-dish-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"highlight_color_service_menu\\":\\"red\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"ppli874\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Italian Pasta Salad Supreme\\",\\"description_service_menu\\":\\"Roast Trout, Italian asparagus, \\\\nJersey Royals, watercress\\",\\"price_service_menu\\":\\"$17.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/Italian-tortelini-salad-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}}]}],\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column4-2\\",\\"styling\\":{\\"padding_top\\":\\"52\\",\\"b_sh_color\\":\\"#000000_0.03\\",\\"b_sh_spread_unit\\":\\"px\\",\\"b_sh_spread\\":\\"5\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"10\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"0\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_right\\":\\"50\\",\\"padding_bottom\\":\\"26\\",\\"padding_left\\":\\"50\\",\\"background_color\\":\\"#ffffff\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_left\\":\\"50\\",\\"padding_bottom\\":\\"26\\",\\"padding_right\\":\\"50\\",\\"padding_top\\":\\"25\\",\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\"}}}],\\"styling\\":{\\"global_styles\\":\\"tb_gs525d7\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"84\\",\\"background_position\\":\\"100,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/bg-food-menu.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"padding_top_unit\\":\\"px\\",\\"breakpoint_tablet\\":{\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_bottom_unit\\":\\"px\\",\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\",\\"padding_top\\":\\"84\\",\\"background_position\\":\\"100,0\\",\\"background_zoom\\":false,\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_gradient-circle-radial\\":false,\\"background_gradient-gradient-angle\\":\\"180\\",\\"background_gradient-gradient-type\\":\\"linear\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/bg-food-menu.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\"},\\"breakpoint_mobile\\":{\\"padding_top\\":63,\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"bdsf131\\",\\"cols\\":[{\\"element_id\\":\\"nxhj132\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"8qrf133\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>You\\\'re In Good Hands<\\\\/h3>\\\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition<\\\\/p>\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"46\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\",\\"font_color_type\\":\\"font_color_solid\\",\\"breakpoint_mobile\\":{\\"h3_margin_bottom_unit\\":\\"px\\",\\"h3_margin_top_unit\\":\\"px\\",\\"t_shh3_blur_unit\\":\\"px\\",\\"t_shh3_vShadow_unit\\":\\"px\\",\\"t_shh3_hShadow_unit\\":\\"px\\",\\"letter_spacing_h3_unit\\":\\"px\\",\\"line_height_h3_unit\\":\\"px\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"40\\",\\"font_gradient_color_h3-circle-radial\\":false,\\"font_gradient_color_h3-gradient-angle\\":\\"180\\",\\"font_gradient_color_h3-gradient-type\\":\\"linear\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\",\\"h2_margin_bottom_unit\\":\\"px\\",\\"h2_margin_top_unit\\":\\"px\\",\\"t_shh2_blur_unit\\":\\"px\\",\\"t_shh2_vShadow_unit\\":\\"px\\",\\"t_shh2_hShadow_unit\\":\\"px\\",\\"letter_spacing_h2_unit\\":\\"px\\",\\"line_height_h2_unit\\":\\"px\\",\\"font_size_h2_unit\\":\\"px\\",\\"font_gradient_color_h2-circle-radial\\":false,\\"font_gradient_color_h2-gradient-angle\\":\\"180\\",\\"font_gradient_color_h2-gradient-type\\":\\"linear\\",\\"font_color_type_h2\\":\\"font_color_h2_solid\\"}}}]}],\\"styling\\":{\\"padding_bottom\\":\\"115\\",\\"margin-top\\":\\"50\\",\\"padding_top\\":\\"115\\",\\"padding_opp_top\\":\\"1\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/enjoy-banner.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"text_align\\":\\"center\\",\\"font_color\\":\\"#ffffff\\",\\"row_width\\":\\"fullwidth\\",\\"margin-top_unit\\":\\"px\\",\\"cover_color\\":\\"#000000_0.52\\",\\"cover_color-type\\":\\"color\\",\\"margin-bottom\\":\\"100\\",\\"margin-bottom_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"80\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"80\\",\\"padding_top_unit\\":\\"px\\",\\"margin-bottom\\":50,\\"margin-bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"97\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"97\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"c8x3304\\",\\"cols\\":[{\\"element_id\\":\\"zx3h304\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"ci5e537\\",\\"cols\\":[{\\"element_id\\":\\"4l7a538\\",\\"grid_class\\":\\"col4-2\\",\\"styling\\":{\\"padding_right\\":\\"0\\"}},{\\"element_id\\":\\"zc2b538\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"870a592\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Dinner Menus<\\\\/h3>\\",\\"margin_bottom\\":\\"40\\",\\"breakpoint_mobile\\":{\\"background_repeat\\":\\"repeat\\",\\"background_color\\":\\"#ffffff\\",\\"background_image-type\\":\\"image\\",\\"border-type\\":\\"top\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_top\\":\\"12\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"30\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\"},\\"breakpoint_tablet\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_top\\":\\"14\\",\\"text_align\\":\\"center\\",\\"font_color_type\\":\\"font_color_solid\\",\\"background_repeat\\":\\"repeat\\",\\"background_color\\":\\"#ffffff\\",\\"background_image-type\\":\\"image\\"},\\"breakpoint_tablet_landscape\\":{\\"text_align\\":\\"right\\",\\"font_color_type\\":\\"font_color_solid\\"}}}],\\"styling\\":{\\"padding_left\\":\\"0\\"}}],\\"col_tablet\\":\\"column-full\\",\\"col_mobile\\":\\"column-full\\"},{\\"element_id\\":\\"o2f9607\\",\\"cols\\":[{\\"element_id\\":\\"g5u5608\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"x3tz783\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Famous Spaghetti Bolognese \\",\\"description_service_menu\\":\\"Our hearty and 24 hour-stewed special beef-based sauce with red wine and tomatoes from Italy.\\",\\"price_service_menu\\":\\"$18.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-bolognese-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"0zmv824\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Classic Farfalle in Pesto Sauce\\",\\"description_service_menu\\":\\"A beautiful blend of crushed garlic, pine nuts, basil leaves, and pecorino, with perfectly coated farfalle.\\",\\"price_service_menu\\":\\"$17.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-pasta-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"d6t3310\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Favourite Margherita Pizza\\",\\"description_service_menu\\":\\"Our regal pizza is topped with San Marzano tomatoes, fior di latte, fresh basil, salt and extra-virgin olive oil. \\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-flat-dish-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"highlight_color_service_menu\\":\\"red\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"v1lk950\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Beef, Tomato, and Mushroom Fettucini\\",\\"description_service_menu\\":\\"Cherry tomatoes, beef steak, basil, and mushrooms in a rich and creamy sauce.\\",\\"price_service_menu\\":\\"$24.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-beef-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"xosg406\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Genovese Delight Pizza\\",\\"description_service_menu\\":\\"Spicy and flavourful genovese salami, in-house sundried tomatoes, and pepperoncini! \\",\\"price_service_menu\\":\\"$16.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/delicious-pizza-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"t0ev609\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Baked Trout in Sicilian Sauce\\",\\"description_service_menu\\":\\"Roast Trout, Italian asparagus, \\\\nJersey Royals, and watercress.\\",\\"price_service_menu\\":\\"$26.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pasta-dimeglio-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"height_service_menu\\":\\"90\\",\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}}]},{\\"element_id\\":\\"1llw610\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"um4o630\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Mediterranean Bruschetta\\",\\"description_service_menu\\":\\"A favourite twist on our classic bruschetta - with a creamy fior di latte base.\\",\\"price_service_menu\\":\\"$12.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/tomattos-cream-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"jqhl302\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Classic Mushroom White Pizza \\",\\"description_service_menu\\":\\"Chicken, mushroom, olives and delectable white mozzarella on our home-made dough.\\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/mushroom-pizza-topping.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"padding_bottom\\":\\"0\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"7ski622\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Eggplant Parmigiana\\",\\"description_service_menu\\":\\"Our plant-based specialty dish enfolds juicy eggplant in our special cheesey marinara.\\",\\"price_service_menu\\":\\"$19.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/bread-beef-italian-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"dvr1960\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Spaghetti Special \\",\\"description_service_menu\\":\\"This crowd favourite is the perfect twist on a favourite dish with a meatball in the center!\\",\\"price_service_menu\\":\\"$18.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-spaghetti-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"lz7w875\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Italian Meat Pies\\",\\"description_service_menu\\":\\"Beef slow cooked in a heart tomato sauce all wrapped up in a flaky crust.\\",\\"price_service_menu\\":\\"$15.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pastella-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}},{\\"mod_name\\":\\"service-menu\\",\\"element_id\\":\\"a2w4488\\",\\"mod_settings\\":{\\"title_service_menu\\":\\"Italian Pasta Salad Supreme\\",\\"description_service_menu\\":\\"Roast Trout, Italian asparagus, \\\\nJersey Royals, watercress\\",\\"price_service_menu\\":\\"$17.00\\",\\"style_service_menu\\":\\"image-horizontal\\",\\"image_service_menu\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/Italian-tortelini-salad-90x90.jpg\\",\\"width_service_menu\\":\\"90\\",\\"link_options\\":\\"regular\\",\\"margin_bottom\\":\\"35\\",\\"appearance_image_service_menu\\":\\"rounded\\",\\"height_service_menu\\":\\"90\\",\\"highlight_service_menu\\":false,\\"image_zoom_icon\\":false,\\"add_price_check\\":false,\\"highlight_color_service_menu\\":\\"tb_default_color\\"}}]}],\\"col_tablet_landscape\\":\\"column4-2\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column4-2\\",\\"styling\\":{\\"padding_top\\":\\"52\\",\\"b_sh_color\\":\\"#000000_0.03\\",\\"b_sh_spread_unit\\":\\"px\\",\\"b_sh_spread\\":\\"5\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"10\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"0\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"0\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"8\\",\\"padding_right\\":\\"50\\",\\"padding_bottom\\":\\"26\\",\\"padding_left\\":\\"50\\",\\"background_color\\":\\"#ffffff\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"25\\",\\"padding_left\\":\\"17\\",\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_bottom\\":\\"17\\",\\"padding_right\\":\\"17\\",\\"padding_right_unit\\":\\"px\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_left_unit\\":\\"px\\",\\"padding_top_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_opp_top\\":false}}}],\\"styling\\":{\\"global_styles\\":\\"tb_gs525d7\\"}}],\\"styling\\":{\\"row_width\\":\\"fullwidth\\",\\"padding_top\\":\\"98\\",\\"background_position\\":\\"0,0\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/lunch-menu.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"breakpoint_mobile\\":{\\"padding_bottom\\":1,\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":65,\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"jsxp628\\",\\"cols\\":[{\\"element_id\\":\\"xzx4629\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"cbc9629\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>We Take Food Seriously<\\\\/h3>\\\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition<\\\\/p>\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"46\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\",\\"font_color_type\\":\\"font_color_solid\\",\\"breakpoint_mobile\\":{\\"h3_margin_bottom_unit\\":\\"px\\",\\"h3_margin_top_unit\\":\\"px\\",\\"t_shh3_blur_unit\\":\\"px\\",\\"t_shh3_vShadow_unit\\":\\"px\\",\\"t_shh3_hShadow_unit\\":\\"px\\",\\"letter_spacing_h3_unit\\":\\"px\\",\\"line_height_h3_unit\\":\\"px\\",\\"font_size_h3_unit\\":\\"px\\",\\"font_size_h3\\":\\"40\\",\\"font_gradient_color_h3-circle-radial\\":false,\\"font_gradient_color_h3-gradient-angle\\":\\"180\\",\\"font_gradient_color_h3-gradient-type\\":\\"linear\\",\\"font_color_type_h3\\":\\"font_color_h3_solid\\"}}}]}],\\"styling\\":{\\"padding_bottom\\":\\"115\\",\\"margin-top\\":\\"70\\",\\"padding_top\\":\\"115\\",\\"padding_opp_top\\":\\"1\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/food-banner-quote.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"background_type\\":\\"image\\",\\"text_align\\":\\"center\\",\\"font_color\\":\\"#ffffff\\",\\"row_width\\":\\"fullwidth\\",\\"margin-top_unit\\":\\"px\\",\\"cover_color\\":\\"#000000_0.52\\",\\"cover_color-type\\":\\"color\\",\\"margin-bottom\\":\\"118\\",\\"margin-bottom_unit\\":\\"px\\",\\"breakpoint_mobile\\":{\\"margin-bottom\\":\\"89\\",\\"margin-bottom_unit\\":\\"px\\",\\"padding_bottom\\":\\"96\\",\\"padding_bottom_unit\\":\\"px\\",\\"padding_top\\":\\"96\\",\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"gvmo47\\",\\"cols\\":[{\\"element_id\\":\\"s12m51\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"ylkd544\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-spaghetti.jpg\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-spaghetti-400x300.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"lightbox_height\\":\\"500\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"height_image\\":\\"300\\"}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"padding_bottom_unit\\":\\"px\\",\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\",\\"margin-bottom_unit\\":\\"px\\",\\"margin-top_opp_top\\":false,\\"margin-top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"hr3353\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"58uw703\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/tomattos-cream.jpg\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/tomattos-cream-400x300.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"lightbox_height\\":\\"500\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"height_image\\":\\"300\\"}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"padding_bottom_unit\\":\\"px\\",\\"checkbox_padding_apply_all\\":false,\\"padding_left_unit\\":\\"px\\",\\"padding_opp_left\\":false,\\"padding_right_unit\\":\\"px\\",\\"padding_opp_top\\":false,\\"padding_top_unit\\":\\"px\\"}}},{\\"element_id\\":\\"pjep53\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"xg03343\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_height\\":\\"500\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pasta-dimeglio.jpg\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pasta-dimeglio-400x300.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"height_image\\":\\"300\\"}}]},{\\"element_id\\":\\"lvf054\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"ntpf879\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_height\\":\\"500\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-bolognese.jpg\\",\\"width_image\\":\\"400\\",\\"style_image\\":\\"image-full-overlay\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/spaghetti-bolognese-400x300.jpg\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"height_image\\":\\"300\\"}}]},{\\"element_id\\":\\"ejzp54\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"hlvd495\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_height\\":\\"500\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-flat-dish.jpg\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/pizza-flat-dish-400x300.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"height_image\\":\\"300\\"}}]},{\\"element_id\\":\\"waf354\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"ocb956\\",\\"mod_settings\\":{\\"image_zoom_icon\\":\\"zoom\\",\\"lightbox_height_unit\\":\\"px\\",\\"lightbox_height\\":\\"500\\",\\"lightbox_width_unit\\":\\"px\\",\\"lightbox_width\\":\\"600\\",\\"param_image\\":\\"lightbox\\",\\"link_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-cream-salad.jpg\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-ristorante\\\\/files\\\\/2019\\\\/09\\\\/italian-cream-salad-400x300.jpg\\",\\"style_image\\":\\"image-full-overlay\\",\\"auto_fullwidth\\":\\"1\\",\\"appearance_image\\":false,\\"caption_on_overlay\\":false,\\"breakpoint_mobile\\":{\\"checkbox_margin_apply_all\\":false,\\"margin_left_unit\\":\\"px\\",\\"margin_opp_left\\":false,\\"margin_bottom_unit\\":\\"px\\",\\"margin_right_unit\\":\\"px\\",\\"margin_opp_top\\":false,\\"margin_top_unit\\":\\"px\\"},\\"height_image\\":\\"300\\"}}]}],\\"gutter\\":\\"gutter-none\\",\\"col_tablet_landscape\\":\\"column6-1\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column4-2\\",\\"styling\\":{\\"row_width\\":\\"fullwidth-content\\"}}]',
    'themify_used_global_styles' => 
    array (
      0 => 'tb_gs525d7',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 506,
  'post_date' => '2019-09-21 03:20:13',
  'post_date_gmt' => '2019-09-21 03:20:13',
  'post_content' => '',
  'post_title' => 'Ristorante Optin',
  'post_excerpt' => '',
  'post_name' => 'ristorante-optin',
  'post_modified' => '2019-09-23 02:10:05',
  'post_modified_gmt' => '2019-09-23 02:10:05',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?post_type=tbuilder_layout_part&#038;p=506',
  'menu_order' => 0,
  'post_type' => 'tbuilder_layout_part',
  'meta_input' => 
  array (
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"th3u899\\",\\"cols\\":[{\\"element_id\\":\\"vs94900\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"optin\\",\\"element_id\\":\\"7sf3764\\",\\"mod_settings\\":{\\"label_firstname\\":\\"First Name\\",\\"default_fname\\":\\"John\\",\\"label_lastname\\":\\"Last Name\\",\\"default_lname\\":\\"Doe\\",\\"label_submit\\":\\"Subscribe\\",\\"message\\":\\"<p>Post updated. <a href=\\\\\\\\\\\\\\"https://themify.me/demo/themes/ultra-ristorante\\\\/tbuilder-layout-part\\\\/ristorante-optin\\\\/\\\\\\\\\\\\\\">View post<\\\\/a><\\\\/p><p><button class=\\\\\\\\\\\\\\"notice-dismiss\\\\\\\\\\\\\\" type=\\\\\\\\\\\\\\"button\\\\\\\\\\\\\\"><span class=\\\\\\\\\\\\\\"screen-reader-text\\\\\\\\\\\\\\">Dismiss this notice.<\\\\/span><\\\\/button><\\\\/p>\\",\\"success_action\\":\\"s2\\",\\"lname_hide\\":\\"1\\",\\"fname_hide\\":\\"1\\",\\"layout\\":\\"tb_optin_horizontal\\",\\"provider\\":\\"mailchimp\\",\\"mailchimp_list\\":\\"0f2a95e5de\\",\\"mod_title\\":\\"Get Discount\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 52,
  'post_date' => '2019-09-11 07:45:56',
  'post_date_gmt' => '2019-09-11 07:45:56',
  'post_content' => '<!--themify_builder_static--><img src="https://themify.me/demo/themes/ultra-italian/files/2019/09/italian-spaghetti.jpg" width="480" alt="" /><!--/themify_builder_static-->',
  'post_title' => 'Image Shadow 1',
  'post_excerpt' => '',
  'post_name' => 'tb_gs525d7',
  'post_modified' => '2019-10-22 22:48:07',
  'post_modified_gmt' => '2019-10-22 22:48:07',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/tglobal-style/image-shadow-1/',
  'menu_order' => 0,
  'post_type' => 'tglobal_style',
  'meta_input' => 
  array (
    'themify_global_style_type' => 'image',
    'hide_page_title' => 'yes',
    '_wp_old_slug' => 'image-shadow-1',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"row5d78a6347267b\\",\\"cols\\":[{\\"element_id\\":\\"col5d78a6347267b\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"mod5d78a6347267b\\",\\"mod_settings\\":{\\"layout_post\\":\\"grid3\\",\\"post_per_page_post\\":\\"3\\",\\"display_post\\":\\"none\\",\\"hide_page_nav_post\\":\\"yes\\",\\"post_type_post\\":\\"post\\",\\"hide_post_meta_post\\":\\"yes\\",\\"hide_post_date_post\\":\\"yes\\",\\"unlink_post_title_post\\":\\"no\\",\\"hide_post_title_post\\":\\"no\\",\\"unlink_feat_img_post\\":\\"no\\",\\"hide_feat_img_post\\":\\"no\\",\\"orderby_post\\":\\"date\\",\\"order_post\\":\\"desc\\",\\"post_filter\\":\\"no\\",\\"category_post\\":\\"0|single\\",\\"term_type\\":\\"category\\",\\"type_query_post\\":\\"category\\",\\"img_height_post\\":\\"270\\",\\"img_width_post\\":\\"360\\",\\"post_content_layout\\":\\"boxed\\",\\"checkbox_f_i_r_c_apply_all\\":\\"1\\",\\"auto_fullwidth_post\\":\\"false\\"}}]}]}]',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 22,
  'post_date' => '2019-09-11 04:05:55',
  'post_date_gmt' => '2019-09-11 04:05:55',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '22',
  'post_modified' => '2020-02-14 06:20:25',
  'post_modified_gmt' => '2020-02-14 06:20:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=22',
  'menu_order' => 1,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '6',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 140,
  'post_date' => '2019-09-18 02:34:59',
  'post_date_gmt' => '2019-09-18 02:34:59',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '140',
  'post_modified' => '2020-02-14 06:20:25',
  'post_modified_gmt' => '2020-02-14 06:20:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=140',
  'menu_order' => 2,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '129',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 396,
  'post_date' => '2019-09-20 16:52:12',
  'post_date_gmt' => '2019-09-20 16:52:12',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '396',
  'post_modified' => '2020-02-14 06:20:25',
  'post_modified_gmt' => '2020-02-14 06:20:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-ristorante/?p=396',
  'menu_order' => 3,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '394',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 138,
  'post_date' => '2019-09-18 02:34:59',
  'post_date_gmt' => '2019-09-18 02:34:59',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '138',
  'post_modified' => '2020-02-14 06:20:25',
  'post_modified_gmt' => '2020-02-14 06:20:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=138',
  'menu_order' => 4,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '135',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 139,
  'post_date' => '2019-09-18 02:34:59',
  'post_date_gmt' => '2019-09-18 02:34:59',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '139',
  'post_modified' => '2020-02-14 06:20:25',
  'post_modified_gmt' => '2020-02-14 06:20:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-italian/?p=139',
  'menu_order' => 5,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '132',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$widgets = get_option( "widget_search" );
$widgets[1002] = array (
  'title' => '',
);
update_option( "widget_search", $widgets );

$widgets = get_option( "widget_recent-posts" );
$widgets[1003] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-posts", $widgets );

$widgets = get_option( "widget_recent-comments" );
$widgets[1004] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-comments", $widgets );

$widgets = get_option( "widget_archives" );
$widgets[1005] = array (
  'title' => '',
  'count' => 0,
  'dropdown' => 0,
);
update_option( "widget_archives", $widgets );

$widgets = get_option( "widget_categories" );
$widgets[1006] = array (
  'title' => '',
  'count' => 0,
  'hierarchical' => 0,
  'dropdown' => 0,
);
update_option( "widget_categories", $widgets );

$widgets = get_option( "widget_meta" );
$widgets[1007] = array (
  'title' => '',
);
update_option( "widget_meta", $widgets );

$widgets = get_option( "widget_nav_menu" );
$widgets[1008] = array (
  'title' => 'Navigate',
  'nav_menu' => Themify_Import_Helper::get_term_id_by_slug( "main-navigation", "nav_menu" ),
);
update_option( "widget_nav_menu", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1009] = array (
  'title' => 'Hours',
  'text' => '<p>Tues-Sun<br />12:00 – 3:00 <br />6:00 – late <br />(Closed Mondays)</p>',
  'filter' => true,
  'visual' => true,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1010] = array (
  'title' => 'Reservation',
  'text' => '<a href="https://themify.me/demo/themes/ultra-ristorante/contact/">Make a Reservation Today!</a>',
  'filter' => true,
  'visual' => true,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_themify-layout-parts" );
$widgets[1011] = array (
  'layout_part' => 'ristorante-optin',
);
update_option( "widget_themify-layout-parts", $widgets );



$sidebars_widgets = array (
  'sidebar-main' => 
  array (
    0 => 'search-1002',
    1 => 'recent-posts-1003',
    2 => 'recent-comments-1004',
    3 => 'archives-1005',
    4 => 'categories-1006',
    5 => 'meta-1007',
  ),
  'footer-widget-1' => 
  array (
    0 => 'nav_menu-1008',
  ),
  'footer-widget-2' => 
  array (
    0 => 'text-1009',
  ),
  'footer-widget-3' => 
  array (
    0 => 'text-1010',
    1 => 'themify-layout-parts-1011',
  ),
); 
update_option( "sidebars_widgets", $sidebars_widgets );

$homepage = get_posts( array( 'name' => 'home', 'post_type' => 'page' ) );
			if( is_array( $homepage ) && ! empty( $homepage ) ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $homepage[0]->ID );
			}
			$themify_data = array (
  'setting-webfonts_list' => 'recommended',
  'setting-default_layout' => 'sidebar1',
  'setting-default_post_layout' => 'list-post',
  'setting-post_filter' => 'no',
  'setting-disable_masonry' => 'yes',
  'setting-post_gutter' => 'gutter',
  'setting-default_layout_display' => 'content',
  'setting-default_more_text' => 'More',
  'setting-index_orderby' => 'date',
  'setting-index_order' => 'DESC',
  'setting-default_media_position' => 'above',
  'setting-image_post_feature_size' => 'blank',
  'setting-default_page_post_layout' => 'sidebar-none',
  'setting-default_page_post_layout_type' => 'fullwidth',
  'setting-default_page_display_date_inline' => '1',
  'setting-default_page_single_media_position' => 'above',
  'setting-image_post_single_feature_size' => 'blank',
  'setting-search-result_layout_display' => 'content',
  'setting-search-result_media_position' => 'above',
  'setting-default_page_layout' => 'sidebar1',
  'setting-custom_post_tglobal_style_single' => 'sidebar1',
  'setting-default_portfolio_index_layout' => 'sidebar-none',
  'setting-default_portfolio_index_post_layout' => 'grid3',
  'setting-portfolio_post_filter' => 'yes',
  'setting-portfolio_disable_masonry' => 'yes',
  'setting-portfolio_gutter' => 'gutter',
  'setting-default_portfolio_index_display' => 'none',
  'setting-default_portfolio_index_title' => ' ',
  'setting-default_portfolio_index_unlink_post_title' => ' ',
  'setting-default_portfolio_index_hide_post_date' => ' ',
  'setting-default_portfolio_index_post_meta_category' => 'yes',
  'setting-default_portfolio_index_unlink_post_image' => 'yes',
  'setting-default_portfolio_single_layout' => 'sidebar-none',
  'setting-default_portfolio_single_portfolio_layout_type' => 'fullwidth',
  'setting-default_portfolio_single_title' => ' ',
  'setting-default_portfolio_single_unlink_post_title' => ' ',
  'setting-default_portfolio_single_hide_post_date' => ' ',
  'setting-default_portfolio_single_post_meta_category' => ' ',
  'setting-default_portfolio_single_unlink_post_image' => 'yes',
  'themify_portfolio_slug' => 'project',
  'themify_portfolio_category_slug' => 'portfolio-category',
  'setting-customizer_responsive_design_tablet_landscape' => '1280',
  'setting-customizer_responsive_design_tablet' => '768',
  'setting-customizer_responsive_design_mobile' => '680',
  'setting-mobile_menu_trigger_point' => '900',
  'setting-gallery_lightbox' => 'lightbox',
  'setting-header_design' => 'header-horizontal',
  'setting-exclude_site_tagline' => 'on',
  'setting-exclude_search_form' => 'on',
  'setting_search_form' => 'live_search',
  'setting-exclude_rss' => 'on',
  'setting-header_widgets' => 'headerwidget-3col',
  'setting-footer_design' => 'footer-left-col',
  'setting-use_float_back' => 'on',
  'setting-footer_widgets' => 'footerwidget-3col',
  'setting-mega_menu_posts' => '5',
  'setting-mega_menu_image_width' => '180',
  'setting-mega_menu_image_height' => '120',
  'setting-mega_menu_post_count' => 'off',
  'setting-imagefilter_applyto' => 'featuredonly',
  'setting-color_animation_speed' => '5',
  'setting-relationship_taxonomy' => 'category',
  'setting-relationship_taxonomy_entries' => '3',
  'setting-relationship_taxonomy_display_content' => 'none',
  'setting-single_slider_autoplay' => 'off',
  'setting-single_slider_speed' => 'normal',
  'setting-single_slider_effect' => 'slide',
  'setting-single_slider_height' => 'auto',
  'setting-more_posts' => 'infinite',
  'setting-entries_nav' => 'numbered',
  'setting-footer_text_left' => 'Ultra Ristorante is a skin, or instant demo site, created by Themify and using the Ultra theme as a base. There are many more Ultra skins to discover!',
  'setting-img_php_base_size' => 'large',
  'setting-global_feature_size' => 'blank',
  'setting-link_icon_type' => 'font-icon',
  'setting-link_type_themify-link-0' => 'image-icon',
  'setting-link_title_themify-link-0' => 'Twitter',
  'setting-link_img_themify-link-0' => 'https://themify.me/demo/themes/ultra-italian/wp-content/themes/themify-ultra/themify/img/social/twitter.png',
  'setting-link_type_themify-link-1' => 'image-icon',
  'setting-link_title_themify-link-1' => 'Facebook',
  'setting-link_img_themify-link-1' => 'https://themify.me/demo/themes/ultra-italian/wp-content/themes/themify-ultra/themify/img/social/facebook.png',
  'setting-link_type_themify-link-2' => 'image-icon',
  'setting-link_title_themify-link-2' => 'YouTube',
  'setting-link_img_themify-link-2' => 'https://themify.me/demo/themes/ultra-italian/wp-content/themes/themify-ultra/themify/img/social/youtube.png',
  'setting-link_type_themify-link-3' => 'image-icon',
  'setting-link_title_themify-link-3' => 'Pinterest',
  'setting-link_img_themify-link-3' => 'https://themify.me/demo/themes/ultra-italian/wp-content/themes/themify-ultra/themify/img/social/pinterest.png',
  'setting-link_type_themify-link-4' => 'font-icon',
  'setting-link_title_themify-link-4' => 'Twitter',
  'setting-link_ficon_themify-link-4' => 'fa-twitter',
  'setting-link_type_themify-link-5' => 'font-icon',
  'setting-link_title_themify-link-5' => 'Facebook',
  'setting-link_ficon_themify-link-5' => 'fa-facebook',
  'setting-link_type_themify-link-6' => 'font-icon',
  'setting-link_title_themify-link-6' => 'YouTube',
  'setting-link_ficon_themify-link-6' => 'fa-youtube',
  'setting-link_type_themify-link-7' => 'font-icon',
  'setting-link_title_themify-link-7' => 'Pinterest',
  'setting-link_ficon_themify-link-7' => 'fa-pinterest',
  'setting-link_field_ids' => '{"themify-link-0":"themify-link-0","themify-link-1":"themify-link-1","themify-link-2":"themify-link-2","themify-link-3":"themify-link-3","themify-link-4":"themify-link-4","themify-link-5":"themify-link-5","themify-link-6":"themify-link-6","themify-link-7":"themify-link-7"}',
  'setting-link_field_hash' => '8',
  'setting-page_builder_is_active' => 'enable',
  'setting-page_builder_animation_appearance' => 'none',
  'setting-page_builder_animation_parallax_bg' => 'none',
  'setting-page_builder_animation_scroll_effect' => 'none',
  'setting-page_builder_animation_sticky_scroll' => 'none',
  'setting-page_builder_expiry' => '2',
  'skin' => 'ristorante',
  'import_images' => 'on',
);
themify_set_data( $themify_data );
$theme = get_option( 'stylesheet' );
$theme_mods = array (
  0 => false,
  'custom_css_post_id' => -1,
  'sidebars_widgets' => 
  array (
    'time' => 1568774710,
    'data' => 
    array (
      'wp_inactive_widgets' => 
      array (
      ),
      'sidebar-main' => 
      array (
        0 => 'search-2',
        1 => 'recent-posts-2',
        2 => 'recent-comments-2',
        3 => 'archives-2',
        4 => 'categories-2',
        5 => 'meta-2',
      ),
      'sidebar-alt' => 
      array (
      ),
      'social-widget' => 
      array (
      ),
      'footer-social-widget' => 
      array (
      ),
      'header-widget-1' => 
      array (
      ),
      'header-widget-2' => 
      array (
      ),
      'header-widget-3' => 
      array (
      ),
      'footer-widget-1' => 
      array (
      ),
      'footer-widget-2' => 
      array (
        0 => 'nav_menu-2',
      ),
      'footer-widget-3' => 
      array (
        0 => 'text-2',
      ),
      'footer-widget-4' => 
      array (
      ),
    ),
  ),
  'site-logo_image' => '{"stamp":1569014957943}',
  'site-tagline' => '{"stamp":1569014939960}',
);
update_option( "theme_mods_{$theme}", $theme_mods );
$menu_locations = array();
$menu = get_terms( "nav_menu", array( "slug" => "main-navigation" ) );
if( is_array( $menu ) && ! empty( $menu ) ) $menu_locations["main-nav"] = $menu[0]->term_id;
set_theme_mod( "nav_menu_locations", $menu_locations );



}
