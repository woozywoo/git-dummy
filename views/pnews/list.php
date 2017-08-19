<?php
use yii\helpers\Html;
?>
 
<div class="rt-grid-8 ">
    <div class="rt-block">
        <div id="rt-mainbody">
            <div class="component-content">
                <!-- Start K2 Item Layout -->
                <span id="startOfPageId82"></span>
                <div id="k2Container" class="itemView">
                    <!-- Plugins: BeforeDisplay -->
                    <!-- K2 Plugins: K2BeforeDisplay -->
                    <!-- Item Header START -->
                    <div class="itemHeader">
                        <!-- Item title -->
                        <h2 class="itemTitle">
                            Все новости
                        </h2>
                        <!-- Item Rating -->
                        <!-- Item Author -->
                        <!-- Item category -->
                        <!-- Date created -->
                        <!-- Anchor link to comments below - if enabled -->
                    </div>
                    <!-- Item Header END -->
                    <!-- Plugins: AfterDisplayTitle -->
                    <!-- K2 Plugins: K2AfterDisplayTitle -->
                    <!-- Item Body START-->
                    <div class="itemBody">


                        <?= \yii\widgets\ListView::widget([
                            'dataProvider'=>$dataProvider,
                            'pager'=>[
                                'hideOnSinglePage'=>true,
                                'disabledPageCssClass'=>'num',
                                'lastPageCssClass'=>'pagenav',
                                'nextPageCssClass'=>'pagenav',
                                'activePageCssClass'=>'active current',
                                'linkOptions'=>['class'=>'pagenav'],
                            ],
                            'itemView'=>'_item',
                            'layout' => '{items}<div class="k2Pagination">{pager}</div>',
                        ])?>
                        <div class="clr"></div>
                    </div>
                    <!-- Item Body END-->
                    <!-- Item Social Buttons -->
                    <!-- Social sharing -->
                    <div class="clr"></div>
                    <!-- Plugins: AfterDisplay -->
                    <!-- K2 Plugins: K2AfterDisplay -->
                    <div class="itemBackToTop">
                        <a class="k2Anchor" href="/joomla_45309/index.php/for-items/item/82-how-it-works#startOfPageId82">
                            back to top			</a>
                    </div>
                    <div class="clr"></div>
                </div>
                <!-- End K2 Item Layout -->
                <!-- JoomlaWorks "K2" (v2.6.6) | Learn more about K2 at http://getk2.org -->
            </div>
        </div>
    </div>
</div>

