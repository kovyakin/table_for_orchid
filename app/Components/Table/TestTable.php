<?php
/*
 * MIT License
 * Copyright (c) 2024 Kovyakin Dmitry kdv-1974@mail.ru
 */

/*
  |--------------------------------------------------------------------------
  | private static bool $useApi = false;
  |--------------------------------------------------------------------------
  | @var bool
  | @set useApi for get data from Api
  | recomented
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |  public static array $apiQuery = [
  |     'url' => '/user', //string; url get
  |      'method' => 'GET', //string;  method
  |      'paginate' => false, //bool; use paginate
  |      'count_paginate' => 5, //number; value = Model:: paginate in api !!!
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | use apiQuery to get data from Api
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |  public static array $apiQuery = [
  |     'url' => '/user', //string; url get
  |      'method' => 'GET', //string;  method
  |      'paginate' => false, //bool; use paginate
  |      'count_paginate' => 5, //number; value = Model:: paginate in api !!!
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | use apiQuery to get data from Api
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |   protected static bool $show_index = true;
  |--------------------------------------------------------------------------
  | @var bool
  | @Use show_index Set true to show index of item
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static bool $alternating = false;
  |--------------------------------------------------------------------------
  | @var bool
  | @Use alternating prop to color alternating (even and odd) rows.
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static bool $border_cell = true;
  |--------------------------------------------------------------------------
  | @var bool
  | @Use border-cell  set true to show borderof header item and body item
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static bool $no_hover = false;
  |--------------------------------------------------------------------------
  | @var bool
  | @Use no_hover Set to true to forbidden change color when hovering table row
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |      protected static array $direction = [
  |      'header_text_direction' => "center",
  |      'body_text_direction' => "left"
  |  ];
  |--------------------------------------------------------------------------
  | @var array|string[]
  | @Use direction - Text direction of header item
  | avilable 'left' | 'center' | 'right'
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static string $font_size_header = '14px';
  |--------------------------------------------------------------------------
  | @var string
  | Set font-size to header table
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |      protected static string $font_size_body = '12px';
  |--------------------------------------------------------------------------
  | @var string
  | Set font-size to body table
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |      protected static string $body_row_background_color = '';
  |--------------------------------------------------------------------------
  | @var string
  | Set color-font to body table, example #e1e1e1
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |       protected static array $style_table = [
  |
  |     //        // EXAMPLE
  |     'easy_table_border' => '1px solid #445269',
  |    'easy_table_row_border' => '1px solid #445269',
  |
  |
  |      'easy_table_header_font_size' => '14px',
  |      'easy_table_header_height' => '50px',
  |      'easy_table_header_font_color' => '#c1cad4',
  |      'easy_table_header_background_color' => '#2d3a4f',
  |
  |      'easy_table_header_item_padding' => '10px 15px',
  |
  |      'easy_table_body_even_row_font_color' => '#fff',
  |      'easy_table_body_even_row_background_color' => ' #4c5d7a',
  |
  |      'easy_table_body_row_font_color' => '#c0c7d2',
  |      'easy_table_body_row_background_color' => '#2d3a4f',
  |      'easy_table_body_row_height' => '50px',
  |      'easy_table_body_row_font_size' => '14px',
  |
  |      'easy_table_body_row_hover_font_color' => '#2d3a4f',
  |      'easy_table_body_row_hover_background_color' => '#eee',
  |
  |      'easy_table_body_item_padding' => '10px 15px',
  |
  |      'easy_table_footer_background_color' => '#2d3a4f',
  |      'easy_table_footer_font_color' => '#c0c7d2',
  |      'easy_table_footer_font_size' => '14px',
  |      'easy_table_footer_padding' => '0px 10px',
  |      'easy_table_footer_height' => '50px',
  |
  |      'easy_table_rows_per_page_selector_width' => '70px',
  |      'easy_table_rows_per_page_selector_option_padding' => '10px',
  |      'easy_table_rows_per_page_selector_z_index' => '1',
  |
  |      'easy_table_scrollbar_track_color' => '#2d3a4f',
  |      'easy_table_scrollbar_color' => '#2d3a4f',
  |      'easy_table_scrollbar_thumb_color' => '#4c5d7a',
  |      'easy_table_scrollbar_corner_color' => '#2d3a4f',
  |
  |     'easy_table_loading_mask_background_color' => '#2d3a4f',
  |  ];
  |--------------------------------------------------------------------------
  | @var array|string[]
  |      @Use $style_table for set own styles
  |   * 'easy_table_border' => '1px solid #e0e0e0', //default
  |   * 'easy_table_row_border' => '1px solid #e0e0e0',//default
  |   * 'easy_table_header_font_size' => '12px',//default
  |   * 'easy_table_header_height' => '36px',//default
  |   * 'easy_table_header_font_color' => '#373737',//default
  |   * 'easy_table_header_background_color' => '#fff',//default
  |   * 'easy_table_header_item_padding' => '0px 10px',//default
  |   * 'easy_table_body_row_height' => '36px',//default
  |   * 'easy_table_body_row_font_size' => '12px',//default
  |   * 'easy_table_body_row_font_color' => '#212121',//default
  |   * 'easy_table_body_row_background_color' => '#fff',//default
  |   * 'easy_table_body_row_hover_font_color' => '#212121',//default
  |   * 'easy_table_body_row_hover_background_color' => '#eee',//default
  |   * 'easy_table_body_even_row_font_color' => '#373737',//default
  |   * 'easy_table_body_even_row_background_color' => '#fff',//default
  |   * 'easy_table_body_item_padding' => '0px 10px',//default
  |   * 'easy_table_footer_background_color' => '#fff',//default
  |   * 'easy_table_footer_font_color' => '#212121',//default
  |   * 'easy_table_footer_font_size' => '12px',//default
  |   * 'easy_table_footer_padding' => '0px 5px',//default
  |   * 'easy_table_footer_height' => '36px',//default
  |   * 'easy_table_rows_per_page_selector_width' => 'auto',//default
  |   * 'easy_table_rows_per_page_selector_option_padding' => '5px',//default
  |   * 'easy_table_rows_per_page_selector_z_index' => 'auto',//default
  |   * 'easy_table_message_font_color' => '#212121',//default
  |   * 'easy_table_message_font_size' => '12px',//default
  |   * 'easy_table_message_padding' => '20px',//default
  |   * 'easy_table_loading_mask_background_color' => '#fff',//default
  |   * 'easy_table_loading_mask_opacity' => '0.5',//default
  |   * 'easy_table_scrollbar_track_color' => '#fff',//default
  |   * 'easy_table_scrollbar_color' => '#fff',//default
  |   * 'easy_table_scrollbar_thumb_color' => '#c1c1c1',//default
  |   * 'easy_table_scrollbar_corner_color' => '#fff',//default
  |   * 'easy_table_buttons_pagination_border' => '1px solid #e0e0e0',//default
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | protected static bool $buttons_pagination = true;
  |--------------------------------------------------------------------------
  | @var bool
  |  @Use buttons_pagination By default, you can only use prev and next buttons to navigate. But
  | if you set the value to true, Seven visible page buttons will be generated automatically to help you navigate
  | much easier
  |
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |  protected static bool $show_block_search = true;
  |--------------------------------------------------------------------------
  | @var bool
  |  @Use show_block_search to show this block
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |  protected static bool $button_add = true;
  |--------------------------------------------------------------------------
  | @var bool
  |  @Use button add record
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |  protected static bool $useItemSelected = true;
  |--------------------------------------------------------------------------
  | @var bool
  | use useItemSelected to selected items
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | protected static bool $useRating = true;
  |--------------------------------------------------------------------------
  | @var bool
  | use useRating customizable component for star ratings.
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | protected static array $propsRating = [
  |    'starSize' => 16,
  |      'starColor' => '#ff9800',
  |      'inactiveColor' => '#333',
  |      'numberOfStars' => 5,
  |      'disableClick' => false,
  |      'customSvg' => '',
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | use useRating customizable component for star ratings.
  | starSize    This is the height and width of the stars in pixels; Number ; default   32
  | starColor    This is the color of the stars when active ;   String ; default  #ff9800
  | inactiveColor    This is the color of the stars when inactive ;   String;   default #333
  | numberOfStars    Specifies the total number of stars displayed and the maximum rating;    Number;   String 5
  | disableClick    This is the option to disable click on the stars, use in conjunction with the showControl
  | Prop;    Boolean ;   default false
  | customSvg    Provides an option for using a custom SVG icon for the star rating ;   Component;
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static array $props = [
  |      'table_min_height' => 18,
  |      //num; Min height of table (table header and table body, without footer)
  |      'table_height' => null,
  |      // number | null ;Height of table (table header and table body, without footer)
  |      'table_class_name' => 'customize-table',
  |      // preset customized table styles
  |      'show_index_symbol' => '#',
  |      //Text of index column header when $show_index is true
  |      'rows_per_page_message' => 'rows per page:',
  |      //Rows per page message
  |      'rows_items' => [25, 50, 100],
  |      //A number array of rows-per-page, working as the options of rows per page
  |      // selector
  |      'rows_per_page' => 25,
  |      //num; Rows of items to display in per page
  |      'rows_of_page_separator_message' => 'of',
  |      //Rows of page separator message. e.g. 1-5 of 5
  |      'must_sort' => false,
  |      //If true then one can not disable sorting, it will always switch between ascending and
  |      // descending
  |      'index_column_width' => 20,
  |      //num; Width of index column.
  |      'hide_rows_per_page' => false,
  |      //boolean; Set to true to hide rows per page
  |      'hide_footer' => false,
  |      //boolean; Set true to hide native footer of vue3-easy-data-table.
  |      'filter_options' => null,
  |      //FilterOption[]; In the future
  |      'fixed_index' => false,
  |      //boolean; Fixed index column to the left side of table.
  |      'fixed_header' => false,
  |      //boolean; Fixed header to top of table. NOTE: Does not work in IE11
  |      'fixed_expand' => false,
  |      //boolean; Fixed expand column to the left side of table.In the future
  |      'fixed_checkbox' => false,
  |      //boolean; Fixed checkbox column to the left side of table.
  |      'expand_column_width' => 36,
  |      //number; Width of expand column. In the future
  |      'empty_message' => 'No Available Data',
  |      //string; Message to display when there is no data in table
  |      'current_page' => 1,
  |      //number; Initial current page. With use Api
  |      'checkbox_column_width' => null,
  |      //number; Width of checkbox column
  |      'theme_color' => '#07bf9b',
  |      // Use theme-color prop to customize color of active checkbox, active option of rows selector, loading
  |        animation and active pagination button.
  |      'sortBy' => 'id',
  |
  |      'sortType' => 'asc'
  |
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | props to fine-tune the table
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static array $block_search = [
  |      'text_search_field' => 'search field',
  |      'text_search_value' => 'search value',
  |      'text_search_default' => 'all',
  |      'style_div_search' => '',
  |      'style_search_field' => '',
  |      'style_search_field_select' => '',
  |      'style_search_value' => '',
  |      'style_search_value_input' => '',
  |      //                          example
  |      //        'style_div_search'=>'font-size:10px; background-color:red; color:blue;',
  |      //        'style_search_field'=>'font-size:20px; background-color:red; padding: 10px',
  |      //        'style_search_field_select'=>'font-size:10px;',
  |      //        'style_search_value' => 'font-size:20px;background-color:red;padding: 1px',
  |      //        'style_search_value_input' => 'font-size:20px;background-color:white;color:blue',
  |      //        'text_search_field'=>'Поиск по полю',
  |      //        'text_search_value'=>'Искать значение',
  |      //        'text_search_default'=>'Везде',
  |  ];
  |--------------------------------------------------------------------------
  | @var array|string[]
  | @Use block_search to tune the search block in the table
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |      protected static array $style_button_add = [
  |      'text_button_add' => 'Добавить',
  |      'style_button_add' => '',
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | @Use style button add
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |     protected static array $block_operation = [
  |      'url' => '/user', //string; url  for operation
  |      'is_show_eyes' => true, //boolean; Show icon in table operation
  |      'is_show_edit' => true, //boolean; Show icon in table operation
  |      'is_show_delete' => true, //boolean; Show icon in table operation
  |      'size_icon_operation' => 16,
  |      'icon_color' => 'currentColor' // string; set color icon, example: red or #67c23a
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  | use block_operation for show|edit|delete rows
  | the method must contain the answer ['success' => true,'total' => $total]
  | where Total is the number of records in the model
  | example:
  | $total = User::count();
  | return ['success' => true,'total' => $total];
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |        protected static bool $allowGroupDelete = true;
  |--------------------------------------------------------------------------
  | @var bool
  | use allowGroupDelete allow bulk deletion of records if checkbox is present
  | example: Route::delete('/user/delete/selected', [UserController::class, 'destroySelected']);
  | url should always be like this !
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |         protected static bool $expanded = true;
  |--------------------------------------------------------------------------
  | @var bool
  | use expanded to customize the expanded row
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |          protected static bool $useToast = true;
  |--------------------------------------------------------------------------
  | @var array
  | @Use columns Now, you can set column width to a specfic value.Table header items
  | ['text' => "Image", 'value' => "image",'width' => '100'], - for images only
  | 'sortable' => false - recomented!!!
  |  checkbox max = 3.
  | ['text' => "is Active", 'value' => "checkbox1"],
  | ['text' => "is Active", 'value' => "checkbox2"],
  | ['text' => "is Active", 'value' => "checkbox3"],
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |           protected static array $modal_dialog = [
  |      'modal_add' => [
  |          'header' => 'Add User',
  |          'style' => [
  |              'width' => '75rem',
  |          ],
  |          'button_cancel' => [
  |              'label' => 'Cancel',
  |              'severity' => 'secondary' //  "info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |          'button_submit' => [
  |              'label' => 'Send',
  |              'severity' => 'success' //  "info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |      ],
  |      'modal_show' => [
  |          'header' => 'Show User',
  |          'style' => [
  |              'width' => '50rem',
  |          ],
  |          'button_cancel' => [
  |              'label' => 'Cancel',
  |              'severity' => 'secondary' // "info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |      ],
  |      'modal_edit' => [
  |         'header' => 'Edit User',
  |          'style' => [
  |             'width' => '75rem',
  |          ],
  |          'button_cancel' => [
  |              'label' => 'Cancel',
  |              'severity' => 'secondary' //"info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |          'button_submit' => [
  |              'label' => 'Send',
  |              'severity' => 'success' //  "info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |      ],
  |      'modal_confirm_delete' => [
  |          'header' => 'Delete User?',
  |          'text' => 'Are you sure you want to delete this user?',
  |          'selected_delete_text' => 'Are you sure you want to delete many user?',
  |          'style' => [
  |              'width' => '25rem',
  |          ],
  |          'button_cancel' => [
  |              'label' => 'Cancel',
  |              'severity' => 'secondary' //"info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |          'button_submit' => [
  |              'label' => 'Send',
  |              'severity' => 'warn' //  "info" | "success" | "warn" | "secondary" | "contrast"
  |          ],
  |      ],
  |  ];
  |--------------------------------------------------------------------------
  | @var @var array|array[]
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |           protected static array $columns = [
  |     ['text' => "ID", 'value' => "id", 'sortable' => true, 'width' => 20],
  |//         ['text' => "Image", 'value' => "image"],
  |      ['text' => "is Active", 'value' => "checkbox1", 'style' => 'red', 'type' => 'slider'],
  |    ['text' => "Имя", 'value' => "name", 'sortable' => true],
  |      ['text' => "Email", 'value' => "email", 'sortable' => true],
  |      ['text' => "Rating", 'value' => "rating", 'sortable' => true],
  |//         ['text' => "is True", 'value' => "checkbox2",'type'=>'slider'],
  |//         ['text' => "Email verified", 'value' => "email_verified_at", 'sortable' => true],
  |//         ['text' => "is Active", 'value' => "check",'type'=>'checkbox'],
  |//         ['text' => "Created at", 'value' => "created_at", 'sortable' => true],
  |//         ['text' => "is Bob", 'value' => "checkbox3"],
  |//         ['text' => "Updated at", 'value' => "updated_at", 'sortable' => true],
  |      ['text' => "Operation", 'value' => "operation"], // for edit or delete record in table. value'=> "operation" -
  |      // only for edit  or delete. For operation require id !!!
  |  ];
  |--------------------------------------------------------------------------
  | @var array
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |          protected static bool $column_operation = true;
  |--------------------------------------------------------------------------
  | @var bool
  | use column_operation for edit or delete record in table
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |        public static ResourceCollection $items;
  |--------------------------------------------------------------------------
  | @var ResourceCollection
  | @Use items Table body items
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  |           public static function render(): View
  |  {
  |
  |      if (empty(self::$apiQuery)) {
  |          if (!empty(self::$useApi)) {
  |              self::$useApi = false;
  |          }
  |      }
  |
  |      return self::view();
  |  }
  |--------------------------------------------------------------------------
  | @return View
  | @Use render function table
  */

