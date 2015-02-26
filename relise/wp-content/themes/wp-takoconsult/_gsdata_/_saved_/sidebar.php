<!-- sidebar -->
<div id="left">
	<?php if ( is_active_sidebar('widgetarea1') ) : ?>
		<?php dynamic_sidebar( 'widgetarea1' ); ?>
	<?php else : ?>

		<ul>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/legal/" class="class_other ">Юридический консалтинг</a>
	        </li>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/accounting-consulting-outsourcing/" class="class_other ">Бухгалтерский аутсорсинг</a>
	        </li>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/audit/" class="class_other one-line">Аудит</a>
	        </li>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/tax-advice/" class="class_other ">Налоговый консалтинг</a>
	        </li>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/hr-office-work/" class="class_other ">Кадровый консалтинг</a>
	        </li>
	        <li style="list-style-type:none"><a href="http://www.takoconsult.ru/services/registration/" class="class_other ">Корпоративные процедуры</a>
	        </li>
        </ul>

    <?php endif; ?>
</div>
<!-- /sidebar -->
