<?php

use App\Models\Category;

class Helper{

    public static function defaultLogo(){
        return asset('backend/assets/images/logo.svg');
    }
    public static function defaultImage(){
        return asset('backend/assets/images/default-img.png');
    }

    public static function defaultFavicon(){
        return asset('frontend/images/favicon.jpg');
    }

    public static function userDefaultImage(){
        return asset('frontend/img/avatar/avatar01.jpg');
    }

    public static function getAllCategoryWithChild(){
        $category=new Category();
        $menu=$category->getAllCategoryWithChild();
        if($menu){
            ?>
            <?php
            foreach($menu as $cat_info){
                if($cat_info->childrenCategories->count()>0){
                    ?>
                    <li class="has-megamenu">
                        <a href="<?php echo route('product.category',$cat_info->slug); ?>">  <?php echo ucfirst($cat_info->title) ?> <i
                                class="fa fa-angle-right angle-right angle-right"></i>
                        </a>
                        <?php
                            if($cat_info->childrenCategories->count()>0){
                                ?>
                                    <div class="mega-sub-menu">

                                    <ul>
                                        <?php

                                        foreach($cat_info->childrenCategories as $sub_menu){
                                            ?>
                                            <!-- Television -->
                                            <li class="has-submenu">
                                                <a href="<?php echo route('product.subcategory',[$cat_info->slug,$sub_menu->slug]) ?>"><?php echo ucfirst($sub_menu->title) ?>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>

                                    }
                                    ?>
                                </div>
                                <?php
                            }
                        ?>

                    </li>
                <?php
                }
                else{
                    ?>
                    <li class="has-megamenu">
                        <a href="<?php echo route('product.category',$cat_info->slug); ?>"> <?php echo ucfirst($cat_info->title); ?>
                        </a>
                    </li>

                    <?php
                }
            }
            ?>
<?php

        }
    }


}

if(!function_exists('get_setting')){
    function get_setting($key){
        return \App\Models\Setting::value($key);
    }
}

if(!function_exists('get_section_value')){
    function get_section_value($key){
        return \App\Models\Sectiontitle::value($key);
    }
}