declare(strict_types=1);

namespace App\Components\Table;

use Illuminate\Contracts\View\View;
use Kovyakin\Components\app\Interfaces\Components;
use Kovyakin\Components\app\Table\Table;
use Kovyakin\Components\app\Traits\ClassName;
use Kovyakin\Components\app\Traits\UserTableToken;

class TestTable extends Table implements Components

{
    use ClassName;
    use \Kovyakin\Components\app\Traits\RenderTable;
    use UserTableToken;

    private static bool $useApi = true;
    protected static bool $useToast = true;
    protected static bool $button_add = true;
    protected static array $style_button_add = [
        'text_button_add' => 'Добавить',
        'style_button_add' => '',
    ];
    public static array $apiQuery = [
        'url' => '/user', //string; url get
        'method' => 'GET', //string;  method
        'paginate' => true, //bool; use paginate
        'count_paginate' => 12, //number; value = Model:: paginate in api !!!
    ];
    protected static bool $column_operation = true;
    protected static array $block_operation = [
//        'url' => '/user', //string; url  for operation
        'is_show_eyes' => true, //boolean; Show icon in table operation
        'is_show_edit' => true, //boolean; Show icon in table operation
        'is_show_delete' => true, //boolean; Show icon in table operation
        'size_icon_operation' => 16,
        'icon_color' => 'currentColor' // string; set color icon, example: red or #67c23a
    ];

    protected static array $direction = [
        'header_text_direction' => "center",
        'body_text_direction' => "left"
    ];

    protected static bool $show_block_search = true;
    protected static array $columns = [
        ['text' => "Пользователь", 'value' => "name", 'sortable' => true, 'fixed' => true, 'width' => 20],
//        ['text' => "Action", 'value' => "operation"],
//        ['text' => "Name", 'value' => "name", 'sortable' => true],
//        ['text' => "Email", 'value' => "email", 'sortable' => true],
//        ['text' => "Created at", 'value' => "created_at", 'sortable' => true],

    ];

    public static function render(): View
    {
        for ($i = 1; $i <= 31; $i++) {
            self::$columns[$i] = ['text' => $i, 'value' => "date" . $i, 'width' => 5];
        }
        self::$columns[32] = ['text' => "Action", 'value' => "operation", 'width' => 20];
        if (empty(self::$apiQuery)) {
            if (!empty(self::$useApi)) {
                self::$useApi = false;
            }
        }

        return self::view();
    }
}

//.block.hide :not([sortable]) :not(.header-text), .none :not([sortable]) :not(.header-text) {
//    display: none
//}
