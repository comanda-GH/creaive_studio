<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 25.03.15
 * Time: 13:48
 */?>
<!--content-->
<footer class="id<?php echo get_the_id()?>">
    <ul class="footer">
        <li>
            <img src="<?php bloginfo('template_url'); ?>/images/logo_foot.png" alt="Творча майстерня"/>
            <ul class="contacts">
                <li><span>Проект “Відкрий в собі зірку”</span></li>
                <li><a href="tel:+380472636424">тел. 0472636424</a></li>
                <li><a href="tel:+380673892551">моб. 0673892551</a></li>
                <li><a href="mailto:youth-organization@mail.ru">e-mail youth-organization@mail.ru</a></li>
            </ul>
        </li>
        <!--<li>
            <?php /*wp_nav_menu(array('theme_location'=>'menu',
            'menu_class'=>'nav'))*/?>
        </li>-->
        <li>
            <ul class="social">
                <li>
                    <span class="spilka">Спілка дитячих та юнацьких організацій Черкащини</span>
                </li>
                <li>
                    <ul>
                        <li class="facebook">
                            <a href="http://www.facebook.com">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li class="vk">
                            <a href="http://www.vk.com">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                        <li class="spilka-logo">
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/spilka.png" alt="Спілка"/>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="copyright">Copyright &copy; 2015-<?php echo date('Y');?>. All Rights Reserved.</span>
                </li>
            </ul>
        </li>
    </ul>
</footer>
<?php wp_footer();?>
</body>
</html>