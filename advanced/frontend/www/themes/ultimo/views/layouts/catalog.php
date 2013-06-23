<?php $this->beginContent('//layouts/main'); ?><div class="main-container col2-left-layout" style="">    <div class="main container show-bg" style="">        <?php if (isset($this->breadcrumbs)): ?>            <?php            $this->widget('zii.widgets.CBreadcrumbs', array(                'links' => $this->breadcrumbs,                'htmlOptions' => array('class' => 'grid-full breadcrumbs'),                'separator' => NULL,                'tagName' => 'div', // will change the container to ul                'activeLinkTemplate' => '<li><a href="{url}">{label}</a><span>/ </span></li>', // will generate the clickable breadcrumb links                 'inactiveLinkTemplate' => '<li class="category"><strong>{label}</strong></li></ul>', // will generate the current page url : <li>News</li>                'homeLink' => '<ul><li class="home"><a href="' . Yii::app()->homeUrl . '">'.F::t('Home').'</a><span>/ </span></li>' // will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>            ));            ?><!-- breadcrumbs --><?php endif ?>        <div class="preface grid-full in-col1"></div>        <div class="col-main grid12-9 grid-col2-main in-col2">           <?php echo $content ?>        </div>        <div class="col-left sidebar grid12-3 grid-col2-sidebar in-sidebar" style="">            <div class="block block-vertnav " style="">                <?php $this->widget('widgets.ultimo.WCategory') ?>            </div>            <div class="block block-layered-nav">                <div class="block-title">                    <strong><span>Shop By</span></strong>                </div>                <div class="block-content">                    <p class="block-subtitle">Shopping Options</p>                    <dl id="narrow-by-list">                        <dt class="odd">Price</dt>                        <dd class="odd">                            <ol>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?price=-100"><span class="price">$0.00</span> - <span class="price">$99.99</span></a>                                    (6)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?price=100-"><span class="price">$100.00</span> and above</a>                                    (6)                                </li>                            </ol>                        </dd>                        <dt class="even">Manufacturer</dt>                        <dd class="even">                            <ol>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?manufacturer=12">DummyBrand</a>                                    (9)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?manufacturer=13">SampleLogo</a>                                    (4)                                </li>                            </ol>                        </dd>                        <dt class="odd">Color</dt>                        <dd class="odd">                            <ol>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?color=16">White</a>                                    (9)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?color=15">Black</a>                                    (1)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?color=14">Blue</a>                                    (3)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?color=17">Red</a>                                    (2)                                </li>                            </ol>                        </dd>                        <dt class="last even">Size</dt>                        <dd class="last even">                            <ol>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?size=3">S</a>                                    (6)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?size=4">M</a>                                    (6)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?size=5">L</a>                                    (4)                                </li>                                <li>                                    <a href="http://ultimo.infortis-themes.com/demo/default/women.html?size=6">XL</a>                                    (4)                                </li>                            </ol>                        </dd>                    </dl>                    <script type="text/javascript">decorateDataList('narrow-by-list')</script>                </div>            </div>            <h3 class="section-title padding-right">Brands</h3>            <div class="brand-slider-wrapper itemslider-wrapper">                <div class="nav-wrapper gen-slider-arrows1 gen-slider-arrows1-pos-top-right"><ul class="direction-nav"><li><a class="prev disabled" href="http://ultimo.infortis-themes.com/demo/default/women.html#">Previous</a></li><li><a class="next" href="http://ultimo.infortis-themes.com/demo/default/women.html#">Next</a></li></ul></div>                <div class="brand-slider itemslider itemslider-horizontal">                    <!-- end: slides -->                    <div class="viewport" style="overflow: hidden; position: relative;"><ul class="slides products-grid" style="width: 1600%; margin-left: 0px;">                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Brandissimi" title="Click to see more products from Brandissimi">                                    <img src="<?php echo F::themeUrl() ?>/media/brandissimi.png" alt="Brandissimi">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Company" title="Click to see more products from Company">                                    <img src="<?php echo F::themeUrl() ?>/media/company.png" alt="Company">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=DummyBrand" title="Click to see more products from DummyBrand">                                    <img src="<?php echo F::themeUrl() ?>/media/dummybrand.png" alt="DummyBrand">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Manufacturer" title="Click to see more products from Manufacturer">                                    <img src="<?php echo F::themeUrl() ?>/media/manufacturer.png" alt="Manufacturer">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Publisher" title="Click to see more products from Publisher">                                    <img src="<?php echo F::themeUrl() ?>/media/publisher.png" alt="Publisher">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=SampleLogo" title="Click to see more products from SampleLogo">                                    <img src="<?php echo F::themeUrl() ?>/media/samplelogo.png" alt="SampleLogo">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Samsung" title="Click to see more products from Samsung">                                    <img src="<?php echo F::themeUrl() ?>/media/samsung.png" alt="Samsung">                                </a>                            </li>                            <li class="item" style="width: 225px; float: left; display: block;">                                <a href="http://ultimo.infortis-themes.com/demo/default/catalogsearch/result/?q=Apple" title="Click to see more products from Apple">                                    <img src="<?php echo F::themeUrl() ?>/media/apple.png" alt="Apple">                                </a>                            </li>                        </ul></div></div> <!-- end: itemslider -->            </div> <!-- end: brand-slider-wrapper -->            <script type="text/javascript">            //<![CDATA[                jQuery(function($) {                    $('.brand-slider-wrapper .itemslider').flexslider({                        namespace: "",                        animation: "slide",                        animationLoop: 0,                        easing: "easeInOutQuint",                        useCSS: false,                        slideshow: false,                        animationSpeed: 500,                        pauseOnHover: 1,                        controlNav: false,                        controlsContainer: ".brand-slider-wrapper .nav-wrapper",                        itemWidth: 188,                        minItems: 1,                        maxItems: 1,                        move: 0                    })                            .data("showItems", 1)                            ; //IMPORTANT: don't remove semicolon!                });            //]]>            </script>            <div class="block block-list block-viewed">                <div class="block-title">                    <strong><span>Recently Viewed Products</span></strong>                </div>                <div class="block-content">                    <ol id="recently-viewed-items">                        <li class="item odd">                            <p class="product-name"><a href="http://ultimo.infortis-themes.com/demo/default/dress1.html">Sample Fashion Product</a></p>                        </li>                        <li class="item last even">                            <p class="product-name"><a href="http://ultimo.infortis-themes.com/demo/default/top1.html">Product with Variants</a></p>                        </li>                    </ol>                    <script type="text/javascript">decorateList('recently-viewed-items');</script>                </div>            </div>            <script type="text/javascript">            //<![CDATA[                function validatePollAnswerIsSelected()                {                    var options = $$('input.poll_vote');                    for (i in options) {                        if (options[i].checked == true) {                            return true;                        }                    }                    return false;                }            //]]>            </script>            <div class="block block-poll">                <div class="block-title">                    <strong><span>Community Poll</span></strong>                </div>                <form id="pollForm" action="http://ultimo.infortis-themes.com/demo/default/poll/vote/add/poll_id/1/" method="post" onsubmit="return validatePollAnswerIsSelected();">                    <div class="block-content">                        <p class="block-subtitle">What is your Magento version</p>                        <ul id="poll-answers">                            <li class="odd">                                <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">                                <span class="label"><label for="vote_1">1.7.x</label></span>                            </li>                            <li class="even">                                <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">                                <span class="label"><label for="vote_2">1.6.x</label></span>                            </li>                            <li class="odd">                                <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">                                <span class="label"><label for="vote_3">1.5.x</label></span>                            </li>                            <li class="even">                                <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">                                <span class="label"><label for="vote_4">1.4.x</label></span>                            </li>                            <li class="last odd">                                <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">                                <span class="label"><label for="vote_5">1.3.x</label></span>                            </li>                        </ul>                        <script type="text/javascript">decorateList('poll-answers');</script>                        <div class="actions">                            <button type="submit" title="Vote" class="button"><span><span>Vote</span></span></button>                        </div>                    </div>                </form>            </div>            <div class="block block-tags">                <div class="block-title">                    <strong><span>Popular Tags</span></strong>                </div>                <div class="block-content">                    <ul class="tags-list">                        <li><a href="http://ultimo.infortis-themes.com/demo/default/tag/product/list/tagId/6/" style="font-size:75%;">Configurable</a></li>                        <li><a href="http://ultimo.infortis-themes.com/demo/default/tag/product/list/tagId/4/" style="font-size:75%;">Fashion</a></li>                        <li><a href="http://ultimo.infortis-themes.com/demo/default/tag/product/list/tagId/7/" style="font-size:75%;">Sell downloads</a></li>                        <li><a href="http://ultimo.infortis-themes.com/demo/default/tag/product/list/tagId/3/" style="font-size:145%;">Sexy clothes</a></li>                        <li><a href="http://ultimo.infortis-themes.com/demo/default/tag/product/list/tagId/5/" style="font-size:110%;">Super set</a></li>                    </ul>                    <div class="actions">                        <a href="http://ultimo.infortis-themes.com/demo/default/tag/list/">View All Tags</a>                    </div>                </div>            </div>            <div class="block">                <div class="block-title">                    <strong><span>Custom Block - Bottom</span></strong>                </div>                <div class="block-content sample-block">                    <p>Custom CMS block displayed in the sidebar below the other blocks. Put your own content here.</p>                </div>                <div class="block-content sample-block">                    <p>There are many similar content placeholders across the store. All editable from admin panel.</p>                </div>            </div></div>        <div class="postscript grid-full in-col1"></div>    </div></div><?php $this->endContent(); ?>